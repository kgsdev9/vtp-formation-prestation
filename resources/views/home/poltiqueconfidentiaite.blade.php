@extends('layout.layout')

@section('content')
<main>
    <div class="py-8 bg-light">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <h1 class="fw-bold mb-1 display-4">Politique de Confidentialité</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- container  -->

    <section class="py-8">
      <div class="container">
        <div class="row mb-6">
          <div class="offset-md-2 col-md-8 col-12">
            <div class="d-flex flex-column gap-4">
              <div class="">
                <h2 class="mb-0 fw-semibold"></h2>
              </div>
              <div class="accordion accordion-flush" id="accordionExample">

                <!-- Section 1: Objet -->
                <div class="border p-3 rounded-3 mb-2" id="headingOne">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      <span class="me-auto">1. Collecte de Données</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="pt-2">
                      VTP Formation collecte des informations personnelles (nom, adresse email, informations de paiement, etc.) pour fournir des services de formation et améliorer l'expérience utilisateur. Ces informations sont collectées uniquement lorsque vous les fournissez volontairement via l'inscription, les achats ou d'autres interactions sur le site.
                    </div>
                  </div>
                </div>

                <!-- Section 2: Utilisation des Données -->
                <div class="border p-3 rounded-3 mb-2" id="headingTwo">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <span class="me-auto">2. Utilisation des Données</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="pt-3">
                      Les données personnelles collectées sont utilisées pour traiter les inscriptions, gérer les comptes utilisateurs, et améliorer nos services. Elles peuvent également servir à des fins de communication, telles que l’envoi de newsletters ou d'informations sur les mises à jour de services, uniquement si vous y avez consenti.
                    </div>
                  </div>
                </div>

                <!-- Section 3: Partage des Données -->
                <div class="border p-3 rounded-3 mb-2" id="headingThree">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <span class="me-auto">3. Partage des Données</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="pt-3">
                      VTP Formation ne partage pas vos données personnelles avec des tiers sans votre consentement, sauf si cela est nécessaire pour fournir les services demandés (comme des partenaires de paiement) ou pour se conformer aux obligations légales. Les partenaires ayant accès aux données sont tenus de respecter la confidentialité et la sécurité des informations.
                    </div>
                  </div>
                </div>

                <!-- Section 4: Sécurité des Données -->
                <div class="border p-3 rounded-3 mb-2" id="headingFour">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <span class="me-auto">4. Sécurité des Données</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="pt-3">
                      Nous mettons en œuvre des mesures de sécurité techniques et organisationnelles pour protéger vos données personnelles contre tout accès non autorisé, altération, divulgation ou destruction. Cependant, malgré ces efforts, aucune transmission de données sur internet n'est totalement sécurisée et nous ne pouvons garantir une sécurité absolue.
                    </div>
                  </div>
                </div>

                <!-- Section 5: Droits de l'Utilisateur -->
                <div class="border p-3 rounded-3 mb-2" id="headingFive">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <span class="me-auto">5. Droits de l'Utilisateur</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="pt-3">
                      Conformément à la législation en vigueur, vous disposez de droits d’accès, de rectification, de suppression, et de portabilité de vos données personnelles. Vous pouvez également vous opposer au traitement de vos données ou en demander la limitation. Pour exercer ces droits, veuillez nous contacter par email à kgsinformatique@gmail.com.
                    </div>
                  </div>
                </div>

                <!-- Section 6: Modifications de la Politique de Confidentialité -->
                <div class="border p-3 rounded-3 mb-2" id="headingSix">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <span class="me-auto">6. Modifications de la Politique de Confidentialité</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="pt-3">
                      VTP Formation se réserve le droit de modifier cette politique de confidentialité à tout moment. Nous vous encourageons à consulter régulièrement cette page pour être informé de toute mise à jour. Les modifications entrent en vigueur dès leur publication sur cette page.
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

@endsection
