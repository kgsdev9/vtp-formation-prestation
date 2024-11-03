@extends('layout.layout')
@section('content')
<main>
    <div class="py-8 bg-light">
      <div class="container">
        <div class="row">
          <div class="offset-md-2 col-md-8 col-12">
            <h1 class="fw-bold mb-1 display-4">Foire Aux Questions (FAQ)</h1>
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
              <div class="accordion accordion-flush" id="accordionFAQ">

                <!-- Question 1 -->
                <div class="border p-3 rounded-3 mb-2" id="faqOne">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQOne" aria-expanded="false" aria-controls="collapseFAQOne">
                      <span class="me-auto">1. Comment puis-je m'inscrire à un cours ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQOne" class="collapse" aria-labelledby="faqOne" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Pour vous inscrire à un cours, créez un compte sur notre plateforme et consultez notre catalogue de cours. Une fois le cours sélectionné, suivez les étapes pour compléter votre inscription et effectuer le paiement, si nécessaire.
                    </div>
                  </div>
                </div>

                <!-- Question 2 -->
                <div class="border p-3 rounded-3 mb-2" id="faqTwo">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQTwo" aria-expanded="false" aria-controls="collapseFAQTwo">
                      <span class="me-auto">2. Quels modes de paiement acceptez-vous ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQTwo" class="collapse" aria-labelledby="faqTwo" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Nous acceptons les paiements par carte de crédit, PayPal, et par virement bancaire. Si vous avez des questions sur les méthodes de paiement, veuillez contacter notre support client.
                    </div>
                  </div>
                </div>

                <!-- Question 3 -->
                <div class="border p-3 rounded-3 mb-2" id="faqThree">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQThree" aria-expanded="false" aria-controls="collapseFAQThree">
                      <span class="me-auto">3. Puis-je obtenir un remboursement si je ne suis pas satisfait ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQThree" class="collapse" aria-labelledby="faqThree" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Oui, nous offrons une garantie de remboursement sous certaines conditions. Si vous n'êtes pas satisfait du cours dans les 14 jours suivant l'inscription, vous pouvez demander un remboursement. Pour plus de détails, consultez notre politique de remboursement.
                    </div>
                  </div>
                </div>

                <!-- Question 4 -->
                <div class="border p-3 rounded-3 mb-2" id="faqFour">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQFour" aria-expanded="false" aria-controls="collapseFAQFour">
                      <span class="me-auto">4. Comment accéder aux cours une fois inscrit ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQFour" class="collapse" aria-labelledby="faqFour" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Une fois inscrit, connectez-vous à votre compte et accédez à votre tableau de bord. Tous les cours auxquels vous êtes inscrit seront disponibles dans cette section, et vous pourrez commencer à suivre les leçons en ligne immédiatement.
                    </div>
                  </div>
                </div>

                <!-- Question 5 -->
                <div class="border p-3 rounded-3 mb-2" id="faqFive">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQFive" aria-expanded="false" aria-controls="collapseFAQFive">
                      <span class="me-auto">5. Est-ce que les cours sont accessibles sur mobile ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQFive" class="collapse" aria-labelledby="faqFive" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Oui, notre plateforme est entièrement compatible avec les appareils mobiles et tablettes, vous permettant d'apprendre où que vous soyez. Connectez-vous simplement à votre compte depuis votre appareil mobile pour accéder à vos cours.
                    </div>
                  </div>
                </div>

                <!-- Question 6 -->
                <div class="border p-3 rounded-3 mb-2" id="faqSix">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQSix" aria-expanded="false" aria-controls="collapseFAQSix">
                      <span class="me-auto">6. Offrez-vous des certificats à la fin des cours ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQSix" class="collapse" aria-labelledby="faqSix" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Oui, nous offrons des certificats de réussite pour la plupart de nos cours. Une fois que vous avez terminé toutes les leçons et réussi l'évaluation finale, un certificat sera disponible en téléchargement dans votre profil.
                    </div>
                  </div>
                </div>

                <!-- Question 7 -->
                <div class="border p-3 rounded-3 mb-2" id="faqSeven">
                  <h3 class="mb-0 fs-4">
                    <a href="#" class="d-flex align-items-center text-inherit collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFAQSeven" aria-expanded="false" aria-controls="collapseFAQSeven">
                      <span class="me-auto">7. Comment puis-je contacter le support en cas de problème ?</span>
                      <span class="collapse-toggle ms-4">
                        <i class="fe fe-chevron-down"></i>
                      </span>
                    </a>
                  </h3>
                  <div id="collapseFAQSeven" class="collapse" aria-labelledby="faqSeven" data-bs-parent="#accordionFAQ">
                    <div class="pt-2">
                      Vous pouvez nous contacter via l'adresse email suivante : kgsinformatique@gmail.com ou par téléphone au 07 68 36 58 66. Notre équipe de support est disponible pour vous aider avec vos questions ou problèmes.
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
