@extends('Admin.layouts.master')
@section('content')
	<span class="glyphicon glyphicon-search"></span>
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sản phẩm</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row">
							<div class="col-sm-12 col-md-10">
								<div class="form-group">
								<label for="inputLoai" class="col-sm-3 control-label"><strong> Danh sách sản phẩm</strong></label>
								<div class="col-md-5">
								</div>
								<div class="col-md-4">
									<input type="search" name="txttk" id="inputTxttk" class="form-control" value="" placeholder="Tìm sản phẩm..." required="required" title="">
								</div>
							</div>
								
								
							</div>
							<div class="col-sm-12 col-md-2">

									<a href="{{url('admin/sanpham/add')}}" title=""><button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm</button></a>

							</div>
						</div> 
						
					</div>
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
							<a class="close" data-dismiss="alert" href="#">x</a>
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        <ul>
									<a class="close" data-dismiss="alert" href="#">x</a>

									{!! Session::get('flash_massage') !!}
						        </ul>
						    </div>
						@endif
					<div class="panel-body" style="font-size: 12px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>
										<th>Tên sản phẩm</th>
										<th>Mô tả</th>
										<th>Màu sắc</th>
										<th>Kích cỡ</th>
										<th>Giá bán</th>
										<th>Trạng thái</th>
										<th>Hình ảnh</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($pro as $row)
										<tr>

											<td>{!!$row->Id!!}</td>
											<td>{!!$row->Name!!}</td>
											<td>{!!$row->Description!!}</td>


											<td>{!!$row->Color!!}</td>

											<td>
											@foreach($row->size as $row1)
												{!!$row1->name!!},
											@endforeach
											</td>
											<td>{!!$row->Price!!}&nbsp;VND</td>
											{{--<td>{!!$row->category->name!!}</td>--}}
											<td>
												{!!$row->Status!!}</td>

											<td> <img src="{!!url('images/product/'.$row->Image1)!!}" alt="{!!$row->Name!!}" width="50" height="40"></td>
											<td>
											    <a href="{!!url('admin/sanpham/edit/'.$row->Id)!!}" title="Sửa"><span class="glyphicon glyphicon-edit">edit</span> </a>
											    <a href="{!!url('admin/sanpham/del/'.$row->Id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="glyphicon glyphicon-remove">remove</span> </a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{!! $pro->render() !!}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->

@endsection