
<?php
  $con=mysqli_connect("localhost","bus305_user1","diaoni","bus305_CIS3050");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 $result = mysqli_query($con,"SELECT * FROM skills");

echo "<table border='1'>
 <tr>
 <th>onetsoc_code</th>
 <th>element_id</th>
 <th>scale_id</th>
 <th>data_value</th>
 <th>n</th>
 <th>standard_error</th>
 <th>lower_ci_bound</th>
 <th>upper_ci_bound</th>
 <th>recommend_suppress</th>
 <th>not_relevant</th>
 <th>date_updated</th>
 <th>domain_source</th>
 
 
 </tr>";

 while($row = mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['onetsoc_code'] . "</td>";
   echo "<td>" . $row['element_id'] . "</td>";
   echo "<td>" . $row['scale_id'] . "</td>";
   echo "<td>" . $row['data_value'] . "</td>";
   echo "<td>" . $row['n'] . "</td>";
   echo "<td>" . $row['standard_error'] . "</td>";
   echo "<td>" . $row['lower_ci_bound'] . "</td>";
   echo "<td>" . $row['upper_ci_bound'] . "</td>";
   echo "<td>" . $row['recommend_suppress'] . "</td>";
   echo "<td>" . $row['not_relevant'] . "</td>";
   echo "<td>" . $row['date_updated'] . "</td>";
   echo "<td>" . $row['domain_source'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";

 mysqli_close($con);
 ?> 