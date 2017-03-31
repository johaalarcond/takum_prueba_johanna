<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GESTION DE PRODUCTOS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    
    

  </head>
  <body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <span class="logo"></span>

        <nav class="navbar navbar-static-top" role="navigation">
          <span class="main-header sidebar-toggle"><b>GESTION DE PRODUCTOS</b></span>
          </a>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-inbox"></i>
                <span>Administracion</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li><a href="/almacen/categoria"><i class="fa fa-circle-o"></i> Categorías</a></li>	
				<li><a href="/almacen/producto"><i class="fa fa-circle-o"></i> Productos</a></li>
              </ul>
            </li>     
          </ul>
        </section>
      </aside>
       <div class="content-wrapper">
        
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12" align="center">
							<img src="/img/logo_fb.jpg" />
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
      

      
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
