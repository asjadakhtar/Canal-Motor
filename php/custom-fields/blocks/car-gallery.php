<section
        class="section car-section flex flex-col justify-center items-center bg-[#d9d9d9]"
      >
        <div class="container mx-auto px-4 flex flex-col items-center">
          <!-- DASHING GROUP -->
          <div
            id="group-dashing"
            class="car-group active-group flex flex-col items-center"
          >
            <div class="relative flex justify-center items-center">
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/title4.webp"
                alt=""
                class="gsap-reveal absolute bottom-15 z-10 w-236"
              />
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/car4.webp"
                alt=""
                class="car-move relative z-20 w-225"
              />
            </div>
           <a
                  href="dashing.html"
                  class="gsap-reveal button-reveal1 inline-flex items-center justify-center bg-transparent border-2 text-black hover:bg-black hover:text-white text-base font-normal mt-9 py-3 px-11 md:py-4 md:px-30 rounded-sm"
                  >Explore</a
                >
          </div>
          <!-- X70 PLUS GROUP -->
          <div
            id="group-x70"
            class="car-group hidden  flex-col items-center"
          >
            <div class="relative flex justify-center items-center">
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/title5.webp"
                alt=""
                class="gsap-reveal absolute bottom-15 z-10 w-236"
              />
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/car5.webp"
                alt=""
                class="car-move relative z-20 w-225"
              />
            </div>
            <a
                  href="x70plus.html"
                  class="gsap-reveal button-reveal1 inline-flex items-center justify-center bg-transparent border-2 text-black hover:bg-black hover:text-white text-base font-normal mt-9 py-3 px-11 md:py-5 md:px-30 rounded-sm"
                  >Explore</a
                >
          </div>
          <!-- THUMBNAILS -->
          <div class="flex gap-x-12 pt-15">
            <div
              class="car-selector cursor-pointer active-thumb"
              data-target="group-dashing"
            >
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/car4.webp"
                alt="DASHING"
                class="w-44 pb-6 transition-opacity"
              />
              <h2 class="flex justify-center text-2xl text-[#6c6c6c]">
                DASHING
              </h2>
            </div>
            <div
              class="car-selector cursor-pointer opacity-50"
              data-target="group-x70"
            >
              <img
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/car5.webp"
                alt="X70 PLUS"
                class="w-44 pb-6 transition-opacity"
              />
              <h2 class="flex justify-center text-2xl text-[#6c6c6c]">
                X70 PLUS
              </h2>
            </div>
          </div>
        </div>
</section>