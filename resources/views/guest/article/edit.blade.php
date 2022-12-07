@extends('layouts.main')

@section('content')

    <div class="container" style="padding: 15px">
        <form action="{{ route('guest.article.update', $article->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <legend>Редактируем артикул</legend>
            <div class="mb-3">
                <input name="article" type="text" class="form-control" placeholder="Введите артикул"
                       value="{{ $article->article }}">
                @error('article')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Введите комментарий</label>
                <input name="content" type="text" class="form-control" placeholder="Введите комментарий"
                       value="{{ $article->content }}">
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Выберите этаж склада</label>
                <select name="floor_id" class="form-control">
                    @foreach($floors as $floor)
                        <option
                            value="{{ $floor->id }}" {{ $floor->id == $article->floor_id ? ' selected' : '' }}>{{ $floor->floor }}</option>
                    @endforeach
                </select>
                @error('floor_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label>Выберите место расположения</label>
                <select class="select2" name="place_ids[]" data-placeholder="Добавьте место" multiple="multiple"
                        style="width: 100%;">
                    @foreach($places as $place)
                        <option
                            {{ is_array( $article->places->pluck('id')->toArray() ) && in_array( $place->id, $article->places->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{ $place->id }}">{{ $place->place }}</option>
                    @endforeach
                </select>
                @error('place_ids')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
            <form action="{{ route('guest.article.delete', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить</button>
            </form>
        </form>
    </div>

@endsection
