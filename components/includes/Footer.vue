<template>
  <footer class="mt-5 pt-5 pb-5 footerBG">
      <div class="container">
        <div class="row">
                  <div class="col-lg-4 col-sm-12">
          <h3 class="text-light">Åbningstider</h3>
          <ul class="list-unstyled">
            <li v-for="openHours in openingHours" v-bind:key="openHours.day">
              {{ openHours.day }} {{ openHours.hours }}
            </li>
          </ul>
        </div>
                <div class="col-lg-4 col-sm-12">
          <h3 class="text-light">Kontaktinformationer</h3>
          <ul class="list-unstyled">
            <li>
              E-mail: <a href="mailto:kontakt@nordiskmusculupati.dk">{{ email }}</a>
            </li>
            <li>
              Adresse: <a :href="googleMapUrl" target="_blank" rel="noopener noreferrer">{{ address }}</a>
            </li>
            <li>
              CVR: 40682023
            </li>
            <li>
               <NuxtLink to="/cookie-og-privatlivspolitik">Cookie- og privatlivspolitik</NuxtLink>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-12">
          <h3 class="text-light">Sociale medier</h3>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.facebook.com/Nordisk-Musculupati-101909361597693"
              target="_blank"
              rel="noopener noreferrer">
              <i class="fab fa-facebook socialMedia"></i> Facebook
            </a>
            </li>
            <li>
              <a href="https://www.instagram.com/nordiskmusculupati/"
              target="_blank"
              rel="noopener noreferrer">
              <i class="fab fa-instagram socialMedia"></i> Instagram
            </a>
            </li>
            <li>
                      <a href="https://www.facebook.com/Nordisk-Musculupati-101909361597693/reviews/?ref=page_internal"
              target="_blank"
              rel="noopener noreferrer">
              <span class="bg-primary text-light">
              <span class="h5 text-light">5</span>
          <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
              </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>© 2020 Nordisk Musculupati</p>
          </div>
        </div>
      </div>
  </footer>
</template>

<script>
import { googleMapUrl, email, address, openingHours } from '../../constants/constants';

export default {
	data(){
		return{
			googleMapUrl: googleMapUrl,
			email: email,
			address: address,
			openingHours: openingHours
		};
	}
};
</script>

<style lang="scss">
.footerBG{
    background-color: $materialDark;
  }
</style>