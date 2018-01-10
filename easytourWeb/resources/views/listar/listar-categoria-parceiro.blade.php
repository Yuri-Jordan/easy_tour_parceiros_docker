@extends('layout.masterLayout')
@section('conteudo')

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Listar Categoria Parceiros</h3>
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
                    <th width="77%" style="width: 20%">Nome</th>
                    <th style="width: 20%">Ações</th>
                  </tr>
                </thead>
                <tbody id="categoria_parceiros">

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
                   url: 'http://35.185.9.68:8001/api/categoriaParceiros',
                   type: 'GET',
                   dataType: 'json',
                   success: function (data, textStatus, xhr) {
                      var categoria = '';
                      console.log(data);
                      $.each(data, function (key, value) {

                        categoria += '<tr id="formAntigo'+value.id+'">';
                          categoria += '<td>#</td>';
                          categoria += "<td width='77%' id='formAntigoNome"+value.id+"'><a>"+value.nome+"</a></td>";
                          categoria += "<td>";
                            categoria += "<a href='#' class='btn btn-info btn-xs' onclick='editar("+value.id+")'><i class='fa fa-pencil'></i> Editar </a>";
                            categoria += "<a href='#' class='btn btn-danger btn-xs' onclick='excluir("+value.id+")'><i class='fa fa-trash-o'></i> Deletar </a>";
                          categoria += "</td>";
                        categoria += '</tr>';

                        categoria += '<tr style="display:none" id = "'+value.id+'">';

                            categoria += '<td>'+value.id+'</td>';
                            categoria += "<td width='77%'><input id='nome"+value.id+"' class='form-control col-md-7 col-xs-12' data-validate-length-range='2' data-validate-words='1' name='nome_fantasia' value='"+value.nome+"' type='text'></td>";
                              categoria += "<td>";
                                categoria += "<button value='Enviar' onclick='enviar("+value.id+")'>Enviar</button>";
                                categoria += "<a href='#' class='btn btn btn-xs' onclick='cancelarEdicao("+value.id+")'><i class='fa fa-trash-o'></i> Cancelar </a>";
                              categoria += "</td>";

                        categoria += '</tr>';

                      });
                      $('#categoria_parceiros').append(categoria);
                   },
                   error: function (xhr, textStatus, errorThrown) {
                       console.log('Error in Operation');
                   }
              });
        });

        function enviar(id){

          $.ajax({
            url: 'http://35.185.9.68:8001/api/categoriaParceiros/'+id,
            type: 'PUT',
            data: {
                    nome:document.getElementById('nome'+id).value,
                  },
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function (data, textStatus, xhr) {
              console.log(data);
              swal("Categoria atualizada!", data.nome, "success");
              editar(data.id);
              atualizarCampos(data);
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log('Error in Operation');
                swal("Categoria não atualizada!", textStatus, "error");
            }
          });
        }

        function atualizarCampos(data) {
          document.getElementById("formAntigoNome"+data.id).innerHTML = ""+data.nome;
        }


        function cancelarEdicao(id){
          $("#"+id+"").slideToggle();
        }

        function editar(id) {

          $("#"+id+"").slideToggle();

        }
        function excluir(id) {

          swal("Tem certeza que deseja excluir esta categoria?", {
            buttons: {
              cancelar: true,
              excluir: true,
            },
          })
          .then((value) => {
            switch (value) {

              case "excluir":
                $.ajax({
                  url: 'http://35.185.9.68:8001/api/categoriaParceiros/'+id,
                  type: 'DELETE',
                  dataType: 'json',
                  success: function (data, textStatus, xhr) {
                     console.log(data);
                     swal("Categoria excluída!", data.nome, "success");
                     document.getElementById("formAntigo"+data.id).remove();
                     document.getElementById(""+data.id).remove();
                  },
                  error: function (xhr, textStatus, errorThrown) {
                      console.log('Error in Operation');
                      swal("Categoria nãoexcluída!", data.nome, "error");
                  }
                });
                break;

              default:
            }
          });


        }

    </script>
  @endsection
@endsection
