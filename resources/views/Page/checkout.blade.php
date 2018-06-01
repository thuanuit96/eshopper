@extends('Page.index')
@section('checkout')
    <div class="main">
        <input type="hidden" class="checkStoreId" value="81">
        <div class="singleCheckout">
            <div class="container">
                <form action="{{route('postcheckout')}}" method="post" id="formCheckOut" class="grid1200">
                    {!! csrf_field() !!}
                    <div class="grid-100">
                        <div class="formCheckout">
                            <div class="grid-100">
                                <h1 class="titleCheckout">Thanh toán trực tuyến an toàn</h1>
                            </div>
                            <div id="column1" class="grid-25">
                                <div class="infoCustomer">
                                    <h2><span>1 </span>Thông tin khách hàng</h2>
                                    <div class="purchaseInfo">
                                        <label>
                                            Họ và tên: *
                                            <div class="form-validation-field-0formError parentFormformCheckOut formError" style="opacity: 0.87; position: absolute; top: 72px; left: 189px; margin-top: -35px;">
                                                <div class="formErrorArrow">
                                                    <div class="line10">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line9">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line8">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line7">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line6">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line5">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line4">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line3">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line2">
                                                        <!-- -->
                                                    </div>
                                                    <div class="line1">
                                                        <!-- -->
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" name="customerName" class="validate[required] input customerName" value="" id="form-validation-field-0">
                                        </label>
                                        <label>Điện thoại: *
                                            <input type="text" name="customerMobile" class="validate[required,custom[phone]] input customerMobile" value="">
                                        </label><label>Email: *
                                            <input type="text" name="customerEmail" class="validate[required,custom[email]] input customerEmail" value="">
                                        </label>
                                        <label>
                                            Tỉnh/ Thành phố: *
                                            <select id="cityId" name="customerCityId" class="validate[required] input">
                                                <option value="">Chọn Tỉnh/ thành phố</option>
                                                <option value="2">Hà Nội</option>
                                                <option value="3">Hồ Chí Minh</option>
                                                <option value="65">Đà Nẵng</option>
                                                <option value="32">Hải Phòng</option>
                                                <option value="21">Quảng Ninh</option>
                                                <option value="17">Khánh Hòa</option>
                                                <option value="4">An Giang</option>
                                                <option value="5">Bà Rịa - Vũng Tàu</option>
                                                <option value="14">Bắc Cạn</option>
                                                <option value="7">Bắc Giang</option>
                                                <option value="70">Bạc Liêu</option>
                                                <option value="6">Bắc Ninh</option>
                                                <option value="13">Bến Tre</option>
                                                <option value="8">Bình Dương</option>
                                                <option value="10">Bình Phước</option>
                                                <option value="11">Bình Thuận</option>
                                                <option value="9">Bình Định</option>
                                                <option value="24">Cà Mau</option>
                                                <option value="15">Cần Thơ</option>
                                                <option value="25">Cao Bằng</option>
                                                <option value="26">Gia Lai</option>
                                                <option value="27">Hà Giang</option>
                                                <option value="28">Hà Nam</option>
                                                <option value="30">Hà Tĩnh</option>
                                                <option value="31">Hải Dương</option>
                                                <option value="68">Hậu Giang</option>
                                                <option value="33">Hoà Bình</option>
                                                <option value="34">Hưng Yên</option>
                                                <option value="35">Kiên Giang</option>
                                                <option value="36">Kon Tum</option>
                                                <option value="37">Lai Châu</option>
                                                <option value="38">Lâm Đồng</option>
                                                <option value="39">Lạng Sơn</option>
                                                <option value="20">Lào Cai</option>
                                                <option value="40">Long An</option>
                                                <option value="23">Nam Định</option>
                                                <option value="41">Nghệ An</option>
                                                <option value="42">Ninh Bình</option>
                                                <option value="43">Ninh Thuận</option>
                                                <option value="44">Phú Thọ</option>
                                                <option value="45">Phú Yên</option>
                                                <option value="46">Quảng Bình</option>
                                                <option value="47">Quảng Nam</option>
                                                <option value="48">Quảng Ngãi</option>
                                                <option value="49">Quảng Trị</option>
                                                <option value="50">Sóc Trăng</option>
                                                <option value="51">Sơn La</option>
                                                <option value="52">Tây Ninh</option>
                                                <option value="53">Thái Bình</option>
                                                <option value="54">Thái Nguyên</option>
                                                <option value="55">Thanh Hoá</option>
                                                <option value="19">Thừa Thiên Huế</option>
                                                <option value="56">Tiền Giang</option>
                                                <option value="57">Trà Vinh</option>
                                                <option value="58">Tuyên Quang</option>
                                                <option value="59">Vĩnh Long</option>
                                                <option value="60">Vĩnh Phúc</option>
                                                <option value="61">Yên Bái</option>
                                                <option value="62">Đắc Lắc</option>
                                                <option value="67">Đắc Nông</option>
                                                <option value="71">Điện Biên</option>
                                                <option value="22">Đồng Nai</option>
                                                <option value="64">Đồng Tháp</option>
                                            </select>
                                        </label>
                                        <label>
                                            Quận/ Huyện: *
                                            <select id="districtId" name="customerDistrictId" class="validate[required] input">
                                                <option value="">Chọn Quận/ Huyện</option>
                                            </select>
                                        </label>
                                        <label>Địa chỉ: *<textarea name="customerAddress" class="validate[required] input customerAddress"></textarea></label>
                                    </div>
                                </div>
                            </div>
                            <div id="column2" class="grid-25">
                                <div class="infoCustomer">
                                    <h2><span>2 </span>Hình thức thanh toán</h2>
                                    <div id="paymentMethod">
                                        <input class="checkCity" value="" type="hidden">
                                        <input class="checkPaymentMethod" value="" type="hidden">
                                        <div class="b">
                                            <label>
                                                <input type="radio" id="rdPaymentMethodCod" name="paymentMethod" class="validate[required]" checked="" value="1">
                                                Thanh toán khi nhận hàng
                                            <label>
                                                <input type="radio" id="rdPaymentMethodCod" name="paymentMethod" class="validate[required]"   value="2">
                                                Thanh toán qua ngân lượng
                                                <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=(Email chính tài khoản nhận tiền)&product_name=(Mã đơn đặt hàng)&price=(Tổng giá trị)&return_url=(URL thanh toán thành công)&comments=(Ghi chú về đơn hàng)"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="column3" class="grid-25">
                                <div class="infoCustomer">
                                    <h2><span>3 </span>Xác nhận đơn hàng</h2>
                                    <div id="reviewCart">
                                        <div class="rvWrap">
                                            @foreach($cart as $item)
                                            <div class="reviewCartItem">
                                                <a class="borImgsreview" href="">
                                                    <img src="//cdn.nhanh.vn/cdn/store/81/ps/20180210/1_2_21_2_06_008_118_01_10600034_01_thumb_294x441.jpg" alt="Jeans nam dáng bó cào rách phối hình in graphic BS Dreamer thân sau. Trend xanh da trời nhạt 30">
                                                </a>
                                                <div class="rvWrp">
                                                    <p><a href="">{{$item->name}}</a></p>
                                                    <p style="color: #ed1c24">
                                                        {{$item->price}} VNĐ
                                                    </p>
                                                    <p>{{$item->qty}}</p>
                                                    <span class="clearfix"></span>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <a href="list-cart" class="backShop">Quay về giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div id="column4" class="grid-25">
                                <div class="infoCustomer">
                                    <div id="orderIf">
                                        <p>Tiền hàng <span>{{Cart::subtotal()}} đ</span></p>
                                        <p>Phí vận chuyển
                                            <span id="shipFee">0 đ</span>
                                        </p>
                                        <i class="notePay">(Ngoại thành/Ngoại tỉnh)
                                            sẽ thông báo ngay sau khi đặt hàng thành công</i>
                                        <div class="totalPays">
                                            <p>Tổng cộng <span id="money" style="color: #ed1c24">{{Cart::subtotal()}} đ</span></p>
                                            <input type="hidden" id="getMn" name="total" value="{{Cart::subtotal()}}">
                                            <input type="hidden" id="getShipFee" value="0">
                                            <label>
                                                <span>Sử dụng mã giảm giá nếu có</span>
                                                <input id="coupon" type="text" name="couponCode" class="input" placeholder="Mã giảm giá">
                                                <button type="button" id="getCoupon" class="btnGray">Sử dụng</button>
                                                <p id="txtCode"></p>
                                            </label>
                                            <label>
                                                <span>Ghi chú</span><textarea name="description" class="input" placeholder="Ghi chú"></textarea></label>
                                            <input type="hidden" id="baokimPmMethodId" name="baokimBankPaymentMethodId">
                                            <button id="btnOrder" type="submit" class="btnRed">Xác nhận đơn hàng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div style="display: none">
            <div id="progressbar" style="width:150px;text-align: center;margin: 0px auto;">
                <img src="/tp/cucre/img/loading.gif">
                <p style="font-weight:bold;">Đang xử lý...</p>
            </div>
        </div>
        <script>dataLayer.push({
                'transactionTotal': 1447000,
                'transactionProducts': [
                    {
                        'sku': '6356160',
                        'name': 'Jeans nam dáng bó cào rách phối hình in graphic BS Dreamer thân sau. Trend xanh da trời nhạt 30',
                        'price': '649000',
                        'quantity': '1'
                    },
                    {
                        'sku': '6601461',
                        'name': 'Áo phông nam in graphic Võ Sĩ. Graphic. Play trắng S',
                        'price': '399000',
                        'quantity': '1'
                    },
                    {
                        'sku': '6763694',
                        'name': 'Chân váy nữ xếp ly kẻ caro. Basic đen kẻ trắng S',
                        'price': '399000',
                        'quantity': '1'
                    },
                ]
            });
        </script> <script>fbq('track', 'InitiateCheckout');
            fbq('track', 'AddPaymentInfo');
            var products = [
                {
                    id: "6356160", // bắt buộc – unique user id
                    categoryId: 158841,
                    transactionId: "",
                    price: "649,000", // bắt buộc – giá của sản phẩm
                    quantity: 1, //
                    name: "Jeans nam dáng bó cào rách phối hình in graphic BS Dreamer thân sau. Trend xanh da trời nhạt 30", // bắt buộc – tên sản phẩm
                    brandName: "", // bắt buộc – tên hãng
                    desc: "",
                    imageUrl: "http://cdn.nhanh.vn/cdn/store/81/ps/20180210/1_2_21_2_06_008_118_01_10600034_01_thumb_294x441.jpg", // bắt buộc – full link
                    link: "http://bosua.vn/jeans-nam-dang-bo-cao-rach-phoi-hinh-in-graphic-bs-dreamer-than-sau.-trend-xanh-da-troi-nhat-30-p6356160.html" // bắt buộc – full link
                },
                {
                    id: "6601461", // bắt buộc – unique user id
                    categoryId: 72095,
                    transactionId: "",
                    price: "399,000", // bắt buộc – giá của sản phẩm
                    quantity: 1, //
                    name: "Áo phông nam in graphic Võ Sĩ. Graphic. Play trắng S", // bắt buộc – tên sản phẩm
                    brandName: "", // bắt buộc – tên hãng
                    desc: "",
                    imageUrl: "http://cdn.nhanh.vn/cdn/store/81/ps/20180316/1_2_02_2_02_045_118_01_10100002_01_thumb_294x440.jpg", // bắt buộc – full link
                    link: "http://bosua.vn/ao-phong-nam-in-graphic-vo-si.-graphic.-play-trang-s-p6601461.html" // bắt buộc – full link
                },
                {
                    id: "6763694", // bắt buộc – unique user id
                    categoryId: 75731,
                    transactionId: "",
                    price: "399,000", // bắt buộc – giá của sản phẩm
                    quantity: 1, //
                    name: "Chân váy nữ xếp ly kẻ caro. Basic đen kẻ trắng S", // bắt buộc – tên sản phẩm
                    brandName: "", // bắt buộc – tên hãng
                    desc: "",
                    imageUrl: "http://cdn.nhanh.vn/cdn/store/81/ps/20180402/1_2_25_1_05_003_118_02_10700023_01_thumb_294x441.jpg", // bắt buộc – full link
                    link: "http://bosua.vn/chan-vay-nu-xep-ly-ke-caro.-basic-den-ke-trang-s-p6763694.html" // bắt buộc – full link
                },
            ];
            ematics("log", "product", "checkout", products);
        </script>
    </div>
@stop