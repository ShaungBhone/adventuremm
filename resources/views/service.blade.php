@extends('layouts.app')

@section('content')
  <section class="lj tp kr mt-40">
    <!-- Section Title Start -->
    <div x-data="{ sectionTitle: `We Offer The Best Quality Service for You`, sectionTitleText: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.` }">
      <div class="animate_top bb ze rj ki xn vq">
        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
        </h2>
        {{-- <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p> --}}
      </div>


    </div>
    <!-- Section Title End -->

    <div class="bb ze ki xn yq mb en">
      <div class="wc qf pn ng">
        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <svg class="h-16 w-16 fill-blue-500" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512">
            <path
              d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9V160c0 70.7-57.3 128-128 128s-128-57.3-128-128V102.9L48 93.3v65.1l15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9H16c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4V86.6C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z" />
          </svg>
          <h4 class="ek zj kk wm nb _b">Consultation</h4>
          <p>We offer advice and assistance with university selection, essay
            formatting, application submission, and visa application up until the
            applicant is admitted to the university.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <svg class="h-16 w-16 fill-blue-500" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 384 512">
            <path
              d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
          </svg>
          <h4 class="ek zj kk wm nb _b">Notary Service</h4>
          <p>We assist with notarizing any paperwork needed for college or visa
            applications.
          </p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <svg class="h-16 w-16 fill-blue-500" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512">
            <path
              d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
          </svg>
          <h4 class="ek zj kk wm nb _b">Essay Checking</h4>
          <p>We provide feedback and proofreading services for motivational
            letters, declarations of purpose, cover letters, and any other essays
            necessary for university applications.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <svg class="h-16 w-16 fill-blue-500" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 448 512">
            <path
              d="M0 64C0 28.7 28.7 0 64 0H384c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zM183 278.8c-27.9-13.2-48.4-39.4-53.7-70.8h39.1c1.6 30.4 7.7 53.8 14.6 70.8zm41.3 9.2l-.3 0-.3 0c-2.4-3.5-5.7-8.9-9.1-16.5c-6-13.6-12.4-34.3-14.2-63.5h47.1c-1.8 29.2-8.1 49.9-14.2 63.5c-3.4 7.6-6.7 13-9.1 16.5zm40.7-9.2c6.8-17.1 12.9-40.4 14.6-70.8h39.1c-5.3 31.4-25.8 57.6-53.7 70.8zM279.6 176c-1.6-30.4-7.7-53.8-14.6-70.8c27.9 13.2 48.4 39.4 53.7 70.8H279.6zM223.7 96l.3 0 .3 0c2.4 3.5 5.7 8.9 9.1 16.5c6 13.6 12.4 34.3 14.2 63.5H200.5c1.8-29.2 8.1-49.9 14.2-63.5c3.4-7.6 6.7-13 9.1-16.5zM183 105.2c-6.8 17.1-12.9 40.4-14.6 70.8H129.3c5.3-31.4 25.8-57.6 53.7-70.8zM352 192A128 128 0 1 0 96 192a128 128 0 1 0 256 0zM112 384c-8.8 0-16 7.2-16 16s7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H112z" />
          </svg>
          <h4 class="ek zj kk wm nb _b">VISA Service</h4>
          <p>We help with the preparation of the essential paperwork for the visa
            application procedure. Additionally, we provide training to get the
            applicant ready for the visa interview. However, the applicant is
            responsible for handling any situations that call for in-person
            action.
          </p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <svg class="h-16 w-16 fill-blue-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path
              d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
          </svg>
          <h4 class="ek zj kk wm nb _b">Accommodation Service</h4>
          <p>We assist you in finding an apartment that suits your needs and offer
            support up until the landlord's final signature on the lease.</p>
        </div>

        <!-- Service Item -->
        {{-- <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-06.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Regular Updates</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div> --}}
      </div>
    </div>
  </section>
@endsection
