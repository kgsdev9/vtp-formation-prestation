@extends('layout.layout')
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
                  <li class="breadcrumb-item"><a href="#!">Formateurs</a></li>
                  <li class="breadcrumb-item" aria-current="page">Annuaire des formateurs</li>
                </ol>
              </nav>
              <div class="d-flex flex-column">
                <h1 class="mb-0">Liste des prestataires</h1>
                <p class="mb-0">Nos Formateurs sont verifiés et on des competences requise pour vos projets.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--hero section-->
    <!--filter-->
    <section class="py-lg-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-xxl-3 col-lg-4 col-12">
            <div class="d-flex flex-column">
              <div class="d-flex flex-row align-items-center justify-content-between mt-2 mb-3">
                <div class="d-flex flex-row gap-2 align-items-center">
                  <a class="text-inherit d-none d-lg-flex gap-2" href="#">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"></path>
                      </svg>
                    </span>
                    <span class="fw-semibold text-dark">Filters</span>
                  </a>
                  <a class="text-inherit d-lg-none d-flex flex-row gap-2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"></path>
                      </svg>
                    </span>
                    <span class="fw-semibold text-dark">Filters</span>
                  </a>
                </div>
                <div>
                  <button id="clearButton" style="display: none" class="btn btn-light border btn-sm">
                    <span>Clear</span>
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"></path>
                      </svg>
                    </span>
                  </button>
                </div>
              </div>
              <div class="offcanvas offcanvas-start offcanvas-collapse" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header d-lg-none">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 p-lg-0">
                  <div class="d-flex flex-column gap-3">
                    <div class="card">
                      <div class="card-body p-3">
                        <div class="">
                          <!-- Toggle -->
                          <a class="d-flex align-items-center h4 mb-0 justify-content-between" data-bs-toggle="collapse" href="#coursTopic" role="button" aria-expanded="false" aria-controls="coursTopic">
                            <div>Topic</div>
                            <!-- Chevron -->
                            <span class="chevron-arrow ms-4">
                              <i class="fe fe-chevron-down fs-4"></i>
                            </span>
                          </a>
                          <!-- Row -->
                          <!-- Collapse -->
                          <div class="collapse show" id="coursTopic" data-bs-parent="#courseAccordion">
                            <div class="d-flex flex-column">
                              <ul class="list-unstyled mb-1 d-flex flex-column gap-1 mt-3">
                                @foreach ($allTags as $vallTags)
                                <li class="d-flex flex-row gap-2">
                                    <div class="form-check">
                                      <input class="form-check-input filter-checkbox" type="checkbox" name="flexReact" id="flexReact">
                                      <label class="form-check-label text-secondary" for="flexReact">{{$vallTags->name}}</label>
                                    </div>
                                  </li>
                                @endforeach
                              </ul>

                              <div class="mt-3">
                                <a class="btn-collapse fw-semibold" id="toggleButton" data-bs-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
                                  Consulter
                                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"></path>
                                  </svg>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xxl-9 col-lg-8 col-12">
            <div class="d-flex flex-column gap-3">

              <div class="row gy-4">
                @foreach ($allFormateurs as $vallFormateurs)
                <div class="col-xxl-4 col-xl-4 col-md-6 col-12">
                    <!--card-->
                    <div class="card rounded-4 card-bordered card-lift">
                      <div class="p-3 d-flex flex-column gap-3">
                        <!--img-->
                        <a href="{{route('detail.prestataire', $vallFormateurs->id)}}">
                          <img src="../assets/images/mentor/mentor-img-1.jpg" alt="mentor 1" class="img-fluid w-100 rounded-4">
                        </a>
                        <!--content-->
                        <div class="d-flex flex-column gap-4">
                          <div class="d-flex flex-column gap-2">
                            <div>
                              <div class="d-flex align-items-center gap-2">
                                <h3 class="mb-0">
                                  <a href="{{route('detail.prestataire', $vallFormateurs->id)}}" class="text-reset">{{$vallFormateurs->nom_prestataire}} {{$vallFormateurs->prenom_prestataire}}</a>
                                </h3>
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                                    <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"></path>
                                  </svg>
                                </span>
                              </div>
                              <span class="text-gray-800">{{$vallFormateurs->type_prestation}}</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between fs-6">
                              <div>
                                <span>Adresse</span>
                                <div class="vr mx-2 text-gray-200"></div>
                                <span>{{$vallFormateurs->adresse}}</span>
                              </div>
                              <div class="d-flex gap-1 align-items-center lh-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>

                                <span class="fw-bold text-dark">{{ number_format($vallFormateurs->average_rating, 2) }}</span>
                                <span> ({{count($vallFormateurs->notePrestations)}})</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-grid">
                            <a href="{{route('detail.prestataire', $vallFormateurs->id)}}
                                " class="btn btn-outline-secondary" >Consuler</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach

                  <div class="col-12">
                  <div>
                    <!-- Pagination -->
                    <nav>
                      <ul class="pagination mb-0">
                        <li class="page-item">
                          <a class="page-link mx-1 rounded" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                          </a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link mx-1 rounded" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link mx-1 rounded" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link mx-1 rounded" href="#">...</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link mx-1 rounded" href="#">6</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link mx-1 rounded" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--filter-->
  </main>



@endsection
