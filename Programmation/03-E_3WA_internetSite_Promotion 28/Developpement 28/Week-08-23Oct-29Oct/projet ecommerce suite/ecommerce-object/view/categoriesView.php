<header class="jumbotron hero-spacer">
    <h1>Toutes les catégories</h1>
</header>

<hr>
<!-- /.row -->

<!-- Page Features -->
<div class="row text-center">
    <?php foreach($categories as $cat) : ?>
    <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail">
            <img src="http://placehold.it/800x500" alt="">
            <div class="caption">
                <h3><a href="?page=category&idcat=<?= $cat->getId(); ?>"><?= $cat->getNom(); ?></a></h3>
                <p><?= $cat->getLittleDescription(); ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>