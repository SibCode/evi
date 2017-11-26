<!--
18.09.2017 by Simon Bertschinger
This is a sample login page
 -->
<html>
  <head>
    <title>
      Login page
    </title>
  </head>
  <body>
    <h1>
      Simple Login Page
    </h1>
    <form name="login">
      Username<input type="text" name="userid"/>
      Password<input type="password" name="pswrd"/>
      <input type="button" onclick="check(this.form)" value="Login"/>
      <input type="reset" value="Cancel"/>
    </form>
    <script language="javascript">
      function check(form)/*function to check userid & password*/
      {
        include('../includes/connect.inc.php');
        $server = 'SERVER\DBNAME';

        //connect MSSQL
        dbc = mssql_connect($server, 'username', 'userpw');

        if ($dbc) {
          //the following code checkes whether the entered userid and password are matching an entry in the DB*/
          $query = "SELECT * FROM user WHERE username = '". mysqli_real_escape_string(form.userid.value) ."' AND pass = '". mysqli_real_escape_string(form.pswrd.value) ."'" ;
          $result = mysqli_query($dbc,$query);
          if (mysqli_num_rows($result) == 1) {
            //Pass

          } else {
            //Fail
            alert("Error Password or Username")/*displays error message*/
          }
        } else {
          alert('Error Connecting to the Database');
        }
      }
    </script>
  </body>
</html>
