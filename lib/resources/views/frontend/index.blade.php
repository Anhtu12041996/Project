@extends('frontend.master')
@section('title', 'Trang chủ')
@section('content')
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<div class="bannercontainer" >			
			<div class="banner">
				<ul>
					@foreach($slidelist as $slide)
					<!-- THE FIRST SLIDE -->
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 30%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{ asset('lib/storage/app/slide/'.$slide->img) }}" data-src="{{ asset('lib/storage/app/slide/'.$slide->img) }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{ asset('lib/storage/app/slide/'.$slide->img) }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
</div>
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<div class="col-md-3 col-sm-3 sport-title">
							&ensp;<h3>Sản phẩm khuyến mại</h3>
						</div>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($promotion as $prom)
								<div class="col-sm-3">
									<div class="single-item">
										@if ($prom->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$prom->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$prom->img)}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$prom->product_name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{number_format($prom->unit_price,0,',','.')}} ₫</span>
												<span class="flash-sale">{{number_format($prom->promotion_price,0,',','.')}} ₫</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{ asset('them-gio-hang/'.$prom->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ asset('chi-tiet-san-pham/'.$prom->product_id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div class="row">{{$promotion->links()}}</div>
					</div> <!-- .beta-products-list -->

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<div class="col-md-3 col-sm-3 sport-title">
							<a href="/collections/bong-da">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="icon-img replaced-svg">
									<defs>
										<style>
											.cls-1 {
												fill-rule: evenodd;
												fill:#fff;
											}
										</style>
									</defs>
									<path id="ic-11_" class="cls-1" d="M30.993,15.645c0-.037,0-0.075,0-0.112q0-.122-0.009-0.245c0-.042,0-0.085-0.006-0.126q-0.006-.118-0.015-0.237c0-.04-0.005-0.079-0.009-0.119q-0.011-.142-0.025-0.284c0-.022,0-0.044-0.006-0.065-0.012-.115-0.025-0.23-0.039-0.344,0-.034-0.009-0.067-0.014-0.1-0.011-.082-0.022-0.162-0.034-0.243q-0.01-.063-0.02-0.125c-0.012-.075-0.024-0.149-0.037-0.223-0.007-.042-0.014-0.083-0.022-0.125-0.015-.08-0.03-0.161-0.046-0.241l-0.019-.1c-0.023-.11-0.047-0.22-0.072-0.329C30.61,12.6,30.6,12.569,30.6,12.54c-0.019-.082-0.039-0.163-0.059-0.243-0.01-.042-0.021-0.083-0.033-0.124q-0.027-.1-0.056-0.207l-0.036-.128c-0.02-.071-0.041-0.141-0.063-0.212l-0.035-.115c-0.033-.1-0.066-0.209-0.1-0.312l-0.023-.067c-0.029-.083-0.058-0.167-0.088-0.249-0.015-.041-0.03-0.082-0.046-0.123-0.024-.065-0.048-0.129-0.073-0.193l-0.052-.131-0.076-.187L29.8,10.123c-0.032-.074-0.064-0.147-0.1-0.221l-0.038-.086Q29.6,9.671,29.533,9.528l-0.058-.119c-0.029-.06-0.059-0.12-0.089-0.18L29.319,9.1c-0.029-.057-0.059-0.113-0.089-0.169L29.161,8.8c-0.033-.061-0.068-0.121-0.1-0.182L29,8.516q-0.079-.136-0.16-0.271l-0.067-.109c-0.035-.057-0.071-0.115-0.107-0.172l-0.079-.123-0.1-.156L28.4,7.563,28.289,7.4l-0.077-.11c-0.061-.085-0.122-0.169-0.184-0.253h0a15.049,15.049,0,0,0-6.442-4.962h0q-0.154-.062-0.31-0.12L21.254,1.95q-0.148-.055-0.3-0.107l-0.04-.014c-0.095-.032-0.19-0.065-0.285-0.1l-0.055-.018C20.485,1.686,20.393,1.657,20.3,1.63l-0.07-.021c-0.088-.026-0.177-0.051-0.266-0.075l-0.084-.023-0.257-.066-0.1-.024-0.248-.058-0.11-.024-0.24-.05-0.123-.023-0.231-.042L18.44,1.2c-0.073-.012-0.147-0.024-0.221-0.035-0.05-.008-0.1-0.014-0.151-0.021l-0.211-.029L17.693,1.1l-0.2-.022L17.311,1.06l-0.187-.016-0.2-.013-0.168-.01c-0.079,0-.159-0.007-0.238-0.009l-0.137,0Q16.189,1,16,1t-0.378,0l-0.137,0c-0.079,0-.159,0-0.238.009l-0.169.01-0.2.013-0.187.016-0.181.016-0.2.022-0.164.019-0.212.029-0.15.021L13.56,1.2l-0.136.022-0.231.042-0.122.024-0.241.05-0.109.024-0.249.058-0.1.023-0.258.067-0.082.022c-0.089.024-.179,0.05-0.268,0.076l-0.068.02-0.278.086-0.053.017q-0.145.047-.288,0.1l-0.037.013q-0.15.052-.3,0.108l-0.018.007A15.033,15.033,0,0,0,3.966,7.049c-0.06.08-.119,0.161-0.177,0.242l-0.081.116c-0.036.052-.072,0.1-0.107,0.155l-0.085.126-0.1.152-0.081.126c-0.035.055-.069,0.111-0.1,0.166l-0.071.114Q3.08,8.379,3,8.515l-0.063.111c-0.033.059-.067,0.118-0.1,0.178L2.77,8.933C2.74,8.988,2.711,9.044,2.682,9.1L2.615,9.23l-0.088.177-0.059.121c-0.045.095-.089,0.189-0.132,0.284L2.295,9.9c-0.033.073-.065,0.146-0.1,0.22l-0.052.125q-0.039.093-.076,0.187l-0.052.131q-0.037.1-.073,0.192L1.9,10.881q-0.045.124-.088,0.249C1.8,11.152,1.8,11.175,1.788,11.2c-0.035.1-.069,0.208-0.1,0.312l-0.035.115c-0.021.07-.042,0.141-0.063,0.212-0.012.042-.024,0.085-0.036,0.128-0.019.069-.038,0.138-0.056,0.208-0.011.041-.022,0.082-0.032,0.124-0.021.081-.04,0.162-0.059,0.244C1.4,12.57,1.39,12.6,1.383,12.628c-0.025.109-.049,0.219-0.071,0.329-0.007.032-.013,0.065-0.019,0.1-0.016.08-.032,0.16-0.047,0.241-0.008.042-.015,0.083-0.022,0.125q-0.019.111-.037,0.223c-0.007.042-.013,0.083-0.019,0.124-0.012.082-.024,0.163-0.034,0.245,0,0.034-.009.067-0.013,0.1q-0.021.172-.039,0.344l-0.006.065q-0.014.142-.025,0.284c0,0.04-.006.079-0.009,0.119-0.005.079-.011,0.158-0.015,0.237,0,0.042,0,.084-0.007.126q-0.006.122-.009,0.245c0,0.037,0,.075,0,0.112C1,15.763,1,15.881,1,16s0,0.212,0,.318c0,0.048,0,.1,0,0.143s0,0.082,0,.122a14.918,14.918,0,0,0,2.26,7.355h0q0.382,0.611.819,1.18l0,0.006q0.432,0.562.915,1.082l0.022,0.024c0.061,0.065.123,0.13,0.185,0.195l0.008,0.008q0.29,0.3.6,0.582l0.019,0.018L6.028,27.2l0.051,0.045C6.139,27.3,6.2,27.351,6.26,27.4L6.3,27.439q0.291,0.247.6,0.48l0.061,0.047L7.133,28.1l0.083,0.061,0.173,0.123L7.47,28.336q0.289,0.2.587,0.386l0.1,0.063,0.166,0.1,0.113,0.067,0.165,0.1,0.117,0.066q0.288,0.161.584,0.308l0.13,0.065L9.6,29.564,9.73,29.626,9.893,29.7l0.139,0.06,0.162,0.07h0a15.038,15.038,0,0,0,11.538.03h0L22,29.746l0.027-.012c0.088-.039.176-0.078,0.263-0.119l0.022-.011a14.807,14.807,0,0,0,1.337-.706l0.027-.016c0.077-.046.154-0.093,0.231-0.141l0.047-.029,0.222-.142,0.045-.03,0.225-.15,0.009-.007q0.362-.247.709-0.516l0.036-.027,0.185-.148,0.075-.06,0.17-.141,0.085-.072c0.054-.046.108-0.092,0.161-0.139l0.088-.078,0.157-.141,0.081-.076q0.167-.156.33-0.316l0.046-.044,0.129-.131,0.107-.11,0.12-.126,0.111-.119,0.113-.125,0.114-.128,0.105-.121,0.12-.142,0.095-.113c0.05-.061.1-0.122,0.148-0.184l0.062-.077q0.1-.129.2-0.26l0.071-.1c0.043-.058.086-0.117,0.129-0.176l0.078-.11L28.4,24.44l0.076-.113c0.039-.057.077-0.116,0.114-0.174l0.071-.11c0.041-.064.081-0.128,0.12-0.193l0.058-.094q0.086-.143.169-0.286l0,0h0a14.917,14.917,0,0,0,1.974-6.882c0-.04,0-0.081,0-0.122s0-.1,0-0.142c0-.106,0-0.212,0-0.319S31,15.763,30.993,15.645ZM16.612,5.692L20.4,2.943q0.487,0.164.964,0.366a13.84,13.84,0,0,1,6.2,5.2l-1.321,4.17-3.936,1.293L16.612,9.838V5.692ZM6.261,6.261a13.733,13.733,0,0,1,4.378-2.952q0.477-.2.964-0.366l3.784,2.749V9.838L9.665,14,5.765,12.7,4.438,8.511A13.824,13.824,0,0,1,6.261,6.261ZM8.668,24.793L4.932,24.2a13.71,13.71,0,0,1-2.7-8.078l3.156-2.258,3.9,1.3,2.21,6.8ZM21.961,28.42q-0.3.142-.6,0.271a13.818,13.818,0,0,1-10.721,0q-0.342-.145-0.674-0.307L9.534,25.658l3.051-3.051h7.259l2.622,2.622Zm6.73-7.06a13.757,13.757,0,0,1-1.281,2.357l-4.079.646L20.608,21.64l2.117-6.515L26.6,13.852l3.173,2.27A13.681,13.681,0,0,1,28.691,21.361Z"></path>
								</svg>
								&ensp;<h3>Bóng đá</h3>
							</a>
						</div>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($football as $prod)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($prod->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$prod->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$prod->img)}}" height="320px" alt=""></a>
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
											<a class="add-to-cart pull-left" href="{{ asset('them-gio-hang/'.$prod->product_id) }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{ asset('chi-tiet-san-pham/'.$prod->product_id) }}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
					<div class="space50">
						<a class="viewmore" href="{{ asset('/bong-da') }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Xem tất cả sản phẩm bóng đá</a>
					</div>

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<div class="col-md-3 col-sm-3 sport-title">
							<a href="/collections/cau-long">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="icon-img replaced-svg">
								  <defs>
								    <style>
								      .cls-1 {
								        fill-rule: evenodd;
								        fill:#fff;
								      }
								    </style>
								  </defs>
								  <path id="ic-33" class="cls-1" d="M16.451,25.121L28.533,12.273,27.424,8.135l-3.8.722-0.643.911L13.041,23.152ZM3.82,20.744a6.564,6.564,0,1,0,11.369,6.564l0.757-1.312L4.578,19.432Zm1.262-2.187,1.662,0.96,1.749,1.01,6.619-15.3,0.38-1.063-1.186-3.6L10.168,1.67Zm4.285,2.474,1.4,0.808,1.4,0.808L22.209,9.089l0.441-.562L20.865,4.349l-4.511.544-0.266.662Z"></path>
								</svg>&nbsp;
								<h3>Cầu Lông</h3>
							</a>
						</div>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($badminton as $acces)
								<div class="col-sm-3">
									<div class="single-item" style="padding-bottom: 50px">
										@if ($acces->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif

										<div class="single-item-header">
											<a href="{{ asset('chi-tiet-san-pham/'.$acces->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$acces->img)}}" height="320px" alt=""></a>
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
					<div class="space50">
						<a class="viewmore" href="{{ asset('cau-long') }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Xem tất cả sản phẩm cầu lông</a>
					</div>

					<div class="space50">&nbsp;</div>

					<div class="beta-products-list">
						<div class="col-md-3 col-sm-3 sport-title">
							<a href="/collections/bong-ro">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="icon-img replaced-svg">
									<defs>
										<style>
										.cls-1 {
											fill-rule: evenodd;
											fill:#fff;
										}
									</style>
									</defs>
									<path id="ic-22" class="cls-1" d="M17.721,3.931a4.006,4.006,0,0,0,.236-2.243c0-.037,0-0.072-0.006-0.108-0.476-.045-0.957-0.07-1.444-0.07a14.971,14.971,0,0,0-5.3.967,34.976,34.976,0,0,1,5.02,2.974A10.777,10.777,0,0,0,17.721,3.931Zm7.6,8.554a9.991,9.991,0,0,0-1.9.375C25.974,17.308,26.967,22.927,27.21,27a14.931,14.931,0,0,0,4.281-9.9C29.751,14.962,27.446,12.244,25.321,12.485ZM10.168,8.646a13.273,13.273,0,0,0,4.815-2.225A31.9,31.9,0,0,0,9.386,3.3a15.052,15.052,0,0,0-6.579,7.1A29.416,29.416,0,0,1,8.336,9C8.94,8.887,9.565,8.771,10.168,8.646ZM20.535,9.082q0.24,0.241.477,0.49a15.9,15.9,0,0,1,1.6,1.993A10.565,10.565,0,0,1,25.152,11c2.351-.266,4.441,1.6,6.235,3.645a14.926,14.926,0,0,0-3.7-8.135,21.345,21.345,0,0,0-3.524.719A17.253,17.253,0,0,0,20.535,9.082Zm-1.974,7.742c0.615-2.083,1.328-3.584,2.708-4.559a14.056,14.056,0,0,0-1.343-1.659c-0.223-.235-0.449-0.461-0.676-0.684C13.711,13.69,6.124,20.612,5.434,26.61a14.962,14.962,0,0,0,9,4.735c1.292-2.571,2.508-7.8,3.231-10.9C18.015,18.948,18.314,17.658,18.561,16.823Zm-6.28-3.3a53.442,53.442,0,0,1,5.836-4.656c-0.622-.55-1.245-1.057-1.858-1.521a15.059,15.059,0,0,1-5.786,2.77c-0.618.128-1.252,0.246-1.864,0.36A21.346,21.346,0,0,0,2.083,12.4,14.969,14.969,0,0,0,4.2,25.062C5.3,20.72,9.06,16.487,12.281,13.521Zm7.128-5.512A19.83,19.83,0,0,1,23.73,5.788a22.105,22.105,0,0,1,2.608-.6A14.946,14.946,0,0,0,19.466,1.8a4.56,4.56,0,0,1-.547,3.032,11.724,11.724,0,0,1-1.465,1.531C18.1,6.866,18.755,7.414,19.409,8.009ZM20,17.248c-0.234.793-.529,2.063-0.871,3.532a64.6,64.6,0,0,1-3.1,10.7c0.16,0.005.32,0.012,0.481,0.012a14.934,14.934,0,0,0,9.259-3.2c-0.1-4.259-1.123-10.286-3.7-14.759C21.072,14.271,20.534,15.437,20,17.248Z"></path>
								</svg>&nbsp;
								<h3>Bóng Rổ</h3>
							</a>
						</div>
						<div class="beta-products-details">
							<div class="clearfix"></div>
						</div>
						<div class="row">
							@foreach($basketball as $acces)
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
					<div class="space50">
						<a class="viewmore" href="{{ asset('/bong-ro') }}"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Xem tất cả sản phẩm bóng rổ</a>
					</div>
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
	</div> <!-- #content -->

@stop