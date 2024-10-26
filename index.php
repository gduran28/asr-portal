<?php 
  include "config.php";
  include "components/Head.php";
  include "components/Header.php";

  ?>

<section class="py-14 lg:py-24 relative">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
      <div class="img-box">
        <img src="https://images.unsplash.com/photo-1556761175-9c1bafe0f436?q=80&w=2874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Banner image"
          class="max-lg:mx-auto animate-fade-right animate-once animate-ease-in-out">
      </div>
      <div class="lg:pl-[100px] flex items-center">
        <div class="data w-full">
          <h2
            class="font-manrope font-bold text-4xl lg:text-5xl text-orange-100 mb-9 max-lg:text-center relative animate-fade-right animate-once animate-ease-in-out">
            <?php include BASE_PATH."/config/variables.php"; echo $SITE_NAME ?>
          </h2>
          <p class="font-normal text-xl leading-8 text-white max-lg:text-center max-w-2xl mx-auto">
            Transforma tus ideas con tecnología. Encuentra las mejores herramientas y oportunidades laborales en un solo lugar.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2 class="font-manrope text-4xl text-center text-orange-100 font-bold mb-14">Ejemplos de Testimonios</h2>
    <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
      <div
        class="w-full max-lg:max-w-xl mx-auto lg:mx-0 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
        <div class="flex gap-5">
          <div class="font-manrope text-2xl font-bold text-indigo-600">
            <img src="/assets/connect.png" alt="" srcset="" class="size-12">
          </div>
          <div class="flex-1">
            <h4 class="text-xl text-gray-900 font-semibold mb-2">Jonh Marston</h4>
            <p class="text-l text-gray-500 leading-5">
              “Gracias a esta plataforma, encontré el empleo remoto que buscaba desde hace meses.”
            </p>
          </div>
        </div>
      </div>
      <div
        class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
        <div class="flex gap-5">
          <div class="font-manrope text-2xl font-bold text-indigo-600">
            <img src="/assets/connect.png" alt="" srcset="" class="size-12">
          </div>
          <div class="flex-1">
            <h4 class="text-xl text-gray-900 font-semibold mb-2">Arthur Morgan</h4>
            <p class="text-l text-gray-500 leading-5">
              “Las herramientas digitales que ofrecen me permitieron optimizar mi negocio rápidamente.”
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  include "components/Footer.php";
?> 