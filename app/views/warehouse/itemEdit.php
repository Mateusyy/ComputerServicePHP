
<div class="container">
    <form method="post" action="/warehouse/itemEditFunc">
        <br><br><br><br>
        <br><br><br><br>
        <label for="title" class="col-sm-12 col-form-label" style="text-align: center;">Name</label>
        <input class="form-control" type="text" name="name" value="<?php    echo $data['name'];    ?>">
        <br><br>
        <label for="desc" class="col-sm-12 col-form-label" style="text-align: center;">Count</label>
        <input class="form-control" type="number" name="count" value="<?php    echo $data['count'];    ?>">
        <br><br>
        <input class="col-sm-12 btn btn-outline-success" type="submit" value="Submit" style="text-align: center;">
        <input id="id" name="id" type="hidden" value="<?php    echo $data['id'];    ?>">
    </form>
</div>