<?php 
  include "../config.php";
  include BASE_PATH."/components/Head.php";
  include BASE_PATH."/components/Header.php";
?>
<section class="relative z-10 overflow-hidden py-20 lg:py-[120px]">
<div class="container mx-auto">
    <div class="flex flex-wrap -mx-4 lg:justify-between">
      <div class="w-full">
        <div class="mb-12 lg:mb-0">
          <h2
            class="text-orange-100 mb-6 text-[32px] font-bold sm:text-[40px] lg:text-[36px] xl:text-[40px]">
            Ofertas laborales
          </h2>
          <div class="grid-cols-3	grid space-between gap-5">
            <?php 
            include BASE_PATH."/content/content.php";

            foreach($jobs as $job) {
              echo '<div
                    class="w-full max-lg:max-w-2xl flex mx-auto lg:mx-0 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                      <div class="font-manrope text-2xl font-bold text-indigo-600">
                        <img src="/assets/team.png" alt="" srcset="" class="size-12">
                      </div>
                      <div class="flex-1">
                        <h4 class="text-xl text-sky-900 font-semibold mb-2">'.$job->name.'</h4>
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Descripción: </span>'.$job->desc.'</p>
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Requerimientos: </span>'.$job->requirements.'</p>
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Modalidad: </span>'.$job->modality.'</p>
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Experiencia: </span>'.$job->experience.'</p>
                        <br />
                      </div>
                    </div>
                  </div>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  include "../components/Footer.php"
?>