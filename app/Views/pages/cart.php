<div class="container">
<div class="row">
    <div class="col-md-8">
        <?php 
        $total = 0;
        if(!empty($books))
        {
        foreach($books as $key=>$book) {
            ?>
        <div class="row cart-section">  
            <div class="col-md-3">
               <p class="text-center"> <img src="<?php echo base_url("public/src/img/".$book['foto'])?>" alt="imagebook" class="imagecart"></p>
            </div>
            <div class="col-md-3">
                <h2>Nombre del libro</h2>
                <p><?=$book['nombre']?> <span>Por <?=$book['autor']?></span></p>
            </div>
            <div class="col-md-2">
                <h2>Precio</h2>
                <p>$<?=$book['precio']?></p>
            </div>
            <div class="col-md-2">
                    <h2>Cantidad</h2>
                    <p><?php 
                    $cantidad = null;
                    foreach($cart as $key => $value){
                        if($value['idBook'] == $book['id']){
                            $cantidad = $value['cantidad'];
                            $total+=$book['precio'] * $cantidad;
                            echo $cantidad;
                        }
                    }
                    ?></p>
            </div>
            <div class="col-md-2">
                <h2>Acciones</h2>
                <p><a href="<?= site_url('/cart/add/?idBook='.$book['id'])?>" id="plus" ><i class="fas fa-plus" title="Agregar"></i></a>
                <a href="<?= site_url('/cart/delete/?idBook='.$book['id']).'&cantidad='.$cantidad?>" id="less" ><i class="fas fa-minus" title="Reducir"></i></a></p>
            </div>
        </div>
        <?php }}
        else{
            echo '<br><br><div><h3>No has agregado productos a tu carrito</h3></div>';
            $books = [];
        }?>
    </div>
    <div class="col-md-3 cart-pay">
        <h2>Subtotal: $<?=$total?> (<?= count($books)?> <?= (count($books) > 1)?'Libros' : 'Libro'; ?>)</h2>
        <p>
            <ul>
            <?php 
            foreach($books as $key=>$book){
                echo '<li>'.$book['nombre'].': $'. $book['precio'].'</li>';
            }
            ?>
            </ul>
        </p>
        <button type="button" class="btn btn-outline-warning btnSeeBook btn-block">Pagar</button>
    </div>
</div>