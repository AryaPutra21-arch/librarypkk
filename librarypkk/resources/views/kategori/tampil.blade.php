
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h1> Data Buku modern library </h1>
            <a href ="{{ url('kategori/create') }}" class="btn btn-primary">Tambah Buku</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope = "col">No</th>
                        <th scope = "col">Name</th>


                    </tr>
                </thead>
            <tbody>
                @foreach ($data as $b)
                <tr>
                    <th scope="row"> {{$loop->iteration}}</th>
                    <td> {{$b->name}} </td>
                    <td>
                        <div class="d-flex align-items-center list-user-action">
                            <a href="{{ route('kategori.edit', $b->id) }}" class="btn btn-primary">edit</a>
                                &nbsp;|&nbsp;
                                        <a>
                                            <form action="{{ route('kategori.destroy', $b->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger text-light" onclick="return confirm('Are you sure you want to delete this item ?')">
                                                    Delete
                                                </button>
                                            </form>

                                        </a>
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
