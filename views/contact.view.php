<?php

require base_path('/views/partials/head.php');

?>

<div class="container">
  <div class="forms">
    <div class="form login">
      <span class="title">LogIn</span>

      <form action="#">
        <div class="input-field">
          <input type="email" name="email" placeholder="Enter your Email">
          <i class="fa-solid fa-envelope icon"></i>
        </div>

        <div class="input-field">
          <input type="password" name="email" placeholder="Enter your password" class="password">
          <i class="fa-solid fa-lock icon"></i>
          <i class="fa-regular fa-eye-slash showHide"></i>
        </div>

        <div class="checkbox-text">
          <div class="checkbox-content">
            <input type="checkbox" name="remember" id="logCheck">
            <label for="logCheck" class="text">Remember me</label>
          </div>

          <a href="#" class="text">Forgot Password?</a>
        </div>

        <div class="input-field button">
          <input type="button" value="Login Now">
        </div>
      </form>

      <div class="login-signup">
        <span class="text">Not a member?</span>
        <a href="#" class="text signup-link">Create an Account.</a>
      </div>
    </div>

    <!-- Registration Form -->
    <div class="form signup">
      <span class="title">Register</span>

      <form action="#" class="signUp">
        <div class="input-field">
          <input type="name" name="name" placeholder="Enter your Name" id="user-input">
          <i class="fa-regular fa-user"></i>
          <i class="fa-regular fa-circle-check circle"></i>
          <i class="fa-regular fa-circle-exclamation exclaim"></i>

          <small class="error">This is the error</small>
        </div>

        <div class="input-field">
          <input type="email" name="email" placeholder="Enter your Email" id="email-input">
          <i class="fa-solid fa-envelope icon"></i>
          <i class="fa-regular fa-circle-check circle"></i>
          <i class="fa-regular fa-circle-exclamation exclaim"></i>

          <small class="error">This is the error</small>
        </div>

        <div class="input-field">
          <input type="password" name="email" placeholder="Enter your password" class="password" id="pass-input">
          <i class="fa-solid fa-lock icon"></i>
          <i class="fa-regular fa-circle-check circle"></i>
          <i class="fa-regular fa-circle-exclamation exclaim"></i>

          <small class="error">This is the error</small>
        </div>

        <div class="input-field">
          <input type="password" name="email" placeholder="Confirm password" class="password" id="confirm-input">
          <i class="fa-solid fa-lock icon"></i>
          <i class="fa-regular fa-eye-slash showHide"></i>
          <i class="fa-regular fa-circle-check circle"></i>
          <i class="fa-regular fa-circle-exclamation exclaim"></i>

          <small class="error">This is the error</small>
        </div>

        <div class="checkbox-text">
          <div class="checkbox-content">
            <input type="checkbox" name="remember" id="logCheck">
            <label for="logCheck" class="text">Remember me</label>
          </div>

          <a href="#" class="text">Forgot Password?</a>
        </div>

        <div class="input-field button">
          <button>
            Register now
          </button>
        </div>
      </form>

      <div class="login-signup">
        <span class="text">Have an Account?</span>
        <a href="#" class="text login-link">Log in Now.</a>
      </div>
    </div>
  </div>
</div>

<?php

require base_path('/views/partials/footer.php');

?>