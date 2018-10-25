@extends('backend.master')
@section('title', 'Sửa sản phẩm')
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
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control" value="{{$product->product_name}}">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="unit_price" class="form-control" value="{{$product->unit_price}}">
								</div>
								<div class="form-group" >
									<label>Giá khuyến mại</label>
									<input required type="number" name="promotion_price" class="form-control" value="{{$product->promotion_price}}">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="{{ asset('lib/storage/app/product/'.$product->img) }}">
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@foreach($listcate as $cate)
											<option value="{{$cate->cate_id}}" @if($product->cate_id == $cate->cate_id) selected @endif>{{$cate->cate_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Loại sản phẩm</label>
									<select required name="type" class="form-control">
										@foreach($listtype as $type)
											<option value="{{$type->typeProduct_id}}"  @if($product->typeProduct_id == $type->typeProduct_id) selected @endif>{{$type->typeProduct_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea required name="description" class="ckeditor">{{$product->description}}</textarea>	
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								<input type="submit" name="submit" value="Cập nhật" class="btn btn-primary">
								<a href="{{ asset('admin/product') }}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{csrf_field()}}
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@stop