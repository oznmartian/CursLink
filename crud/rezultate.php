<!DOCTYPE html>
<html lang="en">
<?php include ("./layout/head.html");?>
    <body>
<?php
include_once("connect.php");
$sql = "SELECT id, prenume, nume , email, datanastere, sex, telefon,poza FROM utilizatori";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) :?>
        <div class="container py-3">
<?php include('./layout/meniu.html');?>
            <h2>Rezultatele din baza de date sunt:</h2>    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>nr </th>
                        <th>id</th>
                        <th>Prenume</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Data nastere</th>
                        <th>Sex</th>
                        <th>Telefon</th>
                        <th>Poza</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
<?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo htmlentities($row["id"]);?></td>
                        <td><?php echo ($row["prenume"]);?></td>
                        <td><?php echo htmlentities($row["nume"]);?></td>
                        <td><?php echo htmlentities($row["email"]);?></td>
                        <td><?php echo htmlentities($row["datanastere"]);?></td>
                        <td><?php echo htmlentities($row["sex"]);?></td>
                        <td><?php echo htmlentities($row["telefon"]);?></td>
                        <td>
                            <img style="max-width:50px;" src="uploads/<?php echo $row["poza"];?>" alt="poza">
                        </td>
                        <td> 
                            <a href="delete.php?idutilizator=<?php echo $row['id'];?>"  class="btn btn-danger"> Delete</a> 
                            <a href="edit.php?idutilizator=<?php echo $row['id'];?>"  class="btn btn-primary"> Edit</a> 
                        <td>
                    </tr>
                    <?php $i+1?>
<?php endwhile;?>
                </tbody>
            </table>
<?php else:?>
    echo "0 rezultate";
<?php endif;?>
        </div>
    </body>
</html>
<?php
mysqli_close($con);
 ?>