<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $report_title = $_POST['report_title'];
  $report_description = $_POST['report_description'];

  // Process data (you could store it in a database, send an email, etc.)
  // For this example, we'll just print the data to the screen.
  echo "<h2>Report submitted:</h2>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Report Title:</strong> $report_title</p>";
  echo "<p><strong>Report Description:</strong> $report_description</p>";
}
?>





