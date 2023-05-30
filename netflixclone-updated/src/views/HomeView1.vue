<!-- some-inner-component.vue -->
<template>
  <div id="home" class="main-header">
    <nav-bar-component />
  </div>

  <!-- Header -->
  <div class="banner">
    <div class="banner__contents">
      <h1 class="banner__title">Money Heist</h1>
      <div class="banner__buttons">
        <button class="banner__button">
          <i class="bi bi-play-fill"></i> Play
        </button>
        <router-link :to="{ path: '/mylist' }">
          <button class="banner__button">
            <i class="bi bi-info-circle"></i> My List
          </button>
        </router-link>
      </div>
      <div class="banner__description">
        To carry out the biggest height in history, a mysterious man called The
        Professor recruits a band of eight robbers who have a single
        characteristic...
      </div>
    </div>
    <div class="banner--fadeBottom"></div>
  </div>

  <!-- Netflix Originals -->
  <div class="row">
    <h2>NETFLIX ORIGINALS</h2>
    <div class="row__posters">
      <img
        src="../assets/large-movie1.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie2.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie3.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie4.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie5.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie6.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie7.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
      <img
        src="../assets/large-movie8.jpg"
        alt=""
        class="row__poster row__posterLarge"
      />
    </div>
  </div>

  <!-- Trending Now -->
  <div class="row">
    <h2>Trending Now</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Top Rated -->
  <div class="row">
    <h2>Top Rated</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Action Movies -->
  <div class="row">
    <h2>Action Movies</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Comedy Movies -->
  <div class="row">
    <h2>Comedy Movies</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Horror Movies -->
  <div class="row">
    <h2>Horrow Movies</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Romance Movies -->
  <div class="row">
    <h2>Romance Movies</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <!-- Documentary Movies -->
  <div class="row">
    <h2>Documentary Movies</h2>
    <div class="row__posters">
      <img src="../assets/small-movie1.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie2.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie3.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie4.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie5.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie6.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie7.jpg" alt="" class="row__poster" />
      <img src="../assets/small-movie8.jpg" alt="" class="row__poster" />
    </div>
  </div>

  <footer-component />
</template>

<script>
import NavBarComponent from "../components/NavBarComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";

export default {
  name: "HomeView",
  components: {
    NavBarComponent,
    FooterComponent,
  },
};
</script>

<style scoped>
.row__poster {
  width: 100%;
  object-fit: contain;
  max-height: 100px;
  margin-right: 10px;
  transition: transform 450ms;
}

.row__posters {
  display: flex;
  overflow-y: hidden;
  overflow-x: scroll;
  padding: 20px;
}

.row__poster:hover {
  transform: scale(1.08);
}

.row__posters::-webkit-scrollbar {
  display: none;
}

.row__posterLarge {
  max-height: 250px;
}

.row__posterLarge:hover {
  transform: scale(1.09);
}

.row {
  margin-left: 20px;
}

/* Banner */
.banner {
  background-image: url("../assets/banner.jpg");
  background-size: cover;
  background-position: center center;
  object-fit: contain;
  height: 448px;
}

.banner__contents {
  margin-left: 30px;
  padding-top: 140px;
  height: 190px;
}

.banner__title {
  font-size: 3rem;
  font-weight: 800;
  padding-bottom: 0.3rem;
}

.banner__description {
  width: 45rem;
  line-height: 1.3;
  padding-top: 1rem;
  font-size: 0.8rem;
  max-width: 360px;
  height: 180px;
}

.banner__button {
  cursor: pointer;
  outline: none;
  border: none;
  font-weight: 700;
  border-radius: 0.2vw;
  margin-right: 1rem;
  padding: 0.5rem 2rem 0.5rem 2rem;
  background-color: rgba(51, 51, 51, 0.5);
  color: #fff;
}

.banner__button:hover {
  color: #000;
  background-color: #e6e6e6;
  transition: all 0.2s;
}

.banner--fadeBottom {
  margin-top: 145px;
  height: 7.4rem;
  background-image: linear-gradient(
    180deg,
    transparent,
    rgba(37, 37, 37, 0.61),
    #111
  );
}
</style>
