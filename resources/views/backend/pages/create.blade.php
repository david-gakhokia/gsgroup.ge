@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">{{ __('Add New Post') }}
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </span>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('pages.store') }}">
                    @csrf

                        <div class="form-group">
                            <strong> @lang('Title')</strong>
                            <input  class="form-group" type="text" name="title"   required/>
                        </div>

                        <div class="form-group">
                            <strong>@lang('Text')</strong>
                            <input class="form-group" type="text" name="text"  required/>
                        </div>

                        <div class="form-group">
                            <strong>@lang('Currency')</strong>
                            <input class="form-group" type="number" name="currency"  required/>
                        </div>

                    <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
