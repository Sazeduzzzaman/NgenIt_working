
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Ngen It | Admin Panel</title>

	<!-- Global stylesheets -->
    @php
    $setting=App\Models\Admin\Setting::first();
    @endphp

    <style>
            table.td{
                margin: 1px !important;
                padding: 3px !important;
            }
            .dataTables_paginate{
                margin-top: 0.5rem !important;
            }
            .dataTable thead td, .dataTable thead th {
                padding  : 10px 5px 10px 5px !important;
                font-size: 12px !important;
            }
            .datatable-footer, .datatable-header{
                padding: 0px !important;

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
            background: gray !important;
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

    <link rel="icon" type="image/x-icon" href="{{ (!file_exists($setting->favicon)) ? url('upload/faviconimage/'.$setting->favicon):url('upload/no_image.jpg') }}">

	<link href="{{ asset('backend/assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backend/assets/css/ltr/all.min.css') }}" id="stylesheet" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/icons/material/styles.min.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
    <link href="{{ asset('backend/assets/css/oliullah.css') }}" id="stylesheet" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{ asset('backend/assets/input-tags/css/tagsinput.css') }}" rel="stylesheet" />

    <style>

    </style>

<style type="text/css">

    .padding{
        padding: 0px!important;
    }
   .quotaed-lbg{
       background: #659EC7!important;
   }

   .quotaed-ltbg{
       background: #306754!important;
   }
  .quotaed-rbg{
       background: #4C787E!important;
   }
  .quotaed-rtbg{
       background: #1F6357!important;
   }

   .customicTable th,td{
      border: 1px solid #ddd!important;
      padding: 3px 3px;
      font-size: 11px;
   }
   .customicTableForecastHead th,td{
      border: 1px solid #ddd;
      padding: 5px 5px;
      font-size: 13px;
   }

   .form-select-sm{
       width: 100%;
       height: 30px;
       color: #000;
       padding: 2px;

   }
 .form-control-sm{
     width: 100%;
     height: 30px;
     padding: 2px;
 }
 </style>


