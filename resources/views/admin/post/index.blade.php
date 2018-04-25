@extends('layouts.myApp')

@section('title', 'Post')

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
                            <h4 class="card-title">Articles</h4>
                            <a class="nav-link" href="{{ route('post.create') }}">
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
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Category Name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Price
                                        </th>
                                        <th>
                                            Created At
                                        </th>
                                        <th>
                                            Updated At
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $key=>$post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $post->name}}</td>
                                            <td><img class="img-responsive img-thumbnail"
                                                     src="{{ asset('uploads/post/'.$post->featured) }}"
                                                     alt="{{ $post->featured }}"></td>
                                            <td></td>
                                            <td>{{ $post->content }}</td>
                                            <td>{{ $post->xxx }}<strong>£</strong></td>
                                            <td>{{ $post->created_at }}</td>
                                            <td>{{ $post->updated_at }}</td>
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
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </td>
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
        $(document).ready(function () {
            $('#table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            });
        });
    </script>
@endpush