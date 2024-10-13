<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="progress mb-4">
                    <div class="progress-bar" style="width: {{ ($step / 4) * 100 }}%;" role="progressbar"></div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if ($step === 1)
                    <div class="card">
                        <div class="card-header text-center">
                            Choisissez votre type de comptes
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Entreprise -->
                                <div class="col-12 col-md-4">
                                    <div class="card mb-4 card-hover">
                                        <div class="d-flex justify-content-between align-items-center p-4">
                                            <div class="d-flex">
                                                <a wire:click="selectAccountType('entreprise')" style="cursor: pointer;">
                                                    <img src="../assets/images/path/path-bootstrap.svg" alt="entreprise" class="avatar-md">
                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Entreprise</h4>
                                                    <p class="mb-0 fs-6">Ajouter les informations de votre entreprise.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Prestation -->
                                <div class="col-12 col-md-4">
                                    <div class="card mb-4 card-hover">
                                        <div class="d-flex justify-content-between align-items-center p-4">
                                            <div class="d-flex">
                                                <a wire:click="selectAccountType('prestation')" style="cursor: pointer;">
                                                    <img src="../assets/images/path/path-bootstrap.svg" alt="prestation" class="avatar-md">
                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Prestation</h4>
                                                    <p class="mb-0 fs-6">Ajouter les informations de votre prestation.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Particulier -->
                                <div class="col-12 col-md-4">
                                    <div class="card mb-4 card-hover">
                                        <div class="d-flex justify-content-between align-items-center p-4">
                                            <div class="d-flex">
                                                <a wire:click="selectAccountType('particulier')" style="cursor: pointer;">
                                                    <img src="../assets/images/path/path-bootstrap.svg" alt="particulier" class="avatar-md">
                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Particulier</h4>
                                                    <p class="mb-0 fs-6">Renseignez vos informations personnelles.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif ($step === 2)
                    <!-- Étape 2: Champs conditionnels -->
                    @if ($accountType === 'entreprise')
                    <div class="card">
                        <div class="card-header">Informations de l'entreprise</div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Nom de l'entreprise -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="company_name" class="form-control" id="company_name" placeholder="Nom de l'entreprise">
                                        <label for="company_name">Nom de l'entreprise</label>
                                    </div>
                                </div>
                                <!-- SIREN -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="siren" class="form-control" id="siren" placeholder="SIREN">
                                        <label for="siren">SIREN</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Numéro TVA -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="numero_tva" class="form-control" id="numero_tva" placeholder="Numéro TVA">
                                        <label for="numero_tva">Numéro TVA</label>
                                    </div>
                                </div>
                                <!-- Type d'entreprise -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="type_entreprise" class="form-control" id="type_entreprise" placeholder="Type d'entreprise">
                                        <label for="type_entreprise">Type d'entreprise</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Adresse -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="adresse" class="form-control" id="adresse" placeholder="Adresse">
                                        <label for="adresse">Adresse</label>
                                    </div>
                                </div>
                                <!-- Ville -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="ville" class="form-control" id="ville" placeholder="Ville">
                                        <label for="ville">Ville</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Code Postal -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="code_postal" class="form-control" id="code_postal" placeholder="Code Postal">
                                        <label for="code_postal">Code Postal</label>
                                    </div>
                                </div>
                                <!-- Pays -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="pays" class="form-control" id="pays" placeholder="Pays">
                                        <label for="pays">Pays</label>
                                    </div>
                                </div>
                                <!-- Téléphone -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="telephone" class="form-control" id="telephone" placeholder="Téléphone">
                                        <label for="telephone">Téléphone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" wire:model="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <!-- Site web -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="site_web" class="form-control" id="site_web" placeholder="Site web">
                                        <label for="site_web">Site web</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <textarea wire:model="description" class="form-control" id="description" placeholder="Description" style="height: 100px;"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Logo -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="file" wire:model="logo" class="form-control" id="logo" placeholder="Logo">
                                        <label for="logo">Logo</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Nombre d'employés -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="number" wire:model="nombre_employes" class="form-control" id="nombre_employes" placeholder="Nombre d'employés">
                                        <label for="nombre_employes">Nombre d'employés</label>
                                    </div>
                                </div>
                                <!-- Chiffre d'affaires -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="number" wire:model="chiffre_affaires" class="form-control" id="chiffre_affaires" placeholder="Chiffre d'affaires">
                                        <label for="chiffre_affaires">Chiffre d'affaires</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @elseif ($accountType === 'prestation')
                    <div class="card">
                        <div class="card-header">Informations du prestataire</div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Nom du prestataire -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="nom_prestataire" class="form-control" id="nom_prestataire" placeholder="Nom du prestataire">
                                        <label for="nom_prestataire">Nom du prestataire</label>
                                    </div>
                                </div>
                                <!-- Prénom du prestataire -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="prenom_prestataire" class="form-control" id="prenom_prestataire" placeholder="Prénom du prestataire">
                                        <label for="prenom_prestataire">Prénom du prestataire</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Type de prestation -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="type_prestation" class="form-control" id="type_prestation" placeholder="Type de prestation">
                                        <label for="type_prestation">Type de prestation</label>
                                    </div>
                                </div>
                                <!-- Adresse -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="adresse" class="form-control" id="adresse" placeholder="Adresse">
                                        <label for="adresse">Adresse</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Ville -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="ville" class="form-control" id="ville" placeholder="Ville">
                                        <label for="ville">Ville</label>
                                    </div>
                                </div>
                                <!-- Pays -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="pays" class="form-control" id="pays" placeholder="Pays">
                                        <label for="pays">Pays</label>
                                    </div>
                                </div>
                                <!-- Téléphone -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="telephone" class="form-control" id="telephone" placeholder="Téléphone">
                                        <label for="telephone">Téléphone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" wire:model="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <!-- Site web -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="site_web" class="form-control" id="site_web" placeholder="Site web">
                                        <label for="site_web">Site web</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <textarea wire:model="description" class="form-control" id="description" placeholder="Description" style="height: 100px;"></textarea>
                                        <label for="description">Description</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Photo -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="file" wire:model="photo" class="form-control" id="photo" placeholder="Photo">
                                        <label for="photo">Photo</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Identifiant -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="identifiant" class="form-control" id="identifiant" placeholder="Identifiant">
                                        <label for="identifiant">Identifiant</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif ($accountType === 'particulier')
                    <div class="card">
                        <div class="card-header">Informations du particulier</div>
                        <div class="card-body">
                            <div class="row">
                                <!-- Nom -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="name" class="form-control" id="name" placeholder="Nom">
                                        <label for="name">Nom</label>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" wire:model="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                        @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Mot de passe -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="password" wire:model="password" class="form-control" id="password" placeholder="Mot de passe">
                                        <label for="password">Mot de passe</label>
                                        @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="password" wire:model="password_confirmation" class="form-control" id="password" placeholder="Mot de passe">
                                        <label for="password">Confirmer le mot de passe </label>
                                    </div>
                                </div>
                                <!-- Rôle -->

                            </div>
                        </div>
                    </div>

                    @endif
                @endif

                <!-- Navigation entre les étapes -->
                <div class="mt-4">
                    @if ($step > 1)
                        <button wire:click="previousStep" class="btn btn-secondary">Étape précédente</button>
                    @endif
                    @if ($step === 2)

                    @if ($accountType === 'entreprise' || $accountType === 'prestation' || $accountType === 'particulier')
                    <button type="button" wire:click="submitForm" class="btn btn-primary" wire:loading.attr="disabled">
                        <!-- Spinner conditionnellement visible pendant la soumission -->
                        <span wire:loading.remove>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"></path>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"></path>
                            </svg>
                            Soumettre
                        </span>
                        <!-- Spinner visible pendant la soumission -->
                        <span wire:loading>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            En cours...
                        </span>
                    </button>

                    @endif
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
