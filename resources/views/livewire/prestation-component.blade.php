<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">


                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-12 col-12">

                        <button wire:click="toggleForm" class="btn btn-primary mb-3">
                            {{ $showForm ? 'Annuler' : 'Nouvelle prestation' }}
                        </button>

                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <!-- Formulaire -->
                        @if ($showForm)
                        <div class="card mb-12">
                            <div class="card-header border-bottom-0">
                                <h3 class="mb-0">Nouvelle prestation</h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="savePrestation">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="title" id="title" placeholder="Titre de la  prestation">
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

                                    <!-- Champ pour la durée -->
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" wire:model="duration" id="duration" placeholder="Durée (en heures)">
                                        <label for="duration">Durée (en heures)</label>
                                        @error('duration') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </form>

                            </div>
                        </div>
                        @endif

                        <!-- Table des prestations -->
                        <div class="table-invoice table-responsive">
                            <table class="table mb-0 text-nowrap table-centered table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Prix</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listeprestation as $value)
                                    <tr>
                                        <td>{{ $value->title }}</td>

                                        <td>{{ $value->prix }} € - {{ $value->prix * 650 }} FCFA</td>
                                        <td>{{ $value->description }}</td>
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
                                            <button wire:click="deletePrestation({{$value->id}})" class="fe fe-trash"></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</div>
