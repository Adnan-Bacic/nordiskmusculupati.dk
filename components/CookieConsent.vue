<template>
  <div class="fixed-bottom" v-if="cookieConsent === null">
      <div class="container-fluid bg-dark py-3">
          <div class="row">
              <div class="col-11">
                  <p class="text-light">Vi bruger cookies for at forbedre din oplevelse</p>
              </div>
                  <div class="col-1">
                      <p v-on:click="closePopUp" class="text-light float-right px-3 pb-3">
                          <i class="fas fa-times"></i>
                      </p>
                  </div>
                  <div class="col-12">
                  <p>
                      <NuxtLink to="/cookie-og-privatlivspolitik">
      Læs mere
    </NuxtLink>
    </p>
                  <button v-on:click="accept" class="btn btn-success">Accepter</button>
      <button v-on:click="reject" class="btn btn-outline-danger">Afvis</button>
              </div>
          </div>
      </div>
  </div>
</template>

<script>

export default {
	data(){
		return{
			cookieConsent: undefined
		};
	},
	mounted(){
		const cookieConsent = localStorage.getItem('cookie-consent');
		this.cookieConsent = cookieConsent;
        
	},
	methods:{
		accept(){
			localStorage.setItem('cookie-consent', 'true');
			location.reload();
		},
		reject(){
			localStorage.setItem('cookie-consent', 'false');
			location.reload();
		},
		closePopUp(){
			this.cookieConsent = undefined;
		}
	}
};
</script>

<style>

</style>