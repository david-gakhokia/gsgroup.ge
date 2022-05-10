@extends('frontend.layouts.app')

@section('title', __('Contact'))

@section('content')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2 " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show mb-2 " role="alert">
            <strong>@lang('validation.Opps')</strong> @lang('validation.Something went wrong, please check below
            errors')<br><br>
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



    <div class="b-help-box">
        <div>
            <form action="{{ route('calls.store') }}" class="needs-validation" novalidate="" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="b-hb-container">
                    <div class="b-hb-text">
                        <div class="b-hb-head">გსურთ შეარჩიოთ აპარტამენტი?</div>
                        <p>შეავსეთ საკონტაქტო ფორმა, ჩვენ მალევე დაგიკავშირდებით</p>
                    </div>
                    <div class="b-hb-name">
                        <input type="text" data-type="name" name="name" class="b-hb-input"
                            placeholder="{{ __('Your Name') }}" required>
                    </div>
                    <div class="b-hb-phone">
                        <input type="number" data-type="phone" name="phone" class="b-hb-input"
                            placeholder="{{ __('Phone') }}" required>
                    </div>
                    <button type="submit" class="b-hb-send">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </div>


    <div class="b-help-box b-help-box-present">
        <form action="{{ route('calls.store') }}" class="needs-validation" novalidate="" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="b-hb-container">
                <div class="b-hb-text">
                    <div class="b-hb-head">{{ __('Download the presentation') }}</div>
                    <p>{{ __('Do you want to be contacted') }}</p>
                </div>
                <div class="b-hb-name">
                    <input type="text" data-type="name" name="name" class="b-hb-input"
                        placeholder="{{ __('Your Name') }}" required>
                </div>
                <div class="b-hb-phone">
                    <input type="number" data-type="phone" name="phone" class="b-hb-input"
                        placeholder="{{ __('Phone') }}" required>
                </div>
                <button type="submit" class="b-hb-send">{{ __('Submit') }}</button>
            </div>
        </form>
    </div>





@endsection
