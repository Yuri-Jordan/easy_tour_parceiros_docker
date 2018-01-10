@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Listar Parceiros</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Parceiro</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">


              <!-- start project list -->
              <table class="table table-striped projects">
                <thead>
                  <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Nome</th>
                    <th>Descrição</th>
                    <th style="width: 20%">Ações</th>
                  </tr>
                </thead>
                <tbody id='parceiros'>

                </tbody>
              </table>
              <!-- end project list -->

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
                   url: 'http://easytourbrasil.com.br/adminApi/api/parceiros',
                   type: 'GET',
                   dataType: 'json',
                   success: function (data, textStatus, xhr) {
                     console.log(data);
                     window.parceiros = data;
                      var parceiros = '';
                      $.each(data, function (key, value) {

                        parceiros += '<tr id="formAntigo'+value.id+'">';
                          parceiros += '<td>#</td>';
                          parceiros += "<td width='77%' id='formAntigoNomeFantasia"+value.id+"'>"+value.nome_fantasia+"</td>";
                          parceiros += "<td width='77%' id='formAntigoDecricao"+value.id+"'><a>"+value.descricao+"</a></td>";
                          parceiros += "<td>";
                            parceiros += "<a href='#' class='btn btn-info btn-xs' onclick='editar("+value.id+")'><i class='fa fa-pencil'></i> Editar </a>";
                            parceiros += "<a href='#' class='btn btn-danger btn-xs' onclick='excluir("+value.id+")'><i class='fa fa-trash-o'></i> Deletar </a>";
                          parceiros += "</td>";
                        parceiros += '</tr>';




                        parceiros += '<tr style="display:none" id = "'+value.id+'">';

                            parceiros += '<td>'+value.id+'</td>';
                            parceiros += "<td width='77%'><input id='nome_fantasia"+value.id+"' class='form-control col-md-7 col-xs-12' data-validate-length-range='2' data-validate-words='1' name='nome_fantasia' value='"+value.nome_fantasia+"' type='text'></td>";
                            parceiros += "<td  width='77%'><input id='descricao"+value.id+"' class='form-control col-md-7 col-xs-12' data-validate-length-range='2' data-validate-words='1' name='descricao' value='"+value.descricao+"' type='text'></td>";
                            parceiros += "<td>";
                              parceiros += "<button value='Enviar' onclick='enviar("+value.id+")'>Enviar</button>";
                              parceiros += "<a href='#' class='btn btn btn-xs' onclick='cancelarEdicao("+value.id+")'><i class='fa fa-trash-o'></i> Cancelar </a>";
                            parceiros += "</td>";

                        parceiros += '</tr>';

                      });
                      $('#parceiros').append(parceiros);
                   },
                   error: function (xhr, textStatus, errorThrown) {
                       console.log('Error in Operation');
                       swal("Erro na listagem de parceiros!", textStatus, "error");
                   }
              });
        });

        function enviar(id){

          $.ajax({
            url: 'http://easytourbrasil.com.br/adminApi/api/parceiros/'+id,
            type: 'POST',
            data: {
                    nome_fantasia:document.getElementById('nome_fantasia'+id).value,
                    descricao:document.getElementById('descricao'+id).value,
                  },
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function (data, textStatus, xhr) {
               console.log(data);
               swal("Parceiro atualizado!", data.nome_fantasia, "success");
               editar(data.id);
               atualizarCampos(data);
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log('Error in Operation');
                swal("Parceiro não atualizado!", textStatus, "error");
            }
          });
        }

        function editar(id) {

          $("#"+id+"").slideToggle();

        }

        function atualizarCampos(data) {
          document.getElementById("formAntigoNomeFantasia"+data.id).innerHTML = ""+data.nome_fantasia;
          document.getElementById("formAntigoDecricao"+data.id).innerHTML = ""+data.descricao;
        }

        function excluir(id) {

          swal("Tem certeza que deseja excluir este parceiro?", {
            buttons: {
              cancelar: true,
              excluir: true,
            },
          })
          .then((value) => {
            switch (value) {

              case "excluir":
                $.ajax({
                  url: 'http://easytourbrasil.com.br/adminApi/api/parceiros/'+id,
                  type: 'DELETE',
                  dataType: 'json',
                  success: function (data, textStatus, xhr) {
                     console.log(data);
                     swal("Parceiro excluído!", data.nome_fantasia, "success");
                     document.getElementById("formAntigo"+data.id).remove();
                     document.getElementById(""+data.id).remove();
                  },
                  error: function (xhr, textStatus, errorThrown) {
                      console.log('Error in Operation');
                      swal("Categoria não excluída!", textStatus, "error");
                  }
                });
                break;

              default:
            }
          });

        }

        function cancelarEdicao(id){
          $("#"+id+"").slideToggle();
        }

    </script>
  @endsection
@endsection
