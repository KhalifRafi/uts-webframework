<?= $this->extend("template/layout") ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4 dashboard-page">
            <div class="row">
                <div class="col-lg-6 dashboard-img-page">
                    <div class="dip">
                        <img src="/assets/amd.jpg" alt="" width="100%" class="dashboard-image">
                    </div>
                </div>
                <div class="col-lg-6 dashboard-des">
                    <h2 class="dashboard-title">The World's Fastest PC Gaming Processor</h2>
                    <p class="dashboard-des">
                        Get an average of 15% more performance with AMD Ryzen™ 7 5800X3D, the only processor with AMD 3D V-Cache™ technology.1
                    </p>
                    <div class="dashboard-btn">
                        <a href="" class="learn-button">Learn More</a>
                        <a href="" class="learn-button">Find Retailers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>