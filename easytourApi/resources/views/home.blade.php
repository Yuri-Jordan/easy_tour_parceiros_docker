@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">

				    <span class="btn btn-success fileinput-button">
				        <i class="glyphicon glyphicon-plus"></i>
				        <span>Selecionar arquivo...</span>

				        <input id="inputDeUploadArquivo" type="file" name="documento"
				        data-token="{!! csrf_token() !!}"
                data-user-id="{!! Auth::user()->id !!}">
				    </span>
				    <br>
				    <br>

				    <div id="barraDeProgresso" class="progress">
				        <div class="progress-bar progress-bar-success"></div>
				    </div>

				    <div class="alert alert-success hide" id="uploadComSucesso">
						Upload realizado com sucesso!
				</div>

				    <table class="table table-bordered table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th>Nome</th>
				    			<th>Enviado em</th>
				    			<th>Usuário</th>
				    			<th>Ações</th>
				    		</tr>
				    	</thead>
				    	<tbody>
								@foreach($user->arquivos as $arquivo)
				    		<tr>
				    			<td>{{$arquivo->nome }}</td>
				    			<td>{{ $arquivo->created_at }}</td>
				    			<td>{{ $user->name }}</td>
				    			<td>
				    				<a href="{{ route('baixarArquivos', [$user->id, $arquivo->id]) }}" class="btn btn-xs btn-success">Download</a>
				    				<a href="{!! route('excluirArquivos', [$user->id, $arquivo->id]) !!}" class="btn btn-xs btn-danger">Excluir</a>
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>

				</div>
			</div>
		</div>
	</div>
</div>
@section('pos-scripts')

<script>

  $(document).ready(function()
  {
  	var $inputDeUploadArquivo = $('#inputDeUploadArquivo'),
  			$uploadComSucesso = $('#uploadComSucesso');

     $inputDeUploadArquivo .fileupload({
        replaceFileInput:false,
        url: '{{route("uploadArquivos")}}',
        dataType: 'json',
        formData: {_token: $inputDeUploadArquivo.data('token'), userId:$inputDeUploadArquivo.data('userId')},
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#barraDeProgresso .progress-bar').css(
                'width',
                progress + '%'
            );
        },
        done: function (e, data) {
        	$uploadComSucesso.removeClass('hide').hide().slideDown('fast');
			    setTimeout(function(){
		    		location.reload();
			    }, 2000);
				}
    });

  });


</script>

@endsection
@endsection
