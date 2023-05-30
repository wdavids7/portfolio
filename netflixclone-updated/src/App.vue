<template>
  <router-view />
</template>

<script>
export default {
  components: {},

  data() {
    return {
      name: ''
    };
  },
};
</script>

<style>
/* #app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
    margin: 0;
    padding: 0;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    background-color: #000;
    color: #fff;
} */
*::after,
*::before {
  box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background-color: #000;
    color: #fff;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
a {
  color: #fff;
  cursor: pointer;
  text-decoration: none;
  outline: none;
}
a:hover {
  color: #fff;
}
</style>
