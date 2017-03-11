@extends('layouts.main')

@section('css')
    @parent
    <!-- Добавлять css тут -->
    <link href="/css/styles.css" type="text/css" rel="stylesheet">
	<link href="/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="/bootstrap/dist/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    
    <link href="/css/font-awesome.min.css" type="text/css" rel="stylesheet"> 

@overwrite

@section('js')
    @parent
    <!-- Добавлять js тут -->
    <script type="text/javascript" src="/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>

@overwrite

@section("content")
<!--Navigation-->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<div class="nav_butt col-xs-3">
					<button type="button" class="pull-left navbar-toggle collapsed" data-toggle="collapse" data-target="#navig" aria-expanded="false"">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>	
				<span class="nav_logo col-xs-6 visible-xs"> 
					<a href="/"><img id="nav-logo" src="/images/some-logo.png" alt=""></a>
				</span>
				<span class="col-xs-3 visible-xs"> 
					<div class="nav_korzina">
						<button type="button" class="nav-korzina">
                   			<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							<span>Корзина</span>
						</button>
					</div>
				</span>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="navig" class="collapse navbar-collapse" aria-expanded="false">
				<ul class="nav navbar-nav">
					<li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#">Link</a></li>
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#">Link</a></li>
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#">Link</a></li>
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#">Link</a></li>
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#" >Link</a></li>
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="#">Link</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

    </br>
	<div class="container">
	    <div class="content">
	    	<div class="slider hidden-xs hidden-sm">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <img class="slides" ="slides" src="/images/slides/slide1.jpg" alt="SLIDE_1">
				      <div class="carousel-caption">
				        <p>some text about slide</p>
				      </div>
				    </div>
				    <div class="item">
				      <img class="slides" src="/images/slides/slide2.jpg" alt="SLIDE_2">
				      <div class="carousel-caption">
				        <p>some text about slide</p>
				      </div>
				    </div>
				    <div class="item">
				      <img class="slides" src="/images/slides/slide3.jpeg" alt="SLIDE_3">
				      <div class="carousel-caption">
				        <p>some text about slide</p>
				      </div>
				    </div>				    
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
			</div>

	    </div>
	</div>
@overwrite
