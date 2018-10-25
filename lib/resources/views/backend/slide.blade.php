@extends('backend.master')
@section('title', 'Slide')
@section('main')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách slide</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm slide
				</div>
				<div class="panel-body">
					@include("errors.note")
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group" >
							<label>Thêm slide</label>
							<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
							<img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
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
				<div class="panel-heading">Danh sách slide</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Ảnh</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							@foreach($slidelist as $slide)
								<tr>
									<td>
										<img width="415px" src="{{ asset('lib/storage/app/slide/'.$slide->img) }}" class="thumbnail">
									</td>
									<td>
										<a href="{{ asset('admin/slide/delete/'.$slide->slide_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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