@extends('layouts.app')

@section('content')
  <section class="lj tp kr mt-40">
    <!-- Section Title Start -->
    <div x-data="{ sectionTitle: `We Offer The Best Quality Service for You`, sectionTitleText: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis tortor eros. Donec vitae tortor lacus. Phasellus aliquam ante in maximus.` }">
      <div class="animate_top bb ze rj ki xn vq">
        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
        </h2>
        <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
      </div>


    </div>
    <!-- Section Title End -->

    <div class="bb ze ki xn yq mb en">
      <div class="wc qf pn xo ng">
        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-04.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Crafted for Startups</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-05.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">High-quality Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-06.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">All Essential Sections</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-07.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Speed Optimized</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-05.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Fully Customizable</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>

        <!-- Service Item -->
        <div class="animate_top sg oi pi zq ml il am cn _m">
          <img src="{{ Vite::asset('resources/images/icon-06.svg') }}"
            alt="Icon" />
          <h4 class="ek zj kk wm nb _b">Regular Updates</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
            convallis tortor.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
