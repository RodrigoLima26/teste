<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Site\Estados::class, function (Faker $faker) {
    $timezones = array(
			['nome'=>'Acre', 'sigla' => 'AC', 'fuso' => 'America/Rio_branco'],
			['nome'=>'Alagoas', 'sigla' => 'AL', 'fuso' => 'America/Maceio'],
			['nome'=>'Amapá', 'sigla' => 'AP', 'fuso' => 'America/Belem'], 
			['nome'=>'Amazonas', 'sigla' => 'AM', 'fuso' => 'America/Manaus'],
			['nome'=>'Bahia', 'sigla' => 'BA', 'fuso' => 'America/Bahia'],
			['nome'=>'Ceará', 'sigla' => 'CE', 'fuso' => 'America/Fortaleza'],
			['nome'=>'Distrito Federal', 'sigla' => 'DF', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Espírito Santo', 'sigla' => 'ES', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Goiás', 'sigla' => 'GO', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Maranhã', 'sigla' => 'MA', 'fuso' => 'America/Fortaleza'],
			['nome'=>'Mato Grosso', 'sigla' => 'MT', 'fuso' => 'America/Cuiaba'],   
			['nome'=>'Mato Grosso do Sul', 'sigla' => 'MS', 'fuso' => 'America/Campo_Grande'],
			['nome'=>'Minas Gerais', 'sigla' => 'MG', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Pará', 'sigla' => 'PR', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Paraíba', 'sigla' => 'PB', 'fuso' => 'America/Fortaleza'],
			['nome'=>'Paraná', 'sigla' => 'PA', 'fuso' => 'America/Belem'],
			['nome'=>'Pernanbuco', 'sigla' => 'PE', 'fuso' => 'America/Recife'],   
			['nome'=>'Piauí', 'sigla' => 'PI', 'fuso' => 'America/Fortaleza'],
			['nome'=>'Rio de Janeiro', 'sigla' => 'RJ', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Rio Grande do Norte', 'sigla' => 'RN', 'fuso' => 'America/Fortaleza'],
			['nome'=>'Rio Grande do Sul', 'sigla' => 'RS', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Rondônia', 'sigla' => 'RO', 'fuso' => 'America/Porto_Velho'],
			['nome'=>'Roraima', 'sigla' => 'RR', 'fuso' => 'America/Boa_Vista'],
			['nome'=>'Santa Catarina', 'sigla' => 'SC', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Sergipe', 'sigla' => 'SE', 'fuso' => 'America/Maceio'],   
			['nome'=>'São Paulo', 'sigla' => 'SP', 'fuso' => 'America/Sao_Paulo'],
			['nome'=>'Tocantins', 'sigla' => 'TO', 'fuso' => 'America/Araguaia'],     
		);
    
    return $timezones;
});
