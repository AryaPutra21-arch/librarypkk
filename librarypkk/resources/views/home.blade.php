@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <h1>Daftar  buku</h1>
        @foreach ($data as $a )
        <div class="col-3 mt-2">
            <div class="card ms-3" style="width: 12rem; height: 300px;">
                <img src="{{ asset('storage/'. $a->cover) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $a->isbn }}</h5>
                    <h5 class="card-text">{{ $a->judul }}</h5>
                    <p class="card-text">{{ $a->penerbit }}</p>
                    <p class="card-text">{{ $a->sinopsis }}</p>
                 </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection


