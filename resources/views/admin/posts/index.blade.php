@extends('layouts.app')

@section('content')
    <h1>Elenco post</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>

                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="" class="btn btn-dark">dettagli</a>
                        <a href="" class="btn btn-warning">Modifica</a>
                        <a href="" class="btn btn-danger">Cancella</a>



                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
