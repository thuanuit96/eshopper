@extends('Page.index')
@section('wishlist')
    @if (Session()->has('flash_level'))
        <div class="alert alert-success" style="text-align: center" >
            <ul>
                <a class="close" data-dismiss="alert" href="#">x</a>

                {!! Session::get('flash_massage') !!}
            </ul>
        </div>
    @endif
    <div class="container">
    <div class="block-product">
        <h3><span>Sản phẩm yêu thích</span></h3>
        <div class="row">
            @foreach($data as $value)
                <div class="box-pro">
                    <div class="col-sm-4 col-md-3 col-xs-6 ">
                        <div  style="display: block;position: absolute;left: 85%;top: 2%; z-index: 999;" class="del"><a href="{{url('xoadanhsach/'.$value->Id)}}"><i style="font-size: 14px" class="fa fa-trash-o"></i></a> </div>
                        <div class="post-img">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image1)}}"></a>
                            <button class="addc" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true">Yêu thích</i></button>
                            <input type="hidden" class="pro_id" value="{{$value->Id}}">
                            <a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">
                                <i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
                        </div>
                        <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></h4>
                        <div class="score-callback" data-score="4" style="cursor: pointer;">
                            <img alt="1" src="{{asset('images/product/icon-star.png')}}" title="bad">
                            <img alt="2" src="{{asset('images/product/icon-star.png')}}" title="poor">
                            <img alt="3" src="{{asset('images/product/icon-star.png')}}" title="regular">
                            <img alt="4" src="{{asset('images/product/icon-star.png')}}" title="good">
                            <img alt="5" src="{{asset('images/product/star-off.png')}}" title="gorgeous">

                        </div>
                        <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span
                                            class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                    </div>
                </div>
            @endforeach




        </div>

    </div>
    </div>

    @endsection