

 <div class="navbar">
        <div class="logo"><a  href="{{Route('home')}}" style="text-decoration: none;"><strong>AUTO <span>NOLEGGIO</span></strong></a></div>
        <ul>
            <li><a href="{{Route('catalogo')}}">Catalogo Auto</a></li>
           

            @auth
                <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endauth
        </ul>
    </div>
