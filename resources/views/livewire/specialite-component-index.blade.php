@section('title', 'Mes Performances')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-8 col-12">
                        <div>
                            <div class="mb-4">
                                <button class="btn btn-primary" wire:click="toggleForm">
                                    {{ $showForm ? 'Annuler' : 'Ajouter Spécialité' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            @if ($showForm)
                                <div class="card mb-4">
                                    <div class="card-header">{{ $isEdit ? 'Modifier Spécialité' : 'Ajouter Spécialité' }}</div>
                                    <div class="card-body">
                                        <form wire:submit.prevent="{{ $isEdit ? 'updateSpecialite' : 'createSpecialite' }}">
                                            <div class="form-group">
                                                <label for="libelletypeprestation">Libellé Spécialité</label>
                                                <input type="text" id="libelletypeprestation" class="form-control" wire:model="libelletypeprestation">
                                                @error('libelletypeprestation') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3">{{ $isEdit ? 'Mettre à Jour' : 'Créer' }}</button>
                                        </form>
                                    </div>
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-header">Liste des Spécialités</div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Libellé</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($typesPrestation as $typePrestation)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $typePrestation->libelletypeprestation }}</td>
                                                    <td>
                                                        <button wire:click="editSpecialite({{ $typePrestation->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                                        <button wire:click="deleteSpecialite({{ $typePrestation->id }})" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette spécialité ?')">Supprimer</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="card-footer">
                                        {{ $typesPrestation->links() }} <!-- Utilise le thème Bootstrap automatiquement -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
