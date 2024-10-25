  <header class="bg-sky-950">
    <nav class="bg-sky-950 text-white max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <h2><a href="/" class="text-orange-100"><?php include BASE_PATH."/config/variables.php"; echo $SITE_NAME ?></a></h2>
      <div class="internal-links">
        <a href="/" class="text-white hover:text-orange-100">Home</a>
        <a href="/pages/about.php" class="text-white hover:text-orange-100">Sobre nosotros</a>
        <a href="/pages/contactos.php" class="text-white hover:text-orange-100">Contactos</a>
        <a href="/pages/carreras.php" class="text-white hover:text-orange-100">Carreras</a>
        <a href="/pages/productos.php" class="text-white hover:text-orange-100">Productos</a>
      </div>
    </nav>
  </header>
  <style>
    nav a {
      padding: 1em 0.5em;
      border-bottom: 4px solid transparent;
      text-decoration: none;
    }

    nav a.active {
      text-decoration: none;
      color: '#ffedd5';
    }
  </style>