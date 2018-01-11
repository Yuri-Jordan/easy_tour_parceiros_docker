@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Cadastrar Parceiro</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Parceiro </h2>
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

              <form class="form-horizontal form-label-left" novalidate id="form" action="http://35.190.171.94:8001/api/parceiros" method="post">

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cnpj">CNPJ <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="nome" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="cnpj"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nome_fantasia">Nome de fantasia <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" autofocus="autofocus" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="nome_fantasia" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razao_social">Razão social <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="razao_social"  type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razao_social">Latitude <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" autofocus="autofocus" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="latitude" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Longitude <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" autofocus="autofocus" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="longitude" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Logradouro <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="logradouro"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Número <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="numero"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Complemento <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="complemento"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">CEP <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="cep"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Bairro <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="bairro"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">Município <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="municipio"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">UF <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="uf"  type="text">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="endereco">País <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="pais"  type="text">
                  </div>
                </div>

                {{-- <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">UF <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control">
                      <option>  </option>
        <option value="ac">Acre</option>
        <option value="al">Alagoas</option>
        <option value="am">Amazonas</option>
        <option value="ap">Amapá</option>
        <option value="ba">Bahia</option>
        <option value="ce">Ceará</option>
        <option value="df">Distrito Federal</option>
        <option value="es">Espírito Santo</option>
        <option value="go">Goiás</option>
        <option value="ma">Maranhão</option>
        <option value="mt">Mato Grosso</option>
        <option value="ms">Mato Grosso do Sul</option>
        <option value="mg">Minas Gerais</option>
        <option value="pa">Pará</option>
        <option value="pb">Paraíba</option>
        <option value="pr">Paraná</option>
        <option value="pe">Pernambuco</option>
        <option value="pi">Piauí</option>
        <option value="rj">Rio de Janeiro</option>
        <option value="rn">Rio Grande do Norte</option>
        <option value="ro">Rondônia</option>
        <option value="rs">Rio Grande do Sul</option>
        <option value="rr">Roraima</option>
        <option value="sc">Santa Catarina</option>
        <option value="se">Sergipe</option>
        <option value="sp">São Paulo</option>
        <option value="to">Tocantins</option>
                    </select>
                  </div>
                </div> --}}

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">E-mail <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="email"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Telefone <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="telefone"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Responsável <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="responsavel"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Descrição <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" class="form-control col-md-7 col-xs-12" data-validate-length-range="1" data-validate-words="1" name="descricao"  type="text"></textarea>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="razao_social">Média avaliação <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="0" data-validate-words="0" name="media_avaliacao"  type="text">
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="latitude">Quantidade de avaliações <span class="required"></span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="latitude" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="qte_avaliacoes"  type="text">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Categoria <span class="required">*</span> </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select required="required" class="form-control" id="parceiros" name="categoria_parceiros_id">
                      <option></option>

                    </select>
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

        $(document).ready(function () {
          $.ajax({
                   url: 'http://35.190.171.94:8001/api/categoriaParceiros',
                   type: 'GET',
                   dataType: 'json',
                   success: function (data, textStatus, xhr) {
                      var categoria = '';
                      console.log(data);
                      $.each(data, function (key, value) {
                        categoria += "<option value='"+value.id+"'>"+value.nome+"</option>";
                      });
                      $('#parceiros').append(categoria);
                   },
                   error: function (xhr, textStatus, errorThrown) {
                       console.log('Error in Operation');
                   }
              });
        });

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
                  swal("Parceiro cadastrado!", response.nome_fantasia, "success");
                  apagarConteudo();
              },
              error: function (response) {
                  console.log(response);
              }
            });
        }


    </script>
  @endsection
@endsection
