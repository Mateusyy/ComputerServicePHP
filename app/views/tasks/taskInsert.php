<div class="container">
    <form method="post" action="/task/taskInsertFunc">
        <br><br><br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Title</label>
        <input class="form-control" type="text" name="title" placeholder="Title of task">
        <br><br>
        <label for="desc" class="col-sm-12 col-form-label" style="text-align: center;">Description</label>
        <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Descript of task"></textarea>
        <br><br>
        <select class="form-control" name="group" id="type">
            <?php
                foreach($data as $value) 
                {
                    echo "<option value=". $value['id'] ."> ". $value['action'] ."</option>";
                }
            ?>
        </select>
        <br><br>
        <input class="col-sm-12 btn btn-outline-success" type="submit" value="Submit" style="text-align: center;">
    </form>
</div>