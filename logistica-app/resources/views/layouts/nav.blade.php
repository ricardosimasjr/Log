<nav class="navbar fixed-top navbar-expand-lg bg-body-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ Vite::asset('resources/images/ico-agpmed.png') }}"
                alt="" width="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('transportadora.index')}}">Transportadoras</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Produtos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Grupos de Produtos</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Origens de NC's</a></li>
                        <li><a class="dropdown-item" href="">Tipos de NC's</a></li>
                        <li><a class="dropdown-item" href="">Indicações de NC's</a></li>
                        <li><a class="dropdown-item" href="">Status de NC's</a></li>
                        <li><a class="dropdown-item" href="">Item de NC's</a></li>
                        <li><a class="dropdown-item" href="">Tipo de Itens de NC's</a></li>
                        <li><a class="dropdown-item" href="">Status de SAC</a></li>
                        <li><a class="dropdown-item" href="">Canal de SAC</a></li>
                        <li><a class="dropdown-item" href="">Tipo de Ação SAC</a></li>
                        <li><a class="dropdown-item" href="">Síntese de Reclamação de SAC</a></li>
                        <li><a class="dropdown-item" href="">Máquinas</a></li>
                        <li><a class="dropdown-item" href="">Status da OP</a></li>
                        <li><a class="dropdown-item" href="">Tipo da OP</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Configurações</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Compliance
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">Compliance</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Origens de NC's</a></li>
                        <li><a class="dropdown-item" href="">Tipos de NC's</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        SAC
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="">SAC</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Status de SAC</a></li>
                        <li><a class="dropdown-item" href="">Canal de SAC</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Produção
                    </a>
                    <ul class="dropdown-menu">
                        <a class="nav-link active" aria-current="page" href="">Ordem de Produção</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="">Máquinas</a></li>
                        <li><a class="dropdown-item" href="">Status da OP</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Controle de Qualidade
                    </a>
                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="">Ops</a></li>

                    </ul>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Sair</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
