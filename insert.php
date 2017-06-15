

<?php
 $con=mysqli_connect("localhost","bus305_user1","diaoni","bus305_CIS3050");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 $sql="INSERT INTO Skills (onetsoc_code, element_id, scale_id, data_value, n, standard_error, lower_ci_bound, upper_ci_bound, recommend_suppress, not_relevant, date_updated, domain_source)
 VALUES
 ('11-1011.00', '2.A.1.a', 'IM', 4.12, 8, 0.13, 3.88, 4.37, 'N', NULL, '2014-07-01', 'Analyst')";

 if (!mysqli_query($con,$sql))
   {
   die('Error: ' . mysqli_error($con));
   }
 echo "1 record added";

 mysqli_close($con);
 ?> 
