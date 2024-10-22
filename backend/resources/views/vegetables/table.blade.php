@extends('layouts.main')

@section("title",$title)

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Zöldségek - Táblázat</h1>
        </div>
    </div>
    <div class="row">
        <form action="{{route('vegetables.table')}}" class="col-12">
            <label for="name" class="form-label w-75 d-block mx-auto">Mit keresel?</label>
            <input type="text" name="name" id="name" class="form-control w-75 d-block mx-auto">
            <button type="submit" class="btn btn-success w-50 d-block mx-auto mt-2">Küldés</button>
        </form>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>Zöldségek</h2>
        </div>
        <div class="col-12">
            <table class="table table-striped align-middle">
                <thead>
                    <tr class="text-center">
                        <th>Zöldség</th>
                        <th>Név</th>
                        <th>Leírás</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vegetables as $vegetable)
                    <tr>
                        <td>
                            <img src="{{asset("img/{$vegetable['image']}")}}" class="card-img-top img-fluid img-thumbnail" alt="...">
                        </td>
                        <td>
                            <h3 class="text-uppercase text-center">{{$vegetable['name']}}</h3>
                        </td>
                        <td>
                            <p>{{$vegetable['description']}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection