@extends('layouts.myApp')

@section('title', 'Trashed')

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
                                <h5 class="card-title">Articles/Articles publiés</h5>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary" title="Tous les articles"><a href="{{ route('post.index') }}"><i class="material-icons">home</i></a></button>
                                    <button type="button" class="btn btn-secondary" title="Nouvel article"><a href="{{ route('post.create') }}"><i class="material-icons">add_circle</i></a></button>
                                    <button type="button" class="btn btn-secondary" title="Articles non publiés"><a href="{{ route('post.no-published') }}"><i class="material-icons">low_priority</i></a></button>
                                    <button type="button" class="btn btn-secondary" title="Corbeilles"><a href="{{ route('post.trashed') }}"><i class="material-icons">delete_sweep</i></a></button>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th class="th-actions text-center">
                                            ID
                                        </th>
                                        <th class="th-actions text-center">
                                            Image
                                        </th>
                                        <th class="th-actions text-center">
                                            Titre
                                        </th>
                                        <th class="th-actions text-center">
                                            Category
                                        </th>

                                        <th class="th-actions text-center">
                                            Content
                                        </th>

                                        <!--  <th>
                                             Date
                                         </th>-->

                                        <th class="th-actions text-center">
                                            Status
                                        </th>
                                        <th class="th-actions text-center">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($posts->count() > 0 )
                                            @foreach($posts as $key=>$post)
                                                <tr>
                                                    <td class="td-actions text-center">{{ $key + 1 }}</td>
                                                    <td class="td-actions text-center"><img class="img-responsive" width="90px" height="50px"
                                                             src="{{ asset('uploads/post/'.$post->featured) }}"
                                                             alt="{{ $post->featured }}">
                                                    </td>
                                                    <td class="td-actions text-center">{{ $post->title}}</td>

                                                    <td class="td-actions text-center">{{ $post->category->name }}</td>

                                                    <td class="td-actions text-center"><a href="#">{{ substr($post->content, 0, 30) }}...</a></td>

                                                    <td class="td-actions text-center">
                                                        @if($post->published)
                                                            <a href="{{ route('post.no-publish', ['id' => $post->id]) }}" class="btn btn-success btn-sm" title="L'article est en ligne cliquer pour le retirer">En ligne</a>
                                                        @else
                                                            <a href="{{ route('post.publish', ['id' => $post->id]) }}" class="btn btn-default btn-sm" title="L'article n'est pas en ligne cliquer pour le publier">Non publié</a>
                                                        @endif
                                                    </td>

                                                    <td class="td-actions text-center">
                                                        <a class="btn btn-info btn-sm"
                                                           href="{{ route('post.edit', $post->id) }}"><i class="material-icons">mode_edit</i></a>

                                                        <form id="delete-form-{{ $post->id }}"
                                                              action="{{ route('post.destroy', $post->id) }}"
                                                              style="display: none;" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                        <button class="btn btn-danger btn-sm" type="button"
                                                                onclick="if(confirm('Confirmation suppression ?')){
                                                                        event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $post->id }}').submit();
                                                                        }else {
                                                                        event.preventDefault();
                                                                        }
                                                                        ">
                                                            <i class="material-icons">delete_sweep </i>
                                                        </button>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        @else
                                            <th colspan="7" class="text-center">
                                                <i class="material-icons">hourglass_empty</i><br>Aucun article en ligne
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
        $(document).ready(function () {
            $('#table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        });
    </script>
@endpush