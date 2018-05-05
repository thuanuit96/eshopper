@extends('page.index')
@section('product_detail')
<section>
    <base href="http://eshopper.dev/">
    <div class="container"><div class="grid-100"><div class="breadcrumb_view"><ul class="breadcrumbs"><li>
                        <a href="/">Trang chủ</a></li><li>
                        <a class="72058" href="/nu-pc72058.html">NỮ</a></li><li>
                        <a class="72061" href="/ao-pc72061.html">Áo</a></li><li>
                        <a class="72073" href="/ao-thun-pc72073.html">Áo thun</a></li></ul><span class="clearfix menuActive" data-rel="view"></span></div></div></div>
    <div class="container">
        <div class="row">
           @include('page.menu')

            <div class="col-sm-9 padding-right">

                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="{{asset('images/product-details/1.jpg')}}" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
                                    <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        {{--<div class="product-information"><!--/product-information-->--}}
                            {{--<img src="images/product-details/new.jpg" class="newarrival" alt="" />--}}
                            {{--<h2>{{$product_detail->Product_Name}}</h2>--}}
                            {{--<p>Web ID: 1089772</p>--}}
                            {{--<img src="images/product-details/rating.png" alt="" />--}}
                            {{--<span>--}}
									{{--<span>${{$product_detail->Product_Price}}</span>--}}
									{{--<label>Quantity:</label>--}}
									{{--<input type="text" value="3" />--}}
									{{--<button type="button" class="btn btn-fefault cart">--}}
										{{--<i class="fa fa-shopping-cart"></i>--}}
										{{--Add to cart--}}
									{{--</button>--}}
								{{--</span>--}}
                            {{--<p><b>Availability:</b> In Stock</p>--}}
                            {{--<p><b>Condition:</b> New</p>--}}
                            {{--<p><b>Brand:</b> E-SHOPPER</p>--}}
                            {{--<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>--}}
                        {{--</div><!--/product-information-->--}}
                        <div class="" id="productInfo">
                            <h1 class="dttitleProduct">Áo phông ngắn tay nữ in graphic Đầu Gấu Đây. Graphic. Bu Char. Bu Stickers vàng</h1>
                            <div class="colL">
                                <span style="position: relative;top: 2px;">Mã sản phẩm:</span>
                            </div>
                            <div class="colL-1">1.2.02.1.02.019.118.01.11000002</div>
                            <div class="clear"></div>
                            <div class="tableDetails">
                                <div class="colorProduct">
                                    <div class="colL">
                                        <span style="position: relative;top: 2px;">Màu sắc</span>
                                    </div>
                                    <div class="colL-1">
                                        <div class="attr">
                                            <p class="color req" column="i4">
                                                <a rel="nofollow" href="javascript:" data-cloudzoom="useZoom: '.cloudzoom', image: '//cdn.nhanh.vn/cdn/store/81/ps/20180427/1_2_02_1_02_019_118_01_11000002_01_600x899.jpg', zoomImage: '//cdn.nhanh.vn/cdn/store/81/ps/20180427/1_2_02_1_02_019_118_01_11000002_01_600x899.jpg'" class="cloudzoom-gallery active cloudzoom-gallery-active" value="14" data-src="1_2_02_1_02_019_118_01_11000002_01_600x899-1.jpg" tppabs="http://cdn.nhanh.vn/cdn/store/81/ps/20180427/1_2_02_1_02_019_118_01_11000002_01_600x899.jpg" style="background-color: #FFD800" title="Vàng"></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="optionSize">
                                    <div class="colL">
                                        <span style="position: relative;top: 2px;">Size: </span>
                                    </div>
                                    <div class="colL-1">
                                        <p class="size req" column="i5">
                                            <a rel="nofollow" value="81" href="javascript:void(0)" class="active">L</a>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="price">
                                <p style="font-weight:bold;">
                                    <span>399,000 VNĐ </span>
                                </p>
                            </div>
                            <div class="attr">
                                <br>
                                <div class="qualityAddcart">
                                    <p class="qty"><span>Qty</span><i id="psQtt" max="1" val="1">1</i><i id="psQttUp">+</i><i id="psQttDown">-</i></p>
                                    <button id="addToCart" psid="7011954" selid="7011954" title="Vui lòng chọn màu sắc hoặc kích cỡ!" class="btn unsel" ck="0">Mua ngay</button>
                                </div>
                                <span class="clearfix"></span>
                                <br>
                            </div>
                            <div class="policy active">
                                <label><i class="fa fa-caret-down"></i>&nbsp; Chi tiết sản phẩm</label>
                                <p style="">
                                    <span class="brandView">Xuất xứ: Thương hiệu Bò sữa</span>
                                </p>
                            </div>
                            <div class="policy active">
                                <label><i class="fa fa-caret-down"></i>&nbsp; Mua hàng trực tiếp tại cửa hàng</label>
                                <p><span>133 Thái Hà, Phường Trung Liệt,Q.Đống Đa, Hà Nội (<b class="success-pro">còn hàng</b>)</span><span>BS 93 Nguyễn Chí Thanh, Phường Láng Thượng
         (<b class="danger-pro">sắp hết hàng</b>)</span>
                                </p>
                            </div>
                            <div class="policy">
                                <label><i class="fa fa-caret-right"></i>&nbsp; Giao hàng và trả lại hàng</label>
                                <p style="display: none"></p>
                                <p><span>Đổi hàng trong vòng 72h</span> <span>Phí vận chuyển nội thành Hà Nội: 20.000&nbsp;</span><span>Phí vận chuyển ngoại thành/ngoại tỉnh: tùy thuộc vào địa điểm</span> <span>Thanh toán&nbsp;khi nhận hàng</span></p>
                                <p></p>
                            </div>
                            <div id="sizeTb" style="border-top: 1px solid #DDD;padding: 10px 0px;color: #777">
                                <label>
                                    <i class="fa fa-caret-right"></i>
                                    &nbsp; Tải bảng size</label>
                                <p id="dialogContent" style="display: none">
                                    <img style="max-width: 100%" src="sb_1483514660_605.png" tppabs="http://cdn.nhanh.vn/cdn/store/81/bn/sb_1483514660_605.png">
                                </p>
                            </div>
                            <div class="connectSocial">
                                <ul class="add-to-links">
                                    <li>
                                        <a class="setFav" rel="7011954" href="javascript:void(0)"><i class="fa fa-heart-o"></i><span>Sản phẩm yêu thích</span></a>
                                    </li>
                                    <div class="clear"></div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--/product-details-->
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/recommend3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
@endsection