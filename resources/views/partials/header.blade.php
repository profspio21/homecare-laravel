<header @if(Route::current()->getName() != 'home') class="header-fixed"@endif id="header">
    <div class="container">
      <div id="logo" class="pull-left">
          <a href="{{ route('home') }}">
            <img src="../../img/logo.png" alt="Home Care">
          </a>
      </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="/">Home</a></li>
            <li><a href="#sen">Senior Club</a></li>
            <li><a href="#3">Service</a></li>
            <li><a href="#4">Contact</a></li>
            <li><a href="#5">Partner</a></li>
            <li><a href="career">Career</a></li>
          </ul>
        </nav>
    </div>
</header>