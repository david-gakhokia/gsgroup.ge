@extends('backend.layouts.app')

@section('title', __('dashboard.Categories'))

@section('content')
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
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

        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Categories')</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                    @foreach ($categories as $key => $category)
                        @if ($category->parent_id == Null)
                        <li class="list-group-item" style="background-color:#cae9d9a1">
                            {{-- Main Category --}}
                            <div class="d-flex justify-content-between" >
                                <p>{{ $category->name }} </p>
                                @if($category->status == 1)
                                    <p style="color: rgb(16, 209, 16)"> <i class="fas fa-eye" data-toggle="tooltip" data-original-title="@lang('dashboard.Active')"></i></p>
                                @else
                                    <p style="color: red" > <i class="far fa-eye-slash" data-toggle="tooltip" data-original-title="@lang('dashboard.Not active')"></i></p>
                                @endif

                                <div class="button-group text-right">
                                    <a href="{{ route ('categories.edit',$category->id) }}">
                                        <button class="btn btn-icon btn-primary" data-toggle="tooltip" title="{{__('dashboard.Edit')}}">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    @can('category-delete')
                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST" >
                                        @csrf
                                        @method("DELETE")
                                            <button type="submit" class="btn btn-icon btn-danger" data-toggle="tooltip" data-original-title="{{__('dashboard.Delete')}}">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                            {{--// Main Category --}}

                            {{-- Sub  Category --}}
                            @if ($category->children)
                                <ul class="list-group mt-2">
                                @foreach ($category->children  as $childKey => $child)
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">
                                        <p>{{ $child->rank }} | {{ $child->name }} </p>
                                            @if($child->status == 1)
                                                    <p style="color: rgb(16, 209, 16)"> <i class="fas fa-eye" data-toggle="tooltip" data-original-title="@lang('dashboard.Active')"></i></p>
                                                @else
                                                <p style="color: red" > <i class="far fa-eye-slash" data-toggle="tooltip" data-original-title="@lang('dashboard.Not active')"></i></p>
                                            @endif

                                            @if ($child->image)
                                                <img src="{{ asset('uploads/categories/'.$child->image) }}" height="50" alt="{{ $child->name }}">
                                            @else
                                                <img src="https://img.icons8.com/windows/36/000000/no-image.png"  height="50"/>
                                            @endif

                                            @auth
                                            <div class="button-group">
                                                <a href="{{ route ('categories.edit',$child->id) }}">
                                                    <button type="button" class="btn btn-icon btn-primary"" data-toggle="tooltip" title="{{__('dashboard.Edit')}}">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                </a>



                                                @can('client-delete')
                                                    <form action="{{ route('categories.destroy',$child->id) }}" method="POST" >
                                                    @csrf
                                                    @method("DELETE")
                                                        <button type="submit" class="btn btn-icon btn-danger" data-toggle="tooltip" data-original-title="{{__('dashboard.Delete')}}">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </div>
                                            @endauth
                                        </div>
                                    </li>
                                @endforeach
                                </ul>
                            @endif
                            {{--// Sub Category --}}

                        </li>
                        @else

                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                  <h4>@lang('dashboard.Add New')</h4>
                </div>
                <form action="{{  route ('categories.store') }}" class="needs-validation" novalidate="" method="POST"  enctype="multipart/form-data" >
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
                                        <input type="text" name="{{ $locale }}[name]" value="{{ old($locale . '.name') }}" class="form-control marker" required="">
                                        <div class="invalid-feedback">
                                            {{__('Opss Name is Required')}} ! !
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group col-md-6">
                                <label for="parent_id">@lang('dashboard.Select a Category')</label>
                                <select class="form-control" name="parent_id">
                                    <option value="" >@lang('dashboard.Category')</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

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
                                    {{__('Opss, Image is Required')}} ! !
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
                                        <input type="text" name="{{ $locale }}[description]" value="{{ old($locale . '.description') }}" class="form-control marker">

                                    </div>
                                </div>
                            @endforeach

                            <div class="form-group col-md-6">
                                <label>@lang('dashboard.Rank')</label>
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                    <i class="fas fa-arrows-alt-v"></i>
                                    </div>
                                </div>
                                <input type="number" name="rank" class="form-control marker">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
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
                        </div>

                        <button class="btn btn-success">
                            <i class="fas fa-save"></i> @lang('dashboard.Save')
                        </button>

                    </div>
                </form>
            </div>
        </div>

    </div>



@endsection
