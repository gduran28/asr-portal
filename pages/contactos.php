<?php
include "../config.php";
include BASE_PATH . "/components/Head.php";
include BASE_PATH . "/components/Header.php";
?>
<section
  class="relative z-10 overflow-hidden py-20 lg:py-[120px]">
  <div class="container mx-auto">
    <div class="flex flex-wrap -mx-4 lg:justify-between">
      <div class="w-full">
        <div class="mb-12 lg:mb-0">
          <span class="block mb-4 text-base font-semibold text-primary">
            Contactanos
          </span>
          <h2
            class="text-orange-100 mb-6 text-[32px] font-bold sm:text-[40px] lg:text-[36px] xl:text-[40px]">
            Nuestros contactos
          </h2>
          <p
            class="text-base leading-relaxed text-body-color dark:text-dark-6 mb-9">
            Creemos que cada conexión tiene el potencial de cambiar tu vida. Nuestra plataforma está diseñada para unir personas
            afines que buscan amistad, compañía o relaciones significativas. Ya sea que estés aquí para conocer nuevos amigos,
            encontrar pareja o expandir tu red de contactos, estamos listos para ayudarte a descubrir relaciones auténticas.
          </p>
          <div
            class="w-full max-lg:max-w-xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100 mb-10">
            <div class="flex gap-5">
              <div class="font-manrope text-2xl font-bold text-indigo-600">
                <img src="/assets/address.png" alt="" srcset="" class="size-12">
              </div>
              <div class="flex-1">
                <h4 class="text-xl text-sky-900 font-semibold mb-2">Ubicación</h4>
                <p class="text-l text-gray-500 leading-5">Km. 1/2 Carretera Plan del Pino.</p>
              </div>
            </div>
          </div>
          <div
            class="w-full max-lg:max-w-xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100 mb-10">
            <div class="flex gap-5">
              <div class="font-manrope text-2xl font-bold text-indigo-600">
                <img src="/assets/phone.png" alt="" srcset="" class="size-12">
              </div>
              <div class="flex-1">
                <h4 class="text-xl text-sky-900 font-semibold mb-2">Teléfono</h4>
                <p class="text-l text-gray-500 leading-5">(+503) 7777-7777</p>
              </div>
            </div>
          </div>
          <div
            class="w-full max-lg:max-w-xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100 mb-10">
            <div class="flex gap-5">
              <div class="font-manrope text-2xl font-bold text-indigo-600">
                <img src="/assets/at.png" alt="" srcset="" class="size-12">
              </div>
              <div class="flex-1">
                <h4 class="text-xl text-sky-900 font-semibold mb-2">Email</h4>
                <p class="text-l text-gray-500 leading-5">info@GRUPOGRIFFIN.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include "../components/Footer.php"
?>