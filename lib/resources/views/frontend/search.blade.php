@extends('frontend.master')
@section('title', 'Tìm kiếm')
@section('content')

<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Tìm kiếm</h4>
						<div class="beta-products-details">
							<p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($product as $prod)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($prod->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$prod->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$prod->img)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$prod->product_name}}</p>
											<p class="single-item-price">
											@if($prod->promotion_price == 0)	
												<span class="flash-sale">{{number_format($prod->unit_price,0,',','.')}} ₫</span>
											@else
												<span class="flash-del">{{number_format($prod->unit_price,0,',','.')}} ₫</span>
												<span class="flash-sale">{{number_format($prod->promotion_price,0,',','.')}} ₫</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
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