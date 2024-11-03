<div class="col-lg-3 col-md-4 col-12">
    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light"
            type="button" data-bs-toggle="collapse" data-bs-target="#sidenav"
            aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <span class="navbar-header">Menu </span>
                <ul class="list-unstyled ms-n2 mb-4">
                    <!-- Nav item -->
                    <li class="nav-item {{ request()->is('dashboard.users') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.users') }}">
                            <i class="fe fe-home nav-icon"></i>Accueil
                        </a>
                    </li>

                    @can(['is_prestataire'])
                    <li class="nav-item {{ request()->routeIs('prestation.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('prestation.index') }}">
                            <i class="fe fe-briefcase nav-icon"></i> Projets
                            Mes Prestations
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('skills.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('skills.index') }}">
                            <i class="fe fe-award nav-icon"></i> Compétences
                             Mes Skills
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('projet.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('projet.index') }}">
                            <i class="fe fe-folder nav-icon"></i> Projets
                            Mes Projets
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('edition.prestataire.profile') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('edition.prestataire.profile') }}">
                            <i class="fe fe-book nav-icon"></i>Edition Profile
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('factures.*') ? 'active' : '' }}">
                        <a class="nav-link" href="#">
                            <i class="fe fe-file-text nav-icon"></i> Factures
                            Mes Factures
                        </a>
                    </li>
                    @endcan

                    @can(['is_entreprise'])
                    <li class="nav-item {{ request()->routeIs('formation.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('formation.index') }}">
                            <i class="fe fe-book nav-icon"></i>Gestion Formations
                        </a>
                    </li>
                    @endcan

                    @can('is_user')
                    <li class="nav-item {{ request()->routeIs('orders.users.liste') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('orders.users.liste') }}">
                            <i class="fe fe-star nav-icon"></i>Mes Commandes
                        </a>
                    </li>
                    @endcan
                </ul>

                <ul class="list-unstyled ms-n2 mb-0">
                    @can(['is_entreprise'])
                    <li class="nav-item {{ request()->routeIs('profile.entreprise') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('profile.entreprise') }}">
                            <i class="fe fe-settings nav-icon"></i>Modifier Mon Profile
                        </a>
                    </li>
                    @endcan

                    @can(['is_admin'])

                    <li class="nav-item {{ request()->routeIs('index.categorie') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index.categorie') }}">
                            <i class="fe fe-settings *nav-icon"></i>Gestion des catégories
                        </a>
                    </li>


                    <li class="nav-item {{ request()->routeIs('index.specialites') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('index.specialites') }}">
                            <i class="fe fe-settings nav-icon"></i>Gestion des specialites
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('entreprise.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('entreprise.index') }}">
                            <i class="fe fe-settings nav-icon"></i>Gestion des Entreprises
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('prestataires.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('prestataires.index') }}">
                            <i class="fe fe-settings nav-icon"></i>Gestion des Prestataires
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('courses.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('courses.index') }}">
                            <i class="fe fe-settings nav-icon"></i>Gestion des Cours
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('users.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="fe fe-settings nav-icon"></i>Gestion Users
                        </a>
                    </li>
                    @endcan

                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fe fe-power nav-icon"></i>
                            Déconnexion
                        </a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
</div>
