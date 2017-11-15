<?php
/**
 * Created by PhpStorm.
 * User: felipeneuhauss
 * Date: 14/11/17
 * Time: 09:00
 */
namespace App\Helpers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class TransformerManager
{

    public static function collection($data, $transformer) {
        $fractal = new Manager();

        if ($data instanceof LengthAwarePaginator) {
            $data = $data->getCollection();
        }
        $resource = new Collection($data, $transformer);

        $dataTransformed = $fractal->createData($resource)->toArray();

        if ($data instanceof LengthAwarePaginator) {
            return $data->setCollection(collect(json_decode(json_encode($dataTransformed['data']), false)));
        }

        return json_decode(json_encode($dataTransformed['data']), false);
    }

    public static function item($object = null, $transformer) {

        $fractal = new Manager();

        if ($object) {

            if ($object instanceof Model) {
                $resource = new Item($object, $transformer);
            }

            $dataTransformed = $fractal->createData($resource)->toArray();

            if ($object instanceof Model) {
                return $dataTransformed['data'];
            }
            return json_decode(json_encode($dataTransformed['data']), false);
        }

        return json_encode([]);
    }

    /**
     * Method that receive a $_POST or $_GET array to be mapped like the database table
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public static function prepare(array $data, $transformer)
    {
        if (!$transformer) {
            throw new \Exception('You have to define at last one transforme to this repository '. __CLASS__);
        }
        $prepared = [];
        $arrayMap = array_flip($transformer->arrayMap);
        array_walk($arrayMap, function($val, $key) use ($data, &$prepared) {
            if (isset($data[$val])) {
                $prepared[$key] = $data[$val];
            }
        });
        return $prepared;
    }

}