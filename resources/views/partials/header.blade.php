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
          <li><a href="/#seniorliving">Senior Living</a></li>
          <li><a href="/#service">Service</a></li>
          <li><a href="/#footer">Contact</a></li>
          {{-- <li><a href="#5">Partner</a></li> --}}
          <li><a href="career">Career</a></li>
        </ul>
      </nav>
      <div id="top-wa">
            <a href="https://api.whatsapp.com/send?phone=6285888076790&text=" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 18px;"></i> 0858 8807 6790</a>
          
      </div>

       
    </div>
</header>