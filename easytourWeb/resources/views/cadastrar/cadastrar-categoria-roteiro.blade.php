@extends('layout.masterLayout')

@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cadastrar Categoria Roteiro Turístico</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações da Categoria do Roteiro </h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <form class="form-horizontal form-label-left" novalidate id="form">

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="nome" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nome" required="required" type="text">
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary"onclick="apagarConteudo()">Cancelar</button>
                    <button id="send" type="submit" class="btn btn-success">Enviar</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  @section('pos-scripts')
    <script>


        function apagarConteudo() {
          $("#form").trigger('reset');
        }
        function excluir() {
          console.log('EXCLUIR');
        }

    </script>
  @endsection
@endsection
