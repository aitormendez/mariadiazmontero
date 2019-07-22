<header class="banner">
  <div class="nombre">
    <div id="particles-js"></div>
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
  </div>

  <div class="solapa">
    <h3 class="epigrafe trabajos">Trabajos</h3>
    <nav class="filtros">
        <div class="button-group filter-button-group">
            <button class='todos' data-filter="*">Ver todos</button>
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
    @if (is_front_page())
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    @endif
  </div>
  <button class="hamburger hamburger--arrow" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
</header>
