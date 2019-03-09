@extends('layouts.app')

@php

    $metaTitle = (!is_null($pageModel) && $pageModel->meta_title != "") ? $pageModel->meta_title : "Home Page";
    $metaDescription = (!is_null($pageModel) && $pageModel->meta_description != "") ? $pageModel->meta_description : "Home Page";

@endphp

@section('meta_title',$metaTitle)
@section('meta_description',$metaDescription)

@section('content')
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-sd-12 col-md-4 float-right" style="min-height: 450px">
                <img src="{{url('/vendor/avored-default/images/one.jpg')}}" class="w-75">
            </div>
            <div class="col-sd-12 col-md-6 float-left" style="min-height: 450px">
                <h6>Why Paper Straws!</h6>
                text text
            </div>
        </div>
    </div>
@endsection