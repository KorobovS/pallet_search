@extends('admin.layouts.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавляем продукцию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.article.index') }}">Продукция</a></li>
                            <li class="breadcrumb-item active">Добавляем продукцию</li>
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
                        <form action="{{ route('admin.article.store') }}" method="POST">
                            @csrf
                            <div class="form-group  w-25">
                                <input type="text" class="form-control" name="article" placeholder="Введите артикул"
                                       value="{{ old('article') }}">
                                @error('article')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                                @error('content')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Выберете этаж</label>
                                <select name="floor_id" class="form-control">
                                    @foreach($floors as $floor)
                                        <option
                                            value="{{ $floor->id }}" {{ $floor->id == old('$floor_id') ? ' selected' : '' }}>{{ $floor->floor }}</option>
                                    @endforeach
                                </select>
                                @error('floor_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-25">
                                <label>Выберите место расположения</label>
                                <select class="select2" name="place_ids[]" multiple="multiple"
                                        data-placeholder="Добавьте место" style="width: 100%;">
                                    @foreach($places as $place)
                                        <option
                                            {{ is_array(old('place_ids')) && in_array($place->id, old('place_ids')) ? ' selected' : '' }} value="{{ $place->id }}">{{ $place->place }}</option>
                                    @endforeach
                                </select>
                                @error('place_ids')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Добавить">
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
