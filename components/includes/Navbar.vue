<template>
<div class="fixed-top">
  <!--info-->
  <div class="pt-1 pb-1 navbarBG headerText">
    <div class="container-fluid text-light">
    <div class="row">
      <div class="col-sm-12 col-lg my-auto">
        <span class="mr-3">
          <i class="fas fa-location-arrow mr-1"></i>
          Adresse: <a :href="googleMapUrl" target="_blank" rel="noopener noreferrer">{{ address }}</a>
        </span>
      </div>
      <div class="col-sm-12 col-lg my-auto">
    <span class="mr-3">
      <i class="fas fa-envelope mr-1"></i>
    E-mail: <a href="mailto:kontakt@nordiskmusculupati.dk">{{ email }}</a>
    </span>
      </div>
      <div class="col-sm-12 col-lg my-auto">
    <span class="mr-3">
      <i class="fas fa-phone"></i>
      Telefon: <a href="tel:61 31 00 94">{{ phone }}</a>
    </span>
      </div>
      <div class="col-sm-12 col-lg my-auto d-flex justify-content-end">
    <span class="mr-4">
        Følg os på:
        <a href="https://www.facebook.com/Nordisk-Musculupati-101909361597693"
              target="_blank"
              rel="noopener noreferrer"><i class="fab fa-facebook socialMedia"></i>
            </a>
              <a href="https://www.instagram.com/nordiskmusculupati/"
              target="_blank"
              rel="noopener noreferrer">
              <i class="fab fa-instagram socialMedia"></i>
            </a>
        </span>
      
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
      </div>
    </div>
  </div>
  </div>
  <!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <NuxtLink to="/" class="navbar-brand">
      <img src="~/assets/img/logo2.png" class="img-fluid" width="100" alt="logo" />
    </NuxtLink>
  <button class="navbar-toggler" type="button"
  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
    <!--
      data-toggle and data-target is to collapse the menu on mobile.
      since nuxt doesnt reload the page when switching page
      the navbar will always stay open untill a user manually closes it
    -->
    <ul class="navbar-nav ml-auto mr-5" data-toggle="collapse" data-target=".navbar-collapse.show">
      <li class="nav-item">
        <NuxtLink to="/" class="nav-link">
      FORSIDE
    </NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink to="/behandlinger" class="nav-link">
      BEHANDLINGER
      </NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink :to="{path: '/', hash: '#reviews'}" class="nav-link">
          UDTALELSER
        </NuxtLink>
      </li>
            <li class="nav-item">
        <NuxtLink to="/behandlere" class="nav-link">
      BEHANDLERE
    </NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink to="/priser" class="nav-link">
      PRISER
      </NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink to="/kontakt" class="nav-link">
      KONTAKT
    </NuxtLink>
      </li>
      <li class="nav-item">
        <a href="https://nordisk-musculupati.planway.com/"
        class="nav-link" target="_blank" rel="noopener noreferrer">
        <button class="btn btn-primary">BOOK TID</button>
        </a>

      </li>
    </ul>
  </div>
</nav>
</div>
</template>

<script>
import { googleMapUrl, email, address, phone } from '../../constants/constants';

export default {
	data(){
		return{
			googleMapUrl: googleMapUrl,
			email: email,
			address: address,
			phone: phone,
		};
	},

};
</script>

<style lang="scss">
  .navbarBG{
    background-color: $materialDark;
  }
  .socialMedia{
    font-size: 20px;
  }
  .headerText{
    font-size: 0.9rem;
  }
</style>