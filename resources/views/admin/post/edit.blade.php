@extends('layouts.myApp')

@section('title', 'Post')

@push('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush


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
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Mise de l'article : <strong>{{ $post->title }}</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Titre</label>
                                            <input type="text" name="title" class="form-control" value="{{$post->title}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="{{$post->slug}}" disabled>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> Rédiger l'article</label>
                                                <textarea class="form-control" rows="10" name="content">{{$post->content}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Image</label><br>
                                        <input class="form-control" type="file" name="featured" value="{{$post->featured}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Etat</label><br>
                                        <input id="toggle" type="checkbox" data-toggle="toggle" data-on="Publie" data-off="NON PUBLIE" data-size="small">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating" id="category_id">Catégorie</label>
                                            <select name="category_id" id="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option {{ $category->id == $post->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Url</label>
                                            <input type="text" name="url" class="form-control" value="{{$post->url}}">
                                        </div>
                                    </div>


                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="bmd-label-floating">Tags</label><br>
                                        @foreach($tags as $tag)
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                                           @foreach($post->tags as $t)
                                                           @if($tag->id == $t->id)
                                                           checked
                                                            @endif
                                                            @endforeach
                                                    >
                                                    {{ $tag->tag }}
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endpush