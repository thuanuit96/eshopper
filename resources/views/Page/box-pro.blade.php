@foreach($pro as $value)
    <div class="box-pro">
        <div class="col-sm-4 col-md-4 col-xs-6">
            <div class="post-img">
                <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset                                     ('images/product/'.$value->Image1)}}"></a>
                <button class="addc" onclick="addcart({{$value->Id}})">
                    <i class="fa fa-cart-plus" aria-hidden="true">Mua ngay</i></button>
                <a class="viewm" href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">
                    <i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
            </div>
            <p><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{{$value->Name}}</a></p>
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