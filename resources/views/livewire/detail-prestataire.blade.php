
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
                    <div class="rounded-top-3" style="background-image: url(../assets/images/mentor/mentor-single.png); background-position: center; background-size: cover; background-repeat: no-repeat; height: 228px"></div>
                    <div class="card-body p-md-5">
                      <div class="d-flex flex-column gap-5">
                        <!--img-->
                        <div class="mt-n8">
                          <img src="../assets/images/mentor/mentor-img-single.jpg" alt="mentor 1" class="img-fluid rounded-4 mt-n8">
                        </div>
                        <div class="d-flex flex-column gap-5">
                          <div class="d-flex flex-column gap-3">
                            <div class="d-flex flex-md-row flex-column justify-content-between gap-2">
                              <!--heading-->
                              <div>
                                <h1 class="mb-0"> {{ $prestataire->nom_prestataire }} {{ $prestataire->prenom_prestataire }}</h1>
                                <!--content-->
                                <div class="d-flex flex-lg-row flex-column gap-2">
                                  <small class="fw-medium text-gray-800">{{ $prestataire->type_prestation }}&nbsp;at&nbsp;Apple</small>
                                  <small class="fw-medium text-success">7+ years in UX Design &amp; Brand Design.</small>
                                </div>
                              </div>
                              <!--button-->
                              <div class="d-flex flex-row gap-3 align-items-center">
                                <a href="#!" class="btn btn-outline-white">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill me-1" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"></path>
                                    </svg>
                                  </span>
                                  Ajouter au Favoris
                                </a>
                                <a href="#!" class="btn btn-outline-white">Contacter</a>
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
                                  <span class="text-gray-800 fw-bold">5.0</span>
                                  (16&nbsp;Avis)
                                </span>
                              </div>
                              <div class="d-flex flex-row gap-2 align-items-center lh-1">
                                <!--icon-->
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-people-fill text-primary align-baseline" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                  </svg>
                                </span>
                                <!--text-->
                                <span>
                                  <span class="text-gray-800 fw-bold">40+</span>
                                 Likes
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
                          <div>
                            <span class="badge rounded-pill text-success-emphasis bg-success-subtle border border-success align-items-center">
                              <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-reply-fill me-1 align-text-top" viewBox="0 0 16 16">
                                  <path d="M5.921 11.9 1.353 8.62a.72.72 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"></path>
                                </svg>
                              </span>
                              Répondeur rapide
                            </span>
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
                        @foreach($evaluations as $evaluation)
                        <div class="py-4 d-flex flex-column gap-3 border-bottom">
                          <div class="d-flex flex-row justify-content-between align-items-md-center">
                            <div class="d-flex flex-row gap-3 align-items-center">
                              <div>
                                <img src="{{ asset('path/to/avatar/'.$evaluation->user->avatar) }}" alt="avatar" class="avatar avatar-lg rounded-circle">
                              </div>
                              <div>
                                <!--heading-->
                                <h4 class="mb-1">{{ $evaluation->user->name }}</h4>
                                <div class="d-flex flex-md-row flex-column gap-md-2 align-items-md-center lh-1">
                                  <!--rating-->
                                  <span>
                                    @for ($i = 1; $i <= 5; $i++)
                                      @if($i <= $evaluation->note)
                                        <!-- Star filled (active) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                        </svg>
                                      @else
                                        <!-- Star empty (inactive) -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star text-muted" viewBox="0 0 16 16">
                                          <path d="M2.866 14.85c-.078.444.36.791.746.592L8 13.187l4.389 2.255c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.159-.888-.282-.95l-4.898-.696L8 0.792 5.816 5.119l-4.898.696c-.441.062-.612.636-.282.95l3.522 3.356-.83 4.73z"></path>
                                        </svg>
                                      @endif
                                    @endfor
                                  </span>
                                  <!--date-->
                                  <span>
                                    <small class="fw-medium">{{ $evaluation->created_at->format('F j, Y') }}</small>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!--comment-->
                          <div>
                            <p class="mb-0">
                              {{ $evaluation->commentaire }}
                            </p>
                          </div>
                        </div>
                      @endforeach




                        <div class="mt-4">
                            <h5>Évaluez le prestataire</h5>
                            <form wire:submit.prevent="submitRating">
                              <div class="form-group">
                                <label for="rating">Votre note</label>
                                <div class="rating d-flex gap-1">
                                  <input type="radio" id="star5" wire:model="rating" value="5" /><label for="star5" title="5 étoiles">&#9733;</label>
                                  <input type="radio" id="star4" wire:model="rating" value="4" /><label for="star4" title="4 étoiles">&#9733;</label>
                                  <input type="radio" id="star3" wire:model="rating" value="3" /><label for="star3" title="3 étoiles">&#9733;</label>
                                  <input type="radio" id="star2" wire:model="rating" value="2" /><label for="star2" title="2 étoiles">&#9733;</label>
                                  <input type="radio" id="star1" wire:model="rating" value="1" /><label for="star1" title="1 étoile">&#9733;</label>
                                </div>
                                @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>

                              <div class="form-group mt-3">
                                <label for="comment">Votre commentaire</label>
                                <textarea class="form-control" wire:model="comment" id="comment" rows="3"></textarea>
                                @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                              </div>

                              <button type="submit" class="btn btn-primary mt-3">Soumettre</button>
                            </form>
                          </div>


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
                        <a class="nav-link active" id="membership-tab" data-bs-toggle="pill" href="#membership" role="tab" aria-controls="membership" aria-selected="true">Note aux utilisateurs</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="session-tab" data-bs-toggle="pill" href="#session" role="tab" aria-controls="session" aria-selected="false" tabindex="-1">Sessions</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="tabContent">
                      <div class="tab-pane fade active show" id="membership" role="tabpanel" aria-labelledby="membership-tab">
                        <div class="d-flex flex-column gap-4">
                          <!--heading-->
                          <h3 class="mb-0">
                            Note Importante aux Utilisateurs

                          </h3>
                          <div class="d-flex flex-column gap-3">
                            <!--content-->
                            <div class="d-flex flex-column gap-1">
                              <span>Le prix recommandé pour une séance de coaching par moi est de </span>
                              <div class="d-flex flex-row align-items-center gap-1">
                                <h3 class="mb-0 h2">300.00 € </h3>
                                <small class="text-gray-800 fw-medium">/ Mois</small>
                              </div>
                            </div>
                            <div class="d-flex flex-column gap-2">
                              <!--heading-->
                              <div>
                                <h4 class="mb-1">Les points à verifier </h4>
                              </div>
                              <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                <li class="d-flex flex-row gap-2">
                                  <!--icon-->
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-video text-primary" viewBox="0 0 16 16">
                                      <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>
                                      <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1z"></path>
                                    </svg>
                                  </span>
                                  <!--text-->
                                  <span>1 session/ chaque weekend</span>
                                </li>
                                <li class="d-flex flex-row gap-2">
                                  <!--icon-->
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill text-primary" viewBox="0 0 16 16">
                                      <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                                    </svg>
                                  </span>
                                  <!--text-->
                                  <span>Contacter uniquement les certifiés </span>
                                </li>

                              </ul>
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
                          <!--button-->
                          <div class="d-grid">
                            <a href="#!" class="btn btn-primary">S'inscrire</a>
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

