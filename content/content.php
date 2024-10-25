<?php
class Job
{
  public $name;
  public $desc;
  public $requirements;
  public $modality;
  public $experience;

  function __construct($name, $desc, $requirements, $modality, $experience)
  {
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
]
?>