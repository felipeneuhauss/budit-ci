<?php
// https://mattstauffer.co/blog/advanced-input-output-with-artisan-commands-tables-and-progress-bars-in-laravel-5.1
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Class responsible to generate a validate definition an messages to be copy and past into the controller
 *
 * Class GenerateValidation
 * @package App\Console\Commands
 */
class CustomValidation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:validation {tableName?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /*
         * 13 => {#602
    +"COLUMN_NAME": "is_avoiding_losses"
    +"COLUMN_TYPE": "enum('Sim','Não','Não se sabe')"
    +"IS_NULLABLE": "YES"
    +"Key": ""
    +"Default": null
    +"Extra": ""
  }
         */
        $this->info("Customizing validation");

        $tableName = $this->argument('tableName');

        $tableInfo = DB::select("SELECT *
                FROM information_schema.columns
                WHERE table_schema = '".env('DB_DATABASE', 'forge')."' AND table_name = '$tableName'");

        $validateReturnString =  "return Validator::make(Request::all(), [";
        $reservedColumns = array('id', 'updated_at', 'created_at', 'deleted_at');
        $validationDefinitionList = [];
        $validationMessages = "";
        $validationDefinitionString = "";

        foreach ($tableInfo as $columnInfo) {
            $validationDefinitionList = [];

            if (!in_array($columnInfo->COLUMN_NAME, $reservedColumns)) {

//                $name = $this->ask('Qual o nome do campo em português para a mensagem?');

                // Por tipo de campo
                if ($columnInfo->IS_NULLABLE == "NO") {
                    // 'fantasy_name.required'         => 'O campo Nome fantasia é obrigatório.',
                    $validationMessages .= "'$columnInfo->COLUMN_NAME.required' => 'O campo ".ucfirst($columnInfo->COLUMN_COMMENT). " é obrigatório', \n";
                    // 'name'                      => 'required|max:255',
                    $validationDefinitionList[] = "required";
                }

                if (strpos($columnInfo->COLUMN_TYPE, "varchar") !== false) {
                    $validationDefinitionList[] = "max:".get_numerics($columnInfo->COLUMN_TYPE)."";
                    $validationMessages .= "'$columnInfo->COLUMN_NAME.max' => 'O campo ".ucfirst($columnInfo->COLUMN_COMMENT). " deve ter no máximo ".get_numerics($columnInfo->COLUMN_TYPE)." caracteres', \n";
                }

                if (strpos($columnInfo->COLUMN_TYPE, "int") !== false) {
                    $validationDefinitionList[] = "integer";
                    $validationMessages .= "'$columnInfo->COLUMN_NAME.integer' => 'O campo ".ucfirst($columnInfo->COLUMN_COMMENT). " deve ser um número inteiro', \n";
                }

                if (strpos($columnInfo->COLUMN_TYPE, "timestamp") !== false) {
                    $validationDefinitionList[] = "date";
                    $validationMessages .= "'$columnInfo->COLUMN_NAME.date' => 'O campo ".ucfirst($columnInfo->COLUMN_COMMENT). " deve ser uma data válida', \n";
                }

                // Por nome de campo
                if (strpos($columnInfo->COLUMN_NAME, "email") !== false) {
                    $validationDefinitionList[] = "email";
                    $validationMessages .= "'$columnInfo->COLUMN_NAME.date' => 'O campo ".ucfirst($columnInfo->COLUMN_COMMENT). " deve ser um e-mail válido', \n";
                }

                if (count($validationDefinitionList)) {
                    $validationDefinitionString .= "'$columnInfo->COLUMN_NAME' => '".implode('|', $validationDefinitionList)."', \n";
                }
            }
        }
        $validateReturnString .= $validationDefinitionString . "],\n [ \n";

        $validateReturnString .= $validationMessages ."]);";

        dump($validateReturnString);exit;
        $this->info($validateReturnString);
    }
}
