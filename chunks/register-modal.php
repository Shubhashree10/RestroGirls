<section class="registermodal">
	<div id="modal2" class="modal">
	    <div class="modal-content center">
	      <h4>Register Here!</h4>

	      <h5><small class="center" id="reg_error" style="color: red;"></small></h5>
	      <form>

	      	<div class="row">

	      	<!-- <div class="input-field col s12">
	          <input onkeypress="return isAlphaNumSpace(event);" id="name_reg" type="text" class="validate">
	          <label for="name_reg">Full Name</label>
	          
	        </div> -->
			<div class="input-field col s12">
    		<input onkeypress="return validateName(event);" id="name_reg" type="text" class="validate">
    		<label for="name_reg">Full Name</label>
			</div>
			<script>
    			function validateName(event) {
        
        		var keyCode = event.which ? event.which : event.keyCode;

        
        		if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || keyCode === 32) {
            		return true;
        		} else {
            
            	event.preventDefault();
            	return false;
        		}
    			}
			</script>


	        <!-- <div class="input-field col s12">
	          <input onkeypress="return isEmail(event);" id="email_reg" type="email" class="validate">
	          <label for="email_reg">Email</label>
	        </div> -->

			<div class="input-field col s12">
  <input oninput="validateEmail()" id="email_reg" type="text" class="validate">
  <label for="email_reg">Email</label>
  <span id="email_error" class="helper-text" data-error="Invalid email format"></span>
</div>

<script>
function validateEmail() {
  const emailInput = document.getElementById('email_reg');
  const emailError = document.getElementById('email_error');
  const enteredEmail = emailInput.value;

  // Regular expression for allowed email formats
  const allowedEmailFormats = /^[^@]+@(gmail\.com|yahoo\.com)$/;

  // Check if the entered email matches the allowed formats
  if (allowedEmailFormats.test(enteredEmail)) {
    // The entered email is valid
    emailInput.classList.remove('invalid');
    emailInput.classList.add('validate');
    emailError.innerHTML = ''; // Clear any previous error message
  } else {
    // The entered email is not valid
    emailInput.classList.remove('validate');
    emailInput.classList.add('invalid');
    emailError.innerHTML = 'Invalid email format';
  }
}
</script>


	    </div>

	    <div class="row">

		    <div class="input-field col s6">
	          <input id="password_reg" type="password" class="validate">
	          <label for="password_reg">Password</label>
	        </div>

	        <div class="input-field col s6">
	          <input id="con_password_reg" type="password" class="validate">
	          <label for="con_password_reg">Confirm Password</label>
	        </div>
	        
		  </div>

		  <a href="javascript:void(0)" id="submit_reg" class="waves-effect waves-light btn" style="background: #ee6e73 !important;">Register</a>
	      	
	      </form>
	    </div>
	  </div>
  </section>