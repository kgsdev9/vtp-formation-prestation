@extends('layout.layout')
@section('title', 'Acheter la formation')
@section('content')
<main>
    <!-- Page header -->
    <section class="py-lg-6 py-4 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="text-white display-4 mb-0">{{ $course->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content -->
    <section class="py-6">
        <div class="container">
            <form class="needs-validation" action="{{ route('process.checkout') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header">
                                <h4 class="mb-0">Adresse de paiement</h4>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row g-3">

                                    <!-- Nom complet -->
                                    <div class="col-12">
                                        <label class="form-label" for="fullname">Nom Complet</label>
                                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nom Complet" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre nom complet.</div>
                                    </div>
                                    <!-- Numéro de téléphone -->
                                    <div class="col-12">
                                        <label class="form-label" for="phone">Téléphone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Téléphone" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre numéro de téléphone.</div>
                                    </div>
                                    <!-- Adresse -->
                                    <div class="col-12">
                                        <label class="form-label" for="adresse">Adresse</label>
                                        <input type="text" id="adresse" name="adresse" class="form-control" placeholder="Adresse" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre adresse.</div>
                                    </div>
                                    <!-- Email -->
                                    <div class="col-12">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="">
                                        <div class="invalid-feedback">Veuillez entrer votre email.</div>
                                    </div>
                                    <!-- ID du cours -->
                                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                                    <!-- Montant -->
                                    <input type="hidden" name="amount" value="{{ $course->prix }}"> <!-- Remplacez par le champ correct si nécessaire -->
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card mb-3 mb-lg-0 container">
                            <!-- Card header -->
                            <div class="card-header">
                                <h4 class="mb-0">Méthode de paiement Disponible</h4>
                            </div>
                            <div>
                                <div class="shadow-none mb-2">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Form check -->
                                        <div class="d-md-flex">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod" id="CARD" value="CARD" required>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-center w-100">
                                                <div class="d-flex align-items-start">
                                                    <!-- Image -->
                                                    <img src="{{ asset('visa.svg') }}" alt="" class="w-400">
                                                    <!-- Text -->
                                                    <div class="ms-2">
                                                        <h5 class="mb-1">Visa</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Card -->
                        <div class="mb-3">
                            <div class="d-flex flex-column gap-4">
                                <div class="card">
                                    <a href="#!"><img src="{{ asset('formation/' . $course->image) }}" alt="formation-image" class="img-fluid w-100 card-img-top"></a>
                                    <div class="card-body d-flex flex-column gap-4">
                                        <div class="d-grid flex-column gap-2">
                                            <button class="btn btn-primary">
                                                Payer
                                                <i class="fe fe-credit-card ms-2"></i>
                                            </button>
                                        </div>
                                        <div class="text-center d-flex flex-column gap-2 text-gray-500">
                                            <span class="">Satisfait ou remboursé ! Inscrivez-vous à notre formation sans crainte. Si vous n'êtes pas entièrement satisfait dans les 30 jours, nous vous remboursons intégralement. Rejoignez-nous dès aujourd'hui !</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="p-4"></div>
                        </div>
                        <!-- Card -->
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection
