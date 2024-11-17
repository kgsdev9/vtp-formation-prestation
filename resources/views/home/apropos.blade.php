@extends('layout.layout')
@section('title', 'A propos')
@section('content')
<main>
    <section class="container d-flex flex-column vh-100">
      <div class="row">
        <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
          <div class="mt-4 d-flex justify-content-between align-items-center">
            <a href="/" class="text-dark">VTP SAS </a>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
        <!-- Texte de présentation -->
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12 text-center text-lg-start">
          <h1 class="display-3 mb-2 fw-bold">Qui Sommes nous ?.</h1>
          <p class="mb-5 fs-4">
            VTP Formation est un organisme dédié à la formation professionnelle, spécialisé dans le développement de compétences pour entreprises et particuliers.
            Nous mettons à disposition des consultants expérimentés et des experts qualifiés prêts à accompagner nos clients dans leurs projets.
            Que vous soyez une entreprise cherchant à renforcer les compétences de votre équipe, ou un particulier souhaitant améliorer vos savoir-faire,
            nous avons des solutions adaptées pour vous aider à atteindre vos objectifs.
          </p>

          <hr class="my-5">

        </div>
        <!-- Vidéo de présentation -->
        <div class="offset-xl-1 col-xl-5 col-lg-6 col-md-12 col-12">
            <iframe
                width="100%"
                height="315"
                src="https://www.youtube.com/embed/zosmuKgGjDI"
                title="Présentation de VTP Formation"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
      </div>
      <!-- Pied de page -->
      <div class="row">
        <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-12">
          <div class="row align-items-center my-6">
            <div class="col-md-6 col-8">
              <p class="mb-0">© VTP Formation. Tous droits réservés.</p>
            </div>
            <div class="col-md-6 col-4 d-flex justify-content-end">
              <a href="#" class="text-primary-hover me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                </svg>
              </a>
              <a href="#" class="text-primary-hover me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                </svg>
              </a>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
