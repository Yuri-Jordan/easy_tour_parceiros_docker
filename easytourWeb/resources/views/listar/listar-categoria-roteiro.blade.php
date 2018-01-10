@extends('layout.masterLayout')
@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Listar Categoria Roteiros Turísticos</h3>
        </div>
      </div>

      <div class="clearfix"></div>

<br />

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Informações do Roteiro</h2>
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
                <tbody>
                  <tr>
                    <td>#</td>
                    <td width="77%">
                      <a>Aventura</a></td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                    </td>
                  </tr>
                  <tr>
                    <td>#</td>
                    <td width="77%">
                    <a>Cultural</a></td>
                    <td>
                      <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                      <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                    </td>
                  </tr>
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
@endsection
