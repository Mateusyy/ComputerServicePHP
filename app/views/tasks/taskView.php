<div class="container">
    <br><br><br><br>
    <label for="staticEmail" class="col-sm-12 col-form-label" style="text-align: center;">Title</label>
    <input class="form-control" type="text" value="<?php    echo $data['title'];    ?>" readonly>
    <br><br>
    <label for="exampleFormControlTextarea1" class="col-sm-12 col-form-label" style="text-align: center;">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly><?php    echo $data['description'];    ?></textarea>
</div>