@extends('layout.layout')
@section('detail sur le prestataire')
@section('content')
<main>
    <!--hero section-->
    <section class="py-xl-8 py-6">
      <div class="container">
        <!--row-->
        <div class="row gy-4">
          <div class="col-xl-8 col-12">
            <div class="d-flex flex-column gap-4">
              <!--card-->
              <div class="card">
                <!--img-->
                <div class="rounded-top-3" style="background-image: url(../assets/images/mentor/mentor-single.png); background-position: center; background-size: cover; background-repeat: no-repeat; height: 228px"></div>
                <div class="card-body p-md-5">
                  <div class="d-flex flex-column gap-5">
                    <!--img-->
                    <div class="mt-n8">
                      <img src="../assets/images/mentor/mentor-img-single.jpg" alt="mentor 1" class="img-fluid rounded-4 mt-n8">
                    </div>
                    <div class="d-flex flex-column gap-5">
                      <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-md-row flex-column justify-content-between gap-2">
                          <!--heading-->
                          <div>
                            <h1 class="mb-0"> {{ $prestataire->nom_prestataire }} {{ $prestataire->prenom_prestataire }}</h1>
                            <!--content-->
                            <div class="d-flex flex-lg-row flex-column gap-2">
                              <small class="fw-medium text-gray-800">{{ $prestataire->type_prestation }}&nbsp;at&nbsp;Apple</small>
                              <small class="fw-medium text-success">7+ years in UX Design &amp; Brand Design.</small>
                            </div>
                          </div>
                          <!--button-->
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <a href="#!" class="btn btn-outline-white">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill me-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"></path>
                                </svg>
                              </span>
                              Ajouter au Favoris
                            </a>
                            <a href="#!" class="btn btn-outline-white">Contacter</a>
                          </div>
                        </div>
                        <div class="d-flex flex-md-row flex-column gap-md-4 gap-2">
                          <div class="d-flex flex-row gap-2 align-items-center lh-1">
                            <!--icon-->
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                              </svg>
                            </span>
                            <span>
                              <!--text-->
                              <span class="text-gray-800 fw-bold">5.0</span>
                              (16&nbsp;Avis)
                            </span>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center lh-1">
                            <!--icon-->
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                              </svg>
                            </span>
                            <!--text-->
                            <span>
                              <span class="text-gray-800 fw-bold">40+</span>
                             Likes
                            </span>
                          </div>
                          <div class="d-flex flex-row gap-2 align-items-center lh-1">
                            <!--icon-->
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"></path>
                              </svg>
                            </span>
                            <!--text-->
                            <span>{{ $prestataire->pays }},{{ $prestataire->ville }}</span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-column gap-2">
                        <!--heading-->
                        <h3 class="mb-0">Compétences</h3>

                        <div class="gap-2 d-flex flex-wrap">
                          <a href="#!" class="btn btn-tag btn-sm">Frontend</a>
                          <a href="#!" class="btn btn-tag btn-sm">HTML</a>
                          <a href="#!" class="btn btn-tag btn-sm">CSS</a>
                          <a href="#!" class="btn btn-tag btn-sm">React</a>
                          <a href="#!" class="btn btn-tag btn-sm">Javascript</a>
                          <a href="#!" class="btn btn-tag btn-sm">Vuejs</a>
                          <a href="#!" class="btn btn-tag btn-sm">Next.js</a>
                        </div>
                      </div>
                      <div>
                        <span class="badge rounded-pill text-success-emphasis bg-success-subtle border border-success align-items-center">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-reply-fill me-1 align-text-top" viewBox="0 0 16 16">
                              <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"></path>
                            </svg>
                          </span>
                          Répondeur rapide
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--card-->
              <div class="card">
                <!--card body-->
                <div class="card-body p-md-5 d-flex flex-column gap-3">
                  <!--heading-->
                  <h3 class="mb-0">A propos</h3>
                  <div class="d-flex flex-column">
                    <!--para-->
                    <p class="mb-1">
                        {{ $prestataire->description }}
                    </p>
                    <div class="collapse" id="collapseAbout">
                      <p class="my-3">
                        Ive helped businesses in US, Europe and Japan generate $200M+ in revenue, through my product design and branding skills. My top 3 industries are web3, AI and edtech.
                      </p>
                    </div>
                    <div>
                      <a class="btn-link" data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false" aria-controls="collapseAbout">Voir plus </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--card-->
              <div class="card">
                <!--card body-->
                <div class="card-body p-md-5">
                  <div class="d-flex flex-column gap-3">
                    <!--heading-->
                    <h3 class="mb-0">Compétences</h3>

                    <div class="gap-2 d-flex flex-wrap">
                      <a href="#!" class="btn btn-tag btn-sm">Frontend</a>
                      <a href="#!" class="btn btn-tag btn-sm">UX Design</a>
                      <a href="#!" class="btn btn-tag btn-sm">HTML</a>
                      <a href="#!" class="btn btn-tag btn-sm">UI Design</a>
                      <a href="#!" class="btn btn-tag btn-sm">CSS</a>
                      <a href="#!" class="btn btn-tag btn-sm">Landing page design</a>
                      <a href="#!" class="btn btn-tag btn-sm">Figma</a>
                      <a href="#!" class="btn btn-tag btn-sm">eCommerce Design</a>
                      <a href="#!" class="btn btn-tag btn-sm">React</a>
                      <a href="#!" class="btn btn-tag btn-sm">ReactJS</a>
                      <a href="#!" class="btn btn-tag btn-sm">Javascript</a>
                      <a href="#!" class="btn btn-tag btn-sm">Vuejs</a>
                      <a href="#!" class="btn btn-tag btn-sm">Next.js</a>
                    </div>
                  </div>
                </div>
              </div>
              <!--card-->
              <div class="card">
                <!--card body-->
                <div class="card-body p-md-5">
                  <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-between gap-2">
                    <!--heading-->
                    <div>
                      <h3 class="mb-0">Ce que disent les mentorés</h3>
                    </div>
                    <div>
                      <!--form-->
                      <form>
                        <div class="d-flex flex-row align-items-center gap-2">
                          <label for="exampleInputmentees" class="form-label text-nowrap mb-0">Sort by:</label>
                          <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select choices__input" data-choices="" aria-label="Default select example" id="exampleInputmentees" name="exampleInputmentees" hidden="" tabindex="-1" data-choice="active"><option value="Recommended" data-custom-properties="[object Object]">Recommended</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Recommended" data-custom-properties="[object Object]" aria-selected="true">Recommended</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--exampleInputmentees-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="1" data-select-text="" data-choice-selectable="" aria-selected="true">Most Recent</div><div id="choices--exampleInputmentees-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Recommended" data-select-text="" data-choice-selectable="">Recommended</div></div></div></div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="d-flex flex-column gap-3">
                    <div class="py-4 d-flex flex-column gap-3 border-bottom">
                      <div class="d-flex flex-row justify-content-between align-items-md-center">
                        <div class="d-flex flex-row gap-3 align-items-center">
                          <!--img-->
                          <div>
                            <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar 1" class="avatar avatar-lg rounded-circle">
                          </div>
                          <div>
                            <!--heading-->
                            <h4 class="mb-1">Satvik</h4>
                            <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                              <!--icons-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>
                                <small class="fw-medium">September 9, 2024</small>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <small>Plan:</small>
                          <small class="border-bottom">1 Month</small>
                        </div>
                      </div>
                      <!--para-->
                      <div>
                        <p class="mb-0">
                          The mentor was really knowledgeable and solved all my doubt regarding my Tech Stack and carrer as well.... if you are really confused or do need to know how to start your
                          DSA career have a session with Sir... it will really help you.
                        </p>
                      </div>
                      <!--link-->
                    </div>
                    <div class="py-4 d-flex flex-column gap-5 border-bottom">
                      <div class="d-flex flex-column gap-3">
                        <div class="d-flex flex-row justify-content-between align-items-md-center">
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <!--img-->
                            <div>
                              <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar 2" class="avatar avatar-lg rounded-circle">
                            </div>
                            <div>
                              <!--heading-->
                              <h4 class="mb-1">Monica</h4>
                              <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                                <!---icons-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                </span>
                                <!--text-->
                                <span>
                                  <small class="fw-medium">September 11, 2024</small>
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <small>Plan:</small>
                            <small class="border-bottom">3 Month</small>
                          </div>
                        </div>
                        <!--para-->
                        <div>
                          <p class="mb-0">Very good session with Jitu Chauhan. He listens to mentee clearly, note down things and device a proper plan to achieve those goals</p>
                        </div>
                      </div>
                      <div class="d-flex flex-column gap-3 ps-md-8">
                        <div class="d-flex flex-row gap-3 align-items-center">
                          <!--img-->
                          <div>
                            <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar 4" class="avatar avatar-lg rounded-circle">
                          </div>
                          <div class="d-flex flex-column gap-1">
                            <!--heading-->
                            <h4 class="mb-1">Jitu Chauhan</h4>
                            <div>
                              <span class="rounded-pill badge text-success-emphasis bg-success-subtle border border-success align-items-center fs-6">Mentor</span>
                            </div>
                          </div>
                        </div>
                        <!--para-->
                        <div>
                          <p class="mb-0">Very good session with Jitu Chauhan. He listens to mentee clearly, note down things and device a proper plan to achieve those goals</p>
                        </div>
                      </div>
                    </div>
                    <div class="py-4 d-flex flex-column gap-3 border-bottom">
                      <div class="d-flex flex-row justify-content-between align-items-md-center">
                        <div class="d-flex flex-row gap-3 align-items-center">
                          <!--img-->
                          <div>
                            <img src="../assets/images/avatar/avatar-3.jpg" alt="avatar 3" class="avatar avatar-lg rounded-circle">
                          </div>
                          <div>
                            <!--heading-->
                            <h4 class="mb-1">Levisa</h4>
                            <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                              <!--icons-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>
                                <small class="fw-medium">September 9, 2024</small>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div>
                          <small>Plan:</small>
                          <small class="border-bottom">2 Month</small>
                        </div>
                      </div>
                      <!--para-->
                      <div>
                        <p class="mb-0">I appreciate Jitu Chauhan patience to listen all the doubts and provided honest suggestions and roadmap according to my current situation. Thank you.</p>
                      </div>
                      <!--link-->
                    </div>
                    <!--button-->
                    <div>
                      <div class="collapse" id="collapseReview">
                        <div class="pb-4 d-flex flex-column gap-3 border-bottom">
                          <div class="d-flex flex-row justify-content-between align-items-md-center">
                            <div class="d-flex flex-row gap-3 align-items-center">
                              <!--img-->
                              <div>
                                <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar 1" class="avatar avatar-lg rounded-circle">
                              </div>
                              <div>
                                <!--heading-->
                                <h4 class="mb-1">Satvik</h4>
                                <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                                  <!--icons-->
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                    </svg>
                                  </span>
                                  <!--text-->
                                  <span>
                                    <small class="fw-medium">September 9, 2024</small>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div>
                              <small>Plan:</small>
                              <small class="border-bottom">1 Month</small>
                            </div>
                          </div>
                          <!--para-->
                          <div>
                            <p class="mb-0">
                              The mentor was really knowledgeable and solved all my doubt regarding my Tech Stack and carrer as well.... if you are really confused or do need to know how to start
                              your DSA career have a session with Sir... it will really help you.
                            </p>
                          </div>
                        </div>
                        <div class="py-4 d-flex flex-column gap-3">
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <!--img-->
                            <div>
                              <img src="../assets/images/avatar/avatar-4.jpg" alt="avatar 4" class="avatar avatar-lg rounded-circle">
                            </div>
                            <div class="d-flex flex-column gap-1">
                              <!--heading-->
                              <h4 class="mb-1">Jitu Chauhan</h4>
                              <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                                <!--icons-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                </span>
                                <!--text-->
                                <span>
                                  <small class="fw-medium">September 9, 2024</small>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!--para-->
                          <div>
                            <p class="mb-0">Very good session with Jitu Chauhan. He listens to mentee clearly, note down things and device a proper plan to achieve those goals</p>
                          </div>
                        </div>
                      </div>
                      <a id="loadMoreButton" class="btn btn-outline-primary" data-bs-toggle="collapse" href="#collapseReview" role="button" aria-expanded="false" aria-controls="collapseReview">
                       Charger plus d'avis
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-12">
            <!--card-->
            <div class="card">
              <!--card body-->
              <div class="card-body px-md-5 pt-2">
                <!--nav tab-->
                <ul class="nav nav-lb-tab mb-4" id="tab" role="tablist">
                  <li class="nav-item ms-0" role="presentation">
                    <a class="nav-link active" id="membership-tab" data-bs-toggle="pill" href="#membership" role="tab" aria-controls="membership" aria-selected="true">Membership Plan</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="session-tab" data-bs-toggle="pill" href="#session" role="tab" aria-controls="session" aria-selected="false" tabindex="-1">Sessions</a>
                  </li>
                </ul>
                <div class="tab-content" id="tabContent">
                  <div class="tab-pane fade active show" id="membership" role="tabpanel" aria-labelledby="membership-tab">
                    <div class="d-flex flex-column gap-4">
                      <!--heading-->
                      <h3 class="mb-0">
                        Book a
                        <span class="text-success">Free 1:1 Trial</span>
                        :&nbsp;To Plan Your Mentorship with&nbsp;Jitu Chauhan
                      </h3>
                      <div class="d-flex flex-column gap-3">
                        <!--content-->
                        <div class="d-flex flex-column gap-1">
                          <span>Starting from</span>
                          <div class="d-flex flex-row align-items-center gap-1">
                            <h3 class="mb-0 h2">$125.00</h3>
                            <small class="text-gray-800 fw-medium">/ Month</small>
                          </div>
                        </div>
                        <div class="d-flex flex-column gap-2">
                          <!--heading-->
                          <div>
                            <h4 class="mb-1">Every Month Of Mentorship</h4>
                          </div>
                          <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li class="d-flex flex-row gap-2">
                              <!--icon-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video text-primary" viewBox="0 0 16 16">
                                  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>1 session/week&nbsp;(1:1 Sessions)</span>
                            </li>
                            <li class="d-flex flex-row gap-2">
                              <!--icon-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill text-primary" viewBox="0 0 16 16">
                                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>Within 12hours&nbsp;(Chat Support)</span>
                            </li>
                            <li class="d-flex flex-row gap-2">
                              <!--icon-->
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-task text-primary" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5zM3 3H2v1h1z"></path>
                                  <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1z"></path>
                                  <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5zM2 7h1v1H2zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm1 .5H2v1h1z"></path>
                                </svg>
                              </span>
                              <!--text-->
                              <span>Everyday&nbsp;(Tasks &amp; Followup)</span>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="d-flex flex-column gap-3">
                        <a href="#!" class="btn btn-primary d-grid" data-bs-toggle="modal" data-bs-target="#signupModal">S'inscrire </a>
                        <span class="text-success fw-medium">Next Available:&nbsp;Tuesday June 05 2025</span>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="session" role="tabpanel" aria-labelledby="session-tab">
                    <div class="d-flex flex-column gap-4">
                      <div class="list-group">
                        <div class="list-group-item list-group-item-action p-3" aria-current="true">
                          <!--form-->
                          <div class="form-check">
                            <input class="form-check-input mt-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                            <label class="form-check-label" for="flexRadioDefault1">
                              <span class="d-flex flex-column">
                                <span class="fs-5 text-dark fw-semibold">Introductory Call</span>
                                <span class="">20 minutes, $39 per session</span>
                              </span>
                            </label>
                          </div>
                        </div>
                        <div class="list-group-item list-group-item-action p-3">
                          <!--form-->
                          <div class="form-check">
                            <input class="form-check-input mt-1" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                              <span class="d-flex flex-column">
                                <span class="fs-5 text-dark fw-semibold">Session Name with Call</span>
                                <span class="">30 minutes, $89 per session</span>
                              </span>
                            </label>
                          </div>
                        </div>
                        <div class="list-group-item list-group-item-action p-3">
                          <!--form-->
                          <div class="form-check">
                            <input class="form-check-input mt-1" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                              <span class="d-flex flex-column">
                                <span class="fs-5 text-dark fw-semibold">Session Name with Call</span>
                                <span class="">30 minutes, $89 per sessio</span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <!--button-->
                      <div class="d-grid">
                        <a href="#!" class="btn btn-primary">Book Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-xl-8 pb-6">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mb-4">Profile Similaire </h2>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
            <!--card-->
            <div class="card rounded-4 card-bordered card-lift">
              <div class="p-3 d-flex flex-column gap-3">
                <!--img-->
                <a href="#!">
                  <img src="../assets/images/mentor/mentor-img-2.jpg" alt="mentor 2" class="img-fluid w-100 rounded-4">
                </a>
                <!--content-->
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <div>
                      <div class="d-flex align-items-center gap-2">
                        <h3 class="mb-0">
                          <a href="#!" class="text-reset">Jessica Abney</a>
                        </h3>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill text-success" viewBox="0 0 16 16">
                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708"></path>
                          </svg>
                        </span>
                      </div>
                      <span class="text-gray-800">Frontend Engineer</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between fs-6">
                      <div>
                        <span>@ Target</span>
                        <div class="vr mx-2 text-gray-200"></div>
                        <span>2yrs Exp.</span>
                      </div>
                      <div class="d-flex gap-1 align-items-center lh-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                        </svg>

                        <span class="fw-bold text-dark">5.0</span>
                        <span>(34 Reviews)</span>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-row justify-content-between align-items-center">
                    <div>
                      <span>Starting from</span>
                      <div class="d-flex flex-row gap-1 align-items-center">
                        <h4 class="mb-1">$65.00</h4>
                        <span class="fs-6">/ Month</span>
                      </div>
                    </div>
                    <div>
                      <a href="#!" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#signupModal">Book a Free Trial</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>


@endsection
