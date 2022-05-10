@extends('backend.layouts.app')

@section('title', __('dashboard.Edit'))

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
            <p>{{ __('Opss Name is Required') }} ! !</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>@lang('dashboard.Contacts')</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('contacts.update',$contact->id) }}" class="needs-validation" novalidate="" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group row mb-4">
                            <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Phone')</p>
                            <div class="col-sm-12 col-md-7">
                                <input type="phone" name="phone"  value="{{ $contact->phone }}" class="form-control marker"
                                    required="">
                                <div class="invalid-feedback">
                                    {{ __('Opss Name is Required') }} ! !
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Email')</p>
                            <div class="col-sm-12 col-md-7">
                                <input type="email" name="email" value="{{ $contact->email }}" class="form-control marker">
                                <div class="invalid-feedback">
                                    {{ __('Opss Name is Required') }} ! !
                                </div>
                            </div>
                        </div>



                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group row mb-4">
                                <label
                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Address')
                                    ({{ strtoupper($locale) }})
                                </label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="{{ $locale }}[address]" value="{{ old($locale . '.address') }}"
                                        class="summernote-simple">{{ old($locale . '.address') }} {{ $contact->translate($locale)->address}}</textarea>
                                    <div class="invalid-feedback">
                                        @lang('validation.Opss, This field is required')
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group row mb-4">
                            <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Image')</p>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control" name="image" >
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <p class="col-form-label text-md-right col-12 col-md-3 col-lg-3">@lang('dashboard.Select a Status')</p>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control" name="status">
                                    @if ($contact->status == 1)
                                        <option class="badge badge-success badge-shadow"  value="1"  selected ><i class="fas fa-check-circle"></i> @lang('dashboard.Active')</option>
                                        <option class="badge badge-danger badge-shadow" value="0"><i class="fas fa-check-circle"></i> @lang('dashboard.Not active')</option>
                                    @else
                                        <option class="badge badge-success badge-shadow"  value="1" ><i class="fas fa-check-circle"></i> @lang('dashboard.Active')</option>
                                        <option class="badge badge-danger badge-shadow"  value="0" selected ><i class="fas fa-check-circle"></i> @lang('dashboard.Not active')</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-success"><i class="fas fa-check"></i>
                                    @lang('dashboard.Update')</button>
                                <a href="{{ route('contacts.index') }}" class="btn btn-info"><i
                                        class="fas fa-arrow-circle-left"></i> @lang('dashboard.Back')</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
