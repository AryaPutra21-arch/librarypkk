@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>edit buku </h1>
            <form action="{{route('buku.update', $buku->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">isbn</label>
                    <input type="number" class="form-control" name="isbn" value="{{ $buku->isbn }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">penerbit</label>
                    <input type="text" class="form-control" type="file" name="penerbit" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">cover</label>
                    <input class="form-control" type="file" name="cover" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Sinopsis</label>
                    <input type="text" class="form-control" name="sinopsis" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori_id">
                        <option selected>Open this select menu</option>
                        @foreach ($kategori as $k)
                        <option value="{{ $k->id }}" @selected($buku->kategori_id==$k->id)>{{ $k->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>
    </div>
</div>


@endsection
