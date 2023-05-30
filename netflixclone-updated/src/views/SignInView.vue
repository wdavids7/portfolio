<template>
  <section id="signup-home" class="signup-header">
    <!-- Signup home hero bg -->
    <div class="netflix-hero-bg container-fluid">
      <!-- Netflix top left logo -->
      <div class="netflix-hero-top container-fluid">
        <div class="netflix-top-left-logo ms-5">
          <img
            class="netflix-logo"
            src="../assets/nfLogo.png"
            alt="Netflix-Logo"
          />
        </div>
      </div>

      <!-- Signup home hero mid content -->

      <div class="login-body">
        <!-- Sign-in/ Sign-up form -->
        <form class="mt-4">
          <h2 class="pt-3 pb-3">Sign In</h2>
          <!-- Email or phone input -->
          <div class="mb-3">
            <input
              type="email"
              class="form-control nf-email-field"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="Email or phone number"
              v-model="email"
            />
          </div>
          <!-- Password input -->
          <div class="mb-3">
            <input
              type="password"
              class="form-control nf-pwd-field"
              id="exampleInputPassword1"
              placeholder="Password"
              autocomplete="off"
              v-model="password"
            />
          </div>
          <div class="d-grid gap-2 col-12 mx-auto">
            <router-link :to="{ path: '/home' }">
            <button class="btn btn-default" type="button" v-on:click="signIn">
                Sign In
            </button>
          </router-link>
          </div>
          <!-- Remember me and need help checkbox option -->
          <div class="remember-me-option mb-3 form-check">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
              checked
            />
            <label class="form-check-label" for="exampleCheck1"
              >Remember me</label
            >
            <a class="float-end text-white text-decoration-none" href="#"
              >Need help?</a
            >
          </div>
          <!-- New to Netflix signup -->
          
          <div class="new-to-netflix pt-5">
            <p>
              New to Netflix? <router-link :to="{ path: '/' }"><a href="#" v-on:click="signUp">Sign up now</a>.</router-link>
            </p>
          </div>
          <!-- Google reCAPTCHA -->
          <div class="captcha pb-5">
            <p class="lh-2">
              This page is protected by Google reCAPTCHA to ensure you're not a
              bot.
              <a href="#">Learn more</a>.
            </p>
          </div>
        </form>
      </div>
    </div>
  </section>
</template>

<script></script>

<style scoped>
body {
  margin: 0;
  padding: 0;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.netflix-hero-bg {
  width: 100%;
  height: 100vh;
  position: relative;
  background: url("../assets/netflix-hero-bg.jpg") no-repeat center center/cover;
  /* overflow-x: hidden; */
}

.netflix-hero-bg::after {
  content: "";
  position: absolute;
  inset: 0;
  z-index: 1;
  background-image: linear-gradient(
    to top,
    rgba(0, 0, 0, 0.8) 0,
    rgba(0, 0, 0, 0) 60%,
    rgba(0, 0, 0, 0.8) 100%
  );
  /* background-repeat: no-repeat;
  background-size: cover;
  min-height: 100%; */
}

.netflix-logo {
  position: relative;
  padding-top: 2rem;
  z-index: 2;
  width: 150px;
}

.netflix-top-right-btn {
  position: relative;
  float: right;
  padding-top: 2rem;
  margin-right: 3.75rem;
  z-index: 2;
}

.btn-default,
.btn-outline-default {
  background-color: #e50914;
  color: #fff;
  border-color: none;
}

.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default,
.btn-outline-default:hover,
.btn-outline-default:focus,
.btn-outline-default:active,
.btn-outline-default.active,
.open .dropdown-toggle.btn-outline-default {
  background-color: #e50914;
  color: #fff;
  border-color: none;
}

.netflix-hero-content {
  position: absolute;
  display: flex;
  flex-direction: column;
  /* margin-top: 10%; */
  color: #fff;
}

.login-body {
  z-index: 9;
  color: #333;
  margin: 0 auto;
  padding: 0 5%;
}

.nf-email-field,
.nf-pwd-field {
  background: #333;
  border: none;
  padding: 10px;
}

h1 {
  font-size: 4rem;
}

h1 span {
  display: block;
}

form {
  color: #fff;
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 0.3rem;
  width: 435px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  padding: 60px;
  z-index: 9;
  padding-bottom: 50px;
}

.btn-default {
  background-color: #e50914;
  color: #fff;
  border-color: none;
}

.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  background-color: #e50914;
  color: #fff;
  border-color: none;
}

.remember-me-option {
  font-size: 0.85rem;
  padding-top: 5px;
}

.new-to-netflix p {
  color: #737373;
}

.new-to-netflix p a {
  color: #fff;
  text-decoration: none;
}

.new-to-netflix p a:hover {
  text-decoration: underline;
}

.captcha {
  font-size: 0.8rem;
  color: #8c8c8c;
  margin-top: 0.5rem;
  text-align: left;
  padding-bottom: 95px;
}

.captcha a {
  color: #0071eb;
  text-decoration: none;
}

.captcha a:hover {
  text-decoration: underline;
}

@media screen and (max-width: 740px) {
}

@media screen and (max-width: 500px) {
}

@media screen and (max-width: 375px) {
}
</style>
