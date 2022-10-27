@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать продукцию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.article.update', $article->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group  w-25">
                                <input type="text" class="form-control" name="article" placeholder="Введите артикул" value="{{ $article->article }}">
                                @error('article')
                                <div class="text-danger">Необходимо указать артикул продукции.</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ $article->content }}</textarea>
                                @error('content')
                                <div class="text-danger">Необходимо указать сегодняшнюю дату.</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Выберете этаж</label>
                                <select name="floor_id" class="form-control">
                                    @foreach($floors as $floor)
                                        <option value="{{ $floor->id }}" {{ $floor->id == $article->floor_id ? ' selected' : '' }}>{{ $floor->floor }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group w-25">
                                <label>Выберите место расположения</label>
                                <select class="select2" name="place_ids[]" multiple="multiple" data-placeholder="Добавьте место" style="width: 100%;">
                                    @foreach($places as $place)
                                        <option {{ is_array( $article->places->pluck('id')->toArray() ) && in_array( $place->id, $article->places->pluck('id')->toArray() ) ? ' selected' : '' }} value="{{ $place->id }}">{{ $place->place }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Обновить">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
