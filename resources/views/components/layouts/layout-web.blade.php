<x-app
  pageogdesc="{{ $pageogdesc }}"
  pageogimage="{{ $pageogimage }}"
  pagetitle="{{ $pagetitle }}"
  class="web">
  <x-navbar-web/>
  {{ $slot }}
  <x-footer-web/>
</x-app>
