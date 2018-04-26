@extends('layouts.myApp')

@section('title', 'Brazza Hip-Hop|tag')

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
                            <h4 class="card-title">All tags</h4>
                            <a class="nav-link" href="{{ route('tag.create') }}">
                                <span class="btn btn-info btn-sm"><i class="material-icons">add_circle</i></span>
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
                                        Name
                                    </th>
                                    <th>
                                        Slug
                                    </th>

                                    <th>
                                        Action
                                    </th>


                                    </thead>
                                    <tbody>
                                        @foreach($tags as $key=>$tag)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $tag->tag }}</td>
                                                <td>{{ $tag->slug }}</td>
                                                <td><a class="btn btn-info btn-sm" href="{{ route('tag.edit', $tag->id) }}"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" style="display: none;" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger btn-sm" type="button" onclick="if(confirm('Confirmation suppression ?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $tag->id }}').submit();
                                                    }else {
                                                        event.preventDefault();
                                                            }
                                                            ">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </td>

                                            <!-- <td><a class="btn btn-danger btn-sm" href="{{ route('tag.edit', $tag->id) }}"><i class="material-icons">delete</i></a></td>-->
                                            </tr>
                                        @endforeach

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