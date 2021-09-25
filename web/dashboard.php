  <?php
  session_start();
  $logged = $_SESSION['logged'];

  if(!$logged){
  echo "Alto ahi vaquero!!";
  die();
  }
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8" />
  <title>Monitoreo</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="assets/images/logo_1.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo_1.png">

  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
  </head>
  <body>
  <div class="app" id="app">

    <!-- ############ LAYOUT START-->

    <!-- BARRA IZQUIERDA -->
    <!-- aside -->
    <div id="aside" class="app-aside modal nav-dropdown">
      <!-- fluid app aside -->
      <div class="left navside dark dk" data-layout="column">
        <div class="navbar no-radius">
          <!-- brand -->
          <a class="navbar-brand">
            <div ui-include="'assets/images/logo.svg'"></div>
            <img src="assets/images/logo_1.png" alt="." class="hide">
            <span class="hidden-folded inline">Hombrecillo VT</span>
          </a>
          <!-- / brand -->
        </div>
        <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">

            <ul class="nav" ui-nav>
              <li class="nav-header hidden-folded">
                <small class="text-muted">Main</small>
              </li>

              <li>
                <a href="dashboard.php" >
                  <span class="nav-icon">
                    <i class="fa fa-building-o"></i>
                  </span>
                  <span class="nav-text">Principal</span>
                </a>
              </li>

              <li>
                <a href="devices.php" >
                  <span class="nav-icon">
                    <i class="fa fa-cogs"></i>
                  </span>
                  <span class="nav-text">Dispositivos</span>
                </a>
              </li>



            </ul>
          </nav>
        </div>
        <div class="b-t">
          <div class="nav-fold">
            <a href="profile.html">
              <span class="pull-left">
                <img src="assets/images/a0_1.jpg" alt="..." class="w-40 img-circle">
              </span>
              <span class="clear hidden-folded p-x">
                <span class="block _500">Angel López </span>
                <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- / -->

    <!-- content -->
    <div id="content" class="app-content box-shadow-z0" role="main">
      <div class="app-header white box-shadow">
        <div class="navbar navbar-toggleable-sm flex-row align-items-center">
          <!-- Open side - Naviation on mobile -->
          <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
            <i class="material-icons">&#xe5d2;</i>
          </a>
          <!-- / -->

          <!-- Page title - Bind to $state's title -->
          <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

          <!-- navbar collapse -->
          <div class="collapse navbar-collapse" id="collapse">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link" href data-toggle="dropdown">
                  <i class="fa fa-fw fa-plus text-muted"></i>
                  <span>New</span>
                </a>
                <div ui-include="'views/blocks/dropdown.new.html'"></div>
              </li>
            </ul>

            <div ui-include="'views/blocks/navbar.form.html'"></div>
            <!-- / -->
          </div>
          <!-- / navbar collapse -->

          <!-- BARRA DE LA DERECHA -->
          <ul class="nav navbar-nav ml-auto flex-row">
            <li class="nav-item dropdown pos-stc-xs">
              <a class="nav-link mr-2" href data-toggle="dropdown">
                <i class="material-icons">&#xe7f5;</i>
                <span class="label label-sm up warn">3</span>
              </a>
              <div ui-include="'views/blocks/dropdown.notification.html'"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                <span class="avatar w-32">
                  <img src="assets/images/a0_1.jpg" alt="...">
                  <i class="on b-white bottom"></i>
                </span>
              </a>
              <div ui-include="'views/blocks/dropdown.user.html'"></div>
            </li>
            <li class="nav-item hidden-md-up">
              <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                <i class="material-icons">&#xe5d4;</i>
              </a>
            </li>
          </ul>
          <!-- / navbar right -->
        </div>
      </div>


      <!-- PIE DE PAGINA -->
      <div class="app-footer">
        <div class="p-2 text-xs">
          <div class="pull-right text-muted py-1">
            &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
            <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
          </div>
          <div class="nav">
            <a class="nav-link" href="">About</a>
          </div>
        </div>
      </div>

      <div ui-view class="app-body" id="view">


        <!-- SECCION CENTRAL -->
        <div class="padding">

          <!-- VALORES EN TIEMPO REAL -->
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="box p-a">
                <div class="pull-left m-r">
                  <span class="w-48 rounded  danger">
                    <i class="material-icons md-24"></i>
                  </span>
                </div>
                <div class="clear">
                  <h4 class="m-0 text-lg _300"><b id="display_temp1">-- </b><span class="text-sm">°C</span></h4>
                  <small class="text-muted">Temperatura actual </small>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="box p-a">
                <div class="pull-left m-r">
                  <span class="w-48 rounded warn">
                    <i class="fa fa-bolt"></i>
                  </span>
                </div>
                <div class="clear">
                  <h4 class="m-0 text-lg _300"><b id="display_temp2">-- </b><span class="text-sm">V</span></h4>
                  <small class="text-muted">Electroconductividad</small>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-4">
              <div class="box p-a">
                <div class="pull-left m-r">
                  <span class="w-48 rounded info">
                    <i class="material-icons md-24"></i>
                  </span>
                </div>
                <div class="clear">
                  <h4 class="m-0 text-lg _300"><b id="display_volt">-- </b><span class="text-sm">Cm</span></h4>
                  <small class="text-muted">Nivel de Agua</small>
                </div>
              </div>
            </div>
          </div>

          <!-- SWItCH1 y 2 -->
          <div class="row">
            <!-- SWItCH1 -->
            <div class="col-xs-12 col-sm-6">
              <div class="box p-a">
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">LED1</label>
                  <div class="col-sm-10">
                    <label class="ui-switch ui-switch-md info m-t-xs">
                      <input id="input_led1" onchange="process_led1()"  type="checkbox" >
                      <i></i>
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <!-- SWItCH2 -->
              <div class="col-xs-12 col-sm-6">
                <div class="box p-a">
                  <div class="form-group row">
                    <label class="col-sm-2 form-control-label">LED2</label>
                    <div class="col-sm-10">
                      <label class="ui-switch ui-switch-md info m-t-xs">
                        <input id="input_led2" onchange="process_led2()" type="checkbox"  >
                        <i></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!--GRAFICAS VARIAS-->
          <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Temperatura del Agua</h3>
          <small class="block text-muted">Variacion de la temperatura</small>
        </div>
        <div style="margin: 0 -2px">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              {
                data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7,3.5]],
                points: { show: true, radius: 0},
                splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.1 }
              }
            ],
            {
              colors: ['#0cc2aa'],
              series: { shadowSize: 3 },
              xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: false, font: { color: '#ccc' }, max:10, min: 2},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 232px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 272px; height: 232px;" width="272" height="232"></canvas><canvas class="flot-overlay" width="272" height="232" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 272px; height: 232px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Line with points</h3>
          <small>Plenty of options to control</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              {
                data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]],
                points: { show: true, radius: 5},
                splines: { show: true, tension: 0.45, lineWidth: 5}
              }
            ],
            {
              colors: ['#fcc100'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }, min:3},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 9px; text-align: center;">1</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 44px; text-align: center;">2</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 80px; text-align: center;">3</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 115px; text-align: center;">4</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 150px; text-align: center;">5</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 186px; text-align: center;">6</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 221px; text-align: center;">7</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3</div><div style="position: absolute; top: 142px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 108px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5</div><div style="position: absolute; top: 74px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div><div style="position: absolute; top: 40px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">7</div><div style="position: absolute; top: 6px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Line with fill</h3>
          <small>Simple usage</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              {
                data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]],
                points: { show: true, radius: 3},
                splines: { show: true, tension: 0.45, lineWidth: 0, fill: 0.4}
              }
            ],
            {
              colors: ['#0cc2aa'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }, min:1},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 17px; text-align: center;">1</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 52px; text-align: center;">2</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 86px; text-align: center;">3</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 121px; text-align: center;">4</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 156px; text-align: center;">5</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 190px; text-align: center;">6</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 225px; text-align: center;">7</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">1.0</div><div style="position: absolute; top: 118px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">1.5</div><div style="position: absolute; top: 60px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2.0</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2.5</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Bar</h3>
          <small>Vertical display</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
            ],
            {
              bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
              colors: ['#fcc100'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 42px; text-align: center;">2</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 102px; text-align: center;">4</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 161px; text-align: center;">6</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 221px; text-align: center;">8</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div><div style="position: absolute; top: 132px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div><div style="position: absolute; top: 89px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 45px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Horizontal Bar</h3>
          <small>Attractive looks</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
            ],
            {
              bars: { horizontal: true, show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
              colors: ['#0cc2aa'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 43px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 8px; text-align: center;">0</div><div style="position: absolute; max-width: 43px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 70px; text-align: center;">2</div><div style="position: absolute; max-width: 43px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 132px; text-align: center;">4</div><div style="position: absolute; max-width: 43px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 194px; text-align: center;">6</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div><div style="position: absolute; top: 147px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">1</div><div style="position: absolute; top: 118px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div><div style="position: absolute; top: 89px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3</div><div style="position: absolute; top: 60px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 31px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Order Bars</h3>
          <small>With orders</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] },
              { data: [[1, 3], [2, 4], [3, 3], [4, 6], [5, 5], [6, 4], [7, 5], [8, 3]] }
            ],
            {
              bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 1, order: 1, fillColor: { colors: [{ opacity: 0.5 }, { opacity: 0.9}] }, align: 'center'},
              colors: ['#0cc2aa','#fcc100'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 42px; text-align: center;">2</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 102px; text-align: center;">4</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 161px; text-align: center;">6</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 221px; text-align: center;">8</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div><div style="position: absolute; top: 132px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div><div style="position: absolute; top: 89px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 45px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Pie</h3>
          <small>Interactive features</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [{data: 70, label:'Server'}, {data: 30, label: 'Client'}],
            {
              series: { pie: { show: true, innerRadius: 0.6, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
              legend: {backgroundColor: 'transparent'},
              colors: ['#0cc2aa','#fcc100'],
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%s: %p.0%' }
            }
          " style="height: 200px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas><div class="legend"><div style="position: absolute; width: 59px; height: 48px; top: 5px; right: 5px; background-color: transparent; opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:rgba(120,120,120,0.5)"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(12,194,170);overflow:hidden"></div></div></td><td class="legendLabel">Server</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(252,193,0);overflow:hidden"></div></div></td><td class="legendLabel">Client</td></tr></tbody></table></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 142px; left: 165px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(12,194,170);">Server<br>70%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 24px; left: 4.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(252,193,0);">Client<br>30%</div></span></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Pie</h3>
          <small>Full fill</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [{data: 75, label: 'iPhone'}, {data: 20, label: 'iPad'}],
            {
              series: { pie: { show: true, innerRadius: 0, stroke: { width: 0 }, label: { show: true, threshold: 0.05 } } },
              legend: {backgroundColor: 'transparent'},
              colors: ['#0cc2aa','#fcc100'],
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%s: %p.0%' }
            }
          " style="height: 200px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas><div class="legend"><div style="position: absolute; width: 62px; height: 48px; top: 5px; right: 5px; background-color: transparent; opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:rgba(120,120,120,0.5)"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(12,194,170);overflow:hidden"></div></div></td><td class="legendLabel">iPhone</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(252,193,0);overflow:hidden"></div></div></td><td class="legendLabel">iPad</td></tr></tbody></table></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 162px; left: 143.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(12,194,170);">iPhone<br>79%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 4px; left: 27px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(252,193,0);">iPad<br>21%</div></span></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Pie with tilt</h3>
          <small>Interactive features</small>
        </div>
        <div class="box-body">
          <div class="p-y-md">
            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
              [{data: 30, label: 'Server'}, {data: 70, label: 'Client'}],
              {
                series: { pie: { show: true, innerRadius: 0, stroke: { width: 2, color: '#fff' }, label: { show: true, threshold: 0.05 }, tilt: 0.5, startAngle: 30 } },
                legend: {backgroundColor: 'transparent'},
                colors: ['#fcc100','#0cc2aa'],
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                tooltip: true,
                tooltipOpts: { content: '%s: %p.0%' }
              }
            " style="height: 152px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 152px;" width="236" height="152"></canvas><canvas class="flot-overlay" width="236" height="152" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 152px;"></canvas><div class="legend"><div style="position: absolute; width: 59px; height: 48px; top: 5px; right: 5px; background-color: transparent; opacity: 0.85;"> </div><table style="position:absolute;top:5px;right:5px;;font-size:smaller;color:rgba(120,120,120,0.5)"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(252,193,0);overflow:hidden"></div></div></td><td class="legendLabel">Server</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(12,194,170);overflow:hidden"></div></div></td><td class="legendLabel">Client</td></tr></tbody></table></div><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 106.5px; left: 171px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(252,193,0);">Server<br>30%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 11.5px; left: 34.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:rgb(12,194,170);">Client<br>70%</div></span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Lines</h3>
          <small>Line with line display</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              {
                data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]],
                points: { show: true, radius: 0},
                splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
              },
              {
                data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]],
                points: { show: true, radius: 0},
                splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
              }
            ],
            {
              colors: ['#0cc2aa','#fcc100'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 17px; text-align: center;">1</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 53px; text-align: center;">2</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 88px; text-align: center;">3</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 124px; text-align: center;">4</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 159px; text-align: center;">5</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 195px; text-align: center;">6</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 230px; text-align: center;">7</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5.0</div><div style="position: absolute; top: 151px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5.5</div><div style="position: absolute; top: 126px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6.0</div><div style="position: absolute; top: 101px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6.5</div><div style="position: absolute; top: 76px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">7.0</div><div style="position: absolute; top: 51px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">7.5</div><div style="position: absolute; top: 26px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8.0</div><div style="position: absolute; top: 1px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8.5</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Bars</h3>
          <small>Bar with bar display</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              {
                data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]],
                bars: { show: true, barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, order:1 }
              },
              {
                data: [[1, 3], [2, 4], [3, 3], [4, 6], [5, 5], [6, 4], [7, 5], [8, 3]],
                bars: { show: true, barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, order:2 }
              }
            ],
            {
              colors: ['#0cc2aa','#fcc100'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 45px; text-align: center;">2</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 102px; text-align: center;">4</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 159px; text-align: center;">6</div><div style="position: absolute; max-width: 34px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 217px; text-align: center;">8</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div><div style="position: absolute; top: 132px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div><div style="position: absolute; top: 89px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 45px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="box">
        <div class="box-header">
          <h3>Line &amp; Bar</h3>
          <small>Combine line and bar</small>
        </div>
        <div class="box-body">
          <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
            [
              { data: [[1, 6.1], [2, 6.3], [3, 6.4], [4, 6.6], [5, 7.0], [6, 7.7], [7, 8.3]],
                points: { show: true, radius: 3},
                lines: { show: true, lineWidth: 1}
              },
              { data: [[1, 5.5], [2, 5.7], [3, 6.4], [4, 7.0], [5, 7.2], [6, 7.3], [7, 7.5]],
                bars: { show: true, barWidth: 0.4, align: 'center', lineWidth: 1, fillColor: { colors: [{ opacity: 0.6 }, { opacity: 1}] } }
              }
            ],
            {
              colors: ['#fcc100','#0cc2aa'],
              series: { shadowSize: 3 },
              xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
              yaxis:{ show: true, font: { color: '#ccc' }},
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
              tooltip: true,
              tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
            }
          " style="height: 200px; padding: 0px; position: relative;">
          <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;" width="236" height="200"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 21px; text-align: center;">1</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 54px; text-align: center;">2</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 87px; text-align: center;">3</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 120px; text-align: center;">4</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 152px; text-align: center;">5</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 185px; text-align: center;">6</div><div style="position: absolute; max-width: 38px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 218px; text-align: center;">7</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 6px; text-align: right;">0</div><div style="position: absolute; top: 141px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 6px; text-align: right;">2</div><div style="position: absolute; top: 106px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 6px; text-align: right;">4</div><div style="position: absolute; top: 71px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 6px; text-align: right;">6</div><div style="position: absolute; top: 36px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 6px; text-align: right;">8</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">10</div></div></div><canvas class="flot-overlay" width="236" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 236px; height: 200px;"></canvas></div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <!-- / -->

    <!-- SELECTOR DE TEMAS -->
    <div id="switcher">
      <div class="switcher box-color dark-white text-color" id="sw-theme">
        <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
          <i class="fa fa-gear"></i>
        </a>
        <div class="box-header">
          <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
          <h2>Theme Switcher</h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
          <p class="hidden-md-down">
            <label class="md-check m-y-xs"  data-target="folded">
              <input type="checkbox">
              <i class="green"></i>
              <span class="hidden-folded">Folded Aside</span>
            </label>
            <label class="md-check m-y-xs" data-target="boxed">
              <input type="checkbox">
              <i class="green"></i>
              <span class="hidden-folded">Boxed Layout</span>
            </label>
            <label class="m-y-xs pointer" ui-fullscreen>
              <span class="fa fa-expand fa-fw m-r-xs"></span>
              <span>Fullscreen Mode</span>
            </label>
          </p>
          <p>Colors:</p>
          <p data-target="themeID">
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
              <input type="radio" name="color" value="1">
              <i class="primary"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
              <input type="radio" name="color" value="2">
              <i class="accent"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
              <input type="radio" name="color" value="3">
              <i class="warn"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
              <input type="radio" name="color" value="4">
              <i class="success"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
              <input type="radio" name="color" value="5">
              <i class="info"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
              <input type="radio" name="color" value="6">
              <i class="blue"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
              <input type="radio" name="color" value="7">
              <i class="warning"></i>
            </label>
            <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
              <input type="radio" name="color" value="8">
              <i class="danger"></i>
            </label>
          </p>
          <p>Themes:</p>
          <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
            <label class="p-a col-sm-6 light pointer m-0">
              <input type="radio" name="theme" value="" hidden>
              Light
            </label>
            <label class="p-a col-sm-6 grey pointer m-0">
              <input type="radio" name="theme" value="grey" hidden>
              Grey
            </label>
            <label class="p-a col-sm-6 dark pointer m-0">
              <input type="radio" name="theme" value="dark" hidden>
              Dark
            </label>
            <label class="p-a col-sm-6 black pointer m-0">
              <input type="radio" name="theme" value="black" hidden>
              Black
            </label>
          </div>
        </div>
      </div>

      <div class="switcher box-color black lt" id="sw-demo">
        <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
          <i class="fa fa-list text-white"></i>
        </a>
        <div class="box-header">
          <h2>Demos</h2>
        </div>
        <div class="box-divider"></div>
        <div class="box-body">
          <div class="row no-gutter text-u-c text-center _600 clearfix">
            <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
          class="p-a col-sm-6 success">
          <span class="text-white">Zero</span>
        </a>
        <a href="dashboard.1.html"
        class="p-a col-sm-6 blue">
        <span class="text-white">One</span>
      </a>
      <a href="dashboard.2.html"
      class="p-a col-sm-6 warn">
      <span class="text-white">Two</span>
    </a>
    <a href="dashboard.3.html"
    class="p-a col-sm-6 danger">
    <span class="text-white">Three</span>
  </a>
  <a href="dashboard.4.html"
  class="p-a col-sm-6 green">
  <span class="text-white">Four</span>
  </a>
  <a href="dashboard.5.html"
  class="p-a col-sm-6 info">
  <span class="text-white">Five</span>
  </a>
  <div
  class="p-a col-sm-6 lter">
  <span class="text">...</span>
  </div>
  </div>
  </div>
  </div>
  </div>
  <!-- / -->

  <!-- ############ LAYOUT END-->

  </div>
  <!-- build:js scripts/app.html.js -->
  <!-- jQuery -->
  <script src="libs/jquery/jquery/dist/jquery.js"></script>
  <!-- Bootstrap -->
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <!-- core -->
  <script src="libs/jquery/underscore/underscore-min.js"></script>
  <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery/PACE/pace.min.js"></script>

  <script src="html/scripts/config.lazyload.js"></script>

  <script src="html/scripts/palette.js"></script>
  <script src="html/scripts/ui-load.js"></script>
  <script src="html/scripts/ui-jp.js"></script>
  <script src="html/scripts/ui-include.js"></script>
  <script src="html/scripts/ui-device.js"></script>
  <script src="html/scripts/ui-form.js"></script>
  <script src="html/scripts/ui-nav.js"></script>
  <script src="html/scripts/ui-screenfull.js"></script>
  <script src="html/scripts/ui-scroll-to.js"></script>
  <script src="html/scripts/ui-toggle-class.js"></script>

  <script src="html/scripts/app.js"></script>

  <!-- ajax -->
  <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="html/scripts/ajax.js"></script>

  <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
  <script type="text/javascript">

  /*
  ******************************
  ****** PROCESOS  *************
  ******************************
  */


  function update_values(temp1, temp2, volts){
  $("#display_temp1").html(temp1);
  $("#display_temp2").html(temp2);
  $("#display_volt").html(volts);
  }

  function process_msg(topic, message){
  // ej: "10,11,12"
  if (topic == "values"){
    var msg = message.toString();
    var sp = msg.split(",");
    var temp1 = sp[0];
    var temp2 = sp[1];
    var volts = sp[2];
    update_values(temp1,temp2,volts);
  }
  }
  //process_msg("values","77,88,99")
  function process_led1(){
  if ($('#input_led1').is(":checked")){
    console.log("Encendido");

    client.publish('led1', 'on', (error) => {
      console.log(error || 'Mensaje enviado!!!')
    })
  }else{
    console.log("Apagado");
    client.publish('led1', 'off', (error) => {
      console.log(error || 'Mensaje enviado!!!')
    })
  }
  }

  function process_led2(){
  if ($('#input_led2').is(":checked")){
    console.log("Encendido");

    client.publish('led2', 'on', (error) => {
      console.log(error || 'Mensaje enviado!!!')
    })
  }else{
    console.log("Apagado");
    client.publish('led2', 'off', (error) => {
      console.log(error || 'Mensaje enviado!!!')
    })
  }
  }

  /*
  ******************************
  ****** CONEXION  *************
  ******************************
  */

  // connect options
  const options = {
      connectTimeout: 4000,

      // Authentication
      clientId: 'age_2',
      //username: 'web_client',
      //password: '121212',

      keepalive: 60,
      clean: true,
  }

  var connected = false;

  // WebSocket connect url
  const WebSocket_URL = 'wss://invernet.ml:8094/mqtt'


  const client = mqtt.connect(WebSocket_URL, options)


  client.on('connect', () => {
    console.log('Mqtt conectado por WS! Exito!')

    client.subscribe('values', { qos: 0 }, (error) => {
      if (!error) {
        console.log('Suscripción exitosa!')
      }else{
        console.log('Suscripción fallida!')
      }
    })

    // publish(topic, payload, options/callback)
    client.publish('fabrica', 'esto es un verdadero éxito', (error) => {
      console.log(error || 'Mensaje enviado!!!')
    })
  })

  client.on('message', (topic, message) => {
  console.log('Mensaje recibido bajo tópico: ', topic, ' -> ', message.toString())
  process_msg(topic, message);
  })

  client.on('reconnect', (error) => {
    console.log('Error al reconectar', error)
  })

  client.on('error', (error) => {
    console.log('Error de conexión:', error)
  })







  </script>

  <!-- endbuild -->
  </body>
  </html>
