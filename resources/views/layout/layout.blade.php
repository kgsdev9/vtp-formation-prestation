
<!doctype html>
<html lang="en">
  <head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="VTP FORMATION" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico" />
<link href="{{asset('assets/fonts/feather/feather.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
<title>@yield('title')</title>
@livewireStyles
  </head>

  <body class="bg-white">
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand text-dark" href="/" >VTP SAS</a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">

                    @guest
                    <a href="{{route('auth.login')}}" class="btn btn-outline-dark btn-sm "> <i class="fe fe-user nav-icon"></i> Connexion</a>
                    <a href="{{route('become.teacher')}}" class="btn btn-dark d-none d-md-block btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                      </svg>   Commencer</a>
                    @else
                    <a href="{{route('dashboard.users')}}" class="btn btn-outline-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                          </svg> Dashboard {{Str::limit(Auth::user()->name, 5)}}
                    </a>
                    <a href="#" class="btn btn-dark d-none d-md-block btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"></path>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
                      </svg> Déconnexion</a>
                    @endguest
                </div>
            </div>
            <div>
                <button class="navbar-toggler collapsed ms-2"type="button"data-bs-toggle="collapse"data-bs-target="#navbar-default"aria-controls="navbar-default"aria-expanded="false"aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('home.formation')}}" >Nos Formations</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('home.prestataire')}}">Nos Prestataires</a></li>
                    <li class="nav-item dropdown"><a class="nav-link " href="{{route('about')}}" >Qui Sommes Nous?</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="footer bg-dark-stable py-8 mt-2">
    <div class="container">
        <div class="row gy-6 gy-xl-0 pb-8">
        <div class="col-xl-3 col-lg-12 col-md-6 col-12">
            <div class="d-flex flex-column gap-4">
            <div>
                VTP SAS
            </div>
            <p class="mb-0">VTP Formation est une plateforme spécialisée dans la formation et prestation destinée aux institutions et aux particuliers. Elle offre des cours variés pour le développement professionnel et personnel, avec des programmes flexibles adaptés à chaque besoin.</p>

            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-6">
            <div class="d-flex flex-column gap-3">
            <span class="text-dark-stable">Ressources</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">

                <li>
                <a href="#!" class="nav-link">Dévenir Partenaire</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Nos Partenaires</a>
                </li>

            </ul>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-6">
            <div class="d-flex flex-column gap-3">
            <span class="text-dark-stable">Communauté</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                <li>
                <a href="{{route('contact')}}" class="nav-link">Aide et Support</a>
                </li>
                <li>
                <a href="{{route('home.prestataire')}}" class="nav-link">Nos Prestataires recommandés</a>
                </li>

            </ul>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-12">
            <div class="d-flex flex-column gap-3">
            <span class="text-dark-stable">Nos Plateformes</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                <li>
                <a href="https://vtp-market.com/" class="nav-link" target="_blank">Vtp Market </a>
                </li>


            </ul>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-12">
            <div class="d-flex flex-column gap-5">
            <div class="d-flex flex-column gap-3">
                <span class="text-dark-stable">Contact</span>
                <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                <li>
                    Email:
                    <span class="fw-semibold">vtp.sas.contact@gmail.com</span>
                </li>
                </ul>
            </div>
            <div class="d-flex flex-row gap-2">
                <a href="#"><img src="assets/images/svg/appstore.svg" alt="" class="img-fluid" /></a>
                <a href="#"><img src="assets/images/svg/playstore.svg" alt="" class="img-fluid" /></a>
            </div>
            </div>
        </div>
        </div>


        <div class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
        <!-- Desc -->
        <div class="col-lg-6 col-12 text-center text-md-start">
            <span>
            ©
            <span id="copyright">
                <script>
                document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
                </script>
            </span>
            GROUP VTP
            </span>
        </div>
        <div class="col-12 col-lg-6">
            <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
            <a class="nav-link active" href="{{route('CGU')}}">Conditions Générales d'Utilisation</a>
            <a class="nav-link" href="{{route('politique.confidentialite')}}">Politique de confidentialité</a>
            <a class="nav-link" href="{{route('faq')}}">Faq</a>
            </nav>
        </div>
        </div>
    </div>
    </footer>
    <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>
    @livewireScripts
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
  </body>
</html>
