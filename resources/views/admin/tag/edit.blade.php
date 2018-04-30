@extends('layouts.myApp')

@section('title', 'Brazza hip-hop|tag')

@push('css')

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
                            <h4 class="card-title ">Mise à jour tag : <strong>{{ $tag->tag }}</strong></h4>
                            <!--<p class="card-tag"> Here is a subtitle for this table</p>-->
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tag.update', $tag->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="tag" class="form-control" value="{{ $tag->tag }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="{{ $tag->slug }}" disabled="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Image</label><br>
                                        <input class="form-control" type="file" name="image" value="{{ $tag->image }}">
                                    </div>
                                </div>
                                <br><br>

                                <div class="text-center">
                                    <a class="btn btn-danger btn-sm" href="{{route('tag.index')}}" title="Retour"> <i class="material-icons">keyboard_backspace
                                        </i></a>

                                    <button type="submit" class="btn btn-primary btn-sm" title="Valider"> <i class="material-icons">save</i></button>
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