<template>
  <div id="search" class="search">
    <!-- NavBar Component -->
    <nav-bar-component />

    <div class="header-search-container">
      <!-- router-link to homepage -->
      <router-link :to="{ path: '/home' }">
        <i class="fa-solid fa-arrow-left"></i>
      </router-link>
    </div>


    <div class="clear-myList-button d-flex justify-content-between p-5 mb-5">

      <div>
        <h1 class="search-myList-title">Search for Movies in your list</h1>
      </div>
      <div>
        <button
          @click="clearWatchList"
          class="clear-myList-button btn btn-light"
        >
          Clear my list
        </button>
      </div>
    </div>

<!-- Searchbar container -->
    <div class="search-container">
     <form
      class="d-flex searchbar-form"
      role="search"
      action="/search"
      method="get"
    >
      <!-- Search input -->
      <input
        v-model="search"
        class="form-control search"
        type="search"
        name="search"
        placeholder="Search"
        aria-label="Search"
      />
      <!-- Search button with icon -->
      <button class="btn btn-outline-none" for="search" type="submit">
        <i class="bi bi-search ms-1" style="font-size: 20px; color: white"></i>
      </button>
    </form>
    </div>

    <!-- MyList section start -->
    <section id="watchList" class="movie-slider-container row">
      <!-- Slider card items -->
      <div class="card" v-for="(movie, id) in filteredMovies" :key="id">
        <img
          class="card-img-top"
          :src="'https://api.lorem.space/image/movie?w=150&h=220' + movie.id"
        />

        <!-- Watch-list card body -->
        <!-- Movie card body -->
        <div class="card-body">
          <button class="card-show-more-btn" v-on:click="movie.SH = !movie.SH">
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="card-inner-body">
            <!-- Movie card title -->
            <div class="card-title">{{ movie.name }}</div>

            <div v-show="movie.SH" class="v-show-start">
              <!-- Btn to add movies to the watch-list -->
              <button
                data-bs-toggle="tooltip"
                data-bs-placement="top"
                title="Remove from your watch list"
                class="watch-list-add-btn"
                v-on:click="removeMovieFromWatchList(movie)"
              >
                <i class="fa-solid fa-minus"></i>
              </button>
              <!-- Movie duration and release date -->
              <div class="card-duration-and-release-date">
                <div>{{ movie.duration }}m</div>
                <div>{{ movie.release_date }}</div>
              </div>

              <div class="rating">Rating: {{ movie.rating }} / 10</div>
              <!-- Movie description -->
              <div class="card-description">{{ movie.description }}</div>
              <!-- Movie actors -->
              <h6 class="actor-heading">Cast:</h6>
              <!-- V-for to loop through the actors nested array -->
              <div v-for="actor in movie.actors" :key="actor.id">
                <!-- Actor names -->
                <div class="actor-name">
                  {{ actor.first_name }} {{ actor.last_name }}
                </div>
              </div>
            </div>
            <!-- End of v-show -->
          </div>
          <!-- end of inner body -->
        </div>
      </div>
      <!-- End of movie card -->
      <!-- End of movie slider container -->
    </section>
    <!-- MyList section end -->

    <!-- Footer Component -->
    <footer-component />
  </div>
</template>

<script>
// CodeSpace Movies API import
import axios from "axios";
// NavBar Component Import
import NavBarComponent from "../components/NavBarComponent.vue";
// Footer Component Import
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
    };
  },
  computed: {
    // Search function to filter movies in the watch list
    filteredMovies() {
      return this.watchList.filter((movie) =>
        this.watchList.length
          ? Object.keys(this.watchList[0]).some((key) =>
              ("" + movie[key]).toLowerCase().includes(this.search)
            )
          : true
      );
    },
  },
  methods: {
    // Duplicate movie in watch list toast
    duplicateMovieAlert() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function () {
        x.className = x.className.replace("show", "");
      }, 3000);
    },

    // Watch list movie limit toast
    watchListFullAlert() {
      var x = document.getElementById("snackbar2");
      x.className = "show";
      setTimeout(function () {
        x.className = x.className.replace("show", "");
      }, 3000);
    },

    // Watch list movie successfully add toast
    watchListAddSuccessAlert() {
      var x = document.getElementById("snackbar3");
      x.className = "show";
      setTimeout(function () {
        x.className = x.className.replace("show", "");
      }, 3000);
    },

    // Add movies to watch-list function
    addMovieToWatchList(movie) {
      // Ensure that the watch-list array is not empty
      if (!this.watchList) {
        return;
      }

      // Prevents more than 20 movies from being added to the watch-list array
      if (this.watchList.length >= 20) {
        this.watchListFullAlert();
        return;
      }

      // Prevents duplicate movies in the watchList
      if (this.watchList.some((e) => e == movie)) {
        this.duplicateMovieAlert();
        return;
      }

      // Prevents coming soon movies in the watchList
      if (movie.is_coming_soon == 1) {
        return;
      }

      // Adding movies to the front of the watchList
      if (this.watchList.unshift(movie)) {
        // Movie added message
        this.watchListAddSuccessAlert();
      }

      // Save to local storage function
      this.saveMovieToLocalStorage();

      console.log(this.watchList);
    },

    // Remove movies from watch-list function
    removeMovieFromWatchList(movie) {
      const remove = this.watchList.filter((i) => i != movie);

      this.watchList = remove;

      this.saveMovieToLocalStorage();
    },

    // Save movies to watch-list function
    saveMovieToLocalStorage() {
      const parsed = JSON.stringify(this.watchList);
      localStorage.setItem("movies-in-watch-list", parsed);
    },

    // Clear watch list
    clearWatchList() {
      if (localStorage.length > 0) {
        localStorage.removeItem("movies-in-watch-list");
      }
      window.location.reload();
    },
  },
  mounted() {
    // Display local storage movies in the dom
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

<style></style>
