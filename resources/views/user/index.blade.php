@extends('user.layout.layout')

@section('content')
  <!-- section1 -->

  <div class="bg-white py-12 px-4 mt-5 section1 position-relative">
    <div class="container">

      <div class="background-lines-r">
        <img src="/user/images/rightwaves.png" alt="">
      </div>
      <div class="row gap-4 justify-content-between">

        <div class="col-lg-7 position-relative " style="z-index: 2;">
          <h3>Why an online
            platform?</h3>
          <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-gray-900">Your yacht's maintenance journey,
            effortlessly managed</h2>
          <p class="mt-4 online-text">WYR, the world's largest network for yacht maintenance offers both International
            Yacht owners and local Professionals, a digital streamlined transactional platform wherever the maintenance
            services are required.</p>
          <p class="mt-4 online-text">The service offered by a Professional on WYR is called a Job. When a Job is
            placed
            for a specific Yacht in a location, a ranked local Professional provide a quotation and exact time frame for
            the Job to be executed.</p>
          <p class="online-text pt-3"> <span class="font-weight-bold text-black">Yacht owners have various maintenance
              options.</span> This comprises
            different price
            ranges. Professionals can offer various and tailored service packages according to their specific
            requirements.</p>
        </div>

        <div class="col-lg-5 d-flex py-4 flex-column justify-content-between image-wrapper" style="z-index: 2;">

          <img src="/user/images/section1Image.png" alt="Yacht on water" class="img-fluid  shadow-lg"
            style="object-fit: cover;">
          <div class="mt-8 buttons-cta mb-5 ">
            <a href="./AccountSelection.html" class="btn btn-primary d-block text-uppercase">Create Free Account</a>
            <a href="./plans.html" class="btn btn-outline-primary d-block text-uppercase">Check Our Plans</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- section2 -->

  <div class="bg-gray-100 container-fluid   section2">
    <div class=" container-section2">
      <div class="text-center pb-12">
        <h3 class="text-base font-semibold  tracking-wide text-uppercase">
          Big Features Packed in One Place
        </h3>
        <div class="mt-2 d-flex justify-content-center tabs-section2 flex-wrap flex-md-row">
          <a href="./captains.html" class="big-feature-button ">Owners &
            Captains</a>
          <a href="./CompniesAndProfessional.html" class="big-feature-button-Professionals ">Professionals</a>
          <a href="./Surveyors.html" class="big-feature-button-Surveyors ">Surveyors</a>
        </div>
      </div>
      <div class="row gap-4 d-flex flex-wrap cards-section justify-content-center">

        <div class="rounded-lg border bg-card text-card-foreground shadow-sm  p-6 mt-4 mb-2"
          style="background-color: #F9F8F7;" data-v0-t="card">
          <div class="flex-col space-y-1.5 p-6 flex items-center space-x-4"><svg width="22" height="22"
              viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M21 31.5H21.0175M14 36.75H28C29.933 36.75 31.5 35.183 31.5 33.25V8.75C31.5 6.817 29.933 5.25 28 5.25H14C12.067 5.25 10.5 6.817 10.5 8.75V33.25C10.5 35.183 12.067 36.75 14 36.75Z"
                stroke="#00365E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div>
              <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight" style="color: #00365E;">
                Remote control</h3>
              <p class="text-sm " style="color: #00365E;">Check in real-time the replies from your job posts and
                follow-up
                with the best one.</p>

              <div style="margin-top: -9px; margin-top: 30px;">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Create account <i
                    class="fa-solid fa-angles-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-[350px] p-6 my-4 " data-v0-t="card">
          <div class="flex-col space-y-1.5 p-6 flex items-center space-x-4">
            <svg width="22" height="22" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10.5005 32.75H22.7505C24.6835 32.75 26.2505 31.183 26.2505 29.25V12.4749C26.2505 12.0107 26.0661 11.5656 25.7379 11.2374L16.2631 1.76256C15.9349 1.43437 15.4897 1.25 15.0256 1.25H5.25049C3.31749 1.25 1.75049 2.817 1.75049 4.75V24M1.75049 32.75L10.2882 24.2123M10.2882 24.2123C11.2382 25.1624 12.5507 25.75 14.0005 25.75C16.9 25.75 19.2505 23.3995 19.2505 20.5C19.2505 17.6005 16.9 15.25 14.0005 15.25C11.101 15.25 8.75049 17.6005 8.75049 20.5C8.75049 21.9497 9.33811 23.2622 10.2882 24.2123Z"
                stroke="#00365E" stroke-width="2" stroke-linecap="round" />
              <path
                d="M10.5005 32.75H22.7505C24.6835 32.75 26.2505 31.183 26.2505 29.25V12.4749C26.2505 12.0107 26.0661 11.5656 25.7379 11.2374L16.2631 1.76256C15.9349 1.43437 15.4897 1.25 15.0256 1.25H5.25049C3.31749 1.25 1.75049 2.817 1.75049 4.75V24M1.75049 32.75L10.2882 24.2123M10.2882 24.2123C11.2382 25.1624 12.5507 25.75 14.0005 25.75C16.9 25.75 19.2505 23.3995 19.2505 20.5C19.2505 17.6005 16.9 15.25 14.0005 15.25C11.101 15.25 8.75049 17.6005 8.75049 20.5C8.75049 21.9497 9.33811 23.2622 10.2882 24.2123Z"
                stroke="#00365E" stroke-width="2" stroke-linecap="round" />
            </svg>

            <div>
              <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight" style="color: #00365E;">
                Progression reports</h3>
              <p class="text-sm text-muted-foreground" style="color: #00365E; font-family: Poppins;">Receive in your
                inbox a progression report about your vessel
                maintenance
                with photos and videos</p>
            </div>
          </div>
        </div>

        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-[350px] p-6 my-4" data-v0-t="card">
          <div class="flex-col space-y-1.5 p-6 flex items-center space-x-4"><svg width="22" height="22"
              viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M31.75 17C31.75 25.1462 25.1462 31.75 17 31.75V33.75C26.2508 33.75 33.75 26.2508 33.75 17H31.75ZM17 31.75C8.8538 31.75 2.25 25.1462 2.25 17H0.25C0.25 26.2508 7.74923 33.75 17 33.75V31.75ZM2.25 17C2.25 8.8538 8.8538 2.25 17 2.25V0.25C7.74923 0.25 0.25 7.74923 0.25 17H2.25ZM17 2.25C25.1462 2.25 31.75 8.8538 31.75 17H33.75C33.75 7.74923 26.2508 0.25 17 0.25V2.25ZM23 17C23 20.3137 20.3137 23 17 23V25C21.4183 25 25 21.4183 25 17H23ZM17 23C13.6863 23 11 20.3137 11 17H9C9 21.4183 12.5817 25 17 25V23ZM11 17C11 13.6863 13.6863 11 17 11V9C12.5817 9 9 12.5817 9 17H11ZM17 11C20.3137 11 23 13.6863 23 17H25C25 12.5817 21.4183 9 17 9V11ZM27.4298 5.15596L21.2426 11.3431L22.6569 12.7574L28.844 6.57018L27.4298 5.15596ZM21.2426 22.6569L27.4298 28.844L28.844 27.4298L22.6569 21.2426L21.2426 22.6569ZM12.7574 11.3431L6.57018 5.15596L5.15596 6.57017L11.3431 12.7574L12.7574 11.3431ZM11.3431 21.2426L5.15596 27.4298L6.57017 28.844L12.7574 22.6569L11.3431 21.2426Z"
                fill="#00365E" />
              <path
                d="M31.75 17C31.75 25.1462 25.1462 31.75 17 31.75V33.75C26.2508 33.75 33.75 26.2508 33.75 17H31.75ZM17 31.75C8.8538 31.75 2.25 25.1462 2.25 17H0.25C0.25 26.2508 7.74923 33.75 17 33.75V31.75ZM2.25 17C2.25 8.8538 8.8538 2.25 17 2.25V0.25C7.74923 0.25 0.25 7.74923 0.25 17H2.25ZM17 2.25C25.1462 2.25 31.75 8.8538 31.75 17H33.75C33.75 7.74923 26.2508 0.25 17 0.25V2.25ZM23 17C23 20.3137 20.3137 23 17 23V25C21.4183 25 25 21.4183 25 17H23ZM17 23C13.6863 23 11 20.3137 11 17H9C9 21.4183 12.5817 25 17 25V23ZM11 17C11 13.6863 13.6863 11 17 11V9C12.5817 9 9 12.5817 9 17H11ZM17 11C20.3137 11 23 13.6863 23 17H25C25 12.5817 21.4183 9 17 9V11ZM27.4298 5.15596L21.2426 11.3431L22.6569 12.7574L28.844 6.57018L27.4298 5.15596ZM21.2426 22.6569L27.4298 28.844L28.844 27.4298L22.6569 21.2426L21.2426 22.6569ZM12.7574 11.3431L6.57018 5.15596L5.15596 6.57017L11.3431 12.7574L12.7574 11.3431ZM11.3431 21.2426L5.15596 27.4298L6.57017 28.844L12.7574 22.6569L11.3431 21.2426Z"
                fill="#00365E" />
            </svg>

            <div>
              <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight"
                style="color: #00365E; font-family: Poppins;">Crew & fleet manager</h3>
              <p class="text-sm text-muted-foreground" style="color: #00365E; font-family: Poppins;">Receive in your
                inbox a progression report about your vessel
                maintenance
                with photos and videosManage your team and crew and follow their actions and performance.</p>
            </div>
          </div>
        </div>

        <div class="rounded-lg border bg-card text-card-foreground shadow-sm w-[350px] p-6 my-4" data-v0-t="card">
          <div class="flex-col space-y-1.5 p-6 flex items-center space-x-4"><svg width="22" height="22"
              viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10 8.25V1.25M24 8.25V1.25M8.25 15.25H25.75M4.75 32.75H29.25C31.183 32.75 32.75 31.183 32.75 29.25V8.25C32.75 6.317 31.183 4.75 29.25 4.75H4.75C2.817 4.75 1.25 6.317 1.25 8.25V29.25C1.25 31.183 2.817 32.75 4.75 32.75Z"
                stroke="#00365E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M10 8.25V1.25M24 8.25V1.25M8.25 15.25H25.75M4.75 32.75H29.25C31.183 32.75 32.75 31.183 32.75 29.25V8.25C32.75 6.317 31.183 4.75 29.25 4.75H4.75C2.817 4.75 1.25 6.317 1.25 8.25V29.25C1.25 31.183 2.817 32.75 4.75 32.75Z"
                stroke="#00365E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <div>
              <h3 class="text-2xl font-semibold whitespace-nowrap leading-none tracking-tight"
                style="color: #00365E; font-family: Poppins;">Maintenance scheduler
              </h3>
              <p class="text-sm text-muted-foreground" style="color: #00365E; font-family: Poppins;">Never get surprised
                before starting a new trip. Keep your vessel
                health check.</p>
            </div>
          </div>
        </div>

      </div>
      <div class="text-right pt-12 mb-3">
        <a href="#" class="text-indigo-600 hover:text-indigo-900 text-uppercase allPlans"
          style="color: #00365E; font-family: Poppins;">View All Plans <i class="fa-solid fa-angles-right"></i></a>
      </div>
    </div>
  </div>
  <!-- section3 -->

  <div class="bg-gradient-to-b container-fluid  section3">
    <div class="background-lines">
      <img src="/user/images/Waves.png" alt="">
    </div>
    <div class="container py-16">
      <div class="text-center">
        <h3 class=" uppercase" style="text-transform: uppercase;">One-stop full service</h3>
        <h1 class="mt-1 text-white">
          Comprehensive Services
        </h1>
        <div class="custom-nav-container owl-nav"></div>
      </div>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card">
            <div class="card-body"
              style="background-image: url('/user/images/slider1.png'); background-size: cover; background-position: center;">
              <h3 class="card-title">Deck metal pollishment</h3>
            </div>
          </div>
        </div>
        <div class="item ">
          <div class="card">
            <div class="card-body"
              style="background-image: url('/user/images/slider2.png'); background-size: cover; background-position: center;">
              <h3 class="card-title">Sound system maintenance and instalation</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body"
              style="background-image: url('/user/images/slider4.png'); background-size: cover; background-position: center;">
              <h3 class="card-title">New teack scaled & restore</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body"
              style="background-image: url('/user/images/slider5.png'); background-size: cover; background-position: center;">
              <h3 class="card-title">Polish and gel coat</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body"
              style="background-image: url('/user/images/slider6.png'); background-size: cover; background-position: center;">
              <h3 class="card-title">Propelers cleaning</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- section4 -->
  <div class="bg-gradient-to-b section4">
    <div class="container py-16">
      <div class="text-center">
        <h3 class="text-base font-semibold  text-indigo-600 tracking-wide text-uppercase tex-black"
          style="color: #00365E;">All features to guaratee
          safety and security
        </h3>
        <h1>
          Experience the future of yacht maintenance & ownership
        </h1>
      </div>
    </div>
  </div>

  <!-- section5 -->
  <div class="section5 big-section">
    <div class="overlay"></div>
    <div class="container py-5">
      <h1 class="text-white py-4 text-center text-uppercase" style="font-family: Cormorant SC;">Get started today!</h1>
      <div class="card-container d-flex gap-10 flex-wrap justify-content-center align-items-center  flex-md-row "
        style="gap: 20px">

        <div class="card">
          <p class="description">Proud vessel owners, capitals and chief-engineers</p>
          <div class="bottom">
            <div class="icon">
              <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M17.3333 8H5.66667C3.08934 8 1 10.0893 1 12.6667V33.6667C1 36.244 3.08934 38.3333 5.66667 38.3333H38.3333C40.9107 38.3333 43 36.244 43 33.6667V12.6667C43 10.0893 40.9107 8 38.3333 8H26.6667M17.3333 8V5.66667C17.3333 3.08934 19.4227 1 22 1C24.5773 1 26.6667 3.08934 26.6667 5.66667V8M17.3333 8C17.3333 10.5773 19.4227 12.6667 22 12.6667C24.5773 12.6667 26.6667 10.5773 26.6667 8M15 26.6667C17.5773 26.6667 19.6667 24.5773 19.6667 22C19.6667 19.4227 17.5773 17.3333 15 17.3333C12.4227 17.3333 10.3333 19.4227 10.3333 22C10.3333 24.5773 12.4227 26.6667 15 26.6667ZM15 26.6667C18.0478 26.6667 20.6406 28.6146 21.6016 31.3333M15 26.6667C11.9522 26.6667 9.35914 28.6146 8.39819 31.3333M29 19.6667H36M29 29H33.6667"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <h3 class="title">For owners</h3>
          </div>
        </div>


        <div class="card">
          <p class="description">Companies, professionals, and experts in yatch and boats maintenance</p>
          <div class="bottom">
            <div class="icon">
              <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M38.3333 43V5.66667C38.3333 3.08934 36.244 1 33.6667 1H10.3333C7.756 1 5.66667 3.08934 5.66667 5.66667V43M38.3333 43L43 42.9999M38.3333 43H26.6667M5.66667 43L1 42.9999M5.66667 43H17.3333M15 10.3333H17.3333M15 19.6666H17.3333M26.6667 10.3333H29M26.6667 19.6666H29M17.3333 43V31.3333C17.3333 30.0446 18.378 28.9999 19.6667 28.9999H24.3333C25.622 28.9999 26.6667 30.0446 26.6667 31.3333V43M17.3333 43H26.6667"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

            </div>
            <h3 class="title">For bussiness</h3>
          </div>
        </div>

        <div class="card">
          <p class="description">Quality control professionals and service evaluation</p>
          <div class="bottom">
            <div class="icon">
              <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.0001 22.0001L19.6668 26.6668L29.0001 17.3335M12.2812 4.9599C13.9554 4.82629 15.5449 4.16793 16.8232 3.07853C19.8063 0.536322 24.1939 0.536322 27.177 3.07853C28.4554 4.16793 30.0448 4.82629 31.7191 4.9599C35.6261 5.27168 38.7286 8.37417 39.0403 12.2812C39.174 13.9554 39.8323 15.5449 40.9217 16.8232C43.4639 19.8063 43.4639 24.1939 40.9217 27.177C39.8323 28.4554 39.174 30.0448 39.0403 31.7191C38.7286 35.6261 35.6261 38.7286 31.7191 39.0403C30.0448 39.174 28.4554 39.8323 27.177 40.9217C24.1939 43.4639 19.8063 43.4639 16.8232 40.9217C15.5449 39.8323 13.9554 39.174 12.2812 39.0403C8.37417 38.7286 5.27168 35.6261 4.9599 31.7191C4.82629 30.0448 4.16793 28.4554 3.07853 27.177C0.536322 24.1939 0.536322 19.8063 3.07853 16.8232C4.16793 15.5449 4.82629 13.9554 4.9599 12.2812C5.27168 8.37417 8.37417 5.27168 12.2812 4.9599Z"
                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>

            </div>
            <h3 class="title">For surveyors</h3>
          </div>
        </div>

      </div>
      <div class="text-center mt-4">
        <h3 class="text-uppercase text-white">Follow us on</h3>
        <div class="social-icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- section6 -->
  <div class="section6">
    <div class="container">
      <div class="d-flex px-2 justify-content-center flex-column flex-md-row " style="gap:30px;">
        <div class="col-md-6">
          <h3 class="sub-title text-uppercase">Be the first to know</h3>
          <h1>Stay up-to-date with the news</h1>
          <form class="contact-form">
            <input type="email" placeholder="Email*" class="form-control" required>
            <button type="submit" class="btn btn-primary mt-3 text-uppercase" style="border-color: #5E8BF7;">Subscribe
              newsletter</button>
          </form>
        </div>
        <div class="col-md-6">
          <img src="/user/images/contact-us.jpg" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@endsection