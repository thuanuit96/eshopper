
    <div id="wrapper">

    <!-- end header -->
    <div class="container">
    </div>
    <div id="content">
        <div class="container">
            <!-- start block-slider -->
            <div class="row block-slider">
                <div class="col-md-8 col-sm-12">
                    <ul class="rslides rslides1">
                        <li id="rslides1_s0" class="rslides1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out;">
                            <img src="{{asset('images/sliders/slider2.jpg')}}"  alt="It is a long established fact that a reader will">
                            <div class="txt">
                                <p>It is a long established fact that a reader will</p>
                            </div>
                        </li>
                        <li id="rslides1_s1" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="{{asset('images/sliders/slider2.jpg')}}" alt="Thời trang cao cấp giảm giá đến 40%">
                            <div class="txt">
                                <p>Thời trang cao cấp giảm giá đến 40%</p>
                            </div>
                        </li>
                        <li id="rslides1_s2" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="slider1.jpg" tppabs="http://htshop.esy.es/wp-content/uploads/2016/09/slider1.jpg" alt="Thời trang cao cấp áo thun nữ hot nhất hè 2017">
                            <div class="txt">
                                <p>Thời trang cao cấp áo thun nữ hot nhất hè 2017</p>
                            </div>
                        </li>
                        <li id="rslides1_s3" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;" class="">
                            <img src="{{asset('images/sliders/slider2.jpg')}}"  alt="Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017">
                            <div class="txt">
                                <p>Bộ sư tập set đồ nam không thể bỏ lỡ trong năm 2017</p>
                            </div>
                        </li>
                    </ul><a href="#" class="rslides_nav rslides1_nav prev">Previous</a><a href="#" class="rslides_nav rslides1_nav next">Next</a>				</div>
                <div class="col-md-4 col-sm-12">
                    <ul class="block-banner">
                        <li><a href="#" class="img"><img src="{{asset('images/sliders/r1.jpg')}}"></a></li>
                        <li><a href="#" class="img"><img src="{{asset('images/sliders/r2.jpg')}}"></a></li>
                    </ul>
                </div>
            </div>
            <!-- end block-slider -->
            <div class="block-product">
                <h3><span>Sản phẩm nỗi bật</span></h3>
                <div class="row">
                    @foreach($Products as $value)
                    <div class="box-pro">
                    <div class="col-sm-4 col-md-3 col-xs-6" style="width: 292px;">
                    <div class="post-img" style="height: 340px">
                    <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>
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




                        {{ $Products->render() }}

                </div>


            </div>
            <!-- end block-product -->
            <div class="block-product">
                <h3><span>Sản phẩm mới</span></h3>
                <div class="row">
                    @foreach($products_new as $value)
                        <div class="box-pro">
                            <div class="col-sm-4 col-md-3 col-xs-6" style="width: 292px;">
                                <div class="post-img" style="height: 340px">
                                    <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img"><img src="{{asset('images/product/'.$value->Image)}}"></a>
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

                    {{--<div class="" style="margin: 0px 50%">--}}
                        {{ $Products->render() }}

                </div>
            </div>
            <!-- end block-product -->
            <div class="register">
                <a href="#" class="img"><img src="{{asset('images/product/banner-qc.jpg')}}" /></a>
            </div>
            <!-- end register -->
            <div class="block-fashion">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Thời trang nam</span></h3>
                        <ul>
                            @foreach($men_pro as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                            <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
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
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Thời trang nữ </span></h3>
                        <ul>

                            @foreach($women_pro as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                                <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
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
                            </li>

                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <h3><span>Phụ kiện</span></h3>
                        <ul>
                            @foreach($pk as $value)
                            <li>
                            <div class="detail">
                            <div class="img-fasti">
                            <a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="img">
                            <img src="{{asset('images/product/'.$value->Image)}}" alt="{{$value->Slug}}" title="{{$value->Name}}">
                            </a>

                                <button class="add-icon" onclick="wishlist({{$value->Id}})"><i class="fa fa-heart" aria-hidden="true"></i></button>
                            <a class="v-icon" href="sony-xperia-xa.htm"><i
                            class="fa fa-search-plus"></i>
                            </a>
                            </div>
                            <div>
                            <h4><a href="{{route('product_detail',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!! $value->Name !!}</a>
                            </h4>
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
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end block-fashion -->
            <div class="block-news-h">
                <h3><span>Tin tức</span></h3>
                <div class="row">
                    <!-- Get post News Query -->
                @foreach($news as $value)
                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="detai-new">
                <h4><a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}">{!!$value->Title!!}</a></h4>
                <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}"><img style="max-height: 250px;min-width: 262px" src="{{asset('images/news/'.$value->Images)}}"alt="{{$value->Slug}}" title="{!!$value->Title!!}">
                </a>
                <p>
                {!! $value->Intro !!}...
                </p>
                <div class="hk-date">
                <span>
                <i class="fa fa-calendar-minus-o" aria-hidden="true"></i> {!!$value->updated_at!!}
                </span>
                </div>
                <a href="{{route('Tin-tuc',['slug'=>$value->Slug,'id'=>$value->Id])}}" class="read-more">Xem thêm</a>
                </div>
                </div>
                @endforeach
                    <!-- Get post News Query -->
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- end footer -->
        <script type="text/javascript">
            //Alert MsgAd
            clicksor_enable_MsgAlert = true;
            //default pop-under house ad url
            clicksor_enable_pop = true; clicksor_frequencyCap = 0.1;
            durl = '';
            //default banner house ad url
            clicksor_default_url = '';
            clicksor_banner_border = '#000f30'; clicksor_banner_ad_bg = '#FFFFFF';
            clicksor_banner_link_color = '#0c15ff'; clicksor_banner_text_color = '#da0041';
            clicksor_banner_image_banner = true; clicksor_banner_text_banner = true;
            clicksor_layer_border_color = '';
            clicksor_layer_ad_bg = ''; clicksor_layer_ad_link_color = '';
            clicksor_layer_ad_text_color = ''; clicksor_text_link_bg = '';
            clicksor_text_link_color = '#0c59ff'; clicksor_enable_text_link = true;
            clicksor_enable_VideoAd = true;
        </script>
        <style type="text/css">
            * html div#fl813691 {position: absolute; overflow:hidden;
                top:expression(eval(document.compatMode &&
		document.compatMode=='CSS1Compat') ?
		documentElement.scrollTop
		+(documentElement.clientHeight-this.clientHeight)
		: document.body.scrollTop
		+(document.body.clientHeight-this.clientHeight));}
            #fl813691{z-index:9999999;font: 12px Arial, Helvetica, sans-serif; color:#666; position:fixed; _position: absolute; right:0; bottom:0; height:150px; }

            #coh963846{color:#690;display:block; height:20px; line-height:20px; font-size:11px; width:290px;}
            #coh963846 a{color:#690;text-decoration:none;}
            #coc67178{float:right; padding:0; margin:0; list-style:none; overflow:hidden; height:15px;}
            #coc67178 li{display:inline;}
            #coc67178 li a{background-image:url(http://hocwebgiare.com/images/button.gif); background-repeat:no-repeat; width:30px; height:0; padding-top:15px; overflow:hidden; float:left;}
            #coc67178 li a.close{background-position: 0 0;}
            #coc67178 li a.close:hover{background-position: 0 -15px;}
            #coc67178 li a.min{background-position: -30px 0;}
            #coc67178 li a.min:hover{background-position: -30px -15px;}
            #coc67178 li a.max{background-position: -60px 0;}
            #coc67178 li a.max:hover{background-position: -60px -15px;}

        </style>
        <div style="height: 212px;" id="fl813691">
            <div id="eb951855">
                <div id="cob263512">

                    <div id="coh963846">
                        <ul id="coc67178">
                            <li id="pf204652hide"><a class="min" href="javascript:pf204652clickhide();" title="Ẩn đi">Ẩn</a></li>

                            <li id="pf204652show" style="display: none;"><a class="max" href="javascript:pf204652clickshow();" title="Hiện lại">Xem </a></li>
                            <li id="pf204652close"><a class="close" href="javascript:pf204652clickclose();" title="Đóng lại">Đóng</a></li>
                        </ul>

                    </div>

                    <div id="co453569">


                        {{--<a href="http://hocwebgiare.com" target="_blank"><img src="http://hocwebgiare.com/images/chatluongdaotao.png" border="0"> </a>--}}



                    </div>
                </div></div></div>

        <script>
            pf204652bottomLayer = document.getElementById('fl813691');
            var pf204652IntervalId = 0;
            var pf204652maxHeight = 230;//Chieu cao khung quang cao
            var pf204652minHeight = 20;
            var pf204652curHeight = 0;
            function pf204652show( ){
                pf204652curHeight += 2;
                if (pf204652curHeight > pf204652maxHeight){
                    clearInterval ( pf204652IntervalId );
                }
                pf204652bottomLayer.style.height = pf204652curHeight+'px';
            }
            function pf204652hide( ){
                pf204652curHeight -= 3;
                if (pf204652curHeight < pf204652minHeight){
                    clearInterval ( pf204652IntervalId );
                }
                pf204652bottomLayer.style.height = pf204652curHeight+'px';
            }
            pf204652IntervalId = setInterval ( 'pf204652show()', 5 );
            function pf204652clickhide(){
                document.getElementById('pf204652hide').style.display='none';
                document.getElementById('pf204652show').style.display='inline';
                pf204652IntervalId = setInterval ( 'pf204652hide()', 5 );
            }
            function pf204652clickshow(){
                document.getElementById('pf204652hide').style.display='inline';
                document.getElementById('pf204652show').style.display='none';
                pf204652IntervalId = setInterval ( 'pf204652show()', 5 );
            }
            function pf204652clickclose(){
                document.body.style.marginBottom = '0px';
                pf204652bottomLayer.style.display = 'none';
            }
        </script>

    </div>
<!-- end wrapper -->
