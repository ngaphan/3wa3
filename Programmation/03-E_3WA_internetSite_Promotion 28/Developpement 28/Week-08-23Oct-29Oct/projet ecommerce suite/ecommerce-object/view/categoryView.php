<header class="jumbotron hero-spacer">
    <h1>A Warm Welcome!</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <p><a class="btn btn-primary btn-large">Call to action!</a>
    </p>
</header>

<hr>

<!-- Title -->
<div class="row">
    <div class="col-lg-12">
        <h3>Latest Features</h3>
    </div>
</div>
<!-- /.row -->

<!-- Page Features -->
<div class="row text-center">

    <?php foreach ($productscategorie as $prod) : ?>
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3><?= $prod->getNom(); ?></h3>
                <p>
                    <a href="?page=shopitem&id=<?= $prod->getId(); ?>" class="btn btn-default">More Info</a>
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>