@include('site/_includes/header')

<main ng-controller="estadosController">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<select name="estado" id="estado" ng-model="estado.nome">
					@foreach ($estados as $estado)
						<option value="{{$estado->sigla}}">{{$estado->nome}}</option>
					@endforeach	
					
				</select>
				<button type="button" class="btn btn-success" ng-click="envia()">Enviar</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
				  <input type="text" class="form-control" placeholder="Pesquisar" aria-describedby="basic-addon1" ng-model="pesquisaEstado">
				</div>
			</div>
			<div class="col-lg-6 col-lg-offset-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Estado</th>
							<th>Horário Atual</th>
							<th>Fuso</th>
						</tr>
					</thead>

					<tbody ng-repeat="estado in estados | filter:pesquisaEstado">
						<tr>
							<td>@{{estado.id}}</td>
							<td>@{{estado.estado}}</td>
							<td>@{{estado.hora}}h @{{estado.minutos}}min @{{estado.segundos}}s</td>
							<td>@{{estado.fuso}} Horas</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>

@include('site/_includes/footer')