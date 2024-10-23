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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64" class="avatar-md">
                                                        <rect width="48" height="48" x="8" y="8" fill="#D9EAF7" rx="4"/>
                                                        <path fill="#4A90E2" d="M24 20h16v4H24v-4zm0 8h16v4H24v-4zm-6 8h4v12h-4V36zm6 0h4v12h-4V36zm6 0h4v12h-4V36zm6 0h4v12h-4V36zm6 0h4v12h-4V36zm0-20h6v12h-6V16z"/>
                                                      </svg>

                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Compte Entreprise</h4>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64" class="avatar-md">
                                                        <rect width="48" height="48" x="8" y="8" fill="#FFE5D9" rx="4"/>
                                                        <path fill="#F76C6C" d="M29.6 18.4l3 3L25.4 28l-3-3 7.2-6.6zm3.2 3.2l6.6-7.2 3 3-7.2 6.6-2.4-2.4zm-8 8l-8 8 3 3 8-8-3-3zm6.4 6.4l8-8 3 3-8 8-3-3zm-11.2 11.2l-3-3 6-6 3 3-6 6zm20-20l6-6 3 3-6 6-3-3z"/>
                                                      </svg>
                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Compte Prestation</h4>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64" class="avatar-md">
                                                        <rect width="48" height="48" x="8" y="8" fill="#E6F4F1" rx="4"/>
                                                        <path fill="#2EC4B6" d="M32 16a8 8 0 100 16 8 8 0 000-16zm0 12a4 4 0 110-8 4 4 0 010 8zm0 4c-6.63 0-12 4.92-12 11v2h24v-2c0-6.08-5.37-11-12-11zm-8 11c.32-3.03 3.67-7 8-7s7.68 3.97 8 7H24z"/>
                                                      </svg>

                                                </a>
                                                <div class="ms-3">
                                                    <h4 class="mb-1">Compte utilisateur</h4>
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
                                        <input type="text" wire:model="company_name" class="form-control @error('company_name') is-invalid @enderror" id="company_name" placeholder="Nom de l'entreprise">
                                        <label for="company_name">Nom de l'entreprise</label>
                                        @error('company_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- SIREN -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="siren" class="form-control @error('siren') is-invalid @enderror" id="siren" placeholder="SIREN">
                                        <label for="siren">SIREN</label>
                                        @error('siren')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Numéro TVA -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="numero_tva" class="form-control @error('numero_tva') is-invalid @enderror" id="numero_tva" placeholder="Numéro TVA">
                                        <label for="numero_tva">Numéro TVA</label>
                                        @error('numero_tva')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Type d'entreprise -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="type_entreprise" class="form-control @error('type_entreprise') is-invalid @enderror" id="type_entreprise" placeholder="Type d'entreprise">
                                        <label for="type_entreprise">Type d'entreprise</label>
                                        @error('type_entreprise')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Adresse -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="adresse" class="form-control @error('adresse') is-invalid @enderror" id="adresse" placeholder="Adresse">
                                        <label for="adresse">Adresse</label>
                                        @error('adresse')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Ville -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="ville" class="form-control @error('ville') is-invalid @enderror" id="ville" placeholder="Ville">
                                        <label for="ville">Ville</label>
                                        @error('ville')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Code Postal -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="code_postal" class="form-control @error('code_postal') is-invalid @enderror" id="code_postal" placeholder="Code Postal">
                                        <label for="code_postal">Code Postal</label>
                                        @error('code_postal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Pays -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="pays" class="form-control @error('pays') is-invalid @enderror" id="pays" placeholder="Pays">
                                        <label for="pays">Pays</label>
                                        @error('pays')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Téléphone -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="telephone" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Téléphone">
                                        <label for="telephone">Téléphone</label>
                                        @error('telephone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Site web -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="site_web" class="form-control @error('site_web') is-invalid @enderror" id="site_web" placeholder="Site web">
                                        <label for="site_web">Site web</label>
                                        @error('site_web')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Description" style="height: 100px;"></textarea>
                                        <label for="description">Description</label>
                                        @error('description')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Logo -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="file" wire:model="logo" class="form-control @error('logo') is-invalid @enderror" id="logo" placeholder="Logo">
                                        <label for="logo">Logo</label>
                                        @error('logo')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Nombre d'employés -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="number" wire:model="nombre_employes" class="form-control @error('nombre_employes') is-invalid @enderror" id="nombre_employes" placeholder="Nombre d'employés">
                                        <label for="nombre_employes">Nombre d'employés</label>
                                        @error('nombre_employes')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Chiffre d'affaires -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="number" wire:model="chiffre_affaires" class="form-control @error('chiffre_affaires') is-invalid @enderror" id="chiffre_affaires" placeholder="Chiffre d'affaires">
                                        <label for="chiffre_affaires">Chiffre d'affaires</label>
                                        @error('chiffre_affaires')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
                                        @error('nom_prestataire') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!-- Prénom du prestataire -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="prenom_prestataire" class="form-control" id="prenom_prestataire" placeholder="Prénom du prestataire">
                                        <label for="prenom_prestataire">Prénom du prestataire</label>
                                         @error('prenom_prestataire') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Type de prestation -->
                                <div class="col-md-6 mb-3">
                                    <select wire:model="typeprestation_id" id="type_prestation" class="form-control">
                                        <option value="">Sélectionnez un type de prestation</option>
                                        @foreach ($listetypeprestations as $type)
                                            <option value="{{ $type->id }}">{{ $type->libelletypeprestation }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Adresse -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="adresse" class="form-control" id="adresse" placeholder="Adresse">
                                        <label for="adresse">Adresse</label>
                                          @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Ville -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="ville" class="form-control" id="ville" placeholder="Ville">
                                        <label for="ville">Ville</label>
                                          @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!-- Pays -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="pays" class="form-control" id="pays" placeholder="Pays">
                                        <label for="pays">Pays</label>
                                          @error('pays') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!-- Téléphone -->
                                <div class="col-md-4 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="telephone" class="form-control" id="telephone" placeholder="Téléphone">
                                        <label for="telephone">Téléphone</label>
                                         @error('telephone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="email" wire:model="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                         @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!-- Site web -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="site_web" class="form-control" id="site_web" placeholder="Site web">
                                        <label for="site_web">Site web</label>
                                         @error('site_web') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <textarea wire:model="description" class="form-control" id="description" placeholder="Description" style="height: 100px;"></textarea>
                                        <label for="description">Description</label>
                                          @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="file" wire:model="photo" class="form-control" id="photo" placeholder="Photo">
                                        <label for="photo">Photo</label>
                                         @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input type="text" wire:model="identifiant" class="form-control" id="identifiant" placeholder="Identifiant">
                                        <label for="identifiant">Identifiant</label>
                                         @error('identifiant') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @elseif ($accountType === 'particulier')
                                                <div class="card-body">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nom">
                <label for="name">Nom</label>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email">
                <label for="email">Email</label>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Mot de passe">
                <label for="password">Mot de passe</label>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="form-floating">
                <input type="password" wire:model="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmer le mot de passe">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
</div>


                    @endif
                @endif


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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation de Select2

            $('#type_prestation').select2({
                placeholder: "Sélectionnez un type de prestation",
                allowClear: true
            });

            // Rafraîchir Select2 après chaque mise à jour Livewire
            Livewire.on('typePrestationUpdated', () => {
                $('#type_prestation').trigger('change');
            });
        });
    </script>


</div>


