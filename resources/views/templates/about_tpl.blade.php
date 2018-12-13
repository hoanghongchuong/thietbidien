@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <h1 class="name_about">{{$about->name}}</h1>
        <div class="content_about">
            {!! $about->content !!}
        </div>
    </div>
</div>

@endsection

