
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1> Data Buku modern library </h1>
            <a href ="{{ url('buku/create') }}" class="btn btn-primary">Tambah Buku</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope = "col">No</th>
                        <th scope = "col">ISBN</th>
                        <th scope = "col">Judul</th>
                        <th scope = "col">Penerbit</th>
                        <th scope = "col">Cover</th>
                        <th scope = "col">Sinopsis</th>
                        <th scope = "col">Kategori</th>

                    </tr>
                </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <th scope="row"> {{$loop->iteration}}</th>
                    <td> {{$d->isbn}} </td>
                    <td> {{$d->judul}} </td>
                    <td> {{$d->penerbit}} </td>
                    <td>
                        <img src="{{asset('storage/' .$d->cover)}}" alt="" width="100px">
                    </td>
                    <td> {{$d->kategori->name}} </td>
                    <td>
                        <div class="d-flex align-items-center list-user-action">
                            <a href="{{ route('buku.edit', $d->id) }}" class="btn btn-primary">edit</a>
                                &nbsp;|&nbsp;
                                        <a>
                                            <form action="{{ route('buku.destroy', $d->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger text-light" onclick="return confirm('Are you sure you want to delete this item ?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>


@endsection
