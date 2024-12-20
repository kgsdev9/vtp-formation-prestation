  <div class="col-lg-9 col-md-12 col-12">
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
                                    <!-- Étape 1 : Informations générales -->
                                    <div class="step" id="step1" style="display: {{ $currentStep === 1 ? 'block' : 'none' }};">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" wire:model="title" placeholder="Titre de la prestation">
                                            <label for="title">Titre de la Prestation</label>
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
                                            <label for="description">Décrivez le déroulement de la prestation</label>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <button type="button" class="btn btn-primary" wire:click="nextStep">Suivant</button>
                                    </div>

                                    <!-- Étape 2 : Séquences -->
                                    <div class="step" id="step2" style="display: {{ $currentStep === 2 ? 'block' : 'none' }};">
                                        <h2>Les différentes séquences de prestation</h2>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Titre de la séquence</th>
                                                    <th>Durée</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($sequences as $index => $sequence)
                                                <tr>
                                                    <td><input type="text" class="form-control" wire:model="sequences.{{ $index }}.title"></td>
                                                    <td><input type="number" class="form-control" wire:model="sequences.{{ $index }}.duration"></td>
                                                    <td><button type="button" class="btn btn-danger" wire:click="removeSequence({{ $index }})">Supprimer</button></td>
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
                                        <button type="submit" class="btn btn-success">Enregistrer la formation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif

                        <!-- Table des formations -->
                        <div class="table-invoice table-responsive">
                            <table class="table mb-0 text-nowrap table-centered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Libelle </th>
                                        <th scope="col">Prix </th>
                                        <th scope="col">Catégorie</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listeformation as $value)
                                    <tr>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->prix }} €</td>
                                        <td>{{ $value->category->name }}</td>
                                        <td>{{ $value->status == 1 ? 'Activé' : 'Non Activé' }}</td>
                                        <td class="text-end">
                                            <button class="btn btn-primary">Modifier</button>
                                            <button class="btn btn-danger">Supprimer</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $listeformation->links() }}
                        </div>

                    </div>
