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
                      <span class="text-primary">(13,245 notes)</span>
                    </span>
                    <span class="d-flex flex-row gap-2 align-items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"></path>
                      </svg>
                      <span class="text-secondary">992,240 students</span>
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
                <div class="accordion-single border" id="accordionExample">
                    @foreach ($listeepisode as $courseepisode)
                    <div class="accordion-item-single rounded-0">
                        <div class="accordion-header-single">
                          <div class="d-flex flex-row align-items-center justify-content-between">
                            <a class="h4 mb-0 collapsed" data-bs-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false" aria-controls="collapseOne">
                              <div class="d-flex align-items-center gap-3 flex-row">
                                <div>
                                  <span class="chevron-arrow">
                                    <i class="fe fe-chevron-down fs-4"></i>
                                  </span>
                                </div>
                                <div class="">
                                  <div class="">{{ $courseepisode->title}}</div>
                                </div>
                              </div>
                            </a>
                            <span class="d-flex flex-row gap-2 d-none d-md-block">
                              <span class="text-secondary fw-medium">2 lectures</span>
                              <span class="text-secondary fw-medium">5min</span>
                            </span>
                          </div>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                          <div class="accordion-body-single border-bottom">
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                              <li class="d-flex flex-row align-items-center justify-content-between gap-2">
                                <div class="d-flex flex-row gap-2 align-items-md-center">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                                    </svg>
                                  </span>

                                  <div>Introduction to Figma Essentials training course</div>
                                </div>
                                <div class="">
                                  <div class="d-flex flex-row gap-3">
                                    <div class="">
                                      <a href="#!" class="d-none d-md-block">Preview</a>
                                    </div>
                                    <div class="text-gray-500 d-none d-md-block">02:53</div>
                                  </div>
                                </div>
                              </li>
                              <li class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between gap-2">
                                <div class="d-flex flex-row gap-2 align-items-md-center">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                                    </svg>
                                  </span>

                                  <span>Getting started with Figma training</span>
                                </div>
                                <div class="d-none d-md-block">
                                  <span class="text-gray-500">03:11</span>
                                </div>
                              </li>
                              <li class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between gap-2">
                                <div class="d-flex flex-row gap-2 align-items-md-center">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z"></path>
                                    </svg>
                                  </span>

                                  <span>Difference Between UI and UX Design?</span>
                                </div>
                                <div class="d-none d-md-block">
                                  <span class="text-gray-500">03:11</span>
                                </div>
                              </li>
                              <li class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between gap-2">
                                <div class="d-flex flex-row gap-2 align-items-md-center">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                      <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2"></path>
                                      <path d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0"></path>
                                    </svg>
                                  </span>

                                  <span>Class project 01 - Create your own brief</span>
                                </div>
                                <div class="d-none d-md-block">
                                  <span class="text-gray-500">0.54kb</span>
                                </div>
                              </li>
                              <li class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between gap-2">
                                <div class="d-flex flex-row gap-2 align-items-md-center">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                                      <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1"></path>
                                    </svg>
                                  </span>

                                  <span>Quiz Title for the courses</span>
                                </div>
                                <div class="d-none d-md-block">
                                  <span class="text-gray-500">10 questions</span>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    @endforeach


                </div>
              </div>
              <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Ce que vous retirerez de ce cours</h2>

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

                  <div class="mt-3">
                    <a class="btn-collapse fw-semibold show-more" id="toggleButton" data-bs-toggle="collapse" href="#collapseContent" aria-expanded="true" aria-controls="collapseContent">Consulter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"></path></svg></a>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-column gap-3">
                <h2 class="mb-0">Formateurs</h2>
                <div class="border rounded-3 p-4 d-flex flex-column gap-5">
                  <div class="d-flex flex-row align-items-center gap-3">
                    <div class="position-relative">
                      <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle avatar-xl">
                      <a href="#!" class="position-absolute mt-7 ms-n4" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                        <img src="../assets/images/course/check.svg" alt="check" height="30" width="30">
                      </a>
                    </div>
                    <div>
                      <h3 class="mb-0 text-primary">{{$course->formateur->fullname}}</h3>
                      <span>Developer and Lead Instructor</span>
                    </div>
                  </div>
                  <div>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                      <li class="d-flex flex-row gap-2">
                        <span class="align-baseline lh-1">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7767_6877)">
                              <path d="M10.0001 14.7915L4.85677 17.4957L5.83927 11.7682L1.67261 7.71238L7.42261 6.87905L9.99427 1.66821L12.5659 6.87905L18.3159 7.71238L14.1493 11.7682L15.1318 17.4957L10.0001 14.7915Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                              <clipPath id="clip0_7767_6877">
                                <rect width="20" height="20" fill="white"></rect>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span>
                          <span class="fw-semibold">4.7</span>
                          Instructor Rating
                        </span>
                      </li>
                      <li class="d-flex flex-row gap-2">
                        <span class="align-baseline lh-1">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7767_6882)">
                              <path d="M6.66675 7.5H13.3334" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M6.66675 10.8333H10.4167" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M8.60417 16.3374L6.66667 17.4999V14.9999H5C4.33696 14.9999 3.70107 14.7365 3.23223 14.2677C2.76339 13.7988 2.5 13.163 2.5 12.4999V5.83325C2.5 5.17021 2.76339 4.53433 3.23223 4.06549C3.70107 3.59664 4.33696 3.33325 5 3.33325H15C15.663 3.33325 16.2989 3.59664 16.7678 4.06549C17.2366 4.53433 17.5 5.17021 17.5 5.83325V9.58325" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M14.8333 17.3475L13.0233 18.2958C12.9696 18.3238 12.9091 18.3362 12.8488 18.3318C12.7884 18.3275 12.7304 18.3064 12.6813 18.2709C12.6322 18.2355 12.5939 18.1871 12.5707 18.1311C12.5475 18.0752 12.5403 18.0139 12.55 17.9541L12.8958 15.945L11.4316 14.5225C11.3879 14.4802 11.357 14.4265 11.3423 14.3676C11.3277 14.3086 11.3299 14.2466 11.3488 14.1889C11.3676 14.1311 11.4023 14.0797 11.449 14.0407C11.4956 14.0018 11.5522 13.9767 11.6125 13.9683L13.6358 13.675L14.5408 11.8475C14.5679 11.793 14.6096 11.7473 14.6612 11.7152C14.7129 11.6832 14.7725 11.6663 14.8333 11.6663C14.8941 11.6663 14.9537 11.6832 15.0053 11.7152C15.057 11.7473 15.0987 11.793 15.1258 11.8475L16.0308 13.675L18.0541 13.9683C18.1142 13.9769 18.1706 14.0022 18.217 14.0412C18.2634 14.0803 18.298 14.1315 18.3168 14.1892C18.3356 14.2468 18.3379 14.3086 18.3235 14.3675C18.309 14.4264 18.2783 14.4801 18.235 14.5225L16.7708 15.945L17.1158 17.9533C17.1261 18.0132 17.1195 18.0748 17.0966 18.1311C17.0737 18.1874 17.0355 18.2362 16.9863 18.2718C16.9371 18.3075 16.8788 18.3286 16.8182 18.3329C16.7576 18.3371 16.697 18.3243 16.6433 18.2958L14.8333 17.3475Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                              <clipPath id="clip0_7767_6882">
                                <rect width="20" height="20" fill="white"></rect>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span class="fw-semibold">852,588</span>
                        Reviews
                      </li>
                      <li class="d-flex flex-row gap-2">
                        <span class="align-baseline lh-1">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7767_6890)">
                              <path d="M8.33325 10.8334C8.33325 11.2754 8.50885 11.6994 8.82141 12.0119C9.13397 12.3245 9.55789 12.5001 9.99992 12.5001C10.4419 12.5001 10.8659 12.3245 11.1784 12.0119C11.491 11.6994 11.6666 11.2754 11.6666 10.8334C11.6666 10.3914 11.491 9.96746 11.1784 9.6549C10.8659 9.34234 10.4419 9.16675 9.99992 9.16675C9.55789 9.16675 9.13397 9.34234 8.82141 9.6549C8.50885 9.96746 8.33325 10.3914 8.33325 10.8334Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M6.66675 17.5V16.6667C6.66675 16.2246 6.84234 15.8007 7.1549 15.4882C7.46746 15.1756 7.89139 15 8.33341 15H11.6667C12.1088 15 12.5327 15.1756 12.8453 15.4882C13.1578 15.8007 13.3334 16.2246 13.3334 16.6667V17.5" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M12.5 4.16667C12.5 4.60869 12.6756 5.03262 12.9882 5.34518C13.3007 5.65774 13.7246 5.83333 14.1667 5.83333C14.6087 5.83333 15.0326 5.65774 15.3452 5.34518C15.6577 5.03262 15.8333 4.60869 15.8333 4.16667C15.8333 3.72464 15.6577 3.30072 15.3452 2.98816C15.0326 2.67559 14.6087 2.5 14.1667 2.5C13.7246 2.5 13.3007 2.67559 12.9882 2.98816C12.6756 3.30072 12.5 3.72464 12.5 4.16667Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M14.1667 8.33325H15.8334C16.2754 8.33325 16.6994 8.50885 17.0119 8.82141C17.3245 9.13397 17.5001 9.55789 17.5001 9.99992V10.8333" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M4.16675 4.16667C4.16675 4.60869 4.34234 5.03262 4.6549 5.34518C4.96746 5.65774 5.39139 5.83333 5.83341 5.83333C6.27544 5.83333 6.69937 5.65774 7.01193 5.34518C7.32449 5.03262 7.50008 4.60869 7.50008 4.16667C7.50008 3.72464 7.32449 3.30072 7.01193 2.98816C6.69937 2.67559 6.27544 2.5 5.83341 2.5C5.39139 2.5 4.96746 2.67559 4.6549 2.98816C4.34234 3.30072 4.16675 3.72464 4.16675 4.16667Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M2.5 10.8333V9.99992C2.5 9.55789 2.67559 9.13397 2.98816 8.82141C3.30072 8.50885 3.72464 8.33325 4.16667 8.33325H5.83333" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                              <clipPath id="clip0_7767_6890">
                                <rect width="20" height="20" fill="white"></rect>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span class="fw-semibold">2,792,124</span>
                       Etudiants inscrits
                      </li>
                      <li class="d-flex flex-row gap-2">
                        <span class="align-baseline lh-1">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_7767_6900)">
                              <path d="M12.5 8.33343L16.2942 6.43677C16.4212 6.37329 16.5623 6.34333 16.7042 6.34972C16.846 6.35611 16.9839 6.39864 17.1047 6.47327C17.2255 6.5479 17.3252 6.65216 17.3944 6.77616C17.4636 6.90015 17.4999 7.03977 17.5 7.18177V12.8184C17.4999 12.9604 17.4636 13.1 17.3944 13.224C17.3252 13.348 17.2255 13.4523 17.1047 13.5269C16.9839 13.6016 16.846 13.6441 16.7042 13.6505C16.5623 13.6569 16.4212 13.6269 16.2942 13.5634L12.5 11.6668V8.33343Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M2.5 6.66667C2.5 6.22464 2.67559 5.80072 2.98816 5.48816C3.30072 5.17559 3.72464 5 4.16667 5H10.8333C11.2754 5 11.6993 5.17559 12.0118 5.48816C12.3244 5.80072 12.5 6.22464 12.5 6.66667V13.3333C12.5 13.7754 12.3244 14.1993 12.0118 14.5118C11.6993 14.8244 11.2754 15 10.8333 15H4.16667C3.72464 15 3.30072 14.8244 2.98816 14.5118C2.67559 14.1993 2.5 13.7754 2.5 13.3333V6.66667Z" stroke="#475569" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                            <defs>
                              <clipPath id="clip0_7767_6900">
                                <rect width="20" height="20" fill="white"></rect>
                              </clipPath>
                            </defs>
                          </svg>
                        </span>
                        <span class="fw-semibold">34</span>
                        Courses
                      </li>
                    </ul>
                  </div>
                  <div>
                    <p class="mb-3">I am an Innovation designer focussing on UX/UI based in Berlin. As a creative resident at Figma explored the city of the future and how new technologies.</p>
                    <a href="#!" class="fw-medium">Show Profile</a>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column flex-md-row align-items-md-center">
                  <span class="d-flex flex-row gap-2">
                    <span class="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                    </span>
                    <h2 class="mb-0">4.7évaluation du cours</h2>
                  </span>
                  <span class="d-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dot text-gray-500" viewBox="0 0 16 16">
                      <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"></path>
                    </svg>
                  </span>
                  <h2 class="mb-0">30 000 notes</h2>
                </div>
                <div class="row gy-4">
                  <div class="col-lg-6 col-12">
                    <div class="border rounded-3 p-4 d-flex flex-column gap-3">
                      <div class="d-flex flex-row gap-3">
                        <div>
                          <img src="../assets/images/avatar/avatar-10.jpg" alt="avatar" class="icon-shape icon-lg rounded-circle">
                        </div>
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h4">Max Hawkins</h3>
                            <div class="d-flex flex-row gap-2 lh-1">
                              <span class="align-text-top">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-400">1 Hour ago</span>
                            </div>
                          </div>
                          <p class="mb-0">Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.</p>
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <span>helpful?</span>
                            <div class="d-flex flex-row gap-2">
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                                </svg>
                              </a>
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                  <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="border rounded-3 p-4 d-flex flex-column gap-3">
                      <div class="d-flex flex-row gap-3">
                        <div>
                          <img src="../assets/images/avatar/avatar-9.jpg" alt="avatar" class="icon-shape icon-lg rounded-circle">
                        </div>
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h4">Jesica Manotn</h3>
                            <div class="d-flex flex-row gap-2 lh-1">
                              <span class="align-text-top">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-400">2 Hour ago</span>
                            </div>
                          </div>
                          <p class="mb-0">
                            I think it should have more downloadable resources for 'points to remember' or 'key learnings' kind of document for later reference after finishing each section.
                          </p>
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <span>helpful?</span>
                            <div class="d-flex flex-row gap-2">
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                                </svg>
                              </a>
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                  <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="border rounded-3 p-4 d-flex flex-column gap-3">
                      <div class="d-flex flex-row gap-3">
                        <div>
                          <img src="../assets/images/avatar/avatar-8.jpg" alt="avatar" class="icon-shape icon-lg rounded-circle">
                        </div>
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h4">Sam Nomanot</h3>
                            <div class="d-flex flex-row gap-2 lh-1">
                              <span class="align-text-top">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-400">1 Hour ago</span>
                            </div>
                          </div>
                          <p class="mb-0">Quisque semper aliquet lacinia. Ut molestie felis nec consectetur hendrerit. Aliquam eu viverra velit. In non leo ornare, ornare lorem elementum.</p>
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <span>helpful?</span>
                            <div class="d-flex flex-row gap-2">
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                                </svg>
                              </a>
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                  <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="border rounded-3 p-4 d-flex flex-column gap-3">
                      <div class="d-flex flex-row gap-3">
                        <div>
                          <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar" class="icon-shape icon-lg rounded-circle">
                        </div>
                        <div class="d-flex flex-column gap-3">
                          <div class="d-flex flex-column gap-1">
                            <h3 class="mb-0 h4">Listere Misto</h3>
                            <div class="d-flex flex-row gap-2 lh-1">
                              <span class="align-text-top">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                </svg>
                              </span>

                              <span class="text-gray-400">1 Hour ago</span>
                            </div>
                          </div>
                          <p class="mb-0">Lectures were at a really good pace and I never felt lost. The instructor was well informed and allowed me to learn and navigate Figma easily.</p>
                          <div class="d-flex flex-row gap-3 align-items-center">
                            <span>helpful?</span>
                            <div class="d-flex flex-row gap-2">
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                                </svg>
                              </a>
                              <a href="#!" class="text-inherit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                  <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"></path>
                                </svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <a href="#!" class="btn btn-outline-dark">Show More Reviews</a>
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
                    <a href="#!"><img src="{{asset('courss/images/'.$course->image)}}" alt="figma" class="img-fluid w-100 card-img-top"></a>
                    <div class="card-body d-flex flex-column gap-4">
                      <div class="d-flex flex-column gap-1">
                        <div class="d-flex flex-row gap-2 align-items-center">
                          <h3 class="h2 mb-0"> {{$course->prix}} €</h3>

                          <span class="text-dark fw-semibold">83% de reduction</span>
                        </div>
                        <div class="d-flex flex-row gap-2 align-items-center lh-1">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill text-danger" viewBox="0 0 16 16">
                              <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527"></path>
                            </svg>
                          </span>
                          <span class="text-danger fw-semibold">8h de promotion!</span>
                        </div>
                      </div>
                      <div class="d-grid flex-column gap-2">
                        <a href="#!" class="btn btn-primary">Acheter la formaiton</a>
                        <a href="#!" class="btn btn-outline-primary">Commander la formation</a>
                      </div>
                      <div class="text-center d-flex flex-column gap-2 text-gray-500">
                        <span class="">30-Garantie de remboursement de 30 jours</span>
                        <span class="">Accès complet à vie</span>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <ul class="list-unstyled mb-0 d-flex flex-column gap-4">
                        <li class="d-flex flex-row gap-3 align-items-center">
                          <div class="bg-light-primary text-primary icon-shape icon-lg rounded-circle flex-shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16.5 1.5H7.5C6.90326 1.5 6.33097 1.73705 5.90901 2.15901C5.48705 2.58097 5.25 3.15326 5.25 3.75V20.25C5.25 20.8467 5.48705 21.419 5.90901 21.841C6.33097 22.2629 6.90326 22.5 7.5 22.5H16.5C17.0967 22.5 17.669 22.2629 18.091 21.841C18.5129 21.419 18.75 20.8467 18.75 20.25V3.75C18.75 3.15326 18.5129 2.58097 18.091 2.15901C17.669 1.73705 17.0967 1.5 16.5 1.5ZM6.75 6H17.25V18H6.75V6ZM7.5 3H16.5C16.6989 3 16.8897 3.07902 17.0303 3.21967C17.171 3.36032 17.25 3.55109 17.25 3.75V4.5H6.75V3.75C6.75 3.55109 6.82902 3.36032 6.96967 3.21967C7.11032 3.07902 7.30109 3 7.5 3ZM16.5 21H7.5C7.30109 21 7.11032 20.921 6.96967 20.7803C6.82902 20.6397 6.75 20.4489 6.75 20.25V19.5H17.25V20.25C17.25 20.4489 17.171 20.6397 17.0303 20.7803C16.8897 20.921 16.6989 21 16.5 21Z" fill="#754FFE"></path>
                            </svg>
                          </div>
                          <span> Accédez à vos cours à tout moment et en tout lieu avec un ordinateur, une tablette ou un smartphone.</span>
                        </li>
                        <li class="d-flex flex-row gap-3 align-items-center">
                          <div class="bg-light-primary text-primary icon-shape icon-lg rounded-circle flex-shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM18 12C18 12.1989 17.921 12.3897 17.7803 12.5303C17.6397 12.671 17.4489 12.75 17.25 12.75H12C11.8011 12.75 11.6103 12.671 11.4697 12.5303C11.329 12.3897 11.25 12.1989 11.25 12V6.75C11.25 6.55109 11.329 6.36032 11.4697 6.21967C11.6103 6.07902 11.8011 6 12 6C12.1989 6 12.3897 6.07902 12.5303 6.21967C12.671 6.36032 12.75 6.55109 12.75 6.75V11.25H17.25C17.4489 11.25 17.6397 11.329 17.7803 11.4697C17.921 11.6103 18 11.8011 18 12Z" fill="#754FFE"></path>
                            </svg>
                          </div>
                          <span>Accès illimité. Suivez vos cours à votre rythme et à votre rythme..</span>
                        </li>
                        <li class="d-flex flex-row gap-3 align-items-center">
                          <div class="bg-light-primary text-primary icon-shape icon-lg rounded-circle flex-shrink-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.4163 9.87562L10.9163 6.87562C10.8033 6.80025 10.6719 6.75696 10.5363 6.75039C10.4006 6.74382 10.2657 6.77421 10.146 6.83831C10.0263 6.90241 9.9262 6.99782 9.85645 7.11436C9.7867 7.2309 9.74991 7.36419 9.75 7.5V13.5C9.74991 13.6358 9.7867 13.7691 9.85645 13.8856C9.9262 14.0022 10.0263 14.0976 10.146 14.1617C10.2657 14.2258 10.4006 14.2562 10.5363 14.2496C10.6719 14.243 10.8033 14.1998 10.9163 14.1244L15.4163 11.1244C15.5191 11.0559 15.6035 10.9631 15.6618 10.8542C15.7202 10.7452 15.7507 10.6236 15.7507 10.5C15.7507 10.3764 15.7202 10.2548 15.6618 10.1458C15.6035 10.0369 15.5191 9.94409 15.4163 9.87562ZM11.25 12.0984V8.90625L13.6481 10.5L11.25 12.0984ZM20.25 3.75H3.75C3.35218 3.75 2.97064 3.90804 2.68934 4.18934C2.40804 4.47064 2.25 4.85218 2.25 5.25V15.75C2.25 16.1478 2.40804 16.5294 2.68934 16.8107C2.97064 17.092 3.35218 17.25 3.75 17.25H20.25C20.6478 17.25 21.0294 17.092 21.3107 16.8107C21.592 16.5294 21.75 16.1478 21.75 15.75V5.25C21.75 4.85218 21.592 4.47064 21.3107 4.18934C21.0294 3.90804 20.6478 3.75 20.25 3.75ZM20.25 15.75H3.75V5.25H20.25V15.75ZM21.75 19.5C21.75 19.6989 21.671 19.8897 21.5303 20.0303C21.3897 20.171 21.1989 20.25 21 20.25H3C2.80109 20.25 2.61032 20.171 2.46967 20.0303C2.32902 19.8897 2.25 19.6989 2.25 19.5C2.25 19.3011 2.32902 19.1103 2.46967 18.9697C2.61032 18.829 2.80109 18.75 3 18.75H21C21.1989 18.75 21.3897 18.829 21.5303 18.9697C21.671 19.1103 21.75 19.3011 21.75 19.5Z" fill="#754FFE"></path>
                            </svg>
                          </div>
                          <span>Vidéos, quiz et contenu interactif.</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>


    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="mb-4">
              Plus de cours de &nbsp;
              <span class="border-bottom border-dark">Aenny Wilson</span>
            </h2>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-xl-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="course-single.html"><img src="../assets/images/course/course-react.jpg" alt="course" class="card-img-top"></a>
              <!-- Card body -->
              <div class="card-body">
                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                <!-- List inline -->
                <ul class="mb-3 list-inline">
                  <li class="list-inline-item">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                      </svg>
                    </span>
                    <span>3h 56m</span>
                  </li>
                  <li class="list-inline-item">
                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                    </svg>
                    Beginner
                  </li>
                </ul>
                <div class="lh-1">
                  <span class="align-text-top">
                    <span class="fs-6">
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
                  </span>
                  <span class="text-warning">4.5</span>
                  <span class="fs-6">(7,700)</span>
                </div>
              </div>
              <!-- Card footer -->
              <div class="card-footer">
                <!-- Row -->
                <div class="row align-items-center g-0">
                  <div class="col-auto">
                    <img src="../assets/images/avatar/avatar-1.jpg" class="rounded-circle avatar-xs" alt="avatar">
                  </div>
                  <div class="col ms-2">
                    <span>Morris Mccoy</span>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-inherit bookmark">
                      <i class="fe fe-bookmark fs-4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="course-single.html"><img src="../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top"></a>
              <!-- Card body -->
              <div class="card-body">
                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>
                <!-- List inline -->
                <ul class="mb-3 list-inline">
                  <li class="list-inline-item">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                      </svg>
                    </span>
                    <span>2h 46m</span>
                  </li>
                  <li class="list-inline-item">
                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
                    </svg>
                    Advance
                  </li>
                </ul>
                <div class="lh-1">
                  <span class="align-text-top">
                    <span class="fs-6">
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
                  </span>
                  <span class="text-warning">4.5</span>
                  <span class="fs-6">(9,300)</span>
                </div>
              </div>
              <!-- Card footer -->
              <div class="card-footer">
                <div class="row align-items-center g-0">
                  <div class="col-auto">
                    <img src="../assets/images/avatar/avatar-2.jpg" class="rounded-circle avatar-xs" alt="avatar">
                  </div>
                  <div class="col ms-2">
                    <span>Ted Hawkins</span>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-inherit bookmark">
                      <i class="fe fe-bookmark fs-4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="course-single.html"><img src="../assets/images/course/course-angular.jpg" alt="course" class="card-img-top"></a>
              <!-- Card body -->
              <div class="card-body">
                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>
                <ul class="mb-3 list-inline">
                  <li class="list-inline-item">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                      </svg>
                    </span>
                    <span>1h 30m</span>
                  </li>
                  <li class="list-inline-item">
                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                    </svg>
                    Beginner
                  </li>
                </ul>
                <div class="lh-1">
                  <span class="align-text-top">
                    <span class="fs-6">
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
                  </span>
                  <span class="text-warning">4.5</span>
                  <span class="fs-6">(8,890)</span>
                </div>
              </div>
              <!-- Card footer -->
              <div class="card-footer">
                <!-- Row -->
                <div class="row align-items-center g-0">
                  <div class="col-auto">
                    <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs" alt="avatar">
                  </div>
                  <div class="col ms-2">
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-inherit bookmark">
                      <i class="fe fe-bookmark fs-4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="course-single.html"><img src="../assets/images/course/course-python.jpg" alt="course" class="card-img-top"></a>
              <!-- Card body -->
              <div class="card-body">
                <h4 class="mb-2 text-truncate-line-2"><a href="course-single.html" class="text-inherit">The Python Course: build web application</a></h4>
                <ul class="mb-3 list-inline">
                  <li class="list-inline-item">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock align-baseline" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                      </svg>
                    </span>
                    <span>2h 30m</span>
                  </li>
                  <li class="list-inline-item">
                    <svg class="me-1 mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                      <rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
                      <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                    </svg>
                    Intermediate
                  </li>
                </ul>
                <div class="lh-1">
                  <span class="align-text-top">
                    <span class="fs-6">
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
                  </span>
                  <span class="text-warning">4.5</span>
                  <span class="fs-6">(13,245)</span>
                </div>
              </div>
              <!-- Card footer -->
              <div class="card-footer">
                <!-- Row -->
                <div class="row align-items-center g-0">
                  <div class="col-auto">
                    <img src="../assets/images/avatar/avatar-4.jpg" class="rounded-circle avatar-xs" alt="avatar">
                  </div>
                  <div class="col ms-2">
                    <span>Claire Robertson</span>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-inherit bookmark">
                      <i class="fe fe-bookmark fs-4"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--More course-->
  </main>



@endsection
