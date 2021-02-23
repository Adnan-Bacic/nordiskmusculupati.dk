<template>
  <div class="container">
  <div class="row">
  <div class="col-12">
    <h1>Priser</h1>
    <hr class="my-4">
  </div>

<div class="col-lg-6 mb-5">
  <div class="card text-center">
      <div class="card-body">
        <h2 class="card-title">Musculupati</h2>
        <hr>
  <div v-for="p in pricesMusculupati" :key="p.time">

           <p>{{p.time}} / {{ p.price }}</p>
        <hr>

      </div>
      <a href="https://system.easypractice.net/book/nordisk-musculupati?cookie_fixed=1#choose-service" target="_blank" rel="noopener noreferrer" class="card-link">
<button class="btn btn-lg btn-block btn-outline-primary">Book tid</button>
</a>
    </div>
  </div>
</div>

<div class="col-lg-6">
  <div class="card text-center">
      <div class="card-body">
        <h2 class="card-title">Cupping terapi</h2>
        <hr>
  <div v-for="p in pricesCupping" :key="p.time">

           <p>{{p.time}} / {{ p.price }}</p>
        <hr>

      </div>
      <a href="https://system.easypractice.net/book/nordisk-musculupati?cookie_fixed=1#choose-service" target="_blank" rel="noopener noreferrer" class="card-link">
<button class="btn btn-lg btn-block btn-outline-primary">Book tid</button>
</a>
    </div>
  </div>
</div>
  </div>
  </div>
</template>

<script>
import { pricesMusculupati, pricesCupping } from '../constants/constants';

export default {
	data(){
		return{
			pricesMusculupati: pricesMusculupati,
			pricesCupping: pricesCupping
		};
	},
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