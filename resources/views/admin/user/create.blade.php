@extends('layouts.myApp')

@section('title', 'User')

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
                            <h4 class="card-title ">Ajouter Un utilisateur</h4>
                        </div>
                        <div class="card-body">
                           @foreach($users as $user)
                                <form method="POST" action="{{ route('user.store') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Nom</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="text-center">
                                        <a class="btn btn-danger btn-sm" href="{{route('user.index')}}"> <i class="material-icons">keyboard_backspace
                                            </i></a>

                                        <button type="submit" class="btn btn-primary btn-sm"> <i class="material-icons">save</i></button>
                                    </div>

                                </form>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush