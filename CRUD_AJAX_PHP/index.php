<?php
/* using ajax to manage contacts with jQuery load() */
require_once("includes/dbConnection.php");
include ("includes/header.php"); 

?> 
<div class="container">
  <div class="panel-group">
  <div class="panel panel-info">
    <div class="panel-body">
    <div class="form-group">    
    <form class='form'>
        <h1>Enter a Destination</h1> <br>
        <p> Enter Destination <input type='text'class="form-control" placeholder="Ex. Cincinnati, Chicago, etc." id='city' required></p>
        <p><input type="button" class="btn btn-info" value="Get Travel Data" onclick="getData()"></p>
    </form>
</div>  
<div id="result" style='height: 100px'></div>   

<script > 
    function getData(){
    var url = "getData.php";
    var city=document.getElementById('city').value;
     $("#result").load(url, "city="+city);
    }
</script> 

</div> <!-- end container class-->
</div>
 <?php include "includes/footer.php"; ?>   <!-- footer include file -->

 