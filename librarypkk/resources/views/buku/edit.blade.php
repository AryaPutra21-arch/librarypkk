@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label class="form-label">isbn</label>
                    <input type="text" class="form-control" name="isbn" value="{{ $buku->isbn }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">cover/label>
                    <img src="{{ asset('storage/'.$buku->cover) }}" alt="" width="100px">
                    <input class="form-control" type="file" name="cover">
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
