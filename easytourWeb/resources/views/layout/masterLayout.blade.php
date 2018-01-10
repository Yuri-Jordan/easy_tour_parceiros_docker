<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Easy Tour Brasil - Viaje em novas experiências</title>

    <!-- Bootstrap -->
    <link href="{{asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('asset/vendors/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('asset/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('asset/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('asset/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('asset/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('home')}}" class="site_title"><i class="fa fa-map-marker"></i> <span>Easy Tour Brasil</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('asset/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem-vindo,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-map-marker"></i> Pontos Turísticos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-ponto'])}}">Novo Ponto</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-ponto'])}}">Listar Pontos</a></li>
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-categoria-ponto'])}}">Nova Categoria de Pontos</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-categoria-ponto'])}}">Listar Categoria de Pontos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-road"></i> Roteiros Turísticos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-roteiro'])}}">Novo Roteiro</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-roteiro'])}}">Listar Roteiros</a></li>
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-categoria-roteiro'])}}">Nova Categoria Roteiros</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-categoria-roteiro'])}}">Listar Categoria Roteiros</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-briefcase"></i> Parceiros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-parceiro'])}}">Novo Parceiro</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-parceiro'])}}">Listar Parceiros</a></li>
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-categoria-parceiro'])}}">Nova Categoria Parceiros</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-categoria-parceiro'])}}">Listar Categoria Parceiros</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('getPaginaCadastrar', ['pagina' => 'cadastrar-usuario'])}}">Novo Usuário</a></li>
                      <li><a href="{{route('getPaginaListar', ['pagina' => 'listar-usuario'])}}">Listar Usuários</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-line-chart"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Pontos Turísticos</a></li>
					  <li><a href="#">Roteiros Turísticos</a></li>
                      <li><a href="#">Parceiros</a></li>
                      <li><a href="#">Usuários</a></li>
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configurações">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela cheia">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Bloquear">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="{{route('login')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('asset/production/images/img.jpg')}}" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span>Configurações</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ajuda</a></li>
                    <li><a href="{{route('login')}}"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('asset/production/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('asset/production/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('asset/production/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="{{asset('asset/production/images/img.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="container">
          @yield('conteudo')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('asset/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('asset/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('asset/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('asset/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('asset/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('asset/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('asset/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('asset/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('asset/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('asset/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('asset/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('asset/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('asset/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('asset/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('asset/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- validator -->
    <script src="{{asset('asset/vendors/validator/validator.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('asset/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('asset/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('asset/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('asset/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('asset/build/js/custom.min.js')}}"></script>
    @yield('pos-scripts')
  </body>
</html>
