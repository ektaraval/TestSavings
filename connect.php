<?php
$DBHOST = "azuremysql.mysql.database.azure.com";
$DBUSERNAME = "";
$DBPASSWORD = "";
$DBDATABASE = "";

//Initializes MySQLi
$con = mysqli_init();

/* Connect to DB */
mysqli_real_connect($con, $DBHOST, $DBUSERNAME, $DBPASSWORD, $DBDATABASE, 3306);
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>