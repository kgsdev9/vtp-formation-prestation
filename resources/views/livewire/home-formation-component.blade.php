<div>
    <!-- Section breadcrumb et titre -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column gap-5">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#!">Formation</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Liste complète</li>
                            </ol>
                        </nav>
                        <div class="d-flex flex-column">
                            <h1 class="mb-0">Liste des formations</h1>
                            <p class="mb-0">Nos formations sont de classe mondiale et réalisées par les experts du métier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section principale contenant le sidebar et les formations -->
    <div class="container py-5">
        <div class="row">
            <!-- Sidebar pour la sélection des niveaux et catégories -->
            <div class="col-lg-3 d-none d-lg-block">
                <aside class="sidebar-fixed">
                    <nav class="navbar sidebar-courses navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0">
                        <button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                                aria-expanded="false" aria-label="Toggle navigation" class="p-0 border-0 navbar-toggler">
                            <span class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white"><span class="fe fe-menu"></span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="side-nav me-auto flex-column navbar-nav">
                                <!-- Filtre Niveau -->
                                <p class="navbar-header nav-item mb-2 text-dark mt-4">Niveau</p>
                                @foreach ($level as $lvl)
                                    <div class="form-check my-1">
                                        <input class="form-check-input" type="radio" name="selectedLevel" id="level{{ $lvl->id }}"
                                               value="{{ $lvl->id }}" wire:model="selectedLevel">
                                        <label class="form-check-label" for="level{{ $lvl->id }}">{{ $lvl->name }}</label>
                                    </div>
                                @endforeach

                                <!-- Filtre Catégories -->
                                <p class="navbar-header nav-item mb-2 text-dark mt-4">Catégories</p>
                                @foreach ($categories as $cat)
                                    <div class="form-check my-1">
                                        <input class="form-check-input" type="checkbox" id="category{{ $cat->id }}"
                                               value="{{ $cat->id }}" wire:model="selectedCategory">
                                        <label class="form-check-label" for="category{{ $cat->id }}">{{ $cat->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                </aside>
            </div>

            <!-- Liste des formations -->
            <div class="col-lg-9 col-sm-12">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <h3 class="pb-0 fw-bold text-dark m-0">Toutes nos formations</h3>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mb-5">
                    @forelse ($allCourses as $course)
                        <div class="col">
                            <div class="card card-lift">
                                <a href="{{ route('detail.course', $course->slug) }}">
                                    <img src="{{ asset('formation/' . $course->image) }}" alt="formation-image"
                                         class="card-img-top img-fluid w-100">
                                </a>
                                <div class="card-body d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">{{ $course->category->name }}</span>
                                        </div>
                                        <h3 class="mb-0 h4">
                                            <a href="{{ route('detail.course', $course->slug) }}" class="text-inherit">{{ $course->title }}</a>
                                        </h3>
                                        <small class="text-secondary">{{ $course->entreprise->nom_entreprise }}</small>
                                        <div class="lh-1">
                                            <span class="text-secondary fw-semibold">5.0</span>
                                            <span class="text-warning">★★★★★</span>
                                            <span class="text-gray-500">{{ rand(10, 30) }} avis</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold text-dark">{{ $course->prix }} €</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Aucune formation trouvée pour ces filtres.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
