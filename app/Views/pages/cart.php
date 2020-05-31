<div class="container">
<div class="row">
    <div class="col-md-8">
        <h1 class="mb-4">Shopping Cart</h1>
        <div class="row cart-section">  
            <div class="col">
               <p class="text-center"> <img src="<?php echo base_url("public/src/img/user.jpg")?>" alt="imagebook" class="imagecart"></p>
            </div>
            <div class="col">
                <p>Jewels Of Nizam</p>
                <p>by Getta Devi</p> 
            </div>
            <div class="col">
                <p>Precio</p>
                <p>$250</p>
            </div>
        </div>
        <div class="row cart-section">  
            <div class="col">
               <p class="text-center"> <img src="<?php echo base_url("public/src/img/user.jpg")?>" alt="imagebook" class="imagecart"></p>
            </div>
            <div class="col">
                <p>Jewels Of Nizam</p>
                <p>by Getta Devi</p> 
            </div>
            <div class="col">
                <p>Precio</p>
                <p>$250</p>
            </div>
        </div>
        <div class="row cart-section">  
            <div class="col">
               <p class="text-center"> <img src="<?php echo base_url("public/src/img/user.jpg")?>" alt="imagebook" class="imagecart"></p>
            </div>
            <div class="col">
                <p>Jewels Of Nizam</p>
                <p>by Getta Devi</p> 
            </div>
            <div class="col">
                <p>Precio</p>
                <p>$250</p>
            </div>
        </div>
        <div class="row cart-section">  
            <div class="col">
               <p class="text-center"> <img src="<?php echo base_url("public/src/img/user.jpg")?>" alt="imagebook" class="imagecart"></p>
            </div>
            <div class="col">
                <p>Jewels Of Nizam</p>
                <p>by Getta Devi</p> 
            </div>
            <div class="col">
                <p>Precio</p>
                <p>$250</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 cart-pay">
        <?php 
            $libros = ['Libro 1', 'libro 2', 'libro 3']
        ?>
        <h2>Subtotal: (<?= count($libros) ?> Libros)</h2>
        <h3>$250</h3>
        <p>
            <ul>
            <?php 
            foreach($libros as $libro){
                echo '<li>'.$libro.'</li>';
            }
            ?>
            </ul>
        </p>
        <button type="button" class="btn btn-outline-warning btnSeeBook">Pagar</button>
    </div>
</div>