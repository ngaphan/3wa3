<div class="row carousel-holder">

    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    $count = count($carouselProducts);
                    for ($i=0; $i < $count; $i++) :
                ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?= $i; ?>" <?= ($i == 0 ? 'class="active"' : '' ) ?>></li>
                    <?php endfor; ?>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($carouselProducts as $key => $carousel): ?>
                    <div class="item <?= ($key == 0 ? 'active' : '') ?>">
                        <img style="height:300px" class="slide-image" src="<?= VIEW_IMG_ARTICLE.$carousel->getImage(); ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>

</div>

<div class="row">

    <?php foreach($products as $prod) : ?>
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img style="height:150px" src="<?= VIEW_IMG_ARTICLE.$prod->getImage(); ?>" alt="">
                <div class="caption">
                    <h4 class="pull-right">$<?= $prod->getPrix(); ?></h4>
                    <h4><a href="#"><?= $prod->getNom(); ?></a>
                    </h4>
                    <p><?= $prod->getLittleDescription(); ?></p>
                </div>
                <div class="ratings">
                    <p class="pull-right">15 reviews</p>
                    <p>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>