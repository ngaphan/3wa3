<?php include ROOT.'controller/sidebarController.php'; ?>

<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
    	<?php foreach($sidebarCategorie as $cat) : ?>
        	<a href="?page=category&idcat=<?= $cat->getId(); ?>" class="list-group-item"><?= $cat->getNom(); ?></a>
        <?php endforeach; ?>
    </div>
</div>