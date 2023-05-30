<template>
  <div class="search-page">
    <div>
      <nav-bar-component />
    </div>

    <div class="return-btn-container">
      <router-link :to="{ path: '/home' }">
        <i class="fa-solid fa-arrow-left"></i>
      </router-link>
      <h1 class="search-page-header">Search for Movies</h1>
    </div>

<div class="search-container">
    <form
      class="searchbar-form"
      role="search"
      action="/search"
      method="get"
    >
      <input
        v-model="search"
        class="form-control search"
        type="search"
        name="search"
        placeholder="Titles, people, genres"
        aria-label="Search"
      />
      <button class="btn btn-outline-none" for="searchright" type="submit">
        <i class="bi bi-search ms-1" style="font-size: 20px; color: white"></i>
      </button>
    </form>
</div>

    <section class="movie-slider-container row">
      <div class="card" v-for="movie in filteredMovies" v-bind:key="movie.id">
        <img
          class="card-img-top"
          :src="'https://api.lorem.space/image/movie?w=150&h=220&hash=8B7BCDC2' + movie.id"
        />
        <div class="card-body">
          <button
            class="card-down-btn"
            v-on:click="movie.showHide = !movie.showHide"
          >
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="card-inner-body">
            <div class="card-title">{{ movie.name }}</div>
            <div v-show="movie.showHide" class="show-start">
              <button
                class="watch-list-add-btn"
                v-on:click="addMovieToWatchList(movie)"
              >
                <i class="fa-solid fa-plus"></i>
              </button>
              <div class="card-duration-and-release-date">
                <div>{{ movie.duration }}m</div>
                <div>{{ movie.release_date }}</div>
              </div>

              <div class="rating">Rating: {{ movie.rating }} / 10</div>
              <div class="card-description">{{ movie.description }}</div>
              <h6 class="actor-heading">Cast:</h6>
              <div v-for="actor in movie.actors" :key="actor.id">
                <div class="actor-name">
                  {{ actor.first_name }} {{ actor.last_name }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div>
      <footer-component />
    </div>
  </div>
</template>

<script>
// CodeSpace API import
import axios from "axios";
import NavBarComponent from "../components/NavBarComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";

export default {
  components: {
    NavBarComponent,
    FooterComponent,
  },
  data() {
    return {
      watchList: [],
      movies: [],
      search: "",
      actors: [],
    };
  },
  computed: {
    availableMoviesList() {
      return this.movies.filter((movie) => movie.is_coming_soon == "0");
    },
    filteredMovies() {
      return this.availableMoviesList.filter((movie) =>
        this.movies.length
          ? Object.keys(this.movies[0]).some((key) =>
              ("" + movie[key]).toLowerCase().includes(this.search)
            )
          : true
      );
    },
  },
  methods: {
    addMovieToWatchList(movie) {
      if (!this.watchList) {
        return;
      }

      if (this.watchList.length >= 20) {
        this.watchListFullAlert();
        return;
      }

      if (this.watchList.some((e) => e == movie)) {
        this.duplicateMovieAlert();
        return;
      }

      if (movie.is_coming_soon == 1) {
        return;
      }

      if (this.watchList.unshift(movie)) {
        this.watchListAddSuccessAlert();
      }

      this.saveMovieToLocalStorage();

      console.log(this.watchList);
    },

    removeMovieFromWatchList(movie) {
      const remove = this.watchList.filter((i) => i != movie);

      this.watchList = remove;

      this.saveMovieToLocalStorage();
    },
    saveMovieToLocalStorage() {
      const parsed = JSON.stringify(this.watchList);
      localStorage.setItem("movies-in-watch-list", parsed);
    },
  },

  mounted() {
    if (localStorage.getItem("movies-in-watch-list")) {
      try {
        this.watchList = JSON.parse(
          localStorage.getItem("movies-in-watch-list")
        );
      } catch (e) {
        localStorage.removeItem("movies-in-watch-list");
      }
    }
    // CodeSpace API import using axios
    axios
      .get("https://project-apis.codespace.co.za/api/movies")
      .then((response) => {
        this.movies = response.data.data;
        console.warn(response);
      });
  },
};
</script>

<style scoped>
.return-btn-container {
  padding: 4% 0 0 4%;
}

.fa-arrow-left {
  font-size: 2rem;
  margin-bottom: 4%;
}

.search-page-header {
  font-size: calc(8px + 1vw);
}

.search-container {
  position: relative;
  display: inline-block;
  height: 40px;
  width: 50px;
  vertical-align: bottom;
  left: 4%;
  margin: 0.25vw 0 2vw 0;
}

.search::placeholder {
  color: #737373;
}

.search:focus {
  transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -webkit-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
}

.search {
  position: absolute;
  left: 49px;
  background: #fff;
  color: #737373;
  outline: none;
  border: none;
  padding: 0;
  width: 363px;
  height: 100%;
  z-index: 10;
}

.search:focus {
  border: 1px solid #737373;
}

.movie-slider-container {
  background-color: transparent;
  background-image: linear-gradient(
    180deg,
    hsla(0, 0%, 8%, 0) 0,
    hsla(0, 0%, 8%, 0.15) 15%,
    hsla(0, 0%, 8%, 0.35) 29%,
    hsla(0, 0%, 8%, 0.58) 44%,
    #141414 68%,
    #141414
  );
  background-position: 0 top;
  background-repeat: repeat-x;
  background-size: 100% 100%;
  bottom: 6px;
  opacity: 1;
  display: flex;
  justify-content: flex-start;
  flex-direction: row;
  flex-wrap: wrap;
  margin: 0 4.2%;
  margin-bottom: 3%;
  z-index: 3;
  position: relative;
}

.card {
  margin-top: 2%;
  background: #141414;
  border-left: 1px transparent #141414;
  border-right: 1px transparent #141414;
  border-top: none;
  border-bottom: none;
  border-radius: 2px;
  padding: 0 0.1vw;
  width: 16.6666667%;
  margin-bottom: 0;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px,
    rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px,
    rgba(0, 0, 0, 0.09) 0px 32px 16px;
}

.card:hover .card-img-top {
  transform: scale(1.08);
}

.show-start {
  z-index: 21;
  position: absolute;
  background: #141414;
  background-image: linear-gradient(
    180deg,
    hsla(0, 0%, 8%, 0) 0,
    hsla(0, 0%, 8%, 0.15) 15%,
    hsla(0, 0%, 8%, 0.35) 29%,
    hsla(0, 0%, 8%, 0.58) 44%,
    #141414 68%,
    #141414
  );
  background-position: 0 top;
  background-repeat: repeat-x;
  background-size: 100% 100%;
  opacity: 1;
  right: 0;
  left: -2px;
  margin: 0;
  margin-top: 5px;
  padding: 0.9rem;
  border-bottom-left-radius: 9px;
  border-bottom-right-radius: 9px;
  border-bottom: 2px solid #1c1b1b;
  border-left: 2px solid #1c1b1b;
  border-right: 2px solid #1c1b1b;
}

.card-img-top {
  aspect-ratio: 16 / 9;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
  cursor: pointer;
}

.card-body {
  background-color: transparent;
  background-image: linear-gradient(
    180deg,
    hsla(0, 0%, 8%, 0) 0,
    hsla(0, 0%, 8%, 0.15) 15%,
    hsla(0, 0%, 8%, 0.35) 29%,
    hsla(0, 0%, 8%, 0.58) 44%,
    #141414 68%,
    #141414
  );
  background-position: 0 top;
  background-repeat: repeat-x;
  background-size: 100% 100%;
  bottom: -1px;
  opacity: 1;
  top: auto;
  padding: 0.3vw;
  position: relative;
}

.card-down-btn {
  float: right;
  margin: 3px;
  margin-bottom: 5px;
  background-color: transparent;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 1px solid grey;
}

.card-down-btn:hover {
  border: 1px solid #fff;
  opacity: 0.75;
}

.fa-chevron-down {
  z-index: 25;
  font-size: calc(9px + 0.2vw);
  color: #fff;
}

.card-inner-body {
  width: 100%;
  z-index: 20;
  background: #141414;
  padding: 0.45vw;
}

.card-title {
  color: rgba(255, 255, 255, 0.799);
  font-size: calc(8px + 0.4vw);
  margin: 0;
  margin-bottom: 4px;
  text-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

.card-text {
  font-size: calc(8px + 0.3vw);
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  color: rgba(244, 244, 244, 0.87);
  margin-bottom: 0.35vw;
}

.rating {
  font-size: calc(8px + 0.3vw);
  color: grey;
}

.card-movie-details {
  font-size: calc(8px + 0.3vw);
  color: rgba(199, 199, 199, 0.87);
  display: flex;
  justify-content: space-between;
  margin-top: 5px;
}

.card-description {
  background: #141414;
  background-image: linear-gradient(
    180deg,
    hsla(0, 0%, 8%, 0) 0,
    hsla(0, 0%, 8%, 0.15) 15%,
    hsla(0, 0%, 8%, 0.35) 29%,
    hsla(0, 0%, 8%, 0.58) 44%,
    #141414 68%,
    #141414
  );
  background-position: 0 top;
  background-repeat: repeat-x;
  background-size: 100% 100%;
  opacity: 1;
  font-size: calc(8px + 0.39vw);
  overflow: hidden;
  color: rgb(211, 211, 211);
  transition: all 0.3s ease-out 0.1s;
  padding: 0.25vw;
  text-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}

.actor-heading {
  font-size: calc(10px + 0.3vw);
  color: rgba(239, 237, 237, 0.649);
  margin-bottom: 0;
  padding-bottom: 0;
  padding-top: 0.25vw;
  margin-top: 0.5vw;
}

.actor-name {
  font-size: calc(9px + 0.2vw);
  color: #575757;
  color: rgba(108, 108, 255, 0.881);
  padding: 0.07vw 0.25vw 0vw 0.25vw;
}

.watch-list-add-btn {
  position: relative;
  color: rgb(199, 199, 199);
  background: none;
  border: none;
  z-index: 25;
  background-color: transparent;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  border: 1px solid grey;
  padding: 0;
  margin-bottom: 7px;
}

.watch-list-add-btn:hover {
  border: 1px solid #fff;
}

.fa-plus {
  font-size: calc(10px + 0.2vw);
  text-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
  font-weight: 600;
}
.fa-plus:hover {
  opacity: 0.75;
}

/* MEDIA QUERIES */
@media screen and (min-width: 1281px) and (max-width: 1600px) {
  .fa-arrow-left {
    margin-top: 15px;
    font-size: 2rem;
  }
}

@media screen and (min-width: 841px) and (max-width: 1280px) {
  .fa-arrow-left {
    margin-top: 25px;
    font-size: 1.9rem;
  }
}

@media screen and (min-width: 481px) and (max-width: 840px) {
  .fa-arrow-left {
    margin-top: 40px;
    font-size: 1.75rem;
  }
}

@media screen and (min-width: 0) and (max-width: 480px) {
  .fa-arrow-left {
    margin-top: 50px;
    font-size: 1.5rem;
  }
}
</style>
