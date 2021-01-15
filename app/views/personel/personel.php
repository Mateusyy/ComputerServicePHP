
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header clearfix">
                    <h2 class="pull-left">Personel Details</h2>
                    <a href="/personel/userInsert" class="btn btn-success pull-right">Add New Person</a>
                </div>
                <?php    
                    echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th width='20px'>#</th>";
                                echo "<th width='100px'>Photo</th>";
                                echo "<th>Name</th>";
                                echo "<th>Surname</th>";
                                echo "<th>Type</th>";
                                echo "<th>Action</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        foreach ($data as &$row) 
                        {
                            echo "<tr>";
                                echo "<td style='padding-top: 45px;'>" . $row['id'] . "</td>";
                                echo "<td>" . "<img src='https://picsum.photos/100/100'/> " . "</td>";
                                echo "<td style='padding-top: 45px;'>" . $row['name'] . "</td>";
                                echo "<td style='padding-top: 45px;'>" . $row['surname'] . "</td>";
                                switch (intval($row['type']))
                                {
                                    case 1:
                                        echo "<td style='padding-top: 45px;'>" . "Intern" . "</td>";
                                        break;
                                    case 2:
                                        echo "<td style='padding-top: 45px;'>" . "Standard worker" . "</td>";
                                        break;
                                    case 3:
                                        echo "<td style='padding-top: 45px;'>" . "Manager" . "</td>";
                                        break;
                                }
                                echo "<td style='padding-top: 45px;'>";
                                    echo "<a href='/personel/personelShow?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                    echo "<a href='/personel/personelEdit?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                    echo "<a href='/personel/personelDelete?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";                            
                    echo "</table>";
                ?>
            </div>
        </div>        
    </div>
</div>