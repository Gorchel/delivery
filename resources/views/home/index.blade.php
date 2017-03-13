@extends('layouts.main')

@section('css')
    @parent
    <!-- Добавлять css тут -->


@overwrite

@section('js')
    @parent
    <!-- Добавлять js тут -->

@overwrite

@section("content")
<!--Navigation-->
	</br>
	<nav id="menu" class="default navbar navbar-default" role="navigation">
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
               		@foreach($categories as $categorie)
					<li class="col-xs-12 col-sm-2 col-md-2 col-lg-2" id="{{$categorie->categorie_name}}"> <a href="#">{{$categorie->categorie_name}}</a></li>
					@endforeach
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>


	<div class="container">
	    <div class="content">
	    	<!--Main slider-->
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
			<!--Products menu-->
			<div class="products">
				@foreach($categories as $categorie)
					<div id="{{$categorie->categorie_name}}" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="shapka_tovarov">
							<h1>{{$categorie->categorie_name}}</h1>	
						</div>
						@foreach($categorie->goods as $good)	
							<div class="item col-xs-12 col-sm-4 col-md-3 col-lg-3">
								<div class="item_img">
									<img src="" alt="" class="item_wrapper">
								</div>
								<div class="item_content">
									<div class="item_title">
										<a href="#" data-toggle="modal" data-target="#item_modal">
											<h2>{{$good->good_name}}</h2>		
										</a>
									</div>
									<div class="item_description">
										<p>Состав товара:{{$good->good_description}}</p>
										<span class="item_weight">{{$good->good_weight}}</span>
										<span class="item_price">{{$good->good_price}}</span>
									</div>
									<hr>
									<button type="button" class="bnt_reserv btn btn-primary btn-lg">Заказать</button>						
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			</div>		


			<!--Item_modal -->
			<div class="modal fade"  id="item_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal_item modal-dialog" role="document">
					<div class="modal-content" >
						<div class="modal-body">
						<!--Modal detail slider-->
							<div class="modal_item_gallery col-md-6 col-lg-6 ">
								<div id="modal_carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<img class="slides" src="/images/slides/slide1.jpg">
										</div>
										<div class="item">
											<img class="slides" src="/images/slides/slide2.jpg">
										</div>
										<div class="item">
											<img class="slides" src="/images/slides/slide3.jpeg">
										</div>
									</div>
									<!-- Controls -->
									<a class="left carousel-control" href="#modal_carousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#modal_carousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
								</div>				
								<div class="modal_other_slides">
									<span data-target="#modal_carousel" data-slide-to="0" class="active">
										<img  class="modal_slide_example" src="/images/slides/slide1.jpg">
									</span>
									<span data-target="#modal_carousel" data-slide-to="1">
										<img class="modal_slide_example" src="/images/slides/slide2.jpg">
									</span>
									<span data-target="#modal_carousel" data-slide-to="2">
										<img class="modal_slide_example" src="/images/slides/slide3.jpeg">			
									</span>				
								</div>
							</div>
							<div class="modal_item_description col-md-6 col-lg-6">
								<div class="modal_about_item">
									<h1>{{$good->good_name}}<h1>
								</div>
								<div class="modal_reserv">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	


	    </div>
	</div>



@overwrite
