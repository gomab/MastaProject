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
                        <div class="card-header card-header-danger">
                            <h5 class="card-title">Tag</h5>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary btn-sm" title="Nouveau Tag"><a href="{{ route('tag.create') }}"><i class="material-icons">add_circle</i></a></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                    <th class="th-actions text-center">
                                        ID
                                    </th>
                                    <th class="th-actions text-center">
                                        Image
                                    </th>
                                    <th class="th-actions text-center">
                                        Nom
                                    </th>
                                    <th class="th-actions text-center">
                                        Slug
                                    </th>

                                    <th class="th-actions text-center">
                                        Action
                                    </th>


                                    </thead>
                                    <tbody>
                                        @if($tags->count() > 0)
                                            @foreach($tags as $key=>$tag)
                                            <tr>
                                                <td class="td-actions text-center">{{ $key + 1 }}</td>
                                                <td class="td-actions text-center"><img class="img-responsive rounded" width="100px" height="60px"
                                                                                        src="{{ asset('uploads/tag/'.$tag->image) }}"
                                                                                        alt="{{ $tag->name }}">
                                                </td>
                                                <td class="td-actions text-center">{{ $tag->tag }}</td>
                                                <td class="td-actions text-center">{{ $tag->slug }}</td>
                                                <td class="td-actions text-center"><a class="btn btn-info btn-sm" title="Editer" href="{{ route('tag.edit', $tag->id) }}"><i class="material-icons">mode_edit</i></a>

                                                    <form id="delete-form-{{ $tag->id }}" action="{{ route('tag.destroy', $tag->id) }}" style="display: none;" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button class="btn btn-danger btn-sm" type="button" title="Supprmier" onclick="if(confirm('Confirmation suppression ?')){
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
                                        @else
                                            <th colspan="7" class="text-center">
                                                <i class="material-icons">hourglass_empty</i><br>Corbeille vide
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