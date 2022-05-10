@extends('backend.layouts.app')

@section('title', __('dashboard.Edit'))

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
            <strong>@lang('validation.Opps')</strong> @lang('validation.Something went wrong, please check below errors')<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="close" users-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>@lang('dashboard.Edit')</h4>
                </div>
                <form action="{{ route ('categories.update',$category->id) }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
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
                                                <i class="fas fa-marker"></i>
                                            </div>
                                        </div>

                                        <input type="text" name="{{ $locale }}[name]" value="{{ $category->translate($locale)->name}}"
                                                placeholder="{{ $category->translate($locale)->name}}" class="form-control marker" required="">
                                        <div class="invalid-feedback">
                                            {{__('Opss Name is Required')}} ! !
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group col-md-6">
                                <label for="parent_id">@lang('dashboard.Select a Category')</label>
                                <select class="form-control" name="parent_id"  >
                                    <option value="" >@lang('dashboard.Category')</option>

                                        @foreach($categories as $key => $cat)
                                            <option value="{{$cat->id}}"  {{$category->parent_id == $cat->id ? 'selected':''}}>{{$cat->name}}</option>
                                        @endforeach


                                </select>

                            </div>

                            <div class="form-group col-md-3">
                                <label>@lang('dashboard.Rank')</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-arrows-alt-v"></i>
                                    </div>
                                </div>
                                <input type="number" name="rank"  value="{{ $category->rank }}" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label>@lang('dashboard.Select a Status')</label>
                                <select name="status" class="form-control" required="">

                                    @if ($category->status == 1)
                                        <option value="1"  selected >@lang('dashboard.Active')</option>
                                        <option value="0">@lang('dashboard.Not active')</option>
                                    @else
                                        <option value="1" >@lang('dashboard.Active')</option>
                                        <option value="0" selected >@lang('dashboard.Not active')</option>
                                    @endif
                                </select>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>


                            @foreach(config('translatable.locales') as $locale)

                                <div class="form-group col-md-4">
                                    <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-file-signature"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="{{ $locale }}[description]" value="{{ $category->translate($locale)->description}}"
                                                placeholder="{{ $category->translate($locale)->description}}" class="form-control marker">
                                    </div>
                                </div>
                            @endforeach


                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Image')</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-image"></i>
                                        </div>
                                    </div>
                                    <input type="file" name="image"  class="form-control file" >
                                </div>
                                <div class="invalid-feedback">
                                    @lang('validation.Opss, This field is required')
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                @if ($category->image)
                                    <img src="{{ asset('uploads/categories/'.$category->image) }}" width="250" alt="{{ $category->name }}">
                                @else
                                    <img src="https://img.icons8.com/windows/100/000000/no-image.png" width="100" />
                                @endif
                            </div>


                        </div>


                        <div class="form-group text-right">
                            <button class="btn btn-success">
                                <i class="fas fa-check"></i> @lang('dashboard.Update')
                            </button>

                            <a href="{{ route ('categories.index')}}" class="btn btn-icon icon-left btn-secondary"><i class="fas fa-backward"></i> @lang('dashboard.Back') </a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
