@extends('Page.index')
@section('cart')

<header><script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <style>

        #cartContent {
            border: 1px solid #ccc;
            background: #fafafa;
            border-collapse: collapse;
            border-spacing: 0;
        }
        #cartContent tr.cartItem td
        {
            padding: 12px;
        }
        .borImgscart {
            display: block;
            width: 70px;
            height: 70px;
            position: relative;
            float: left;
            overflow: hidden;
            margin: 0 10px 0 0;
        }
        .nameProductcart
        {font-size:13px;font-weight:700}
        .nameProductcart a {
            color: #444;
        }
        .removeCartItem:hover {
            border: 1px solid #ccc;
            border-radius: 2px;
            box-shadow: inset 0px 0px 6px #eae9e9;
            background: #f8f8f8;
        }
        .removeCartItem {
            color: #444;
            padding: 4px 8px;
            border: 1px solid transparent;
        }
        #cartContent tr.title {
            background: #f8f8f8;
            border-bottom: 1px solid #ccc;
        }
        #cartContent {
            border-width: 1px;
            border-style: solid;
            border-color: rgb(204, 204, 204);
            border-image: initial;
            background: rgb(250, 250, 250);

        }
        #cartContent tr.title td {
            padding: 10px;
        }
        .grid-100{width:100%}
        .cartNavigator {
            margin: 15px 0 0;
        }
        .cartNavigator .btnCheckOut {
            float: right;
            background: #e15452;
        }
        .btnCheckOut,.buyMore {
            padding: 6px 20px;
            display: inline-block;
            color: #fff;
            font-size: 15px;
            border-radius: 2px;
        }
        .buyMore {
            background: #ddd;
            color: #666;
        }
        .btnCheckOut:hover {
            background: #888;
        }
        .singleCart{
    margin: 0;
        }
    </style>
</header>

<div class="singleCart">

    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="grid-100">
            <table id="cartContent">
                <tbody>
                <tr class="title .odd">
                    <td width="500">Sản phẩm</td>
                    <td width="200">Đơn giá</td>
                    <td width="200">Số lượng</td>
                    <td width="200">Thành tiền</td>
                    <td width="200">&nbsp;</td>
                </tr>
                @foreach($cart as $item)
                <tr class="cartItem .even">
                    <td class="last" width="500">
                        <a class="borImgscart" href="#">
                            <img src="//cdn.nhanh.vn/cdn/store/81/ps/20180402/1_2_25_1_05_003_118_02_10700023_01_thumb_294x441.jpg" alt="Chân váy nữ xếp ly kẻ caro. Basic đen kẻ trắng S" title="Chân váy nữ xếp ly kẻ caro. Basic đen kẻ trắng S">
                        </a>
                        <p class="nameProductcart"><a href="">{{$item->name}}</a></p>
                        <br>
                    </td>
                    <td width="200">
                        <p style="font-weight: bold">
                            {{ number_format($item->price)}} VNĐ
                        </p>
                    </td>
                    <td width="200">
                        <input type="number" id="quantity" value="{{$item->qty}}" maxlength="10" data-id="6763694" class="qty-input updateCart" min="1" max="5">
                    </td>
                    <td width="200" style="font-weight: bold">
                        {{ number_format($item->subtotal)}}
                    </td>
                    <td  width="200" class="cart_delete">
                        <a class="removeCartItem" href="" data-toggle="modal" data-target="#delete-modal" data-id=""><i style="font-size: 14px" class="fa fa-trash-o"></i>Xóa</a>
                        <div class="modal fade" id="delete-modal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Xóa sản phẩm khỏi giỏ hàng ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="{{route('cart_delete')}}" method="post" id="#Form1">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="product_id" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-default" onclick="cart_delete({{$item->id}})">Yes</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                        </form>
                                        <script type="text/javascript">

                                            var frm = $('#Form1');

                                            frm.submit(function (e) {

                                                e.preventDefault();

                                                $.ajax({
                                                    type: frm.attr('method'),
                                                    url: frm.attr('action'),
                                                    data: frm.serialize(),
                                                    success: function (data) {
                                                        console.log('Submission was successful.');
                                                        console.log(data);
                                                    },
                                                    error: function (data) {
                                                        console.log('An error occurred.');
                                                        console.log(data);
                                                    },
                                                });
                                            });


                                            function qty_up(product_id,key) {
                                                console.log(product_id);

                                                // $.ajax({
                                                //     type: "GET",
                                                //     url:"qty_up",
                                                //     data:{
                                                //         product_id:product_id,
                                                //
                                                //
                                                //     },
                                                //     success: function (data) {
                                                //         console.log('Submission was successful.');
                                                //         console.log(data);
                                                //         $('#qty_input').val(data);
                                                //
                                                //
                                                //     },
                                                //     // error: function (data) {
                                                //     //     console.log('An error occurred.');
                                                //     //     console.log(data);
                                                //     // },
                                                // });

                                            }
                                            function qty_down(product_id) {
                                                console.log(product_id);

                                                $.ajax({
                                                    type: "GET",
                                                    url:"qty_down",
                                                    datatype:"json",
                                                    data:{
                                                        product_id:product_id,


                                                    },
                                                    success: function (data) {
                                                        console.log('Submission was successful.');
                                                        console.log(data[2]);
                                                        $('#qty_input').val(data[1]);

                                                    },
                                                    // error: function (data) {
                                                    //     console.log('An error occurred.');
                                                    //     console.log(data);
                                                    // },
                                                });

                                            }



                                        </script>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
                <tr class="title lastTr .odd" style="text-align: left">
                    <td class="last" width="500">&nbsp;</td>
                    <td width="400" colspan="2"> <b style="color: #ed1c24;font-size: 16px">&nbsp;</b></td>
                    <td width="400" colspan="2">Tổng cộng: <b style="color: #ed1c24;font-size: 16px">{{Cart::subtotal()}}đ</b></td>
                </tr>
                </tbody>
            </table>
            <div class="cartNavigator">
                <a href="{{route('checkout')}}" class="btnCheckOut btnRed">Tiến hành thanh toán</a>
                <a href="http://bosua.vn/chan-vay-nu-xep-ly-ke-caro.-basic-den-ke-trang-p7012104.html" class="buyMore btnGreen">Mua thêm sản phẩm khác</a>
                <span class="clearfix"></span>
            </div>
            <br><br>
        </div>
    </div>
</div>

@stop