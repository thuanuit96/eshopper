@extends('Admin.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Dơn đặt hàng</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel-heading">
					Danh sách đơn đặt hàng						
				</div>
				<div class="panel panel-default">					
					@if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					    @elseif (Session()->has('flash_level'))
					    	<div class="alert alert-success">
						        <ul>
						            {!! Session::get('flash_massage') !!}	
						        </ul>
						    </div>
						@endif
					<div class="panel-body" style="font-size: 13px;">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>ID</th>										
										<th>Tên k/h</th>
										<th>Địa chỉ</th>
										<th>Điện thoại</th>
										<th class="email">Email</th>
										<th>Ngày đặt</th>
										<th>Thành tiền</th>
										<th>H/t thanh toán</th>
										<th> Thanh toán</th>
										<th>Ghi chú</th>

										<th>Trạng thái</th>
										<th>Xác nhận</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($order as $row)
										<tr>
											<td>{!!$row->Id!!}</td>
											<td>{!!$row->Name!!}</td>
											<td>{!!$row->Address!!}</td>
											<td>{!!$row->PhoneNumber!!}</td>
											<td>{!!$row->Email!!}</td>
											<td>{!!$row->Order_date!!}</td>
											<td><span style="color: red;font-weight: bold">{!!$row->Total!!}</span> Vnd</td>
											<td>{!! $row->Payment_Method !!}</td>
											<td>{!! $row->Payment_Status !!}</td>
											<td>{!! $row->Note !!}</td>
											<td>{!! $row->Payment_Status !!}</td>
											<td>
												@if($row->Confirm =='Chưa xác nhận')
													<span style="color:#d35400;">Chưa xác nhận</span>
												@else
													<span style="color:#27ae60;"> Đã xác nhận</span>
												@endif
											</td>
											<td>
											    <a href="{!!url('admin/donhang/detail/'.$row->Id)!!}" title="Chi tiết">Chi tiết  </a> &nbsp;
											    <a href="{!!url('admin/donhang/del/'.$row->Id)!!}"  title="Hủy đơn hàng" onclick="return xacnhan('Xóa danh mục này ?')"> Hủy</a>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{--{!! $data->render() !!}--}}
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection