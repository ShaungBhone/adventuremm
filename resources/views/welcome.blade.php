@extends('layouts.app')

@section('content')
  <div>
    <main>
      <!-- ===== Hero Start ===== -->
      <section class="gj do ir hj sp jr i pg">
        <!-- Hero Images -->
        <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r">
          <img src="{{ Vite::asset('resources/images/shape-01.svg') }}"
            alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
          <img src="{{ Vite::asset('resources/images/shape-02.svg') }}"
            alt="shape" class="xc 2xl:ud-block h u p va" />
          <img src="{{ Vite::asset('resources/images/shape-03.svg') }}"
            alt="shape" class="xc 2xl:ud-block h v w va" />
          {{-- <img src="{{ Vite::asset('resources/images/shape-04.svg') }}"
            alt="shape" class="h q r" /> --}}
          <img src="{{ Vite::asset('resources/images/hero.png') }}" alt="Hero"
            class="h q r ua" />
        </div>

        <!-- Hero Content -->
        <div class="bb ze ki xn 2xl:ud-px-0">
          <div class="tc _o">
            <div class="animate_left jn/2 z-10">
              <h1 class="fk vj zp or kk wm wb">
                Reach your global academic goal.
              </h1>
              <p class="fq">
                We provide training as a one-stop service, including scholarships
                programs, essay writing training, English skills courses, and so
                on, with the goal of assisting Myanmar Youths in studying abroad
                and supporting them with the necessary abilities.
              </p>

              <div class="tc tf yo zf mb">
                <a href="tel:+95 9 772 678 113"
                  class="ek jk lk gh gi hi rg ml il vc _d _l">Inquire Now</a>
                <span class="tc sf">
                  <a href="#" class="ek xj kk wm inline-block"> Call us
                    +95 9 772 678 113 </a>
                  <span class="inline-block">For any question or concern</span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Hero End ===== -->

      <!-- ===== Small Features Start ===== -->
      <section id="features">
        <div class="bb ze ki yn 2xl:ud-px-12.5">
          <div class="tc uf zo ap zf bp mq">
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg mh">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                  class="h-10 w-10 fill-white">
                  <path
                    d="M160 0c17.7 0 32 14.3 32 32V67.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.1c-.4-.1-.9-.1-1.3-.2l-.2 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11V32c0-17.7 14.3-32 32-32z" />
                </svg>
              </div>
              <div class="my-auto">
                <h4 class="ek yj go kk wm xb">Affordable prices</h4>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg nh">
                <img src="{{ Vite::asset('resources/images/icon-02.svg') }}"
                  alt="Icon" />
              </div>
              <div class="my-auto">
                <h4 class="ek yj go kk wm xb">Individualized approach</h4>
              </div>
            </div>

            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
              <div class="tc wf xf cf ae cd rg oh">
                <img src="{{ Vite::asset('resources/images/icon-03.svg') }}"
                  alt="Icon" />
              </div>
              <div class="my-auto">
                <h4 class="ek yj go kk wm xb">Comprehensive service</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Small Features End ===== -->

      <!-- ===== About Start ===== -->
      <section class="ji gp uq 2xl:ud-py-35 pg">
        <div class="bb ze ki xn wq">
          <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
              <div>
                <img src="{{ Vite::asset('resources/images/about-01.jpg') }}"
                  alt="About" class="ib w-72 rounded-lg" />
                <img src="{{ Vite::asset('resources/images/about-02.jpg') }}"
                  alt="About" class="w-72 rounded-lg" />
              </div>
              <div>
                <img src="{{ Vite::asset('resources/images/shape-06.svg') }}"
                  alt="Shape" />
                <img src="{{ Vite::asset('resources/images/about-03.png') }}"
                  alt="About" class="ob gb rounded-lg" />
                <img src="{{ Vite::asset('resources/images/shape-07.svg') }}"
                  alt="Shape" class="bb" />
              </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2">
              <h4 class="ek yj mk gb">Why Choose Us</h4>
              <h2 class="fk vj zp pr kk wm qb">
                Learn With Us, Go with Us and Grow with us
              </h2>
              <p class="uo">
                Edventure Education provides students with a personalized and
                thorough service. We understand their individual needs and
                collaborate with them to attain their goals. One-on-one
                consultations, specialized course recommendations, economical
                study alternatives, and assistance with accommodation, visas,
                notary services, and language preparation are all part of our
                offerings.Our aim is to make the student experience as comfortable
                and stress-free as possible. Choose Edventure Education for a
                life-changing educational adventure.

              </p>

              {{-- <a href="https://www.youtube.com/watch?v=xcJtL7QggTI"
                data-fslightbox class="vc wf hg mb">
                <span class="tc wf xf be dd rg i gh ua">
                  <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                  <img src="{{ Vite::asset('resources/images/icon-play.svg') }}"
                    alt="Play" />
                </span>
                <span class="kk">SEE HOW WE WORK</span>
              </a> --}}
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About End ===== -->

      <!-- ===== Projects Start ===== -->
      {{-- <section class="pg pj vp mr oj wp nr">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `We Offer Great Affordable Premium Prices.`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
          <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
          </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn 2xl:ud-px-0 jb" x-data="{ filterTab: 1 }">
          <!-- Porject Tab -->
          <div class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc">
            <button data-filter="*" @click="filterTab = 1"
              :class="{ 'gh lk': filterTab === 1 }"
              class="project-tab-btn ek rg ml il vi mi">
              All
            </button>
            <button data-filter=".branding" @click="filterTab = 2"
              :class="{ 'gh lk': filterTab === 2 }"
              class="project-tab-btn ek rg ml il vi mi">
              Branding Strategy
            </button>
            <button data-filter=".digital" @click="filterTab = 3"
              :class="{ 'gh lk': filterTab === 3 }"
              class="project-tab-btn ek rg ml il vi mi">
              Digital Experiences
            </button>
            <button data-filter=".ecommerce" @click="filterTab = 4"
              :class="{ 'gh lk': filterTab === 4 }"
              class="project-tab-btn ek rg ml il vi mi">
              Ecommerce
            </button>
          </div>

          <!-- Projects item wrapper -->
          <div class="projects-wrapper tc -ud-mx-5">
            <div class="project-sizer"></div>
            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="{{ Vite::asset('resources/images/project-01.png') }}"
                  alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                  <h4 class="ek tj kk hc">Photo Retouching</h4>
                  <p>Branded Ecommerce</p>
                  <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#">
                    <svg class="th lm ml il" width="14" height="14"
                      viewBox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 digital">
              <div class="c i pg sg z-1">
                <img src="{{ Vite::asset('resources/images/project-02.png') }}"
                  alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                  <h4 class="ek tj kk hc">Photo Retouching</h4>
                  <p>Branded Ecommerce</p>
                  <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#">
                    <svg class="th lm ml il" width="14" height="14"
                      viewBox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
              <div class="c i pg sg z-1">
                <img src="{{ Vite::asset('resources/images/project-04.png') }}"
                  alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                  <h4 class="ek tj kk hc">Photo Retouching</h4>
                  <p>Branded Ecommerce</p>
                  <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#">
                    <svg class="th lm ml il" width="14" height="14"
                      viewBox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd vo/3 digital ecommerce">
              <div class="c i pg sg z-1">
                <img src="{{ Vite::asset('resources/images/project-03.png') }}"
                  alt="Project" />

                <div
                  class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10">
                  <h4 class="ek tj kk hc">Photo Retouching</h4>
                  <p>Branded Ecommerce</p>
                  <a class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                    href="#">
                    <svg class="th lm ml il" width="14" height="14"
                      viewBox="0 0 14 14" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z" />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- ===== Projects End ===== -->

      <!-- ===== Testimonials Start ===== -->
      {{-- <section class="hj rp hr">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Client’s Testimonials`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
          <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
          </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ki xn ar">
          <div class="animate_top jb cq">
            <!-- Slider main container -->
            <div class="swiper testimonial-01">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="i hh rm sg vk xm bi qj">
                    <!-- Border Shape -->
                    <span class="rc je md/2 gh xg h q r"></span>
                    <span class="rc je md/2 mh yg h q p"></span>

                    <div class="tc sf rn tn un zf dp">
                      <img class="bf"
                        src="{{ Vite::asset('resources/images/testimonial.png') }}"
                        alt="User" />

                      <div>
                        <img
                          src="{{ Vite::asset('resources/images/icon-quote.svg') }}"
                          alt="Quote" />
                        <p class="ek ik xj _p kc fb">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          In dolor diam, feugiat quis enim sed,
                          ullamcorper semper ligula. Mauris consequat justo
                          volutpat.
                        </p>

                        <div class="tc yf vf">
                          <div>
                            <span class="rc ek xj kk wm zb">Devid Smith</span>
                            <span class="rc">Founter @democompany</span>
                          </div>

                          <img class="rk"
                            src="{{ Vite::asset('resources/images/brand-light-02.svg') }}"
                            alt="Brand" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- If we need navigation -->
              <div class="tc wf xf fg jb">
                <div
                  class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                  <svg class="th lm" width="14" height="14"
                    viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                      fill="" />
                  </svg>
                </div>
                <div
                  class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym">
                  <svg class="th lm" width="14" height="14"
                    viewBox="0 0 14 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                      fill="" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- ===== Testimonials End ===== -->

      <!-- ===== Counter Start ===== -->
      {{-- <section class="i pg qh rm ji hp">
        <img src="{{ Vite::asset('resources/images/shape-11.svg') }}"
          alt="Shape" class="of h ga ha ke" />
        <img src="{{ Vite::asset('resources/images/shape-07.svg') }}"
          alt="Shape" class="h ia o ae jf" />
        <img src="{{ Vite::asset('resources/images/shape-14.svg') }}"
          alt="Shape" class="h ja ka" />
        <img src="{{ Vite::asset('resources/images/shape-15.svg') }}"
          alt="Shape" class="h q p" />

        <div class="bb ze i va ki xn br">
          <div class="tc uf sn tn xf un gg">
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">785</h2>
              <p class="ek bk aq">Global Brands</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">533</h2>
              <p class="ek bk aq">Happy Clients</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">865</h2>
              <p class="ek bk aq">Winning Award</p>
            </div>
            <div class="animate_top me/5 ln rj">
              <h2 class="gk vj zp or kk wm hc">346</h2>
              <p class="ek bk aq">Happy Clients</p>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- ===== Counter End ===== -->

      <!-- ===== Clients Start ===== -->
      {{-- <section class="pj vp mr">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Trusted by Global Brands`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.` }">
          <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
          </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc">
          <div class="wc rf qn zf cp kq xf wf">
            <a href="#" class="rc animate_top">
              <img class="th wl ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-01.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-01.svg') }}"
                alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-02.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-02.svg') }}"
                alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-03.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-03.svg') }}"
                alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-04.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-04.svg') }}"
                alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-05.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-05.svg') }}"
                alt="Clients" />
            </a>
            <a href="#" class="rc animate_top">
              <img class="tk ml il zl om"
                src="{{ Vite::asset('resources/images/brand-light-06.svg') }}"
                alt="Clients" />
              <img class="xc sk ml il zl nm"
                src="{{ Vite::asset('resources/images/brand-dark-06.svg') }}"
                alt="Clients" />
            </a>
          </div>
        </div>
      </section> --}}
      <!-- ===== Clients End ===== -->

      <!-- ===== Blog Start ===== -->
      <section class="pb-16">
        <!-- Section Title Start -->
        <div x-data="{ sectionTitle: `Latest Blogs & News`, sectionTitleText: `` }">
          <div class="animate_top bb ze rj ki xn vq">
            <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b">
            </h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
          </div>


        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
          <div class="wc qf pn xo zf iq">
            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full"
                  src="{{ Vite::asset('resources/images/blog-01.png') }}"
                  alt="Blog" />

                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                  <a href="https://www.facebook.com/EdventureMyanmar/posts/pfbid02LR8jEs2jNQPmm11YqAzX8qjRRJKRsHFKmzYoAWaJ6q8Z6PuQN3QCcLaBZbvPkJ3al"
                    class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img src="{{ Vite::asset('resources/images/icon-man.svg') }}"
                      alt="User" />
                    <p>Edventure Education</p>
                  </div>
                  <div class="tc wf ag">
                    <img
                      src="{{ Vite::asset('resources/images/icon-calender.svg') }}"
                      alt="Calender" />
                    <p>27 April, 2023</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a
                    href="https://www.facebook.com/EdventureMyanmar/posts/pfbid02LR8jEs2jNQPmm11YqAzX8qjRRJKRsHFKmzYoAWaJ6q8Z6PuQN3QCcLaBZbvPkJ3al">
                    Contact with us to achieve your study abroad goals
                  </a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full"
                  src="{{ Vite::asset('resources/images/blog-02.png') }}"
                  alt="Blog" />

                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                  <a href="https://www.facebook.com/EdventureMyanmar/posts/pfbid02LEDLPqCNNLigV679GNR6s3bdBZ3F6KTgT5Bu5XVJzX8kDocNDkhRSRAXaqaXiHutl"
                    class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img
                      src="{{ Vite::asset('resources/images/icon-man.svg') }}"
                      alt="User" />
                    <p>Edventure Education</p>
                  </div>
                  <div class="tc wf ag">
                    <img
                      src="{{ Vite::asset('resources/images/icon-calender.svg') }}"
                      alt="Calender" />
                    <p>8 May, 2023</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a
                    href="https://www.facebook.com/EdventureMyanmar/posts/pfbid02LEDLPqCNNLigV679GNR6s3bdBZ3F6KTgT5Bu5XVJzX8kDocNDkhRSRAXaqaXiHutl">
                    Special chances in our consultation
                    session
                  </a>
                </h4>
              </div>
            </div>

            <!-- Blog Item -->
            <div class="animate_top sg vk rm xm">
              <div class="c rc i z-1 pg">
                <img class="w-full"
                  src="{{ Vite::asset('resources/images/blog-03.png') }}"
                  alt="Blog" />

                <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                  <a href="https://www.facebook.com/EdventureMyanmar/posts/pfbid09oC18Gs6dpR7ycrDmQiS4UTP52GxFCE8MLsr4wAAwjC4bBSiAqvu9cQuyAKqJhUYl"
                    class="vc ek rg lk gh sl ml il gi hi">Read More</a>
                </div>
              </div>

              <div class="yh">
                <div class="tc uf wf ag jq">
                  <div class="tc wf ag">
                    <img
                      src="{{ Vite::asset('resources/images/icon-man.svg') }}"
                      alt="User" />
                    <p>Edventure Education</p>
                  </div>
                  <div class="tc wf ag">
                    <img
                      src="{{ Vite::asset('resources/images/icon-calender.svg') }}"
                      alt="Calender" />
                    <p>3 Dec, 2023</p>
                  </div>
                </div>
                <h4 class="ek tj ml il kk wm xl eq lb">
                  <a
                    href="https://www.facebook.com/EdventureMyanmar/posts/pfbid09oC18Gs6dpR7ycrDmQiS4UTP52GxFCE8MLsr4wAAwjC4bBSiAqvu9cQuyAKqJhUYl">
                    How to book our free consultation services
                  </a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Blog End -->

      <!-- CTA Start -->
      <section class="i pg gh ji">
        <!-- Bg Shape -->
        <img class="h p q"
          src="{{ Vite::asset('resources/images/shape-16.svg') }}"
          alt="Bg Shape" />

        <div class="bb ye i ki xn dr z-10">
          <div class="tc uf sn tn un gg">
            <div class="animate_left to/2">
              <h2 class="fk vj zp pr lk ac">
                A bridge to connect your Study Abroad Dream with Reality.
              </h2>
            </div>
            <div class="animate_right bf">
              <a href="#" class="vc ek kk hh rg ol il cm gi hi">
                Get Started Now
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- ===== CTA End ===== -->
    </main>

    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a"
      @click="window.scrollTo({top: 0, behavior: 'smooth'})"
      @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
      :class="{ 'uc': scrollTop }">
      <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512">
        <path
          d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
      </svg>
    </button>
  </div>
@endsection
