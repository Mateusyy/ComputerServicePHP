<div class="container">
    <form method="post" action="/personel/personelEditFunc">
        <br><br><br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="<?php   echo $data['name']   ?>">
        <br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Surname</label>
        <input class="form-control" type="text" name="surname" placeholder="Surname" value="<?php   echo $data['surname']   ?>">
        <br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Type</label>
        <select class="form-control" name="typeOfWorker" id="type">
            <?php 
            if(intval($data['type']) == 1)
                echo "<option selected value='1'>Intern</option>";
            else
                echo "<option value='1'>Intern</option>";
                
            if(intval($data['type']) == 2)
                echo "<option selected value='2'>Standard worker</option>";
            else
                echo "<option value='2'>Standard worker</option>";
                
            if(intval($data['type']) == 3)
                echo "<option selected value='3'>Manager</option>";
            else
                echo "<option value='3'>Manager</option>";
                
            ?>
        </select>
        <br><br>
        <input class="col-sm-12 btn btn-outline-success" type="submit" value="Submit" style="text-align: center;">
        <input id="id" name="id" type="hidden" value="<?php    echo $data['id'];    ?>">
    </form>
</div>