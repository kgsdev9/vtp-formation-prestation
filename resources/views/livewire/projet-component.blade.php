@section('title', 'Mes Projets')

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
                                <h3 class="h4 mb-0">Liste de vos projets</h3>
                                <button wire:click="toggleForm" class="btn btn-primary mb-3 btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Nouveau projet' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $projectId ? 'Modifier le projet' : 'Nouveau Projet' }}</h5>
                                    <form wire:submit.prevent="saveProject">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" wire:model="title" placeholder="Titre du projet">
                                            <label for="title">Titre</label>
                                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" wire:model="slug" placeholder="Slug" readonly>
                                            <label for="slug">Slug</label>
                                            @error('slug') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" wire:model="description" placeholder="Description du projet"></textarea>
                                            <label for="description">Description</label>
                                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="url" class="form-control" wire:model="url" placeholder="Lien du projet">
                                            <label for="url">Lien du projet</label>
                                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" wire:model="is_published">
                                            <label class="form-check-label" for="is_published">Publié</label>
                                        </div>

                                        <button type="submit" class="btn btn-success">Enregistrer</button>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Titre</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                                <th>Lien</th>
                                                <th>Publié</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->title }}</td>
                                                <td>{{ $project->slug }}</td>
                                                <td>{{ $project->description }}</td>
                                                <td><a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a></td>
                                                <td>{{ $project->is_published ? 'Oui' : 'Non' }}</td>
                                                <td>
                                                    <button wire:click="editProject({{ $project->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                                    <button wire:click="deleteProject({{ $project->id }})" class="btn btn-danger btn-sm">Supprimer</button>
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
