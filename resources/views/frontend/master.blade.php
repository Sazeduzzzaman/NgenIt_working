<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.partials.head')
</head>
<body>
    <!--======// Nav Menu //========-->
    @include('frontend.partials.header')
    <!--------End---------->
    <div class="page-wrapper">
    @yield('content')

    <!--=======// Footer Section//=========-->
    @include('frontend.partials.footer')
    </div>
    <!----------End--------->

    <!--=======// Cookises Modals //=======-->
    @include('frontend.partials.cookies')
    <!----------End--------->

    <!--=======// Feedback Modals //=======-->
    @include('frontend.partials.feedback')
    <!----------End--------->

    <!--============///* USE LINK *///=============-->
    @include('frontend.partials.script')

    {{ \TawkTo::widgetCode() }}

</body>
</html>
