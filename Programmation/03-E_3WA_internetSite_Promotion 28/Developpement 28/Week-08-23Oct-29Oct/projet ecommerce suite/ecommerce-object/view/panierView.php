<?php if(!empty($produitsQuantity)) : ?>
<table class="table">
  <caption>Optional table caption.</caption>
  <thead>
    <tr>
      <th>image</th>
      <th>titre</th>
      <th>quantité</th>
      <th>supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($produits as $prod) : ?>
      <tr>
        <td><img style="height:150px;" src="<?= VIEW_IMG_ARTICLE.$prod->getImage(); ?>"></td>
        <td><?= $prod->getNom(); ?></td>
        <td>
          <a href="?page=panier&action=down&id=<?= $prod->getId(); ?>" class="btn btn-info">Moins</a>
          <?= $produitsQuantity[$prod->getId()]; ?>
        <a href="?page=panier&action=up&id=<?= $prod->getId(); ?>" class="btn btn-info">Plus</a></td>
        <td><a href="?page=panier&action=supp&id=<?= $prod->getId(); ?>" class="btn btn-danger">Supprimer</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <div class="alert alert-warning">Il n'y a rien dans votre panier</div>
<?php endif; ?>