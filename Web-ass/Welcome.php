<?php require 'header.php'?>
<?php
include("developers.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</li>
            <li class="nav-item">
             <a class="nav-item"><a href="all equipments.php">All equipments</a>
            </li>
<style>
        table {
            width:100%;
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: rgba(128,128,128,1);
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
      
    </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>

<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Acc</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>nrc</th>
         <th>dob</th>
         <th>Country</th>
         <th>Province</th>
         <th>Town</th>
         <th>Street</th>
         <th>Sex</th>
         <th>Client </th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['FirstName']??''; ?></td>
      <td><?php echo $data['LastName']??''; ?></td>
      <td><?php echo $data['nrc']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['Country']??''; ?></td>
      <td><?php echo $data['Province']??''; ?></td>
      <td><?php echo $data['Town']??''; ?></td>
      <td><?php echo $data['Street']??''; ?></td>
      <td><?php echo $data['sex']??''; ?></td>
      <td><?php echo $data['Client']??''; ?></td> 
    
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
<?php require 'footer.php'?>