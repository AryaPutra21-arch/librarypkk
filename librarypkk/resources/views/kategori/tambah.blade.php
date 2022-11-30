@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>tambah buku </h1>
            <form action="{{route('kategori.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">name kategori</label>
                    <input type="text" class="form-control" name="name">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>
    </div>
</div>

@endsection
