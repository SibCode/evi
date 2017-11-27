function check(form)/*function to check userid & password*/
{
  include('../includes/connect.inc.php');
  $server = 'localhost\evi';

  //connect MSSQL
  dbc = mssql_connect($server, 'username', 'userpw');

  if ($dbc) {
    //the following code checkes whether the entered userid and password are matching an entry in the DB*/
    $query = "SELECT * FROM users WHERE username = '". mysqli_real_escape_string(form.userid.value) ."' AND pass = '". mysqli_real_escape_string(form.pswrd.value) ."'" ;
    $result = mysqli_query($dbc,$query);
    if (mysqli_num_rows($result) == 1) {
      //Pass
      setcookie("login",form.userid.value,86400);
    } else {
      //Fail
      alert("Error Password or Username")/*displays error message*/
    }
  } else {
    alert('Error Connecting to the Database');
  }
}



/*The Script
<?php
if(!isset($_COOKIE["login"])) {
    echo "Cookie named 'login' not set";
} else {
    echo "Cookie 'login' is set!<br>";
    echo "Value is: " . $_COOKIE["login"];
}
?>*/
