<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Ngen It | Admin Panel</title>

<!-- Global stylesheets -->
@php
    $setting = App\Models\Admin\Setting::first();
@endphp

<style>
    #DataTables_Table_0_filter input {
        border: 1px solid #d1d5db;
        margin-left: 5px;
    }

    .table th {
        /* padding: 12px 40px 12px 20px!important; */
        padding: 20 !important;
    }

    table tbody td {
        padding: 5px !important;
    }
</style>
<link rel="icon" type="image/x-icon"
    href="{{ !file_exists($setting->favicon) ? url('upload/faviconimage/' . $setting->favicon) : url('upload/no_image.jpg') }}">

<link href="{{ asset('backend/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/css/ltr/custom_main.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css"> --}}

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
<link href="{{ asset('backend/assets/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->
<link href="{{ asset('backend/assets/css/oliullah.css') }}" id="stylesheet" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<link href="{{ asset('backend/assets/input-tags/css/tagsinput.css') }}" rel="stylesheet" />


<style type="text/css">
    .padding {
        padding: 0px !important;
    }

    .quotaed-lbg {
        background: #659EC7 !important;
    }

    .quotaed-ltbg {
        background: #306754 !important;
    }

    .quotaed-rbg {
        background: #4C787E !important;
    }

    .quotaed-rtbg {
        background: #1F6357 !important;
    }
</style>