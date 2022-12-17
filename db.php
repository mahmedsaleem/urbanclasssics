<?php
//Database connection.
$con = MySQLi_connect(
   "sql101.epizy.com", //Server host name.
   "epiz_31861744", //Database username.
   "VOHE4jF7ZCG", //Database password.
   "epiz_31861744_urbanclassics" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>