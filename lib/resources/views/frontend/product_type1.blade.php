@extends('frontend.master')
@section('title', 'Bóng rổ')
@section('content')	

<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Giầy bóng rổ</h4>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($shoelist as $shoe)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($shoe->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$shoe->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$shoe->img)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$shoe->product_name}}</p>
											<p class="single-item-price">
											@if($shoe->promotion_price == 0)	
												<span class="flash-sale">{{number_format($shoe->unit_price,0,',','.')}} ₫</span>
											@else
												<span class="flash-del">{{number_format($shoe->unit_price,0,',','.')}} ₫</span>
												<span class="flash-sale">{{number_format($shoe->promotion_price,0,',','.')}} ₫</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ asset('them-gio-hang/'.$shoe->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ asset('chi-tiet-san-pham/'.$shoe->product_id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Quần áo bóng rổ</h4>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($clothinglist as $clothes)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($clothes->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$clothes->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$clothes->img)}}" height="320px" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$clothes->product_name}}</p>
											<p class="single-item-price">
											@if($clothes->promotion_price == 0)	
												<span class="flash-sale">{{number_format($clothes->unit_price,0,',','.')}} ₫</span>
											@else
												<span class="flash-del">{{number_format($clothes->unit_price,0,',','.')}} ₫</span>
												<span class="flash-sale">{{number_format($clothes->promotion_price,0,',','.')}} ₫</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ asset('them-gio-hang/'.$clothes->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ asset('chi-tiet-san-pham/'.$clothes->product_id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<h4>Phụ kiện</h4>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($accessories as $acces)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($acces->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$acces->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$acces->img)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$acces->product_name}}</p>
											<p class="single-item-price">
											@if($acces->promotion_price == 0)	
												<span class="flash-sale">{{number_format($acces->unit_price,0,',','.')}} ₫</span>
											@else
												<span class="flash-del">{{number_format($acces->unit_price,0,',','.')}} ₫</span>
												<span class="flash-sale">{{number_format($acces->promotion_price,0,',','.')}} ₫</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ asset('them-gio-hang/'.$acces->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ asset('chi-tiet-san-pham/'.$acces->product_id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->
</div> <!-- .container -->

@stop

