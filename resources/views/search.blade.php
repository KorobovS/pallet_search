@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="m-3">
            <div class="text-center">
                <div class="col row-cols-1 g-4">
                    <div class="card-header">Результаты поиска</div>
                    @foreach($articles as $article)
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Артикул: {{ $article->article }}
                                <ul class="text-center" style="padding: 0">
                                    @foreach($article->places as $item)
                                        <a>{{ $item->place }}</a>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
