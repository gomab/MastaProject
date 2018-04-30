@extends('layouts.myApp')

@section('title', 'Post')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('backend/css/switch.css') }}">
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
                            <h4 class="card-title">ARTICLES</h4>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-secondary"><a href="{{ route('post.create') }}"><i class="material-icons">add_circle</i></a></button>
                                <button type="button" class="btn btn-secondary"><a href="{{ route('post.trashed') }}"><i class="material-icons">delete_sweep</i></a></button>
                                <!--<button type="button" class="btn btn-secondary"><i class="material-icons">delete_sweep</i></button>-->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" style="width:100%">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Titre
                                        </th>
                                        <th>
                                            Category
                                        </th>

                                        <th>
                                            Content
                                        </th>

                                       <!--  <th>
                                            Date
                                        </th>-->

                                        <th>
                                            Action
                                        </th>
                                        <th>
                                            Etat
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $key=>$post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><img class="img-responsive" width="90px" height="50px"
                                                     src="{{ asset('uploads/post/'.$post->featured) }}"
                                                     alt="{{ $post->featured }}">
                                            </td>
                                            <td>{{ $post->title}}</td>

                                            <td>{{ $post->category->name }}</td>

                                            <td><a href="#">{{ substr($post->content, 0, 30) }}...</a></td>

                                            <!--<td>{{ $post->updated_at->toFormattedDateString() }}</td>-->

                                            <td><a class="btn btn-info btn-sm"
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

                                                <!-- Rounded switch
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>-->


                                            </td>

                                            <td><input id="toggle" type="checkbox" data-toggle="toggle" data-on="Publie" data-off="NON PUBLIE" data-size="small"></td>
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
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        });
    </script>

    <script>
        $(function() {
            $('#toggle').bootstrapToggle({
                on: 'Enabled',
                off: 'Disabled'
            });
        })
    </script>
@endpush