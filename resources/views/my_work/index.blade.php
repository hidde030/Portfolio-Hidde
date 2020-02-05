
@extends('layouts.worklayout')
@section('title')
    Cards
@endsection
@section('content')

<div class="work">
        @foreach($products as $key => $product)
        <div class="column"  data-entry-id="{{ $product->id ?? '' }}">

            <div class="post-module">
                <!-- Thumbnail-->
                <div class="thumbnail">
                    <div class="date">
                        <div class="day">{{ $product->day ?? '' }}</div>
                        <div class="month">{{ $product->month ?? '' }}</div>
                    </div>
                    <div class="logo">
                        <img src="{{ $product->image ?? '' }}" class="{{ $product->title ?? '' }}" /></div>
                </div>
                <!-- Post Content-->
                <div class="post-content">
                    <div class="category">{{ $product->category ?? '' }}</div>
                    <h1 class="title">{{ $product->headtitle ?? '' }}</h1>
                    <h2 class="sub_title">{{ $product->sub_title ?? '' }}</h2>
                    <p class="description"> {{ $product->description ?? '' }}</p>
                    <div class="post-meta"><span class="timestamp"><i class="fa fa-clock">o</i> 6 mins ago</span><span
                            class="comments"><i class="fa fa-comments"></i><a href="/mijn-werk/{{ $product->slug ?? '' }}"> 39 comments</a></span></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
 
@section('scripts')
@parent
@endsection
@endsection


