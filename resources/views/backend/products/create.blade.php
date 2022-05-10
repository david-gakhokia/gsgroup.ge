@extends('backend.layouts.app')

@section('title', __('dashboard.Add Product'))

@section('content')

    <div class="row">

        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>@lang('dashboard.Add Product')</h4>
                </div>
                <form action="{{ route('products.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
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
                                    <input type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}" class="form-control marker" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="form-group col-md-4">
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

                            <div class="form-group col-md-4">
                                <label for="category_id">@lang('dashboard.Select a Category')</label>
                                <select class="form-control select" name="category_id"  required="">
                                    <option selected disabled >@lang('dashboard.Select a Category')</option>
                                    @foreach ($categories as $category)
                                        @if ($category->children)
                                            @foreach ($category->children as $child)
                                                <option value="{{ $child->id }}" {{ $child->id === old('category_id') ? 'selected' : '' }}>&nbsp;&nbsp;{{ $child->name }}</option>
                                            @endforeach
                                        @else
                                        <p>No Result</p>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="status">@lang('dashboard.Select a Status')</label>
                                <select class="form-control" name="status">
                                    <option class="badge badge-success badge-shadow" value="1">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Active')
                                    </option>

                                    <option class="badge badge-danger badge-shadow" value="0">
                                        <i class="fas fa-check-circle"></i>@lang('dashboard.Not active')
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    {{__('Opss , Status is Required')}} !
                                </div>
                            </div>

                            <div class="form-group col-md-2">
                                <label>@lang('dashboard.Price')</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                  </div>
                                <input type="number" step="0.01" name="price" class="form-control phone-number" placeholder="@lang('dashboard.Price')" required="">
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>

                            @foreach(config('translatable.locales') as $locale)
                            <div class="form-group col-md-12">
                                <div class="form-group mb-0">
                                    <label>@lang('dashboard.Description') ({{ strtoupper($locale) }})</label>
                                    <textarea class="form-control" name="{{ $locale }}[description]"></textarea>
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
                            <i class="fas fa-save"></i> @lang('dashboard.Save')
                        </button>
                        <a href="{{ route ('products.index') }}" class="btn btn-info">
                            <i class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
