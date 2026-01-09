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
            src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/dashing_m.webp"
            alt="Jetour Dashing Mobile"
            class="w-full h-screen block sm:hidden object-cover object-center"
          />

          <!-- DESKTOP IMAGE: Hidden below 640px, Visible from 640px up -->
          <img
            src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/dashingbanner.webp"
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