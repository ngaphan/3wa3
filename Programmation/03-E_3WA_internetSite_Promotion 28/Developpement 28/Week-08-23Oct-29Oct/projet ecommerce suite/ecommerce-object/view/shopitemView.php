<div class="thumbnail">
    <img class="img-responsive" style="height:300px" src="<?= VIEW_IMG_ARTICLE.$product->getImage(); ?>" alt="">
    <div class="caption-full">
        <h4 class="pull-right">$<?= $product->getPrix(); ?></h4>
        <h4><a href="#"><?= $product->getNom(); ?></a>
        </h4>
        <p><?= $product->getDescription(); ?></p>
    </div>
    <form role="form" method="POST" action="?page=addpanier">
        <div class="form-group" id="formcom">
            <input type="number" placeholder="quantité" value="1" name="qty" class="form-control">
        </div>
        <input type="hidden" name="id_produit" value="<?= $product->getId(); ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <div class="ratings">
        <p class="pull-right">3 reviews</p>
        <p>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star"></span>
            <span class="glyphicon glyphicon-star-empty"></span>
            4.0 stars
        </p>
    </div>
</div>

<div class="well">

    <div class="text-right">
        <a id="displayformcomment" class="btn btn-success">Leave a Review</a>
    </div>

    <?php
        // dislay success
        $success = $messagesFlash->get('success');
        if($success) : 
            foreach ($success as $key => $value): ?>
            <div class="alert alert-success"><?= $value ?></div>
        <?php endforeach; endif; ?>

    <?php
        // dislay errors
        $errors = $messagesFlash->get('error');
        if ($errors) :
        foreach ($errors as $key => $value): ?>
            <div class="alert alert-danger"><?= $value ?></div>
    <?php endforeach; endif; ?>
    <div class="well" <?php ($errors || !$success ? 'style="display:none"' : '') ?>id="divformcomment">
        <h4>Leave a Comment:</h4>
        <form role="form" method="POST" action="?page=addcommentaire">
            <div class="form-group" id="formcom">
                <input type="text" placeholder="auteur" name="auteur" class="form-control">
            </div>
            <div class="form-group">
                <input type="integer" placeholder="note" name="note" class="form-control">
            </div>
            <div class="form-group">
                <textarea name="contenu" class="form-control" placeholder="commentaire" rows="3"></textarea>
            </div>
            <input type="hidden" name="id_produit" value="<?= $product->getId(); ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <hr>

    <?php foreach ($commentaires as $com) : ?>
    <div class="row">
        <div class="col-md-12">
            <?php
                for ($i=0; $i < 5 ; $i++)
                {
                    if ($i < $com->getNote())
                    {
                        echo '<span class="glyphicon glyphicon-star"></span>';
                    }
                    else
                    {
                        echo '<span class="glyphicon glyphicon-star-empty"></span>';
                    }
                }
            ?>
            <?= $com->getAuteur(); ?>
            <span class="pull-right"><?= $com->getDateCommentaire(); ?></span>
            <p><?= $com->getContenu(); ?></p>
        </div>
    </div>

    <hr>

    <?php endforeach; ?>

</div>