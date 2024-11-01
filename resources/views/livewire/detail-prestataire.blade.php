
<div>
    <main>
        <!--hero section-->
        <section class="py-xl-8 py-6">
          <div class="container">
            <!--row-->
            <div class="row gy-4">
              <div class="col-xl-8 col-12">
                <div class="d-flex flex-column gap-4">
                  <!--card-->
                  <div class="card">
                    <!--img-->
                    <div class="rounded-top-3" style="background-image: url('{{ asset('mentor-background.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat; height: 228px"></div>
                    <div class="card-body p-md-5">
                      <div class="d-flex flex-column gap-5">
                        <!--img-->
                        <div class="mt-n8">
                          <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}" alt="mentor 1" class="img-fluid rounded-4 mt-n8 w-20">
                        </div>
                        <div class="d-flex flex-column gap-5">
                          <div class="d-flex flex-column gap-3">
                            <div class="d-flex flex-md-row flex-column justify-content-between gap-2">
                              <!--heading-->
                              <div>
                                <h1 class="mb-0"> {{ $prestataire->nom_prestataire }} {{ $prestataire->prenom_prestataire }}</h1>
                                <!--content-->
                                <div class="d-flex flex-lg-row flex-column gap-2">

                                  <small class="fw-medium text-success">{{ $prestataire->typeprestation->libelletypeprestation }}</small>
                                </div>
                              </div>
                              <!--button-->
                              <div class="d-flex flex-row gap-3 align-items-center">

                                <a href="#!" class="btn btn-outline-white">Me Faire mentorer</a>
                              </div>
                            </div>
                            <div class="d-flex flex-md-row flex-column gap-md-4 gap-2">
                              <div class="d-flex flex-row gap-2 align-items-center lh-1">
                                <!--icon-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                  </svg>
                                </span>
                                <span>
                                  <!--text-->
                                  <span class="text-gray-800 fw-bold"> {{ number_format($prestataire->average_rating, 2) }}</span>
                                  ({{count($prestataire->notePrestations)}}&nbsp;Avis)
                                </span>
                              </div>

                              <div class="d-flex flex-row gap-2 align-items-center lh-1">
                                <!--icon-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-geo-alt-fill text-danger" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"></path>
                                  </svg>
                                </span>
                                <!--text-->
                                <span>{{ $prestataire->pays }},{{ $prestataire->ville }}</span>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column gap-2">
                            <!--heading-->
                            <h3 class="mb-0">Compétences</h3>

                            <div class="gap-2 d-flex flex-wrap">
                                @foreach ($listeskills as $vlisteskills)
                                <a href="#!" class="btn btn-tag btn-sm">{{$vlisteskills->libelleperfomance}}</a>
                                @endforeach


                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <!--card-->
                  <div class="card">
                    <!--card body-->
                    <div class="card-body p-md-5 d-flex flex-column gap-3">
                      <!--heading-->
                      <h3 class="mb-0">A propos</h3>
                      <div class="d-flex flex-column collapse">
                        <!--para-->
                        <p class="mb-1"  id="  collapseAbout">
                            {{ $prestataire->description }}
                        </p>

                        <div>
                          <a class="btn-link" data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false" aria-controls="collapseAbout">Voir plus </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">

                    <div class="card-body p-md-5">
                      <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-between gap-2">
                        <div>
                          <h3 class="mb-0">Ce que disent les mentorés</h3>
                        </div>
                        <div>
                        </div>
                      </div>
                      <div class="d-flex flex-column gap-3">
                        <!-- Affichage des évaluations -->
                        @foreach($evaluations as $evaluation)
                            <div class="py-4 d-flex flex-column gap-3 border-bottom">
                                <div class="d-flex flex-row justify-content-between align-items-md-center">
                                    <div class="d-flex flex-row gap-3 align-items-center">
                                        <div>
                                            <img src="{{asset('assets/images/avatar/avatar-1.jpg')}}" alt="avatar" class="avatar avatar-lg rounded-circle">
                                        </div>
                                        <div>
                                            <h4 class="mb-1">{{ $evaluation->user->name }}</h4>
                                            <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                                                <span>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if($i <= $evaluation->note)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-muted" viewBox="0 0 16 16">
                                                                <path d="M2.866 14.85c-.078.444.36.791.746.592L8 13.187l4.389 2.255c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.159-.888-.282-.95l-4.898-.696L8 0.792 5.816 5.119l-4.898.696c-.441.062-.612.636-.282.95l3.522 3.356-.83 4.73z"></path>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </span>
                                                <span>
                                                    <small class="fw-medium">{{ $evaluation->created_at->format('F j, Y') }}</small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($evaluation->user_id === auth()->id())
                                        <div>
                                            <button class="btn btn-sm btn-primary" wire:click="editEvaluation({{ $evaluation->id }})">
                                                Modifier
                                            </button>

                                            <button class="btn btn-sm btn-danger" wire:click="deleteEvaluation({{ $evaluation->id }})">
                                                Supprimer
                                            </button>
                                        </div>
                                    @endif
                                </div>

                                <div>
                                    <p class="mb-0">{{ $evaluation->commentaire }}</p>
                                </div>
                            </div>
                        @endforeach
                            @if(!$editingEvaluationId)
                            <div class="mt-4">
                                <h5>Ajouter une évaluation</h5>
                                <form wire:submit.prevent="submitRating">
                                    <div class="mb-3 form-floating">
                                        <select id="rating" class="form-select" wire:model="rating" required>
                                            <option value="" disabled selected>Choisir une note</option>
                                            <option value="1">1 <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-muted" viewBox="0 0 16 16">
                                                <path d="M2.866 14.85c-.078.444.36.791.746.592L8 13.187l4.389 2.255c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.159-.888-.282-.95l-4.898-.696L8 0.792 5.816 5.119l-4.898.696c-.441.062-.612.636-.282.95l3.522 3.356-.83 4.73z"></path>
                                            </svg></option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="rating" class="form-label">Note</label>
                                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="mb-3 form-floating">
                                        <textarea id="comment" class="form-control" wire:model="comment" rows="4" required></textarea>
                                        <label for="comment" class="form-label">Commentaire</label>
                                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                        <!-- Ajout du spinner ici -->
                                        <div wire:loading wire:target="submitRating" class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Chargement...</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif

                            <!-- Formulaire de modification d'évaluation (en dehors de la boucle) -->
                            @if($editingEvaluationId)
                            <div class="mt-4">
                                <h5>Modifier l'évaluation</h5>
                                <form wire:submit.prevent="updateEvaluation">
                                    <!-- Note -->
                                    <div class="mb-3">
                                        <label for="rating" class="form-label">Note</label>
                                        <select id="rating" class="form-select" wire:model="rating" required>
                                            <option value="">Choisir une note</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Commentaire avec floating label -->
                                    <div class="mb-3 form-floating">
                                        <textarea id="comment" class="form-control" wire:model="comment" rows="4" required></textarea>
                                        <label for="comment">Commentaire</label>
                                        @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <!-- Boutons -->
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                        <!-- Ajout du spinner ici -->
                                        <div wire:loading wire:target="updateEvaluation" class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Chargement...</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif

                    </div>



                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-12">
                <!--card-->
                <div class="card">
                  <!--card body-->
                  <div class="card-body px-md-5 pt-2">
                    <!--nav tab-->
                    <ul class="nav nav-lb-tab mb-4" id="tab" role="tablist">
                      <li class="nav-item ms-0" role="presentation">
                        <a class="nav-link active" id="membership-tab" data-bs-toggle="pill" href="#membership" role="tab" aria-controls="membership" aria-selected="true">Mes Projets</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="session-tab" data-bs-toggle="pill" href="#session" role="tab" aria-controls="session" aria-selected="false" tabindex="-1">Sessions</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                      <div class="tab-pane fade active show" id="membership" role="tabpanel" aria-labelledby="membership-tab">
                        <div class="d-flex flex-column gap-4">
                            <h3 class="mb-0">Liste de mes réalisations</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex flex-column gap-3 mt-4">
                                    @foreach ($prestataire->projects as $project)
                                        <div class="d-flex flex-column gap-2 p-3 border rounded">
                                            <h4 class="mb-0">{{ $project->title }}</h4>
                                            <p class="mb-1">{{ $project->description }}</p>
                                            <a href="{{ $project->url}}" class="text-primary" target="_blank">Lien du projet </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                      </div>
                      <div class="tab-pane fade" id="session" role="tabpanel" aria-labelledby="session-tab">
                        <div class="d-flex flex-column gap-4">
                          <div class="list-group">
                            <div class="list-group-item list-group-item-action p-3" aria-current="true">
                              <!--form-->
                              @foreach ($listeprestations as $vlisteprestations)
                              <div class="form-check">
                                <input class="form-check-input mt-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  <span class="d-flex flex-column">
                                    <span class="fs-5 text-dark fw-semibold">{{$vlisteprestations->title}}</span>
                                    <span class="">Durée {{$vlisteprestations->duree_estimee}}, {{$vlisteprestations->prix}}</span>
                                  </span>
                                </label>
                              </div>
                              @endforeach

                            </div>


                          </div>
                         
                        </div>
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

