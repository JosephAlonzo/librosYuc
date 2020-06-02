<div class="top-area <?= (uri_string() == 'cart/show' )? 'fixed': '';?>">
          <div class="title-top-area">
            <p>
                <?= (uri_string() == 'cart/show' )? 'Carrito de compra': 'Buscar libros disponibles';?>
            </p>
          </div>
          <?php if(uri_string() != 'cart/show' ){?>
          <div class="browse-titles">
              <a href="<?php echo site_url('/allBooks');?>" class="<?php echo (uri_string() == 'allBooks')?'active':'' ?>">Todos</a>
              <a href="<?php echo site_url('/mostRecent');?>" class="<?php echo (uri_string() == 'mostRecent')?'active':'' ?>">Más recientes</a>
              <a href="<?php echo site_url('/mostPopular');?>" class="<?php echo (uri_string() == 'mostPopular')?'active':'' ?>">Más populares</a>
              <a href="<?php echo site_url('/freeBooks');?>" class="<?php echo (uri_string() == 'freeBooks')?'active':'' ?>">Libros gratis</a>
              <div class="search-button ">
                  <form action="<?php echo site_url('/searchBooks'); ?>" method="post">
                    <input type="text" name="search" id="search" placeholder="Buscar por palabras clave" Required>
                    <input type="submit" value="enviar" id="btn-search" hidden >
                  </form>
              </div>
          </div>  
          <?php } ?>
      </div>
      