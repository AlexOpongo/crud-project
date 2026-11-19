<?php 
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

$sql = "INSERT INTO students(full_name, email, phone, course) VALUES ('$full_name', '$email', '$phone', '$course')";
$conn->query($sql);

header('Location: index.php?msg=created');
exit;
}

include 'header.php'
 ?>
<div class="row mt-3 justify-content-center">
  <div class="col-lg-6">
    <h5>Add new student</h5>

    <form class="border p-3" method="post" action="create.php">
      <div class="mb-3">
        <div>
          <label for="full_name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="nameHelp">
        </div>

        <div>
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>

        <div>
          <label for="phone" class="form-label">Phone</label>
          <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        </div>

        <div>
          <label for="course" class="form-label">Course</label>
          <select class="form-select" id="course" name="course" aria-label="Default select example">
            <option value="">Select Course</option>
            <option value="Computer science">Computer science</option>
            <option value="Computer engineering">Computer engineering</option>
            <option value="IT">IT</option>
          </select>
        </div>

      </div>
      <a href="index.php" class="btn btn-secondary">cancel</a>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</div>


<?php include 'footer.php' ?>