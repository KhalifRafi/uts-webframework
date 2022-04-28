<?= $this->extend('template/layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="row my-4">
        <div class="col-lg-5">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Processors" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row amd-laptop-page">
        <div class="col-lg-12">
            <h2 class="product-title text-center">
                AMD Laptop Processors
            </h2>
            <div class="business-page">
                <div class="row">
                    <div class="col-lg-12 business-page-lay">
                        <h5 class="business-page-lay-title">Business and Commercial Processors</h5>
                    </div>
                </div>
                <div class="row mt-5 justify-content-evenly">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/<?= $item[0]['image'] ?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[0]['nama'] ?></h5>
                                <p class="card-text"><?= $item[0]['desk'] ?></p>
                                <a href="/product/<?= $item[0]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/<?= $item[1]['image'] ?>.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[1]['nama'] ?></h5>
                                <p class="card-text"><?= $item[1]['desk'] ?></p>
                                <a href="/product/<?= $item[1]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/<?= $item[2]['image'] ?>.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[2]['nama'] ?></h5>
                                <p class="card-text"><?= $item[2]['desk'] ?></p>
                                <a href="/product/<?= $item[2]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="personal-laptop-page">
                <div class="row">
                    <div class="col-lg-12 personal-page-lay">
                        <h5 class="personal-page-lay-title">Personal Laptop Processors</h5>
                    </div>
                </div>
                <div class="row mt-5 justify-content-evenly">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/promobile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[3]['nama'] ?></h5>
                                <p class="card-text"><?= $item[3]['desk'] ?></p>
                                <a href="/product/<?= $item[3]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/poweredlaptop.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[4]['nama'] ?></h5>
                                <p class="card-text"><?= $item[4]['desk'] ?></p>
                                <a href="/product/<?= $item[4]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row amd-laptop-page mt-6">
        <div class="col-lg-12">
            <h2 class="product-title text-center">
                AMD Desktop Processors
            </h2>
            <div class="business-commercial-page">
                <div class="row">
                    <div class="col-lg-12 business-commercial-page-lay">
                        <h5 class="business-commercial-page-lay-title">Business and Commercial Processors</h5>
                    </div>
                </div>
                <div class="row mt-5 justify-content-evenly">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/promobile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[5]['nama'] ?></h5>
                                <p class="card-text"><?= $item[5]['desk'] ?></p>
                                <a href="/product/<?= $item[5]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/mobileprocessor.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[6]['nama'] ?></h5>
                                <p class="card-text"><?= $item[6]['desk'] ?></p>
                                <a href="/product/<?= $item[6]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/promobile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[7]['nama'] ?></h5>
                                <p class="card-text"><?= $item[7]['desk'] ?></p>
                                <a href="/product/<?= $item[7]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-product-page">
                <div class="row">
                    <div class="col-lg-12 related-product-page-lay">
                        <h5 class="related-product-page-lay-title">Business and Commercial Processors</h5>
                    </div>
                </div>
                <div class="row mt-5 justify-content-evenly">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/promobile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[12]['nama'] ?></h5>
                                <p class="card-text"><?= $item[12]['desk'] ?></p>
                                <a href="/product/<?= $item[12]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/mobileprocessor.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[13]['nama'] ?></h5>
                                <p class="card-text"><?= $item[13]['desk'] ?></p>
                                <a href="/product/<?= $item[13]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="assets/promobile.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item[14]['nama'] ?></h5>
                                <p class="card-text"><?= $item[14]['desk'] ?></p>
                                <a href="/product/<?= $item[14]['id'] ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>