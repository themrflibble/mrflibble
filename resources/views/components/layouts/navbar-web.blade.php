<nav class="navbar navbar-expand-lg navbar-dark bg-tempus-blue">
  <a
    class="navbar-brand pt-2 @if(route('home') == Request::url()) active @endif"
    href="{{ route('home') }}">
    Mark Thompson
  </a>

  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a
            class="nav-link @if(route('work') == Request::url()) active @endif"
            href="{{ route('work') }}">Work</a>
      </li>
      <li class="nav-item">
        <a
            class="nav-link @if(route('spare-time') == Request::url()) active @endif"
            href="{{ route('spare-time') }}">Spare Time</a>
      </li>
    </ul>
  </div>
</nav>
