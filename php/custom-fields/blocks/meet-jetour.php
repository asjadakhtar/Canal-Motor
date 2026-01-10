<section id="fullpage">
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
</section>