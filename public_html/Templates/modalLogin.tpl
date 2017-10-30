<!--
18.09.2017 by Simon Bertschinger
This is a sample login page with modal dialoge
-->
<!-- Button to open the modal login form -->
<button onclick="document.getElementById('modalLogin').style.display='block'">Login</button>

<!-- The Modal -->
<div id="modalLogin" class="modal">
  <span onclick="document.getElementById('modalLogin').style.display='none'"
  class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <div class="modal-content animate">
    <div class="imgcontainer">
      <img src="img/login_img.png" alt="Avatar" class="avatar">
    </div>

    <form class="container">
      <div>
        <label><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />
      </div>
      <div>
        <label><b>Password:</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required />
      </div>
      <div>
        <input type="checkbox" checked="checked" /> Remember me
      </div>
      <div>
        <button type="submit" onclick="check(this.form)">Login</button>
      </div>
      <div>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
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
  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('modalLogin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
