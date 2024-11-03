@section('title', 'Mes Formations')

<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                @include('profiledashboard.base.header')

                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')

                    <div class="col-lg-9 col-md-8 col-12">
                        <div>
                            <h2 class="mb-4">Liste des Entreprises</h2>

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <div class="card">
                                <div class="card-header">Entreprises</div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>SIREN</th>
                                                <th>Adresse</th>
                                                <th>Ville</th>
                                                <th>Email</th>
                                                <th>Téléphone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($entreprises as $entreprise)
                                                <tr>
                                                    <td>{{ $entreprise->nom_entreprise }}</td>
                                                    <td>{{ $entreprise->siren }}</td>
                                                    <td>{{ $entreprise->adresse }}</td>
                                                    <td>{{ $entreprise->ville }}</td>
                                                    <td>{{ $entreprise->email }}</td>
                                                    <td>{{ $entreprise->telephone }}</td>
                                                    <td>
                                                     
                                                        <button class="btn btn-danger btn-sm"
                                                                wire:click="deleteEntreprise({{ $entreprise->id }})"
                                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette entreprise ?')">Supprimer</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="card-footer">
                                        {{ $entreprises->links() }} <!-- Pagination Bootstrap -->
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
