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
          <img src="{{ Vite::asset('resources/images/icon-04.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Consultation</h4>
          <p>We offer advice and assistance with university selection, essay
            formatting, application submission, and visa application up until the
            applicant is admitted to the university.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-05.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Notary Service</h4>
          <p>We assist with notarizing any paperwork needed for college or visa
            applications.
          </p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-06.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Essay Checking</h4>
          <p>We provide feedback and proofreading services for motivational letters, declarations of purpose, cover letters, and any other essays necessary for university applications.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-07.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">VISA Service</h4>
          <p>We help with the preparation of the essential paperwork for the visa application procedure. Additionally, we provide training to get the applicant ready for the visa interview. However, the applicant is responsible for handling any situations that call for in-person action.
</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-05.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Accommodation Service</h4>
          <p>We assist you in finding an apartment that suits your needs and offer support up until the landlord's final signature on the lease.</p>
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
