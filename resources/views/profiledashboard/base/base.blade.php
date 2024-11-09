@extends('layout.layout')
@section('title', 'Mon profile')
@section('content')

<main>
    <section class="pt-5 pb-5">
      <div class="container">

     @include('profiledashboard.base.header')

        <!-- Content -->

        <div class="row mt-0 mt-md-4">
            @include('profiledashboard.nav-bar')
            @can('is_admin')
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                      <div class="p-4">
                        <span class="fs-6 text-uppercase fw-semibold">Visite du profil </span>
                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>
                        <span class="d-flex justify-content-between align-items-center">
                          <span>Visible de votre profile</span>
                          <span class="badge bg-success ms-2">0</span>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                      <div class="p-4">
                        <span class="fs-6 text-uppercase fw-semibold">Offre Disponible</span>
                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>
                        <span class="d-flex justify-content-between align-items-center">
                          <span>Offre d'emploi disponible</span>
                          <span class="badge bg-info ms-2">0</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card mb-4">
                      <div class="p-4">
                        <span class="fs-6 text-uppercase fw-semibold">Suivi Acompagnement</span>
                        <h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">0</h2>
                        <span class="d-flex justify-content-between align-items-center">
                          <span>Acompangnement suivi</span>
                          <span class="badge bg-warning ms-2">0+</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Card -->

                @can('admin')
                <div class="card mb-4">
                    <!-- Card header -->
                    <div class="card-header">
                      <h3 class="h4 mb-0">Best Selling Courses</h3>
                    </div>
                    <!-- Table -->
                    <div class="table-responsive">
                      <table class="table mb-0 table-hover table-centered text-nowrap">
                        <!-- Table Head -->
                        <thead class="table-light">
                          <tr>
                            <th>Courses</th>
                            <th>Sales</th>
                            <th>Amount</th>
                            <th></th>
                          </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="d-flex align-items-center">
                                  <img src="../assets/images/course/course-laravel.jpg" alt="course" class="rounded img-4by3-lg">
                                  <h5 class="ms-3 text-primary-hover mb-0">Building Scalable APIs with GraphQL</h5>
                                </div>
                              </a>
                            </td>
                            <td>34</td>
                            <td>$3,145.23</td>
                            <td>
                              <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                  <span class="dropdown-header">Setting</span>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                  </a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="d-flex align-items-center">
                                  <img src="../assets/images/course/course-sass.jpg" alt="course" class="rounded img-4by3-lg">
                                  <h5 class="ms-3 text-primary-hover mb-0">HTML5 Web Front End Development</h5>
                                </div>
                              </a>
                            </td>
                            <td>30</td>
                            <td>$2,611.82</td>
                            <td>
                              <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                  <span class="dropdown-header">Setting</span>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                  </a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="d-flex align-items-center">
                                  <img src="../assets/images/course/course-vue.jpg" alt="course" class="rounded img-4by3-lg">
                                  <h5 class="ms-3 text-primary-hover mb-0">Learn JavaScript Courses from Scratch</h5>
                                </div>
                              </a>
                            </td>
                            <td>26</td>
                            <td>$2,372.19</td>
                            <td>
                              <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                  <span class="dropdown-header">Setting</span>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                  </a>
                                </span>
                              </span>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <a href="#">
                                <div class="d-flex align-items-center">
                                  <img src="../assets/images/course/course-react.jpg" alt="course" class="rounded img-4by3-lg">
                                  <h5 class="ms-3 text-primary-hover mb-0">Get Started: React Js Courses</h5>
                                </div>
                              </a>
                            </td>
                            <td>20</td>
                            <td>$1,145.23</td>
                            <td>
                              <span class="dropdown dropstart">
                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown4" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                  <i class="fe fe-more-vertical"></i>
                                </a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                  <span class="dropdown-header">Setting</span>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-edit dropdown-item-icon"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <i class="fe fe-trash dropdown-item-icon"></i>
                                    Remove
                                  </a>
                                </span>
                              </span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                @endcan

              </div>
            @endcan

        </div>
      </div>
    </section>
  </main>

@endsection


