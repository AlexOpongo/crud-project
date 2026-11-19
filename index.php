<?php
require 'db.php'; 
$results = $conn->query("SELECT * FROM students");
include 'header.php' 

?>
<div>
  <div class="d-flex justify-content-between align-items-center my-3">
    <h6 class="text-primary">Student list</h6>
    <a href="create.php" class="btn btn-primary">+ Add Student</a>
  </div>

  <?php 
  if(isset($_GET['msg']) && $_GET['msg'] == 'created'){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Student</strong> Added successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    ';
  };
  ?>
  
  <div class="border rounded-3 overflow-auto">
    <table class="table table-striped mb-0">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Course</th>
          <th scope="col">Created at</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        while ($row = $results->fetch_assoc()): 
        ?>
        <tr>
          <td><?= $row['id']?></td>
          <td><?= $row['full_name']?></td>
          <td><?= $row['email']?></td>
          <td><?= $row['phone']?></td>
          <td><?= $row['course']?></td>
          <td><?= date('d M, Y H:i', strtotime($row['created_at'])) ?></td>
          <td>
            <a href="" class="btn btn-warning">Edit</a>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>

        <?php 
        endwhile;
        ?>
      

      </tbody>
    </table>
  </div>

</div>


<?php include 'footer.php' ?>