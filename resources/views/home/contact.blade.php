@extends('layout.layout')

@section('content')
<main>
    <section class="py-8 bg-light">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <!-- Titre -->
            <h1 class="fw-bold mb-0 display-4 lh-1">Support</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Conteneur  -->
    <div class="pt-3">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <div>
              <!-- Fil d'Ariane -->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="help-center.html">Centre d'Aide</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Support</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Conteneur -->
    <section class="py-8">
      <div class="container my-lg-4">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <div class="d-flex flex-column gap-3">

              <div>
                <!-- Carte -->
                <div class="card border">
                  <!-- Corps de la carte -->
                  <div class="card-body d-flex flex-column gap-4">
                    <h2 class="mb-0 fw-semibold">Soumettre une Demande</h2>
                    <!-- Formulaire -->
                    <form class="needs-validation" action="" method="POST" novalidate="">
                      @csrf
                      <!-- Nom -->
                      <div class="mb-3">
                        <label class="form-label" for="name">Votre Nom</label>
                        <input class="form-control" type="text" name="name" placeholder="Votre nom" id="name" required="">
                        <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                      </div>

                      <!-- Email -->
                      <div class="mb-3">
                        <label class="form-label" for="email">
                          Adresse Email
                          <span class="text-danger">*</span>
                        </label>
                        <input class="form-control" type="email" name="email" placeholder="Adresse email ici" id="email" required="">
                        <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                      </div>

                      <!-- Description -->
                      <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea placeholder="Décrivez votre demande ici" id="description" name="description" rows="2" class="form-control" required=""></textarea>
                        <div class="invalid-feedback">Veuillez entrer une description.</div>
                      </div>

                      <!-- Bouton -->
                      <button class="btn btn-primary" type="submit">Soumettre</button>
                    </form>
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
