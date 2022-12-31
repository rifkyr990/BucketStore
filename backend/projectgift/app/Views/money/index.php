<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>

<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h1 class="text-center">MONEY</h1>
        </div>

        <div class="row">
            <?php foreach ($money as $m) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="#" class="option1">
                                    Add To Cart
                                </a>
                                <a href="/money/<?= $m['slug']; ?>" class="option2">
                                    Detail
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/img/<?= $m['sampul']; ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                <?= $m['judul']; ?>
                            </h5>
                            <h6>
                                <?= $m['harga']; ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <hr>
    </div>
</section>
<?= $this->endSection(); ?>