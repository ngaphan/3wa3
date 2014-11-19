<form role="form" method="POST" action="?page=adminaddarticle">
    <div class="form-group" id="formcom">
        <input type="text" placeholder="nom" name="nom" class="form-control">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="description" rows="3"></textarea>
    </div>
    <div class="form-group" id="formcom">
        <input type="number" placeholder="prix" name="prix" class="form-control">
    </div>
    <div class="form-group" id="formcom">
        <input type="file" name="image">
    </div>
    <div class="form-group" id="formcom">
        <select class="form-control">
            <option value="1">PHP</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>