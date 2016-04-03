<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('/bracket/images/favicon.png') }}" type="image/png">

    <title>条码跟踪系统</title>

    <link href="{{ url('/bracket/css/style.default.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ url('bracket/js/html5shiv.js') }}"></script>
    <script src="{{ url('bracket/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7 col-md-offset-3">

                <form method="post" action="" style="margin-bottom: 20px;">
                    <h3 class="nomargin" style="text-align: center"><span>[</span> 条码跟踪系统 <span>]</span></h3>
                    <br/>
                    <h4 class="nomargin" style="text-align: center">登录</h4>
                    {{--<p class="mt5 mb20">Login to access your account.</p>--}}

                    <input type="text" class="form-control uname" placeholder="帐号" />
                    <input type="password" class="form-control pword" placeholder="密码" />
                    <div class="btn btn-success btn-block">确定</div>
                </form>
                <div class="pull-left">
                    &copy; 2016. 河南亿佳和种业有限公司
                </div>
            </div><!-- col-sm-7 -->

        </div><!-- row -->

    </div><!-- signin -->

</section>

<script src="{{ url('bracket/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('bracket/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('bracket/js/bootstrap.min.js') }}"></script>
<script src="{{ url('bracket/js/modernizr.min.js') }}"></script>
<script src="{{ url('bracket/js/retina.min.js') }}"></script>
<script src="{{ asset('bracket/js/toggles.min.js') }}"></script>
<script src="{{ asset('bracket/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('bracket/js/jquery.cookies.js') }}"></script>
<script src="{{ url('bracket/js/custom.js') }}"></script>

</body>
</html>
