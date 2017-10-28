<?php
	namespace App\Http\Controllers\Site;

	use App\Http\Controllers\Controller;
	use App\Model\Site\Estados;
	use Carbon\Carbon;

	use Exception;
	use Request;

	class ControllerSite extends Controller{
		public function __construct(Estados $estados){
			$this->estados = $estados;
		}

		public function index(){
			$data['title'] = 'Teste';
			$data['description'] = 'Teste para desenvolvedor';
			$data['estados'] = $this->estados->get();

			return view('Site/index', $data);
		}

		public function timezone(){
			//Recebendo os dados do servidor e os atribuindo a variaveis
			$sigla = Request::route('estado');
			$data['id'] = Request::route('id');

			//Pegando as timezones no banco de dados
			$time = $this->estados->where('sigla', $sigla)->get();
			
			foreach($time as $times)
				$timezone = $times['fuso'];

			//Utilizando o Carbon para pegar a data e hora
			$now = Carbon::now($timezone);
			//Pegando o horário atual sem o fuso
			$fuso = Carbon::now();
			//Indicando os valores do json
			$data['hora'] = $now->formatLocalized('%H');
			$data['minutos'] = $now->formatLocalized('%M');
			$data['segundos'] = $now->formatLocalized('%S');
			//Subtração para gerar o fuso
			$data['fuso'] = $now->formatLocalized('%H') - $fuso->formatLocalized('%H');

			$data['estado'] = $sigla;

			//Retorna a data convertida em json
			return response()->json($data, 200);
		}
	} 