@extends('layout.masterLayout')

@section('conteudo')
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count" id="quantidades">

    </div>
    <!-- /top tiles -->


<div class="col-md-12 col-sm-12 col-xs-12">

        <div class="row">

            <div class="x_panel">
              <div class="x_title">
                <h2>Localização dos turistas <small>geo-presentation</small></h2>
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
                <div class="dashboard-widget-content">
                  <div class="col-md-4 hidden-small">
                    <h2 class="line_30">Países</h2>

                    <table class="countries_list">
                      <tbody>
                        <tr>
                          <td>Brasil </td>
                          <td class="fs15 fw700 text-right">79,7%</td>
                        </tr>
                        <tr>
                          <td>Argentina</td>
                          <td class="fs15 fw700 text-right">7,7%</td>
                        </tr>
                        <tr>
                          <td>Portugal</td>
                          <td class="fs15 fw700 text-right">2,0%</td>
                        </tr>
                        <tr>
                          <td>Espanha</td>
                          <td class="fs15 fw700 text-right">1,7%</td>
                        </tr>
                        <tr>
                          <td>Itália</td>
                          <td class="fs15 fw700 text-right">1,7%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
                </div>
              </div>
            </div>

        </div>

</div>



    <br />

    <div class="row">

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>Versões do App</h2>
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
            <h4>Uso do App por Versões</h4>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.2</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>123k</span>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.3</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>53k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.4</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>23k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.5</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>3k</span>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="widget_summary">
              <div class="w_left w_25">
                <span>0.1.5.6</span>
              </div>
              <div class="w_center w_55">
                <div class="progress">
                  <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </div>
              <div class="w_right w_20">
                <span>1k</span>
              </div>
              <div class="clearfix"></div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
          <div class="x_title">
            <h2>Usuários por Dispositivo</h2>
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
            <table class="" style="width:100%">
              <tr>
                <th style="width:37%;">
                  <p>Top 5</p>
                </th>
                <th>
                  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                    <p class="">Dispositivo</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <p class="">Progresso</p>
                  </div>
                </th>
              </tr>
              <tr>
                <td>
                  <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                </td>
                <td>
                  <table class="tile_info">
                    <tr>
                      <td>
                        <p><i class="fa fa-square blue"></i>IOS </p>
                      </td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square green"></i>Android </p>
                      </td>
                      <td>100%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square purple"></i>Blackberry </p>
                      </td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square aero"></i>Symbian </p>
                      </td>
                      <td>0%</td>
                    </tr>
                    <tr>
                      <td>
                        <p><i class="fa fa-square red"></i>Others </p>
                      </td>
                      <td>30%</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>


    </div>




    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">

          <div class="row x_title">
            <div class="col-md-6">
              <h3>Atividades nas Rede Sociais </h3>
            </div>
            <div class="col-md-6">
              <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
              </div>
            </div>
          </div>

          <div class="col-md-9 col-sm-9 col-xs-12">
            <div id="chart_plot_01" class="demo-placeholder"></div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
            <div class="x_title">
              <h2>Redes Sociais</h2>
              <div class="clearfix"></div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-6">
              <div>
                <p>Facebook</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Instagram</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-6">
              <div>
                <p>Twitter</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                  </div>
                </div>
              </div>
              <div>
                <p>Outras</p>
                <div class="">
                  <div class="progress progress_sm" style="width: 76%;">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="clearfix"></div>
        </div>
      </div>

    </div>




    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Atividades recentes </h2>
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
            <div class="dashboard-widget-content">

              <ul class="list-unstyled timeline widget">
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="block">
                    <div class="block_content">
                      <h2 class="title">
                                        <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                    </h2>
                      <div class="byline">
                        <span>13 hours ago</span> by <a>Jane Smith</a>
                      </div>
                      <p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-8 col-sm-8 col-xs-12">


        <div class="row">


          <!-- Start to do list -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Atividades a fazer</small></h2>
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

                <div class="">
                  <ul class="to_do">
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Create email address for new intern</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Create email address for new intern</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                    </li>
                    <li>
                      <p>
                        <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- End to do list -->

          <!-- start of weather widget -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daily active users <small>Sessions</small></h2>
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
                <div class="row">
                  <div class="col-sm-12">
                    <div class="temperature"><b>Monday</b>, 07:30 AM
                      <span>F</span>
                      <span><b>C</b></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="weather-icon">
                      <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="weather-text">
                      <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="weather-text pull-right">
                    <h3 class="degrees">23</h3>
                  </div>
                </div>

                <div class="clearfix"></div>

                <div class="row weather-days">
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Seg</h2>
                      <h3 class="degrees">25</h3>
                      <canvas id="clear-day" width="32" height="32"></canvas>
                      <h5>15 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Ter</h2>
                      <h3 class="degrees">25</h3>
                      <canvas height="32" width="32" id="rain"></canvas>
                      <h5>12 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Qua</h2>
                      <h3 class="degrees">27</h3>
                      <canvas height="32" width="32" id="snow"></canvas>
                      <h5>14 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Qui</h2>
                      <h3 class="degrees">28</h3>
                      <canvas height="32" width="32" id="sleet"></canvas>
                      <h5>15 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Sex</h2>
                      <h3 class="degrees">28</h3>
                      <canvas height="32" width="32" id="wind"></canvas>
                      <h5>11 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="daily-weather">
                      <h2 class="day">Sab</h2>
                      <h3 class="degrees">26</h3>
                      <canvas height="32" width="32" id="cloudy"></canvas>
                      <h5>10 <i>km/h</i></h5>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>

          </div>
          <!-- end of weather widget -->
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->

  @section('pos-scripts')
    <script>
      $(document).ready(function () {
        $.ajax({
                 url: 'http://35.190.171.94:8001/api/dashboardAdmin',
                 type: 'GET',
                 dataType: 'json',
                 success: function (data, textStatus, xhr) {
                    console.log(data);
                    atualizarQuantidadesTopoDash(data);
                 },
                 error: function (xhr, textStatus, errorThrown) {
                     console.log('Error in Operation');
                 }
            });
      });

      function atualizarQuantidadesTopoDash(data) {

        var quantidades = '';
        var variacao = 0;

        $.each(data.quantidades, function (key, value) {

          if(value.titulo === "Usuários"){
            quantidades += '<div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">';
          }else {
            quantidades += '<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">';
          }

            quantidades += '<span class="count_top"><i class="fa fa-user"></i> Total '+value.titulo+'</span>';
            quantidades += '<div class="count green">'+value.quantidade+'</div>';
            variacao = parseFloat(value.variacaoPercentualUltimaSemana).toFixed(1);
            if(variacao < 0){
              quantidades += '<span class="count_bottom"><i class="red">'+variacao+'% </i> Da semana passada</span>';
            }else{
              quantidades += '<span class="count_bottom"><i class="green">'+variacao+'% </i> Da semana passada</span>';
            }

          quantidades += '</div>';

        });
        $('#quantidades').append(quantidades);
      }

    </script>
  @endsection

@endsection
