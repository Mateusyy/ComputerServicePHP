
<div class="container">
    <form method="post" action="/task/taskEditFunc">
        <br><br><br><br>
        <br><br><br><br>
        <input id="id" name="id" type="hidden" value="<?php    echo $data['id'];    ?>">
        <label for="title" class="col-sm-12 col-form-label" style="text-align: center;">Title</label>
        <input class="form-control" type="text" name="title" value="<?php    echo $data['title'];    ?>">
        <br><br>
        <label for="desc" class="col-sm-12 col-form-label" style="text-align: center;">Description</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"><?php    echo $data['description'];    ?></textarea>
        <br><br>
        <input class="col-sm-12 btn btn-outline-success" type="submit" value="Submit" style="text-align: center;">
    </form>
</div>