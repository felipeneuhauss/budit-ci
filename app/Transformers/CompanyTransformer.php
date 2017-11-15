<?php
/**
 * Created by PhpStorm.
 * User: felipeneuhauss
 * Date: 29/03/17
 * Time: 14:58
 */
namespace App\Transformers;

class CompanyTransformer extends AbstractTransformer
{
    public function transform($item)
    {
        $row =  [
            'id' => $item->id,
            'name' => $item->name,
            'cnpj' => $item->document,
            'zip_code' => $item->zip_code,
            'address' => $item->address,
            'city' => $item->city,
            'state' => $item->city->state,
            'phone' => $item->phone,
            'email' => $item->email,
            'location' => $item->city ? $item->city->name . ' - '.$item->city->state->initials : null
        ];

        return $row;
    }
}