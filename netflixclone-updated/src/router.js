import { createRouter, createWebHistory } from "vue-router";
import SignUpView from "./views/SignUpView.vue";
import SignInView from "./views/SignInView.vue";
import HomeView from "./views/HomeView.vue";
import MyListView from "./views/MyListView.vue";
import FilterView from "./views/FilterView.vue";

const routes = [
  {
    name: "SignUp",
    component: SignUpView,
    path: "/",
  },
  {
    name: "SignIn",
    component: SignInView,
    path: "/signin",
  },
  {
    name: "Home",
    component: HomeView,
    path: "/home",
  },
  {
    name: "MyList",
    component: MyListView,
    path: "/mylist",
  },
  {
    name: "Search",
    component: FilterView,
    path: "/search",
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
