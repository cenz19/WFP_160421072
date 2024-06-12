{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--  <meta charset="UTF-8">--}}
{{--  <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--  <title>Document</title>--}}
{{--  <style>--}}
{{--    /* Global styles */--}}
{{--    * {--}}
{{--      margin: 0;--}}
{{--      padding: 0;--}}
{{--      box-sizing: border-box;--}}
{{--      font-family: Arial, sans-serif;--}}
{{--    }--}}

{{--    /* Main container */--}}
{{--    .container {--}}
{{--      max-width: 1100px;--}}
{{--      padding: 20px;--}}
{{--      margin: 100px auto;--}}
{{--    }--}}

{{--    /* Header section */--}}
{{--    .header {--}}
{{--      color: #007bff;--}}
{{--    }--}}

{{--    .header-title {--}}
{{--      font-weight: bolder;--}}
{{--    }--}}

{{--    /* Button styles */--}}
{{--    a {--}}
{{--      color: white;--}}
{{--      text-decoration: none; /* Remove underline */--}}
{{--    }--}}

{{--    button {--}}
{{--      padding: 10px 20px; --}}
{{--      width: 100%;--}}
{{--      font-size: 16px;--}}
{{--      background-color: #007bff;--}}
{{--      color: #fff;--}}
{{--      border: none;--}}
{{--      border-radius: 10px;--}}
{{--      cursor: pointer;--}}
{{--    }--}}

{{--    button:hover {--}}
{{--      background-color: #0056b3;--}}
{{--    }--}}
{{--  </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--  <div class="container">--}}
{{--    <header>--}}
{{--      <h1 class="header">Hello, {{ $name[0] }}</h1>--}}
{{--      <h2 class="header-title">Welcome to our website</h2>--}}
{{--      <a href="{{url('/kategori')}}"><button>Choose Bed</button></a>--}}
{{--      <a href="{{url('/product')}}"><button>See Product</button></a>--}}
{{--      <a href="{{url('/hotel')}}"><button>See Hotel</button></a>--}}
{{--    </header>--}}
{{--    <form action="" method="POST">--}}
{{--      @method('PUT')--}}
{{--      @csrf--}}
{{--    </form>--}}
{{--  </div>--}}
{{--</body>--}}
@extends('layouts.conquer2')

@section('content')
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            Dashboard <small>statistics and more</small>
        </h3>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body" data-placement="bottom" data-original-title="Change dashboard date range">
                    <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <div class="container">
            <h1>Welcome to Dashboard</h1>
            <p>This project is a result of the Web Framework Programming (KP A) class, which was taught by Mr. Fikri over a period of 14 weeks, with one class per week.</p>
        </div>
    </div>
@endsection




