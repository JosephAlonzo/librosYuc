<div class="container">
<div class="row see-book">
    <div class="col-md-3 image-buybooks">
        <img src="<?php echo base_url("public/src/img/".$books['foto']."")?>" alt="imagebook">
    </div>
    <div class="col-md-5">
        <h1><?php echo $books['nombre'] ?></h1>
        <h2>por <?php echo $books['autor'] ?></h2>
        <p class="rate">
            <?php 
            $stars = (int)$books['rate'];
            $stars2 = (float)$books['rate'];
            for ($i=0; $i < intval($stars); $i++) { 
                echo '<i class="fas fa-star star"></i>';
            }
            if($stars != $stars2){
                echo '<i class="fas fa-star-half-alt star"></i>';
            }
            ?>
        </p>
        <p>
            <?php echo $books['descripcion'] ?>
        </p>
        <?php if( !empty($users)){?>
        <div class="options-buybooks">
            <span class="field-tip">
                <?php ?>
                <a href="<?php echo ($nowreading)? site_url("/deleteToNowReading?idNowReading=".$nowreading['id']."&idBook=".$books['id']) : site_url("/addToNowReading?idBook=".$books['id'])?>"><i class="fas fa-book <?php echo ($nowreading)?'list-icons':''; ?>"></i></a>
                <span class="tip-content">Agregar a mi lista de libros que actualmente estas leyendo.</span>
            </span>
            <span class="field-tip">
                <a href="<?php echo ($favourite)? site_url("/deleteToFavourite?idFavourite=".$favourite['id']."&idBook=".$books['id']) : site_url("/addToFavourite?idBook=".$books['id']."")?>"><i class="fas fa-star <?php echo ($favourite)?'list-icons':''; ?>"></i></a>
                <span class="tip-content">Agregar a mi lista de libros favoritos.</span>
            </span>
            <span class="field-tip">
                <a href="<?php echo ($wishlist)? site_url("/deleteToWishlist?idWishlist=".$wishlist['id']."&idBook=".$books['id']) : site_url("/addToWishlist?idBook=".$books['id']."")?>"><i class="fas fa-list <?php echo ($wishlist)?'list-icons':''; ?>"></i></a>
                <span class="tip-content">Agregar a mi lista de libros deseados.</span>
            </span>
        </div>
        <?php }?>
    </div>
    <div class="col-md-3 cart-pay">
        <h2>Precio: </h2>
        <h3><?php echo '$'.$books['precio']?></h3>
        <a type="button" href="<?php echo site_url("cart/add?idBook=".$books['id']."")?>" class="btn btn-outline-primary btnCarrito ">Agregar al carrito</a>
        <a type="button" href="<?php echo site_url("cart/add?idBook=".$books['id']."")?>" class="btn btn-outline-warning btnSeeBook">Comprar libro</a>
    </div>
</div>