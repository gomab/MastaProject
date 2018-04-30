@extends('layouts.myApp')

@section('title', 'Post')

@push('css')
@endpush

@section('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop


@section('content')
    <!-- Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Validation errors -->
                    @include('layouts.partial.msg')
                    <!-- End validation errors -->

                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title">ARTICLES/EDITER</h4>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary"><a href="{{ route('post.index') }}"><i class="material-icons">home</i></a></button>
                                <button type="button" class="btn btn-secondary"><a href="{{ route('post.trashed') }}"><i class="material-icons">delete_sweep</i></a></button>
                                <!--<button type="button" class="btn btn-secondary"><i class="material-icons">delete_sweep</i></button>-->
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Titre</label>
                                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="{{old('slug')}}" disabled>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Rédiger l'article</label>
                                                <textarea id="content" class="form-control" rows="5" name="content">{{old('content')}}</textarea>
                                            </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating" id="category_id">Catégorie</label>
                                            <select name="category_id" id="category_id" class="custom-select mr-sm-2">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Url</label>
                                            <input type="text" name="url" class="form-control" value="{{old('url')}}">
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Image</label><br>
                                        <input class="form-control" type="file" name="featured" value="{{old("featured")}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Etat</label><br>
                                        <input id="toggle" type="checkbox" data-toggle="toggle" data-on="Publie" data-off="NON PUBLIE" data-size="small">
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="bmd-label-floating">Tags</label><br>
                                        @foreach($tags as $tag)
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="tag[]" value="{{ $tag->id }}">{{ $tag->tag }}
                                                    <span class="form-check-sign">
                                                        <span class="check"></span>
                                                   </span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <br><br>

                                <div class="text-center">

                                    <a class="btn btn-danger btn-sm" href="{{route('category.index')}}"> <i class="material-icons">keyboard_backspace
                                        </i></a>

                                    <button type="submit" class="btn btn-primary btn-sm"> <i class="material-icons">save</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $('#cont').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>
@stop