  
 <table class="table table-bordered table-hover table-striped">
       <thead>
          <tr>
             <th>Miles</th>
             <th>Gallons</th>    
             <th>Date</th>
             <th>Purpose</th>          
         </tr>
       </thead>
       <tbody> 
<?php
require_once("includes/dbConnection.php");
  
  if(isset($_GET['city'])) {
        
    $city = $_GET['city'];
       // Build the query
  }
    $sql = "SELECT miles, gallons, date, purpose FROM trips WHERE destination ='". $city. "'"; 
    $st = $conn->prepare($sql); 
    $st->execute(array($city)); 
    $result = $st->fetchAll();
    
 if (count($result) > 0)
    foreach ( $result as $row ) {    
    echo "<tr>";
    echo "<td>" . $row['miles'] . "</td>";
    echo "<td>" . $row['gallons'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['purpose'] . "</td>";
    echo "</tr>";

} else {
    echo "<strong><font color='red'>***Your search didn't return any results. Check your spelling and try again***</font></strong><br/><br/>";
}

?>
</tbody></table><br>
<?php include "includes/footer.php"; ?>   <!-- footer include file -->