<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 0973962984</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> thuanuit96@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.facebook.com/  " class=" btn btn-info">Đăng nhập bằng Facebook</a>
                </div>
                <div class="col-sm-4">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login" ><i class="fa fa-lock"></i> Đăng nhập</a>

                                <div id="login" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Đăng nhập tài khoản</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="login-form"><!--login form-->
                                                    <h2></h2>
                                                    <form action="{{route('login')}}" method="post">
                                                        {!! csrf_field() !!}
                                                        <input type="text" name="username" placeholder="Tên tài khoản" required  />
                                                        <input type="email" name="email" placeholder="Địa chỉ email" required />
                                                        <input type="password" name="password" placeholder="Mật Khẩu"  required/>
                                                        <span>
                                                        <input type="checkbox" class="checkbox">
                                                            Nhớ tài khoản
                                                        </span>


                                                        <button type="submit"  class="btn btn-default">Đăng Nhập</button>



                                                    </form>
                                                </div><!--/login form-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#dangky"><i class="fa fa-lock"></i> Đăng Ký</a>
                                <div id="dangky" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Đăng ký tài khoản</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="signup-form"><!--sign up form-->
                                                    <form action="#">
                                                        <input type="text" placeholder="Tài khoản"/>
                                                        <input type="email" placeholder="Địa chỉ email"/>
                                                        <input type="password" placeholder="Mật khẩu"/>
                                                        <div>
                                                        <button  style="float: left;" type="submit" class="btn btn-default">Đăng ký</button>

                                                        <button  style="float: left;margin-left: 10%!important;"  type="reset" class="btn btn-default">Nhập lại</button>
                                                        </div>
                                                    </form>
                                                </div><!--/sign up form-->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="#" class="active">Trang Chủ</a></li>
                            <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="shop.html">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Khuyễn Mãi</a></li>
                            <li><a href="">Giới Thiệu</a></li>
                            <li><a href="">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->