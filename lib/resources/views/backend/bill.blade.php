@extends('backend.master')
@section('title', 'Sản phẩm')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách đơn hàng</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered" style="margin-top:20px;">	
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th width="20%">Tên khách hàng</th>
										<th>Email</th>
										<th>Địa chỉ</th>
										<th>Số điện thoại</th>
										<th>Ghi chú</th>
									</tr>
								</thead>
								<tbody>
									@foreach($customer as $cus)
										<tr>
											<td>{{$cus->customer_id}}</td>
											<td>{{$cus->name}}</td>
											<td>{{$cus->email}}</td>
											<td>{{$cus->address}}</td>
											<td>{{$cus->phone_number}}</td>
											<td>{{$cus->note}}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@stop