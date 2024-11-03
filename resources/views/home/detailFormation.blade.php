@extends('layout.layout')
@section('title', $course->title)
@section('content')
<main>
    <!--hero section-->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-column gap-5">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#!">Accueil</a></li>
                  <li class="breadcrumb-item"><a href="#!">Nos Formaitons </a></li>
                  <li class="breadcrumb-item" aria-current="page">{{ $course->title }} </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--hero section-->
    <!--Figma design-->
    <section class="py-md-5 pb-5">
      <div class="container">
        <div class="row gy-5 gx-xl-8">
          <div class="col-xl-8 col-12">
            <div class="d-flex flex-column gap-5 product-content">
              <div class="d-flex flex-column gap-5">
                <div class="d-flex flex-column gap-2">
                  <h1 class="mb-0 display-4">{{ $course->title }}</h1>
                  <p class="mb-0 lead text-gray-600">{{ $course->description}}</p>
                </div>
                <div class="d-flex flex-column gap-lg-3 gap-2">
                  <div class="d-flex flex-lg-row flex-column gap-2 gap-md-3 align-items-lg-center">
                    <span class="d-flex flex-row gap-2 lh-1 align-items-center">
                      <span class="text-secondary">4.5</span>
                      <span class="align-text-bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                          <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"></path>
                        </svg>
                      </span>
                      <span class="text-primary">{{rand(10, 48)}}</span>
                    </span>
                    <span class="d-flex flex-row gap-2 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                      </svg>
                      <span class="text-secondary">{{rand(10, 48)}} Personnnées inscrites</span>
                    </span>
                    <span class="d-flex flex-row gap-2 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle text-gray-500" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                      </svg>
                      <span class="text-secondary">Date de création {{$course->created_at }}</span>
                    </span>
                  </div>
                  <div class="d-flex gap-2">
                    <span class="d-flex flex-row gap-2 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe2 text-gray-500" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855q-.215.403-.395.872c.705.157 1.472.257 2.282.287zM4.249 3.539q.214-.577.481-1.078a7 7 0 0 1 .597-.933A7 7 0 0 0 3.051 3.05q.544.277 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9 9 0 0 1-1.565-.667A6.96 6.96 0 0 0 1.018 7.5zm1.4-2.741a12.3 12.3 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332M8.5 5.09V7.5h2.99a12.3 12.3 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.6 13.6 0 0 1 7.5 10.91V8.5zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741zm-3.282 3.696q.18.469.395.872c.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a7 7 0 0 1-.598-.933 9 9 0 0 1-.481-1.079 8.4 8.4 0 0 0-1.198.49 7 7 0 0 0 2.276 1.522zm-1.383-2.964A13.4 13.4 0 0 1 3.508 8.5h-2.49a6.96 6.96 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667m6.728 2.964a7 7 0 0 0 2.275-1.521 8.4 8.4 0 0 0-1.197-.49 9 9 0 0 1-.481 1.078 7 7 0 0 1-.597.933M8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855q.216-.403.395-.872A12.6 12.6 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.96 6.96 0 0 0 14.982 8.5h-2.49a13.4 13.4 0 0 1-.437 3.008M14.982 7.5a6.96 6.96 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zM11.27 2.461q.266.502.482 1.078a8.4 8.4 0 0 0 1.196-.49 7 7 0 0 0-2.275-1.52c.218.283.418.597.597.932m-.488 1.343a8 8 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"></path>
                      </svg>
                      <span class="text-secondary">Francais</span>
                    </span>
                    <span class="d-flex flex-row gap-1 align-items-center">
                      <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                        <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                        <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                      </svg>
                      <span class="text-secondary">{{$course->level->name}}</span>
                    </span>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Sommaire du cours </h2>
                <div class="accordion-single border" >
                    @foreach ($listeepisode as $courseepisode)
                    <div class="accordion-item-single rounded-0">
                        <div class="accordion-header-single">
                          <div class="d-flex flex-row align-items-center justify-content-between">
                            <a class="h4 mb-0 collapsed">
                              <div class="d-flex align-items-center gap-3 flex-row">

                                <div class="">
                                  <div class="">{{ $courseepisode->title}}</div>
                                </div>
                              </div>
                            </a>
                            <span class="d-flex flex-row gap-2 d-none d-md-block">
                              <span class="text-secondary fw-medium">{{ $courseepisode->duration}}</span>
                              <span class="text-secondary fw-medium">Heure</span>
                            </span>
                          </div>
                        </div>

                      </div>
                    @endforeach


                </div>
              </div>
              <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Information à retenir</h2>

                <div class="border rounded-3 p-4">

                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    @foreach ($listeensetielle as $listeesentielle)
                    <li class="d-flex flex-row gap-2">
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                          </svg>
                        </span>
                        <span>{{ $listeesentielle->key_points }}.</span>
                    </li>
                    @endforeach
                  </ul>

                </div>

              </div>

              <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Description</h2>
                <div class="border rounded-3 p-4 d-flex flex-column">
                  <div class="d-flex flex-column gap-3">
                    <p class="mb-0">
                        {{ $course->description }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="col-xl-4 col-12">
            <div id="sidebar" class="" style="">
              <div class="sidebar__inner" style="position: relative; transform: translate3d(0px, 0px, 0px);">
                <div class="d-flex flex-column gap-4">
                  <div class="card">
                    <a href="#!"><img src="{{asset('formation/'.$course->image)}}" alt="formation-image" class="img-fluid w-100 card-img-top"></a>
                    <div class="card-body d-flex flex-column gap-4">
                      <div class="d-grid flex-column gap-2">
                        <a href="{{route('buy.formation', $course->id)}}" class="btn btn-primary">Acheter la formaiton {{$course->prix}} €</a>

                      </div>
                      <div class="text-center d-flex flex-column gap-2 text-gray-500">
                        <span class="">Satisfait ou remboursé ! Inscrivez-vous à notre formation sans crainte. Si vous n'êtes pas entièrement satisfait dans les 30 jours, nous vous remboursons intégralement. Rejoignez-nous dès aujourd'hui !</span>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center">
                        <div class="position-relative">
                          <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle avatar-xl">
                          <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                            <img src="../assets/images/svg/checked-mark.svg" alt="checked-mark" height="30" width="30">
                          </a>
                        </div>
                        <div class="ms-4">
                          <h4 class="mb-0">{{$course->entreprise->nom_entreprise}}</h4>
                          <p class="mb-1 fs-6">{{$course->entreprise->adresse}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>



  </main>



@endsection
