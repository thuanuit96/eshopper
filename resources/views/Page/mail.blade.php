
@extends('Page.index')

{{--@extends('Page.index)--}}
<div class="tab-content">
    <div role="tabpanel" class="tab-pane" id="sign-in">
        <form method="post" action="http://alitaobao.vn/customer/login.html">
            <div class="form-group">
                <input type="text" name="CustomerLoginForm[username]" class="form-control" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input type="password" name="CustomerLoginForm[password]" class="form-control" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-warning text-uppercase"><strong>Đăng nhập</strong></button>
            </div>
            <div class="form-group text-center">
                <a href="javascript:if(confirm(%27http://alitaobao.vn/customer/resetPassword.html  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Ultra\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://alitaobao.vn/customer/resetPassword.html%27" tppabs="http://alitaobao.vn/customer/resetPassword.html">Quên mật khẩu?</a>
            </div>
            <div class="form-group text-muted">
                <p class="separator text-center">
                    <i>Hoặc đăng nhập với</i>
                </p>
                <a href="javascript:if(confirm(%27http://alitaobao.vn/customer/loginFb.html  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a path excluded by the site\%27s Robot Exclusion parameters.  (Teleport Ultra\%27s compliance with this system is optional; see the Project Properties, Netiquette page.)  \n\nDo you want to open it from the server?%27))window.location=%27http://alitaobao.vn/customer/loginFb.html%27" tppabs="http://alitaobao.vn/customer/loginFb.html" class="btn btn-block btn-fb">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook
                </a>
                <a href="javascript:void();" class="btn btn-block btn-gplus signin-by-google-class">
                    <i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+
                </a>
            </div>
        </form>
        <div class="">
            <div class="nhtq-info-box box-help">
                <p class="box-title">Hướng dẫn sử dụng công cụ đặt hàng</p>
                <ul>
                    <li><a href="javascript:if(confirm(%27http://nhaphangtrungquoc.vn/page/view?id=34  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://nhaphangtrungquoc.vn/page/view?id=34%27" tppabs="http://nhaphangtrungquoc.vn/page/view?id=34" target="_blank">Hướng dẫn cài đặt công cụ đặt hàng</a></li>
                    <li><a href="javascript:if(confirm(%27http://nhaphangtrungquoc.vn/page/view.html?id=29  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://nhaphangtrungquoc.vn/page/view.html?id=29%27" tppabs="http://nhaphangtrungquoc.vn/page/view.html?id=29" target="_blank">Hướng dẫn đặt hàng</a></li>
                    <li><a href="javascript:if(confirm(%27http://nhaphangtrungquoc.vn/page/view?id=31  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://nhaphangtrungquoc.vn/page/view?id=31%27" tppabs="http://nhaphangtrungquoc.vn/page/view?id=31" target="_blank">Quy định và chính sách</a></li>
                    <li><a href="javascript:if(confirm(%27http://nhaphangtrungquoc.vn/page/view?id=30  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://nhaphangtrungquoc.vn/page/view?id=30%27" tppabs="http://nhaphangtrungquoc.vn/page/view?id=30" target="_blank">Bảng giá vận chuyển</a></li>
                </ul>
            </div>
        </div>
    </div>
   s
</div>
<style>
    .box-user {
        margin-top: 10px;
    }
    /* line 450, ../scss/app.scss */
    .box-user .nav-tabs li a {
        color: #333;
    }
    /* line 456, ../scss/app.scss */
    .box-user .nav-tabs li.active a {
        color: #c40000;
        font-weight: 700;
    }
    /* line 463, ../scss/app.scss */
    .box-user .tab-content {
        padding: 10px;
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
    }
    /* line 469, ../scss/app.scss */
    .box-user .tab-content .form-group {
        margin-bottom: 10px;
    }
    /* line 473, ../scss/app.scss */
    .box-user .tab-content .btn-fb {
        text-align: left;
        color: #354e84;
        border: 1px solid #354e84;
    }
    /* line 478, ../scss/app.scss */
    .box-user .tab-content .btn-fb .fa {
        font-size: 16px;
    }
    /* line 483, ../scss/app.scss */
    .box-user .tab-content .btn-fb:hover {
        color: #fff;
        background-color: #354e84;
    }
    /* line 488, ../scss/app.scss */
    .box-user .tab-content .btn-gplus {
        text-align: left;
        color: #db402c;
        border: 1px solid #db402c;
    }
    /* line 493, ../scss/app.scss */
    .box-user .tab-content .btn-gplus .fa {
        font-size: 16px;
    }
    /* line 498, ../scss/app.scss */
    .box-user .tab-content .btn-gplus:hover {
        color: #fff;
        background-color: #db402c;
    }
    /* line 504, ../scss/app.scss */
    .box-user .panel {
        border-radius: 0;
    }
    /* line 507, ../scss/app.scss */
    .box-user .panel .panel-heading {
        font-size: 13px;
    }
    /* line 510, ../scss/app.scss */
    .box-user .panel .panel-heading .badge {
        font-size: 11px;
        background-color: #bbb;
    }
    /* line 514, ../scss/app.scss */
    .box-user .panel .panel-heading .badge:hover {
        background-color: #f57c00;
    }
    /* line 529, ../scss/app.scss */
    .box-user .box-uer__control ul li:last-child {
        margin-bottom: 0;
    }

    /* line 537, ../scss/app.scss */
    .best-seller h3 {
        margin-top: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ddd;
        font-size: 13px;
        font-weight: 700;
        color: #c40000;
    }
</style>