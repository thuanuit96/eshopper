@extends('back-end.layouts.master')
@section('content')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
				<h1 class="page-header"><small>Sửa sản phẩm </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
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
						<form action="" method="post" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
							<input type="hidden" name="txtid" value="{{$pro->Id}}">
				      		<div class="form-group">
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltcate" id="inputsltcate" required class="form-control">
					      			<option value="{!!$pro->subcategory->get_category->Id!!}">{!!$pro->subcategory->get_category->Name!!}</option>
					      			@foreach($category as $row)
					      				<option value="{!!$row->Id!!}" >{!!$row->Name!!}</option>
					      			@endforeach
					      		</select>
				      		</div>
							<div class="form-group">
								<label for="input-id">Chọn danh mục con</label>
								<select name="sltsubcate" id="inputsltsubcate" required class="form-control">
									<option value="{{$pro->subcategory->Id }}">{!! $pro->subcategory->Name !!}</option>
									
								</select>
							</div>
				      		<div class="form-group">
				      			<label for="input-id">Tên sản phẩm</label>
				      			<input type="text" name="txtname" id="inputTxtname" class="form-control" value="{{isset($pro->Name) ? $pro->Name :'default'}}"  required="required">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Giá </label>
				      			<input type="number" name="txtprice" id="inputtxtpacket" value="{{$pro->Price}}" class="form-control" >
				      		</div>
							<div class="form-group">
								<label for="input-id">Kích cỡ </label>
								<input type="number" name="txtsize" id="inputtxtpacket" value="{{$pro->Size}}" class="form-control" >
							</div>
							<div class="form-group">
								<label for="input-id">Màu sắc </label>
								<input type="text" name="txtcolor" id="inputtxtpacket" value="{{$pro->Color}}" class="form-control" >
							</div>
							<div class="form-group">
								<label for="input-id">Mô tả </label>
							<textarea name="txtdescription" id="inputTxtre_Intro" class="form-control"  rows="2">{!! isset($pro->Description) ? $pro->Description :'null' !!}</textarea>
								<div class="form-group">
								<script type="text/javascript">
                                var editor = CKEDITOR.replace('txtre_Intro',{
                                    language:'vi',
                                    filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
                                    filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
                                    filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                    filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                });
							</script>
							<div class="form-group">
								<label for="input-id">Khuyễn mãi</label>
								<input type="text" name="txtdiscount" id="inputTxtname" class="form-control" value="{{$pro->Discount}}&#37;"  required="required">
							</div>
							<div class="form-group">
								<label for="input-id">Trạng thái</label>
								<input type="text" name="txtstatus" id="inputTxtname" class="form-control" value="{{$pro->Status}}"  required="required">
							</div>
							<div class="form-group">
								<div class="form-group">
										Hình ảnh1 : <input type="file" name="txtimg1" accept="image/png" id="inputtxtimg"  class="form-control" >
										Ảnh cũ: <img src="{!!url('images/product/'.$pro->Image1)!!}" alt="{!!$pro->Image1!!}" width="80" height="60">

								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									Hình ảnh2 : <input type="file" name="txtimg2" accept="image/png" id="inputtxtimg"  class="form-control" >
									{{--Ảnh cũ: <img src="{!!url('uploads/products/'.$pro->images)!!}" alt="{!!$pro->images!!}" width="80" height="60">--}}
									Ảnh cũ: <img src="{!!url('images/product/'.$pro->Image2)!!}" alt="ảnh cũ" width="80" height="60">
								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									Hình ảnh 3 : <input type="file" name="txtimg3" accept="image/png" id="inputtxtimg"  class="form-control" >
									Ảnh cũ: <img src="{!!url('images/product/'.$pro->Image3)!!}" alt="{!!$pro->Image3!!}" width="80" height="60">

								</div>
							</div>


				      		<input type="submit" name="btnadd" class="btn btn-primary" value="Lưu lại" class="button" />
				      	</form>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
	<script>

        $(document).ready(function () {

            $('#inputsltcate').change(function () {
                var id=$(this).val();
                console.log(id);
                $.ajax({
					type:'get',
					url:'<?php echo URL::to('admin/ajax/ajax_subcategory') ?>',
					data:{
						id:id,
					},

                    success:function (data) {
                        console.log(data);
                        $('#inputsltsubcate').html(data);
                    }
				})
            })


        })
	</script>
@endsection
