  <div class="section car-section flex flex-col justify-center items-center px-17.5 bg-[#d9d9d9]">
    <!-- DASHING GROUP -->
        <div id="group-dashing" class="car-group active-group flex flex-col items-center">
        <div class="relative flex justify-center items-center">
            <img src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/title5.webp" alt="" class="gsap-reveal absolute bottom-15 z-10 w-236" />
            <img src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/car5.webp" alt="" class="car-move relative z-20 w-225" />
        </div>
        <!-- Specific button for Dashing -->
        <a href="dashing.html " class="gsap-reveal button-reveal mt-9 border-2 border-black text-black text-base font-normal py-4 px-12 md:py-3.5 md:px-31 rounded-sm">
            Explore
        </a>
        </div>

        <!-- X70 PLUS GROUP -->
        <div id="group-x70" class="car-group flex-col items-center">
        <div class="relative flex justify-center items-center">
            <img src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/title4.webp" alt="" class="gsap-reveal absolute bottom-15 z-10 w-236" />
            <img src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/car4.webp" alt="" class="car-move relative z-20 w-225" />
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
          src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/car4.webp"
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
          src="https://mintcream-spoonbill-317228.hostingersite.com/wp-content/uploads/2026/01/car5.webp"
          alt="X70 PLUS"
          class="w-44 pb-6 transition-opacity"
        />
        <h2 class="flex justify-center text-2xl text-[#6c6c6c]">
          X70 PLUS
        </h2>
      </div>
    </div>
  </div>