<?php
    include_once 'app/config.php';
    include_once 'views/partials/head.php';
?>

<header>
    <nav class="nav">
        <div class="nav__container">
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <a href="<?php echo SERVIDOR ?>">
                    <img src="public/img/inicio/logo-i.png" alt="">
                </a>
            </div>
            <ul class="links">
                <li>
                    <a href="<?php echo SERVIDOR ?>" class="nav__links">Inicio</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_NOSOTROS ?>" class="nav__links">Nosotros</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_CLASES ?>" class="nav__links">Clases libres</a>
                </li>
                <li>
                    <a href="" class="nav__links">Curso</a>
                </li>
                <!-- <input type="text" placeholder="Search.."> -->
                <img src="public/img/inicio/buscar.png" alt="carrito">
                <img src="public/img/inicio/carrito.png" alt="carrito">
                <a href="" class="btn__curso">Mis cursos</a>
                <img src="public/img/inicio/user.png" alt="user">
            </ul>
            <label for="nav-toggle" class="icon-burger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
			</label>
        </div>
    </nav>
</header>

<section class="propuesta">
    <div class="propuesta__container">
        <div class="propuesta__descriptions">
            <h3>Nuestra propuesta.</h3>
            <p>El mercado laboral moderno dicta sus propios términos. Hoy en día, ser un especialista competitivo requiere más que habilidades profesionales.</p>
        </div>
        <div class="propuesta__container__img">
            <div class="propuesta__linea">
                <div class="propuesta__ico">
                    <img src="public/img/inicio/ico-1.png" alt="">
                    <p>Cursos especializados</p>
                </div>
               <div>
                    <img src="public/img/inicio/propuesta-linea.png" alt="">
               </div>
               <div class="propuesta__ico2">
                    <img src="public/img/inicio/ico-2.png" alt="">
                    <p>Clases libres 100 gratuitas (1 hora) </p>
               </div>
            </div>
            <figure class="propuesta__img">
                <img src="public/img/inicio/img-propuesta.png" alt="">
            </figure>
        </div>
    </div>
</section>

<section class="transformamos">
    <div class="transformamos__container">
        <h2>Transformamos tu futuro</h2>
        <div class="transformamos__article">
            <article class="transformamos__item">
                <figure class="transformamos__figure">
                    <img src="public/img/inicio/t_1.png" alt="img-1">
                </figure>
             <h3>Pensamiento + aprendizaje</h3>
             <p>Generamos experiencias de transformación a nivel personal y profesional</p>
            </article>

            <article class="transformamos__item">
                <figure class="transformamos__figure">
                    <img src="public/img/inicio/t_2.png" alt="img-1">
                </figure>
             <h3>Cercanía a la realidad</h3>
             <p>Simuladores de Decisiones Estratégicas, Marketing y Finanzas.</p>
            </article>

            <article class="transformamos__item">
                <figure class="transformamos__figure">
                    <img src="public/img/inicio/t_3.png" alt="img-1">
                </figure>
             <h3>Liderazgo Transformador</h3>
             <p>Metodología LEGO®, Serious Play® y Estrategia GO.</p>
            </article>
            <article class="transformamos__item">
                <figure class="transformamos__figure">
                    <img src="public/img/inicio/t_4.png" alt="img-1">
                </figure>
             <h3>Creatividad e Innovación</h3>
             <p>Metodología de Innovación Design Thinking.</p>
            </article>
        </div>
    </div>
</section>


<?php
    include_once 'views/partials/footer.php';
?>