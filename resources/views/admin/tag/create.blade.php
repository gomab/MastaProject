@extends('layouts.myApp')

@section('title', 'Bazza Hip-hop|Tag')

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
                            <h5 class="card-title">Tag/Nouveau</h5>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary btn-sm" title="Voir tous les tags"><a href="{{ route('tag.index') }}"><i class="material-icons">home</i></a></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('tag.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Tag</label>
                                            <input type="text" name="tag" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slug</label>
                                            <input type="text" class="form-control" name="slug" disabled>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Image</label><br>
                                        <input class="form-control" type="file" name="image" value="{{old("image")}}">
                                    </div>
                                </div>

                                <br><br>

                                <div class="text-center">
                                    <a class="btn btn-danger btn-sm" href="{{route('tag.index')}}" title="Retour"> <i class="material-icons">keyboard_backspace
                                        </i></a>

                                    <button type="submit" class="btn btn-primary btn-sm" title="Enregistrer"> <i class="material-icons">done</i></button>
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