<!--
18.09.2017 by Simon Bertschinger
This is a sample login page with modal dialoge
-->
<link type="text/css" href="..\css\modalLogin.css" rel="stylesheet" />
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

    <form class="" action="/action_page.php">

      <div class="container">
        <div>
          <label><b>Username:</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
        </div>
        <div>
          <label><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
        </div>
        <div>
          <input type="checkbox" checked="checked"> Remember me
        </div>
        <div>
          <button type="submit">Login</button>
        </div>
        <div>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </div>

    </form>
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
