<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{(app()->getLocale() == 'ar') ? 'rtl' : 'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title> {{ $setting->title }}</title>
    <!-- Stylesheets -->
    <link rel="icon" href="{{url('web/image/logo.svg')}}">
    <link href="{{url('web/css/style.css')}}" rel="stylesheet">
    <!-- Responsive -->
    <link href="{{url('web/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <script src="{{url('web/js/jquery-3.2.1.min.js')}}"></script>
</head>
