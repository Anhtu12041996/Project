@extends('frontend.master')
@section('title', 'Sản phẩm')
@section('content')

<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">
				<h2>					
					{{$product->product_name}}
				</h2>
			</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{ asset('/') }}">Trang chủ</a> / <span>Sản phẩm</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">
			<div class="col-sm-9">

				<div class="row">
					<div class="col-sm-4">
						<img src="{{asset('lib/storage/app/product/'.$product->img)}}" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">
								<h4>
									{{$product->product_name}}
								</h4>
							</p>
							<div class="space20">&nbsp;</div>		
							<p class="single-item-price">
								@if($product->promotion_price == 0)	
								<span class="flash-sale">{{number_format($product->unit_price,0,',','.')}} ₫</span>
								@else
								<span class="flash-del">{{number_format($product->unit_price,0,',','.')}} ₫</span>
								<span class="flash-sale">{{number_format($product->promotion_price,0,',','.')}} ₫</span>
								@endif
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo ms id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Lựa chọn:</p>
						<div class="single-item-options">
							<select class="wc-select" name="size">
								<option>Size</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<select class="wc-select" name="color">
								<option>Số lượng</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart" href="{{ asset('them-gio-hang/'.$product->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Mô tả</a></li>
						<li><a href="#tab-reviews">Nhận xét (0)</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
					</div>
					<div class="panel" id="tab-reviews">
						<p>No Reviews</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm tương tự</h4>
					<div class="space50">&nbsp;</div>
					<div class="row">
						@foreach($related as $prod)
							<div class="col-sm-4">
								<div class="single-item">
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
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Sản phẩm mới</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							@foreach($new as $prod_new)
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{ asset('chi-tiet-san-pham/'.$prod_new->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$prod_new->img)}}" alt=""></a>
									<div class="media-body">
										<p class="single-item-title">		
											{{$prod_new->product_name}}
										</p>
										<span class="beta-sales-price">{{number_format($prod_new->unit_price,0,',','.')}} ₫</span>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->

<!--customjs-->
<script type="text/javascript">
	$(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
            	$(this).closest("li").addClass("active");
            	$(this).parents('li').addClass('parent-active');
            }
        });
    });


</script>
<script>
	jQuery(document).ready(function($) {
		'use strict';

// color box

//color
jQuery('#style-selector').animate({
	left: '-213px'
});

jQuery('#style-selector a.close').click(function(e){
	e.preventDefault();
	var div = jQuery('#style-selector');
	if (div.css('left') === '-213px') {
		jQuery('#style-selector').animate({
			left: '0'
		});
		jQuery(this).removeClass('icon-angle-left');
		jQuery(this).addClass('icon-angle-right');
	} else {
		jQuery('#style-selector').animate({
			left: '-213px'
		});
		jQuery(this).removeClass('icon-angle-right');
		jQuery(this).addClass('icon-angle-left');
	}
});
});
</script>

@stop