<?php
	namespace App\Http\Controllers\Site;

	use App\Http\Controllers\Controller;
	use App\Model\Site\Estados;
	use Carbon\Carbon;

	use Exception;
	use Request;

	class ControllerSite extends Controller{

		/* nao vejo necessidade de usar um construct nesse controller, mas está ok*/
		public function __construct(Estados $estados){
			$this->estados = $estados;
		}

		public function index(){
			$data['title'] = 'Teste';
			$data['description'] = 'Teste para desenvolvedor';
			$data['estados'] = $this->estados->get();

			return view('Site/index', $data);
		}

		/* nunca tinha usado o "Request:route($param)", interessante */
		public function timezone(/* eu usaria assim $estado */){

			//Recebendo os dados do servidor e os atribuindo a variaveis
			$sigla = Request::route('estado');

			/* nao entendi esse parametro $id */
			$data['id'] = Request::route('id');

			//Pegando as timezones no banco de dados
			/*
			$time = $this->estados->where('sigla', $sigla)->get();
			
			foreach($time as $times)
				$timezone = $times['fuso'];*/

			/* mais facil assim ne ? */
			$timezone = $this->estados->where('sigla', $sigla)->first();

			if ($timezone) {
				//Utilizando o Carbon para pegar a data e hora
				$now = Carbon::now($timezone->fuso);
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

			return response()->json("Not found", 404);
		}
	} 