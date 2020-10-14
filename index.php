<?php include('include/header.php'); ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Welcome!</h1>
        <p class="lead text-primary ont-weight-bold"><?php echo $_SESSION['fullname']; ?></p>
        <hr class="my-4">
      <p>User Login and Register Syste with Admin Panel is an very useful application that...</p>
    	<h2><a href="todo/index.php">For your todo list go here</a></h2>
    </div>

  </div>
<?php include('include/footer.php'); ?>