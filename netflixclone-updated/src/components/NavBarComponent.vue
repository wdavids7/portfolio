<template>
  <!-- NavBar top -->
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid ms-5 me-5 mt-1 mb-1 p-2">
      <a class="navbar-brand" href="#"
        ><img
          class="navbar-logo me-3"
          src="../assets/nfLogo.png"
          alt="Netflix-logo"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <router-link :to="{ path: '/home' }">
              <a class="nav-link active text-white" aria-current="page" href="#"
                >Home</a
              >
            </router-link>
          </li>

          <li class="nav-item">
            <router-link :to="{ path: '/search' }">
            <a class="nav-link text-white" href="#">Movies</a>
            </router-link>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="#">New & Popular</a>
          </li>

          <li class="nav-item">
            <router-link :to="{ path: '/mylist' }">
              <a class="nav-link text-white" href="#">My List</a>
            </router-link>
          </li>
        </ul>
        <!-- NavBar left search panel -->
        <form
          class="d-flex searchbar-form"
          role="search"
          action=""
          method=""
        >
          <!-- Search input -->
          <input
            v-model="search"
            class="form-control"
            type="search"
            name="search"
            placeholder="Titles, people, genres"
            aria-label="Search"
          />
          <!-- Search button with icon -->
          <button class="btn btn-outline-none" for="search" type="submit">
            <i
              class="bi bi-search ms-1"
              style="font-size: 20px; color: white"
            ></i>
          </button>
        </form>

        <a
          class="nav-link text-white"
          href="#"
          role="button"
          aria-expanded="false"
          ><i class="bi bi-bell ms-3" style="font-size: 20px; color: white"></i
        ></a>
        <!-- NavBar dropdown panel -->
        <div class="btn-group">
          <button
            type="button"
            class="btn btn-dark dropdown-toggle"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../assets/profile-pic.png"
              alt="Profile-Pic"
              class="ms-3"
            />
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <button class="dropdown-item" type="button">
                Manage Profile
              </button>
            </li>
            <li>
              <button class="dropdown-item" type="button">
                Transfer Profile
              </button>
            </li>
            <li>
              <button class="dropdown-item" type="button">Account</button>
            </li>
            <li>
              <button class="dropdown-item" type="button">Help Center</button>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <router-link :to="{ path: '/' }">
                <button class="dropdown-item" type="button">
                  Sign out of Netflix
                </button>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      displayName: "",
    };
  },

  mounted() {
    if (localStorage.name) {
      this.displayName = localStorage.name;
    }
  },
};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
}
.navbar-logo {
  width: 6.25rem;
}
</style>
