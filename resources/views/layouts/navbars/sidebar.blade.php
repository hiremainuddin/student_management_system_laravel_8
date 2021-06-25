<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Main Uddin') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ $activePage == 'studentAdd' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/studentAdd') }}">
          <span class="sidebar-normal">{{ __('Student Data Create') }} </span>
        </a>
      </li>
      <li class="nav-item {{ $activePage == 'student_manage' ? ' active' : '' }}">
        <a class="nav-link" href="{{ url('/student_manage') }}">
          <span class="sidebar-normal">{{ __('Student management') }} </span>
        </a>
      </li>

<!--  <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <span class="sidebar-mini"> UP </span>
          <span class="sidebar-normal">{{ __('User profile') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
          <span class="sidebar-mini"> UM </span>
          <span class="sidebar-normal"> {{ __('User Management') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
