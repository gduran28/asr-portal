<?php
include "../config.php";
include BASE_PATH . "/components/Head.php";
include BASE_PATH . "/components/Header.php";
?>

<section class="py-14 lg:py-24 relative">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
      <div class="img-box">
        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=2832&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About Us image"
          class="max-lg:mx-auto object-cover">
      </div>
      <div class="lg:pl-[100px] flex items-center">
        <div class="data w-full">
          <h2
            class="font-manrope font-bold text-4xl lg:text-5xl text-orange-100 mb-9 max-lg:text-center relative">
            ¿Quiénes somos?</h2>
          <p class="font-normal text-xl leading-8 text-white max-lg:text-center max-w-2xl mx-auto">
            Somos una plataforma especializada en la venta de productos digitales y aplicaciones innovadoras que
            transformarán tu forma de trabajar y crear.
            Desde software para mejorar la productividad hasta herramientas especializadas para desarrollo,
            aquí encontrarás lo que necesitas para impulsar tu negocio o proyecto personal.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-14 lg:py-24 relative">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">

      <div class="lg:pr-24 flex items-center">
        <div class="data w-full">
          <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us tailwind page"
            class="block lg:hidden mb-9 mx-auto object-cover">
          <h2 class="font-manrope font-bold text-4xl lg:text-5xl text-orange-100 mb-9 max-lg:text-center">
            Nos importa mejorar nuestra comunidad
          </h2>
          <p class="font-normal text-xl leading-8 text-white max-lg:text-center max-w-2xl mx-auto">
            Conectamos a profesionales y empresas mediante nuestra bolsa de empleo orientada al mundo de la programación. 
            Si eres programador o estás buscando talento digital, somos el punto de encuentro ideal para nuevas oportunidades 
            laborales.<br />
            Ya sea que busques comprar, vender, o dar el próximo gran paso en tu carrera, en 
            <?php include BASE_PATH."/config/variables.php"; echo $SITE_NAME ?>
            estamos para 
            acompañarte en cada etapa de tu viaje digital. ¡Únete y forma parte de la revolución tecnológica!
          </p>
        </div>
      </div>
      <div class="img-box ">
        <img src="https://pagedone.io/asset/uploads/1702034785.png" alt="About Us"
          class="hidden lg:block object-cover">
      </div>
    </div>
  </div>
</section>

<section class="py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2 class="font-manrope text-4xl text-center text-orange-100 font-bold mb-14">Nuestros valores nos definen</h2>
    <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
      <div
        class="w-full max-lg:max-w-xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
        <div class="flex gap-5">
          <div class="font-manrope text-2xl font-bold text-indigo-600">
            <img src="/assets/growth.png" alt="" srcset="" class="size-12">
          </div>
          <div class="flex-1">
            <h4 class="text-xl text-gray-900 font-semibold mb-2">Innovación continua</h4>
            <p class="text-xs text-gray-500 leading-5">Creemos en la creación y promoción de soluciones digitales novedosas 
              que empoderen a nuestros usuarios y clientes.</p>
          </div>
        </div>
      </div>
      <div
        class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
        <div class="flex gap-5">
          <div class="font-manrope text-2xl font-bold text-indigo-600">
            <img src="/assets/quality.png" alt="" srcset="" class="size-12">
          </div>
          <div class="flex-1">
            <h4 class="text-xl text-gray-900 font-semibold mb-2">Compromiso con la calidad</h4>
            <p class="text-xs text-gray-500 leading-5">Ofrecemos productos digitales y oportunidades laborales cuidadosamente 
              seleccionadas para asegurar la satisfacción de nuestros clientes y colaboradores.</p>
          </div>
        </div>
      </div>
      <div
        class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
        <div class="flex gap-5">
          <div class="font-manrope text-2xl font-bold text-indigo-600">
            <img src="/assets/team.png" alt="" srcset="" class="size-12">
          </div>
          <div class="flex-1">
            <h4 class="text-xl text-gray-900 font-semibold mb-2">Crecimiento colaborativo</h4>
            <p class="text-xs text-gray-500 leading-5">Fomentamos alianzas con empresas, desarrolladores y talentos para generar un 
              ecosistema que potencie el desarrollo profesional y la transformación digital.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include "../components/Footer.php"
?>