@section('title', $category->name)
<div>
    <main>
        <!-- Hero Section -->
        <section class="my-5 mx-3">
            <div class="container bg-light rounded-4 pe-lg-0 overflow-hidden">
                <div class="row align-items-center gy-5 gy-xl-0">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex flex-column gap-4 px-lg-6 p-3">
                            <div class="d-flex flex-column gap-3">
                                <h1 class="mb-0 display-4 fw-bold">
                                    Liste des formations en {{ $category->name }}
                                </h1>
                                <p class="mb-0 pe-xxl-8 me-xxl-5">
                                    Explorer et scruter et prenez une decision.
                                </p>
                            </div>
                            <form wire:submit.prevent="updateCourses">
                                <div class="input-group shadow">
                                    <label for="courseCategoryCourse" class="form-label visually-hidden">Find Mentor</label>
                                    <input type="text" class="form-control rounded-start-3"
                                           id="categorie" name="categorie"
                                           placeholder="Rechercher une catégorie"
                                           wire:model.debounce.300ms="search">

                                    <button class="btn btn-primary" id="basic-addon2" type="submit">
                                        <!-- Affiche un spinner si une requête est en cours -->
                                        <span wire:loading wire:target="updateCourses">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Chargement...
                                        </span>
                                        <span wire:loading.remove wire:target="updateCourses">
                                            Rechercher
                                        </span>
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-xl-8 py-6">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($courses as $course)
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="card card-lift">
                                <a href="{{ route('detail.course', $course->slug) }}">
                                    <img src="{{asset('formation/'.$course->image)}}"
                                         alt="formation-image" class="card-img-top img-fluid w-100">
                                </a>
                                <div class="card-body d-flex flex-column gap-4">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <span
                                                class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">
                                                {{ $course->category->name }}
                                            </span>
                                        </div>
                                        <h3 class="mb-0 h4">
                                            <a href="{{ route('detail.course', $course->slug) }}"
                                               class="text-inherit">{{ $course->title }}</a>
                                        </h3>
                                        <small class="text-secondary">{{ $course->entreprise->nom_entreprise }}</small>
                                        <div class="lh-1">
                                            <span class="text-secondary fw-semibold">5.0</span>
                                            <!-- Icônes étoiles... -->
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row gap-2 align-items-center">
                                        <span class="fw-semibold text-dark">{{ $course->prix }} € </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>
