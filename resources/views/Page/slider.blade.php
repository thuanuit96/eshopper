@extends('Page.index')
@section('slider')
<div class="row block-slider">
    <div class="col-md-8 col-sm-12">
        <ul class="rslides rslides1">
            <li id="rslides1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;">
                <img src="{{asset('css/htshop/r1.jpg')}}  alt="It is a long established fact that a reader will">
                <div class="txt">
                    <p>It is a long established fact that a reader will</p>
                </div>
            </li>
            <li id="rslides1_s1" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 500ms ease-in-out;" class="rslides1_on">
                <img src="{{asset('css/htshop/r2.jpg')}}"  alt="Thời trang cao cấp giảm giá đến 40%">
                <div class="txt">
                    <p>Thời trang cao cấp giảm giá đến 40%</p>
                </div>
            </li>
            <li id="rslides1_s2" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                <img src="{{asset('css/htshop/r3.jpg')}}"  alt="Thời trang cao cấp áo thun nữ hot nhất hè 2017">
                <div class="txt">
                    <p>Thời trang cao cấp áo thun nữ hot nhất hè 2017</p>
                </div>
            </li>
            <li id="rslides1_s3" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                <img src="{{asset('css/htshop/r4.jpg')}}"  alt="Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017">
                <div class="txt">
                    <p>Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017</p>
                </div>
            </li>
        </ul><a href="#" class="rslides_nav rslides1_nav prev">Previous</a><a href="#" class="rslides_nav rslides1_nav next">Next</a>				</div>
    <div class="col-md-4 col-sm-12">
        <ul class="block-banner">
            <li><a href="#" class="img"><img src="r1.jpg" ></a></li>
            <li><a href="#" class="img"><img src="r2.jpg"></a></li>
        </ul>
    </div>
</div>
@stop