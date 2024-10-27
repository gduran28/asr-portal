<?php
class Job {
  public $name;
  public $desc;
  public $requirements;
  public $modality;
  public $experience;

  function __construct($name, $desc, $requirements, $modality, $experience) {
    $this->name = $name;
    $this->desc = $desc;
    $this->requirements = $requirements;
    $this->modality = $modality;
    $this->experience = $experience;
  }
}
$jobs = [
  new Job(
    "Desarrollador Full Stack",
    "Diseño y desarrollo de aplicaciones web.",
    "Conocimientos en JavaScript, Node.js, React, y bases de datos SQL.",
    "Remoto",
    "2+ años"
  ),
  new Job(
    "Diseñador UI/UX",
    "Creación de interfaces intuitivas y atractivas para aplicaciones web y móviles.",
    "Manejo de Figma, Adobe XD, y principios de diseño centrado en el usuario.",
    "Freelance / Proyecto específico.",
    "1+ años"
  ),
  new Job(
    "Desarrollador Mobile (iOS / Android)",
    "Creación de aplicaciones nativas y mantenimiento de funcionalidades en sistemas móviles.",
    "Conocimientos en Swift, Kotlin, o Flutter.",
    "Presencial",
    "2+ años"
  ),
  new Job(
    "Analista de Datos",
    "Análisis e interpretación de datos para apoyar la toma de decisiones estratégicas.",
    "Experiencia en SQL, Python (pandas, NumPy), y herramientas de visualización (Power BI o Tableau).",
    "Remoto",
    "1+ años"
  ),
  new Job(
    "Administrador de Sistemas",
    "Mantenimiento y configuración de servidores y redes empresariales.",
    "Conocimientos en Linux, administración de redes, y seguridad informática.",
    "Presencial",
    "2+ años"
  )
];

class Product {
  public $name;
  public $desc;
  public $price;
  public $image;

  function __construct($name, $desc, $price, $image) {
    $this->name = $name;
    $this->desc = $desc;
    $this->price = $price;
    $this->image = $image;
  }
}

$products = [
  new Product(
    "Diseño de UI/UX", 
    "Nos enfocamos en mejorar la forma en la que los usuarios interactuan con tus servicios y nos emociona hacer de eso el estandard. Usamos Figma como principal herramienta y garantizamos diseños modernos, funcionales y accesibles", 
    "Solicita una <a href='/pages/contactos.php'>cotización</a>*", 
    "https://plus.unsplash.com/premium_photo-1661388007672-2274a64bf468?q=80&w=2885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
  ),
  new Product(
    "Desarrollo de aplicaciones nativas", 
    "Sabemos la importancia del rendimiento en las aplicaciones, por eso ofrecemos desarrollo de aplicaciones en Kotlin y en Swift, garantizando rendimiento, optimización y uso de tecnologías modernas", 
    "Solicita una <a href='/pages/contactos.php'>cotización</a>*", 
    "https://images.unsplash.com/photo-1517650862521-d580d5348145?q=80&w=2969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
  ),
  new Product(
    "Desarrollo web fullstack", 
    "Ofrecemos servicios de desarrollo web con equipos especializados en todos los componentes necesarios para hacer funcionar una aplicación web.", 
    "Solicita una <a href='/pages/contactos.php'>cotización</a>*", 
    "https://images.unsplash.com/photo-1583508915901-b5f84c1dcde1?q=80&w=2970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
  ),
]
?>