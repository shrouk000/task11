<?php

include('./dpconn.php');
$stmt=$conn->prepare("SELECT user_name,phone_number,email From users");
$stmt->execute ();
$data= $stmt->fetchAll();

foreach($data as $k){echo $k ['user_name']."</br>" . $k['phone_number']."<br>".$k['email']."<br>";};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>user_name</th>
        <th>phone_number</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach($data as $k)
      {echo"<tr>
        <td>{$k ['user_name']}</td>
        <td>{$k['phone_number']}</td>
        <td>{$k['email']}</td>
      </tr>";
      }
?>
  
      
    </tbody>
  </table>
</div>

</body>
</html>