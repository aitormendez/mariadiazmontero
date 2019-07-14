<header class="banner">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="filtros">
      @php
          // $menu_items = get_categories();
          // $walk = new App\Isotope_Walker();
          // print_r( $walk->walk( $menu_items, 0, 1 ) );

          // $walk = new App\Isotope_Walker();
          // wp_list_categories(['walker' => $walk]);
      @endphp

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
