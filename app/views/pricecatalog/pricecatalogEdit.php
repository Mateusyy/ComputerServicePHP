
<div class="container">
    <form method="post" action="/pricecatalog/itemEditFunc">
        <br><br><br><br>
        <br><br><br><br>
        <label for="title" class="col-sm-12 col-form-label" style="text-align: center;">Action</label>
        <input class="form-control" type="text" name="action" value="<?php    echo $data['action'];    ?>">
        <br><br>
        <label for="desc" class="col-sm-12 col-form-label" style="text-align: center;">Price</label>
        <input class="form-control" type="number" name="price" value="<?php    echo $data['price'];    ?>">
        <br><br>
        <input class="col-sm-12 btn btn-outline-success" type="submit" value="Submit" style="text-align: center;">
        <input id="id" name="id" type="hidden" value="<?php    echo $data['id'];    ?>">
    </form>
</div>