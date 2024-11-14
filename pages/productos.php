<?php 
  include "../config.php";
  include BASE_PATH."/components/Head.php";
  include BASE_PATH."/components/Header.php";
  include BASE_PATH."/db/connection.php";

  $db = new connection();
  $results = $db->executeQuery("select p.*, u.name 'pubName' from products p inner join users u on u.id = p.publisherId");
?>
<section class="relative z-10 overflow-hidden py-20 lg:py-[120px]">
  <div class="container mx-auto">
    <div class="flex flex-wrap -mx-4 lg:justify-between">
      <div class="w-full">
        <div class="mb-12 lg:mb-0">
          <h2
            class="text-orange-100 mb-6 text-[32px] font-bold sm:text-[40px] lg:text-[36px] xl:text-[40px]">
            Nuestros productos y servicios
          </h2>
          <div class="grid-cols-3	grid space-between gap-5">
            <?php 
            include BASE_PATH."/content/content.php";

            while($product = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
              echo '<div
                    class="w-full max-lg:max-w-2xl flex mx-auto lg:mx-0 bg-white p-6 rounded-2xl shadow-md shadow-gray-100">
                    <div class="flex gap-5">
                      <div class="flex-1">
                        <h4 class="text-xl text-sky-900 font-semibold mb-2">'.$product["name"].'</h4>
                        <img src="'.$product["image"].'" class="rounded-md">
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Descripción: </span>'.$product["description"].'</p>
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold text-green-700">Precio: </span>'.$product["price"].'</p>
                        <br />
                        <p class="text-m text-gray-500 leading-5">
                        <span class="font-bold">Distribuido por: </span>'.$product["pubName"].'</p>
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