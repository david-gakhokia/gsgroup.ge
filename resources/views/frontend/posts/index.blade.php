@extends('frontend.layouts.app')

@section('title', __('News'))

@section('content')

	<div class="b-container">
		<div class="b-pressc-container b-pressc-container-all">
			<h2 class="b-head">@lang('home.Press Center')</h2>
		</div>
		<ul class="b-pressc-list b-pressc-list-all">
            @foreach ($posts as $item )
            <li >
                <a href="" data-href="" data-toggle="modal" class="b-news-box">
                    <span class="b-pic"><span class="b-pic-inner">
                            <img src="{{ asset('uploads/posts/'.$item->image) }}" alt="{{ $item->name }}">
                        </span></span>
                    <span class="b-item-body">
                        <span class="b-head">{{ $item->name }}</span>
                        <time class="b-time" datetime="1970-01-01">{{ $item->created_at }}</time>
                    </span>
                </a>
            </li>
            @endforeach
		</ul>
	</div>

@endsection
