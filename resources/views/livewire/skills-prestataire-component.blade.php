<div>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row mt-0 mt-md-4">
                    @include('profiledashboard.nav-bar')
                    <div class="col-lg-9 col-md-12 col-12">

                        <button wire:click="toggleForm" class="btn btn-primary mb-3">
                            {{ $showForm ? 'Annuler' : 'Nouvelle Perfomance'}}
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
                                <h3 class="mb-0">Nouvelle Skills</h3>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="savePerfomance">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" wire:model="libelleperfomance" id="title" placeholder="Libelle de la prestation">
                                        <label for="libelleperfomance">Libelel de la prestation</label>
                                        @error('libelleperfomance') <span class="text-danger">{{ $message }}</span> @enderror
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
                                        <th scope="col">libelle perfomance</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listeprestation as $value)
                                    <tr>
                                        <td>{{ $value->libelleperfomance }}</td>

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
