<div class="container">
<div class="row">
    <?php 
    foreach($books as $key=>$book) {?>
    <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="card card-browse">
            <div class="overcard d-flex align-items-center justify-content-center align-content-center flex-wrap flex-column">
                <a href="<?php echo site_url("/seeBook?idBook=".$book['id']."")?>" class="btn btn-outline-warning btnSeeBook mb-1">Ver libro</a>
                <a href="<?php echo site_url("cart/add?idBook=".$book['id']."")?>" class="btn btn-outline-primary btnCarrito ">Agregar al carrito</a>
            </div>
            <div class="overcard2 ">
                <div class="options-browse d-flex flex-column align-items-center justify-content-center">
                    <p>Agregar a: </p>
                    <a href="
                    <?= (isset($book['nowreading']))? 
                    site_url("/deleteToNowReading?idNowReading=".$book['nowreading']."&idBook=".$book['id']."&uri=".uri_string()):
                    site_url("/addToNowReading?idBook=".$book['id']."&uri=".uri_string()); 
                    ?>" >
                    <i class="fas fa-book <?= ( isset($book['nowreading'] ))? 'list-icons':''; ?>" title="Agregar a mi lista de ''leyendo''"></i></a>

                    <a href="
                    <?= (isset($book['favorite']))? 
                    site_url("/deleteToFavourite?idFavourite=".$book['favorite']."&idBook=".$book['id']."&uri=".uri_string()):
                    site_url("/addToFavourite?idBook=".$book['id']."&uri=".uri_string()); 
                    ?>">
                    <i class="fas fa-star <?= ( isset($book['favorite']))? 'list-icons':''; ?>" title="Agregar a mis favoritos"></i></a>

                    <a href="
                    <?= (isset($book['wishlist']))? 
                    site_url("/deleteToWishlist?idWishlist=".$book['wishlist']."&idBook=".$book['id']."&uri=".uri_string()):
                    site_url("/addToWishlist?idBook=".$book['id']."&uri=".uri_string()); 
                    ?>">
                    <i class="fas fa-list <?= ( isset($book['wishlist']) )? 'list-icons':''; ?>" title="Agregar a mi lista de deseos"></i></a> 
                </div>
            </div>
            <img src="<?php echo base_url("public/src/img/".$book['foto']."")?>" class="card-img-top" alt="imagen de libro">
            <div class="card-body">
                <h1 class="title"><?php echo $book['nombre'] ?></h1>
                <h2 class="subtitle">por <?php echo $book['autor'] ?></h2>
                <?php 
                    if( isset($book['count']) )
                    echo '<h3 >Personas que están leyendo esté libro: '.($book['count']).'  </h3>'
                ?>
                <p class="rate">
                    <?php 
                    $stars = (int)$book['rate'];
                    $stars2 = (float)$book['rate'];
                    for ($i=0; $i < intval($stars); $i++) { 
                        echo '<i class="fas fa-star"></i>';
                    }
                    if($stars != $stars2){
                        echo '<i class="fas fa-star-half-alt"></i>';
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
