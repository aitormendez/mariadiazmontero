<header class="banner">

    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="filtros">
        <div class="button-group filter-button-group">
            <button data-filter="*">Ver todos</button>
        </div>
      @foreach ($filtros as $grupo)
      @php
        $keys = array_keys($grupo);
      @endphp

      <div class="button-group filter-button-group">
          <button class='todos' data-filter=".category-{{ $grupo[$keys[0]]['slug'] }}">{{ $grupo[$keys[0]]['nombre'] }}</button>
          @if (count($grupo) == 2)
            @foreach ($grupo[$keys[1]] as $item)
            <button class='cat' data-filter=".category-{{ $item['slug'] }}">{{ $item['nombre'] }}</button>
            @endforeach
          @endif
      </div>

      @endforeach
    </nav>
</header>
