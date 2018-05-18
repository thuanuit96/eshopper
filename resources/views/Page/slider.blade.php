@section('slider')

        <div class="container" style="margin-top: 30px">
            <div class="slider">
            <div class="row">
            <div class="col-md-8 col-sm-12">
            <div id="wowslider-container1">
                <div class="ws_images"><ul>
                        <li><img src="{{asset('slider/data1/images/r2.jpg')}}" alt="r2" title="aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa" id="wows1_0"/></li>
                        <li><img src="{{asset('slider/data1/images/slder3.jpg')}}" alt="slder3" title="saaaaaaaaaaaaaaaaaaaaaaaaaa" id="wows1_1"/></li>
                        <li><a href="t"><img src="{{asset('slider/data1/images/slider.png')}}" alt="html5 slider" title="slider" id="wows1_2"/></a></li>
                        <li><img src="{{'slider/data1/images/slider1.jpg'}}" alt="slider1" title="slider1" id="wows1_3"/></li>
                    </ul></div>
                <div class="ws_bullets"><div>
                        <a href="#" title="r2"><span><img src="{{asset('slider/data1/tooltips/r2.jpg')}}" alt="r2"/>1</span></a>
                        <a href="#" title="slder3"><span><img src="{{asset('slider/data1/tooltips/slder3.jpg')}}" alt="slder3"/>2</span></a>
                        <a href="#" title="slider"><span><img src="{{asset('slider/data1/tooltips/slider.png')}}" alt="slider"/>3</span></a>
                        <a href="#" title="slider1"><span><img src="{{asset('slider/data1/tooltips/slider1.jpg')}}" alt="slider1"/>4</span></a>
                    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="">image carousel</a> by WOWSlider.com v8.8</div>
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="{{asset('slider/engine1/wowslider.js')}}"></script>
            <script type="text/javascript" src="{{asset('slider/engine1/script.js')}}"></script>
            <!-- End WOWSlider.com BODY section -->
            </div>
                <div class="col-md-4 col-sm-12">
                    <ul class="block-banner">
                        <li><a href="#" class="img"><img src="http://htshop.esy.es/wp-content/uploads/2016/09/r1.jpg"></a></li>
                        <li><a href="#" class="img"><img src="http://htshop.esy.es/wp-content/uploads/2016/09/r2.jpg"></a></li>
                    </ul>
                </div>
            </div>

        </div>
        </div>
    </div>



@stop