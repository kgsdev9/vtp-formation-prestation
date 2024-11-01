@extends('layout.layout')
@section('title', 'Annuaire des formations ')
@section('content')

<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="d-flex flex-column gap-5">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#!">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#!">Formation</a></li>
                <li class="breadcrumb-item" aria-current="page">Liste complete</li>
              </ol>
            </nav>
            <div class="d-flex flex-column">
              <h1 class="mb-0">Liste des formations</h1>
              <p class="mb-0">Nos Formations sont de classe mondiale et réalisés par les exprts du metier</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

		<div class="container py-5">
			<div class="row">
				<div class="col-lg-3 d-none d-lg-block">
					<aside class="sidebar-fixed">
						<nav class="navbar sidebar-courses navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
							<a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold fs-5 float-start py-1" href="dashboard.html">Menu</a>
							<button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="p-0 focus-none border-0 navbar-toggler collapsed">
								<span class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white float-end"><span class="fe fe-menu"></span></span>
							</button>
							<div class="navbar-collapse collapse" id="navbarNav">
								<div class="side-nav me-auto flex-column navbar-nav">



									<p class="navbar-header nav-item mb-2 p-0 text-dark mt-4">
										Niveau
									</p>

                                    @foreach ($level as $value)


									<div class="form-check my-1">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
										<label class="form-check-label ps-1" for="flexRadioDefault1">{{$value->name}}</label>
									</div>
                                    @endforeach




									<p class="navbar-header nav-item mb-2 p-0 text-dark  mt-4">
										CATEGORIES
									</p>
                                    @foreach ($categories as $value)
                                    <div class="form-check my-1">
										<input class="form-check-input" type="checkbox" value id="Illustration">
										<label class="form-check-label ps-1" for="Illustration">{{$value->name}}</label>
									</div>
                                    @endforeach






								</div>
							</div>
						</nav>
					</aside>
				</div>
				<div class="col-lg-9 col-sm-12">
					<div class="d-flex align-items-center gap-2 mb-3">
						<h3 class="pb-0 fw-bold text-dark m-0">Toutes nos formations </h3>
					</div>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                        @foreach ($allCourses as $course)
                        <div class="col-xl-4 col-md-6 col-12">

                            <div class="card card-lift">
                                <a href="{{ route('detail.course', $course->slug) }}">
                                  <img src="{{asset('sauvegarde/formation/'.$course->image)}}" alt="formation-image" class="card-img-top img-fluid w-100">
                                </a>
                                <div class="card-body d-flex flex-column gap-4">
                                  <div class="d-flex flex-column gap-2">
                                    <div>
                                      <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">{{$course->category->name}}</span>
                                    </div>
                                    <h3 class="mb-0 h4">
                                      <a href="{{ route('detail.course', $course->slug) }}" class="text-inherit">{{$course->title}}</a>
                                    </h3>

                                    <small class="text-secondary">{{$course->entreprise->nom_entreprise}}</small>
                                    <div class="lh-1">
                                      <span class="text-secondary fw-semibold">5.0</span>
                                      <span class="align-text-top">
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

                                      <span class="text-gray-500">{{rand(10, 30)}}</span>
                                    </div>
                                  </div>
                                  <div class="d-flex flex-row gap-2 align-items-center">
                                    <span class="fw-semibold text-dark">{{$course->prix}} € </span>

                                  </div>
                                </div>
                              </div>

                        </div>
					  @endforeach
					</div>
				</div>
			</div>
		</div>
@endsection
