<?php
include_once("connect.php");

$idutilizator = $_GET['idutilizator'];

echo $sql = "SELECT * FROM `utilizatori` WHERE id =".$idutilizator;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($con);


echo "<pre>";
var_dump($row);
    ?>

      
<!DOCTYPE html>
<html lang="en">

<?php include ("./layout/head.html");?>

<body>

<?php include ("./layout/meniu.html");?>
  <div class="container-md w-50 p-3">
    <!-- Content here -->
    <h1> Formular inregistrare</h1>
    <form method="post" action="http://localhost/cgaplicatie/crud/post.php"  enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
        <input type="hidden"name=idutilizator value="<?php echo $row[id];?>
      <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Prenume</label>
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
        <input name="prenume" type="text" class="form-control" id="validationCustom01" value="<?php echo $row['prenume']?>" required>
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Campul este obligatoriu!
        </div>
        </div>
      </div>
      <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Nume</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
          <input name="nume" type="text" class="form-control" id="validationCustom02" value="<?php echo $row['nume']?>"required>
          <div class="valid-feedback">
            Camp completat corect.
          </div>
          <div class="invalid-feedback">
            Campul este obligatoriu!
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom03" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="validationCustom03" value="<?php echo $row['email']?>"required>
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Adresa de mail este in format invalid!
        </div>
      </div>
      
      <div class="col-md-12">
        <label for="validationCustom05" class="form-label">Data nastere</label>

        <input name="datanastere" type="date" class="form-control" id="validationCustom05" value="<?php echo $row['datanastere']?>"required>
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Campul este obligatoriu!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom06" class="form-label">Sex</label>
        <select name="sex" class="form-select" id="validationCustom06" required>
          <option selected value="">Selecteaza...</option>
          <option value="m"<?php if($row['sex']=='m'):?> selected <?php endif;?>>M</option>
          <option value="f"<?php if($row['sex']=='m'):?> selected <?php endif;?>>F</option>
          <option value="n"<?php if($row['sex']=='m'):?> selected <?php endif;?>>N</option>
        </select>
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Campul este obligatoriu!
        </div>
      </div>
      <div class="col-md-12">
        <label for="validationCustom07" class="form-label">Telefon</label>
        <input name="telefon" type="tel" class="form-control" id="validationCustom07" value="<?php echo $row['telefon']?>"required>
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Campul este obligatoriu!
        </div>
      </div>

      <div class="col-md-12">
        <label for="formFile" class="form-label">Poza</label>
        <input name="poza" class="form-control" type="file" id="formFile" <?php echo $row  ['nume']?>required> 
        <div class="valid-feedback">
          Camp completat corect.
        </div>
        <div class="invalid-feedback">
          Campul este obligatoriu!
        </div>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

var password = document.getElementById("parola")
var confirm_password = document.getElementById("parola2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Parolele nu coincid!!");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete