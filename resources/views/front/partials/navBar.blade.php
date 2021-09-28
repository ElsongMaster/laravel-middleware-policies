<ul class="nav d-flex justify-content-center bg-success  m-2">
  <li class="nav-item"><a  href="{{route('home')}}" class="nav-link text-light  text-center @if(request()->routeIs('home')) active @else '' @endif">Accueil</a></li>
<li class="nav-item"><a  href="{{route('users.index')}}" class="nav-link text-light  text-center @if(request()->routeIs('utilisateurs.index')) active @else '' @endif">Testimonials</a></li>
            @if (Route::has('login'))
                    @auth
                       <li class="nav-item">
                         <a href="{{ route('back') }}" class="nav-link text-light">Dashboard</a>
                      </li> 
                    @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link text-light">Log in</a>
                    </li>
 

                      @if (Route::has('register'))
                        <li class="nav-item">
                          <a href="{{ route('register') }}" class="nav-link text-light  text-center @if(request()->routeIs('register')) active @else '' @endif">Register</a>
                        </li>
                            
                       @endif
                    @endauth
            @endif
</ul>