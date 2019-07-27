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
    @foreach ($item_curris as $item)
      <h3>{!! $item['epi_name'] !!}</h3>
      <ul>
          @foreach ( $item['items_curri'] as $item_cv )
          <li>
            <div class="fechas">
              <span class="inicio">{{ $item_cv['fecha']->format('Y') }}</span>
              @if ($item_cv['fecha_final'])
              @php
                  $fechafin = new DateTime($item_cv['fecha_final']);
              @endphp
              <span class="final"> - {{ $fechafin->format('Y') }}</span>
              @endif
            </div>
            <div class="contents">
                <h4>{!! $item_cv['title'] !!}</h4>
                {!! $item_cv['content'] !!}
            </div>
          </li>
          @endforeach
      </ul>
    @endforeach
  </div>
@endsection
