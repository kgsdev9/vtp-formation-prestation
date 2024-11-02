@section('title', 'Profile entreprise')
<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card-body">
                            @if ($successMessage)
                                <div class="alert alert-success" role="alert">
                                    {{ $successMessage }}
                                </div>
                            @endif
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-4 mb-lg-0">
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 100 100"
                                    width="100"
                                    height="100"
                                >
                                    <circle cx="50" cy="40" r="20" fill="#3498db" />
                                    <path
                                        d="M20 80 Q 50 60, 80 80"
                                        stroke="#2c3e50"
                                        stroke-width="3"
                                        fill="none"
                                    />
                                </svg>

                                    <div class="ms-3">
                                        <h4 class="mb-0">Nom de l'Entreprise</h4>
                                        <p class="mb-0">PNG ou JPG, pas plus grand que 800px de large et de haut.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-5">
                            <div>
                                <h4 class="mb-0">Détails de l'Entreprise</h4>
                                <p class="mb-4">Modifiez les informations de l'entreprise.</p>
                                <!-- Form -->
                                <form wire:submit.prevent="updateProfile" class="row gx-3 needs-validation" novalidate="">
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="nom_entreprise">Nom de l'Entreprise</label>
                                        <input type="text" id="nom_entreprise" wire:model="nom_entreprise" class="form-control" placeholder="Nom de l'Entreprise" required="">
                                        <div class="invalid-feedback">Veuillez entrer le nom de l'entreprise.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="siren">SIREN</label>
                                        <input type="text" id="siren" wire:model="siren" class="form-control" placeholder="SIREN" required="">
                                        <div class="invalid-feedback">Veuillez entrer le SIREN.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="numero_tva">Numéro de TVA</label>
                                        <input type="text" id="numero_tva" wire:model="numero_tva" class="form-control" placeholder="Numéro de TVA">
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="type_entreprise">Type d'Entreprise</label>
                                        <input type="text" id="type_entreprise" wire:model="type_entreprise" class="form-control" placeholder="Type d'Entreprise" required="">
                                        <div class="invalid-feedback">Veuillez entrer le type d'entreprise.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input type="text" id="adresse" wire:model="adresse" class="form-control" placeholder="Adresse" required="">
                                        <div class="invalid-feedback">Veuillez entrer l'adresse.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="ville">Ville</label>
                                        <input type="text" id="ville" wire:model="ville" class="form-control" placeholder="Ville" required="">
                                        <div class="invalid-feedback">Veuillez entrer la ville.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="code_postal">Code Postal</label>
                                        <input type="text" id="code_postal" wire:model="code_postal" class="form-control" placeholder="Code Postal" required="">
                                        <div class="invalid-feedback">Veuillez entrer le code postal.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="pays">Pays</label>
                                        <input type="text" id="pays" wire:model="pays" class="form-control" placeholder="Pays" required="">
                                        <div class="invalid-feedback">Veuillez entrer le pays.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="telephone">Téléphone</label>
                                        <input type="text" id="telephone" wire:model="telephone" class="form-control" placeholder="Téléphone" required="">
                                        <div class="invalid-feedback">Veuillez entrer le numéro de téléphone.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" wire:model="email" class="form-control" placeholder="Email" required="">
                                        <div class="invalid-feedback">Veuillez entrer un email valide.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="site_web">Site Web</label>
                                        <input type="url" id="site_web" wire:model="site_web" class="form-control" placeholder="Site Web">
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea id="description" wire:model="description" class="form-control" placeholder="Description" required=""></textarea>
                                        <div class="invalid-feedback">Veuillez entrer une description.</div>
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="nombre_employes">Nombre d'Employés</label>
                                        <input type="number" id="nombre_employes" wire:model="nombre_employes" class="form-control" placeholder="Nombre d'Employés">
                                    </div>
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="chiffre_affaires">Chiffre d'Affaires</label>
                                        <input type="text" id="chiffre_affaires" wire:model="chiffre_affaires" class="form-control" placeholder="Chiffre d'Affaires">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Mettre à jour l'entreprise</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
