@extends('backend.master')
@section('title', 'Loại sản phẩm')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Loại sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm loại sản phẩm
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form action="" method="POST">						
						<div class="form-group">
							<label>Tên loại sản phẩm:</label>
							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="" value="Thêm mới">
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách loại sản phẩm</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên danh mục</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($typeproductlist as $type)
								<tr>
									<td>{{$type->name}}</td>
									<td>
										<a href="{{ asset('admin/typeproduct/edit/'.$type->typeProduct_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{ asset('admin/typeproduct/delete/'.$type->typeProduct_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
								@endforeach 
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop