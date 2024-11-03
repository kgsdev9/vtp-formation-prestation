@section('title', 'Liste des Cours')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header') <!-- Inclure l'en-tête -->

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar') <!-- Inclure la barre de navigation -->

                    <div class="col-lg-9 col-md-8 col-12">
                        <h2 class="mb-4">Liste des Cours</h2>

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header">Cours</div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Entreprise</th>
                                            <th>Catégorie</th>
                                            <th>Niveau</th>
                                            <th>Prix</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                            <tr>
                                                <td>{{ $course->title }}</td>
                                                <td>{{ $course->entreprise->nom_entreprise ?? 'N/A' }}</td>
                                                <td>{{ $course->category->name ?? 'N/A' }}</td>
                                                <td>{{ $course->level->name ?? 'N/A' }}</td>
                                                <td>{{ $course->prix }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                                    <button class="btn btn-danger btn-sm" wire:click="deleteCourse({{ $course->id }})" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?')">Supprimer</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="card-footer">
                                    {{ $courses->links() }} <!-- Pagination Bootstrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</div>
