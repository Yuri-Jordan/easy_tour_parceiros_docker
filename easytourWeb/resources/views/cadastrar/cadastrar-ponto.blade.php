@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cadastrar Ponto Turístico</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Ponto </h2>
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

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Descrição <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="textarea" required="required" type="text"></textarea>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Latitude <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="latitude" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="longitude">Longitude <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="longitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="longitude" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cidade">Cidade <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="cidade" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="cidade" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Estado <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="estado" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="estado" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pais">País <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="pais" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="pais" required="required" type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control">
                      <option>  </option>
                      <option>Biblioteca</option>
                      <option>Cinema</option>
                      <option>Faculdade</option>
                      <option>Galeria de arte</option>
                      <option>Igreja</option>
                      <option>Lagoa</option>
                      <option>Loja de artesanato</option>
                      <option>Monumento histórico</option>
        <option>Museu</option>
                      <option>Parque</option>
                      <option>Praia</option>
                      <option>Praça</option>
                      <option>Museu</option>
                      <option>Shopping center</option>
                      <option>Supermercado</option>
                      <option>Teatro</option>
                    </select>
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary" onclick="apagarConteudo()">Cancelar</button>
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
