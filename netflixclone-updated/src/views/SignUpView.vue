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
          <!-- Netflix top right button -->
          <div class="netflix-top-right-btn">
            <router-link :to="{ path: '/signin' }">
            <button class="btn btn-default" type="button" v-on:click="signIn">
              Sign In
            </button>
            </router-link>
          </div>
        </div>
      </div>

      <!-- Signup home hero mid content -->
      <div class="netflix-hero-content container-fluid text-center">
        <div class="hero-mid-content">
          <h1 class="hero-text fw-bold text-center text-wrap">
            <span>Unlimited movies, TV</span> <span>shows, and more.</span>
          </h1>
          <p class="fs-4 fw-semibold">Watch anywhere. Cancel anytime.</p>
          <p class="fs-5 fw-normal pt-3">
            Ready to watch? Enter your email to create or restart your
            membership.
          </p>

          <!-- Netflix get started button -->
          <div class="container col-6 mx-auto">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control p-4"
                placeholder="Email address"
              />
              <button
                class="btn btn-outline-default btn-lg"
                type="button"
                v-on:click="signIn"
              >
                GET STARTED <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="signup-content" class="signup-content">
    <!-- Enjoy on your TV section -->
    <div class="content-card animation-card">
      <div class="animation-card-container">
        <div class="content-card-text">
          <h1 class="content-card-title">Enjoy on your TV.</h1>
          <h2 class="content-card-subtitle">
            Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray
            players, and more.
          </h2>
        </div>
      </div>
      <div class="content-card-img-container">
        <div class="content-card-animation-container">
          <img
            alt=""
            class="content-card-img"
            src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png"
            data-uia="content-card-img"
          />
          <div class="content-card-animation" data-uia="content-card-animation">
            <video
              class="content-card-video"
              data-uia="content-card-video"
              autoplay=""
              playsinline=""
              muted=""
              loop=""
            >
              <source
                src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v"
                type="video/mp4"
              />
            </video>
            <div class="content-card-animation-text"></div>
            <div
              class="content-card-animation-custom"
              data-uia="content-card-custom"
              aria-hidden="true"
            ></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from "axios";
export default {
  name: "testTest",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    async signIn() {
      // console.log("signin",this.email,this.password)
      let result = await axios.post("http://localhost:3000/users", {
        email: this.email,
        password: this.password,
      });

      console.log(result);
      if (result.status == 201) {
        localStorage.setItem("user-info", JSON.stringify(result.data));
        this.$router.push({ name: "SignIn" });
      }
    },
  },
  // Redirect the signed in user back to homepage
  // mounted()
  // {
  //   let user= localStorage.getItem('user-info');
  //   if(user)
  //   {
  //     this.$router.push({name:'HomeView'})
  //   }
  // }
};
</script>

<style scoped>
.netflix-hero-bg {
  width: 100%;
  height: 100vh;
  position: relative;
  background: url("../assets/netflix-hero-bg.jpg") no-repeat center center/cover;
  overflow-x: hidden;
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
}

.netflix-logo {
  position: relative;
  padding-top: 2rem;
  z-index: 2;
  width: 170px;
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
  margin-top: 10%;
  color: #fff;
}

.hero-mid-content {
  z-index: 9;
}

h1 {
  font-size: 4rem;
}

h1 span {
  display: block;
}

/*  */

.content-card {
  background: transparent;
  border-top: 8px solid #222;
  border-bottom: 8px solid #222;
  color: #fff;
  margin-bottom: 0;
  padding: 50px 5%;
  position: relative;
}

.animation-card .animation-card-container {
  align-items: center;
  display: flex;
  justify-content: space-between;
  margin: 0 auto;
  max-width: 1100px;
}

.animation-card .content-card-text {
  flex: 0 1 auto;
  height: 100%;
  padding: 0 3rem 0 0;
  width: 52%;
  z-index: 3;
}

.content-card-text {
  margin: -5% 0;
}

.content-card-title {
  font-size: 3.125rem;
  line-height: 1.1;
  margin-bottom: 0.5rem;
}

.content-card-title h1 {
  margin: 0 0 0.4em;
}

.content-card-subtitle,
.content-card-text {
  font-size: 1.625rem;
  font-weight: 400;
}

.animation-card .content-card-img-container {
  box-sizing: border-box;
  display: flex;
  flex: 0 1 auto;
  height: 100%;
  width: 48%;
}

.content-card-img {
    position: relative;
    z-index: 2;
}

.content-card-animation-container {
    margin: -10% -5% -5% 0;
}

img {
    border: 0;
    height: auto;
    max-width: 100%;
}

.animation-card .content-card-animation-container {
    overflow: hidden;
    position: relative;
}
</style>
