@extends('layout.layout')
@section('title', 'Annuaire des catégories')
@section('content')
<main>
    <!--Hero Section-->
    <section class="my-5 mx-3">
      <div class="container bg-light rounded-4 pe-lg-0 overflow-hidden">
        <div class="row align-items-center gy-5 gy-xl-0">
          <div class="col-lg-6 col-12">
            <div class="d-flex flex-column gap-4 px-lg-6 p-3">
              <div class="d-flex flex-column gap-3">
                <h1 class="mb-0 display-4 fw-bold">Explorer nos catégories </h1>
                <p class="mb-0 pe-xxl-8 me-xxl-5"> Découvrez une gamme variée de prestations adaptées à vos besoins. Que vous soyez à la recherche de solutions pour la création de sites web modernes, de développement d'applications, ou de services de gestion d'entreprise, nos catégories regroupent les meilleurs outils et services pour booster votre activité.</p>
              </div>
              <form>
                <div class="input-group shadow">
                  <label for="courseCategoryCourse" class="form-label visually-hidden">Find Mentor</label>
                  <input type="text" class="form-control rounded-start-3" id="categorie" name="categorie" placeholder="Rechercher une catégorie"  required="">
                  <button class="btn btn-primary" id="basic-addon2" type="submit">Rechercher</button>
                </div>
              </form>

            </div>
          </div>
          <div class="col-lg-6 col-12 d-none d-lg-block">
            <div class="text-center position-relative">
              <img src="../assets/images/course/woman-hero.png" alt="hero" class="position-relative z-3">
              <div class="position-absolute top-0 end-0 bottom-0">
                <img src="../assets/images/course/side-shape.svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Hero Section-->
    <!--explore categories-->
    <section class="py-xl-8 py-6">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 col-md-10 col-12 mx-auto">
            <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
              <h2 class="h1 mb-0">Catégories Populaires</h2>
              <p class="mb-0 px-xl-5">les formations les  plus professionelles vous attendent avec une equipe de qualite.</p>
            </div>
          </div>
        </div>
        <div class="row gy-4">
            @foreach ($category as $value )
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
            <div class="card-hover-svg card card-body d-flex flex-column gap-4">

              <div>
                <h3 class="mb-0">{{$value->name}}</h3>
                <span class="text-gray-500">
                  <span class="fw-bold">{{count($value->courses)}}</span>
                  Formation
                </span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <div class="d-flex justify-content-center">
        {{ $category->links() }}
    </div>

  </main>



@endsection
