@extends('layouts.main')

@section('content')

    <div class="container text-center" style="padding: 15px">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="rol">
                <form method="get" action="{{ route('search') }}" class="d-flex col mb-3">
                    <input class="form-control typeahead" type="text" placeholder="Поиск" name="search"
                           aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Поиск</button>
                </form>
            </div>
            <div class="rol mb-3">
                <a href="#" class="btn btn-primary">Добавить</a>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($articles as $article)
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Артикул {{ $article->article }}</h5>
                            <p class="card-text">{{ $article->floors->floor }} этаж</p>
                            <ul class="text-center" style="padding: 0">
                                @foreach($article->places as $item)
                                    <a>{{ $item->place }}</a>
                                @endforeach
                            </ul>
                            <a href="#" class="btn btn-primary">Редактировать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="py-3 my-4">
        <p class="text-center text-muted">© 2022 Pallet Search, Inc</p>
    </footer>

@endsection
