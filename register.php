<?php
$host = 'localhost:8889';
$db = 'contact_list';
$user = 'root';
$pass = 'root';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$first = $_POST['first'];
$last = $_POST['last'];
$number = $_POST['number'];
$address = $_POST['address'];

$sql = "SELECT * FROM contacts WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<script>
          alert('This email has already been registered.');
          window.location.href = 'contact.html';
        </script>";
} else {
  $insert = "INSERT INTO contacts (email, first, last, number, address)
             VALUES ('$email', '$first', '$last', '$number', '$address')";
  if ($conn->query($insert) === TRUE) {
    echo "<script>
            alert('Registration successful!');
            window.location.href = 'index.html';
          </script>";
  } else {
    echo "Error: " . $conn->error;
  }
}

$conn->close();
?>
