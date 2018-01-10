@extends('layout.masterLayout')

@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cadastrar Categoria Parceiro</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações da Categoria do Parceiro </h2>
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

              <form class="form-horizontal form-label-left" novalidate id="form" action="http://easytourbrasil.com.br/adminApi/api/categoriaParceiros" method="post">

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome">Nome <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="nome" autofocus="autofocus" class="form-control col-md-7 col-xs-12" data-validate-length-range="2" data-validate-words="1" name="nome" required="required" type="text">
                  </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                  </div>
                </div>
              </form>
              <button type="submit" class="btn btn-primary" onclick="apagarConteudo()">Cancelar</button>
              <button id="send" onclick="submeterForm()" class="btn btn-success">Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
  @section('pos-scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        function apagarConteudo() {
          $("#form").trigger('reset');
        }

        function submeterForm() {
          var todosCamposFormulario = $("#form");
              url = todosCamposFormulario.attr('action'),
              type = todosCamposFormulario.attr('method'),
              data = {};

            todosCamposFormulario.find('[name]').each(function(index, value){

              var cadaCampo = $(this),
                  name = cadaCampo.attr('name'),
                  value = cadaCampo.val();

                  data[name] = value;
            });

            $.ajax({
              url: url,
              type: type,
              data: data,
              success: function (response) {
                  console.log(response);
                  swal("Categoria cadastrada!", response.nome, "success");
                  apagarConteudo();
              },
              error: function (response) {
                  swal("Categoria não cadastrada!", response, "error");
                  console.log(response);
              }
            });
        }
    </script>
  @endsection
@endsection
