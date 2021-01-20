<template>
<div>
  <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Andmeldelser</h1>
          <hr class="my-4">
          <p>Læs her nogle andmeldelser til Nordisk Musculupati</p>
        </div>
      </div>
  </div>
  <div class="container-fluid pt-5 reviewBG">
    <div class="row">
      <div v-for="review in reviews" v-bind:key="review.id" class="col-lg-4 col-sm-12 mb-5">
      <Review
      :title="review.title"
      :body="review.body"
      :link="review.link"
      />
    </div>
    </div>
  </div>
  </div>
</template>

<script>
import { reviews } from '../constants/constants';

export default {
	data(){
		return{
			reviews: reviews
		};
	},
	head:{
		title: 'Nordisk Musculupati | Andmeldelser',
		meta: [
			{ hid: 'andmeldelser desc', name: 'description', content: 'Nordisk Musculupati | Andmeldelser' },
			//fb
			{ property: 'og:title', content: 'Nordisk Musculupati | Andmeldelser' },
			{ property: 'og:description', content: 'Nordisk Musculupati | Andmeldelser' },
			{ property: 'og:url', content: 'https://nordiskmusculupati.dk/andmeldelser' },
		]
	}
};
</script>

<style>

</style>