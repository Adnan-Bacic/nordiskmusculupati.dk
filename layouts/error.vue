<template>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <h1>Side ikke fundet</h1>
              <p>Denne side findes ikke</p>
              <NuxtLink to="/">Tilbage til forsiden</NuxtLink>
          </div>
      </div>
  </div>
</template>

<script>
export default {
	head:{
		title: 'Nordisk Musculupati | 404',
		meta: [
			{ hid: '404 desc', name: 'description', content: 'Nordisk Musculupati | 404' },
			{ name: 'robots', content: 'noindex' },
			//fb
			{ property: 'og:title', content: 'Nordisk Musculupati | 404' },
			{ property: 'og:description', content: 'Nordisk Musculupati | 404' },
			{ property: 'og:url', content: 'https://nordiskmusculupati.dk/404.html' },
		]
	}
};
</script>

<style>

</style>