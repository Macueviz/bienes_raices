<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
            <picture>
                <source srcset="build/img/destacada.webp" type="image/webp">
                <source srcset="build/img/destacada.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/destacada.jpg" alt="imagen portada">
            </picture>
        </div>
        <div class="resumen-propiedad">
            <p class="precio">3,000.000€</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita rem ipsum vitae,
                incidunt et nulla, accusamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                 delectus voluptatibus quisquam? Maxime. or sit amet consectetur adipisicing elit. Veniam, expedita rem ipsum vitae,
                 incidunt et nulla, accusamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam? Maximesamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam? Maximesamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam?</p> 
           <p> Maximesamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam? Maximesamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam? Maximesamus dolorum distinctio velit dignissimos iusto at cumque nobis atque
                  delectus voluptatibus quisquam? Maxime</p>
        </div>

    </main>

<?php incluirTemplate('footer'); ?>