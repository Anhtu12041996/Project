@extends('frontend.master')
@section('title', 'Đặt hàng')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{ asset('/') }}">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" name="name" placeholder="Họ tên" required>
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="address">Địa chỉ*</label>
							<input type="text" name="address" placeholder="Street Address" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" name="phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea name="notes"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<input type="hidden"{{$item = Cart::getContent()}}>
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
									@foreach($item as $item)
										<div class="media">
											<img width="25%" src="{{asset('lib/storage/app/product/'.$item->attributes->image)}}" class="pull-left">
											<div class="media-body">
												<p class="font-large">{{$item->name}}</p>
												<div class="space10">&nbsp;</div>
												<span>Giá :
													@if($item->attributes->promotion_price == 0)
													{{number_format($item->price,0,',','.')}} ₫
													@else
													{{number_format($item->attributes->promotion_price,0,',','.')}} ₫
													@endif
												</span>
												<div class="space10">&nbsp;</div>
												<span class="color-gray your-order-info">Số lượng: {{$item->quantity}}*</span>
											</div>
										</div>
									@endforeach
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">{{number_format($subTotal = Cart::getTotal(),0,',','.')}} ₫</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>

							<div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
				{{csrf_field()}}
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

@stop