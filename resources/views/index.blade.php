@extends('layouts.index')

@section('header')

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>{{Voyager::setting('title')}}</h1>
                        <hr class="small">
                        <span class="subheading">{{Voyager::setting('description')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@stop

@section('content')

 <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               @foreach ($posts as $post)
                @include('partials.post',['post' => $post])
               @endforeach


                {{ $posts->links() }}
            </div>
        </div>


@stop