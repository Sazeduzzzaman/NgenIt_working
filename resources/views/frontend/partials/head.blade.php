<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>NgenIt Corporate</title>

<!--Fav-Icon-->
@php
        $setting=App\Models\Admin\Setting::first();
        @endphp


        {{-- Custom Style 12-03-2023 Start--}}
        <link rel="stylesheet" href="{{ asset('frontend/css/custom_main.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom_style_main.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/sidebar_tab.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/sidebar_tab.css')}}">
        <link rel="stylesheet" href="{{ asset('frontend/css/modification_style.css')}}">
        {{-- Custom Style 12-03-2023 End--}}


    {{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63b14113592bb2001af01a1d&product=inline-share-buttons&source=platform" async="async"></script> --}}
    <link rel="icon" type="image/x-icon" href="{{ (!file_exists($setting->favicon)) ? url('upload/faviconimage/'.$setting->favicon):url('upload/no_image.jpg') }}">

    <link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome-6.css')}}">

    <!-- Plugin link -->
    <link rel="stylesheet" href="{{ asset('frontend/lib/bootstrap/css/bootstrap.css')}}">
    <link href="{{ asset('frontend/assets/css/bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/js/filter.js')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/lib/font-awesome/css/font-awesome.css')}}">

    <!-- Css link -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar_tab.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link href="{{ asset('frontend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />



    @yield('styles')
 <style>
    .ui-autocomplete {
        left: 35% !important;
        width: 100% !important;
        margin-top: 16px !important;
    }
    .ui-menu{
        margin-top: 1.5rem !important;
        top: 5rem !important;
    }
    .ui-slider-horizontal .ui-slider-range {

    background-color: green;
    }
    .ui-slider-handle{
        background-color: rgb(121, 11, 11) !important;
    }
    .select2-container .select2-selection--single{
        height: 39px !important;
    }
    .content_date{
        font-family: 'Poppins', sans-serif !important;

    }
    .c-header-nav__text{
        color: #ae0a46 !important;
        font-weight: 600 !important;

    }
 </style>

 <style>
    .product_item_content_name{
        height: 3rem;
        font-size: 13px !important;
    }

 </style>

 <style>
    .modal_outer .modal-body {
    /*height:90%;*/
    overflow-y: auto;
    overflow-x: hidden;
    height: 70vh;
}

 </style>
<style>
    table.td{
    margin: 1px !important;
    padding: 3px !important;
}
    .dataTable thead td, .dataTable thead th {
        padding  : 10px 5px 10px 5px !important;
        font-size: 12px !important;
    }
    .datatable-footer, .datatable-header{
        padding: 3px;

    }
    .card-body{
        padding: 5px;
    }
tbody, td, tfoot, th, thead, tr{
    font-size: 13px !important;
    font-weight: 500 !important;
    padding: 3px 6px 3px 6px !important;
    color: black !important;
}
.card-body{
    color: black !important;
    font-weight: 600 !important;
}
.br-7{
    border-radius: 7px;
}
.br-5{
    border-radius: 5px;
}
.center{
    width: 50%;
    margin: auto;
}
.bg-gray{
    background: gray;
    color: white !important;
}
.w-6{
    width: 6rem !important;
    border: 1px #d5cece solid !important;
}
.w-10{
    width: 10rem !important;
    border: 1px #d5cece solid !important;
}
.border-none{
    border: none !important;
}
@media only screen and (min-width: 992px){

    .rfq-top{
        width: 63% !important;
        margin-left: 12.5rem !important;
    }
}
</style>
