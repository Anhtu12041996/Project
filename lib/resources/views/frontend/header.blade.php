	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> Mai lâm, Đông Anh, Hà Nội</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0964678483</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
							<li><a href="">Chào {{Auth::user()->full_name}}</a></li>
							<li><a href="{{ asset('/dang-xuat') }}">Đăng xuất</a></li>
						@else
							<li><a href="{{ asset('/dang-ki') }}">Đăng kí</a></li>
							<li><a href="{{ asset('/dang-nhap') }}">Đăng nhập</a></li>
						@endif()
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{ asset('/') }}" id="logo"><img src="assets/dest/images/logo-cake.png" width="250px" height="100px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="{{ asset('/tim-kiem') }}">
							<input type="text" value="" name="key" placeholder="Nhập từ khóa..." />
							<button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng ({{$cartTotalQuantity = Cart::getTotalQuantity()}})<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<input type="hidden"{{$item = Cart::getContent()}}>
								@foreach($item as $item)
									<div class="cart-item">
										<a href="{{ asset('xoa-gio-hang/'.$item->id)}}" class="cart-item-delete"><i class="fa fa-times"></i></a>
										<div class="media">
											<a class="pull-left" href="{{ asset('chi-tiet-san-pham/'.$item->product_id) }}"><img src="{{asset('lib/storage/app/product/'.$item->attributes->image)}}" alt=""></a>
											<div class="media-body">
												<span class="cart-item-title">{{$item->name}}</span>
												<span class="cart-item-amount">{{$item->quantity}}*
													<span>
														@if($item->attributes->promotion_price == 0)
														{{number_format($item->price,0,',','.')}} ₫
														@else
														{{number_format($item->attributes->promotion_price,0,',','.')}} ₫
														@endif
													</span>
												</span>
											</div>
										</div>
									</div>
								@endforeach
									<div class="cart-caption">
										<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{number_format($subTotal = Cart::getTotal(),0,',','.')}} ₫</span></div>
										<div class="clearfix"></div>

										<div class="center">
											<div class="space10">&nbsp;</div>
											<a href="{{ asset('/dat-hang') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{ asset('/') }}">Trang chủ</a></li>
						{{-- @foreach($danhmuc_sp as $danhmuc)
							<li>
								<a href="{{ asset('loai-san-pham/'.$danhmuc->cate_id) }}">{{$danhmuc->cate_name}}</a>
							</li>
						@endforeach --}}
						<li><a href="{{ asset('bong-da') }}">Bóng đá</a></li>
						<li><a href="{{ asset('bong-ro') }}">Bóng rổ</a></li>
						<li><a href="{{ asset('cau-long') }}">Cầu lông</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->