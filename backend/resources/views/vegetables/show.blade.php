@extends('layouts.main')

@section("title",$title)

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center">{{$title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{asset("img/{$vegetable['image']}")}}" class="card-img-top img-fluid img-thumbnail" alt="...">
        </div>
        <div class="col-12 col-md-6">
            <p>{{$vegetable['description']}}</p>
        </div>
    </div>
</div>

@endsection