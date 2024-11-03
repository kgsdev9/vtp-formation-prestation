@section('title', 'Liste des Utilisateurs')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header') <!-- Inclure l'en-tête -->

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar') <!-- Inclure la barre de navigation -->

                    <div class="col-lg-9 col-md-8 col-12">
                        <h2 class="mb-4">Liste des Utilisateurs</h2>

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-header">Utilisateurs</div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Rôle</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role->name ?? 'N/A' }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm">Modifier</button>
                                                    <button class="btn btn-danger btn-sm" wire:click="confirmDelete({{ $user->id }})">Supprimer</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="card-footer">
                                    {{ $users->links() }} <!-- Pagination Bootstrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <script>
            window.addEventListener('confirm-delete', event => {
                // Afficher une confirmation d'alerte simple
                if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                    @this.call('deleteConfirmed'); // Appeler la méthode de suppression
                }
            });
        </script>
    </main>
</div>
