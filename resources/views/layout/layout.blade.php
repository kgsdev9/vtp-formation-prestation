
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
<title>VTP FORMATION </title>
@livewireStyles
  </head>

  <body class="bg-white">
    <nav class="navbar navbar-expand-lg">
        <div class="container px-0">
            <a class="navbar-brand text-dark" href="/" >VTP SAS</a>
            <div class="ms-auto d-flex align-items-center order-lg-3">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#langaugeModal" class="text-inherit me-2" data-bs-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe text-gray-500" viewBox="0 0 16 16">
                            <pathd="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                        </svg>
                    </a>
                    @guest
                    <a href="{{route('auth.login')}}" class="btn btn-outline-dark btn-sm "> <i class="fe fe-user nav-icon"></i> Connexion</a>
                    <a href="{{route('become.teacher')}}" class="btn btn-dark d-none d-md-block btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                      </svg>   Commencer</a>
                    @else
                    <a href="{{route('dashboard.users')}}" class="btn btn-outline-dark btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"></path>
                          </svg> Dashboard {{Auth::user()->name}}
                    </a>
                    <a href="#" class="btn btn-dark d-none d-md-block btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"></path>
                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
                      </svg> Déconnexion</a>
                    @endguest
                </div>
            </div>
            <div>
                <!-- Button -->
                <button class="navbar-toggler collapsed ms-2"type="button"data-bs-toggle="collapse"data-bs-target="#navbar-default"aria-controls="navbar-default"aria-expanded="false"aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
                    <li class="nav-item dropdown"><a class="nav-link" href="#" id="navbarBrowse" >Accueil</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('formation.annuaire')}}" >Nos Formations</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('home.categorie')}}" >Nos Catégories</a></li>
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('formateur.annuaire')}}">Nos Prestataires</a></li>
                    <li class="nav-item dropdown"><a class="nav-link " href="#" >Qui Sommes Nous?</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="footer bg-light-stable py-8 mt-2">
    <div class="container">
        <div class="row gy-6 gy-xl-0 pb-8">
        <div class="col-xl-3 col-lg-12 col-md-6 col-12">
            <div class="d-flex flex-column gap-4">
            <div>
                VTP SAS
            </div>
            <p class="mb-0">VTP Formation est une plateforme spécialisée dans la formation et prestation destinée aux institutions et aux particuliers. Elle offre des cours variés pour le développement professionnel et personnel, avec des programmes flexibles adaptés à chaque besoin.</p>
            <div class="d-flex gap-2">
                <a href="#langaugeModal" class="btn btn-outline-secondary" data-bs-toggle="modal">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                    <path
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                    </svg>
                </span>

                </a>

            </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-6">
            <div class="d-flex flex-column gap-3">
            <span class="text-dark-stable">Ressources</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                <li>
                <a href="#!" class="nav-link">About us</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Contact us</a>
                </li>
                <li>
                <a href="#!" class="nav-link">News and Blogs</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Career</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Investors</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-xl-2 col-md-3 col-6">
            <div class="d-flex flex-column gap-3">
            <span class="text-dark-stable">Community</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                <li>
                <a href="#!" class="nav-link">Help and Support</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Affiliate</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Blog</a>
                </li>
                <li>
                <a href="#!" class="nav-link">Geeks Business</a>
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
                <li>
                <a href="#!" class="nav-link" target="_blank">VTP Livraison</a>
                </li>
                <li>
                <a href="#!" class="nav-link" target="_blank">Documentation</a>
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
                    Adresse :
                    <span class="fw-semibold">+1234 567 890</span>
                </li>
                <li>
                    Temps:
                    <span class="fw-semibold">9AM to 8:PM IST</span>
                </li>
                <li>
                    Email:
                    <span class="fw-semibold">vtp-sas@gmail.com</span>
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
        <!-- Links -->
        <div class="col-12 col-lg-6">
            <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
            <a class="nav-link active" href="{{route('CGU')}}">Conditions Générales d'Utilisation</a>
            <a class="nav-link" href="#!">Politique de confidentialité</a>
            <a class="nav-link" href="#!">Faq</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>
