@section('title', 'Mes Formations')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')

                    <div class="col-lg-9 col-md-8 col-12">
                        <!-- Card -->
                        <div class="card border-0">
                            <!-- Card header -->
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="h4 mb-0">Liste des formations</h3>
                                <button wire:click="toggleForm" class="btn btn-primary mb-3 btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Nouvelle Formation' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if ($showForm)
                            <div class="card mb-12">

                                <div class="card-body">
                                    <form wire:submit.prevent="saveCourse">

                                        <div class="step" id="step1" style="display: {{ $currentStep === 1 ? 'block' : 'none' }};">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" wire:model="title" placeholder="Titre de la prestation">
                                                <label for="title">Titre de la formation</label>
                                                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 mb-3">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" wire:model="prix" placeholder="Prix">
                                                        <label for="prix">Prix</label>
                                                        @error('prix') <span class="text-danger">{{ $message }}</span> @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-5 mb-3">
                                                    <div class="form-floating">
                                                        <select class="form-control" wire:model="category_id">
                                                            <option value="">Choisir une catégorie</option>
                                                            @foreach($categories as $value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="category_id">Catégories</label>
                                                    </div>
                                                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <div class="form-floating">
                                                        <select class="form-control" wire:model="level_id">
                                                            <option value="">Choisir un niveau</option>
                                                            @foreach($levels as $value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <label for="level_id">Niveau</label>
                                                    </div>
                                                    @error('level_id') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <!-- Champs supplémentaires -->
                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="exercicescours">
                                                    <option value="">Oui ou Non</option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                                <label for="exercicescours">Exercices Cours</label>
                                                @error('exercicescours') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <select class="form-control" wire:model="supportcours">
                                                    <option value="">Oui ou Non</option>
                                                    <option value="oui">Oui</option>
                                                    <option value="non">Non</option>
                                                </select>
                                                <label for="supportcours">Support de Cours</label>
                                                @error('supportcours') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="url" class="form-control" wire:model="url_video" placeholder="Lien de la formation">
                                                <label for="url_video">Lien de la Formation (URL Vidéo)</label>
                                                @error('url_video') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" wire:model="duration" placeholder="Durée de la formation (en heures)">
                                                <label for="duration">Durée de la Formation (en heures)</label>
                                                @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control" wire:model="image" placeholder="Image de la formation">
                                                <label for="image">Image de la Formation</label>
                                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" wire:model="description" rows="4" placeholder="Description"></textarea>
                                                <label for="description">Décrivez le déroulement de la formation</label>
                                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <button type="button" class="btn btn-primary" wire:click="nextStep">Suivant</button>
                                        </div>

                                        <!-- Étape 2 : Séquences -->
                                        <div class="step" id="step2" style="display: {{ $currentStep === 2 ? 'block' : 'none' }};">
                                            <h2>Les différentes séquences de la formation</h2>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Titre de la séquence</th>
                                                        <th>Durée</th>
                                                        <th>TypeDuree</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sequences as $index => $sequence)
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control" wire:model="sequences.{{ $index }}.title" placeholder="Titre de la séquence">
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control" wire:model="sequences.{{ $index }}.duration" placeholder="Durée (en nombre)">
                                                            </td>
                                                            <td>
                                                                <select class="form-control" wire:model="sequences.{{ $index }}.typeduree">
                                                                    <option value="heure">Heures</option>
                                                                    <option value="minute">Minutes</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" wire:click="removeSequence({{ $index }})">Supprimer</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-secondary" wire:click="addSequence">Ajouter une séquence</button>
                                            <button type="button" class="btn btn-secondary" wire:click="prevStep">Précédent</button>
                                            <button type="button" class="btn btn-primary" wire:click="nextStep">Suivant</button>
                                        </div>

                                        <!-- Étape 3 : Points à retenir -->
                                        <div class="step" id="step3" style="display: {{ $currentStep === 3 ? 'block' : 'none' }};">
                                            <h2>Ce que vous retirerez de ce cours</h2>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Point à retenir</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($keyPoints as $index => $point)
                                                    <tr>
                                                        <td><input type="text" class="form-control" wire:model="keyPoints.{{ $index }}.point"></td>
                                                        <td><button type="button" class="btn btn-danger" wire:click="removeKeyPoint({{ $index }})">Supprimer</button></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-secondary" wire:click="addKeyPoint">Ajouter un point</button>
                                            <button type="button" class="btn btn-secondary" wire:click="prevStep">Précédent</button>
                                            <button type="submit" class="btn btn-success" wire:loading.attr="disabled">
                                                <span wire:loading wire:target="saveCourse" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Enregistrer la formation
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endif
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @foreach ($listeformation as $value)
                                    <li class="list-group-item px-0 pb-3 pt-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="#">
                                                <div class="d-lg-flex align-items-center">
                                                    <div>
                                                        <img src="{{asset('formation/'.$value->image)}}" alt="course" class="rounded img-4by3-lg">
                                                    </div>
                                                    <div class="ms-lg-3 mt-2 mt-lg-0">
                                                        <h4 class="text-primary-hover">
                                                            {{ $value->title }}

                                                        </h4>
                                                        <ul class="list-inline fs-6 mb-0 text-inherit">
                                                            <li class="list-inline-item">
                                                                <span class="align-text-bottom">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                                                                    </svg>
                                                                </span>
                                                                <span> {{ $value->duration}} H</span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                                </svg>
                                                                {{ $value->level->name}}
                                                            </li>

                                                        </li>
                                                        <li class="list-inline-item">
                                                            <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                            </svg>
                                                            {{ $value->prix}} €
                                                        </li>

                                                            <li class="list-inline-item">
                                                                <svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
                                                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
                                                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
                                                                </svg>
                                                                {{ $value->category->name}}
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                            <div>
                                                <!-- Dropdown -->
                                                <span class="dropdown dropstart">
                                                    <a class="text-reset" href="#" role="button" id="courseDropdown" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="true">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <span class="dropdown-menu" aria-labelledby="courseDropdown">
                                                        <!-- Option pour Éditer -->
                                                        <a class="dropdown-item" href="#" wire:click.prevent="editCourse({{ $value->id }})">
                                                            <span class="me-2">
                                                                <i class="bi bi-pencil-square text-secondary"></i>
                                                            </span>
                                                            <span>Éditer</span>
                                                        </a>

                                                        <!-- Option pour Supprimer -->
                                                        <a class="dropdown-item" href="#" wire:click.prevent="deleteCourse({{ $value->id }})">
                                                            <span class="me-2">
                                                                <i class="bi bi-trash text-danger"></i>
                                                            </span>
                                                            <span>Supprimer</span>
                                                        </a>

                                                    </span>
                                                </span>
                                            </div>

                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="mt-4">
                                {{ $listeformation->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>
