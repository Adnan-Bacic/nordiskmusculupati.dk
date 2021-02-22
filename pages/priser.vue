<template>
  <div class="container">
  <div class="row">
  <div class="col-12">
    <h1>Priser</h1>
    <hr class="my-4">
  </div>
  <div class="col-12">
    <h2>Musculupati</h2>
    <ul class="list-unstyled">
      <li>120 min – 1000,-</li>
      <li>90 min – 800,-</li>
      <li>60 min – 600,-</li>
      <li>45 min – 500,-</li>
      <li>30 min – 400,-</li>
    </ul>
  </div>
  <Price
  title="Musculupati"
  price="400,-"
  body="30 min"
  />

  <div class="col-12">
    <h2>Cupping terapi</h2>
    <ul class="list-unstyled">
      <li>Cupping af 1 område, 30 min – 300,-</li>
      <li>Cupping af 2 områder, 45 min – 400,-</li>
      <li>Cupping af 3 områder, 60 min – 500,-</li>
    </ul>
  </div>
  </div>
  </div>
</template>

<script>
export default {
	head:{
		title: 'Nordisk Musculupati',
		meta: [
			{ hid: 'priser desc', name: 'description', content: 'Nordisk Musculupati | Priser' },
			//fb
			{ property: 'og:title', content: 'Nordisk Musculupati | Priser' },
			{ property: 'og:description', content: 'Nordisk Musculupati | Priser' },
			{ property: 'og:url', content: 'https://nordiskmusculupati.dk/priser' },
		]
	}
};
</script>

<style>

</style>