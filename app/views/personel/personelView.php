<div class="container">
    <form method="post" action="/personel/userInsertFunc">
        <br><br><br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Name</label>
        <input class="form-control" type="text" name="name" placeholder="Name" value="<?php   echo $data['name']   ?>" readonly>
        <br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Surname</label>
        <input class="form-control" type="text" name="surname" placeholder="Surname" value="<?php   echo $data['surname']   ?>" readonly>
        <br><br>
        <label class="col-sm-12 col-form-label" style="text-align: center;">Type</label>
        <select class="form-control" name="typeOfWorker" id="type" disabled="true">
            <option value="1">Intern</option>
            <option value="2">Standard worker</option>
            <option value="3">Manager</option>
        </select>
        <br><br>
    </form>
</div>