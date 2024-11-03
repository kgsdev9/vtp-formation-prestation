@section('title', 'Liste des Prestataires')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')

                    <div class="col-lg-9 col-md-8 col-12">
                        <div>
                            <h2 class="mb-4">Liste des Prestataires</h2>

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-header">Prestataires</div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Adresse</th>
                                                <th>Ville</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($prestataires as $prestataire)
                                                <tr>
                                                    <td>{{ $prestataire->nom_prestataire }}</td>
                                                    <td>{{ $prestataire->prenom_prestataire }}</td>
                                                    <td>{{ $prestataire->adresse }}</td>
                                                    <td>{{ $prestataire->ville }}</td>
                                                    <td>{{ $prestataire->email }}</td>
                                                    <td>{{ $prestataire->telephone }}</td>
                                                    <td>
                                                     
                                                        <button class="btn btn-danger btn-sm"
                                                                wire:click="deletePrestataire({{ $prestataire->id }})"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce prestataire ?')">Supprimer</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="card-footer">
                                        {{ $prestataires->links() }} <!-- Pagination Bootstrap -->
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
