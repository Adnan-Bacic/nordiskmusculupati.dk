<template>
<div>
<div id="hero" class="container-fluid mb-5">
<div class="row">
  <div class="col-12">
    <p class="h1 text-light">Nordisk Musculupati</p>
    <p class="h2 text-light">Manuel behandling af muskel, led-, og nervesmerter</p>
  </div>
  <div class="col-12">
      <a href="https://nordisk-musculupati.planway.com/"
      class="text-light" target="_blank" rel="noopener noreferrer">
          <button class="btn btn-primary btn-lg">
      BOOK TID
          </button>
      </a>
        <NuxtLink to="/behandlinger">
      <button class="btn btn-outline-primary btn-lg text-light">SE BEHANDLINGER</button>
    </NuxtLink>
  </div>
</div>
</div>
  <div class="container mb-5">
    <div class="row">
      <div class="col-12">
        <h1>Hvad er Musculupati?</h1>
        <hr class="my-4">
      </div>
      <div class="col-12">
        <p>
Musculupat®uddannelsen er en 2 årig uddannelse inden for manuel behandling,
specialiseret i at forstå og løse forskellige smertetilstande i kroppen.
Ligeledes er det en beskyttet titel, som giver dig som forbruger en sikkerhed i at behandlingen er kvalificeret.
        </p>
        <p>
I Musculupatien undersøger og behandler vi årsagen til din smerte,
fordi smerten ikke nødvendigvis stammer fra, der hvor den kommer til udtryk.
        </p>
        <p>
Når du forstår årsagen til at din problematik opstår,
kan du selv være med til at opretholde en smertefri tilstand og
sørge for at din problemtik ikke bliver ved med at vende tilbage.
        </p>
        <p>
I min behandling, bruger jeg både teknikker fra fra den alternative- og etablerede behandlerverden.
De manuelle behandlingsteknikker som jeg bruger er avancerede og dybdegående massageteknikker
samt teknikker inspireret af osteopati, fysioterapi samt kiropraktik.
Du vil efter behandlingen opleve øget velvære, mere bevægelsesfrihed og mindre smerte.

        </p>
        <a href="https://nordisk-musculupati.planway.com/"
        target="_blank" rel="noopener noreferrer">
    <button class="btn btn-primary">BOOK TID</button>
    </a>
      </div>
    </div>
  </div>

<div class="container-fluid pt-5 mb-5 reviewBG" id="reviews">
  <div class="row">
    <div class="col-12 mb-5">
      <h2 class="text-center text-light">Anmeldelser</h2>
    </div>
    <div class="col-12">
  <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="container-fluid">
              <div class="row mr-md-5 ml-md-5 mr-sm-0 ml-sm-0">
                <div v-for="review in reviews1" v-bind:key="review.id" class="col-lg-4 col-sm-12 mx-auto mb-5">
      <Review
      :title="review.title"
      :body="review.body"
      :link="review.link"
      />
    </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container-fluid">
              <div class="row mr-md-5 ml-md-5 mr-sm-0 ml-sm-0">
                <div v-for="review in reviews2" v-bind:key="review.id" class="col-lg-4 col-sm-12 mx-auto mb-5">
      <Review
      :title="review.title"
      :body="review.body"
      :link="review.link"
      />
    </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container-fluid">
              <div class="row mr-md-5 ml-md-5 mr-sm-0 ml-sm-0">
                <div v-for="review in reviews3" v-bind:key="review.id" class="col-lg-4 col-sm-12 mx-auto mb-5">
      <Review
      :title="review.title"
      :body="review.body"
      :link="review.link"
      />
    </div>
              </div>
            </div>
          </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>

      <!-- If we need scrollbar -->
      <div class="swiper-scrollbar"></div>
  </div>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Samarbejde</h2>
            <hr class="my-4">
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <p>Nordisk Musculupati sørger for at holde den professionelle UFC-fighter Damir Hadzovic
              skadesfri igennem hans intense daglige træning.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
          <img src="~/assets/img/damir-hadzovic.png" class="img-fluid" alt="damir hadzovic" />
        </div>
        <div class="col-lg-12 text-center">
          <a href="https://nordisk-musculupati.planway.com/"
        target="_blank" rel="noopener noreferrer">
    <button class="btn btn-primary btn-lg">BOOK TID</button>
    </a>
        </div>
    </div>
  </div>
  </div>
</template>

<script>
import { reviews1, reviews2, reviews3 } from '../constants/constants';
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/swiper-bundle.css';

Swiper.use([ Navigation, Pagination ]);

export default {
	data(){
		return{
			reviews1: reviews1,
			reviews2: reviews2,
			reviews3: reviews3,
		};
	},
	mounted() {
		new Swiper('.swiper-container', {
			loop: true,
			pagination: {
				el: '.swiper-pagination',
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			scrollbar: {
				el: '.swiper-scrollbar',
			},
		});
	},
	head:{
		title: 'Nordisk Musculupati',
		meta: [
			{ hid: 'index desc', name: 'description',
				content: 'Nordisk Musculupati | Manuel behandling af muskel, led-, og nervesmerter' },
			//fb
			{ property: 'og:title', content: 'Nordisk Musculupati' },
			{ property: 'og:description',
				content: 'Nordisk Musculupati | Manuel behandling af muskel, led-, og nervesmerter' },
			{ property: 'og:url', content: 'https://nordiskmusculupati.dk/' },
		]
	}
};
</script>

<style lang="scss">
  #hero{
    display: flex;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('~assets/img/hero1.png');
    min-height: 1200px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    justify-content: center;
    align-items: center;
    margin-top: -50px; /* override navbar bottom margin */
  }
  .reviewBG{
    background-color: $darkBlue;
  }
  @media screen and (max-width: 480px) {
    #hero{
      margin-top: 50px;
      min-height: 360px;
    }
  }
</style>
