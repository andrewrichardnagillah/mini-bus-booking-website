<?php
include("config.php");
session_start();
 $query = "SELECT * FROM searchbuses";
$data = mysqli_query($conn, $query);  
$total = mysqli_num_rows($data);

 if(!$total = 0)
 {
    while ($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['name']."</td>
        </tr>
        ";
        echo "
        <tr>
        <td>".$result['telephonenumber']."</td>
        </tr>
        ";
        echo "
        <tr>
        <td>".$result['email']."</td>
        </tr>
        ";
        echo "
        <tr>
        <td>".$result['code']."</td>
        </tr>
        ";
    }
 }
 else
 {
    echo"user has not already booked";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel='stylesheet' href='style/ticket.css'>
</head>
<body>
<table style='width:100%'>
    <tr>
        <th> <h1>SUPER METRO</h1> </th>
        <th> <h1> TICKET</h1></th>
    </tr>
    <tr>
        <th>Name :</th>
        <td></td>
    </tr>
    <tr>
        <th>Telephone Number :</th>
        <td></td>
    </tr>
    <tr>
        <th>Email :</th>
        <td></td>
    </tr>
    <tr>
       <th>Route Code :</th> 
       <td></td>
    </tr>
</table>
    
<div class="print-btn-div">
    <button type='button' class="print-btn" id='btn-print' onclick="window.print()" > PRINT TICKET</button>
    </div>
</body>
</html>