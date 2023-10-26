<!--Navbar-->

<div class="navbar">
        <div class="logo"><a  href="{{ route('home') }}" style="text-decoration: none;"><strong>AUTO <span>NOLEGGIO</span></strong></a></div>
        <ul>

  
        <li><a href="{{route('catalogo')}}">Catalogo</a></li>
                @guest
                <li><a href="{{route('register')}}" id="registrati">Registrati</a></li>
                @endguest

                @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Area Admin</a></li>
    @endcan

    @can('isStaff')
        <li><a href="{{ route('staff') }}" class="highlight" title="Home Staff">Area Staff</a></li>
    @endcan
               
    @can('isUser')
        <li><a href="{{ route('cliente') }}" class="highlight" title="Home User">Pagina Cliente</a></li>
    @endcan

    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li><!--dopo aver stoppato il metodo standard attiviamo la form che non viene visualizzata(display:none) viene attivata da un ancora--> 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth

                @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Login</a></li>  
    @endguest

        <li><a href="{{route('document')}}" target="_blank">Documentazione</a></li>
            </ul>

        </div>

    </nav>
