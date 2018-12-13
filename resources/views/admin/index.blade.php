@extends('admin.master')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Quản trị website 
    
  </h1>
  <!-- @if (Session::has('flash_notice'))
    <span class="box-title text-green alert_thongbao">{{ Session::get('flash_notice') }}</span>
  @endif -->
  <ol class="breadcrumb">
    <li><a href="{{ asset('backend') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <img src="{{asset('public/admin_assets/images/bannerb.jpg')}}" style="width: 100%;">
    </div>
  

</section><!-- /.content -->
@endsection()