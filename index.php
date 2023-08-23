<?php 

    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="iconos">
                <img  src="build/img/icono1.svg" alt="icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium neque quasi, voluptates optio voluptatibus quisquam magni ratione culpa, nam nemo commodi. Inventore doloribus nihil architecto illum aperiam nostrum distinctio quae.</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono2.svg" alt="icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium neque quasi, voluptates optio voluptatibus quisquam magni ratione culpa, nam nemo commodi. Inventore doloribus nihil architecto illum aperiam nostrum distinctio quae.</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono3.svg" alt="icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium neque quasi, voluptates optio voluptatibus quisquam magni ratione culpa, nam nemo commodi. Inventore doloribus nihil architecto illum aperiam nostrum distinctio quae.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio1.webp" alt="anuncio">
                </picture>
                
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a precio económico</p>
                    <p class="precio">3,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedades
                    </a>
                </div> <!-- Contenido anuncio -->
            </div>  <!--anuncio -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio2.webp" alt="anuncio">
                </picture>
                
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a precio económico</p>
                    <p class="precio">3,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedades
                    </a>
                </div> <!-- Contenido anuncio -->
            </div>  <!--anuncio -->
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/anuncio3.webp" alt="anuncio">
                </picture>
                
                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a precio económico</p>
                    <p class="precio">3,000,000€</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncios.php" class="boton-amarillo-block">
                        Ver propiedades
                    </a>
                </div> <!-- Contenido anuncio -->
            </div>  <!--anuncio -->
        </div>   <!-- Contenido anuncio -->
            <div class="alinear-derecha">
                <a href="anuncios.php" class="boton-verde">Ver todas</a>
            </div>    
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños </h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto en la mayor brevedad </p>
        <a href="contacto.php" class="boton-amarillo">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior ">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source scrset="build/img/blog1.webp" type="image/webp">
                        <source scrset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>24/06/21</span> por: <span>Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales
                            y ahorrando dinero
                        </p>
                    </a>

                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source scrset="build/img/blog2.webp" type="image/webp">
                        <source scrset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>24/06/21</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores
                            para darle vida a tu espacio
                        </p>
                    </a>
                    
                </div>
            </article>

        </section>
        <section class="testimonios">
             <h3>Testimonios</h3>
             <div class="testimonial">
                 <blockquote>
                     El personal se comportó de una excelente manera, muy buena atención y la casa que me ofrecieron
                     cumple con las expectativas que tengo
                 </blockquote>
                 <p>- Annita ба́бушка</p>
             </div>
        </section>
    </div>

<?php incluirTemplate('footer'); ?>