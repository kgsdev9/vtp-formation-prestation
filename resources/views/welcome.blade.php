@extends('layout.layout')

@section('content')
<main>
    <!--Hero Section-->
    <section class="py-xl-8 py-6">
      <div class="container py-xl-6">
        <div class="row align-items-center gy-6 gy-xl-0">
          <div class="col-lg-5 col-xxl-5 col-12">
            <div class="d-flex flex-column gap-5">
              <div class="d-flex flex-row gap-2 align-items-center">
                <span>🚀</span>
                <span class="text-primary fw-semibold">
                  <span>Parageons notre savoir faire avec les autres</span>
                </span>
              </div>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex flex-column gap-2">
                  <h1 class="mb-0 display-2 fw-bolder">Prestation & Formation</h1>
                  <p class="mb-0">Faites-nous confiance pour augmenter vos revenus avec vos compétences </p>
                </div>
                <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                  <li class="d-flex flex-row gap-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                    </span>
                    <span>Arbritage financier</span>
                  </li>
                  <li class="d-flex flex-row gap-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                    </span>
                    <span>Expertise basée sur l'experience </span>
                  </li>
                  <li class="d-flex flex-row gap-2">
                    <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                    </span>
                    <span>Faciliter de paiement </span>
                  </li>
                </ul>
              </div>
              <div class="d-grid d-md-flex flex-row gap-2">
                <a href="{{route('become.teacher')}}" class="btn btn-primary btn-lg">Nous Rejoindre</a>
                <a href="{{route('home.categorie')}}" class="btn btn-outline-secondary btn-lg">Explorer des contenus </a>
              </div>
            </div>
          </div>
          <div class="col-xxl-6 offset-xxl-1 col-lg-7 col-12">
            <div class="row gx-0 gy-4 gy-lg-0">
              <div class="col-md-6 flex-column justify-content-start align-items-center d-none d-md-flex">
                <div class="position-relative me-n7">
                  <div class="position-absolute bottom-25 start-0 ms-n8 end-0 d-flex flex-column align-items-start">
                    <div class="bg-white rounded-pill py-2 px-3 shadow mb-2 d-inline-block">
                      <svg width="24" height="24" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M23.9688 3.0378H8.29689C7.3189 3.0378 6.38097 3.4263 5.68942 4.11784C4.99788 4.80939 4.60938 5.74732 4.60938 6.72531V26.0848C4.60938 26.3293 4.7065 26.5638 4.87939 26.7366C5.05227 26.9095 5.28676 27.0066 5.53125 27.0066H22.1251C22.3696 27.0066 22.6041 26.9095 22.7769 26.7366C22.9498 26.5638 23.047 26.3293 23.047 26.0848C23.047 25.8403 22.9498 25.6058 22.7769 25.4329C22.6041 25.26 22.3696 25.1629 22.1251 25.1629H6.45313C6.45313 24.6739 6.64739 24.2049 6.99316 23.8592C7.33893 23.5134 7.8079 23.3191 8.29689 23.3191H23.9688C24.2133 23.3191 24.4478 23.222 24.6207 23.0491C24.7936 22.8762 24.8907 22.6418 24.8907 22.3973V3.95967C24.8907 3.71518 24.7936 3.48069 24.6207 3.30781C24.4478 3.13492 24.2133 3.0378 23.9688 3.0378ZM13.8282 4.88155H19.3594V13.1785L17.1458 11.5191C16.9862 11.3994 16.7921 11.3347 16.5927 11.3347C16.3932 11.3347 16.1991 11.3994 16.0395 11.5191L13.8282 13.1785V4.88155ZM23.047 21.4754H8.29689C7.64944 21.4745 7.0133 21.6451 6.45313 21.9697V6.72531C6.45313 6.23632 6.64739 5.76735 6.99316 5.42158C7.33893 5.07581 7.8079 4.88155 8.29689 4.88155H11.9844V15.0222C11.9844 15.1934 12.0321 15.3612 12.1221 15.5069C12.2121 15.6525 12.3409 15.7702 12.494 15.8468C12.6471 15.9233 12.8186 15.9558 12.9891 15.9404C13.1596 15.925 13.3225 15.8624 13.4594 15.7597L16.5938 13.4089L19.7293 15.7597C19.8886 15.8792 20.0822 15.9439 20.2813 15.9441C20.5258 15.9441 20.7603 15.847 20.9332 15.6741C21.1061 15.5012 21.2032 15.2667 21.2032 15.0222V4.88155H23.047V21.4754Z"
                          fill="#F59E0B" />
                      </svg>

                      <span class="text-dark fw-semibold">200+ Prestations</span>
                    </div>
                    <div class="bg-white rounded-pill py-2 px-3 shadow mb-2 d-inline-block">
                      <svg width="24" height="25" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M28.5782 15.2724C28.5792 14.2137 28.3197 13.171 27.8226 12.2363C27.3255 11.3016 26.606 10.5035 25.7277 9.91249C24.8493 9.32146 23.839 8.95561 22.7859 8.8472C21.7328 8.73879 20.6691 8.89115 19.6888 9.29084C18.7084 9.69054 17.8415 10.3253 17.1644 11.1391C16.4873 11.953 16.0208 12.9209 15.8061 13.9576C15.5913 14.9943 15.635 16.0679 15.9331 17.0837C16.2313 18.0996 16.7748 19.0265 17.5157 19.7827V26.3349C17.5156 26.4922 17.5557 26.6468 17.6322 26.7842C17.7087 26.9215 17.819 27.037 17.9528 27.1197C18.0865 27.2024 18.2391 27.2495 18.3962 27.2566C18.5532 27.2636 18.7095 27.2304 18.8501 27.16L22.1251 25.5214L25.4001 27.16C25.5407 27.2304 25.6969 27.2636 25.854 27.2566C26.011 27.2495 26.1637 27.2024 26.2974 27.1197C26.4311 27.037 26.5415 26.9215 26.618 26.7842C26.6945 26.6468 26.7346 26.4922 26.7345 26.3349V19.7827C27.9169 18.5793 28.579 16.9595 28.5782 15.2724ZM22.1251 10.663C23.0367 10.663 23.9279 10.9333 24.6859 11.4398C25.4439 11.9463 26.0347 12.6662 26.3836 13.5085C26.7325 14.3507 26.8238 15.2775 26.6459 16.1716C26.4681 17.0658 26.0291 17.8871 25.3844 18.5317C24.7398 19.1764 23.9185 19.6154 23.0243 19.7932C22.1302 19.9711 21.2034 19.8798 20.3611 19.5309C19.5189 19.182 18.799 18.5913 18.2925 17.8332C17.786 17.0752 17.5157 16.1841 17.5157 15.2724C17.5157 14.0499 18.0013 12.8775 18.8657 12.0131C19.7302 11.1486 20.9026 10.663 22.1251 10.663ZM22.5376 23.6661C22.4095 23.602 22.2683 23.5686 22.1251 23.5686C21.9819 23.5686 21.8406 23.602 21.7125 23.6661L19.3594 24.8438V21.1021C20.2236 21.5126 21.1684 21.7255 22.1251 21.7255C23.0818 21.7255 24.0265 21.5126 24.8907 21.1021V24.8438L22.5376 23.6661ZM15.6719 22.6474C15.6719 22.8919 15.5748 23.1264 15.4019 23.2993C15.229 23.4722 14.9945 23.5693 14.7501 23.5693H4.60938C4.12039 23.5693 3.65142 23.3751 3.30565 23.0293C2.95988 22.6835 2.76563 22.2145 2.76562 21.7256V6.97549C2.76562 6.48649 2.95988 6.01752 3.30565 5.67175C3.65142 5.32598 4.12039 5.13173 4.60938 5.13173H24.8907C25.3797 5.13173 25.8487 5.32598 26.1945 5.67175C26.5402 6.01752 26.7345 6.48649 26.7345 6.97549C26.7345 7.21998 26.6374 7.45447 26.4645 7.62735C26.2916 7.80024 26.0571 7.89737 25.8126 7.89737C25.5681 7.89737 25.3336 7.80024 25.1607 7.62735C24.9878 7.45447 24.8907 7.21998 24.8907 6.97549H4.60938V21.7256H14.7501C14.9945 21.7256 15.229 21.8227 15.4019 21.9956C15.5748 22.1684 15.6719 22.4029 15.6719 22.6474ZM13.8282 16.1943C13.8282 16.4388 13.731 16.6733 13.5582 16.8461C13.3853 17.019 13.1508 17.1162 12.9063 17.1162H8.2969C8.0524 17.1162 7.81792 17.019 7.64503 16.8461C7.47215 16.6733 7.37502 16.4388 7.37502 16.1943C7.37502 15.9498 7.47215 15.7153 7.64503 15.5424C7.81792 15.3695 8.0524 15.2724 8.2969 15.2724H12.9063C13.1508 15.2724 13.3853 15.3695 13.5582 15.5424C13.731 15.7153 13.8282 15.9498 13.8282 16.1943ZM13.8282 12.5068C13.8282 12.7513 13.731 12.9857 13.5582 13.1586C13.3853 13.3315 13.1508 13.4286 12.9063 13.4286H8.2969C8.0524 13.4286 7.81792 13.3315 7.64503 13.1586C7.47215 12.9857 7.37502 12.7513 7.37502 12.5068C7.37502 12.2623 7.47215 12.0278 7.64503 11.8549C7.81792 11.682 8.0524 11.5849 8.2969 11.5849H12.9063C13.1508 11.5849 13.3853 11.682 13.5582 11.8549C13.731 12.0278 13.8282 12.2623 13.8282 12.5068Z"
                          fill="#139A74" />
                      </svg>

                      <span class="text-dark fw-semibold">Formation certifiante</span>
                    </div>
                    <div class="bg-white rounded-pill py-2 px-3 shadow">
                      <svg width="24" height="25" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M18.9492 12.9114L13.4179 9.22386C13.2791 9.13121 13.1176 9.078 12.9509 9.06992C12.7842 9.06185 12.6184 9.0992 12.4712 9.17799C12.324 9.25678 12.201 9.37406 12.1153 9.5173C12.0295 9.66055 11.9843 9.82438 11.9844 9.99132V17.3664C11.9843 17.5333 12.0295 17.6971 12.1153 17.8404C12.201 17.9836 12.324 18.1009 12.4712 18.1797C12.6184 18.2585 12.7842 18.2958 12.9509 18.2878C13.1176 18.2797 13.2791 18.2265 13.4179 18.1338L18.9492 14.4463C19.0757 14.3622 19.1794 14.2481 19.2511 14.1142C19.3228 13.9803 19.3603 13.8307 19.3603 13.6788C19.3603 13.5269 19.3228 13.3774 19.2511 13.2435C19.1794 13.1096 19.0757 12.9955 18.9492 12.9114ZM13.8282 15.6436V11.7198L16.7759 13.6788L13.8282 15.6436ZM24.8907 5.38193H4.60938C4.12039 5.38193 3.65142 5.57618 3.30565 5.92195C2.95988 6.26772 2.76563 6.73669 2.76562 7.22569V20.132C2.76563 20.621 2.95988 21.09 3.30565 21.4357C3.65142 21.7815 4.12039 21.9757 4.60938 21.9757H24.8907C25.3797 21.9757 25.8487 21.7815 26.1945 21.4357C26.5402 21.09 26.7345 20.621 26.7345 20.132V7.22569C26.7345 6.73669 26.5402 6.26772 26.1945 5.92195C25.8487 5.57618 25.3797 5.38193 24.8907 5.38193ZM24.8907 20.132H4.60938V7.22569H24.8907V20.132ZM26.7345 24.7414C26.7345 24.9859 26.6374 25.2204 26.4645 25.3933C26.2916 25.5661 26.0571 25.6633 25.8126 25.6633H3.6875C3.44301 25.6633 3.20852 25.5661 3.03564 25.3933C2.86275 25.2204 2.76563 24.9859 2.76562 24.7414C2.76562 24.4969 2.86275 24.2624 3.03564 24.0895C3.20852 23.9166 3.44301 23.8195 3.6875 23.8195H25.8126C26.0571 23.8195 26.2916 23.9166 26.4645 24.0895C26.6374 24.2624 26.7345 24.4969 26.7345 24.7414Z"
                          fill="#E53E3E" />
                      </svg>

                      <span class="text-dark fw-semibold">Exercices d'apprentissage</span>
                    </div>
                  </div>
                  <svg width="205" height="189" viewBox="0 0 205 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.0391235 179.983C0.0391235 80.8399 80.4107 0.468323 179.554 0.468323H189.034C197.318 0.468323 204.033 7.18386 204.033 15.4679V166.407C204.033 178.626 194.127 188.532 181.908 188.532H8.58745C3.86634 188.532 0.0391235 184.704 0.0391235 179.983Z"
                      fill="#139A74" />
                  </svg>
                </div>
              </div>
              <div class="col-md-6 mt-8 mt-md-0">
                <div class="bg-warning d-flex justify-content-center rounded-4 position-relative" style="padding-bottom: 150px; padding-top: 100px">
                  <img src="assets/images/landing-immigration/college-student-holding-laptop-pointing-right.png" alt="" class="position-absolute bottom-0 me-8" />
                </div>
              </div>
              <div class="col-md-6 flex-column justify-content-end d-none d-md-flex">
                <div class="bg-primary d-flex justify-content-center rounded-4 position-relative mx-5" style="padding-bottom: 150px; padding-top: 100px">
                  <img src="assets/images/landing-immigration/front-view-young-man-going-university-with-bag.png" alt="" class="position-absolute bottom-0" />
                </div>
              </div>
              <div class="col-md-6 d-none d-md-block">
                <div class="position-relative mt-5">
                  <svg width="204" height="189" viewBox="0 0 204 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M203.994 9.01663C203.994 108.16 123.622 188.532 24.4789 188.532H14.9995C6.71548 188.532 -3.05176e-05 181.816 -3.05176e-05 173.532V22.5934C-3.05176e-05 10.374 9.90572 0.468292 22.1251 0.468292H195.446C200.167 0.468292 203.994 4.29552 203.994 9.01663Z"
                      fill="#EF8E70" />
                  </svg>
                  <div class="bg-white rounded-4 p-3 position-absolute bottom-10 start-10 mb-3 shadow">
                    <div class="avatar-group mb-2">
                      <span class="avatar avatar-md">
                        <!-- avatar  -->
                        <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="assets/images/avatar/avatar-2.jpg" class="rounded-circle" />
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                      </span>
                      <!-- avatar  -->
                      <span class="avatar avatar-md">
                        <img alt="avatar" src="assets/images/avatar/avatar-4.jpg" class="rounded-circle" />
                      </span>
                    </div>
                    <div class="text-dark fw-bold fs-4">+1000</div>
                    <div class="text-gray-500">aprenants par jour</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Hero Section-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <hr />
          </div>
        </div>
      </div>
    </section>
    <!--explore categories-->
    <section class="py-xl-8 py-6">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 col-md-10 col-12 mx-auto">
            <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
              <h2 class="h1 mb-0">Explorer nos catégories</h2>
              <p class="mb-0 px-xl-5">Découvrez un monde de savoir à travers notre large gamme de cours diversifiés..</p>
            </div>
          </div>
        </div>
        <div class="row gy-4">
          @foreach ($category as $vcategory)
          <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div>
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_7928_12745)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M49.4989 31.4999C49.4989 21.8218 41.677 13.9999 31.9989 13.9999C22.3207 13.9999 14.4989 21.8218 14.4989 31.4999C14.4989 41.178 22.3207 48.9999 31.9989 48.9999C41.677 48.9999 49.4989 41.178 49.4989 31.4999ZM50.4989 31.4999C50.4989 21.2695 42.2293 12.9999 31.9989 12.9999C21.7684 12.9999 13.4989 21.2695 13.4989 31.4999C13.4989 41.7303 21.7684 49.9999 31.9989 49.9999C42.2293 49.9999 50.4989 41.7303 50.4989 31.4999Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M34.1998 15.1444C33.4223 14.3344 32.6786 13.9999 31.9989 13.9999C31.3192 13.9999 30.5758 14.3344 29.7983 15.1444C29.018 15.9574 28.2695 17.1869 27.62 18.7892C26.323 21.9888 25.4991 26.4804 25.4991 31.5C25.4991 36.5195 26.323 41.0111 27.62 44.2107C28.2695 45.8131 29.018 47.0426 29.7983 47.8555C30.5758 48.6656 31.3192 48.9999 31.9989 48.9999C32.6786 48.9999 33.4223 48.6656 34.1998 47.8555C34.9802 47.0426 35.7286 45.8131 36.3782 44.2107C37.6751 41.0111 38.4991 36.5195 38.4991 31.5C38.4991 26.4804 37.6751 21.9888 36.3782 18.7892C35.7286 17.1869 34.9802 15.9574 34.1998 15.1444ZM39.4991 31.5C39.4991 21.2695 36.1478 12.9999 31.9989 12.9999C27.8499 12.9999 24.4991 21.2695 24.4991 31.5C24.4991 41.7304 27.8499 49.9999 31.9989 49.9999C36.1478 49.9999 39.4991 41.7304 39.4991 31.5Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M50.0821 31.8786C50.0821 31.5549 49.8393 31.3122 49.5157 31.3122H14.4007C14.077 31.3122 13.8343 31.5549 13.8343 31.8786C13.8343 32.2022 14.077 32.4449 14.4007 32.4449H49.5157C49.7584 32.4449 50.0012 32.2831 50.0821 31.8786Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M31.5001 13.4836C31.5001 13.7786 31.7143 13.9999 32 13.9999C32.2143 13.9999 32.4286 13.7786 32.5001 13.4836V5.51631C32.5001 5.22123 32.2858 4.99993 32 4.99993C31.7143 4.99993 31.5001 5.22123 31.5001 5.51631V13.4836Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M33.5471 3.07461C33.5471 2.17051 32.8621 1.48547 31.958 1.48547C31.0539 1.48547 30.3689 2.17049 30.3689 3.07461C30.3689 3.97872 31.0539 4.66372 31.958 4.66372C32.8621 4.66372 33.5471 3.9787 33.5471 3.07461ZM34.5471 3.07461C34.5471 1.61823 33.4144 0.485474 31.958 0.485474C30.5016 0.485474 29.3689 1.61823 29.3689 3.07461C29.3689 4.53099 30.5016 5.66372 31.958 5.66372C33.4144 5.66372 34.5471 4.53099 34.5471 3.07461Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M44.3854 18.5726C44.1427 18.7344 44.1427 19.0581 44.3854 19.3008C44.4288 19.3225 44.4663 19.3442 44.5012 19.3643C44.5964 19.4193 44.6715 19.4626 44.79 19.4626C44.9518 19.4626 45.0327 19.4626 45.1136 19.3008L50.891 13.6738C51.1337 13.512 51.1337 13.1884 50.891 12.9456C50.7292 12.7029 50.4055 12.7029 50.1628 12.9456L44.3854 18.5726Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M53.4877 12.6575L53.5018 12.6433C54.0822 12.0629 54.0822 10.997 53.5018 10.4166C52.8241 9.7389 51.8626 9.78126 51.3027 10.3878L51.2892 10.4025L51.2751 10.4166C50.6947 10.997 50.6947 12.0629 51.2751 12.6433L51.2892 12.6575L51.3027 12.6722C51.8777 13.295 52.8991 13.295 53.4741 12.6722L53.4877 12.6575ZM54.2089 13.3504C55.1798 12.3795 55.1798 10.6804 54.2089 9.70948C53.1571 8.65765 51.5389 8.65765 50.5679 9.70948C49.597 10.6804 49.597 12.3795 50.5679 13.3504C51.5389 14.4023 53.238 14.4023 54.2089 13.3504Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M58.8208 31.8786C58.8208 31.5549 58.5781 31.3122 58.2544 31.3122H49.5157C49.192 31.3122 48.9498 31.5549 48.9498 31.8786C48.9498 32.2022 49.192 32.4449 49.5157 32.4449H58.2544C58.5781 32.4449 58.7399 32.2831 58.8208 31.8786Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M60.8443 33.5487C61.7484 33.5487 62.4334 32.8637 62.4334 31.9596C62.4334 31.0555 61.7484 30.3705 60.8443 30.3705C59.9402 30.3705 59.2551 31.0555 59.2551 31.9596C59.2551 32.8637 59.9402 33.5487 60.8443 33.5487ZM60.8443 34.5487C62.3007 34.5487 63.4334 33.416 63.4334 31.9596C63.4334 30.5032 62.3007 29.3705 60.8443 29.3705C59.3879 29.3705 58.2551 30.5032 58.2551 31.9596C58.2551 33.416 59.3879 34.5487 60.8443 34.5487Z"
                          fill="" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5612 43.8203C44.3185 43.9821 43.6627 44.4526 43.9054 44.6953L50.5027 51.2774L51.2098 50.5703" fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M53.4877 53.517L53.5018 53.5029C54.0822 52.9225 54.0822 51.8565 53.5018 51.2761L53.4877 51.262L53.4741 51.2473C52.9143 50.6408 51.9527 50.5984 51.2751 51.2761C50.6947 51.8565 50.6947 52.9225 51.2751 53.5029L51.2892 53.517L51.3027 53.5317C51.8777 54.1546 52.8991 54.1546 53.4741 53.5317L53.4877 53.517ZM54.2089 50.569C53.238 49.5172 51.6198 49.5172 50.5679 50.569C49.597 51.5399 49.597 53.239 50.5679 54.21C51.5389 55.2618 53.238 55.2618 54.2089 54.21C55.1798 53.239 55.1798 51.5399 54.2089 50.569Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M32.5248 58.2627C32.4439 58.5821 32.2012 58.8217 31.9585 58.8217C31.6348 58.8217 31.3921 58.5821 31.3921 58.2627V49.5589C31.3921 49.2395 31.6348 49 31.9585 49C32.2821 49 32.5248 49.2395 32.5248 49.5589V58.2627Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M30.3689 60.8445C30.3689 61.7487 31.0539 62.4337 31.958 62.4337C32.8016 62.4337 33.5471 61.7285 33.5471 60.8445C33.5471 59.9404 32.8621 59.2554 31.958 59.2554C31.0539 59.2554 30.3689 59.9404 30.3689 60.8445ZM29.3689 60.8445C29.3689 62.3009 30.5016 63.4337 31.958 63.4337C33.3335 63.4337 34.5471 62.3009 34.5471 60.8445C34.5471 59.3882 33.4144 58.2554 31.958 58.2554C30.5016 58.2554 29.3689 59.3882 29.3689 60.8445Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.9455 50.1643C12.7028 50.3261 12.7028 50.6498 12.9455 50.8925C12.9889 50.9142 13.0264 50.9358 13.0613 50.956C13.1565 51.0109 13.2316 51.0543 13.3501 51.0543C13.431 51.0543 13.5928 51.0543 13.6737 50.8925L19.9038 44.6624C20.1466 44.5006 20.1466 44.1769 19.9038 43.9342C19.742 43.6915 19.4183 43.6915 19.1756 43.9342L12.9455 50.1643Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.4184 53.5023L10.4456 53.5317C11.0054 54.1382 11.9669 54.1805 12.6446 53.5029C13.225 52.9225 13.225 51.8565 12.6446 51.2761L12.6305 51.262L12.6169 51.2473C12.0571 50.6408 11.0956 50.5984 10.4179 51.2761L10.4037 51.2902L10.389 51.3038C9.76617 51.8788 9.76617 52.9002 10.389 53.4752L10.4184 53.5023ZM9.71077 54.21C8.65893 53.239 8.65893 51.5399 9.71077 50.569C10.7626 49.5172 12.3808 49.5172 13.3517 50.569C14.3227 51.5399 14.3227 53.239 13.3517 54.21C12.2999 55.2618 10.6817 55.2618 9.71077 54.21Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.58174 32.4449L14.4007 32.4449C14.7243 32.4449 14.8864 32.2831 14.8864 31.8786C14.8864 31.555 14.6437 31.3122 14.32 31.3122H5.58174C5.2581 31.3122 5.01536 31.555 5.01536 31.8786C5.01536 32.2022 5.2581 32.4449 5.58174 32.4449Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M3.07461 30.3705C2.1705 30.3705 1.48547 31.0555 1.48547 31.9596C1.48547 32.8637 2.17051 33.5487 3.07461 33.5487C3.97869 33.5487 4.6637 32.8637 4.6637 31.9596C4.6637 31.0555 3.9787 30.3705 3.07461 30.3705ZM3.07461 29.3705C1.61823 29.3705 0.485474 30.5032 0.485474 31.9596C0.485474 33.416 1.61823 34.5487 3.07461 34.5487C4.531 34.5487 5.6637 33.416 5.6637 31.9596C5.6637 30.5032 4.531 29.3705 3.07461 29.3705Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.8646 12.9456C12.6219 13.1075 12.6219 13.4311 12.8646 13.6738L18.8021 19.3477C18.8454 19.3694 18.883 19.3911 18.9179 19.4112C19.0131 19.4662 19.0882 19.5095 19.2066 19.5095C19.3685 19.5095 19.5302 19.5095 19.5302 19.3477C19.773 19.1859 19.773 18.8622 19.5302 18.6195L13.5928 12.9456C13.431 12.7029 13.1074 12.7029 12.8646 12.9456Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.4037 10.4307L10.389 10.4443C9.76617 11.0192 9.76617 12.0407 10.389 12.6156L10.4184 12.6428L10.4456 12.6722C11.0205 13.295 12.042 13.295 12.6169 12.6722L12.6305 12.6575L12.6446 12.6433C13.225 12.0629 13.225 10.997 12.6446 10.4166L12.6305 10.4025L12.6169 10.3878C12.0571 9.78126 11.0956 9.7389 10.4179 10.4166L10.4037 10.4307ZM13.3517 13.3504C14.3227 12.3795 14.3227 10.6804 13.3517 9.70948C12.3808 8.65765 10.7626 8.65765 9.71077 9.70948C8.65893 10.6804 8.65893 12.3795 9.71077 13.3504C10.6817 14.4023 12.3808 14.4023 13.3517 13.3504Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M19.2422 18.485C18.8978 18.3057 18.6395 18.485 18.4673 18.754C18.2951 19.1125 18.4673 19.3815 18.7256 19.5608C23.1164 21.6227 27.0067 23.0001 31.8279 23.0001C36.6492 23.0001 40.7255 21.5327 45.1163 19.4708C45.3746 19.2916 45.5468 18.9329 45.3746 18.664C45.2024 18.3951 44.858 18.2158 44.5997 18.3951C40.4672 20.457 36.477 21.8347 31.8279 21.8347C27.1789 21.8347 23.4608 20.5469 19.2422 18.485Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M44.6787 43.8655C44.9214 44.0273 45.0832 44.2701 44.9214 44.5937C44.7596 44.7555 44.5978 44.9173 44.436 44.9173C44.3551 44.9173 44.2741 44.9173 44.1932 44.8365C40.2286 42.9755 36.3282 42.4778 31.9591 42.4778C27.5899 42.4778 23.7371 42.9286 19.8534 44.7896C19.6106 44.9514 19.287 44.7896 19.1252 44.5468C18.9634 44.3041 19.1252 43.9805 19.3679 43.8186C23.4134 41.9577 27.3472 41.426 31.9591 41.426C36.49 41.426 40.5523 42.0046 44.6787 43.8655Z"
                          fill="" />
                      </g>
                      <defs>
                        <clipPath id="clip0_7928_12745">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">{{$vcategory->name}}</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">10</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
          @endforeach

          <div class="col-12">
            <div class="">
              <a href="#!" class="btn btn-outline-primary">
                <span>Consulter plus </span>

                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--explore categories-->
    <!--Now Courses-->

    <section class="py-lg-8 py-5">
        <div class="container py-lg-8">
          <div class="row">
            <div class="col-xl-5 col-lg-6">
              <div class="mb-5 mb-lg-8">
                <span class="fw-semibold text-primary">Cours tendance actuellement</span>
                <h2 class="h1 mt-3">Cours tendance actuellement</h2>
                <p class="mb-0">

                  Ce sont les formations qui répondent aux besoins actuels du marché du travail et aux intérêts populaires des apprenants
                </p>
              </div>
            </div>
            <div class="col-xl-7 col-lg-6 d-lg-flex justify-content-end d-none">
              <div>
                <img src="../../assets/images/landing-immigration/plane.png" alt="" style="transform: rotate(226deg); filter: opacity(0.5)">
              </div>
            </div>
          </div>
          <div class="row gy-4 gy-xl-0">
            @foreach ($allCourse as $course)
            <div class="col-xl-3 col-md-6 col-12">
              <div class="card card-lift h-100 text-center text-lg-start">
                <div class="p-2">
                  <a href="#"><img src="{{ asset('courss/images/'.$course->image) }}" alt="" class="img-fluid rounded-3 w-100"></a>
                </div>
                <div class="card-body pt-2">
                  <h3><a class="text-inherit" href="#!">{{$course->title}}</a></h3>
                  <p> ces formations sont des contenues de qualités qui vous permettront d'avoir les connasisances solides .</p>
                  <a href="{{ route('detail.course', $course->slug) }}" class="icon-link icon-link-hover link-primary fw-semibold">
                    <span>View Details</span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            @endforeach



          </div>
        </div>
      </section>



    <section class="py-xl-8 py-6 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-column gap-4 text-center mb-xl-7 mb-5">
              <div class="d-flex flex-column gap-2">
                <h2 class="h1 mb-0">Ce que disent nos clients</h2>
                <p class="mb-0">Nos clients partagent régulièrement leurs expériences positives et témoignent de l'impact de nos formations sur leur développement personnel et professionnel.</p>
              </div>

              <div class="lh-1 d-flex flex-row gap-3 align-items-center justify-content-center">
                <span>4.5/5</span>
                <span class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                  </svg>
                </span>

                <span class="text-primary">Plus de 8 500 avis</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row gy-5">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="card shadow-lg">
              <div class="card-body p-5 d-flex flex-column gap-3">
                <div class="lh-1">
                  <span class="align-text-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                      <path
                        d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                    </svg>
                  </span>

                  <span class="ms-2">4.5/5</span>
                </div>
                <div class="d-flex flex-column gap-6">
                  <div class="d-flex flex-column gap-2">
                    <span class="h4 mb-0"> Institut de Recherche Technologique!</span>
                    <p class="mb-0">
                      "Nous avons utilisé VTP Formation pour développer les compétences de notre équipe. Les cours étaient bien adaptés, flexibles et soutenus par un excellent service. Nous avons constaté une amélioration notable des compétences et de la productivité de nos employés. Nous recommandons vivement VTP Formation"
                    </p>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <div>
                        <img src="assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                      </div>
                      <div class="d-flex flex-column">
                        <span>Institut Technologie et de recherche</span>
                        <span class="text-secondary">Fondateur de ISPR</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Consulter le cours</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="card shadow-lg">
              <div class="card-body p-5 d-flex flex-column gap-3">
                <div class="lh-1">
                  <span class="align-text-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                  </span>

                  <span class="ms-2">5.0/5</span>
                </div>
                <div class="d-flex flex-column gap-6">
                  <div class="d-flex flex-column gap-2">
                    <span class="h4 mb-0">Direction Générale des Finances Publiques!</span>
                    <p class="mb-0">
                      "Nous avons récemment intégré les services de VTP Formation pour améliorer les compétences de nos fonctionnaires. La plateforme a offert des formations adaptées à nos besoins spécifiques, avec des contenus actuels et pertinents. Les cours sont bien structurés, et le soutien offert a été exceptionnel."
                    </p>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <div>
                        <img src="assets/images/avatar/avatar-4.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                      </div>
                      <div class="d-flex flex-column">
                        <span>Vallabh Sompura</span>
                        <span class="text-secondary">College Freshman</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Continuer vers le cours</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="card shadow-lg">
              <div class="card-body p-5 d-flex flex-column gap-3">
                <div class="lh-1">
                  <span class="align-text-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                  </span>

                  <span class="ms-2">5.0/5</span>
                </div>
                <div class="d-flex flex-column gap-6">
                  <div class="d-flex flex-column gap-2">
                    <span class="h4 mb-0">Perfect for Career Advancement!</span>
                    <p class="mb-0">
                      "Nous avons fait appel à VTP Formation pour améliorer les compétences techniques et managériales de notre équipe. Les formations proposées étaient non seulement pertinentes pour notre secteur industriel, mais également adaptées à nos besoins spécifiques. Les formateurs étaient experts et les supports de cours de haute qualité."
                    </p>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-row gap-3 align-items-center">
                      <div>
                        <img src="assets/images/avatar/avatar-3.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                      </div>
                      <div class="d-flex flex-column">
                        <span>Chef de projets Si </span>
                        <span class="text-secondary">Marc Lefranck</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Continuer le cours</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Testimonials-->
    <!--Coding and Hiring-->
    <section class="py-xl-8 py-6">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-md-8 col-12 mx-auto">
            <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
              <h2 class="mb-0 h1">Comment Nous Organisons nos formations</h2>
              <p class="mb-0">ous adoptons une approche méthodique pour organiser nos formations afin de garantir une expérience d'apprentissage efficace et adaptée aux besoins de chaque apprenant. Voici comment nous procédons!</p>
            </div>
          </div>
        </div>
        <div class="row gy-6">
          <div class="col-md-6 col-12">
            <div class="d-flex flex-column gap-xl-8 gap-6">
              <div class="d-flex flex-row gap-5">
                <div>
                  <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_8075_497)">
                      <path
                        d="M81.7954 68.4606H6.35197C4.68041 68.4606 3.00884 67.792 1.89446 66.5662C0.668641 65.3404 0 63.6688 0 62.1087V7.83842C0 6.16685 0.668641 4.49528 1.89446 3.26946C3.12027 2.04364 4.68041 1.375 6.35197 1.375H81.7954C83.467 1.375 85.1386 2.04364 86.253 3.26946C87.4788 4.49528 88.1474 6.05541 88.1474 7.83842V62.1087C88.1474 63.7802 87.4788 65.4518 86.253 66.5662C85.1386 67.792 83.467 68.4606 81.7954 68.4606ZM6.35197 2.82371C5.01472 2.82371 3.78886 3.38089 2.89736 4.27239C2.00585 5.27533 1.44868 6.50116 1.44868 7.72697V61.9972C1.44868 63.2231 1.89442 64.4489 2.89736 65.4518C3.9003 66.4547 5.12613 67.012 6.46338 67.012H81.9069C83.2441 67.012 84.4699 66.4547 85.3614 65.5632C86.2529 64.6717 86.8102 63.4459 86.8102 62.1087V7.83842C86.8102 6.50116 86.2529 5.27534 85.3614 4.38384C84.4699 3.49233 83.2441 2.93516 81.9069 2.93516H6.35197V2.82371Z"
                        fill="#754FFE" />
                      <path
                        d="M56.6104 81.8332H31.7598C31.5369 81.8332 31.314 81.7218 31.2026 81.4989C31.0912 81.276 30.9797 81.0531 31.0912 80.8303L34.6571 67.4577C34.7686 67.1234 34.9915 66.9005 35.3258 66.9005H53.1559C53.4902 66.9005 53.8245 67.1234 53.8245 67.4577L57.3905 80.8303C57.5019 81.0531 57.3905 81.276 57.2791 81.4989C56.9448 81.8332 56.8333 81.8332 56.6104 81.8332ZM32.5399 80.3845H55.6075L52.4872 68.4606H35.7715L32.5399 80.3845Z"
                        fill="#754FFE" />
                      <path
                        d="M65.5255 86.625H22.6219C22.1761 86.625 21.9532 86.2907 21.8418 85.9564L21.7304 81.1646C21.7304 80.9417 21.8418 80.8302 21.9533 80.6074C22.0647 80.4959 22.2876 80.3845 22.5105 80.3845H65.4141C65.8598 80.3845 66.0827 80.7188 66.1941 81.0531L66.3055 85.845C66.3055 86.0678 66.1941 86.1793 66.0827 86.4022C65.8598 86.625 65.7483 86.625 65.5255 86.625ZM23.402 85.1763H64.8569V81.8332H23.402V85.1763Z"
                        fill="#754FFE" />
                      <path
                        d="M16.9386 19.0937C16.7157 19.0937 16.6043 18.9822 16.3814 18.8708L12.9268 15.5276C12.8153 15.4162 12.7039 15.1933 12.7039 14.9704C12.7039 14.7476 12.8153 14.6361 12.9268 14.4133L16.3814 11.0701C16.7157 10.8472 17.1614 10.8472 17.3843 11.0701C17.6072 11.4044 17.6072 11.8502 17.3843 12.0731L14.4869 14.859L17.3843 17.6449C17.7186 17.8678 17.7186 18.425 17.3843 18.6479C17.2728 18.9822 17.05 19.0937 16.9386 19.0937Z"
                        fill="#754FFE" />
                      <path
                        d="M26.2993 19.0936C26.0765 19.0936 25.965 18.9822 25.7422 18.8708C25.5193 18.5364 25.5193 18.0907 25.7422 17.8678L28.6396 15.0819L25.7422 12.2959C25.4078 12.0731 25.4078 11.5159 25.7422 11.293C25.965 10.9587 26.5222 10.9587 26.7451 11.293L30.1997 14.6361C30.3111 14.7476 30.4226 14.9704 30.4226 15.1933C30.4226 15.4162 30.3111 15.5276 30.1997 15.7505L26.7451 19.0936C26.6337 18.9822 26.5222 19.0936 26.2993 19.0936Z"
                        fill="#754FFE" />
                      <path
                        d="M23.7363 17.9793H19.7245C19.2788 17.9793 18.9444 17.6449 18.9444 17.1992C18.9444 16.7534 19.2788 16.4191 19.7245 16.4191H23.7363C24.182 16.4191 24.5163 16.7534 24.5163 17.1992C24.5163 17.6449 24.182 17.9793 23.7363 17.9793Z"
                        fill="#754FFE" />
                      <path
                        d="M50.8157 24.9999H12.8154C12.3696 24.9999 12.0353 24.6655 12.0353 24.2198C12.0353 23.774 12.3696 23.4397 12.8154 23.4397H50.8157C51.2614 23.4397 51.5957 23.774 51.5957 24.2198C51.4843 24.6655 51.15 24.9999 50.8157 24.9999Z"
                        fill="#754FFE" />
                      <path
                        d="M36.7745 32.3548H12.8154C12.3696 32.3548 12.0353 32.0204 12.0353 31.5747C12.0353 31.1289 12.3696 30.7946 12.8154 30.7946H36.7745C37.2203 30.7946 37.5546 31.1289 37.5546 31.5747C37.5546 32.0204 37.1088 32.3548 36.7745 32.3548Z"
                        fill="#754FFE" />
                      <path
                        d="M45.5781 32.3548H39.7833C39.3376 32.3548 39.0033 32.0204 39.0033 31.5747C39.0033 31.1289 39.3376 30.7946 39.7833 30.7946H45.5781C46.0239 30.7946 46.3581 31.1289 46.3581 31.5747C46.3581 32.0204 45.9124 32.3548 45.5781 32.3548Z"
                        fill="#754FFE" />
                      <path
                        d="M36.7745 39.041H12.8154C12.3696 39.041 12.0353 38.7067 12.0353 38.261C12.0353 37.8152 12.3696 37.4809 12.8154 37.4809H36.7745C37.2203 37.4809 37.5546 37.8152 37.5546 38.261C37.4431 38.7067 37.1088 39.041 36.7745 39.041Z"
                        fill="#754FFE" />
                      <path
                        d="M45.5781 39.041H39.7833C39.3376 39.041 39.0033 38.7067 39.0033 38.261C39.0033 37.8152 39.3376 37.4809 39.7833 37.4809H45.5781C46.0239 37.4809 46.3581 37.8152 46.3581 38.261C46.2467 38.7067 45.9124 39.041 45.5781 39.041Z"
                        fill="#754FFE" />
                      <path
                        d="M36.7745 47.176H12.8154C12.3696 47.176 12.0353 46.8417 12.0353 46.3959C12.0353 45.9502 12.3696 45.6159 12.8154 45.6159H36.7745C37.2203 45.6159 37.5546 45.9502 37.5546 46.3959C37.4431 46.8417 37.1088 47.176 36.7745 47.176Z"
                        fill="#754FFE" />
                      <path
                        d="M45.5781 47.176H39.7833C39.3376 47.176 39.0033 46.8417 39.0033 46.3959C39.0033 45.9502 39.3376 45.6159 39.7833 45.6159H45.5781C46.0239 45.6159 46.3581 45.9502 46.3581 46.3959C46.2467 46.8417 45.9124 47.176 45.5781 47.176Z"
                        fill="#754FFE" />
                      <path
                        d="M58.8392 52.4136C58.6163 52.4136 58.5049 52.3021 58.282 52.1907L54.8275 48.8476C54.716 48.7361 54.6046 48.5133 54.6046 48.2904C54.6046 48.0675 54.716 47.9561 54.8275 47.7332L58.282 44.3901C58.6163 44.1672 59.0621 44.1672 59.285 44.3901C59.5079 44.7244 59.5079 45.1701 59.285 45.393L56.3875 48.1789L59.285 51.0763C59.6193 51.2992 59.6193 51.8564 59.285 52.0793C59.285 52.3021 59.0621 52.4136 58.8392 52.4136Z"
                        fill="#754FFE" />
                      <path
                        d="M68.3114 52.4136C68.0886 52.4136 67.9771 52.3021 67.7543 52.1907C67.5314 51.8564 67.5314 51.4106 67.7543 51.1878L70.6517 48.2904L67.7543 45.5044C67.4199 45.2815 67.4199 44.7244 67.7543 44.5015C67.9771 44.1672 68.5343 44.1672 68.7572 44.5015L72.2118 47.8446C72.3232 47.9561 72.4347 48.1789 72.4347 48.4018C72.4347 48.6247 72.3232 48.7361 72.2118 48.959L68.7572 52.3021C68.6458 52.3021 68.4229 52.4136 68.3114 52.4136Z"
                        fill="#754FFE" />
                      <path
                        d="M65.7484 51.1878H61.7366C61.2909 51.1878 60.9565 50.8534 60.9565 50.4077C60.9565 49.9619 61.2909 49.6276 61.7366 49.6276H65.7484C66.1941 49.6276 66.5284 49.9619 66.5284 50.4077C66.417 50.9649 66.1941 51.1878 65.7484 51.1878Z"
                        fill="#754FFE" />
                      <path
                        d="M78.3408 35.2522H56.3875C55.9418 35.2522 55.6075 34.9178 55.6075 34.4721V10.5129C55.6075 10.0672 55.9418 9.73284 56.3875 9.73284H78.3408C78.7866 9.73284 79.1209 10.0672 79.1209 10.5129V34.4721C79.1209 35.0293 78.7866 35.2522 78.3408 35.2522ZM57.1676 33.8034H77.6722V11.4044H57.1676V33.8034Z"
                        fill="#754FFE" />
                    </g>
                    <defs>
                      <clipPath id="clip0_8075_497">
                        <rect width="88" height="88" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h3 class="mb-0">Évaluation des besoins</h3>
                    <p class="mb-0 pe-xl-4">Nous commençons par comprendre les besoins spécifiques de nos clients, qu'il s'agisse d'institutions ou de particuliers.</p>
                  </div>
                  <div class="">
                    <a href="#!" class="icon-link icon-link-hover">
                      <span>Nous Contacter</span>

                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row gap-5">
                <div>
                  <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M60.1467 86.7114H0.777207C0.333323 86.7114 0.000396729 86.3785 0.000396729 86.0456V21.1276C0.000396729 20.9056 0.111381 20.7947 0.222352 20.5727L19.1984 1.5967C19.3093 1.48573 19.5313 1.37476 19.7532 1.37476H60.2576C60.7015 1.37476 61.0344 1.70767 61.0344 2.04058V17.9094C61.0344 18.3533 60.7015 18.5753 60.2576 18.5753C59.8137 18.5753 59.4808 18.2423 59.4808 17.9094V2.92835H19.9752L1.44301 21.4605V85.2688H59.3699V49.3142C59.3699 48.8703 59.7028 48.6484 60.1467 48.6484C60.5906 48.6484 60.9235 48.9813 60.9235 49.3142V85.9346C60.8125 86.3785 60.5906 86.7114 60.1467 86.7114Z"
                      fill="#754FFE" />
                    <path
                      d="M55.0408 51.0899C50.491 51.0899 46.2741 49.3144 43.056 46.0962C39.8378 42.8781 38.0623 38.6612 38.0623 34.1114C38.0623 29.5616 39.8378 25.3447 43.056 22.1265C46.2741 18.9083 50.491 17.1328 55.0408 17.1328C59.5906 17.1328 63.8076 18.9083 67.0257 22.1265C73.573 28.7848 73.573 39.438 67.0257 46.0962C63.8076 49.3144 59.4796 51.0899 55.0408 51.0899ZM55.0408 18.5754C50.9349 18.5754 47.0509 20.24 44.0547 23.1252C41.1695 26.0105 39.5049 29.8945 39.5049 34.1114C39.5049 38.3283 41.1695 42.1013 44.0547 45.0975C46.94 47.9827 50.8239 49.6473 55.0408 49.6473C59.1467 49.6473 63.0307 47.9827 66.027 45.0975C72.0194 39.1051 72.0194 29.2286 66.027 23.1252C63.0307 20.24 59.1467 18.5754 55.0408 18.5754Z"
                      fill="#754FFE" />
                    <path
                      d="M19.6434 21.9048H1.88808C1.44419 21.9048 1.11126 21.5719 1.11126 21.239C1.11126 20.9061 1.44419 20.5732 1.88808 20.5732H18.9776V3.03977C18.9776 2.59589 19.3105 2.37394 19.7544 2.37394C20.1983 2.37394 20.5312 2.70686 20.5312 3.03977V21.128C20.4202 21.5719 20.0873 21.9048 19.6434 21.9048Z"
                      fill="#754FFE" />
                    <path
                      d="M51.9351 48.9812H46.4976C46.0537 48.9812 45.7208 48.6483 45.7208 48.3154C45.7208 47.8715 46.0537 47.6495 46.4976 47.6495H51.9351C52.379 47.6495 52.712 47.9825 52.712 48.3154C52.712 48.6483 52.379 48.9812 51.9351 48.9812ZM42.5026 48.9812H38.7296C38.2857 48.9812 37.9528 48.6483 37.9528 48.3154C37.9528 47.8715 38.2857 47.6495 38.7296 47.6495H42.5026C42.9465 47.6495 43.2794 47.9825 43.2794 48.3154C43.1684 48.6483 42.9465 48.9812 42.5026 48.9812ZM35.2895 48.9812H8.87841C8.43453 48.9812 8.1016 48.6483 8.1016 48.3154C8.1016 47.8715 8.43453 47.6495 8.87841 47.6495H35.1785C35.6224 47.6495 35.9554 47.9825 35.9554 48.3154C35.9554 48.6483 35.6224 48.9812 35.2895 48.9812ZM51.9351 43.7656H18.9767C18.5329 43.7656 18.2 43.4327 18.2 43.0997C18.2 42.6559 18.5329 42.4339 18.9767 42.4339H51.9351C52.379 42.4339 52.712 42.7668 52.712 43.0997C52.712 43.4327 52.379 43.7656 51.9351 43.7656ZM14.316 43.7656H8.87841C8.43453 43.7656 8.1016 43.4327 8.1016 43.0997C8.1016 42.6559 8.43453 42.4339 8.87841 42.4339H14.316C14.7599 42.4339 15.0928 42.7668 15.0928 43.0997C15.0928 43.4327 14.7599 43.7656 14.316 43.7656ZM51.9351 38.5499H25.635C25.1911 38.5499 24.8583 38.217 24.8583 37.8841C24.8583 37.4402 25.1911 37.2183 25.635 37.2183H51.9351C52.379 37.2183 52.712 37.5512 52.712 37.8841C52.712 38.217 52.379 38.5499 51.9351 38.5499ZM22.1949 38.5499H18.4219C17.978 38.5499 17.6451 38.217 17.6451 37.8841C17.6451 37.4402 17.978 37.2183 18.4219 37.2183H22.1949C22.6388 37.2183 22.9717 37.5512 22.9717 37.8841C22.8608 38.217 22.5278 38.5499 22.1949 38.5499ZM14.316 38.5499H8.87841C8.43453 38.5499 8.1016 38.217 8.1016 37.8841C8.1016 37.4402 8.43453 37.2183 8.87841 37.2183H14.316C14.7599 37.2183 15.0928 37.5512 15.0928 37.8841C15.0928 38.217 14.7599 38.5499 14.316 38.5499ZM51.9351 33.5562H46.4976C46.0537 33.5562 45.7208 33.2233 45.7208 32.8904C45.7208 32.4465 46.0537 32.2246 46.4976 32.2246H51.9351C52.379 32.2246 52.712 32.5575 52.712 32.8904C52.712 33.3343 52.379 33.5562 51.9351 33.5562ZM42.5026 33.5562H38.7296C38.2857 33.5562 37.9528 33.2233 37.9528 32.8904C37.9528 32.4465 38.2857 32.2246 38.7296 32.2246H42.5026C42.9465 32.2246 43.2794 32.5575 43.2794 32.8904C43.1684 33.3343 42.9465 33.5562 42.5026 33.5562ZM35.2895 33.5562H8.87841C8.43453 33.5562 8.1016 33.2233 8.1016 32.8904C8.1016 32.4465 8.43453 32.2246 8.87841 32.2246H35.1785C35.6224 32.2246 35.9554 32.5575 35.9554 32.8904C35.9554 33.3343 35.6224 33.5562 35.2895 33.5562ZM51.9351 28.2296H46.4976C46.0537 28.2296 45.7208 27.8967 45.7208 27.5638C45.7208 27.2309 46.0537 26.898 46.4976 26.898H51.9351C52.379 26.898 52.712 27.2309 52.712 27.5638C52.712 27.8967 52.379 28.2296 51.9351 28.2296ZM42.3917 28.2296H8.87841C8.43453 28.2296 8.1016 27.8967 8.1016 27.5638C8.1016 27.2309 8.43453 26.898 8.87841 26.898H42.2807C42.7245 26.898 43.0575 27.2309 43.0575 27.5638C43.0575 27.8967 42.7246 28.2296 42.3917 28.2296Z"
                      fill="#754FFE" />
                    <path
                      d="M51.9351 74.3934H46.4976C46.0537 74.3934 45.7208 74.0605 45.7208 73.7276C45.7208 73.3947 46.0537 73.0618 46.4976 73.0618H51.9351C52.379 73.0618 52.712 73.3947 52.712 73.7276C52.712 74.0605 52.379 74.3934 51.9351 74.3934ZM42.5026 74.3934H38.7296C38.2857 74.3934 37.9528 74.0605 37.9528 73.7276C37.9528 73.3947 38.2857 73.0618 38.7296 73.0618H42.5026C42.9465 73.0618 43.2794 73.3947 43.2794 73.7276C43.2794 74.0605 42.9465 74.3934 42.5026 74.3934ZM35.2895 74.3934H8.87841C8.43453 74.3934 8.1016 74.0605 8.1016 73.7276C8.1016 73.3947 8.43453 73.0618 8.87841 73.0618H35.1785C35.6224 73.0618 35.9554 73.3947 35.9554 73.7276C35.9554 74.0605 35.6224 74.3934 35.2895 74.3934ZM51.9351 69.2888H18.9767C18.5329 69.2888 18.2 68.9559 18.2 68.623C18.2 68.1791 18.5329 67.9571 18.9767 67.9571H51.9351C52.379 67.9571 52.712 68.29 52.712 68.623C52.712 68.9559 52.379 69.2888 51.9351 69.2888ZM14.316 69.2888H8.87841C8.43453 69.2888 8.1016 68.9559 8.1016 68.623C8.1016 68.1791 8.43453 67.9571 8.87841 67.9571H14.316C14.7599 67.9571 15.0928 68.29 15.0928 68.623C15.0928 68.9559 14.7599 69.2888 14.316 69.2888ZM51.9351 63.9622H25.635C25.1911 63.9622 24.8583 63.6293 24.8583 63.2963C24.8583 62.8525 25.1911 62.6305 25.635 62.6305H51.9351C52.379 62.6305 52.712 62.9634 52.712 63.2963C52.712 63.6293 52.379 63.9622 51.9351 63.9622ZM22.1949 63.9622H18.4219C17.978 63.9622 17.6451 63.6293 17.6451 63.2963C17.6451 62.8525 17.978 62.6305 18.4219 62.6305H22.1949C22.6388 62.6305 22.9717 62.9634 22.9717 63.2963C22.8608 63.6293 22.5278 63.9622 22.1949 63.9622ZM14.316 63.9622H8.87841C8.43453 63.9622 8.1016 63.6293 8.1016 63.2963C8.1016 62.8525 8.43453 62.6305 8.87841 62.6305H14.316C14.7599 62.6305 15.0928 62.9634 15.0928 63.2963C15.0928 63.6293 14.7599 63.9622 14.316 63.9622ZM51.9351 59.0794H46.4976C46.0537 59.0794 45.7208 58.7465 45.7208 58.4136C45.7208 57.9697 46.0537 57.7478 46.4976 57.7478H51.9351C52.379 57.7478 52.712 58.0807 52.712 58.4136C52.712 58.7465 52.379 59.0794 51.9351 59.0794ZM42.5026 59.0794H38.7296C38.2857 59.0794 37.9528 58.7465 37.9528 58.4136C37.9528 57.9697 38.2857 57.7478 38.7296 57.7478H42.5026C42.9465 57.7478 43.2794 58.0807 43.2794 58.4136C43.1684 58.7465 42.9465 59.0794 42.5026 59.0794ZM35.2895 59.0794H8.87841C8.43453 59.0794 8.1016 58.7465 8.1016 58.4136C8.1016 57.9697 8.43453 57.7478 8.87841 57.7478H35.1785C35.6224 57.7478 35.9554 58.0807 35.9554 58.4136C35.9554 58.7465 35.6224 59.0794 35.2895 59.0794ZM51.9351 53.7528H46.4976C46.0537 53.7528 45.7208 53.4199 45.7208 53.087C45.7208 52.6431 46.0537 52.4212 46.4976 52.4212H51.9351C52.379 52.4212 52.712 52.7541 52.712 53.087C52.712 53.4199 52.379 53.7528 51.9351 53.7528ZM42.3917 53.7528H8.87841C8.43453 53.7528 8.1016 53.4199 8.1016 53.087C8.1016 52.6431 8.43453 52.4212 8.87841 52.4212H42.2807C42.7245 52.4212 43.0575 52.7541 43.0575 53.087C43.0575 53.4199 42.7246 53.7528 42.3917 53.7528Z"
                      fill="#754FFE" />
                    <path
                      d="M69.5788 52.7542C69.3569 52.7542 69.2459 52.6432 69.024 52.5323L64.1412 47.6495C64.0302 47.5386 63.9193 47.3166 63.9193 47.0947C63.9193 46.8727 64.0303 46.6508 64.2522 46.5398C64.8071 46.096 65.4729 45.5411 66.0277 44.9862C66.5826 44.4314 67.0265 43.8765 67.4703 43.2107C67.5813 42.9888 67.8033 42.9888 68.0252 42.8778C68.2471 42.8778 68.4691 42.9888 68.58 43.0997L73.4628 47.9825C73.7957 48.3154 73.7957 48.7593 73.4628 48.9812L70.0227 52.4213C69.9117 52.6432 69.6898 52.7542 69.5788 52.7542ZM65.6948 47.2057L69.4678 50.9787L71.7982 48.6483L68.0252 44.8753C67.6923 45.3192 67.3594 45.763 66.9155 46.096C66.5826 46.5398 66.1387 46.8728 65.6948 47.2057Z"
                      fill="#754FFE" />
                    <path
                      d="M81.8955 66.9586C80.3419 66.9586 78.7883 66.2928 77.6786 65.1831L67.0254 54.5299C66.6925 54.197 66.6925 53.7531 67.0254 53.5311L74.4604 46.0961C74.5714 45.9851 74.7933 45.8742 75.0153 45.8742C75.2372 45.8742 75.3482 45.9851 75.5701 46.0961L86.2234 56.7493C87.3331 57.859 87.9989 59.4126 87.9989 60.9662C87.9989 62.5198 87.3331 64.0734 86.2234 65.1831C85.0027 66.2928 83.4491 66.9586 81.8955 66.9586ZM68.579 54.086L78.6774 64.1844C79.5652 65.0721 80.6748 65.516 81.8955 65.516C83.1162 65.516 84.2259 65.0721 85.1137 64.1844C86.0015 63.2966 86.4454 62.1869 86.4454 60.9662C86.4454 59.7455 86.0015 58.6358 85.1137 57.7481L75.0153 47.6497L68.579 54.086Z"
                      fill="#754FFE" />
                    <path
                      d="M81.0068 62.9642C80.23 62.9642 79.5642 62.6313 79.0093 62.1874C77.8996 61.0777 77.8996 59.3021 79.0093 58.1924C80.1191 57.0827 81.8946 57.0827 83.0043 58.1924C83.5591 58.7473 83.7811 59.4131 83.7811 60.1899C83.7811 60.9667 83.4482 61.6325 82.8933 62.1874C82.4494 62.6313 81.7836 62.9642 81.0068 62.9642ZM81.0068 58.7473C80.6739 58.7473 80.341 58.8582 80.008 59.1912C79.4532 59.746 79.4532 60.6338 80.008 61.1886C80.5629 61.7435 81.4507 61.7435 82.0056 61.1886C82.2275 60.9667 82.4494 60.5228 82.4494 60.1899C82.4494 59.857 82.3385 59.5241 82.0056 59.1912C81.6727 58.8582 81.3397 58.7473 81.0068 58.7473Z"
                      fill="#754FFE" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h3 class="mb-0">Choix des formats</h3>
                    <p class="mb-0 pe-xl-4">ous proposons divers formats de formation, y compris des cours en ligne, des sessions en présentiel, des ateliers interactifs, et des formations hybrides.</p>
                  </div>
                  <div>
                    <a href="#!" class="icon-link icon-link-hover">
                      <span>Nous Contacter</span>

                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="d-flex flex-column gap-xl-8 gap-6">
              <div class="d-flex flex-row gap-5">
                <div>
                  <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_8075_503)">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M75.7262 1.375H24.5125C23.7531 1.375 23.1375 1.99061 23.1375 2.75V74.4437C23.1375 75.2031 23.7531 75.8187 24.5125 75.8187H75.7262C76.4856 75.8187 77.1012 75.2031 77.1012 74.4437V2.75C77.1012 1.99061 76.4856 1.375 75.7262 1.375ZM24.5125 0C22.9937 0 21.7625 1.23122 21.7625 2.75V74.4437C21.7625 75.9625 22.9937 77.1937 24.5125 77.1937H75.7262C77.245 77.1937 78.4762 75.9625 78.4762 74.4437V2.75C78.4762 1.23122 77.245 0 75.7262 0H24.5125Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.7625 10.806H10.9988C9.48004 10.806 8.24883 12.0372 8.24883 13.556V85.2497C8.24883 86.7685 9.48004 87.9997 10.9988 87.9997H62.2126C63.7314 87.9997 64.9626 86.7685 64.9626 85.2497V77.1937H63.5876V85.2497C63.5876 86.0091 62.972 86.6247 62.2126 86.6247H10.9988C10.2394 86.6247 9.62383 86.0091 9.62383 85.2497V13.556C9.62383 12.7966 10.2394 12.181 10.9988 12.181H21.7625V10.806Z"
                        fill="#754FFE" />
                      <path
                        d="M69.1819 18.4314H51.065C50.4349 18.4314 49.9622 17.9588 49.9622 17.3286C49.9622 16.6985 50.4349 16.2259 51.065 16.2259H69.0244C69.6546 16.2259 70.1271 16.6985 70.1271 17.3286C70.1271 17.9588 69.6545 18.4314 69.1819 18.4314Z"
                        fill="#754FFE" />
                      <path
                        d="M69.1819 39.6995H51.065C50.4349 39.6995 49.9622 39.227 49.9622 38.5968C49.9622 37.9667 50.4349 37.494 51.065 37.494H69.0244C69.6546 37.494 70.1271 37.9667 70.1271 38.5968C70.1271 39.227 69.6545 39.6995 69.1819 39.6995Z"
                        fill="#754FFE" />
                      <path
                        d="M32.945 21.5821C32.4724 21.5821 32.3148 21.4245 32.1573 21.1095L29.9517 18.1163C29.6366 17.6436 29.7942 17.0135 30.1093 16.6984C30.5819 16.3833 31.212 16.5408 31.5271 16.8559L32.945 18.9039L39.5616 13.2326C40.0342 12.9175 40.6643 12.9175 40.9794 13.3901C41.2945 13.8627 41.2945 14.4929 40.8219 14.8079L33.4176 21.267C33.4176 21.4246 33.1025 21.5821 32.945 21.5821Z"
                        fill="#754FFE" />
                      <path
                        d="M33.736 42.6928C33.421 42.6928 33.2634 42.5353 33.1058 42.3777C32.6332 42.0627 32.6332 41.275 33.1058 40.9599L38.7773 34.8159C39.0924 34.3433 39.88 34.3433 40.1951 34.8159C40.6677 35.131 40.6677 35.9187 40.1951 36.2338L34.5237 42.3777C34.2086 42.5353 33.8936 42.6928 33.736 42.6928Z"
                        fill="#754FFE" />
                      <path
                        d="M39.405 42.6925C39.0899 42.6925 38.9324 42.535 38.6173 42.3774L32.946 36.2335C32.6309 35.7608 32.6309 35.1307 32.946 34.8156C33.4186 34.5005 34.0488 34.5005 34.3638 34.8156L40.0352 40.9596C40.3503 41.4322 40.3503 42.0624 40.0352 42.3774C39.8776 42.535 39.5625 42.6925 39.405 42.6925Z"
                        fill="#754FFE" />
                      <path
                        d="M32.945 64.1171C32.4724 64.1171 32.3148 63.9596 32.1573 63.6445L29.9517 60.6513C29.6366 60.1787 29.7942 59.5485 30.1093 59.2334C30.5819 58.9184 31.212 59.0759 31.5271 59.3909L32.945 61.439L39.5616 55.7676C40.0342 55.4525 40.6643 55.4525 40.9794 55.9251C41.2945 56.3977 41.2945 57.0279 40.8219 57.343L33.4176 63.802C33.4176 63.9596 33.1025 64.1171 32.945 64.1171Z"
                        fill="#754FFE" />
                      <path
                        d="M69.1819 60.8089H51.065C50.4349 60.8089 49.9622 60.3362 49.9622 59.7061C49.9622 59.0759 50.4349 58.6033 51.065 58.6033H69.0244C69.6546 58.6033 70.1271 59.0759 70.1271 59.7061C70.1271 60.3362 69.6545 60.8089 69.1819 60.8089Z"
                        fill="#754FFE" />
                    </g>
                    <defs>
                      <clipPath id="clip0_8075_503">
                        <rect width="88" height="88" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </div>
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h3 class="mb-0">Conception des programmes</h3>
                    <p class="mb-0 pe-xl-4">En fonction des besoins identifiés, nous concevons des programmes de formation sur mesure..</p>
                  </div>
                  <div>
                    <a href="#!" class="icon-link icon-link-hover">
                      <span>Nous Contacter</span>

                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row gap-5">
                <div class="">
                  <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M55.2847 29.9476C55.2847 29.454 55.6849 29.0539 56.1785 29.0539H86.6232C87.1168 29.0539 87.517 29.454 87.517 29.9476V35.9065C87.517 36.4001 87.1168 36.8003 86.6232 36.8003H56.1785C55.6849 36.8003 55.2847 36.4001 55.2847 35.9065V29.9476ZM57.0722 30.8414V35.0128H85.7295V30.8414H57.0722ZM58.5351 32.8729C58.5351 31.8376 59.3686 31.004 60.4039 31.004C61.4392 31.004 62.2728 31.8376 62.2728 32.8729C62.2728 33.9082 61.4392 34.7417 60.4039 34.7417C59.3686 34.7417 58.5351 33.9082 58.5351 32.8729ZM60.3452 32.8142C60.332 32.8274 60.3226 32.8457 60.3226 32.8729C60.3226 32.9001 60.332 32.9184 60.3452 32.9316C60.3584 32.9448 60.3767 32.9542 60.4039 32.9542C60.4311 32.9542 60.4494 32.9448 60.4626 32.9316C60.4758 32.9184 60.4853 32.9001 60.4853 32.8729C60.4853 32.8457 60.4758 32.8274 60.4626 32.8142C60.4494 32.801 60.4311 32.7915 60.4039 32.7915C60.3767 32.7915 60.3584 32.801 60.3452 32.8142ZM64.7107 32.8729C64.7107 31.8376 65.5442 31.004 66.5795 31.004C67.6149 31.004 68.4484 31.8376 68.4484 32.8729C68.4484 33.9082 67.6149 34.7417 66.5795 34.7417C65.5442 34.7417 64.7107 33.9082 64.7107 32.8729ZM66.5208 32.8142C66.5076 32.8274 66.4982 32.8457 66.4982 32.8729C66.4982 32.9001 66.5076 32.9184 66.5208 32.9316C66.534 32.9448 66.5523 32.9542 66.5795 32.9542C66.6067 32.9542 66.625 32.9448 66.6382 32.9316C66.6514 32.9184 66.6609 32.9001 66.6609 32.8729C66.6609 32.8457 66.6514 32.8274 66.6382 32.8142C66.6251 32.801 66.6067 32.7915 66.5795 32.7915C66.5523 32.7915 66.534 32.801 66.5208 32.8142Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M75.3918 14.6443C74.9871 10.7236 71.923 8.90935 69.1548 9.16887L69.1374 9.1705C66.7203 9.34954 64.3294 11.1728 64.0253 14.6443H75.3918ZM68.9967 7.38836C72.9577 7.0218 77.2242 9.89592 77.2242 15.5381C77.2242 16.0317 76.8241 16.4318 76.3305 16.4318H63.1125C62.6189 16.4318 62.2187 16.0317 62.2187 15.5381V14.888C62.2187 14.8724 62.2191 14.8567 62.22 14.841C62.4605 10.2713 65.633 7.64165 68.9967 7.38836Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M19.8842 9.17192C17.3441 9.17192 15.2524 11.2637 15.2524 13.8037V70.4678C15.2524 70.9614 14.8522 71.3616 14.3586 71.3616C13.865 71.3616 13.4649 70.9614 13.4649 70.4678V13.8037C13.4649 10.2765 16.3569 7.38442 19.8842 7.38442H69.0725C69.5661 7.38442 69.9663 7.78457 69.9663 8.27817C69.9663 8.77177 69.5661 9.17192 69.0725 9.17192H19.8842Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M63.0065 13.7768C63.5001 13.7768 63.9002 14.1769 63.9002 14.6705V29.9471C63.9002 30.4407 63.5001 30.8408 63.0065 30.8408C62.5129 30.8408 62.1127 30.4407 62.1127 29.9471V14.6705C62.1127 14.1769 62.5129 13.7768 63.0065 13.7768Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M63.0063 54.4061C63.5 54.4061 63.9001 54.8062 63.9001 55.2998V70.468C63.9001 71.6298 63.8809 72.6704 63.754 73.5586C63.6266 74.4506 63.3802 75.2737 62.8647 75.952C61.8074 77.3432 59.9219 77.7541 57.1558 77.7541C56.6622 77.7541 56.262 77.3539 56.262 76.8603C56.262 76.3667 56.6622 75.9666 57.1558 75.9666C59.9152 75.9666 60.9549 75.5107 61.4416 74.8704C61.698 74.533 61.8783 74.0492 61.9845 73.3059C62.0912 72.5588 62.1126 71.6357 62.1126 70.468V55.2998C62.1126 54.8062 62.5127 54.4061 63.0063 54.4061Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M1.5117 70.364C1.68226 70.1377 1.95005 70.0057 2.23343 70.0082L52.2882 70.4416C52.7775 70.4458 53.1722 70.8427 53.1743 71.3315L53.1743 71.3344L53.1749 71.355C53.1757 71.3774 53.1775 71.4149 53.1813 71.4656C53.1889 71.5671 53.2048 71.7202 53.2375 71.9097C53.3032 72.2911 53.4347 72.8063 53.6945 73.3432C54.1995 74.387 55.2052 75.5593 57.3313 75.9845C57.7811 76.0744 58.0897 76.4903 58.0456 76.9468C58.0015 77.4034 57.619 77.7524 57.1603 77.7546L57.156 76.8609C57.1603 77.7546 57.1603 77.7546 57.1603 77.7546L55.2063 77.7637C53.9601 77.7694 52.1753 77.7775 50.021 77.7868C45.7125 77.8054 39.9259 77.8291 34.014 77.8494C22.2037 77.89 9.8575 77.9173 7.8352 77.8627L7.80977 77.8616C5.399 77.7277 3.77586 75.8713 2.81953 74.3243C2.32509 73.5244 1.96496 72.7381 1.72884 72.1549C1.61027 71.8621 1.52171 71.6174 1.46215 71.4437C1.43235 71.3568 1.40973 71.2875 1.39418 71.2386L1.37611 71.1809L1.37102 71.1642L1.36945 71.1589L1.3689 71.1571C1.3689 71.1571 1.36852 71.1559 2.22545 70.9019L1.3689 71.1571C1.2884 70.8854 1.34114 70.5903 1.5117 70.364ZM3.52141 71.8073C3.72452 72.2742 3.99681 72.8293 4.33997 73.3844C5.2231 74.813 6.41287 75.9877 7.89688 76.0762C9.92456 76.1294 22.1984 76.1025 34.0079 76.0619C39.9191 76.0416 45.7051 76.0179 50.0133 75.9993C51.2988 75.9937 52.4527 75.9886 53.439 75.9842C52.8259 75.4023 52.3902 74.7515 52.0854 74.1217C51.7378 73.4033 51.5646 72.7236 51.4775 72.2222L3.52141 71.8073Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.7852 59.3084C22.7852 58.8148 23.1854 58.4147 23.679 58.4147H51.3068C51.8004 58.4147 52.2005 58.8148 52.2005 59.3084C52.2005 59.802 51.8004 60.2022 51.3068 60.2022H23.679C23.1854 60.2022 22.7852 59.802 22.7852 59.3084Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M29.175 47.4991C29.175 47.0055 29.5751 46.6053 30.0687 46.6053H51.3042C51.7978 46.6053 52.1979 47.0055 52.1979 47.4991C52.1979 47.9927 51.7978 48.3928 51.3042 48.3928H30.0687C29.5751 48.3928 29.175 47.9927 29.175 47.4991Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M22.7852 35.6903C22.7852 35.1967 23.1854 34.7966 23.679 34.7966H51.3068C51.8004 34.7966 52.2005 35.1967 52.2005 35.6903C52.2005 36.1839 51.8004 36.5841 51.3068 36.5841H23.679C23.1854 36.5841 22.7852 36.1839 22.7852 35.6903Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M34.0497 23.7717C34.0497 23.2781 34.4498 22.878 34.9434 22.878H51.3034C51.797 22.878 52.1972 23.2781 52.1972 23.7717C52.1972 24.2653 51.797 24.6655 51.3034 24.6655H34.9434C34.4498 24.6655 34.0497 24.2653 34.0497 23.7717Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M55.2847 29.9476C55.2847 29.454 55.6849 29.0539 56.1785 29.0539H86.6232C87.1168 29.0539 87.517 29.454 87.517 29.9476L87.5183 55.3001C87.5183 55.7937 87.1181 56.1939 86.6245 56.1939H56.1798C55.6862 56.1939 55.286 55.7937 55.286 55.3001L55.2847 29.9476ZM57.0722 30.8414L57.0735 54.4064H85.7308L85.7295 30.8414H57.0722Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M55.286 35.7976C55.286 35.304 55.6862 34.9039 56.1798 34.9039H86.6245C87.1181 34.9039 87.5183 35.304 87.5183 35.7976C87.5183 36.2912 87.1181 36.6914 86.6245 36.6914H56.1798C55.6862 36.6914 55.286 36.2912 55.286 35.7976Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M67.7649 41.6756C68.109 42.0295 68.101 42.5953 67.7471 42.9394L64.5058 46.0906L67.7471 49.2419C68.101 49.5859 68.109 50.1518 67.7649 50.5057C67.4208 50.8596 66.855 50.8676 66.501 50.5235L62.6006 46.7314C62.4276 46.5632 62.3299 46.332 62.3299 46.0906C62.3299 45.8492 62.4276 45.6181 62.6006 45.4498L66.501 41.6578C66.855 41.3137 67.4208 41.3216 67.7649 41.6756Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M75.1592 41.6666C75.5082 41.3176 76.0741 41.3176 76.4232 41.6666L80.2152 45.4586C80.5643 45.8077 80.5643 46.3736 80.2152 46.7226L76.4232 50.5147C76.0741 50.8637 75.5082 50.8637 75.1592 50.5147C74.8102 50.1656 74.8102 49.5997 75.1592 49.2507L78.3193 46.0906L75.1592 42.9305C74.8102 42.5815 74.8102 42.0156 75.1592 41.6666Z"
                      fill="#754FFE" />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M74.4923 38.3254C74.9514 38.5067 75.1765 39.0259 74.9952 39.485L69.903 52.378C69.7217 52.8371 69.2025 53.0623 68.7435 52.8809C68.2844 52.6996 68.0592 52.1804 68.2405 51.7214L73.3327 38.8284C73.514 38.3693 74.0332 38.1441 74.4923 38.3254Z"
                      fill="#754FFE" />
                  </svg>
                </div>
                <div class="d-flex flex-column gap-4">
                  <div class="d-flex flex-column gap-2">
                    <h3 class="mb-0">Sélection des formateurs</h3>
                    <p class="mb-0 pe-xl-4">Nous faisons appel à des experts et des professionnels qualifiés dans chaque domaine..</p>
                  </div>
                  <div>
                    <a href="#!" class="icon-link icon-link-hover">
                      <span>Nous Contacter</span>

                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Coding and Hiring-->
    <!--trusted-->
    <div class="py-6">
      <div class="container text-center">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-12">
            <div class="text-center mb-6">
              <span class="text-gray-400">Ils Nous Font Confiance</span>
            </div>
          </div>
          <div class="col-xl-10 offset-xl-1">
            <div class="table-responsive-lg mb-6">
              <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-4 flex-nowrap">
                <div class="col">
                  <div class="text-center mb-3">
                    <img src="assets/images/course/office.svg" alt="office" class="img-fluid" />
                  </div>
                </div>
                <div class="col">
                  <div class="text-center mb-3">
                    <img src="assets/images/course/linkedin-logo.svg" alt="linkedin" class="img-fluid" />
                  </div>
                </div>
                <div class="col">
                  <div class="text-center mb-3">
                    <img src="assets/images/course/facebook.svg" alt="facebook" class="img-fluid" />
                  </div>
                </div>
                <div class="col">
                  <div class="text-center mb-3">
                    <img src="assets/images/course/google.svg" alt="google" class="img-fluid" />
                  </div>
                </div>
                <div class="col">
                  <div class="text-center mb-3">
                    <img src="assets/images/course/microsoft.svg" alt="microsoft" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--trusted-->
  </main>

@endsection
