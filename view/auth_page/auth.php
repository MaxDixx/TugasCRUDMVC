  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
img{
  margin-left : 100px;
}

body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background:linear-gradient(to bottom, #21b5da, #138da0, #1143ad);
}

.wrapper {
  position: relative;
  width: 400px;
  height: 500px;
  background: #DFFDFF;
  box-shadow: 0 0 50px #0ef;
  border-radius: 20px;
  padding: 40px;
  overflow: hidden;
}
.log{
  color: #000;
}

@keyframes animate {
  100% {
    filter: hue-rotate(360deg);
  }
}

.form-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: 1s ease-in-out;
}

.wrapper.active .form-wrapper.sign-in {
  transform: translateY(-460px);
}

.wrapper .form-wrapper.sign-up {
  position: absolute;
  top: 460px;
  left: 0;
}

.wrapper.active .form-wrapper.sign-up {
  transform: translateY(-450px);
}

h2 {
  font-size: 30px;
  color: #000000;
  text-align: center;
}

.input-group {
  position: relative;
  width: fit-content;
  margin: 16px 0;
  border-bottom: 2px solid #A6ECF1;
}

.input-group label {
  position: absolute;
  top: 50%;
  left: 5px;
  transform: translateY(-50%);
  font-size: 16px;
  color: #000000;
  pointer-events: none;
  transition: .5s;
}

.input-group input {
  width: 320px;
  height: 40px;
  font-size: 16px;
  color: #000000;
  padding: 0 5px;
  background-color: #A6ECF1;
  border-radius: 10px;
  border: none;
  outline: none;
}

.input-group {
  display: flex;
  flex-direction: column;
}

.input-group.success input {
  border-color: #09c372;
}

.input-group.error input {
  border-color: #ff3860;
}

.input-group.error {
  color: #ff3860;
  font-size: 10px;
  height: 40px;
}

.input-group input:focus~label,
.input-group input:valid~label {
  top: -5px;
}

.remember {
  margin: -5px 0 15px 5px;
}

.remember label {
  color: #000000;
  font-size: 14px;
}

.remember label input {
  accent-color: #0ef;
}

button {
  position: relative;
  width: 100%;
  height: 40px;
  background: #0ef;
  box-shadow: 0 0 10px #0ef;
  font-size: 16px;
  color: #000;
  font-weight: 500;
 cursor: pointer;
  border-radius: 30px;
  border: none;
  outline: none;
}

.signUp-link {
  font-size: 14px;
  text-align: center;
  margin: 15px 0;
}

.signUp-link p {
  color: #000000;
}

.signUp-link p a {
  color: blue;
  text-decoration: none;
  font-weight: 500;
}

.signUp-link p a:hover {
  text-decoration: underline;
}
  </style>
  <img src="asset/asset/image 1.png" alt="Lambang Sekolah">
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form method="POST" action="<?= urlpath('login') ?>" id="login" class="form">
        <h2 class="log">Login</h2>
        <div class="input-group">
          <input id="username" class="username" name="username" type="text" required>
          <label for="username">Username</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="password" class="password" name="passwd" type="password" required>
          <label for="password">Password</label>
          <div class="error"></div>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button class="btn-login" id="btn-login" type="submit" name="login" value="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
      <form method="POST" action="<?= urlpath('register') ?>" id="signup-form" class="form">
        <h2 class="su">Sign Up</h2>
        <div class="input-group">
          <input id="username-signup" class="username-signup" name="usernamesignup" type="text" required>
          <label for="username-signup">Username</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="nama" class="nama" name="nama" type="nama" required>
          <label for="nama">Nama</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="password-signup" class="password-signup" name="passwordsignup" type="password" required>
          <label for="password-signup">Password</label>
          <div class="error"></div>
        </div>
        <div class="input-group">
          <input id="confirm-password" class="confirm-password" name="confirmpassword" type="password" required>
          <label for="confirm-password">Confirm Password</label>
          <div class="error"></div>
        </div>
        <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div>
        <button class="btn-signup" id="btn-signup" type="submit" name='signup'>Sign Up</button>
        <div class="signUp-link">
          <p>Already have an account? <a class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>
  </div>
  <script>const signInBtnLink = document.querySelector('.signInBtn-link');
const signUpBtnLink = document.querySelector('.signUpBtn-link');
const wrapper = document.querySelector('.wrapper');
const form = document.getElementById('login-form');
const formsignup = document.getElementById('signup-form');
const username = document.getElementById('username');
const usernameSu = document.getElementById('username-signup');
const email = document.getElementById('nama');
const password = document.getElementById('passwd');
const passwordSu = document.getElementById('password-signup');
const password2 = document.getElementById('confirm-password');
const btnsu = document.querySelector('.btn-signup');
const login = document.getElementById('btn-login');
const loginForm = document.getElementById('login-form');

signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});

</script>