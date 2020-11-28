    <?php include_once 'includes/templates/header.php'; ?>
    
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseno web en espanol</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis enim eligendi sapiente autem earum. Obcaecati officia recusandae eos laborum sunt debitis maxime tenetur minima doloremque, excepturi quod incidunt neque impedit? Lorem ipsum dolor sit
            amet consectetur adipisicing elit. Ea deleniti fugiat hic a libero quae porro. Odio repellendus expedita reprehenderit deserunt veniam provident minus laborum ipsa quos molestias, sint optio.
        </p>
    </section>

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="imagenes/bg-talleres.jpg">
              <source src="video/video.mp4" type="video/mp4">
              <source src="video/video.webm" type="video/mp4">
              <source src="video/video.ogv" type="video/mp4">
            </video>
            <!--CONTENEDOR VIDEO-->
        </div>
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del evento</h2>

                    <?php 
                        //Arreglo parecido al if - else
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = " SELECT * FROM `categoria_evento` ";
                            $resultado = $conexion->query($sql);
                        }catch(\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>

                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)){ 
                                $categoria = $cat['cat_evento'];
                            ?>
                        <a href="#<?php echo strtolower($categoria)?>"><i class="fas <?php echo $cat['icono']; ?>"> </i> <?php echo $categoria ?> </a>
                        <?php } ?>
                    </nav>

                    <?php 
                        //Arreglo parecido al if - else
                        try{
                            require_once('includes/funciones/bd_conexion.php');
                            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 4 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                            $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 5 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                            $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= " AND eventos.id_cat_evento = 6 ";
                            $sql .= " ORDER BY evento_id LIMIT 2; ";
                        }catch(\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>

                    <?php $conexion->multi_query($sql) ?>

                    <?php 
                        do{
                            $resultado = $conexion->store_result();
                            $row = $resultado->fetch_all(MYSQLI_ASSOC);
                            $i = 0;

                            foreach($row as $evento){
                                if($i % 2 == 0){
                    ?>
                                    <div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix">
                                <?php } // FIN DEL IF ?>
                                        <div class="detalle-evento">
                                            <h3><?php echo $evento['nombre_evento']; ?></h3>
                                            <p><i class="fas fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                                            <p><i class="fas fa-calendar" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                                            <p><i class="fas fa-user" aria-hidden="true"> </i><?php echo $evento['nombre_invitado']." ".$evento['apellido_invitado']; ?></p>
                                        </div>
                                    
                                <?php if($i % 2 == 1){ ?>

                                    <a href="calendario.php" class="button float-right">Ver todos</a>
                                    </div>
                    <?php
                            } //Endif
                            $i++;
                                 } //Endforeach
                            $resultado->free();
                        }while($conexion->more_results() && $conexion->next_result());?>

                </div>
            </div>
        </div>
    </section>

    <?php include_once 'includes/templates/invitados-template.php'; ?>

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados
                </li>
                <li>
                    <p class="numero"></p>Talleres
                </li>
                <li>
                    <p class="numero"></p>Dias
                </li>
                <li>
                    <p class="numero"></p>Conferencias
                </li>
            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por Dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por Dos Dia</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div id="mapa" class="mapa">

    </div>

    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ab cumque dolore voluptas molestias saepe labore? Perferendis optio est iste vitae accusantium! Accusamus tenetur officiis doloremque at non iusto eveniet.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="imagenes/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Disenador de @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ab cumque dolore voluptas molestias saepe labore? Perferendis optio est iste vitae accusantium! Accusamus tenetur officiis doloremque at non iusto eveniet.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="imagenes/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Disenador de @prisma</span></cite>
                    </footer </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ab cumque dolore voluptas molestias saepe labore? Perferendis optio est iste vitae accusantium! Accusamus tenetur officiis doloremque at non iusto eveniet.</p>
                    <footer class="info-testimonial clearfix">
                        <img src="imagenes/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedo <span>Disenador de @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter: </p>
            <h1 class="nombre-sitio">GdlWebCamp</h1>
            <a href="#" class="button transparente">Registro</a>
        </div>
    </div>
    <!-- NEWSLETTER -->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>dias</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="minutos" class="numero"></p>minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>

    <?php include_once 'includes/templates/footer.php'; ?>