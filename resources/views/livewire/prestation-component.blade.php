@section('title', 'Mes Compétences')
<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="card mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h3 class="h4 mb-0">Liste de vos prestations</h3>
                                <button wire:click="toggleForm" class="btn btn-primary mb-3 btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Nouvelle prestation' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $prestationId ? 'Modifier la prestation' : 'Nouvelle prestation' }}</h5>
                                    <form wire:submit.prevent="savePrestation">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" wire:model="title" id="title" placeholder="Titre de la prestation">
                                            <label for="title">Nom complet</label>
                                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" wire:model="amount" id="amount" placeholder="Prix">
                                            <label for="amount">Prix</label>
                                            @error('amount') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" wire:model="description" id="description" placeholder="Description"></textarea>
                                            <label for="description">Description</label>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" wire:model="duration" id="duration" placeholder="Durée (en nombre)">
                                            <label for="duration">Durée</label>
                                            @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <!-- Nouveau champ type_duree -->
                                        <div class="form-floating mb-3">
                                            <select class="form-control" wire:model="type_duree" id="type_duree">
                                                <option value="heure">Heures</option>
                                                <option value="minute">Minutes</option>
                                            </select>
                                            <label for="type_duree">Type de Durée</label>
                                            @error('type_duree') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <button type="submit" class="btn btn-success">{{ $prestationId ? 'Mettre à jour' : 'Enregistrer' }}</button>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Intitulé</th>
                                                <th>Prix</th>
                                                <th>Description</th>
                                                <th>Durée</th> <!-- Ajout d'une colonne pour afficher la durée -->
                                                <th>Statut</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listeprestation as $value)
                                            <tr>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->prix }} €</td>
                                                <td>{{ $value->description }}</td>
                                                <td>
                                                    {{ $value->duree_estimee }} {{ $value->type_duree }}
                                                </td>
                                                <td>
                                                    @if ($value->status == 'en attente')
                                                        <span class="badge bg-warning">En cours</span>
                                                    @elseif ($value->status == 'echec')
                                                        <span class="badge bg-danger">Echec</span>
                                                    @elseif ($value->status == 'effectue')
                                                        <span class="badge bg-success">Validée</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button wire:click="editPrestation({{ $value->id }})" class="btn btn-sm btn-info">Modifier</button>
                                                    <button wire:click="deletePrestation({{ $value->id }})" class="btn btn-sm btn-danger">Supprimer</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
