<template>
<div class="fixed-top">
  <div class="pt-1 pb-1 navbarBG">
    <div class="container text-light">
    <div class="row">
      <div class="col col-sm-12">
        <span>
          <i class="fas fa-location-arrow mr-1"></i>
          Adresse: <a :href="googleMapUrl" target="_blank" rel="noopener noreferrer">{{ address }}</a>
        </span>
      <br>
    <span><i class="fas fa-envelope mr-1"></i>
    E-mail: <a href="mailto:kontakt@nordiskmusculupati.dk">{{ email }}</a>
    </span>
      </div>
    </div>
  </div>
  </div>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <NuxtLink to="/" class="navbar-brand">
      <img src="~/assets/img/logo1.png" class="img-fluid" width="100" alt="logo" />
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
      Forside
    </NuxtLink>
      </li>
      <li class="nav-item">
        <NuxtLink to="/behandlinger" class="nav-link">
      Behandlinger
      </NuxtLink>
      </li>
      <li class="nav-item">
        <a href="https://system.easypractice.net/book/nordisk-musculupati?cookie_fixed=1#choose-service"
        class="nav-link" target="_blank" rel="noopener noreferrer">
        <button class="btn btn-primary">Book tid<i class="fas fa-external-link-alt ml-2"></i></button>
        </a>

      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <NuxtLink to="/priser" class="dropdown-item">
      Priser
    </NuxtLink>
    <NuxtLink to="/behandlere" class="dropdown-item">
      Behandlere
    </NuxtLink>
    <NuxtLink to="/andmeldelser" class="dropdown-item">
      Andmeldelser
    </NuxtLink>
    <NuxtLink to="/samarbejde" class="dropdown-item">
      Samarbejde
    </NuxtLink>
          <NuxtLink to="/kontakt" class="dropdown-item">
      Kontakt
    </NuxtLink>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
</template>

<script>
import { googleMapUrl, email, address } from '../../constants/constants';

export default {
	data(){
		return{
			googleMapUrl: googleMapUrl,
			email: email,
			address: address
		};
	}
};
</script>

<style lang="scss">
  .navbarBG{
    background-color: $materialDark;
  }
</style>