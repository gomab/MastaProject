@extends('layouts.myApp')

@section('title', 'Brazza hip-hop|Settings')

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
                            <h4 class="card-title ">Mise à jour configuration: <strong>{{ $setting->name }}</strong></h4>
                            <!--<p class="card-setting"> Here is a subtitle for this table</p>-->
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $setting->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ $setting->email }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Adresse</label>
                                            <input type="text" name="address" class="form-control" value="{{ $setting->address }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Mobile</label>
                                            <input type="text" class="form-control" name="number" value="{{ $setting->number }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Logo</label><br>
                                        <input class="form-control" type="file" name="logo" value="{{ $setting->logo }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label class="bmd-label-floating">Favicon</label><br>
                                        <input class="form-control" type="file" name="favicon" value="{{ $setting->favicon }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">A propos</label>
                                                <textarea class="form-control" rows="10" name="about">{{$setting->about}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br><br>

                                <div class="text-center">
                                    <a class="btn btn-danger btn-sm" href="#" title="Retour"> <i class="material-icons">keyboard_backspace
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