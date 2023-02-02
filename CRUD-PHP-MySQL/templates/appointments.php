<?php
include "../templates/Header.php";
include "../controllers/getAppointments.php";
?>

<table class="table align-middle mb-0 bg-white container mt-4">
  <thead class="bg-light">
    <tr>
    <th>ID</th>
      <th>Name/Age</th>
      <th>Contact</th>
      <th>Department/Municipality</th>
      <th>Type Quote</th>
      <th>Address</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($appointments as $dato) {
    
    ?>
    <tr>
        <th>
           <?php echo $dato->id?>
        </th>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $dato->name_pacient?></p>
            <p class="text-muted mb-0"><?php echo $dato->age?> years</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $dato->email?></p>
        <p class="text-muted mb-0"><?php echo $dato->cellphone?></p>
      </td>
      <td>
      <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $dato->department?></p>
            <p class="text-muted mb-0"><?php echo $dato->municipality?></p>
          </div>
        </div>
      </td>
      <td><?php echo $dato->type_quote?></td>
      <td><?php echo $dato->pacient_address?></td>
      <td class="text-center">
        <a type="button" class="btn btn-primary" href="../templates/EditQuote.php?id=<?php echo $dato->id?>">
          Edit quote
        </a>
        <a type="button" class="btn btn-danger mt-2" href="../advertisements/deleteItem.php?id=<?php echo $dato->id?>">
          Delete
        </a>
        
      </td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
<div class="container text-center">
<a href="../templates/index.php" class="btn btn-dark m-2 mt-5">Return home</a>
</div>
