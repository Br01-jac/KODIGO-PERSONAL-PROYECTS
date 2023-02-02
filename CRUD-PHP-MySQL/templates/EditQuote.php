<?php
include '../templates/Header.php';
include '../model/Connection.php';
$idQuote = $_GET['id'];

$query = $bd->prepare("SELECT * from quote where id=?");

$query->execute([$idQuote]);

$quote = $query->fetch(PDO::FETCH_OBJ);

    ?>
     <form action="../controllers/Update.php" method="POST">
<div class="container mt-5 text-center">
    <h2 class="mt-4">Update your quote</h2>
    <div class="row mt-5">
        <div class="col">
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" id="form8Example1" name="inputName" class="form-control" placeholder="Full Name" value="<?php echo $quote->name_pacient ?>" required />
            </div>
        </div>
        <div class="col">
            <!-- Email input -->
            <div class="form-outline">
                <input type="email" id="form8Example2" name="inputEmail" class="form-control" placeholder="Email address" value="<?php echo $quote->email ?>" required />
            </div>
        </div>
        <div class="col">
            <!-- Name input -->
            <div class="form-outline">
                <input type="number" id="form8Example3" name="inputAge" class="form-control" placeholder="Age" value="<?php echo $quote->age ?>" required />
            </div>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="col">
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" id="form8Example4" name="inputDepartment" class="form-control" placeholder="Department" value="<?php echo $quote->department ?>" required />
            </div>
        </div>
        <div class="col">
            <!-- Email input -->
            <div class="form-outline">
                <input type="text" id="form8Example5" name="inputMunicipality" class="form-control" placeholder="Municipality" value="<?php echo $quote->municipality ?>" required />

            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col">
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" id="form8Example1" name="inputAddress" class="form-control" placeholder="Address" value="<?php echo $quote->pacient_address ?>"  required />
            </div>
        </div>
        <div class="col">
            <!-- Email input -->
            <div class="form-outline">
                <select class="form-select" aria-label="Default select example" name="inputMedicalArea" value="<?php echo $quote->type_quote ?>">
                    <option value="Family Medicine">Family Medicine</option>
                    <option value="Internal Medicine">Internal Medicine</option>
                    <option value="Endocrinology">Endocrinology</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Obstetrics Gynecology">Obstetrics Gynecology</option>
                    <option value="Surgery">Surgery</option>
                    <option value="Psychiatry">Psychiatry</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Infectology">Infectology</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="Nephrology">Nephrology</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                    <option value="Otorhinolaryngology">Otorhinolaryngology</option>
                    <option value="Pneumology">Pneumology</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Radiology">Radiology</option>
                    <option value="Anesthesiology">Anesthesiology</option>
                    <option value="Oncology">Oncology</option>
                    <option value="Pathology">Pathology</option>
                    <option value="Urology">Urology</option>
                    <option value="Physical medicine">Physical medicine</option>
                    <option value="Intensive medicine">Intensive medicine</option>
                </select>
            </div>
        </div>
        <div class="col">
            <!-- Name input -->
            <div class="form-outline">
                <input type="text" id="form8Example3" class="form-control"name="inputCellphone" placeholder="Cellphone" value="<?php echo $quote->cellphone ?>" required/>
            </div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $idQuote?>">
    <a href="../templates/appointments.php" class="btn btn-dark m-2 mt-5">Return</a>
    <input type="submit" class="btn btn-primary m-2 mt-5" value="Update quote" required>
</div>
     </form>
