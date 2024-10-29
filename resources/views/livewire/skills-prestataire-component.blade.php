@section('title', 'Mes Performances')

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
                                <h3 class="h4 mb-0">Liste de vos performances</h3>
                                <button wire:click="toggleForm" class="btn btn-primary mb-3 btn-sm">
                                    {{ $showForm ? 'Annuler' : 'Nouvelle performance' }}
                                </button>
                            </div>

                            @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                            @endif

                            @if($showForm)
                                <div class="card p-3 mt-3 mx-2">
                                    <h5 class="mb-3">{{ $performanceId ? 'Modifier la performance' : 'Nouvelle Performance' }}</h5>
                                    <form wire:submit.prevent="savePerformance">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" wire:model="libelleperfomance" id="libelleperfomance" placeholder="Libellé de la performance">
                                            <label for="libelleperfomance">Libellé</label>
                                            @error('libelleperfomance') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <button type="submit" class="btn btn-success">Enregistrer</button>
                                    </form>
                                </div>
                            @else
                                <div class="table-responsive mt-3">
                                    <table class="table mb-0 table-hover table-centered text-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Libellé</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($listePerformances as $performance)
                                            <tr>
                                                <td>{{ $performance->libelleperfomance }}</td>
                                                <td>
                                                    <button wire:click="editPerformance({{ $performance->id }})" class="btn btn-warning btn-sm">Modifier</button>
                                                    <button wire:click="deletePerformance({{ $performance->id }})" class="btn btn-danger btn-sm">Supprimer</button>
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
