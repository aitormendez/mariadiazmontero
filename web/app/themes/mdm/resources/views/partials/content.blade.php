<a href="{{ get_permalink() }}" role="article" @php post_class() @endphp>
    <header>
      <h2 class="entry-title">{!! get_the_title() !!}</h2>
    </header>
    {!! the_post_thumbnail('iso-900') !!}
</a>
