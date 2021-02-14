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
@media screen and (max-width: 480px) {
    .spacer{
      margin-top: 260px;
    }
  }
</style>
