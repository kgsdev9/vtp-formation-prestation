<div>
    <main class="bg-light">
      <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
          <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            <div class="card shadow">
              <!-- Card body -->
              <div class="card-body p-6 d-flex flex-column gap-4">
                <div class="text-center">
                  <a href="#" class="text-dark">VTP SAS </a>
                  <div class="d-flex flex-column gap-1">
                    <h1 class="mb-0 fw-bold text-center">Connexion</h1>
                    <span>
                      Vous n'avez pas de compte ?
                      <a href="/" class="ms-1 text-dark">Inscrivez-vous</a>
                    </span>
                  </div>
                </div>
                                <!-- Form Livewire -->
                <form wire:submit.prevent="login">
                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input type="email" id="signUpEmail" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="Email address here" required>
                        <label for="signUpEmail">Email</label>
                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input type="password" id="signUpPassword" class="form-control @error('password') is-invalid @enderror" wire:model="password" placeholder="**************" required>
                        <label for="signUpPassword">Password</label>
                        @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>

                    <!-- Bouton de soumission avec loader -->
                    <div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:target="login">
                                <span wire:loading wire:target="login" class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                Continuer
                            </button>
                        </div>
                    </div>

                    <!-- Affichage des erreurs de connexion -->
                    @if (session()->has('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif

                    <hr class="my-4">
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
