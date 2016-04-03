<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('bracket/images/favicon.png') }}" type="image/png">

    <title>跟踪管理</title>

    <link href="{{ asset('bracket/css/style.default.css') }}" rel="stylesheet">
    <link href="{{ asset('bracket/css/jquery.datatables.css') }}" rel="stylesheet">

    @yield('link')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('bracket/js/html5shiv.js') }}"></script>
    <script src="{{ asset('bracket/js/respond.min.js') }}"></script>

    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="leftpanel">

        <div class="logopanel">
            <h1><span>[</span> 条码跟踪系统 <span>]</span></h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="{{ url('bracket/images/photos/loggeduser.png') }}" class="media-object">
                    <div class="media-body">
                        <h4>John Doe</h4>
                        {{--<span>"Life is so..."</span>--}}
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Account</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href="profile.html"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>帐号管理</span></a></li>
                    <li><a href="{{ url('user/signout') }}"><i class="fa fa-sign-out"></i> <span>退出</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navigation</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                {{--<li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>基础信息</span></a></li>--}}
                <li class="navlable nav-parent navbase"><a href="{{ url('/index') }}"><i class="fa fa-home"></i> <span>基础信息</span></a>
                    <ul class="children" >
                        <li class="product"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 产品管理 </a></li>
                        <li class="video"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 视频管理</a></li>
                    </ul>
                </li>
                <li class="navlable navproduction"><a href="{{ url('/shengchan') }}"><i class="fa fa-envelope-o"></i> <span>生产数据管理</span></a></li>
                <li class="navlable nav-parent navstorage"><a href="#"><i class="fa fa-edit"></i> <span>仓储管理</span></a>
                    <ul class="children ">
                        <li class="inputKu"><a href="{{ url('changku/ruku') }}"><i class="fa fa-caret-right"></i> 入库管理 </a></li>
                        <li class="outKu"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 出库管理</a></li>
                        <li class="returngoods"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 退货管理 </a></li>
                        <li class="approve"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 调货审批 </a></li>
                        <li class="distributor"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 经销商进销存</a></li>
                        <li class="store"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 门店进销存</a></li>
                        <li class="repertory"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 库存管理</a></li>
                    </ul>
                </li>
                <li class="navlable nav-parent navdata"><a href="#"><i class="fa fa-suitcase"></i> <span>数据报表</span></a>
                    <ul class="children">
                        <li class="track"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 数码追溯</a></li>
                        <li class="sales"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 销售信息</a></li>
                        <li class="farmers"><a href="{{ url('/index') }}"><i class="fa fa-caret-right"></i> 农户信息</a></li>
                    </ul>
                </li>

            </ul>

        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>

            <form class="searchform" action="javascript:void(0);" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>

            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ url('bracket/images/photos/loggeduser.png') }}" alt="" />
                                John Doe
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> 个人信息</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> 帐号管理</a></li>
                                <li><a href="{{ url('user/signout') }}"><i class="glyphicon glyphicon-log-out"></i> 退出 </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- header-right -->

        </div><!-- headerbar -->

        <div class="pageheader">
            @yield('lable')
        </div>

        <div class="contentpanel">
            @yield('contentpanel')
        </div><!-- contentpanel -->

    </div><!-- mainpanel -->
</section>


<script src="{{ asset('bracket/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('bracket/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('bracket/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bracket/js/modernizr.min.js') }}"></script>
<script src="{{ asset('bracket/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('bracket/js/toggles.min.js') }}"></script>
<script src="{{ asset('bracket/js/retina.min.js') }}"></script>
<script src="{{ asset('bracket/js/jquery.cookies.js') }}"></script>

{{--<script src="{{ asset('bracket/js/flot/flot.min.js') }}"></script>--}}
{{--<script src="{{ asset('bracket/js/flot/flot.resize.min.js') }}"></script>--}}
<script src="{{ asset('bracket/js/morris.min.js') }}"></script>
<script src="{{ asset('bracket/js/raphael-2.1.0.min.js') }}"></script>

<script src="{{ asset('bracket/js/jquery.datatables.min.js') }}"></script>
<script src="{{ asset('bracket/js/chosen.jquery.min.js') }}"></script>

<script src="{{ asset('bracket/js/custom.js') }}"></script>
{{--<script src="{{ asset('bracket/js/dashboard.js') }}"></script>--}}
<script type="text/javascript" >
    $(function() {
        var navactive = $("#navactive").attr("parentvalue");
        $(".navlable").removeClass('active');
        $(".navlable").removeClass('nav-active');
        var activeVal = $("#navactive").attr("val");
        //alert(activeVal);
        var navchildlength = $("."+navactive).find('.children').length;
        if(navchildlength != 0){
            $("."+navactive).addClass('nav-active');
            $("."+navactive).find('.children').css("display","block");
            $("."+activeVal).addClass('active');

        }
        $("."+navactive).addClass('active');

    })
</script>

@yield('script')

</body>
</html>
