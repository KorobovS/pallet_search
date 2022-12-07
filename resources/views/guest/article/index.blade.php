@extends('layouts.main')

@section('content')

    <div class="container text-center" style="padding: 15px">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th>Артикул</th>
                <th>Этаж</th>
                <th>Место</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->article }}</td>
                    <td>{{ $article->floors->floor }}</td>
                    <td>
                        @foreach($article->places as $item)
                            {{ $item->place }}
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
