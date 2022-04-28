<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/estilos.css">

</head>

<body>

<header class="container">

	<center>
		<h1><b>Animales en peligro de extinsión</b></h1>
		<img src="https://larepublica.pe/resizer/sXkER9g45Ck2atTaGhmmt09kMdM=/480x282/top/smart/cloudfront-us-east-1.images.arcpublishing.com/gruporepublica/KP6CAVBGFVCYVGRU5QC3TRU43M.jpg" width="500">
<br></br>
	<ul class="menu">
<b>
	<li>
		Osos Polares
	</li>

	<li>
		Osos pandas
	</li>

	<li>
		El elefante
	</li>
	<li>
		La ballena
	</li>
</b>
</ul>
<br></br>
</center>
</header>
<section class="container">
	<center>
     <?php $articulos = new WP_Query ([ 
                         'showpost'=> 3,
                         ]);
     while ($articulos -> have_posts ()) {
     	$articulos -> the_post ();

     	the_title ();
     	echo '<hr>';
     } ?>




		<h3><b>Osos polares</b></h3>
		<img src="https://static.dw.com/image/52547785_303.jpg" width="300">
        <br></br>
		<p>El oso polar está en peligro de extinción, ya hace tiempo que los expertos vienen alertando de la problemática a la que se enfrenta a esta especie, pero no fue hasta 2008 cuando Estados Unidos decidió incluir al oso polar u oso blanco en su lista de animales en peligro de extinción.
        Según fuentes del país norteamericano, el cambio climático está destruyendo su hábitat en el Océano Ártico y con ello reduciendo el número de especies en nuestro planeta a pasos agigantados. En el siguiente artículo de EcologíaVerde te hablaremos sobre por qué el oso polar esté en peligro de extinción, así como de algunas acciones para poder ayudarlos y evitar su desaparición.Científicos del Gobierno de Estados Unidos piensan que dentro de 50 años se extinguirán dos terceras partes de la actual población de osos polares. La decisión se esperaba desde enero, pero el Departamento de Interior dijo que necesitaba más tiempo para estudiar algunas propuestas de miembros del Congreso y de los ecologistas.A todo el mundo no le ha parecido correcta esta medida. Varios expertos en políticas medioambientales del Heartland Institute, han tachado esta decisión de "alarmista" porque "aunque las temperaturas han aumentado en los últimos 10.000 años los osos polares no han desaparecido".</p>
	</center>
	<center>

		<h3><b>El oso panda</b></h3>
		<img src="https://www.bbva.com/wp-content/uploads/2019/08/panda-300x197.jpg" width="300">
		<br></br>
		<p>El oso polar está en peligro de extinción, ya hace tiempo que los expertos vienen alertando de la problemática a la que se enfrenta a esta especie, pero no fue hasta 2008 cuando Estados Unidos decidió incluir al oso polar u oso blanco en su lista de animales en peligro de extinción.
        Según fuentes del país norteamericano, el cambio climático está destruyendo su hábitat en el Océano Ártico y con ello reduciendo el número de especies en nuestro planeta a pasos agigantados. En el siguiente artículo de EcologíaVerde te hablaremos sobre por qué el oso polar esté en peligro de extinción, así como de algunas acciones para poder ayudarlos y evitar su desaparición.La principal amenaza a la que se enfrentan a día de hoy los osos pandas es la deforestación. La pérdida de su hábitat es una de las razones que explican por qué quedan cada vez menos ejemplares. Consumen únicamente de bambú, de forma que la tala de los bosques de bambú conlleva la pérdida de su alimento. Hasta hace relativamente poco vivían en buena parte del sudeste asiático, en países como Laos, Birmania o Vietnam. Sin embargo, actualmente sólo se pueden encontrar en China</p>
	</center>
	<br></br>
	<center>
		<h3><b>El elefante</b></h3>
		<img src="https://www.bbva.com/wp-content/uploads/2021/03/elefante-300x185.jpg">
		<br></br>
		<p>El oso polar está en peligro de extinción, ya hace tiempo que los expertos vienen alertando de la problemática a la que se enfrenta a esta especie, pero no fue hasta 2008 cuando Estados Unidos decidió incluir al oso polar u oso blanco en su lista de animales en peligro de extinción.Según fuentes del país norteamericano, el cambio climático está destruyendo su hábitat en el Océano Ártico y con ello reduciendo el número de especies en nuestro planeta a pasos agigantados. En el siguiente artículo de EcologíaVerde te hablaremos sobre por qué el oso polar esté en peligro de extinción, así como de algunas acciones para poder ayudarlos y evitar su desaparición.Las últimas evaluaciones ponen de relieve una disminución general del número de elefantes africanos en todo el continente. El número de elefantes de bosque africanos ha disminuido en más de un 86% en un período de 31 años, mientras que la población de elefantes de sabana africanos lo ha hecho en al menos un 60% en los últimos 50 años, según las evaluaciones.</p>
	</center>
</section>
<footer class="container">
	<ul>

	<li>
		<a href="https://es-la.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	</li>

	<li>
		<a href="https://es-la.facebook.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	</li>

	<li>
		<a href="https://twitter.com/?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	</li>
</ul>
</footer>
</body>
</html>
