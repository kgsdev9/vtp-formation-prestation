@section('title', 'Mes Compétences')
<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mb-4 mb-lg-0">
                                    <img src="../assets/images/avatar/avatar-3.jpg" id="img-uploaded" class="avatar-xl rounded-circle" alt="avatar">
                                    <div class="ms-3">
                                        <h4 class="mb-0">Votre photo</h4>
                                        <p class="mb-0">PNG ou JPG, pas plus grand que 800px de large et de haut.</p>
                                    </div>
                                </div>

                            </div>
                            <hr class="my-5">
                            <div>
                                <h4 class="mb-0">Détails du prestataire</h4>
                                <p class="mb-4">Modifiez les informations personnelles et l'adresse.</p>
                                <!-- Form -->
                                <form wire:submit.prevent="updateProfile" class="row gx-3 needs-validation" novalidate="">
                                    <!-- Nom du prestataire -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="nom_prestataire">Nom</label>
                                        <input type="text" id="nom_prestataire" wire:model="nom_prestataire" class="form-control" placeholder="Nom" required="">
                                        <div class="invalid-feedback">Veuillez entrer le nom.</div>
                                    </div>
                                    <!-- Prénom du prestataire -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="prenom_prestataire">Prénom</label>
                                        <input type="text" id="prenom_prestataire" wire:model="prenom_prestataire" class="form-control" placeholder="Prénom" required="">
                                        <div class="invalid-feedback">Veuillez entrer le prénom.</div>
                                    </div>
                                    <!-- Adresse -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input type="text" id="adresse" wire:model="adresse" class="form-control" placeholder="Adresse" required="">
                                        <div class="invalid-feedback">Veuillez entrer l'adresse.</div>
                                    </div>
                                    <!-- Ville -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="ville">Ville</label>
                                        <input type="text" id="ville" wire:model="ville" class="form-control" placeholder="Ville" required="">
                                        <div class="invalid-feedback">Veuillez entrer la ville.</div>
                                    </div>
                                    <!-- Téléphone -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="telephone">Téléphone</label>
                                        <input type="text" id="telephone" wire:model="telephone" class="form-control" placeholder="Téléphone" required="">
                                        <div class="invalid-feedback">Veuillez entrer le numéro de téléphone.</div>
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" wire:model="email" class="form-control" placeholder="Email" required="">
                                        <div class="invalid-feedback">Veuillez entrer un email valide.</div>
                                    </div>
                                    <!-- Pays -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="pays">Pays</label>
                                        <input type="text" id="pays" wire:model="pays" class="form-control" placeholder="Pays" required="">
                                        <div class="invalid-feedback">Veuillez entrer le pays.</div>
                                    </div>
                                    <!-- Type de prestation -->
                                    <div class="mb-3 col-12 col-md-6">
                                        <label class="form-label" for="typepresatation_id">Type de prestation</label>
                                        <select id="typepresatation_id" wire:model="typepresatation_id" class="form-select" required="">
                                            @foreach ($listetypeprestation as $vlistetypeprestation)
                                            <option value="{{$vlistetypeprestation->id}}">{{$vlistetypeprestation->libelletypeprestation}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Veuillez choisir un type de prestation.</div>
                                    </div>
                                    <!-- Description -->
                                    <div class="mb-3 col-12">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea id="description" wire:model="description" class="form-control" placeholder="Description" required=""></textarea>
                                        <div class="invalid-feedback">Veuillez entrer une description.</div>
                                    </div>
                                    <div class="col-12">
                                        <!-- Bouton -->
                                        <button class="btn btn-primary" type="submit">Mettre à jour le prestataire</button>
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
