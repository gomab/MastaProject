@extends('layouts.myApp')

@section('title', 'Brazza Hip-Hop|User')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
@endpush


@section('content')
    <!-- Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <!-- Success Message -->
                    @include('layouts.partial.msg')
                    <!-- End Success Msg -->

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">User</h4>
                            <a class="nav-link" href="{{ route('user.create') }}">
                                <span class="btn btn-info btn-sm"><i class="material-icons">add_circle</i></span>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>

                            <a class="nav-link" href="{{ route('profile.index') }}">
                                <span class="btn btn-info btn-sm"><i class="material-icons">contacts</i></span>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Avatar
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Permission
                                    </th>

                                    <th>
                                        Action
                                    </th>


                                    </thead>
                                    <tbody>
                                        @if($users->count() > 0 )
                                            @foreach($users as $key=>$user)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name}}" width="60px" height="60px" style="border-radius: 50%;"></td>
                                                    <td>{{ $user->name }}</td>


                                                    <td>
                                                        @if($user->admin)
                                                            <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-success btn-sm">Remove permissions</a>
                                                        @else
                                                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-success btn-sm">Make admin</a>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if(Auth::id() == $user->id)
                                                            <a class="btn btn-info btn-sm" href="{{ route('user.edit', $user->id) }}"><i class="material-icons">mode_edit</i></a>
                                                        @endif

                                                        @if(Auth::id() !== $user->id)
                                                            <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" style="display: none;" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Confirmation suppression ?')){
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-form-{{ $user->id }}').submit();
                                                                    }else {
                                                                    event.preventDefault();
                                                                    }
                                                                    ">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                        @endif
                                                    </td>


                                                <!-- <td><a class="btn btn-danger btn-sm" href="{{ route('user.edit', $user->id) }}"><i class="material-icons">delete</i></a></td>-->
                                                </tr>
                                            @endforeach

                                            @else
                                            <th colspan="5" class="text-center">
                                                <i class="material-icons">hourglass_empty</i><br>Aucun Utilisateur
                                            </th>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable( {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            } );
        } );
    </script>
@endpush