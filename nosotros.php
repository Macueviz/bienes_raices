<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="seccion contenedor">
        <h2>Conoce Sobre Nosotros</h2>
        <div class="contenedor-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/blog3.webp" alt="imagen blog">
                </picture>
            </div>

            <div class="informacion-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
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
        </div>
    </main>
        <section class="contenedor seccion">
            <h1>Más sobre nosotros</h1>
    
            <div class="iconos-nosotros">
                <div class="iconos">
                    <img src="build/img/icono1.svg" alt="icono Seguridad" loading="lazy">
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
        </section>

<?php incluirTemplate('footer'); ?>