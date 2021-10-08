<?php

$host = "";
$dbName = "";
$username = "";
$password = "";

$db = mysqli_connect($host, $username, $password, $dbName);

if(mysqli_connect_errno()){
        echo "<p>connection failed</p>";
        echo mysqli_connect_errno();
        exit();
} else{
        echo "<p class='green'>Connected successfully! [ ".$host." ]</p>";
}
?>
<html>
<head>
  <title>Databse Connection Testing</title>
  <style>
          body{
                  font-family: sans-serif;
                  line-height: 1.5;
                  width: 70%;
                  max-width: 900px;
                  margin: 0 auto;
                  padding-top: 5rem;
          }
          p{
                  padding: .5rem 1rem;
                  font-size: 1.3rem;

          }
          .green{
                  color: #055160;
                  background-color: #cff4fc;
                  border: 1px solid #b6effb;
          }
          h1{
                  font-size: 1.5rem;
          }
          table{
                  width: 300px;
                  border-collapse: collapse;
          }
          table td, th{
                  border: 1px solid #d1d1d1;
                  padding: .3rem 1rem;
          }
  </style>
</head>
<body>
  <table>
      <thead>
          <tr>
              <th>ID</th>
              <th>Store Name</th>
          </tr>
      </thead>
      <tbody>
          <?php
          $query = "SELECT id, strName FROM stores LIMIT 10;";
          $res = mysqli_query($db, $query);
          echo "<h1>Here's a list of 10 stores fetched from 'thecbpmgmt'.stores</h1>";
          while($row = mysqli_fetch_assoc($res) ){
                  echo "<tr>";
                  echo "  <td>".$row['id']."</td>";
                  echo "  <td>".$row['strName']."</td>";
                  echo "</tr>";
          }?>
      </tbody>
  </table>
</body>
