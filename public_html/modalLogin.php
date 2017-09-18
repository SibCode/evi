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
 <form class="modal-content animate" action="/action_page.php">
   <div class="imgcontainer">
     <img src="img/anonymous_avatar.png" alt="Avatar" class="avatar">
   </div>

   <div class="container">
     <label><b>Username</b></label>
     <input type="text" placeholder="Enter Username" name="uname" required>

     <label><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="psw" required>

     <button type="submit">Login</button>
     <input type="checkbox" checked="checked"> Remember me
   </div>

   <div class="container" style="background-color:#f1f1f1">
     <button type="button" onclick="document.getElementById('modalLogin').style.display='none'" class="cancelbtn">Cancel</button>
     <span class="psw">Forgot <a href="#">password?</a></span>
   </div>
 </form>
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
