@extends('layouts.myApp')

@section('title', 'Brazza Hip-Hop|Category')

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
                            <h5 class="card-title">Catégorie</h5>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary btn-sm"><a href="{{ route('category.create') }}" title="Nouvelle catégorie"><i class="material-icons">add_circle</i></a></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-content">
                                <div class="tab-pane active">
                                    <div class="table-responsive">
                                        <table id="table" class="table table-striped table-bordered" style="width:100%">
                                            <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Image
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
                                            @if($categories->count() > 0)
                                                @foreach($categories as $key=>$category)
                                                    <tr>
                                                        <td class="td-actions text-center">{{ $key + 1 }}</td>
                                                        <td class="td-actions text-center"><img class="img-responsive" width="90px" height="50px"
                                                                                                src="{{ asset('uploads/category/'.$category->image) }}"
                                                                                                alt="{{ $category->name }}">
                                                        </td>
                                                        <td class="td-actions text-center">{{ $category->name }}</td>
                                                        <td class="td-actions text-center">{{ $category->slug }}</td>
                                                        <td class="td-actions text-center">
                                                        <a class="btn btn-info btn-sm" title="Editer" href="{{ route('category.edit', $category->id) }}"><i class="material-icons">mode_edit</i></a>
                                                            <!--
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                <i class="material-icons">edit</i>
                                                            </button>
                                                            -->

                                                            <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" style="display: none;" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button class="btn btn-danger btn-sm" title="Supprimer" type="button" onclick="if(confirm('Confirmation suppression ?')){
                                                                    event.preventDefault();
                                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
                                                                    }else {
                                                                    event.preventDefault();
                                                                    }
                                                                    ">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                        </td>

                                                    <!-- <td><a class="btn btn-danger btn-sm" href="{{ route('category.edit', $category->id) }}"><i class="material-icons">delete</i></a></td>-->
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