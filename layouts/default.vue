<template>
  <div>
    <Navbar />
    <div class="spacer"></div>
    <Nuxt />
    <Footer />
  </div>
</template>

<script>
export default {
  
};
</script>

<style lang="scss">
.spacer{
  //push content down since navbar is fixed
  margin-top: 200px;
}
</style>
