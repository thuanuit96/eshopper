
    <div class="block-product">
<div class="container">
    <div class="row">

        <h3><span>Sản phẩm nỗi bật</span></h3>
        @foreach($Products as $value)
        <div class="col-sm-4 col-md-3 col-xs-6">
            <div class="post-img">
                <a href="#" tppabs="" class="img"><img src="{{asset('css/cart/1.jpg')}}"></a>
                <button type="button" onclick="addcart({{$value->Id}})" class="btn btn-fefault add-to-cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </button>
                    <button class="addc" onclick="addcart({{$value->Id}})"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
                <a class="viewm" href="{{route('product_detail',['id'=>$value->Id])}}" tppabs="http://htshop.esy.es/san-pham/laptop-asus-x403sa-n3700"><i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
            </div>
            <h4><a href="laptop-asus-x403sa-n3700.htm">{{$value->Name}}</a></h4>
            <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
            <p><span class="price-pro"><span class="woocommerce-Price-amount amount">{{$value->Price}}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
        </div>

        @endforeach
        {{ $Products->render() }}


    </div>
</div>
    </div>
    <div class="container">
        <div class="block-fashion">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <h3><span>Thời trang nam</span></h3>
                    <ul>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <h3><span>Thời trang nữ</span></h3>
                    <ul>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6">
                    <h3><span>Phụ kiện</span></h3>
                    <ul>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="detail">
                                <div class="img-fasti">
                                    <a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa" class="img"><img src="{{asset('css/htshop/dienthoai.jpg')}}"  alt="Sony Xperia XA" title="Sony Xperia XA"></a>
                                    <form action="" method="post">
                                        <input type="hidden" name="add-to-cart" value="64">
                                        <button class="add-icon"><i class="fa fa-cart-plus"></i></button>
                                    </form>
                                    <a class="v-icon" href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa"><i class="fa fa-search-plus"></i></a>
                                </div>
                                <div>
                                    <h4><a href="sony-xperia-xa.htm" tppabs="http://htshop.esy.es/san-pham/sony-xperia-xa">Sony Xperia XA</a></h4>
                                    <div class="score-callback" data-score="4" style="cursor: pointer;"><img alt="1" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="bad">&nbsp;<img alt="2" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="poor">&nbsp;<img alt="3" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="regular">&nbsp;<img alt="4" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-on.png" title="good">&nbsp;<img alt="5" src="http://htshop.esy.es/wp-content/themes/thientrieu//images/front/star-off.png" title="gorgeous"><input name="score" type="hidden" value="4"></div>
                                    <p><span class="price-pro"><span class="woocommerce-Price-amount amount">5.990.000&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></span></span></p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </div>


        <div class="block-news-h">
            <h3><span>Tin tức</span></h3>
            <div class="row">
                <!-- Get post News Query -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="detai-new">
                        <h4><a href="iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" tppabs="http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html">iPhone 7 ra mắt: Chống nước, camera kép, giá từ 649 USD</a></h4>
                        <a href="iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" tppabs="http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html"><img src="thumbnail.php-src=http---htshop.esy.es-wp-content-uploads-2016-09-a1_1.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c.jpg" tppabs="http://htshop.esy.es/wp-content/themes/thientrieu/thumbnail.php?src=http%3A%2F%2Fhtshop.esy.es%2Fwp-content%2Fuploads%2F2016%2F09%2Fa1_1.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c" alt="iPhone 7 ra mắt: Chống nước, camera kép, giá từ 649 USD" title="iPhone 7 ra mắt: Chống nước, camera kép, giá từ 649 USD"></a>
                        <p>
                            Apple vừa chính thức trình làng thế hệ iPhone mới. Đúng như dự đoán trước đó, iPhone 7 đã có tính năng chống nước, nút Home mới và camera...								</p>
                        <div class="hk-date"><span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> 09/04/2017</span></div>
                        <a href="iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" tppabs="http://htshop.esy.es/iphone-7-ra-mat-chong-nuoc-camera-kep-gia-tu-649-usd.html" class="read-more">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="detai-new">
                        <h4><a href="thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html" tppabs="http://htshop.esy.es/thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html">Thu về là chỉ muốn mặc xinh yêu như thế này thôi…</a></h4>
                        <a href="thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html" tppabs="http://htshop.esy.es/thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html"><img src="thumbnail.php-src=http---htshop.esy.es-wp-content-uploads-2016-09-img-4584-1473150837656.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c.jpg" tppabs="http://htshop.esy.es/wp-content/themes/thientrieu/thumbnail.php?src=http%3A%2F%2Fhtshop.esy.es%2Fwp-content%2Fuploads%2F2016%2F09%2Fimg-4584-1473150837656.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c" alt="Thu về là chỉ muốn mặc xinh yêu như thế này thôi…" title="Thu về là chỉ muốn mặc xinh yêu như thế này thôi…"></a>
                        <p>
                            Mùa thu, mùa của sự lãng mạn đã sang và giờ là lúc cực kỳ thích hợp để chúng ta điệu đà một chút với những chiếc áo, váy...								</p>
                        <div class="hk-date"><span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> 07/02/2017</span></div>
                        <a href="thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html" tppabs="http://htshop.esy.es/thu-ve-la-chi-muon-mac-xinh-yeu-nhu-nay-thoi.html" class="read-more">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="detai-new">
                        <h4><a href="laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html" tppabs="http://htshop.esy.es/laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html">Laptop xoay gập 360 độ về Việt Nam, giá 12,9 triệu đồng</a></h4>
                        <a href="laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html" tppabs="http://htshop.esy.es/laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html"><img src="thumbnail.php-src=http---htshop.esy.es-wp-content-uploads-2016-09-3HP_Pavillion_X360_zing_2.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c.jpg" tppabs="http://htshop.esy.es/wp-content/themes/thientrieu/thumbnail.php?src=http%3A%2F%2Fhtshop.esy.es%2Fwp-content%2Fuploads%2F2016%2F09%2F3HP_Pavillion_X360_zing_2.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c" alt="Laptop xoay gập 360 độ về Việt Nam, giá 12,9 triệu đồng" title="Laptop xoay gập 360 độ về Việt Nam, giá 12,9 triệu đồng"></a>
                        <p>
                            HP Pavilion x360 có thiết kế đa dụng với khả năng gập mở ở nhiều tư thế khác nhau. Ngoài thiết kế ấn tượng, cấu hình tốt, dòng Pavilion...								</p>
                        <div class="hk-date"><span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> 09/01/2017</span></div>
                        <a href="laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html" tppabs="http://htshop.esy.es/laptop-xoay-gap-360-ve-viet-nam-gia-129-trieu-dong.html" class="read-more">Xem thêm</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="detai-new">
                        <h4><a href="iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html" tppabs="http://htshop.esy.es/iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html">iPhone 3G hàng sưu tầm giá 50 triệu tại Việt Nam</a></h4>
                        <a href="iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html" tppabs="http://htshop.esy.es/iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html"><img src="thumbnail.php-src=http---htshop.esy.es-wp-content-uploads-2016-09-iPhone3G3_1.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c.jpg" tppabs="http://htshop.esy.es/wp-content/themes/thientrieu/thumbnail.php?src=http%3A%2F%2Fhtshop.esy.es%2Fwp-content%2Fuploads%2F2016%2F09%2FiPhone3G3_1.jpg&amp;w=300&amp;h=200&amp;zc=1&amp;a=c" alt="iPhone 3G hàng sưu tầm giá 50 triệu tại Việt Nam" title="iPhone 3G hàng sưu tầm giá 50 triệu tại Việt Nam"></a>
                        <p>
                            2 chiếc iPhone 3G được đưa về Việt Nam là máy chưa kích hoạt, được chủ máy đấu giá trên eBay với giá lên đến 50 triệu đồng. 2...								</p>
                        <div class="hk-date"><span><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> 09/05/2016</span></div>
                        <a href="iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html" tppabs="http://htshop.esy.es/iphone-3g-hang-suu-tam-gia-50-trieu-tai-viet-nam.html" class="read-more">Xem thêm</a>
                    </div>
                </div>
                <!-- Get post News Query -->
            </div>
        </div>
    </div>
                    <script>

                    function addcart(id){
                    // var product_id=$("#product_id_+").val();
                    console.log(id);
                    $.ajax({
                    url : "cart/"+id,
                    type:'GET',
                    data : {

                    },
                    success : function (result){

                    $("#cart_count").html(result);
                    }
                    });




                    }

                    </script>
    <style>
    /*----- reset -----*/
    html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0; font-family: inherit; font-size: 100%; margin: 0; outline: 0; padding: 0; }
    :focus {outline: 0; }
    ol,ul {list-style: none; }
    img {width: auto\9; height: auto; max-width: 100%; vertical-align: middle; -ms-interpolation-mode: bicubic; }
    table {border-collapse: collapse; border-spacing: 0; width: 100%; }
    html,body {height: 100%; }
    /*----- common -----*/
    body {background-color: #fff; color: #000; font: normal normal 100% Arial, Helvetica, sans-serif; line-height: 1.5em; font-size: .75em; }
    h1,h2,h3, h4, h5, h6 {line-height: normal; font-weight: normal; }
    input,select,textarea {color: #38444f; font: normal normal 1em Arial, Helvetica, sans-serif; }
    input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; } a:link,a:visited,a:hover,a:focus {text-decoration: none; }
    a:link,a:visited {color: #000; }
    a:hover,a:focus {color: #43f812; }
    .clear {clear: both; }
    /*===================================================================*/
    span.price-pro {
        display: block;
        height: 23px;
    }
    .bg-trans{
        -moz-transition: background, .4s ease;
        -o-transition: background, .4s ease;
        -webkit-transition: background, .4s ease;
        transition: background, .4s ease;
    }
    .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}
    .header-top ul{margin: 0 -20px;}
    .header-top ul li{float: left;padding: 0 20px; border-right: 1px solid #e1e1e1;}
    .header-top ul li:last-child{border-right: none;}
    .header-top ul li a{color: #2b2a79;}
    .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}
    .header-content p{margin: 10px 0;}
    .header-content .logo a{display: inline-block;}
    .header-content .phone p:before{content: ''; width: 24px; height: 24px; background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0; display: inline-block; margin-right: 10px; vertical-align: bottom;}
    .header-content .giohang p:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}
    .header-content .phone span{font-size: 14px; color: #f64629;}
    .header-bot{background: #2b2a79;}
    .menu ul{}
    .menu ul li{float: left; padding: 15px 20px;}
    .menu ul li a{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}
    .menu ul li.current-menu-item,
    .menu ul li:hover{background: #5150b7;transition: all .3s;}

    ::-webkit-input-placeholder {color: #ffe9ea; }
    :-moz-placeholder {color: #ffe9ea; }
    ::-moz-placeholder {color: #ffe9ea; }
    :-ms-input-placeholder {color: #ffe9ea; }




    .block-slider{padding: 30px 0;}
    .slider{overflow: hidden;position: relative;}
    a.rslides_nav{display: block; width: 36px;height: 36px; background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat; text-indent: -9999px; position: absolute; top: 50%; margin-top: -18px;z-index: 10;
        -moz-transition: background, .4s ease;
        -o-transition: background, .4s ease;
        -webkit-transition: background, .4s ease;
        transition: background, .4s ease;}
    a.rslides_nav.prev{background-position: 0 -31px; left: 15px;}
    a.rslides_nav.next{background-position: -37px -31px; right: 15px;}
    a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}
    a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}

    .rslides {position: relative; list-style: none; overflow: hidden; width: 100%; padding: 0; margin: 0; }
    .rslides li {-webkit-backface-visibility: hidden; position: absolute; display: none; width: 100%; left: 0; top: 0; }
    .rslides li:first-child {position: relative; display: block; float: left; }
    .rslides img {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}
    .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}
    .rslides .txt p{font: 500 16px/20px 'Roboto', sans-serif; color: #fff;text-transform: uppercase;}

    ul.block-banner li{margin-bottom: 30px;}
    ul.block-banner li:last-child{margin-bottom: 0;}

    h3{font: 400 18px/20px 'Roboto', sans-serif; color: #333; text-transform: uppercase; border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}
    h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}
    .block-product{padding: 0 0 45px;overflow: hidden;}
    .block-product button{border: none; width: 7px; height: 13px; text-indent: -9999px; background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat; position: absolute; top: -47px; display: block;padding: 0;
        -moz-transition: background, .4s ease;
        -o-transition: background, .4s ease;
        -webkit-transition: background, .4s ease;
        transition: background, .4s ease;}
    .block-product button.slick-prev{background-position: 0px -107px; right: 35px;}
    .block-product button.slick-next{background-position: -8px -107px; right: 15px;}
    .block-product button.slick-prev:hover{background-position: 0px -122px;}
    .block-product button.slick-next:hover{background-position: -8px -122px;}

    .block-product ul{margin: 0px -14px;}
    .block-product ul li{float: left;padding: 0 15px;position: relative;}
    .block-product ul li a.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}
    .block-fashion li a.img:before,
    .block-product ul li a.img:before{content: ''; width: 0; height: 100%; background: transparent; position: absolute; top: 0;left: 0; display: none;}
    @keyframes sheen {
        100% {
            width: 100%;
        }
    }
    .block-fashion li h4,
    .block-product ul li h4{overflow: hidden; height: 20px; margin: 10px 0 5px;}
    .block-fashion li h4 a,
    .block-product ul li h4 a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}
    .score-callback{margin-bottom: 5px;}
    .score-callback img{display: inline-block;}
    .block-fashion li strong,
    .block-product ul li strong{font: 400 13px/20px 'Roboto', sans-serif; color: #666; margin-right: 20px;text-decoration: line-through;}
    .block-fashion li span,
    .block-product ul li span{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}
    .block-product ul li .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}

    .register{text-align: center;margin-bottom: 35px;}
    .register p{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}
    .register .input-group{width: 450px; margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif; color: #ccc;}
    .register .input-group input{width: 360px;height: 35px;}
    .register .input-group button{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}

    .block-fashion{padding-bottom: 25px;}
    .block-fashion li{margin-bottom: 15px;}
    .block-fashion li div.detail{overflow: hidden;padding-bottom: 3px;}
    .block-fashion li a.img{width: 120px; height: 130px; display: block; float: left; margin-right: 15px;position: relative;}
    .img-fasti {
        position: relative;
    }

    a.v-icon {
        position: absolute;
        left: -50px;
        height: 30px;
        display: inline-block;
        width: 30px;
        text-align: center;
        line-height: 30px;
        background: rgba(89, 102, 196, 0.64);
        color: #fff;
        transition: all .7s;
    }

    button.add-icon {
        height: 30px;
        width: 30px;
        border: none;
        color: #fff;
        background: rgba(236, 77, 16, 0.78);
        left: -50px;
        position: absolute;
        top: 35px;
        transition: all 0.3s;
    }

    .img-fasti img {
        border: 1px solid #ededed;
    }

    .block-fashion li:hover a.v-icon,.block-fashion li:hover button.add-icon {
        left: 1px;
        opacity: 1;
    }

    .block-fashion li:hover img,.detai-new img:hover {
        opacity: .8;
    }
    .content-w-new {
        border: 1px solid #cacaca;
        border-top: 0px;
    }

    .content-w-new ul li a img {
        float: left;
        margin-right: 10px;
        padding: 1px;
        border: 1px solid #ededed;
    }

    .content-w-new ul li h4 {
        font: 600 13px/18px 'UtmAvo', sans-serif;
    }

    .content-w-new ul li h4 a {
        color: #2b2a79;
    }

    .content-w-new ul li h4 a:hover {
        color: #ff6434;
    }

    .content-w-new ul li {
        padding: 10px;
        border-bottom: 1px solid #ededed;
    }

    .content-w-new ul li a img:hover {
        opacity: 0.8;
    }


    #footer{background: #242424;padding: 35px 0 0px;}
    #footer h3{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;border: none;}
    #footer p{font: 400 13px/20px 'Roboto', sans-serif; color: #b2b2b2;}
    #footer p span{display: block;margin-bottom: 5px;}
    #footer ul li{margin-bottom: 5px;}
    #footer ul li a{color: #fff;}
    #footer .col-md-3{margin-bottom: 20px;}
    #footer p.bot{font: 400 13px/20px 'Roboto', sans-serif; color: #9c9c9c; padding-top: 15px;}
    #footer p.bot a{color: #9c9c9c;}


    .search input:focus{border-color: #f64629}

    .block-fashion li h4 a:hover,
    #footer ul li a:hover,
    #footer p.bot a:hover,
    .block-product ul li h4 a:hover{color: #F64B2E;}
    .register .input-group button:hover{background: #66AFE9; color: #fff;}

    ul.block-banner img {
        border: 1px solid rgba(237, 237, 237, 0.42);
    }
    .logo img {
        max-height: 70px;
    }
    .giohang.text-right {
        margin-top: 10px;
    }
    .no-padding {
        padding: 0px;
    }

    .search-box {
        position: relative;
        margin-top: 10px;
    }

    .search-box button.btn.btn-primary {
        background: none;
        border: none;
        color: #e00;
        position: absolute;
        right: 0px;
        top: -2px;
        font-size: 17px;
    }

    .search-box .form-control {
        border-radius: 0;
        border: 1px solid #5150b7;
    }

    .search-box select.form-control {
        background: #5150b7;
        color: #fff;
        line-height: 31px;
    }
    .smobitrigger{display: none;}
    .default-value{
        color: red;
    }
    .copyright {
        text-align: center;
        font: 400 13px/20px 'Roboto', sans-serif;
        color: #b2b2b2;
        padding: 15px 0px;
        background: #131313;
        border-top: 1px solid #4a4a4a;
    }

    .copyright a {
        color: #7772a2;
    }

    .block-product ul li a.img img{
        -webkit-transform: rotateY(0);
        -ms-transform: rotateY(0);
        -o-transform: rotateY(0);
        transform: rotateY(0);
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -ms-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    .block-product ul li a.img:hover img{
        -webkit-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
    }

    .post-img {
        position: relative;
        overflow: hidden;
    }

    button.addc {
        position: absolute;
        display: inline-block;
        width: 50%;
        background: rgba(255, 91, 29, 0.68);
        font-family: Roboto;
        padding: 10px 10px;
        color: #fff;
        left: 1px;
        font-size: 13px;
        text-align: center;
        border-bottom: 2px solid #4241bb;
        text-indent: inherit;
        top: initial;
        height: auto;
    }

    a.viewm {
        position: absolute;
        bottom: 0px;
        display: inline-block;
        width: 50%;
        background: rgba(120, 123, 228, 0.62);
        font-family: Roboto;
        padding: 10px 10px;
        color: #fff;
        right: 1px;
        border-left: 1px solid #d8d8d8;
        font-size: 13px;
        text-align: center;
        border-bottom: 2px solid #4241bb;
    }

    a.addc:hover, a.viewm:hover {
        background: #2b2a79;
        color: #fff;
    }

    button.addc, a.viewm {
        bottom: -50px;
        opacity: 0;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -ms-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    .post-img:hover a, .post-img:hover button {
        bottom: 0px;
        opacity: 1;
    }

    .bread {
        padding: 10px;
        font-weight: 400;
        font-family: Roboto;
        font-size: 13px;
        color: #2b2a79;
        border-bottom: 1px solid #d2d2fb;
        margin-bottom: 20px;
    }

    .bread .fa, .bread a {
        color: #ff6434;
    }

    .bread .fa:hover, .bread a:hover {
        color: #2b2a79;
    }
    h1.title {
        font: 400 24px/25px 'UtmAvo', sans-serif;
        text-transform: uppercase;
        color: #2b2a79;
        border-bottom: 1px solid #5150b7;
        margin-bottom: 14px;
    }

    h1.title span {
        display: inline-block;
        border-bottom: 1px solid #ff6434;
        padding-bottom: 10px;
        position: relative;
        bottom: -1px;
    }
    .img-post img {
        padding: 1px;
        border: 1px solid #ededed;
        width: 100%;
        margin-bottom: 5px;
    }

    .info-cat h4 {
        margin-bottom: 5px;
        font: 600 15px/25px 'UtmAvo', sans-serif;
    }

    .info-cat h4 a {
        color: #2b2a79;
    }

    .info-cat p {
        font-size: 13px;
        font-family: Roboto,sans-serif;
        font-weight: 400;
        line-height: 20px;
        margin-bottom: 5px;
        color: #000;
    }

    .meta span {
        font-size: 12px;
        font-family: Roboto;
        display: inline-block;
        margin-right: 15px;
        color: #2b2a79;
    }

    .meta span .fa {
        color: #ff6434;
        margin-right: 4px;
    }

    .list {
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #dfdefd;
    }

    .img-post img:hover {
        border-color: #a4a3f7;
    }
    .content {
        margin-bottom: 30px;
    }

    .widget .banner {
        margin-bottom: 5px;
        text-align: center;
    }
    h3.title {
        background: #2b2a79;
        color: #fff;
        padding: 8px;
        border: none;
        font: 400 15px/25px 'UtmAvo', sans-serif;
        margin-bottom: 0px;
    }

    h3.title span {
        border: none;
        padding: 0px;
        margin: 0px;
    }
    .content-w {
        border: 1px solid #c1c1c1;
        border-top: 0px;
    }

    .content-w ul li {
        font-family: Roboto;
        font-size: 18px;
        border-bottom: 1px solid #ededed;
    }

    .content-w ul li span.togo {
        cursor: pointer;
        float: right;
        margin-top: 15px;
        padding-right: 10px;
    }

    .content-w ul li ul {
        display: none;
        width: 100%;
        border-top: 1px solid #ededed;
    }

    .widget {
        margin-bottom: 30px;
    }
    .content-w ul li ul li:last-child {
        border: none;
    }

    .content-w ul li a {
        padding: 9px;
        display: inline-block;
        color: #010073;
        font: 400 15px/25px 'UtmAvo', sans-serif;
    }

    .content-w ul li ul li {
        padding-left: 25px;
    }

    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {
        color: #ff6434;
    }

    .content-w ul li:hover {
        background: #f9f9f9;
    }
    span.togo.avtive-mn .fa:before {content: "\f147";}
    .content-w ul li ul li:hover a {
        color: #ff6434;
    }
    h1.title-single {
        margin-bottom: 8px;
        font: 500 20px/25px 'UtmAvo', sans-serif;
        color: #2b2a79;
    }

    .meta.meta-single {
        border-bottom: 1px dashed #b6b5c0;
        padding-bottom: 5px;
        margin-bottom: 10px;
    }

    article.post-content {
        font-family: Roboto;
        font-size: 14px;
        text-align: justify;
    }
    span.social-s {
        float: right;
    }

    span.social-s a {
        width: 35px;
        height: 35px;
        display: inline-block;
        text-align: center;
        line-height: 35px;
        border: 1px solid #2b2a79;
        color: #2b2a79;
        font-size: 15px;
        margin-left: 5px;
    }

    span.social-s a:hover {
        color: #fff;
        transition: all .5s;
        background: #2b2a79;
    }

    .meta-s {
        margin: 15px 0px;
    }

    .content-cmt {
        border: 1px solid #d6d5ff;
        margin-bottom: 30px;
    }

    h3.title-related {
        font: 500 20px/25px 'UtmAvo', sans-serif;
        border-color: #2b2a79;
        padding-bottom: 10px;
    }

    p.error {
        padding: 10px;
        font-family: Roboto;
        font-size: 15px;
        text-align: center;
        background: #fff6db;
        border: 1px solid #ffd0b5;
        color: #e05d25;
    }
    .related img {
        float: left;
        margin-right: 10px;
        padding: 1px;
        border: 1px solid #aebcf3;
    }

    .related h4 a {
        font: 600 14px/25px 'UtmAvo', sans-serif;
        color: #1d136b;
        margin-bottom: 5px;
    }

    .related ul li {
        margin-bottom: 20px;
        padding-bottom: 10px;
    }
    .info-cat h4 a:hover {
        color: #ff6434;
    }
    .detail-product {
        margin-bottom: 30px;
    }

    del span {
        font-size: 14px!important;
        margin-right: 5px;
        color: #636363!important;
        text-decoration: inherit;
    }

    ins {text-decoration: none;}

    p.woocommerce-result-count {
        font-size: 14px;
        font-family: Roboto;
        font-weight: 400;
        color: #2b2a79;
        position: relative;
        top: 7px;
    }

    select.orderby {
        border: 1px solid #5150b7;
        font-family: Roboto;
        padding: 8px 10px;
        font-size: 14px;
    }

    button.addc:hover {
        color: #fff;
        background: #2b2a79;
    }

    /*Single-product*/
    ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}
    li.description_tab.active {border-radius: 0px!important;}
    .woocommerce div.product .woocommerce-tabs ul.tabs li:after, .woocommerce div.product .woocommerce-tabs ul.tabs li:before {display: none;}
    ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}
    ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}
    ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}
    div#review_form_wrapper {font-family: Arial;}
    .woocommerce-product-rating {margin-bottom: 0px!important;}
    div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}
    div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}
    .panel {border: 0px;box-shadow: none!important;}
    p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}
    #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}
    p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}
    textarea#comment {border: 1px solid #5096D2;padding: 5px;}
    #commentform label {color: #F26E10;}
    p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}
    p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}
    li.comment {margin-top: 15px!important;}
    .comment-text {border-color: #12991F!important;}
    article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}
    article.post-content table tr td {padding: 5px;font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}
    article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;@font-face {font-family: 'UtmAvo';src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/;src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/ format('embedded-opentype'),           url('UTMAVO.woff2')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff2*/ format('woff2'),           url('UTMAVO.woff')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff*/ format('woff'),           url('UTMAVO.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.ttf*/ format('truetype'),           url('UTMAVO.svg#UTMAVO')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.svg#UTMAVO*/ format('svg');  }  @font-face {font-family: 'utm_alexander';src: url('utm_alexander.otf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.otf*/;src: url('utm_alexander.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.ttf*/ format('truetype');font-weight: normal;font-style: normal;  }  /*----- reset -----*/html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0;font-family: inherit;font-size: 100%;margin: 0;outline: 0;padding: 0; }  :focus {outline: 0; }ol,ul {list-style: none; }img {width: auto\9;height: auto;max-width: 100%;vertical-align: middle;-ms-interpolation-mode: bicubic; }table {border-collapse: collapse;border-spacing: 0;width: 100%; }html,body {height: 100%; }   /*----- common -----*/body {background-color: #fff;color: #000;font: normal normal 100% Arial, Helvetica, sans-serif;line-height: 1.5em;font-size: .75em; }h1,h2,h3, h4, h5, h6 {line-height: normal;font-weight: normal; }input,select,textarea {color: #38444f;font: normal normal 1em Arial, Helvetica, sans-serif; }input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; }a:link,a:visited,a:hover,a:focus {text-decoration: none; }a:link,a:visited {color: #000; }a:hover,a:focus {color: #43f812; }  .clear {clear: both; }  /*===================================================================*/    .bg-trans{-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;  }  .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}  .header-topul{margin: 0 -20px;}  .header-topulli{float: left;padding: 0 20px;border-right: 1px solid #e1e1e1;}  .header-topulli:last-child{border-right: none;}  .header-topullia{color: #2b2a79;}  .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}  .header-contentp{margin: 10px 0;}  .header-content .logoa{display: inline-block;}  .header-content .phonep:before{content: '';width: 24px;height: 24px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0;display: inline-block;margin-right: 10px;vertical-align: bottom;}  .header-content .giohangp:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}  .header-content .phonespan{font-size: 14px;color: #f64629;}  .header-bot{background: #2b2a79;}  .menuul{}  .menuulli{float: left;padding: 15px 20px;}  .menuullia{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}  .menuulli.current-menu-item,  .menuulli:hover{background: #5150b7;transition: all .3s;}    .search{width: 170px;position: relative;margin-top: 10px;}  .searchinput{width: 100%;height: 27px;border: none;border-bottom: 1px solid #5150b7;font: italic 12px/20px 'Roboto', sans-serif;color: #ffe9ea;background: transparent;padding: 0 18px 0 0;}  .searchbutton{position: absolute;top: 5px;right: 0;width: 16px;height: 16px;border: none;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -52px 0;text-indent: -9999px;}  .searchbutton:hover{background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -18px -107px;}  ::-webkit-input-placeholder {color: #ffe9ea; }  :-moz-placeholder {color: #ffe9ea; }  ::-moz-placeholder {color: #ffe9ea; }  :-ms-input-placeholder {color: #ffe9ea; }          .block-slider{padding: 30px 0;}  .slider{overflow: hidden;position: relative;}a.rslides_nav{display: block;width: 36px;height: 36px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;text-indent: -9999px;position: absolute;top: 50%;margin-top: -18px;z-index: 10;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}a.rslides_nav.prev{background-position: 0 -31px;left: 15px;}a.rslides_nav.next{background-position: -37px -31px;right: 15px;}a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}    .rslides {position: relative;list-style: none;overflow: hidden;width: 100%;padding: 0;margin: 0; }  .rslidesli {-webkit-backface-visibility: hidden;position: absolute;display: none;width: 100%;left: 0;top: 0; }  .rslidesli:first-child {position: relative;display: block;float: left; }  .rslidesimg {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}  .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}  .rslides .txtp{font: 500 16px/20px 'Roboto', sans-serif;color: #fff;text-transform: uppercase;}ul.block-banner li{margin-bottom: 30px;}ul.block-banner li:last-child{margin-bottom: 0;}h3{font: 400 18px/20px 'Roboto', sans-serif;color: #333;text-transform: uppercase;border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}  .block-product{padding: 0 0 45px;overflow: hidden;}  .block-productbutton{border: none;width: 7px;height: 13px;text-indent: -9999px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;position: absolute;top: -47px;display: block;padding: 0;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}  .block-productbutton.slick-prev{background-position: 0px -107px;right: 35px;}  .block-productbutton.slick-next{background-position: -8px -107px;right: 15px;}  .block-productbutton.slick-prev:hover{background-position: 0px -122px;}  .block-productbutton.slick-next:hover{background-position: -8px -122px;}    .block-productul{margin: 0px -14px;}  .block-productulli{float: left;padding: 0 15px;position: relative;}  .block-productullia.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}  .block-fashionlia.img:before,  .block-productulli a.img:before{content: '';width: 0;height: 100%;background: transparent;position: absolute;top: 0;left: 0;display: none;}  @keyframes sheen {      100% {width: 100%;      }  }  .block-fashionlih4,  .block-productulli h4{overflow: hidden;height: 20px;margin: 10px 0 5px;}  .block-fashionlih4a,  .block-productul li h4 a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}  .score-callback{margin-bottom: 5px;}  .score-callbackimg{display: inline-block;}  .block-fashionlistrong,  .block-productulli strong{font: 400 13px/20px 'Roboto', sans-serif;color: #666;margin-right: 20px;text-decoration: line-through;}  .block-fashionlispan,  .block-productulli span{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}  .block-productulli .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}    .register{background: url(bg-ct.jpg)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/bg-ct.jpg*/ no-repeat;text-align: center;margin-bottom: 35px;}  .registerp{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}  .register .input-group{width: 450px;margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif;color: #ccc;}  .register .input-groupinput{width: 360px;height: 35px;}  .register .input-groupbutton{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}    .block-fashion{padding-bottom: 25px;}  .block-fashionli{margin-bottom: 15px;}  .block-fashionlidiv{overflow: hidden;}  .block-fashionlia.img{width: 120px;height: 130px;display: block;float: left;margin-right: 15px;position: relative;}        #footer{background: #242424;padding: 35px 0 0px;}  #footerh3{font: 400 16px/20px 'utm_alexander', sans-serif;color: #fff;border: none;}  #footerp{font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;}  #footerpspan{display: block;margin-bottom: 5px;}  #footerulli{margin-bottom: 5px;}  #footerullia{color: #fff;}  #footer .col-md-3{margin-bottom: 20px;}  #footerp.bot{font: 400 13px/20px 'Roboto', sans-serif;color: #9c9c9c;padding-top: 15px;}  #footerp.bota{color: #9c9c9c;}      .searchinput:focus{border-color: #f64629;}    .block-fashionlih4a:hover,  #footerul li a:hover,  #footer p.bot a:hover,  .block-product ul li h4 a:hover{color: #F64B2E;}  .register .input-groupbutton:hover{background: #66AFE9;color: #fff;}ul.block-banner img {      border: 1px solid rgba(237, 237, 237, 0.42);  }  .logoimg {max-height: 70px;  }  .giohang.text-right {margin-top: 10px;  }  .no-padding {padding: 0px;  }    .search-box {position: relative;margin-top: 10px;  }    .search-boxbutton.btn.btn-primary {background: none;border: none;color: #e00;position: absolute;right: 0px;top: -2px;font-size: 17px;  }    .search-box .form-control {border-radius: 0;border: 1px solid #5150b7;  }    .search-boxselect.form-control {background: #5150b7;color: #fff;line-height: 31px;  }  .smobitrigger{display: none;}  .default-value{color: red;  }  .copyright {text-align: center;font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;padding: 15px 0px;background: #131313;border-top: 1px solid #4a4a4a;  }    .copyrighta {color: #7772a2;  }    .block-productullia.imgimg{      -webkit-transform: rotateY(0);-ms-transform: rotateY(0);-o-transform: rotateY(0);transform: rotateY(0);-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;  }    .block-productullia.img:hoverimg{      -webkit-transform: rotateY(-180deg);-ms-transform: rotateY(-180deg);-o-transform: rotateY(-180deg);transform: rotateY(-180deg);  }    .post-img {position: relative;overflow: hidden;  }a.addc {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;left: 1px;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.viewm {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;right: 1px;border-left: 1px solid #d8d8d8;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.addc:hover, a.viewm:hover {      background: #2b2a79;color: #fff;  }a.addc, a.viewm {      bottom: -50px;opacity: 0;-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;background: rgba(255, 255, 255, 0.88);  }    .post-img:hovera {bottom: 0px;opacity: 1;  }    .bread {padding: 10px;font-weight: 400;font-family: Roboto;font-size: 13px;color: #2b2a79;border-bottom: 1px solid #d2d2fb;margin-bottom: 20px;  }    .bread .fa, .breada {color: #ff6434;  }    .bread .fa:hover, .breada:hover {color: #2b2a79;  }h1.title {      font: 400 24px/25px 'UtmAvo', sans-serif;text-transform: uppercase;color: #2b2a79;border-bottom: 1px solid #5150b7;margin-bottom: 14px;  }h1.title span {      display: inline-block;border-bottom: 1px solid #ff6434;padding-bottom: 10px;position: relative;bottom: -1px;  }  .img-postimg {padding: 1px;border: 1px solid #ededed;  }    .info-cath4 {margin-bottom: 5px;font: 600 15px/25px 'UtmAvo', sans-serif;  }    .info-cath4a {color: #2b2a79;  }    .info-catp {font-size: 13px;font-family: Roboto,sans-serif;font-weight: 400;line-height: 20px;margin-bottom: 5px;color: #000;  }    .metaspan {font-size: 12px;font-family: Roboto;display: inline-block;margin-right: 15px;color: #2b2a79;  }    .metaspan .fa {color: #ff6434;margin-right: 4px;  }    .list {margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px dashed #dfdefd;  }    .img-postimg:hover {border-color: #a4a3f7;  }  .content {margin-bottom: 30px;  }    .widget .banner {margin-bottom: 5px;  }h3.title {      background: #2b2a79;color: #fff;padding: 8px;border: none;font: 400 15px/25px 'UtmAvo', sans-serif;margin-bottom: 0px;  }h3.title span {      border: none;padding: 0px;margin: 0px;  }  .content-w {border: 1px solid #c1c1c1;border-top: 0px;  }    .content-wulli {font-family: Roboto;font-size: 18px;border-bottom: 1px solid #ededed;  }    .content-wullispan.togo {cursor: pointer;float: right;margin-top: 15px;padding-right: 10px;  }    .content-wulliul {display: none;width: 100%;border-top: 1px solid #ededed;  }    .widget {margin-bottom: 30px;  }  .content-wulliulli:last-child {      border: none;  }    .content-wullia {padding: 9px;display: inline-block;color: #010073;font: 400 15px/25px 'UtmAvo', sans-serif;  }    .content-wulliulli {      padding-left: 25px;  }    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {      color: #ff6434;  }    .content-wulli:hover {background: #f9f9f9;  }span.togo.avtive-mn .fa:before {content: "\f147";}  .content-wulliulli:hover a {      color: #ff6434;  }h1.title-single {      margin-bottom: 8px;font: 500 20px/25px 'UtmAvo', sans-serif;color: #2b2a79;  }    .meta.meta-single {border-bottom: 1px dashed #b6b5c0;padding-bottom: 5px;margin-bottom: 10px;  }article.post-content {      font-family: Roboto;font-size: 14px;text-align: justify;  }span.social-s {      float: right;  }span.social-s a {      width: 35px;height: 35px;display: inline-block;text-align: center;line-height: 35px;border: 1px solid #2b2a79;color: #2b2a79;font-size: 15px;margin-left: 5px;  }span.social-s a:hover {      color: #fff;transition: all .5s;background: #2b2a79;  }    .meta-s {margin: 15px 0px;  }    .content-cmt {border: 1px solid #d6d5ff;margin-bottom: 30px;  }h3.title-related {      font: 500 20px/25px 'UtmAvo', sans-serif;border-color: #2b2a79;padding-bottom: 10px;  }p.error {      padding: 10px;font-family: Roboto;font-size: 15px;text-align: center;background: #fff6db;border: 1px solid #ffd0b5;color: #e05d25;  }  .relatedimg {float: left;margin-right: 10px;padding: 1px;border: 1px solid #aebcf3;  }    .relatedh4a {font: 600 14px/25px 'UtmAvo', sans-serif;color: #1d136b;display: inline-block;margin-bottom: 5px;  }    .relatedulli {margin-bottom: 20px;padding-bottom: 10px;  }  .info-cath4a:hover {color: #ff6434;  }  .detail-product {margin-bottom: 30px;  }del span {      font-size: 14px!important;margin-right: 5px;color: #636363!important;text-decoration: inherit;  }ins {text-decoration: none;}p.woocommerce-result-count {      font-size: 14px;font-family: Roboto;font-weight: 400;color: #2b2a79;position: relative;top: 7px;  }select.orderby {      border: 1px solid #5150b7;font-family: Roboto;padding: 8px 10px;font-size: 14px;  }      /*Single-product*/ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}li.description_tab.active {border-radius: 0px!important;}  .woocommercediv.product .woocommerce-tabsul.tabsli:after, .woocommercediv.product .woocommerce-tabs ul.tabs li:before {display: none;}ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}div#review_form_wrapper {font-family: Arial;}  .woocommerce-product-rating {margin-bottom: 0px!important;}div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}  .panel {border: 0px;box-shadow: none!important;}p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}  #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}textarea#comment {border: 1px solid #5096D2;padding: 5px;}  #commentformlabel {color: #F26E10;}p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}li.comment {margin-top: 15px!important;}  .comment-text {border-color: #12991F!important;}article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}article.post-content table tr td {padding: 5px;font-size: 14px!important;}article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;font-weight: 600!important;}article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}  .woocommercediv.product .woocommerce-tabsul.tabs:before {border: none!important;}div#comments h2 {display: none;}  .summary.entry-summaryp.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}  .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}form.cart {margin-bottom: 0px!important;margin-top: 10px;}  .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}span.posted_in a {color: #ff6434;}span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}span.tagged_as a {color: #ff6434;}p.stars {font-size: 17px;}p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}  .content-dec {height: 93px;overflow: hidden;}  .fb-like.fb_iframe_widget {position: relative;top: -5px;}button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}p.ster {margin-bottom: 15px;}  .detail.lis-proh4 {font-size: 14px;margin: 5px 0px;font-family: Roboto;font-weight: 600;  }    .detail.lis-proh4a {color: #1C3D8E;  }span.amount {      color: #e00;font-family: Roboto;font-size: 15px;  }  .form-control {border-radius: 0px;margin-bottom: 15px;border: 1px solid #CAE7FF;  }  .info {font-size: 14px;font-family: Roboto;line-height: 23px;background: #e4e4ff;padding: 10px;border-radius: 15px;border: 1px solid #c4c4ff;margin-bottom: 20px;  }    .infop {margin-bottom: 10px;  }    .infob {color: #e00;  }    .infostrong {color: #e00;  }input.wpcf7-form-control.wpcf7-submit {      padding: 8px 20px;margin-bottom: 20px;background: #0C398E;border: 1px solid #2B74FF;text-transform: uppercase;color: #fff;font-weight: 600;  }input.wpcf7-form-control.wpcf7-submit:hover {      background: #2B74FF;  }p.price span {      font-size: 20px!important;font-family: Roboto;  }  .imagesimg {border: 1px solid #ededed;padding: 1px;  }span.onsale {      height: 50px;width: 50px;line-height: 15px!important;padding-top: 10px!important;background: #ff6434!important;  }    /* Cart */td.product-thumbnail img {      border: none!important;  }  .woocommercetable.shop_table {border-radius: 0px!important;}  .cart_totalsh2 {text-transform: uppercase;}a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;}a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}  .actionsinput.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}  .actionsinput.button:hover {color: #fff;}  /* Checkout */form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2358FF;border-bottom: 1px solid #2358FF;padding-bottom: 7px;}form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}  .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}  .woocommerce-billing-fieldsinput {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}div#s2id_billing_country a {border-radius: 0px!important;}textarea#order_comments {height: 120px;padding: 10px;}  .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;}input#place_order:hover {background: #0393DD;}div#payment {background: #FBFBFB!important;border-radius: 0px!important;}ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}li.order strong {color: #e00;}li.total strong {color: #e00;}li.method strong {color: #12991F;}li.date strong {color: #0193DD;}form.login {      border-radius: 0px!important;background: #FBFBFB;  }input#username {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  .info-contacth3 {padding: 9px;background: #0393DD;color: #fff;font-size: 14px;text-transform: uppercase;font-weight: 600;position: relative;  }    .info-contacth3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}form.register {      border-radius: 0px!important;background: #FBFBFB;  }input#reg_email {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#reg_password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  /*==========================================================================*/    @-moz-document url-prefix() {         }    @media (max-width: 1190px){      .menu ul li{padding: 10px;}      .search{margin-top: 5px;}      ul.block-banner li {margin-bottom: 26px;}      .block-fashion li h4{height: 40px;}  }  @media (max-width: 990px){      .rslides{margin-bottom: 20px;}      .block-slider{padding: 20px 0 0;}      ul.block-banner{margin: 0 -10px;}      ul.block-banner li,      ul.block-banner li:last-child{width: 50%;float: left;padding: 0 10px;margin-bottom: 20px;}      .block-fashion li h4 a{font-size: 13px;}      .block-fashion li a.img{width: 110px;height: 120px;}        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden;padding: 5px 0;position: absolute;top: 10px;left: 15px;background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat;text-indent: -9999px;}      .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px;position: absolute;left: -260px;top: 37px;background: #aa8f90;z-index: 20;}      .menu .block-menu li{width: 100%;float: none;}      @keyframes width_ {          100% {width: 250px;left: 15px;          }      }      .search{margin: 5px 0;}  }  @media (max-width: 750px){      #footer p.bot,      .block-fashion{padding: 0;}      .block-fashion li h4{height: 20px;}      .block-fashion li h4 a{font-size: 15px;}      .header-content{padding: 20px 0;}      .block-product{padding: 0 0 20px;}      .register{margin-bottom: 20px;}      .header-top ul{margin: 0;}      .header-top ul li:last-child{padding-right: 0;}  }  @media (max-width: 680px){      .header-top{padding: 5px 0;}      .header-content .phone,      .header-top .pull-left{display: none;}      .header-top .pull-right{text-align: center;width: 100%;float:none;}      .header-top ul li{display: inline-block;float: none;padding: 0 10px;}      .register p{font-size: 15px;}      .header-content .logo{width: 40%;text-align: left;}      .header-content .giohang{width: 60%;}      .register .input-group{width: 270px;}      .register .input-group input{width: 180px;}      .register p{padding: 0 15px;}      .block-fashion .col-md-4{width: 100%;}  }  @media (max-width: 630px){      .register{padding: 20px 0;}      .rslides .txt{bottom: 10px;}      .rslides .txt p{font-size: 13px;}  }  @media (max-width: 500px){      #footer .col-md-3{width: 100%;}  }  @media (max-width: 420px){      .header-top{display: none;}      .header-content .logo{width: 100%;float: none;margin-top: 15px;}      .header-content .giohang{width: 100%;position: absolute;right: 0;top: -6px;}  }font: 500 20px/25px 'UtmAvo', sans-serif;font: 500 20px/25px 'UtmAvo', sans-serif;}
    article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}
    article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}
    .woocommerce div.product .woocommerce-tabs ul.tabs:before {border: none!important;}
    div#comments h2 {display: none;}
    .summary.entry-summary p.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}
    .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}
    input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}
    button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}
    form.cart {margin-bottom: 0px!important;margin-top: 10px;}
    .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}
    span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}
    span.posted_in a {color: #ff6434;}
    span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}
    span.tagged_as a {color: #ff6434;}
    p.stars {font-size: 17px;}
    p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}
    .content-dec {height: 93px;overflow: hidden;}
    .fb-like.fb_iframe_widget {position: relative;top: -5px;}
    button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}
    p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}
    p.ster {margin-bottom: 15px;}
    .detail.lis-pro h4 {
        font-size: 14px;
        margin: 5px 0px;
        font-family: Roboto;
        font-weight: 600;
    }

    .detail.lis-pro h4 a {
        color: #1C3D8E;
    }

    span.amount {
        color: #e00;
        font-family: Roboto;
        font-size: 15px;
    }
    .form-control {
        border-radius: 0px;
        margin-bottom: 15px;
        border: 1px solid #5150b7;
    }
    .info {
        font-size: 14px;
        font-family: Roboto;
        line-height: 23px;
        background: #e4e4ff;
        padding: 10px;
        border-radius: 15px;
        border: 1px solid #c4c4ff;
        margin-bottom: 20px;
    }

    .info p {
        margin-bottom: 10px;
    }

    .info b {
        color: #e00;
    }

    .info strong {
        color: #e00;
    }

    input.wpcf7-form-control.wpcf7-submit {
        padding: 8px 34px;
        margin-bottom: 20px;
        border-radius: 30px;
        background: #2b2a79;
        border: 1px solid #2b2a79;
        text-transform: uppercase;
        color: #fff;
        font: 400 15px/15px 'UtmAvo', sans-serif;
        font-weight: 600;
    }

    input.wpcf7-form-control.wpcf7-submit:hover {
        background: #df5520;
        border-color: #dd4f1d;
    }
    p.price span {
        font-size: 20px!important;
        font-family: Roboto;
    }
    .images img {
        border: 1px solid #bab9e8;
        padding: 1px;
    }
    span.onsale {
        height: 50px;
        width: 50px;
        line-height: 15px!important;
        padding-top: 10px!important;
        background: #ff6434!important;
    }

    /* Cart */
    td.product-thumbnail img {
        border: none!important;
    }
    .woocommerce table.shop_table {border-radius: 0px!important;}
    .cart_totals h2 {text-transform: uppercase;font: 500 20px/25px 'UtmAvo', sans-serif!important;}
    a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;font: 500 14px/18px 'UtmAvo', sans-serif;}
    a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}
    .actions input.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}
    .actions input.button:hover {color: #fff;}
    /* Checkout */
    form.checkout_coupon {
        border-radius: 0px!important;
    }

    input#coupon_code {
        height: 30px;
        padding: 10px;
    }

    form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2b2a79;border-bottom: 1px solid #2b2a79;padding-bottom: 7px;}
    form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}
    .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}
    .woocommerce-billing-fields input {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}
    div#s2id_billing_country a {border-radius: 0px!important;}
    textarea#order_comments {height: 120px;padding: 10px;}
    .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}
    input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;@font-face {font-family: 'UtmAvo';src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/;src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/ format('embedded-opentype'),           url('UTMAVO.woff2')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff2*/ format('woff2'),           url('UTMAVO.woff')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff*/ format('woff'),           url('UTMAVO.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.ttf*/ format('truetype'),           url('UTMAVO.svg#UTMAVO')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.svg#UTMAVO*/ format('svg');  }  @font-face {font-family: 'utm_alexander';src: url('utm_alexander.otf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.otf*/;src: url('utm_alexander.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.ttf*/ format('truetype');font-weight: normal;font-style: normal;  }  /*----- reset -----*/html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0;font-family: inherit;font-size: 100%;margin: 0;outline: 0;padding: 0; }  :focus {outline: 0; }ol,ul {list-style: none; }img {width: auto\9;height: auto;max-width: 100%;vertical-align: middle;-ms-interpolation-mode: bicubic; }table {border-collapse: collapse;border-spacing: 0;width: 100%; }html,body {height: 100%; }   /*----- common -----*/body {background-color: #fff;color: #000;font: normal normal 100% Arial, Helvetica, sans-serif;line-height: 1.5em;font-size: .75em; }h1,h2,h3, h4, h5, h6 {line-height: normal;font-weight: normal; }input,select,textarea {color: #38444f;font: normal normal 1em Arial, Helvetica, sans-serif; }input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; }a:link,a:visited,a:hover,a:focus {text-decoration: none; }a:link,a:visited {color: #000; }a:hover,a:focus {color: #43f812; }  .clear {clear: both; }  /*===================================================================*/    .bg-trans{-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;  }  .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}  .header-topul{margin: 0 -20px;}  .header-topulli{float: left;padding: 0 20px;border-right: 1px solid #e1e1e1;}  .header-topulli:last-child{border-right: none;}  .header-topullia{color: #2b2a79;}  .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}  .header-contentp{margin: 10px 0;}  .header-content .logoa{display: inline-block;}  .header-content .phonep:before{content: '';width: 24px;height: 24px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0;display: inline-block;margin-right: 10px;vertical-align: bottom;}  .header-content .giohangp:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}  .header-content .phonespan{font-size: 14px;color: #f64629;}  .header-bot{background: #2b2a79;}  .menuul{}  .menuulli{float: left;padding: 15px 20px;}  .menuullia{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}  .menuulli.current-menu-item,  .menuulli:hover{background: #5150b7;transition: all .3s;}    .search{width: 170px;position: relative;margin-top: 10px;}  .searchinput{width: 100%;height: 27px;border: none;border-bottom: 1px solid #5150b7;font: italic 12px/20px 'Roboto', sans-serif;color: #ffe9ea;background: transparent;padding: 0 18px 0 0;}  .searchbutton{position: absolute;top: 5px;right: 0;width: 16px;height: 16px;border: none;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -52px 0;text-indent: -9999px;}  .searchbutton:hover{background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -18px -107px;}  ::-webkit-input-placeholder {color: #ffe9ea; }  :-moz-placeholder {color: #ffe9ea; }  ::-moz-placeholder {color: #ffe9ea; }  :-ms-input-placeholder {color: #ffe9ea; }          .block-slider{padding: 30px 0;}  .slider{overflow: hidden;position: relative;}a.rslides_nav{display: block;width: 36px;height: 36px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;text-indent: -9999px;position: absolute;top: 50%;margin-top: -18px;z-index: 10;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}a.rslides_nav.prev{background-position: 0 -31px;left: 15px;}a.rslides_nav.next{background-position: -37px -31px;right: 15px;}a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}    .rslides {position: relative;list-style: none;overflow: hidden;width: 100%;padding: 0;margin: 0; }  .rslidesli {-webkit-backface-visibility: hidden;position: absolute;display: none;width: 100%;left: 0;top: 0; }  .rslidesli:first-child {position: relative;display: block;float: left; }  .rslidesimg {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}  .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}  .rslides .txtp{font: 500 16px/20px 'Roboto', sans-serif;color: #fff;text-transform: uppercase;}ul.block-banner li{margin-bottom: 30px;}ul.block-banner li:last-child{margin-bottom: 0;}h3{font: 400 18px/20px 'Roboto', sans-serif;color: #333;text-transform: uppercase;border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}  .block-product{padding: 0 0 45px;overflow: hidden;}  .block-productbutton{border: none;width: 7px;height: 13px;text-indent: -9999px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;position: absolute;top: -47px;display: block;padding: 0;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}  .block-productbutton.slick-prev{background-position: 0px -107px;right: 35px;}  .block-productbutton.slick-next{background-position: -8px -107px;right: 15px;}  .block-productbutton.slick-prev:hover{background-position: 0px -122px;}  .block-productbutton.slick-next:hover{background-position: -8px -122px;}    .block-productul{margin: 0px -14px;}  .block-productulli{float: left;padding: 0 15px;position: relative;}  .block-productullia.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}  .block-fashionlia.img:before,  .block-productullia.img:before{content: '';width: 0;height: 100%;background: transparent;position: absolute;top: 0;left: 0;display: none;}  @keyframes sheen {      100% {width: 100%;      }  }  .block-fashionlih4,  .block-productullih4{overflow: hidden;height: 20px;margin: 10px 0 5px;}  .block-fashionlih4a,  .block-productullih4a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}  .score-callback{margin-bottom: 5px;}  .score-callbackimg{display: inline-block;}  .block-fashionlistrong,  .block-productullistrong{font: 400 13px/20px 'Roboto', sans-serif;color: #666;margin-right: 20px;text-decoration: line-through;}  .block-fashionlispan,  .block-productullispan{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}  .block-productulli .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}    .register{background: url(bg-ct.jpg)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/bg-ct.jpg*/ no-repeat;text-align: center;margin-bottom: 35px;}  .registerp{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}  .register .input-group{width: 450px;margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif;color: #ccc;}  .register .input-groupinput{width: 360px;height: 35px;}  .register .input-groupbutton{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}    .block-fashion{padding-bottom: 25px;}  .block-fashionli{margin-bottom: 15px;}  .block-fashionlidiv{overflow: hidden;}  .block-fashionlia.img{width: 120px;height: 130px;display: block;float: left;margin-right: 15px;position: relative;}        #footer{background: #242424;padding: 35px 0 0px;}  #footerh3{font: 400 16px/20px 'utm_alexander', sans-serif;color: #fff;border: none;}  #footerp{font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;}  #footerpspan{display: block;margin-bottom: 5px;}  #footerulli{margin-bottom: 5px;}  #footerullia{color: #fff;}  #footer .col-md-3{margin-bottom: 20px;}  #footerp.bot{font: 400 13px/20px 'Roboto', sans-serif;color: #9c9c9c;padding-top: 15px;}  #footerp.bota{color: #9c9c9c;}      .searchinput:focus{border-color: #f64629;}    .block-fashionlih4a:hover,  #footerullia:hover,  #footerp.bota:hover,  .block-productullih4a:hover{color: #F64B2E;}  .register .input-groupbutton:hover{background: #66AFE9;color: #fff;}ul.block-banner img {      border: 1px solid rgba(237, 237, 237, 0.42);  }  .logoimg {max-height: 70px;  }  .giohang.text-right {margin-top: 10px;  }  .no-padding {padding: 0px;  }    .search-box {position: relative;margin-top: 10px;  }    .search-boxbutton.btn.btn-primary {background: none;border: none;color: #e00;position: absolute;right: 0px;top: -2px;font-size: 17px;  }    .search-box .form-control {border-radius: 0;border: 1px solid #5150b7;  }    .search-boxselect.form-control {background: #5150b7;color: #fff;line-height: 31px;  }  .smobitrigger{display: none;}  .default-value{color: red;  }  .copyright {text-align: center;font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;padding: 15px 0px;background: #131313;border-top: 1px solid #4a4a4a;  }    .copyrighta {color: #7772a2;  }    .block-productullia.imgimg{-webkit-transform: rotateY(0);-ms-transform: rotateY(0);-o-transform: rotateY(0);transform: rotateY(0);-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;  }    .block-productullia.img:hoverimg{-webkit-transform: rotateY(-180deg);-ms-transform: rotateY(-180deg);-o-transform: rotateY(-180deg);transform: rotateY(-180deg);  }    .post-img {position: relative;overflow: hidden;  }a.addc {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;left: 1px;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.viewm {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;right: 1px;border-left: 1px solid #d8d8d8;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.addc:hover, a.viewm:hover {      background: #2b2a79;color: #fff;  }a.addc, a.viewm {      bottom: -50px;opacity: 0;-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;background: rgba(255, 255, 255, 0.88);  }    .post-img:hovera {bottom: 0px;opacity: 1;  }    .bread {padding: 10px;font-weight: 400;font-family: Roboto;font-size: 13px;color: #2b2a79;border-bottom: 1px solid #d2d2fb;margin-bottom: 20px;  }    .bread .fa, .breada {color: #ff6434;  }    .bread .fa:hover, .breada:hover {color: #2b2a79;  }h1.title {      font: 400 24px/25px 'UtmAvo', sans-serif;text-transform: uppercase;color: #2b2a79;border-bottom: 1px solid #5150b7;margin-bottom: 14px;  }h1.title span {      display: inline-block;border-bottom: 1px solid #ff6434;padding-bottom: 10px;position: relative;bottom: -1px;  }  .img-postimg {padding: 1px;border: 1px solid #ededed;  }    .info-cath4 {margin-bottom: 5px;font: 600 15px/25px 'UtmAvo', sans-serif;  }    .info-cath4a {color: #2b2a79;  }    .info-catp {font-size: 13px;font-family: Roboto,sans-serif;font-weight: 400;line-height: 20px;margin-bottom: 5px;color: #000;  }    .metaspan {font-size: 12px;font-family: Roboto;display: inline-block;margin-right: 15px;color: #2b2a79;  }    .metaspan .fa {color: #ff6434;margin-right: 4px;  }    .list {margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px dashed #dfdefd;  }    .img-postimg:hover {border-color: #a4a3f7;  }  .content {margin-bottom: 30px;  }    .widget .banner {margin-bottom: 5px;  }h3.title {      background: #2b2a79;color: #fff;padding: 8px;border: none;font: 400 15px/25px 'UtmAvo', sans-serif;margin-bottom: 0px;  }h3.title span {      border: none;padding: 0px;margin: 0px;  }  .content-w {border: 1px solid #c1c1c1;border-top: 0px;  }    .content-wulli {font-family: Roboto;font-size: 18px;border-bottom: 1px solid #ededed;  }    .content-wullispan.togo {cursor: pointer;float: right;margin-top: 15px;padding-right: 10px;  }    .content-wulliul {display: none;width: 100%;border-top: 1px solid #ededed;  }    .widget {margin-bottom: 30px;  }  .content-wulliulli:last-child {border: none;  }    .content-wullia {padding: 9px;display: inline-block;color: #010073;font: 400 15px/25px 'UtmAvo', sans-serif;  }    .content-wulliulli {padding-left: 25px;  }    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {      color: #ff6434;  }    .content-wulli:hover {background: #f9f9f9;  }span.togo.avtive-mn .fa:before {content: "\f147";}  .content-wulliulli:hovera {color: #ff6434;  }h1.title-single {      margin-bottom: 8px;font: 500 20px/25px 'UtmAvo', sans-serif;color: #2b2a79;  }    .meta.meta-single {border-bottom: 1px dashed #b6b5c0;padding-bottom: 5px;margin-bottom: 10px;  }article.post-content {      font-family: Roboto;font-size: 14px;text-align: justify;  }span.social-s {      float: right;  }span.social-s a {      width: 35px;height: 35px;display: inline-block;text-align: center;line-height: 35px;border: 1px solid #2b2a79;color: #2b2a79;font-size: 15px;margin-left: 5px;  }span.social-s a:hover {      color: #fff;transition: all .5s;background: #2b2a79;  }    .meta-s {margin: 15px 0px;  }    .content-cmt {border: 1px solid #d6d5ff;margin-bottom: 30px;  }h3.title-related {      font: 500 20px/25px 'UtmAvo', sans-serif;border-color: #2b2a79;padding-bottom: 10px;  }p.error {      padding: 10px;font-family: Roboto;font-size: 15px;text-align: center;background: #fff6db;border: 1px solid #ffd0b5;color: #e05d25;  }  .relatedimg {float: left;margin-right: 10px;padding: 1px;border: 1px solid #aebcf3;  }    .relatedh4a {font: 600 14px/25px 'UtmAvo', sans-serif;color: #1d136b;display: inline-block;margin-bottom: 5px;  }    .relatedulli {margin-bottom: 20px;padding-bottom: 10px;  }  .info-cath4a:hover {color: #ff6434;  }  .detail-product {margin-bottom: 30px;  }del span {      font-size: 14px!important;margin-right: 5px;color: #636363!important;text-decoration: inherit;  }ins {text-decoration: none;}p.woocommerce-result-count {      font-size: 14px;font-family: Roboto;font-weight: 400;color: #2b2a79;position: relative;top: 7px;  }select.orderby {      border: 1px solid #5150b7;font-family: Roboto;padding: 8px 10px;font-size: 14px;  }      /*Single-product*/ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}li.description_tab.active {border-radius: 0px!important;}  .woocommercediv.product .woocommerce-tabsul.tabsli:after, .woocommercediv.product .woocommerce-tabsul.tabsli:before {display: none;}ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}div#review_form_wrapper {font-family: Arial;}  .woocommerce-product-rating {margin-bottom: 0px!important;}div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}  .panel {border: 0px;box-shadow: none!important;}p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}  #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}textarea#comment {border: 1px solid #5096D2;padding: 5px;}  #commentformlabel {color: #F26E10;}p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}li.comment {margin-top: 15px!important;}  .comment-text {border-color: #12991F!important;}article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}article.post-content table tr td {padding: 5px;font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;@font-face {font-family: 'UtmAvo';src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/;src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/ format('embedded-opentype'),           url('UTMAVO.woff2')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff2*/ format('woff2'),           url('UTMAVO.woff')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff*/ format('woff'),           url('UTMAVO.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.ttf*/ format('truetype'),           url('UTMAVO.svg#UTMAVO')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.svg#UTMAVO*/ format('svg');  }  @font-face {font-family: 'utm_alexander';src: url('utm_alexander.otf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.otf*/;src: url('utm_alexander.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.ttf*/ format('truetype');font-weight: normal;font-style: normal;  }  /*----- reset -----*/html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0;font-family: inherit;font-size: 100%;margin: 0;outline: 0;padding: 0; }  :focus {outline: 0; }ol,ul {list-style: none; }img {width: auto\9;height: auto;max-width: 100%;vertical-align: middle;-ms-interpolation-mode: bicubic; }table {border-collapse: collapse;border-spacing: 0;width: 100%; }html,body {height: 100%; }   /*----- common -----*/body {background-color: #fff;color: #000;font: normal normal 100% Arial, Helvetica, sans-serif;line-height: 1.5em;font-size: .75em; }h1,h2,h3, h4, h5, h6 {line-height: normal;font-weight: normal; }input,select,textarea {color: #38444f;font: normal normal 1em Arial, Helvetica, sans-serif; }input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; }a:link,a:visited,a:hover,a:focus {text-decoration: none; }a:link,a:visited {color: #000; }a:hover,a:focus {color: #43f812; }  .clear {clear: both; }  /*===================================================================*/    .bg-trans{-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;  }  .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}  .header-topul{margin: 0 -20px;}  .header-topulli{float: left;padding: 0 20px;border-right: 1px solid #e1e1e1;}  .header-topulli:last-child{border-right: none;}  .header-topullia{color: #2b2a79;}  .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}  .header-contentp{margin: 10px 0;}  .header-content .logoa{display: inline-block;}  .header-content .phonep:before{content: '';width: 24px;height: 24px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0;display: inline-block;margin-right: 10px;vertical-align: bottom;}  .header-content .giohangp:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}  .header-content .phonespan{font-size: 14px;color: #f64629;}  .header-bot{background: #2b2a79;}  .menuul{}  .menuulli{float: left;padding: 15px 20px;}  .menuullia{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}  .menuulli.current-menu-item,  .menuulli:hover{background: #5150b7;transition: all .3s;}    .search{width: 170px;position: relative;margin-top: 10px;}  .searchinput{width: 100%;height: 27px;border: none;border-bottom: 1px solid #5150b7;font: italic 12px/20px 'Roboto', sans-serif;color: #ffe9ea;background: transparent;padding: 0 18px 0 0;}  .searchbutton{position: absolute;top: 5px;right: 0;width: 16px;height: 16px;border: none;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -52px 0;text-indent: -9999px;}  .searchbutton:hover{background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -18px -107px;}  ::-webkit-input-placeholder {color: #ffe9ea; }  :-moz-placeholder {color: #ffe9ea; }  ::-moz-placeholder {color: #ffe9ea; }  :-ms-input-placeholder {color: #ffe9ea; }          .block-slider{padding: 30px 0;}  .slider{overflow: hidden;position: relative;}a.rslides_nav{display: block;width: 36px;height: 36px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;text-indent: -9999px;position: absolute;top: 50%;margin-top: -18px;z-index: 10;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}a.rslides_nav.prev{background-position: 0 -31px;left: 15px;}a.rslides_nav.next{background-position: -37px -31px;right: 15px;}a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}    .rslides {position: relative;list-style: none;overflow: hidden;width: 100%;padding: 0;margin: 0; }  .rslidesli {-webkit-backface-visibility: hidden;position: absolute;display: none;width: 100%;left: 0;top: 0; }  .rslidesli:first-child {position: relative;display: block;float: left; }  .rslidesimg {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}  .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}  .rslides .txtp{font: 500 16px/20px 'Roboto', sans-serif;color: #fff;text-transform: uppercase;}ul.block-banner li{margin-bottom: 30px;}ul.block-banner li:last-child{margin-bottom: 0;}h3{font: 400 18px/20px 'Roboto', sans-serif;color: #333;text-transform: uppercase;border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}  .block-product{padding: 0 0 45px;overflow: hidden;}  .block-productbutton{border: none;width: 7px;height: 13px;text-indent: -9999px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;position: absolute;top: -47px;display: block;padding: 0;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}  .block-productbutton.slick-prev{background-position: 0px -107px;right: 35px;}  .block-productbutton.slick-next{background-position: -8px -107px;right: 15px;}  .block-productbutton.slick-prev:hover{background-position: 0px -122px;}  .block-productbutton.slick-next:hover{background-position: -8px -122px;}    .block-productul{margin: 0px -14px;}  .block-productulli{float: left;padding: 0 15px;position: relative;}  .block-productullia.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}  .block-fashionlia.img:before,  .block-productullia.img:before{content: '';width: 0;height: 100%;background: transparent;position: absolute;top: 0;left: 0;display: none;}  @keyframes sheen {      100% {width: 100%;      }  }  .block-fashionlih4,  .block-productullih4{overflow: hidden;height: 20px;margin: 10px 0 5px;}  .block-fashionlih4a,  .block-productullih4a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}  .score-callback{margin-bottom: 5px;}  .score-callbackimg{display: inline-block;}  .block-fashionlistrong,  .block-productullistrong{font: 400 13px/20px 'Roboto', sans-serif;color: #666;margin-right: 20px;text-decoration: line-through;}  .block-fashionlispan,  .block-productullispan{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}  .block-productulli .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}    .register{background: url(bg-ct.jpg)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/bg-ct.jpg*/ no-repeat;text-align: center;margin-bottom: 35px;}  .registerp{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}  .register .input-group{width: 450px;margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif;color: #ccc;}  .register .input-groupinput{width: 360px;height: 35px;}  .register .input-groupbutton{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}    .block-fashion{padding-bottom: 25px;}  .block-fashionli{margin-bottom: 15px;}  .block-fashionlidiv{overflow: hidden;}  .block-fashionlia.img{width: 120px;height: 130px;display: block;float: left;margin-right: 15px;position: relative;}        #footer{background: #242424;padding: 35px 0 0px;}  #footerh3{font: 400 16px/20px 'utm_alexander', sans-serif;color: #fff;border: none;}  #footerp{font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;}  #footerpspan{display: block;margin-bottom: 5px;}  #footerulli{margin-bottom: 5px;}  #footerullia{color: #fff;}  #footer .col-md-3{margin-bottom: 20px;}  #footerp.bot{font: 400 13px/20px 'Roboto', sans-serif;color: #9c9c9c;padding-top: 15px;}  #footerp.bota{color: #9c9c9c;}      .searchinput:focus{border-color: #f64629;}    .block-fashionlih4a:hover,  #footerullia:hover,  #footerp.bota:hover,  .block-productullih4a:hover{color: #F64B2E;}  .register .input-groupbutton:hover{background: #66AFE9;color: #fff;}ul.block-banner img {      border: 1px solid rgba(237, 237, 237, 0.42);  }  .logoimg {max-height: 70px;  }  .giohang.text-right {margin-top: 10px;  }  .no-padding {padding: 0px;  }    .search-box {position: relative;margin-top: 10px;  }    .search-boxbutton.btn.btn-primary {background: none;border: none;color: #e00;position: absolute;right: 0px;top: -2px;font-size: 17px;  }    .search-box .form-control {border-radius: 0;border: 1px solid #5150b7;  }    .search-boxselect.form-control {background: #5150b7;color: #fff;line-height: 31px;  }  .smobitrigger{display: none;}  .default-value{color: red;  }  .copyright {text-align: center;font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;padding: 15px 0px;background: #131313;border-top: 1px solid #4a4a4a;  }    .copyrighta {color: #7772a2;  }    .block-productullia.imgimg{-webkit-transform: rotateY(0);-ms-transform: rotateY(0);-o-transform: rotateY(0);transform: rotateY(0);-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;  }    .block-productullia.img:hoverimg{-webkit-transform: rotateY(-180deg);-ms-transform: rotateY(-180deg);-o-transform: rotateY(-180deg);transform: rotateY(-180deg);  }    .post-img {position: relative;overflow: hidden;  }a.addc {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;left: 1px;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.viewm {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;right: 1px;border-left: 1px solid #d8d8d8;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.addc:hover, a.viewm:hover {      background: #2b2a79;color: #fff;  }a.addc, a.viewm {      bottom: -50px;opacity: 0;-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;background: rgba(255, 255, 255, 0.88);  }    .post-img:hovera {bottom: 0px;opacity: 1;  }    .bread {padding: 10px;font-weight: 400;font-family: Roboto;font-size: 13px;color: #2b2a79;border-bottom: 1px solid #d2d2fb;margin-bottom: 20px;  }    .bread .fa, .breada {color: #ff6434;  }    .bread .fa:hover, .breada:hover {color: #2b2a79;  }h1.title {      font: 400 24px/25px 'UtmAvo', sans-serif;text-transform: uppercase;color: #2b2a79;border-bottom: 1px solid #5150b7;margin-bottom: 14px;  }h1.title span {      display: inline-block;border-bottom: 1px solid #ff6434;padding-bottom: 10px;position: relative;bottom: -1px;  }  .img-postimg {padding: 1px;border: 1px solid #ededed;  }    .info-cath4 {margin-bottom: 5px;font: 600 15px/25px 'UtmAvo', sans-serif;  }    .info-cath4a {color: #2b2a79;  }    .info-catp {font-size: 13px;font-family: Roboto,sans-serif;font-weight: 400;line-height: 20px;margin-bottom: 5px;color: #000;  }    .metaspan {font-size: 12px;font-family: Roboto;display: inline-block;margin-right: 15px;color: #2b2a79;  }    .metaspan .fa {color: #ff6434;margin-right: 4px;  }    .list {margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px dashed #dfdefd;  }    .img-postimg:hover {border-color: #a4a3f7;  }  .content {margin-bottom: 30px;  }    .widget .banner {margin-bottom: 5px;  }h3.title {      background: #2b2a79;color: #fff;padding: 8px;border: none;font: 400 15px/25px 'UtmAvo', sans-serif;margin-bottom: 0px;  }h3.title span {      border: none;padding: 0px;margin: 0px;  }  .content-w {border: 1px solid #c1c1c1;border-top: 0px;  }    .content-wulli {font-family: Roboto;font-size: 18px;border-bottom: 1px solid #ededed;  }    .content-wullispan.togo {cursor: pointer;float: right;margin-top: 15px;padding-right: 10px;  }    .content-wulliul {display: none;width: 100%;border-top: 1px solid #ededed;  }    .widget {margin-bottom: 30px;  }  .content-wulliulli:last-child {border: none;  }    .content-wullia {padding: 9px;display: inline-block;color: #010073;font: 400 15px/25px 'UtmAvo', sans-serif;  }    .content-wulliulli {padding-left: 25px;  }    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {      color: #ff6434;  }    .content-wulli:hover {background: #f9f9f9;  }span.togo.avtive-mn .fa:before {content: "\f147";}  .content-wulliulli:hovera {color: #ff6434;  }h1.title-single {      margin-bottom: 8px;font: 500 20px/25px 'UtmAvo', sans-serif;color: #2b2a79;  }    .meta.meta-single {border-bottom: 1px dashed #b6b5c0;padding-bottom: 5px;margin-bottom: 10px;  }article.post-content {      font-family: Roboto;font-size: 14px;text-align: justify;  }span.social-s {      float: right;  }span.social-s a {      width: 35px;height: 35px;display: inline-block;text-align: center;line-height: 35px;border: 1px solid #2b2a79;color: #2b2a79;font-size: 15px;margin-left: 5px;  }span.social-s a:hover {      color: #fff;transition: all .5s;background: #2b2a79;  }    .meta-s {margin: 15px 0px;  }    .content-cmt {border: 1px solid #d6d5ff;margin-bottom: 30px;  }h3.title-related {      font: 500 20px/25px 'UtmAvo', sans-serif;border-color: #2b2a79;padding-bottom: 10px;  }p.error {      padding: 10px;font-family: Roboto;font-size: 15px;text-align: center;background: #fff6db;border: 1px solid #ffd0b5;color: #e05d25;  }  .relatedimg {float: left;margin-right: 10px;padding: 1px;border: 1px solid #aebcf3;  }    .relatedh4a {font: 600 14px/25px 'UtmAvo', sans-serif;color: #1d136b;display: inline-block;margin-bottom: 5px;  }    .relatedulli {margin-bottom: 20px;padding-bottom: 10px;  }  .info-cath4a:hover {color: #ff6434;  }  .detail-product {margin-bottom: 30px;  }del span {      font-size: 14px!important;margin-right: 5px;color: #636363!important;text-decoration: inherit;  }ins {text-decoration: none;}p.woocommerce-result-count {      font-size: 14px;font-family: Roboto;font-weight: 400;color: #2b2a79;position: relative;top: 7px;  }select.orderby {      border: 1px solid #5150b7;font-family: Roboto;padding: 8px 10px;font-size: 14px;  }      /*Single-product*/ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}li.description_tab.active {border-radius: 0px!important;}  .woocommercediv.product .woocommerce-tabsul.tabsli:after, .woocommercediv.product .woocommerce-tabsul.tabsli:before {display: none;}ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}div#review_form_wrapper {font-family: Arial;}  .woocommerce-product-rating {margin-bottom: 0px!important;}div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}  .panel {border: 0px;box-shadow: none!important;}p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}  #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}textarea#comment {border: 1px solid #5096D2;padding: 5px;}  #commentformlabel {color: #F26E10;}p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}li.comment {margin-top: 15px!important;}  .comment-text {border-color: #12991F!important;}article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}article.post-content table tr td {padding: 5px;font-size: 14px!important;}article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;font-weight: 600!important;}article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}  .woocommercediv.product .woocommerce-tabsul.tabs:before {border: none!important;}div#comments h2 {display: none;}  .summary.entry-summaryp.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}  .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}form.cart {margin-bottom: 0px!important;margin-top: 10px;}  .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}span.posted_in a {color: #ff6434;}span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}span.tagged_as a {color: #ff6434;}p.stars {font-size: 17px;}p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}  .content-dec {height: 93px;overflow: hidden;}  .fb-like.fb_iframe_widget {position: relative;top: -5px;}button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}p.ster {margin-bottom: 15px;}  .detail.lis-proh4 {font-size: 14px;margin: 5px 0px;font-family: Roboto;font-weight: 600;  }    .detail.lis-proh4a {color: #1C3D8E;  }span.amount {      color: #e00;font-family: Roboto;font-size: 15px;  }  .form-control {border-radius: 0px;margin-bottom: 15px;border: 1px solid #CAE7FF;  }  .info {font-size: 14px;font-family: Roboto;line-height: 23px;background: #e4e4ff;padding: 10px;border-radius: 15px;border: 1px solid #c4c4ff;margin-bottom: 20px;  }    .infop {margin-bottom: 10px;  }    .infob {color: #e00;  }    .infostrong {color: #e00;  }input.wpcf7-form-control.wpcf7-submit {      padding: 8px 20px;margin-bottom: 20px;background: #0C398E;border: 1px solid #2B74FF;text-transform: uppercase;color: #fff;font-weight: 600;  }input.wpcf7-form-control.wpcf7-submit:hover {      background: #2B74FF;  }p.price span {      font-size: 20px!important;font-family: Roboto;  }  .imagesimg {border: 1px solid #ededed;padding: 1px;  }span.onsale {      height: 50px;width: 50px;line-height: 15px!important;padding-top: 10px!important;background: #ff6434!important;  }    /* Cart */td.product-thumbnail img {      border: none!important;  }  .woocommercetable.shop_table {border-radius: 0px!important;}  .cart_totalsh2 {text-transform: uppercase;}a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;}a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}  .actionsinput.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}  .actionsinput.button:hover {color: #fff;}  /* Checkout */form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2358FF;border-bottom: 1px solid #2358FF;padding-bottom: 7px;}form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}  .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}  .woocommerce-billing-fieldsinput {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}div#s2id_billing_country a {border-radius: 0px!important;}textarea#order_comments {height: 120px;padding: 10px;}  .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;}input#place_order:hover {background: #0393DD;}div#payment {background: #FBFBFB!important;border-radius: 0px!important;}ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}li.order strong {color: #e00;}li.total strong {color: #e00;}li.method strong {color: #12991F;}li.date strong {color: #0193DD;}form.login {      border-radius: 0px!important;background: #FBFBFB;  }input#username {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  .info-contacth3 {padding: 9px;background: #0393DD;color: #fff;font-size: 14px;text-transform: uppercase;font-weight: 600;position: relative;  }    .info-contacth3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}form.register {      border-radius: 0px!important;background: #FBFBFB;  }input#reg_email {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#reg_password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  /*==========================================================================*/    @-moz-document url-prefix() {         }    @media (max-width: 1190px){      .menu ul li{padding: 10px;}      .search{margin-top: 5px;}      ul.block-banner li {margin-bottom: 26px;}      .block-fashion li h4{height: 40px;}  }  @media (max-width: 990px){      .rslides{margin-bottom: 20px;}      .block-slider{padding: 20px 0 0;}      ul.block-banner{margin: 0 -10px;}      ul.block-banner li,      ul.block-banner li:last-child{width: 50%;float: left;padding: 0 10px;margin-bottom: 20px;}      .block-fashion li h4 a{font-size: 13px;}      .block-fashion li a.img{width: 110px;height: 120px;}        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden;padding: 5px 0;position: absolute;top: 10px;left: 15px;background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat;text-indent: -9999px;}      .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px;position: absolute;left: -260px;top: 37px;background: #aa8f90;z-index: 20;}      .menu .block-menu li{width: 100%;float: none;}      @keyframes width_ {          100% {width: 250px;left: 15px;          }      }      .search{margin: 5px 0;}  }  @media (max-width: 750px){      #footer p.bot,      .block-fashion{padding: 0;}      .block-fashion li h4{height: 20px;}      .block-fashion li h4 a{font-size: 15px;}      .header-content{padding: 20px 0;}      .block-product{padding: 0 0 20px;}      .register{margin-bottom: 20px;}      .header-top ul{margin: 0;}      .header-top ul li:last-child{padding-right: 0;}  }  @media (max-width: 680px){      .header-top{padding: 5px 0;}      .header-content .phone,      .header-top .pull-left{display: none;}      .header-top .pull-right{text-align: center;width: 100%;float:none;}      .header-top ul li{display: inline-block;float: none;padding: 0 10px;}      .register p{font-size: 15px;}      .header-content .logo{width: 40%;text-align: left;}      .header-content .giohang{width: 60%;}      .register .input-group{width: 270px;}      .register .input-group input{width: 180px;}      .register p{padding: 0 15px;}      .block-fashion .col-md-4{width: 100%;}  }  @media (max-width: 630px){      .register{padding: 20px 0;}      .rslides .txt{bottom: 10px;}      .rslides .txt p{font-size: 13px;}  }  @media (max-width: 500px){      #footer .col-md-3{width: 100%;}  }  @media (max-width: 420px){      .header-top{display: none;}      .header-content .logo{width: 100%;float: none;margin-top: 15px;}      .header-content .giohang{width: 100%;position: absolute;right: 0;top: -6px;}  }font: 500 20px/25px 'UtmAvo', sans-serif;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}  .woocommercediv.product .woocommerce-tabsul.tabs:before {border: none!important;}div#comments h2 {display: none;}  .summary.entry-summaryp.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}  .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}form.cart {margin-bottom: 0px!important;margin-top: 10px;}  .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}span.posted_in a {color: #ff6434;}span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}span.tagged_as a {color: #ff6434;}p.stars {font-size: 17px;}p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}  .content-dec {height: 93px;overflow: hidden;}  .fb-like.fb_iframe_widget {position: relative;top: -5px;}button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}p.ster {margin-bottom: 15px;}  .detail.lis-proh4 {font-size: 14px;margin: 5px 0px;font-family: Roboto;font-weight: 600;  }    .detail.lis-proh4a {color: #1C3D8E;  }span.amount {      color: #e00;font-family: Roboto;font-size: 15px;  }  .form-control {border-radius: 0px;margin-bottom: 15px;border: 1px solid #CAE7FF;  }  .info {font-size: 14px;font-family: Roboto;line-height: 23px;background: #e4e4ff;padding: 10px;border-radius: 15px;border: 1px solid #c4c4ff;margin-bottom: 20px;  }    .infop {margin-bottom: 10px;  }    .infob {color: #e00;  }    .infostrong {color: #e00;  }input.wpcf7-form-control.wpcf7-submit {      padding: 8px 20px;margin-bottom: 20px;background: #0C398E;border: 1px solid #2B74FF;text-transform: uppercase;color: #fff;font-weight: 600;  }input.wpcf7-form-control.wpcf7-submit:hover {      background: #2B74FF;  }p.price span {      font-size: 20px!important;font-family: Roboto;  }  .imagesimg {border: 1px solid #ededed;padding: 1px;  }span.onsale {      height: 50px;width: 50px;line-height: 15px!important;padding-top: 10px!important;background: #ff6434!important;  }    /* Cart */td.product-thumbnail img {      border: none!important;  }  .woocommercetable.shop_table {border-radius: 0px!important;}  .cart_totalsh2 {text-transform: uppercase;font: 500 20px/25px 'UtmAvo', sans-serif!important;}a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;font: 500 14px/18px 'UtmAvo', sans-serif;}a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}  .actionsinput.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}  .actionsinput.button:hover {color: #fff;}  /* Checkout */form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2358FF;border-bottom: 1px solid #2358FF;padding-bottom: 7px;}form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}  .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}  .woocommerce-billing-fieldsinput {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}div#s2id_billing_country a {border-radius: 0px!important;}textarea#order_comments {height: 120px;padding: 10px;}  .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;}input#place_order:hover {background: #0393DD;}div#payment {background: #FBFBFB!important;border-radius: 0px!important;}ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}li.order strong {color: #e00;}li.total strong {color: #e00;}li.method strong {color: #12991F;}li.date strong {color: #0193DD;}form.login {      border-radius: 0px!important;background: #FBFBFB;  }input#username {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  .info-contacth3 {padding: 9px;background: #0393DD;color: #fff;font-size: 14px;text-transform: uppercase;font-weight: 600;position: relative;  }    .info-contacth3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}form.register {      border-radius: 0px!important;background: #FBFBFB;  }input#reg_email {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#reg_password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  /*==========================================================================*/    @-moz-document url-prefix() {         }    @media (max-width: 1190px){      .menu ul li{padding: 10px;}      .search{margin-top: 5px;}      ul.block-banner li {margin-bottom: 26px;}      .block-fashion li h4{height: 40px;}  }  @media (max-width: 990px){      .rslides{margin-bottom: 20px;}      .block-slider{padding: 20px 0 0;}      ul.block-banner{margin: 0 -10px;}      ul.block-banner li,      ul.block-banner li:last-child{width: 50%;float: left;padding: 0 10px;margin-bottom: 20px;}      .block-fashion li h4 a{font-size: 13px;}      .block-fashion li a.img{width: 110px;height: 120px;}        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden;padding: 5px 0;position: absolute;top: 10px;left: 15px;background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat;text-indent: -9999px;}      .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px;position: absolute;left: -260px;top: 37px;background: #aa8f90;z-index: 20;}      .menu .block-menu li{width: 100%;float: none;}      @keyframes width_ {          100% {width: 250px;left: 15px;          }      }      .search{margin: 5px 0;}  }  @media (max-width: 750px){      #footer p.bot,      .block-fashion{padding: 0;}      .block-fashion li h4{height: 20px;}      .block-fashion li h4 a{font-size: 15px;}      .header-content{padding: 20px 0;}      .block-product{padding: 0 0 20px;}      .register{margin-bottom: 20px;}      .header-top ul{margin: 0;}      .header-top ul li:last-child{padding-right: 0;}  }  @media (max-width: 680px){      .header-top{padding: 5px 0;}      .header-content .phone,      .header-top .pull-left{display: none;}      .header-top .pull-right{text-align: center;width: 100%;float:none;}      .header-top ul li{display: inline-block;float: none;padding: 0 10px;}      .register p{font-size: 15px;}      .header-content .logo{width: 40%;text-align: left;}      .header-content .giohang{width: 60%;}      .register .input-group{width: 270px;}      .register .input-group input{width: 180px;}      .register p{padding: 0 15px;}      .block-fashion .col-md-4{width: 100%;}  }  @media (max-width: 630px){      .register{padding: 20px 0;}      .rslides .txt{bottom: 10px;}      .rslides .txt p{font-size: 13px;}  }  @media (max-width: 500px){      #footer .col-md-3{width: 100%;}  }  @media (max-width: 420px){      .header-top{display: none;}      .header-content .logo{width: 100%;float: none;margin-top: 15px;}      .header-content .giohang{width: 100%;position: absolute;right: 0;top: -6px;}  }@font-face {font-family: 'UtmAvo';src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/;src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/ format('embedded-opentype'),           url('UTMAVO.woff2')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff2*/ format('woff2'),           url('UTMAVO.woff')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff*/ format('woff'),           url('UTMAVO.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.ttf*/ format('truetype'),           url('UTMAVO.svg#UTMAVO')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.svg#UTMAVO*/ format('svg');  }  @font-face {font-family: 'utm_alexander';src: url('utm_alexander.otf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.otf*/;src: url('utm_alexander.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.ttf*/ format('truetype');font-weight: normal;font-style: normal;  }  /*----- reset -----*/html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0;font-family: inherit;font-size: 100%;margin: 0;outline: 0;padding: 0; }  :focus {outline: 0; }ol,ul {list-style: none; }img {width: auto\9;height: auto;max-width: 100%;vertical-align: middle;-ms-interpolation-mode: bicubic; }table {border-collapse: collapse;border-spacing: 0;width: 100%; }html,body {height: 100%; }   /*----- common -----*/body {background-color: #fff;color: #000;font: normal normal 100% Arial, Helvetica, sans-serif;line-height: 1.5em;font-size: .75em; }h1,h2,h3, h4, h5, h6 {line-height: normal;font-weight: normal; }input,select,textarea {color: #38444f;font: normal normal 1em Arial, Helvetica, sans-serif; }input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; }a:link,a:visited,a:hover,a:focus {text-decoration: none; }a:link,a:visited {color: #000; }a:hover,a:focus {color: #43f812; }  .clear {clear: both; }  /*===================================================================*/    .bg-trans{-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;  }  .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}  .header-topul{margin: 0 -20px;}  .header-topulli{float: left;padding: 0 20px;border-right: 1px solid #e1e1e1;}  .header-topulli:last-child{border-right: none;}  .header-topullia{color: #2b2a79;}  .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}  .header-contentp{margin: 10px 0;}  .header-content .logoa{display: inline-block;}  .header-content .phonep:before{content: '';width: 24px;height: 24px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0;display: inline-block;margin-right: 10px;vertical-align: bottom;}  .header-content .giohangp:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}  .header-content .phonespan{font-size: 14px;color: #f64629;}  .header-bot{background: #2b2a79;}  .menuul{}  .menuulli{float: left;padding: 15px 20px;}  .menuullia{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}  .menuulli.current-menu-item,  .menuulli:hover{background: #5150b7;transition: all .3s;}    .search{width: 170px;position: relative;margin-top: 10px;}  .searchinput{width: 100%;height: 27px;border: none;border-bottom: 1px solid #5150b7;font: italic 12px/20px 'Roboto', sans-serif;color: #ffe9ea;background: transparent;padding: 0 18px 0 0;}  .searchbutton{position: absolute;top: 5px;right: 0;width: 16px;height: 16px;border: none;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -52px 0;text-indent: -9999px;}  .searchbutton:hover{background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -18px -107px;}  ::-webkit-input-placeholder {color: #ffe9ea; }  :-moz-placeholder {color: #ffe9ea; }  ::-moz-placeholder {color: #ffe9ea; }  :-ms-input-placeholder {color: #ffe9ea; }          .block-slider{padding: 30px 0;}  .slider{overflow: hidden;position: relative;}a.rslides_nav{display: block;width: 36px;height: 36px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;text-indent: -9999px;position: absolute;top: 50%;margin-top: -18px;z-index: 10;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}a.rslides_nav.prev{background-position: 0 -31px;left: 15px;}a.rslides_nav.next{background-position: -37px -31px;right: 15px;}a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}    .rslides {position: relative;list-style: none;overflow: hidden;width: 100%;padding: 0;margin: 0; }  .rslidesli {-webkit-backface-visibility: hidden;position: absolute;display: none;width: 100%;left: 0;top: 0; }  .rslidesli:first-child {position: relative;display: block;float: left; }  .rslidesimg {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}  .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}  .rslides .txtp{font: 500 16px/20px 'Roboto', sans-serif;color: #fff;text-transform: uppercase;}ul.block-banner li{margin-bottom: 30px;}ul.block-banner li:last-child{margin-bottom: 0;}h3{font: 400 18px/20px 'Roboto', sans-serif;color: #333;text-transform: uppercase;border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}  .block-product{padding: 0 0 45px;overflow: hidden;}  .block-productbutton{border: none;width: 7px;height: 13px;text-indent: -9999px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;position: absolute;top: -47px;display: block;padding: 0;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}  .block-productbutton.slick-prev{background-position: 0px -107px;right: 35px;}  .block-productbutton.slick-next{background-position: -8px -107px;right: 15px;}  .block-productbutton.slick-prev:hover{background-position: 0px -122px;}  .block-productbutton.slick-next:hover{background-position: -8px -122px;}    .block-productul{margin: 0px -14px;}  .block-productulli{float: left;padding: 0 15px;position: relative;}  .block-productullia.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}  .block-fashionlia.img:before,  .block-productullia.img:before{content: '';width: 0;height: 100%;background: transparent;position: absolute;top: 0;left: 0;display: none;}  @keyframes sheen {      100% {width: 100%;      }  }  .block-fashionlih4,  .block-productullih4{overflow: hidden;height: 20px;margin: 10px 0 5px;}  .block-fashionlih4a,  .block-productullih4a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}  .score-callback{margin-bottom: 5px;}  .score-callbackimg{display: inline-block;}  .block-fashionlistrong,  .block-productullistrong{font: 400 13px/20px 'Roboto', sans-serif;color: #666;margin-right: 20px;text-decoration: line-through;}  .block-fashionlispan,  .block-productullispan{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}  .block-productulli .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}    .register{background: url(bg-ct.jpg)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/bg-ct.jpg*/ no-repeat;text-align: center;margin-bottom: 35px;}  .registerp{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}  .register .input-group{width: 450px;margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif;color: #ccc;}  .register .input-groupinput{width: 360px;height: 35px;}  .register .input-groupbutton{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}    .block-fashion{padding-bottom: 25px;}  .block-fashionli{margin-bottom: 15px;}  .block-fashionlidiv{overflow: hidden;}  .block-fashionlia.img{width: 120px;height: 130px;display: block;float: left;margin-right: 15px;position: relative;}        #footer{background: #242424;padding: 35px 0 0px;}  #footerh3{font: 400 16px/20px 'utm_alexander', sans-serif;color: #fff;border: none;}  #footerp{font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;}  #footerpspan{display: block;margin-bottom: 5px;}  #footerulli{margin-bottom: 5px;}  #footerullia{color: #fff;}  #footer .col-md-3{margin-bottom: 20px;}  #footerp.bot{font: 400 13px/20px 'Roboto', sans-serif;color: #9c9c9c;padding-top: 15px;}  #footerp.bota{color: #9c9c9c;}      .searchinput:focus{border-color: #f64629;}    .block-fashionlih4a:hover,  #footerullia:hover,  #footerp.bota:hover,  .block-productullih4a:hover{color: #F64B2E;}  .register .input-groupbutton:hover{background: #66AFE9;color: #fff;}ul.block-banner img {      border: 1px solid rgba(237, 237, 237, 0.42);  }  .logoimg {max-height: 70px;  }  .giohang.text-right {margin-top: 10px;  }  .no-padding {padding: 0px;  }    .search-box {position: relative;margin-top: 10px;  }    .search-boxbutton.btn.btn-primary {background: none;border: none;color: #e00;position: absolute;right: 0px;top: -2px;font-size: 17px;  }    .search-box .form-control {border-radius: 0;border: 1px solid #5150b7;  }    .search-boxselect.form-control {background: #5150b7;color: #fff;line-height: 31px;  }  .smobitrigger{display: none;}  .default-value{color: red;  }  .copyright {text-align: center;font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;padding: 15px 0px;background: #131313;border-top: 1px solid #4a4a4a;  }    .copyrighta {color: #7772a2;  }    .block-productullia.imgimg{-webkit-transform: rotateY(0);-ms-transform: rotateY(0);-o-transform: rotateY(0);transform: rotateY(0);-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;  }    .block-productullia.img:hoverimg{-webkit-transform: rotateY(-180deg);-ms-transform: rotateY(-180deg);-o-transform: rotateY(-180deg);transform: rotateY(-180deg);  }    .post-img {position: relative;overflow: hidden;  }a.addc {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;left: 1px;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.viewm {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;right: 1px;border-left: 1px solid #d8d8d8;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.addc:hover, a.viewm:hover {      background: #2b2a79;color: #fff;  }a.addc, a.viewm {      bottom: -50px;opacity: 0;-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;background: rgba(255, 255, 255, 0.88);  }    .post-img:hovera {bottom: 0px;opacity: 1;  }    .bread {padding: 10px;font-weight: 400;font-family: Roboto;font-size: 13px;color: #2b2a79;border-bottom: 1px solid #d2d2fb;margin-bottom: 20px;  }    .bread .fa, .breada {color: #ff6434;  }    .bread .fa:hover, .breada:hover {color: #2b2a79;  }h1.title {      font: 400 24px/25px 'UtmAvo', sans-serif;text-transform: uppercase;color: #2b2a79;border-bottom: 1px solid #5150b7;margin-bottom: 14px;  }h1.title span {      display: inline-block;border-bottom: 1px solid #ff6434;padding-bottom: 10px;position: relative;bottom: -1px;  }  .img-postimg {padding: 1px;border: 1px solid #ededed;  }    .info-cath4 {margin-bottom: 5px;font: 600 15px/25px 'UtmAvo', sans-serif;  }    .info-cath4a {color: #2b2a79;  }    .info-catp {font-size: 13px;font-family: Roboto,sans-serif;font-weight: 400;line-height: 20px;margin-bottom: 5px;color: #000;  }    .metaspan {font-size: 12px;font-family: Roboto;display: inline-block;margin-right: 15px;color: #2b2a79;  }    .metaspan .fa {color: #ff6434;margin-right: 4px;  }    .list {margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px dashed #dfdefd;  }    .img-postimg:hover {border-color: #a4a3f7;  }  .content {margin-bottom: 30px;  }    .widget .banner {margin-bottom: 5px;  }h3.title {      background: #2b2a79;color: #fff;padding: 8px;border: none;font: 400 15px/25px 'UtmAvo', sans-serif;margin-bottom: 0px;  }h3.title span {      border: none;padding: 0px;margin: 0px;  }  .content-w {border: 1px solid #c1c1c1;border-top: 0px;  }    .content-wulli {font-family: Roboto;font-size: 18px;border-bottom: 1px solid #ededed;  }    .content-wullispan.togo {cursor: pointer;float: right;margin-top: 15px;padding-right: 10px;  }    .content-wulliul {display: none;width: 100%;border-top: 1px solid #ededed;  }    .widget {margin-bottom: 30px;  }  .content-wulliulli:last-child {border: none;  }    .content-wullia {padding: 9px;display: inline-block;color: #010073;font: 400 15px/25px 'UtmAvo', sans-serif;  }    .content-wulliulli {padding-left: 25px;  }    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {      color: #ff6434;  }    .content-wulli:hover {background: #f9f9f9;  }span.togo.avtive-mn .fa:before {content: "\f147";}  .content-wulliulli:hovera {color: #ff6434;  }h1.title-single {      margin-bottom: 8px;font: 500 20px/25px 'UtmAvo', sans-serif;color: #2b2a79;  }    .meta.meta-single {border-bottom: 1px dashed #b6b5c0;padding-bottom: 5px;margin-bottom: 10px;  }article.post-content {      font-family: Roboto;font-size: 14px;text-align: justify;  }span.social-s {      float: right;  }span.social-s a {      width: 35px;height: 35px;display: inline-block;text-align: center;line-height: 35px;border: 1px solid #2b2a79;color: #2b2a79;font-size: 15px;margin-left: 5px;  }span.social-s a:hover {      color: #fff;transition: all .5s;background: #2b2a79;  }    .meta-s {margin: 15px 0px;  }    .content-cmt {border: 1px solid #d6d5ff;margin-bottom: 30px;  }h3.title-related {      font: 500 20px/25px 'UtmAvo', sans-serif;border-color: #2b2a79;padding-bottom: 10px;  }p.error {      padding: 10px;font-family: Roboto;font-size: 15px;text-align: center;background: #fff6db;border: 1px solid #ffd0b5;color: #e05d25;  }  .relatedimg {float: left;margin-right: 10px;padding: 1px;border: 1px solid #aebcf3;  }    .relatedh4a {font: 600 14px/25px 'UtmAvo', sans-serif;color: #1d136b;display: inline-block;margin-bottom: 5px;  }    .relatedulli {margin-bottom: 20px;padding-bottom: 10px;  }  .info-cath4a:hover {color: #ff6434;  }  .detail-product {margin-bottom: 30px;  }del span {      font-size: 14px!important;margin-right: 5px;color: #636363!important;text-decoration: inherit;  }ins {text-decoration: none;}p.woocommerce-result-count {      font-size: 14px;font-family: Roboto;font-weight: 400;color: #2b2a79;position: relative;top: 7px;  }select.orderby {      border: 1px solid #5150b7;font-family: Roboto;padding: 8px 10px;font-size: 14px;  }      /*Single-product*/ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}li.description_tab.active {border-radius: 0px!important;}  .woocommercediv.product .woocommerce-tabsul.tabsli:after, .woocommercediv.product .woocommerce-tabsul.tabsli:before {display: none;}ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}div#review_form_wrapper {font-family: Arial;}  .woocommerce-product-rating {margin-bottom: 0px!important;}div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}  .panel {border: 0px;box-shadow: none!important;}p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}  #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}textarea#comment {border: 1px solid #5096D2;padding: 5px;}  #commentformlabel {color: #F26E10;}p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}li.comment {margin-top: 15px!important;}  .comment-text {border-color: #12991F!important;}article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}article.post-content table tr td {padding: 5px;font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;@font-face {font-family: 'UtmAvo';src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/;src: url('UTMAVO.eot')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.eot*/ format('embedded-opentype'),           url('UTMAVO.woff2')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff2*/ format('woff2'),           url('UTMAVO.woff')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.woff*/ format('woff'),           url('UTMAVO.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.ttf*/ format('truetype'),           url('UTMAVO.svg#UTMAVO')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/Avo/UTMAVO.svg#UTMAVO*/ format('svg');  }  @font-face {font-family: 'utm_alexander';src: url('utm_alexander.otf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.otf*/;src: url('utm_alexander.ttf')/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/fonts/utm_alexander.ttf*/ format('truetype');font-weight: normal;font-style: normal;  }  /*----- reset -----*/html, body, div, span, h1, h2, h3, h4, h5, h6, p, blockquote, a, address, em, img, strong, dl, dt, dd, ul, li, fieldset, form, label, legend {border: 0;font-family: inherit;font-size: 100%;margin: 0;outline: 0;padding: 0; }  :focus {outline: 0; }ol,ul {list-style: none; }img {width: auto\9;height: auto;max-width: 100%;vertical-align: middle;-ms-interpolation-mode: bicubic; }table {border-collapse: collapse;border-spacing: 0;width: 100%; }html,body {height: 100%; }   /*----- common -----*/body {background-color: #fff;color: #000;font: normal normal 100% Arial, Helvetica, sans-serif;line-height: 1.5em;font-size: .75em; }h1,h2,h3, h4, h5, h6 {line-height: normal;font-weight: normal; }input,select,textarea {color: #38444f;font: normal normal 1em Arial, Helvetica, sans-serif; }input:focus,select:focus,textarea:focus,a:link,a:visited,a:hover,a:focus {outline: none; }a:link,a:visited,a:hover,a:focus {text-decoration: none; }a:link,a:visited {color: #000; }a:hover,a:focus {color: #43f812; }  .clear {clear: both; }  /*===================================================================*/    .bg-trans{-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;  }  .header-top{background: rgba(243, 243, 243, 0.49);font: 400 13px/20px 'Roboto', sans-serif;color: #666;padding: 5px 0;border-bottom: 1px solid #ededed;}  .header-topul{margin: 0 -20px;}  .header-topulli{float: left;padding: 0 20px;border-right: 1px solid #e1e1e1;}  .header-topulli:last-child{border-right: none;}  .header-topullia{color: #2b2a79;}  .header-content{font: 400 12px/22px 'Roboto', sans-serif;color: #666;padding: 10px 0 10px;}  .header-contentp{margin: 10px 0;}  .header-content .logoa{display: inline-block;}  .header-content .phonep:before{content: '';width: 24px;height: 24px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat 0 0;display: inline-block;margin-right: 10px;vertical-align: bottom;}  .header-content .giohangp:before{width: 27px;height: 27px;content: "\f07a";display: inline-block;font: normal normal normal 14px/1 FontAwesome;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;background: #5150b7;color: #fff;text-align: center;line-height: 27px;border-radius: 50%;margin-right: 10px;}  .header-content .phonespan{font-size: 14px;color: #f64629;}  .header-bot{background: #2b2a79;}  .menuul{}  .menuulli{float: left;padding: 15px 20px;}  .menuullia{display: block;color: #fff;text-transform: uppercase;font: 400 15px/20px 'UtmAvo', sans-serif;}  .menuulli.current-menu-item,  .menuulli:hover{background: #5150b7;transition: all .3s;}    .search{width: 170px;position: relative;margin-top: 10px;}  .searchinput{width: 100%;height: 27px;border: none;border-bottom: 1px solid #5150b7;font: italic 12px/20px 'Roboto', sans-serif;color: #ffe9ea;background: transparent;padding: 0 18px 0 0;}  .searchbutton{position: absolute;top: 5px;right: 0;width: 16px;height: 16px;border: none;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -52px 0;text-indent: -9999px;}  .searchbutton:hover{background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat -18px -107px;}  ::-webkit-input-placeholder {color: #ffe9ea; }  :-moz-placeholder {color: #ffe9ea; }  ::-moz-placeholder {color: #ffe9ea; }  :-ms-input-placeholder {color: #ffe9ea; }          .block-slider{padding: 30px 0;}  .slider{overflow: hidden;position: relative;}a.rslides_nav{display: block;width: 36px;height: 36px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;text-indent: -9999px;position: absolute;top: 50%;margin-top: -18px;z-index: 10;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}a.rslides_nav.prev{background-position: 0 -31px;left: 15px;}a.rslides_nav.next{background-position: -37px -31px;right: 15px;}a.rslides_nav.prev:hover{background-position: 0 -67px;border-radius: 0 4px 4px 0;}a.rslides_nav.next:hover{background-position: -37px -67px;border-radius: 6px 0 0 6px;}    .rslides {position: relative;list-style: none;overflow: hidden;width: 100%;padding: 0;margin: 0; }  .rslidesli {-webkit-backface-visibility: hidden;position: absolute;display: none;width: 100%;left: 0;top: 0; }  .rslidesli:first-child {position: relative;display: block;float: left; }  .rslidesimg {display: block;height: auto;float: left;width: 100%;border: 1px solid rgba(237, 237, 237, 0.29);}  .rslides .txt {position: absolute;bottom: 30px;width: 80%;left: 10%;z-index: 10;padding: 15px;background: rgba(31, 120, 191, 0.22);}  .rslides .txtp{font: 500 16px/20px 'Roboto', sans-serif;color: #fff;text-transform: uppercase;}ul.block-banner li{margin-bottom: 30px;}ul.block-banner li:last-child{margin-bottom: 0;}h3{font: 400 18px/20px 'Roboto', sans-serif;color: #333;text-transform: uppercase;border-bottom: 1px solid #e1e1e1;margin-bottom: 20px;}h3 span{display: inline-block;border-bottom: 1px solid #403ec5;padding-bottom: 9px;margin-bottom: -1px;font: 500 18px/20px 'UtmAvo', sans-serif;}  .block-product{padding: 0 0 45px;overflow: hidden;}  .block-productbutton{border: none;width: 7px;height: 13px;text-indent: -9999px;background: url(sprite.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/sprite.png*/ no-repeat;position: absolute;top: -47px;display: block;padding: 0;-moz-transition: background, .4s ease;-o-transition: background, .4s ease;-webkit-transition: background, .4s ease;transition: background, .4s ease;}  .block-productbutton.slick-prev{background-position: 0px -107px;right: 35px;}  .block-productbutton.slick-next{background-position: -8px -107px;right: 15px;}  .block-productbutton.slick-prev:hover{background-position: 0px -122px;}  .block-productbutton.slick-next:hover{background-position: -8px -122px;}    .block-productul{margin: 0px -14px;}  .block-productulli{float: left;padding: 0 15px;position: relative;}  .block-productullia.img{display: block;max-height: 290px;width: 100%;border: 1px solid #bbbbe4;background: #f1f1f1;position: relative;overflow: hidden;}  .block-fashionlia.img:before,  .block-productullia.img:before{content: '';width: 0;height: 100%;background: transparent;position: absolute;top: 0;left: 0;display: none;}  @keyframes sheen {      100% {width: 100%;      }  }  .block-fashionlih4,  .block-productullih4{overflow: hidden;height: 20px;margin: 10px 0 5px;}  .block-fashionlih4a,  .block-productullih4a{font: 400 15px/20px 'Roboto', sans-serif;color: #2b2a79;}  .score-callback{margin-bottom: 5px;}  .score-callbackimg{display: inline-block;}  .block-fashionlistrong,  .block-productullistrong{font: 400 13px/20px 'Roboto', sans-serif;color: #666;margin-right: 20px;text-decoration: line-through;}  .block-fashionlispan,  .block-productullispan{font: 400 18px/20px 'Roboto', sans-serif;color: #f64629;}  .block-productulli .sale{padding: 5px 10px;background: #2b2a79;color: #fff;display: inline-block;font: 400 14px/20px 'Roboto', sans-serif;position: absolute;top: 0px;z-index: 1;left: 30px;}    .register{background: url(bg-ct.jpg)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/bg-ct.jpg*/ no-repeat;text-align: center;margin-bottom: 35px;}  .registerp{color: #fff;font: 500 18px/20px 'UtmAvo', sans-serif;text-transform: uppercase;}  .register .input-group{width: 450px;margin: 15px auto 0;font: 400 13px/20px 'Roboto', sans-serif;color: #ccc;}  .register .input-groupinput{width: 360px;height: 35px;}  .register .input-groupbutton{width: 90px;height: 35px;background: #2b2a79;border: none;color: #ccc;}    .block-fashion{padding-bottom: 25px;}  .block-fashionli{margin-bottom: 15px;}  .block-fashionlidiv{overflow: hidden;}  .block-fashionlia.img{width: 120px;height: 130px;display: block;float: left;margin-right: 15px;position: relative;}        #footer{background: #242424;padding: 35px 0 0px;}  #footerh3{font: 400 16px/20px 'utm_alexander', sans-serif;color: #fff;border: none;}  #footerp{font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;}  #footerpspan{display: block;margin-bottom: 5px;}  #footerulli{margin-bottom: 5px;}  #footerullia{color: #fff;}  #footer .col-md-3{margin-bottom: 20px;}  #footerp.bot{font: 400 13px/20px 'Roboto', sans-serif;color: #9c9c9c;padding-top: 15px;}  #footerp.bota{color: #9c9c9c;}      .searchinput:focus{border-color: #f64629;}    .block-fashionlih4a:hover,  #footerullia:hover,  #footerp.bota:hover,  .block-productullih4a:hover{color: #F64B2E;}  .register .input-groupbutton:hover{background: #66AFE9;color: #fff;}ul.block-banner img {      border: 1px solid rgba(237, 237, 237, 0.42);  }  .logoimg {max-height: 70px;  }  .giohang.text-right {margin-top: 10px;  }  .no-padding {padding: 0px;  }    .search-box {position: relative;margin-top: 10px;  }    .search-boxbutton.btn.btn-primary {background: none;border: none;color: #e00;position: absolute;right: 0px;top: -2px;font-size: 17px;  }    .search-box .form-control {border-radius: 0;border: 1px solid #5150b7;  }    .search-boxselect.form-control {background: #5150b7;color: #fff;line-height: 31px;  }  .smobitrigger{display: none;}  .default-value{color: red;  }  .copyright {text-align: center;font: 400 13px/20px 'Roboto', sans-serif;color: #b2b2b2;padding: 15px 0px;background: #131313;border-top: 1px solid #4a4a4a;  }    .copyrighta {color: #7772a2;  }    .block-productullia.imgimg{-webkit-transform: rotateY(0);-ms-transform: rotateY(0);-o-transform: rotateY(0);transform: rotateY(0);-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;  }    .block-productullia.img:hoverimg{-webkit-transform: rotateY(-180deg);-ms-transform: rotateY(-180deg);-o-transform: rotateY(-180deg);transform: rotateY(-180deg);  }    .post-img {position: relative;overflow: hidden;  }a.addc {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;left: 1px;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.viewm {      position: absolute;bottom: 0px;display: inline-block;width: 50%;background: #ededed;font-family: Roboto;padding: 10px 10px;right: 1px;border-left: 1px solid #d8d8d8;font-size: 13px;text-align: center;border-bottom: 2px solid #4241bb;  }a.addc:hover, a.viewm:hover {      background: #2b2a79;color: #fff;  }a.addc, a.viewm {      bottom: -50px;opacity: 0;-webkit-transition: all .5s;-moz-transition: all .5s;-ms-transition: all .5s;-o-transition: all .5s;transition: all .5s;background: rgba(255, 255, 255, 0.88);  }    .post-img:hovera {bottom: 0px;opacity: 1;  }    .bread {padding: 10px;font-weight: 400;font-family: Roboto;font-size: 13px;color: #2b2a79;border-bottom: 1px solid #d2d2fb;margin-bottom: 20px;  }    .bread .fa, .breada {color: #ff6434;  }    .bread .fa:hover, .breada:hover {color: #2b2a79;  }h1.title {      font: 400 24px/25px 'UtmAvo', sans-serif;text-transform: uppercase;color: #2b2a79;border-bottom: 1px solid #5150b7;margin-bottom: 14px;  }h1.title span {      display: inline-block;border-bottom: 1px solid #ff6434;padding-bottom: 10px;position: relative;bottom: -1px;  }  .img-postimg {padding: 1px;border: 1px solid #ededed;  }    .info-cath4 {margin-bottom: 5px;font: 600 15px/25px 'UtmAvo', sans-serif;  }    .info-cath4a {color: #2b2a79;  }    .info-catp {font-size: 13px;font-family: Roboto,sans-serif;font-weight: 400;line-height: 20px;margin-bottom: 5px;color: #000;  }    .metaspan {font-size: 12px;font-family: Roboto;display: inline-block;margin-right: 15px;color: #2b2a79;  }    .metaspan .fa {color: #ff6434;margin-right: 4px;  }    .list {margin-bottom: 20px;padding-bottom: 20px;border-bottom: 1px dashed #dfdefd;  }    .img-postimg:hover {border-color: #a4a3f7;  }  .content {margin-bottom: 30px;  }    .widget .banner {margin-bottom: 5px;  }h3.title {      background: #2b2a79;color: #fff;padding: 8px;border: none;font: 400 15px/25px 'UtmAvo', sans-serif;margin-bottom: 0px;  }h3.title span {      border: none;padding: 0px;margin: 0px;  }  .content-w {border: 1px solid #c1c1c1;border-top: 0px;  }    .content-wulli {font-family: Roboto;font-size: 18px;border-bottom: 1px solid #ededed;  }    .content-wullispan.togo {cursor: pointer;float: right;margin-top: 15px;padding-right: 10px;  }    .content-wulliul {display: none;width: 100%;border-top: 1px solid #ededed;  }    .widget {margin-bottom: 30px;  }  .content-wulliulli:last-child {border: none;  }    .content-wullia {padding: 9px;display: inline-block;color: #010073;font: 400 15px/25px 'UtmAvo', sans-serif;  }    .content-wulliulli {padding-left: 25px;  }    .content-w>ul>li:hover>a, .content-w>ul>li:hover>span {      color: #ff6434;  }    .content-wulli:hover {background: #f9f9f9;  }span.togo.avtive-mn .fa:before {content: "\f147";}  .content-wulliulli:hovera {color: #ff6434;  }h1.title-single {      margin-bottom: 8px;font: 500 20px/25px 'UtmAvo', sans-serif;color: #2b2a79;  }    .meta.meta-single {border-bottom: 1px dashed #b6b5c0;padding-bottom: 5px;margin-bottom: 10px;  }article.post-content {      font-family: Roboto;font-size: 14px;text-align: justify;  }span.social-s {      float: right;  }span.social-s a {      width: 35px;height: 35px;display: inline-block;text-align: center;line-height: 35px;border: 1px solid #2b2a79;color: #2b2a79;font-size: 15px;margin-left: 5px;  }span.social-s a:hover {      color: #fff;transition: all .5s;background: #2b2a79;  }    .meta-s {margin: 15px 0px;  }    .content-cmt {border: 1px solid #d6d5ff;margin-bottom: 30px;  }h3.title-related {      font: 500 20px/25px 'UtmAvo', sans-serif;border-color: #2b2a79;padding-bottom: 10px;  }p.error {      padding: 10px;font-family: Roboto;font-size: 15px;text-align: center;background: #fff6db;border: 1px solid #ffd0b5;color: #e05d25;  }  .relatedimg {float: left;margin-right: 10px;padding: 1px;border: 1px solid #aebcf3;  }    .relatedh4a {font: 600 14px/25px 'UtmAvo', sans-serif;color: #1d136b;display: inline-block;margin-bottom: 5px;  }    .relatedulli {margin-bottom: 20px;padding-bottom: 10px;  }  .info-cath4a:hover {color: #ff6434;  }  .detail-product {margin-bottom: 30px;  }del span {      font-size: 14px!important;margin-right: 5px;color: #636363!important;text-decoration: inherit;  }ins {text-decoration: none;}p.woocommerce-result-count {      font-size: 14px;font-family: Roboto;font-weight: 400;color: #2b2a79;position: relative;top: 7px;  }select.orderby {      border: 1px solid #5150b7;font-family: Roboto;padding: 8px 10px;font-size: 14px;  }      /*Single-product*/ul.tabs.wc-tabs {border: none!important;margin: 0!important;padding-left: 6px!important;position: inherit!important;background: #FFFFFF;border-bottom: 2px solid #153CAB!important;margin-bottom: 15px!important;}li.description_tab.active {border-radius: 0px!important;}  .woocommercediv.product .woocommerce-tabsul.tabsli:after, .woocommercediv.product .woocommerce-tabsul.tabsli:before {display: none;}ul.tabs.wc-tabs li {border: 0px!important;background: #5150b7!important;border-radius: 0px!important;padding: 5px 18px!important;text-transform: uppercase;margin: 0 -6px!important;}ul.tabs.wc-tabs li a {color: #fff!important;font: 400 11px/16px 'UtmAvo', sans-serif!important;}ul.tabs.wc-tabs li.active {border-radius: 0px!important;background: #2b2a79!important;border: 0px!important;}div#review_form_wrapper {font-family: Arial;}  .woocommerce-product-rating {margin-bottom: 0px!important;}div#comments h3 {font-family: arial;font-size: 15px;text-transform: uppercase;font-weight: 600;color: #F9248E;}div#reviews {padding: 15px;background: #F2F9FF;margin-top: 5px;border: 1px solid #153CAB;}  .panel {border: 0px;box-shadow: none!important;}p.woocommerce-noreviews {color: #12991F;font-family: arial;margin: 8px 0px;}  #reply-title {font-size: 14px;font-family: Arial;font-weight: 600;color: #6382DC;text-transform: uppercase;margin-bottom: 15px!important;}p.comment-form-rating {margin: 20px 0px!important;color: #F26E10;}textarea#comment {border: 1px solid #5096D2;padding: 5px;}  #commentformlabel {color: #F26E10;}p.form-submit input#submit {background: #153CAB!important;color: #fff!important;}p.comment-form-email input, p.comment-form-author input {width: 100%;padding: 8px;border: 1px solid #12991F;}li.comment {margin-top: 15px!important;}  .comment-text {border-color: #12991F!important;}article.post-content h2, article.post-content h3, article.post-content h4, article.post-content h5 {font-family: Roboto!important;margin-bottom: 10px;}article.post-content table tr td {padding: 5px;font-size: 14px!important;}article.post-content table tr th {padding: 6px!important;background: #FBFBFB;font-size: 15px!important;color: #06176A;font-weight: 600!important;}article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}  .woocommercediv.product .woocommerce-tabsul.tabs:before {border: none!important;}div#comments h2 {display: none;}  .summary.entry-summaryp.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}  .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}form.cart {margin-bottom: 0px!important;margin-top: 10px;}  .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}span.posted_in a {color: #ff6434;}span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}span.tagged_as a {color: #ff6434;}p.stars {font-size: 17px;}p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}  .content-dec {height: 93px;overflow: hidden;}  .fb-like.fb_iframe_widget {position: relative;top: -5px;}button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}p.ster {margin-bottom: 15px;}  .detail.lis-proh4 {font-size: 14px;margin: 5px 0px;font-family: Roboto;font-weight: 600;  }    .detail.lis-proh4a {color: #1C3D8E;  }span.amount {      color: #e00;font-family: Roboto;font-size: 15px;  }  .form-control {border-radius: 0px;margin-bottom: 15px;border: 1px solid #CAE7FF;  }  .info {font-size: 14px;font-family: Roboto;line-height: 23px;background: #e4e4ff;padding: 10px;border-radius: 15px;border: 1px solid #c4c4ff;margin-bottom: 20px;  }    .infop {margin-bottom: 10px;  }    .infob {color: #e00;  }    .infostrong {color: #e00;  }input.wpcf7-form-control.wpcf7-submit {      padding: 8px 20px;margin-bottom: 20px;background: #0C398E;border: 1px solid #2B74FF;text-transform: uppercase;color: #fff;font-weight: 600;  }input.wpcf7-form-control.wpcf7-submit:hover {      background: #2B74FF;  }p.price span {      font-size: 20px!important;font-family: Roboto;  }  .imagesimg {border: 1px solid #ededed;padding: 1px;  }span.onsale {      height: 50px;width: 50px;line-height: 15px!important;padding-top: 10px!important;background: #ff6434!important;  }    /* Cart */td.product-thumbnail img {      border: none!important;  }  .woocommercetable.shop_table {border-radius: 0px!important;}  .cart_totalsh2 {text-transform: uppercase;}a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;}a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}  .actionsinput.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}  .actionsinput.button:hover {color: #fff;}  /* Checkout */form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2358FF;border-bottom: 1px solid #2358FF;padding-bottom: 7px;}form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}  .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}  .woocommerce-billing-fieldsinput {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}div#s2id_billing_country a {border-radius: 0px!important;}textarea#order_comments {height: 120px;padding: 10px;}  .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;}input#place_order:hover {background: #0393DD;}div#payment {background: #FBFBFB!important;border-radius: 0px!important;}ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}li.order strong {color: #e00;}li.total strong {color: #e00;}li.method strong {color: #12991F;}li.date strong {color: #0193DD;}form.login {      border-radius: 0px!important;background: #FBFBFB;  }input#username {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  .info-contacth3 {padding: 9px;background: #0393DD;color: #fff;font-size: 14px;text-transform: uppercase;font-weight: 600;position: relative;  }    .info-contacth3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}form.register {      border-radius: 0px!important;background: #FBFBFB;  }input#reg_email {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#reg_password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  /*==========================================================================*/    @-moz-document url-prefix() {         }    @media (max-width: 1190px){      .menu ul li{padding: 10px;}      .search{margin-top: 5px;}      ul.block-banner li {margin-bottom: 26px;}      .block-fashion li h4{height: 40px;}  }  @media (max-width: 990px){      .rslides{margin-bottom: 20px;}      .block-slider{padding: 20px 0 0;}      ul.block-banner{margin: 0 -10px;}      ul.block-banner li,      ul.block-banner li:last-child{width: 50%;float: left;padding: 0 10px;margin-bottom: 20px;}      .block-fashion li h4 a{font-size: 13px;}      .block-fashion li a.img{width: 110px;height: 120px;}        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden;padding: 5px 0;position: absolute;top: 10px;left: 15px;background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat;text-indent: -9999px;}      .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px;position: absolute;left: -260px;top: 37px;background: #aa8f90;z-index: 20;}      .menu .block-menu li{width: 100%;float: none;}      @keyframes width_ {          100% {width: 250px;left: 15px;          }      }      .search{margin: 5px 0;}  }  @media (max-width: 750px){      #footer p.bot,      .block-fashion{padding: 0;}      .block-fashion li h4{height: 20px;}      .block-fashion li h4 a{font-size: 15px;}      .header-content{padding: 20px 0;}      .block-product{padding: 0 0 20px;}      .register{margin-bottom: 20px;}      .header-top ul{margin: 0;}      .header-top ul li:last-child{padding-right: 0;}  }  @media (max-width: 680px){      .header-top{padding: 5px 0;}      .header-content .phone,      .header-top .pull-left{display: none;}      .header-top .pull-right{text-align: center;width: 100%;float:none;}      .header-top ul li{display: inline-block;float: none;padding: 0 10px;}      .register p{font-size: 15px;}      .header-content .logo{width: 40%;text-align: left;}      .header-content .giohang{width: 60%;}      .register .input-group{width: 270px;}      .register .input-group input{width: 180px;}      .register p{padding: 0 15px;}      .block-fashion .col-md-4{width: 100%;}  }  @media (max-width: 630px){      .register{padding: 20px 0;}      .rslides .txt{bottom: 10px;}      .rslides .txt p{font-size: 13px;}  }  @media (max-width: 500px){      #footer .col-md-3{width: 100%;}  }  @media (max-width: 420px){      .header-top{display: none;}      .header-content .logo{width: 100%;float: none;margin-top: 15px;}      .header-content .giohang{width: 100%;position: absolute;right: 0;top: -6px;}  }font: 500 20px/25px 'UtmAvo', sans-serif;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr td span {font-size: 14px!important;font: 500 20px/25px 'UtmAvo', sans-serif;}article.post-content table tr th span {font-size: 15px!important;color: #12991F;font-weight: 600!important;}  .woocommercediv.product .woocommerce-tabsul.tabs:before {border: none!important;}div#comments h2 {display: none;}  .summary.entry-summaryp.price {padding: 0px;margin: 10px 0px;font-family: Roboto;color: #e00!important;font-size: 20px!important;}  .description-product {font-family: Arial;line-height: 23px;margin-bottom: 15px;border-bottom: 1px solid #FFBBDF;padding-bottom: 15px;}input.input-text.qty.text {height: 33px;background: #F0F0F0;border: 1px solid #E4E4E4;margin-right: 10px;}button.single_add_to_cart_button.button.alt {background: #ff6434!important;border-bottom: 2px solid #dc501e!important;border-radius: 0px;padding: 9px;text-transform: uppercase;font-family: Roboto;font: 400 15px/13px 'UtmAvo', sans-serif;}form.cart {margin-bottom: 0px!important;margin-top: 10px;}  .product_meta {margin-top: 15px;padding-top: 15px;border-top: 1px solid #EDEDED;}span.posted_in {display: block;padding: 10px;background: #FBFBFB;border: 1px solid #EDEDED;font-family: Roboto;margin-bottom: 15px;font-size: 14px;}span.posted_in a {color: #ff6434;}span.tagged_as {padding: 10px;border: 1px solid #EDEDED;background: #FBFBFB;display: block;font-family: Roboto;margin-bottom: 10px;font-size: 14px;}span.tagged_as a {color: #ff6434;}p.stars {font-size: 17px;}p.stars a {margin-right: 7px;color: #e00;margin-top: 10px;}  .content-dec {height: 93px;overflow: hidden;}  .fb-like.fb_iframe_widget {position: relative;top: -5px;}button.single_add_to_cart_button.button.alt:hover {background: #2b2a79!important;}p.ster span {font-size: 19px;margin-right: 7px;color: #FFED00;}p.ster {margin-bottom: 15px;}  .detail.lis-proh4 {font-size: 14px;margin: 5px 0px;font-family: Roboto;font-weight: 600;  }    .detail.lis-proh4a {color: #1C3D8E;  }span.amount {      color: #e00;font-family: Roboto;font-size: 15px;  }  .form-control {border-radius: 0px;margin-bottom: 15px;border: 1px solid #CAE7FF;  }  .info {font-size: 14px;font-family: Roboto;line-height: 23px;background: #e4e4ff;padding: 10px;border-radius: 15px;border: 1px solid #c4c4ff;margin-bottom: 20px;  }    .infop {margin-bottom: 10px;  }    .infob {color: #e00;  }    .infostrong {color: #e00;  }input.wpcf7-form-control.wpcf7-submit {      padding: 8px 20px;margin-bottom: 20px;background: #0C398E;border: 1px solid #2B74FF;text-transform: uppercase;color: #fff;font-weight: 600;  }input.wpcf7-form-control.wpcf7-submit:hover {      background: #2B74FF;  }p.price span {      font-size: 20px!important;font-family: Roboto;  }  .imagesimg {border: 1px solid #ededed;padding: 1px;  }span.onsale {      height: 50px;width: 50px;line-height: 15px!important;padding-top: 10px!important;background: #ff6434!important;  }    /* Cart */td.product-thumbnail img {      border: none!important;  }  .woocommercetable.shop_table {border-radius: 0px!important;}  .cart_totalsh2 {text-transform: uppercase;font: 500 20px/25px 'UtmAvo', sans-serif!important;}a.checkout-button.button.alt.wc-forward {background: #FF9601;border-radius: 0px;text-transform: uppercase;font-size: 14px;padding: 10px;width: 115px;font: 500 14px/18px 'UtmAvo', sans-serif;}a.checkout-button.button.alt.wc-forward:hover {background: #12991F!important;}  .actionsinput.button {border-radius: 0px!important;font-family: Roboto;font-weight: 400;color: #2b2a79!important;font: 500 20px/25px 'UtmAvo', sans-serif;text-transform: uppercase;height: 29px;background: #FBFBFB;border: 1px solid #ededed;}  .actionsinput.button:hover {color: #fff;}  /* Checkout */form.checkout h3 {font-family: Roboto!important;text-transform: uppercase;font-size: 15px;font-weight: 600;margin-bottom: 15px;color: #2358FF;border-bottom: 1px solid #2358FF;padding-bottom: 7px;}form.checkout label {font-family: Roboto!important;font-weight: 400;font-size: 15px;}  .woocommerce-billing-fields {background: #FBFBFB;padding: 7px;margin-bottom: 15px;border: 1px solid #ededed;}  .woocommerce-billing-fieldsinput {height: 30px;border: 1px solid #B3B3B3;padding-left: 10px;}div#s2id_billing_country a {border-radius: 0px!important;}textarea#order_comments {height: 120px;padding: 10px;}  .woocommerce-shipping-fields {background: #FBFBFB;padding: 10px;border: 1px solid #ededed;}input#place_order {border-radius: 0px;background: #12991F;text-transform: uppercase;}input#place_order:hover {background: #0393DD;}div#payment {background: #FBFBFB!important;border-radius: 0px!important;}ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}li.order strong {color: #e00;}li.total strong {color: #e00;}li.method strong {color: #12991F;}li.date strong {color: #0193DD;}form.login {      border-radius: 0px!important;background: #FBFBFB;  }input#username {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  .info-contacth3 {padding: 9px;background: #0393DD;color: #fff;font-size: 14px;text-transform: uppercase;font-weight: 600;position: relative;  }    .info-contacth3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}form.register {      border-radius: 0px!important;background: #FBFBFB;  }input#reg_email {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }input#reg_password {      height: 30px;padding-left: 10px;border: 1px solid #ededed;background: #fff;  }  /*==========================================================================*/    @-moz-document url-prefix() {         }    @media (max-width: 1190px){      .menu ul li{padding: 10px;}      .search{margin-top: 5px;}      ul.block-banner li {margin-bottom: 26px;}      .block-fashion li h4{height: 40px;}  }  @media (max-width: 990px){      .rslides{margin-bottom: 20px;}      .block-slider{padding: 20px 0 0;}      ul.block-banner{margin: 0 -10px;}      ul.block-banner li,      ul.block-banner li:last-child{width: 50%;float: left;padding: 0 10px;margin-bottom: 20px;}      .block-fashion li h4 a{font-size: 13px;}      .block-fashion li a.img{width: 110px;height: 120px;}        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden;padding: 5px 0;position: absolute;top: 10px;left: 15px;background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat;text-indent: -9999px;}      .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px;position: absolute;left: -260px;top: 37px;background: #aa8f90;z-index: 20;}      .menu .block-menu li{width: 100%;float: none;}      @keyframes width_ {          100% {width: 250px;left: 15px;          }      }      .search{margin: 5px 0;}  }  @media (max-width: 750px){      #footer p.bot,      .block-fashion{padding: 0;}      .block-fashion li h4{height: 20px;}      .block-fashion li h4 a{font-size: 15px;}      .header-content{padding: 20px 0;}      .block-product{padding: 0 0 20px;}      .register{margin-bottom: 20px;}      .header-top ul{margin: 0;}      .header-top ul li:last-child{padding-right: 0;}  }  @media (max-width: 680px){      .header-top{padding: 5px 0;}      .header-content .phone,      .header-top .pull-left{display: none;}      .header-top .pull-right{text-align: center;width: 100%;float:none;}      .header-top ul li{display: inline-block;float: none;padding: 0 10px;}      .register p{font-size: 15px;}      .header-content .logo{width: 40%;text-align: left;}      .header-content .giohang{width: 60%;}      .register .input-group{width: 270px;}      .register .input-group input{width: 180px;}      .register p{padding: 0 15px;}      .block-fashion .col-md-4{width: 100%;}  }  @media (max-width: 630px){      .register{padding: 20px 0;}      .rslides .txt{bottom: 10px;}      .rslides .txt p{font-size: 13px;}  }  @media (max-width: 500px){      #footer .col-md-3{width: 100%;}  }  @media (max-width: 420px){      .header-top{display: none;}      .header-content .logo{width: 100%;float: none;margin-top: 15px;}      .header-content .giohang{width: 100%;position: absolute;right: 0;top: -6px;}  }font: 500 20px/25px 'UtmAvo', sans-serif;font: 500 20px/10px 'UtmAvo', sans-serif;}
    input#place_order:hover {background: #0393DD;}
    div#payment {background: #FBFBFB!important;border-radius: 0px!important;}
    ul.woocommerce-thankyou-order-details.order_details,ul.order_details.bacs_de {font-size: 17px;border: 1px solid #12991F;margin-top: 17px!important;padding-top: 10px;padding-left: 15px;}
    li.order strong {color: #e00;}
    li.total strong {color: #e00;}
    li.method strong {color: #12991F;}
    li.date strong {color: #0193DD;}
    form.login {
        border-radius: 0px!important;
        background: #FBFBFB;
    }

    input#username {
        height: 30px;
        padding-left: 10px;
        border: 1px solid #ededed;
        background: #fff;
    }

    input#password {
        height: 30px;
        padding-left: 10px;
        border: 1px solid #ededed;
        background: #fff;
    }
    .info-contact h3 {
        padding: 9px;
        background: #0393DD;
        color: #fff;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 600;
        position: relative;
    }

    .info-contact h3:after {content: '';display: inline-block;height: 10px;width: 10px;position: absolute;border: 17px solid rgba(238, 0, 0, 0);right: 0px;border-left: 15px solid #2FB7FD;top: 0px;right: -32px;}

    form.register {
        border-radius: 0px!important;
        background: #FBFBFB;
    }

    input#reg_email {
        height: 30px;
        padding-left: 10px;
        border: 1px solid #ededed;
        background: #fff;
    }

    input#reg_password {
        height: 30px;
        padding-left: 10px;
        border: 1px solid #ededed;
        background: #fff;
    }
    p.woocommerce-info {
        font-size: 15px;
        font-family: Roboto;
        border-color: #2b2a79;
    }

    .woocommerce-info:before {
        color: #2b2a79;
    }
    .ppt {
        display: none!important;
    }

    div.pp_woocommerce .pp_content_container {
        border-radius: 0px!important;
        padding: 0px;
        padding-top: 20px;
    }
    .panel h2 {
        font: 500 20px/25px 'UtmAvo', sans-serif;
        margin-bottom: 10px;
    }
    .container .woocommerce-message {
        border-color: #2b2a79!important;
        font-family: Roboto;
        font-size: 14px;
        margin-top: 10px!important;
        background: #e3e2ff;
    }
    .related.block-product, .related .block-product {
        padding-bottom: 0px;
    }
    ul.block-banner img:hover,.rslides img:hover {
        opacity: .8;
    }
    .detai-new h4 a {
        font: 500 18px/20px 'UtmAvo', sans-serif;
        font-size: 15px;
        display: inline-block;
        margin-bottom: 15px;
        color: #2b2a79;
    }

    .detai-new h4 a:hover {
        color: #f3570a;
    }

    .detai-new img {
        margin-bottom: 10px;
    }

    .detai-new p {
        font-size: 14px;
        font-family: Roboto;
        color: #4e4e4e;
        line-height: 20px;
        margin-bottom: 10px;
    }

    .hk-date {
        padding: 7px 0px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ededed;
        border-top: 1px solid #ededed;
        font-family: Roboto;
        color: #333;
        font-size: 13px;
    }

    .hk-date .fa {
        color: #8a8a8a;
    }
    a.read-more {
        display: inline-block;
        padding: 7px 20px;
        border: 1px solid #ededed;
        margin-bottom: 15px;
        margin-top: 5px;
        color: #8e8c8c;
        font-family: Roboto;
        font-size: 14px;
    }

    a.read-more:hover {
        border-color: #333;
        color: #fff;
        background: #333;
        transition: all .3s;
    }
    .related h4 a:hover {
        color: #ff6434;
    }
    .quatrang {
        text-align: center;
    }

    .page-numbers {
        font-size: 14px;
        font-family: Roboto;
        padding: 5px 8px;
        font-weight: 600;
    }

    a.page-numbers {
        color: #ff6434;
    }

    a.page-numbers:hover {
        color: #2b2a79;
    }
    /*==========================================================================*/

    @-moz-document url-prefix() {

    }

    @media (max-width: 1190px){
        .menu ul li{padding: 10px;}
        .search{margin-top: 5px;}
        ul.block-banner li {margin-bottom: 26px;}
        .block-fashion li h4{height: 40px;}
        .menu ul li {
            padding: 15px 15px;
        }

        .menu ul li a {
            font-size: 13px;
        }
    }
    @media (max-width: 990px){
        .rslides{margin-bottom: 20px;}
        .block-slider{padding: 20px 0 0;}
        ul.block-banner{margin: 0 -10px;}
        ul.block-banner li,
        ul.block-banner li:last-child{width: 50%; float: left; padding: 0 10px;margin-bottom: 20px;}
        .block-fashion li h4 a{font-size: 13px;}
        .block-fashion li a.img{width: 110px;height: 120px;}

        a.smobitrigger{display: block;width: 25px;height:19px;overflow: hidden; padding: 5px 0; position: absolute; top: 10px; left: 15px; background: url(line.png)/*tpa=http://htshop.esy.es/wp-content/themes/thientrieu/images/front/line.png*/ no-repeat; text-indent: -9999px;}
        .menu .block-menu{animation: width_ 1s forwards;display: none;width: 250px; position: absolute; left: -260px; top: 37px;background: #aa8f90;z-index: 20;}
        .menu .block-menu li{width: 100%;float: none;}
        @keyframes width_ {
            100% {
                width: 250px;
                left: 15px;
            }
        }
        .logo {text-align: center;}
        .search{margin: 5px 0;}
        .detai-new img {width: 100%;}
        .giohang.text-right {
            padding-left: 30px;
        }
        .menu ul li {
            padding: 15px 15px;
        }

        .menu ul li a {
            font-size: 13px;
        }

    }
    @media (max-width: 750px){
        #footer p.bot,
        .block-fashion{padding: 0;}
        .block-fashion li h4{height: 20px;}
        .block-fashion li h4 a{font-size: 15px;}
        .header-content{padding: 20px 0;}
        .block-product{padding: 0 0 20px;}
        .register{margin-bottom: 20px;}
        .header-top ul{margin: 0;}
        .header-top ul li:last-child{padding-right: 0;}
        .logo {text-align: center;}
        .detai-new img {width: 100%;}
        .giohang.text-right {
            padding-left: 30px;
            padding-right: 30px;
            text-align: center;
        }
    }
    @media (max-width: 680px){
        .header-top{padding: 5px 0;}
        .header-content .phone,
        .header-top .pull-left{display: none;}
        .header-top .pull-right{text-align: center;width: 100%;float:none;}
        .header-top ul li{display: inline-block;float: none; padding: 0 10px;}
        .register p{font-size: 15px;}
        .header-content .logo{width: 40%;text-align: left;margin-top: 25px;}
        .header-content .giohang{width: 60%;text-align: center;}
        .register .input-group{width: 270px;}
        .register .input-group input{width: 180px;}
        .register p{padding: 0 15px;}
        .block-fashion .col-md-4{width: 100%;}
        .logo {text-align: center;}
        .detai-new img {width: 100%;}
    }
    @media (max-width: 630px){
        .register{padding: 20px 0;}
        .rslides .txt{bottom: 10px;}
        .rslides .txt p{font-size: 13px;}
        .logo {text-align: center;}
        .detai-new img {width: 100%;}
    }
    @media (max-width: 500px){
        #footer .col-md-3{width: 100%;}
        .logo {text-align: center;}
        .detai-new img {width: 100%;}
    }
    @media (max-width: 420px){
        .header-top{display: none;}
        .header-content .logo{width: 100%;float: none;text-align: center;margin-top: 0px;}
        .header-content .giohang{width: 100%;right: 0;}
        .logo {text-align: center;}
        .detai-new img {width: 100%;}
    }</style>