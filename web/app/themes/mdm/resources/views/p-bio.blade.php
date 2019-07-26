{{--
  Template Name: Bio
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container biopic">
      @include('partials.page-header')
      @include('partials.content-page')
    </div>
  @endwhile

  <div class="container cv">
    lkjlklkklj
  </div>
@endsection
