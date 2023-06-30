@extends('layouts.app')
@section('title')
  Contact
@endsection
@section('content')
  <section id="support" class="i pg fh rm ji gp uq">
    <!-- Bg Shapes -->
    <img src="{{ Vite::asset('resources/images/shape-06.svg') }}" alt="Shape"
      class="h y top-28" />
    <img src="{{ Vite::asset('resources/images/shape-03.svg') }}" alt="Shape"
      class="h ca u" />
    <img src="{{ Vite::asset('resources/images/shape-07.svg') }}" alt="Shape"
      class="h w da ee" />
    <img src="{{ Vite::asset('resources/images/shape-12.svg') }}" alt="Shape"
      class="h p s" />
    <img src="{{ Vite::asset('resources/images/shape-13.svg') }}" alt="Shape"
      class="h r q" />

    <!-- Section Title Start -->
    <div x-data="{ sectionTitle: `Let’s Stay Connected`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
      <div class="animate_top bb ze rj ki xn vq">
        <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
        </h2>
        <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
      </div>


    </div>
    <!-- Section Title End -->

    <div class="i va bb ye ki xn wq jb mo">
      <div class="tc uf sn tf rn un zf xl:gap-10">
        <div class="animate_top mn/5 to/3 vk sg hh sm yh rq i pg w-full">
          <!-- Bg Shapes -->
          <img src="{{ Vite::asset('resources/images/shape-03.svg') }}"
            alt="Shape" class="h la x wd" />
          <img src="{{ Vite::asset('resources/images/shape-06.svg') }}"
            alt="Shape" class="h la ma ne kf" />

          <div class="fb">
            <h4 class="wj kk wm cc">Email Address</h4>
            <p><a href="#">hello@edventuremm.com</a></p>
          </div>
          <div class="fb">
            <h4 class="wj kk wm cc">Office Location</h4>
            <p>No. 35, Room. 301, Phyar Pon Street,
              San Chaung Township, Yangon,
              Myanmar.</p>
          </div>
          <div class="fb">
            <h4 class="wj kk wm cc">Phone Number</h4>
            <p><a href="#">+95 9 772 678 113</a></p>
          </div>
          {{-- <div class="fb">
            <h4 class="wj kk wm cc">Skype Email</h4>
            <p><a href="#">example@yourmail.com</a></p>
          </div> --}}

          <span class="rc nd rh tm lc fb"></span>

          <div>
            <h4 class="wj kk wm qb">Social Media</h4>
            <ul class="tc wf fg">
              <li>
                <a href="https://www.facebook.com/EdventureMyanmar"
                  class="c tc wf xf ie ld rg ml il tl">
                  <svg class="th lm ml il" width="11" height="20"
                    viewBox="0 0 11 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z"
                      fill="" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="animate_top nn/5 vo/3 vk sg hh sm yh w-full">
          {{-- <form action="https://formbold.com/s/unique_form_id" method="POST">
            <div class="tc sf yo ap zf ep qb">
              <div class="vd to/2">
                <label class="rc ac" for="fullname">Full name</label>
                <input type="text" name="fullname" id="fullname"
                  placeholder="Devid Wonder"
                  class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
              </div>

              <div class="vd to/2">
                <label class="rc ac" for="email">Email address</label>
                <input type="email" name="email" id="email"
                  placeholder="example@gmail.com"
                  class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
              </div>
            </div>

            <div class="tc sf yo ap zf ep qb">
              <div class="vd to/2">
                <label class="rc ac" for="phone">Phone number</label>
                <input type="text" name="phone" id="phone"
                  placeholder="+009 3342 3432"
                  class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
              </div>

              <div class="vd to/2">
                <label class="rc ac" for="subject">Subject</label>
                <input type="text" for="subject" id="subject"
                  placeholder="Type your subject"
                  class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
              </div>
            </div>

            <div class="fb">
              <label class="rc ac" for="message">Message</label>
              <textarea placeholder="Message" rows="4" name="message" id="message"
                class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
            </div>

            <div class="tc xf">
              <button class="vc rg lk gh ml il hi gi _l">
                Send Message
              </button>
            </div>
          </form> --}}
          <img class="w-full" src="{{ Vite::asset('resources/images/map.png') }}"
            alt="Map">
        </div>
      </div>
    </div>
  </section>
@endsection
