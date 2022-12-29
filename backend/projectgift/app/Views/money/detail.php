<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<!-- navbar -->

<!--detail produk-->
<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <div class="main-img">
                <img class="img-fluid" src="/img/<?= $money['sampul']; ?>" alt="ProductS">
            </div>
        </div>
        <div class="col-md-7">
            <div class="main-description px-2">
                <div class="product-title text-bold my-3">
                    <?= $money['judul']; ?>
                </div>

                <div class="price-area my-4">
                    <p class="old-price mb-1"><?= $money['harga']; ?></p>
                </div>
                <div class="buttons d-flex my-5">
                    <div class="block quantity">
                        <input type="number" class="form-control" id="cart_quantity" value="1" min="0" max="5" placeholder="Enter email" name="cart_quantity">
                    </div>
                    <div class="block">
                        <button class="btn" id="cart"><a href="keranjang.html">Add to Cart</a></button>
                    </div>
                </div>
            </div>
            <div class="product-details my-4">
                <p class="details-title text-color mb-1">Product Details</p>
                <p class="description"><?= $money['deskripsi']; ?></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>