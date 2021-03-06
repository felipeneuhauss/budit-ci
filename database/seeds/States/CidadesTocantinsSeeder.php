<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesTocantinsSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cities')->insert([
        	['name' => 'Abreulândia', 'state_id' => 27],
            ['name' => 'Aguiarnópolis', 'state_id' => 27],
            ['name' => 'Aliança do Tocantins', 'state_id' => 27],
            ['name' => 'Almas', 'state_id' => 27],
            ['name' => 'Alvorada', 'state_id' => 27],
            ['name' => 'Ananás', 'state_id' => 27],
            ['name' => 'Angico', 'state_id' => 27],
            ['name' => 'Aparecida do Rio Negro', 'state_id' => 27],
            ['name' => 'Aragominas', 'state_id' => 27],
            ['name' => 'Araguacema', 'state_id' => 27],
            ['name' => 'Araguaçu', 'state_id' => 27],
            ['name' => 'Araguaína', 'state_id' => 27],
            ['name' => 'Araguanã', 'state_id' => 27],
            ['name' => 'Araguatins', 'state_id' => 27],
            ['name' => 'Arapoema', 'state_id' => 27],
            ['name' => 'Arraias', 'state_id' => 27],
            ['name' => 'Augustinópolis', 'state_id' => 27],
            ['name' => 'Aurora do Tocantins', 'state_id' => 27],
            ['name' => 'Axixá do Tocantins', 'state_id' => 27],
            ['name' => 'Babaçulândia', 'state_id' => 27],
            ['name' => 'Bandeirantes do Tocantins', 'state_id' => 27],
            ['name' => 'Barra do Ouro', 'state_id' => 27],
            ['name' => 'Barrolândia', 'state_id' => 27],
            ['name' => 'Bernardo Sayão', 'state_id' => 27],
            ['name' => 'Bom Jesus do Tocantins', 'state_id' => 27],
            ['name' => 'Brasilândia do Tocantins', 'state_id' => 27],
            ['name' => 'Brejinho de Nazaré', 'state_id' => 27],
            ['name' => 'Buriti do Tocantins', 'state_id' => 27],
            ['name' => 'Cachoeirinha', 'state_id' => 27],
            ['name' => 'Campos Lindos', 'state_id' => 27],
            ['name' => 'Cariri do Tocantins', 'state_id' => 27],
            ['name' => 'Carmolândia', 'state_id' => 27],
            ['name' => 'Carrasco Bonito', 'state_id' => 27],
            ['name' => 'Caseara', 'state_id' => 27],
            ['name' => 'Centenário', 'state_id' => 27],
            ['name' => 'Chapada da Natividade', 'state_id' => 27],
            ['name' => 'Chapada de Areia', 'state_id' => 27],
            ['name' => 'Colinas do Tocantins', 'state_id' => 27],
            ['name' => 'Colméia', 'state_id' => 27],
            ['name' => 'Combinado', 'state_id' => 27],
            ['name' => 'Conceição do Tocantins', 'state_id' => 27],
            ['name' => 'Couto de Magalhães', 'state_id' => 27],
            ['name' => 'Cristalândia', 'state_id' => 27],
            ['name' => 'Crixás do Tocantins', 'state_id' => 27],
            ['name' => 'Darcinópolis', 'state_id' => 27],
            ['name' => 'Dianópolis', 'state_id' => 27],
            ['name' => 'Divinópolis do Tocantins', 'state_id' => 27],
            ['name' => 'Dois Irmãos do Tocantins', 'state_id' => 27],
            ['name' => 'Dueré', 'state_id' => 27],
            ['name' => 'Esperantina', 'state_id' => 27],
            ['name' => 'Fátima', 'state_id' => 27],
            ['name' => 'Figueirópolis', 'state_id' => 27],
            ['name' => 'Filadélfia', 'state_id' => 27],
            ['name' => 'Formoso do Araguaia', 'state_id' => 27],
            ['name' => 'Fortaleza do Tabocão', 'state_id' => 27],
            ['name' => 'Goianorte', 'state_id' => 27],
            ['name' => 'Goiatins', 'state_id' => 27],
            ['name' => 'Guaraí', 'state_id' => 27],
            ['name' => 'Gurupi', 'state_id' => 27],
            ['name' => 'Ipueiras', 'state_id' => 27],
            ['name' => 'Itacajá', 'state_id' => 27],
            ['name' => 'Itaguatins', 'state_id' => 27],
            ['name' => 'Itapiratins', 'state_id' => 27],
            ['name' => 'Itaporã do Tocantins', 'state_id' => 27],
            ['name' => 'Jaú do Tocantins', 'state_id' => 27],
            ['name' => 'Juarina', 'state_id' => 27],
            ['name' => 'Lagoa da Confusão', 'state_id' => 27],
            ['name' => 'Lagoa do Tocantins', 'state_id' => 27],
            ['name' => 'Lajeado', 'state_id' => 27],
            ['name' => 'Lavandeira', 'state_id' => 27],
            ['name' => 'Lizarda', 'state_id' => 27],
            ['name' => 'Luzinópolis', 'state_id' => 27],
            ['name' => 'Marianópolis do Tocantins', 'state_id' => 27],
            ['name' => 'Mateiros', 'state_id' => 27],
            ['name' => 'Maurilândia do Tocantins', 'state_id' => 27],
            ['name' => 'Miracema do Tocantins', 'state_id' => 27],
            ['name' => 'Miranorte', 'state_id' => 27],
            ['name' => 'Monte do Carmo', 'state_id' => 27],
            ['name' => 'Monte Santo do Tocantins', 'state_id' => 27],
            ['name' => 'Muricilândia', 'state_id' => 27],
            ['name' => 'Natividade', 'state_id' => 27],
            ['name' => 'Nazaré', 'state_id' => 27],
            ['name' => 'Nova Olinda', 'state_id' => 27],
            ['name' => 'Nova Rosalândia', 'state_id' => 27],
            ['name' => 'Novo Acordo', 'state_id' => 27],
            ['name' => 'Novo Alegre', 'state_id' => 27],
            ['name' => 'Novo Jardim', 'state_id' => 27],
            ['name' => 'Oliveira de Fátima', 'state_id' => 27],
            ['name' => 'Palmas', 'state_id' => 27],
            ['name' => 'Palmeirante', 'state_id' => 27],
            ['name' => 'Palmeiras do Tocantins', 'state_id' => 27],
            ['name' => 'Palmeirópolis', 'state_id' => 27],
            ['name' => 'Paraíso do Tocantins', 'state_id' => 27],
            ['name' => 'Paranã', 'state_id' => 27],
            ['name' => 'Pau d`Arco', 'state_id' => 27],
            ['name' => 'Pedro Afonso', 'state_id' => 27],
            ['name' => 'Peixe', 'state_id' => 27],
            ['name' => 'Pequizeiro', 'state_id' => 27],
            ['name' => 'Pindorama do Tocantins', 'state_id' => 27],
            ['name' => 'Piraquê', 'state_id' => 27],
            ['name' => 'Pium', 'state_id' => 27],
            ['name' => 'Ponte Alta do Bom Jesus', 'state_id' => 27],
            ['name' => 'Ponte Alta do Tocantins', 'state_id' => 27],
            ['name' => 'Porto Alegre do Tocantins', 'state_id' => 27],
            ['name' => 'Porto Nacional', 'state_id' => 27],
            ['name' => 'Praia Norte', 'state_id' => 27],
            ['name' => 'Presidente Kennedy', 'state_id' => 27],
            ['name' => 'Pugmil', 'state_id' => 27],
            ['name' => 'Recursolândia', 'state_id' => 27],
            ['name' => 'Riachinho', 'state_id' => 27],
            ['name' => 'Rio da Conceição', 'state_id' => 27],
            ['name' => 'Rio dos Bois', 'state_id' => 27],
            ['name' => 'Rio Sono', 'state_id' => 27],
            ['name' => 'Sampaio', 'state_id' => 27],
            ['name' => 'Sandolândia', 'state_id' => 27],
            ['name' => 'Santa Fé do Araguaia', 'state_id' => 27],
            ['name' => 'Santa Maria do Tocantins', 'state_id' => 27],
            ['name' => 'Santa Rita do Tocantins', 'state_id' => 27],
            ['name' => 'Santa Rosa do Tocantins', 'state_id' => 27],
            ['name' => 'Santa Tereza do Tocantins', 'state_id' => 27],
            ['name' => 'Santa Terezinha do Tocantins', 'state_id' => 27],
            ['name' => 'São Bento do Tocantins', 'state_id' => 27],
            ['name' => 'São Félix do Tocantins', 'state_id' => 27],
            ['name' => 'São Miguel do Tocantins', 'state_id' => 27],
            ['name' => 'São Salvador do Tocantins', 'state_id' => 27],
            ['name' => 'São Sebastião do Tocantins', 'state_id' => 27],
            ['name' => 'São Valério da Natividade', 'state_id' => 27],
            ['name' => 'Silvanópolis', 'state_id' => 27],
            ['name' => 'Sítio Novo do Tocantins', 'state_id' => 27],
            ['name' => 'Sucupira', 'state_id' => 27],
            ['name' => 'Taguatinga', 'state_id' => 27],
            ['name' => 'Taipas do Tocantins', 'state_id' => 27],
            ['name' => 'Talismã', 'state_id' => 27],
            ['name' => 'Tocantínia', 'state_id' => 27],
            ['name' => 'Tocantinópolis', 'state_id' => 27],
            ['name' => 'Tupirama', 'state_id' => 27],
            ['name' => 'Tupiratins', 'state_id' => 27],
            ['name' => 'Wanderlândia', 'state_id' => 27],
            ['name' => 'Xambioá', 'state_id' => 27]
        ]);

        $this->command->info('Cidades de Tocantins importadas com sucesso!');
    }
}