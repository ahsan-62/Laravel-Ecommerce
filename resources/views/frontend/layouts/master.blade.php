
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('frontendtitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>
    @include('frontend.layouts.inc.search')
    @include('frontend.layouts.inc.header')
    @yield('frontend_content')
    @include('frontend.layouts.inc.newsletter')
    @include('frontend.layouts.inc.footer')
    @include('frontend.pages.widgets.modal')
    @include('frontend.layouts.inc.script')
</body>
</html>
