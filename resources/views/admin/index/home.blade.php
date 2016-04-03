@extends('admin.layout.base')
@section('lable')
    <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.html">Bracket</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
    <input type="hidden" id="navactive" parentvalue="navbase" val="product" />
@stop

@section('contentpanel')
    <p>This is my body content.</p>
@stop