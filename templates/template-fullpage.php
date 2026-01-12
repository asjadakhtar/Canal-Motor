<?php 
/*
 * Template Name: Fullpage Template
 *
 */
get_header(); ?>

<main id="fullpage-template" class="main-content overflow-hidden <?php echo esc_attr(get_post_field('post_name', get_post())); ?>">
 <div id="fullpage">
      <!-- Section 1: Hero with Slides -->
      <div class="section">
        <!-- Custom Navigation Arrows -->
        <div
          class="absolute z-50 inset-0 flex items-center justify-between px-5 pointer-events-none"
        >
          <button
            id="prevArrow"
            class="pointer-events-auto cursor-pointer bg-black/20 hover:bg-black/40 p-3 rounded-full transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m15 18-6-6 6-6" />
            </svg>
          </button>
          <button
            id="nextArrow"
            class="pointer-events-auto cursor-pointer bg-black/20 hover:bg-black/40 p-3 rounded-full transition"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="m9 18 6-6-6-6" />
            </svg>
          </button>
        </div>

        <!-- Slide 1.1 -->
        <div class="slide relative w-full h-screen overflow-hidden">
          <!-- Image Switching Logic -->

          <img
            src="pics/dashing_m.png"
            alt="Jetour Dashing Mobile"
            class="w-full h-screen block sm:hidden object-cover object-center"
          />

          <!-- DESKTOP IMAGE: Hidden below 640px, Visible from 640px up -->
          <img
            src="pics/dashingbanner.png"
            alt="Jetour Dashing Desktop"
            class="w-full h-screen hidden sm:block object-cover object-center"
          />
          <div
            class="absolute inset-0 flex flex-col justify-end items-start px-8 pb-16 md:px-17.5 md:pb-30"
          >
            <div class="absolute bottom-20 left-10 md:bottom-30 md:left-17.5">
              <h1 class="gsap-reveal text-white text-3xl font-medium">
                JETOUR DASHING
              </h1>
              <p
                class="gsap-reveal text-white text-4xl md:text-6xl pb-10 md:pb-12 font-medium mt-3"
              >
                STYLE MEETS PERFORMANCE
              </p>
              <a
                href="#"
                class="gsap-reveal button-reveal1 inline-block bg-white text-black text-base font-normal opacity-70 hover:opacity-100 py-4 px-12 md:py-5 md:px-32 rounded-sm"
              >
                Explore
              </a>
            </div>
          </div>
        </div>
        <!-- Slide 1.2 -->
        <div class="slide relative">
          <img
            src="pics/x70Plus_m.png"
            alt="Jetour X70 Plus Mobile"
            class="w-full h-screen block sm:hidden object-cover object-center"
          />

          <!-- DESKTOP IMAGE: Hidden below 640px, Visible from 640px up -->
          <img
            src="pics/x70Plusbanner.png"
            alt="Jetour Dashing Desktop"
            class="w-full h-screen hidden sm:block object-cover object-center"
          />
          <div class="absolute bottom-20 left-10 md:bottom-30 md:left-17.5">
            <h1 class="gsap-reveal text-white text-3xl font-medium">
              JETOUR X70 PLUS
            </h1>
            <p
              class="gsap-reveal text-white text-4xl md:text-6xl pb-10 md:pb-12 font-medium mt-3"
            >
              COMFORT DRIVEN DESIGN
            </p>
            <a
              href="#"
              class="gsap-reveal button-reveal1 inline-block bg-white text-black text-base font-normal opacity-70 hover:opacity-100 py-4 px-12 md:py-5 md:px-32 rounded-sm"
            >
              Explore
            </a>
          </div>
        </div>
      </div>

      <!-- Section 2: Info -->
      <div
        class="section car-section flex flex-col justify-center items-center px-17.5 bg-[#d9d9d9]"
      >
       <!-- DASHING GROUP -->
            <div id="group-dashing" class="car-group active-group flex flex-col items-center">
            <div class="relative flex justify-center items-center">
                <img src="pics/title(4).png" alt="" class="gsap-reveal absolute bottom-15 z-10 w-236" />
                <img src="pics/car(4).png" alt="" class="car-move relative z-20 w-225" />
            </div>
            <!-- Specific button for Dashing -->
            <a href="dashing.html " class="gsap-reveal button-reveal mt-9 border-2 border-black text-black text-base font-normal py-4 px-12 md:py-3.5 md:px-31 rounded-sm">
                Explore
            </a>
            </div>

            <!-- X70 PLUS GROUP -->
            <div id="group-x70" class="car-group hidden flex flex-col items-center">
            <div class="relative flex justify-center items-center">
                <img src="pics/title(5).png" alt="" class="gsap-reveal absolute bottom-15 z-10 w-236" />
                <img src="pics/car(5).png" alt="" class="car-move relative z-20 w-225" />
            </div>
            <!-- Specific button for X70 -->
            <a href="x70.html" class="gsap-reveal button-reveal mt-9 border-2 border-black text-black text-base font-normal py-4 px-12 md:py-3.5 md:px-31 rounded-sm">
                Explore 
            </a>
            </div>

        <!-- THUMBNAILS -->
        <div class="flex gap-x-12 pt-15">
          <div
            class="car-selector cursor-pointer active-thumb"
            data-target="group-dashing"
            data-link="dashing.html"
          >
            <img
              src="pics/car(4).png"
              alt="DASHING"
              class="w-44 pb-6 transition-opacity"
            />
            <h2 class="flex justify-center text-2xl text-[#6c6c6c]">DASHING</h2>
          </div>

          <div
            class="car-selector cursor-pointer opacity-50"
            data-target="group-x70"
            data-link="x70.html"
          >
            <img
              src="pics/car(5).png"
              alt="X70 PLUS"
              class="w-44 pb-6 transition-opacity"
            />
            <h2 class="flex justify-center text-2xl text-[#6c6c6c]">
              X70 PLUS
            </h2>
          </div>
        </div>
      </div>

      <!-- Section 3: About -->
      <div class="section font-primary">
        <div class="slide relative w-full h-screen overflow-hidden">
          <!-- Background Image -->
          <img
            src="pics/bg-1_m.png"
            alt="Jetour X70 Plus Mobile"
            class="w-full h-screen block sm:hidden object-cover object-center"
          />

          <!-- DESKTOP IMAGE: Hidden below 640px, Visible from 640px up -->
          <img
            src="pics/bg-1.png"
            alt="Mountain Landscape"
            class="w-full h-screen hidden sm:block object-cover object-center"
          />
          <div
            class="absolute inset-0 flex flex-col items-center justify-center px-4 text-center"
          >
            <!-- Inner Wrapper: This moves the content up from the center consistently -->
            <div
              class="-translate-y-12 md:-translate-y-20 flex flex-col items-center w-full"
            >
              <!-- Heading -->
              <h2
                class="gsap-reveal text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium max-w-[90%] md:max-w-4xl leading-[1.2] md:leading-15"
              >
                Travel with JETOUR <br class="block" />
                Enjoy Pleasant Journey
              </h2>

              <p
                class="gsap-reveal text-white text-sm sm:text-base md:text-xl lg:text-2xl font-medium mt-4 md:mt-6 max-w-[85%] md:max-w-2xl opacity-90"
              >
                Since its establishment, <br />JETOUR has consistently adhered
                to the 'Travel+' strategy
              </p>

              <div class="gsap-reveal mt-8 md:mt-14">
                <a
                  href="#"
                  class="button-reveal1 inline-block bg-white text-black text-sm md:text-base font-normal opacity-70 hover:opacity-100 py-3.5 px-12 md:py-5 md:px-32 rounded-sm"
                >
                  Explore
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Section 4: Contact -->
      <div class="section font-primary">
        <div class="slide relative w-full h-screen overflow-hidden">
          <!-- Background Image -->
          <img
            src="pics/bg-2_m.jpeg"
            alt="Jetour Dashing Mobile"
            class="w-full h-screen block sm:hidden object-cover object-center"
          />

          <!-- DESKTOP IMAGE: Hidden below 640px, Visible from 640px up -->
          <img
            src="pics/bg-2.jpg"
            alt="Jetour Dashing Desktop"
            class="w-full h-screen hidden sm:block object-cover object-center"
          />

          <!-- Content Overlay -->
          <!-- We use 'justify-end' to keep it at the bottom and 'items-start' for the left alignment -->
          <div
            class="absolute inset-0 flex flex-col justify-end items-start px-6 md:px-17.5 pb-12 md:pb-24 lg:pb-32"
          >
            <div class="max-w-5xl">
              <!-- Heading: Responsive font sizes to maintain the 2-line look without breaking -->
              <h2
                class="gsap-reveal text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-normal leading-tight md:leading-[1.1]"
              >
                Hi there, we are JETOUR.
                <br class="hidden sm:block" />
                We'd love to hear from you!
              </h2>

              <!-- Buttons: gap-x-3 for desktop, gap-4 for mobile wrapping -->
              <div class="flex flex-wrap items-center gap-4 pt-8 md:pt-11.5">
                <a
                  href="#"
                  class="gsap-reveal button-reveal1 bg-white text-black text-sm md:text-base font-normal opacity-70 hover:opacity-100 py-4 px-10 md:py-5 md:px-20 rounded-sm duration-300 text-center min-w-35"
                >
                  Pricing
                </a>
                <a
                  href="#"
                  class="gsap-reveal  bg-white text-black text-sm md:text-base font-normal opacity-70 hover:opacity-100 py-4 px-8 md:py-5 md:px-16 rounded-sm text-center min-w-35"
                >
                  Contact Us
                </a>
             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>

<?php get_footer(); ?>