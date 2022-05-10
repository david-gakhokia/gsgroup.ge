@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">pages
                @can('page-create')
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('pages.create') }}">New page</a>
                    </span>
                @endcan
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $key => $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->text }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('pages.show',$page->id) }}">Show</a>
                                    @can('page-edit')
                                        <a class="btn btn-primary" href="{{ route('pages.edit',$page->id) }}">Edit</a>
                                    @endcan
                                    @can('page-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['pages.destroy', $page->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $pages->appends($_GET)->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection
