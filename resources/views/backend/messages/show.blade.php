@extends('backend.layouts.app')

@section('title', __('dashboard.Messages'))

@section('content')

        <section class="section">
            <ul class="breadcrumb breadcrumb-style ">
                <li class="breadcrumb-item">
                    <h4 class="page-title m-b-0">@lang('dashboard.Messages')</h4>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"> <a href="{{ route('messages.index') }}">@lang('dashboard.View')</a></li>
            </ul>
          <div class="section-body">
            <div class="row mt-sm-4">

              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">@lang('dashboard.Messages')</a>
                      </li>
                      @can('user-list')
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                          aria-selected="false">@lang('dashboard.Edit')</a>
                      </li>
                      @endcan
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>@lang('dashboard.Name')</strong>
                            <br>
                            <p class="text-muted">{{ $message->name }}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>@lang('dashboard.Start Time')</strong>
                            <br>
                            <p class="text-muted">{{ $message->start_time }}</p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>@lang('dashboard.End Time')</strong>
                            <br>
                            <p class="text-muted">{{ $message->end_time }}</p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>@lang('dashboard.Link')</strong>
                            <br>
                            <p class="text-muted">{{ $message->link }}</p>
                          </div>
                        </div>
                        <p class="m-t-30"><strong>@lang('dashboard.Description')</strong>
                            <br>
                            {!!  $message->description !!}
                        </p>

                      </div>
                      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                        <form method="post" class="needs-validation">
                          <div class="card-header">
                            <h4>Edit Profile</h4>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="form-group col-md-6 col-12">
                                <label>First Name</label>
                                <input type="text" class="form-control" value="John">
                                <div class="invalid-feedback">
                                  Please fill in the first name
                                </div>
                              </div>
                              <div class="form-group col-md-6 col-12">
                                <label>Last Name</label>
                                <input type="text" class="form-control" value="Deo">
                                <div class="invalid-feedback">
                                  Please fill in the last name
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input type="email" class="form-control" value="test@example.com">
                                <div class="invalid-feedback">
                                  Please fill in the email
                                </div>
                              </div>
                              <div class="form-group col-md-5 col-12">
                                <label>Phone</label>
                                <input type="tel" class="form-control" value="">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-12">
                                <label>Bio</label>
                                <textarea
                                  class="form-control summernote-simple">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias molestias minus quod dignissimos.</textarea>
                              </div>
                            </div>

                          </div>
                          <div class="card-footer text-right">
                            <button class="btn btn-success">@lang('dashboard.Update')</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

@endsection
