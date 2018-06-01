<!-- menu top  - menu phia tren cung-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!!url('/admin/home')!!}"><span>Trang Quản Trị</span> SHOP </a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
							@if (isset(Auth::guard('admins')->user()->name) )
                                {!!Auth::guard('admins')->user()->name!!}
                            @endif <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('admin/cat') }}"><i class="fa fa-btn fa-sign-out"></i>Thông tin</a></li>
                            <li><a href="{{ url('admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

						</ul>
					</li>

				</ul>
			</div>
			{{--<div class="dropdown">--}}
				{{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example--}}
					{{--<span class="caret"></span></button>--}}
				{{--<ul class="dropdown-menu">--}}
					{{--<li><a href="#">HTML</a></li>--}}
					{{--<li><a href="#">CSS</a></li>--}}
					{{--<li><a href="#">JavaScript</a></li>--}}
				{{--</ul>--}}
			{{--</div>--}}
		</div><!-- /.container-fluid -->
	</nav>
<!-- /menu top  - menu phia tren cung-->