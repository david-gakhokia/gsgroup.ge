@extends('backend.layouts.app')

@section('title', __('dashboard.Edit post'))

@section('content')

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>@lang('dashboard.Edit post')</h4>
                </div>
                <form action="{{ route('posts.update',$post->id) }}" class="needs-validation"  method="POST"  enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            @foreach(config('translatable.locales') as $locale)
                            <div class="form-group col-md-4">
                                <label>@lang('dashboard.Name') ({{ strtoupper($locale) }})</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="{{ $locale }}[name]" value="{{ $post->translate($locale)->name}}"
                                                postholder="{{ $post->translate($locale)->name}}" class="form-control marker" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="form-group col-md-3">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control file">
                                </div>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>

                            <div class="form-group col-md-1">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">

                                    @if ($post->image)
                                        <img src="{{ asset('uploads/posts/'.$post->image) }}"  height="70" alt="{{ $post->name }}">
                                    @else
                                        <img src="https://img.icons8.com/windows/100/000000/no-image.png"  height="70"/>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group col-md-2">
                                <label for="status">@lang('dashboard.Select a Status')</label>
                                <select class="form-control" name="status">
                                    @if ($post->status == 1)
                                        <option class="badge badge-success badge-shadow"  value="1"  selected ><i class="fas fa-check-circle"></i> @lang('dashboard.Active')</option>
                                        <option class="badge badge-danger badge-shadow" value="0"><i class="fas fa-check-circle"></i> @lang('dashboard.Not active')</option>
                                    @else
                                        <option class="badge badge-success badge-shadow"  value="1" ><i class="fas fa-check-circle"></i> @lang('dashboard.Active')</option>
                                        <option class="badge badge-danger badge-shadow"  value="0" selected ><i class="fas fa-check-circle"></i> @lang('dashboard.Not active')</option>
                                    @endif
                                </select>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>

                            @foreach(config('translatable.locales') as $locale)
                                <div class="form-group col-md-12">
                                    <div class="form-group mb-0">
                                        <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                        <textarea class="form-control" name="{{ $locale }}[description]">{{ $post->translate($locale)->description}}</textarea>
                                        <div class="invalid-feedback">
                                            @lang('validation.Opss, This field is required')
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button class="btn btn-success">
                            <i class="fas fa-check"></i> @lang('dashboard.Update')
                        </button>
                        <a href="{{ route ('posts.index') }}" class="btn btn-info">
                            <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
