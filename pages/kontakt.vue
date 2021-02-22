<template>
  <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Kontakt</h1>
          <hr class="my-4">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Sådan kan du komme i kontakt med klinikken:</p>
          <p>E-mail: <a href="mailto:kontakt@nordiskmusculupati.dk">{{ email }}</a></p>
          <p>Adresse: <a :href="googleMapUrl" target="_blank" rel="noopener noreferrer">{{ address }}</a>
          <br>
          Klinikken ligger inde i SATS
          </p>
          <p>Du er altid velkommen til at kontakte klinikken for yderligere spørgsmål.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p><span class="text-danger">*</span> = Felt skal udfyldes</p>

          <form v-on:submit.prevent="formSubmit" class="needs-validation" novalidate>
<div class="form-row">
    <div class="form-group col-lg-6">
    <label for="name">Navn</label><span class="text-danger">*</span>
    <input v-model="formName" type="text" class="form-control" id="name" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group col-lg-6">
    <label for="email">E-mail</label><span class="text-danger">*</span>
    <input v-model="formEmail" type="email" class="form-control" id="email" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
</div>
  <div class="form-group">
    <label for="phone">Telefon</label><span class="text-danger">*</span>
    <input v-model="formNumber" type="number" class="form-control" id="phone" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group">
    <label for="subject">Emne</label><span class="text-danger">*</span>
    <input v-model="formSubject" type="text" class="form-control" id="subject" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group">
    <label for="message">Besked til klinikken</label><span class="text-danger">*</span>
    <textarea v-model="formMessage" type="text" class="form-control" id="message" required />
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <button type="submit" class="btn btn-outline-primary">SEND</button>
</form>
<div v-if="error" class="text-danger font-weight-bold">
  {{ error }}
</div>
        </div>
      </div>
  </div>
</template>

<script>
import { googleMapUrl, email, address, openingHours } from '../constants/constants';

export default {
	data(){
		return{
			error: '',
			formName: '',
			formEmail: '',
			formNumber: '',
			formSubject: '',
			formMessage: '',
			succesMessage: 'Fint',
			invalidMessage: 'Udfyld venligst dette felt',
			googleMapUrl: googleMapUrl,
			email: email,
			address: address,
			openingHours: openingHours,
		};
	},
	head:{
		title: 'Nordisk Musculupati',
		meta: [
			{ hid: 'kontakt desc', name: 'description', content: 'Nordisk Musculupati | Kontakt' },
			//fb
			{ property: 'og:title', content: 'Nordisk Musculupati | Kontakt' },
			{ property: 'og:description', content: 'Nordisk Musculupati | Kontakt' },
			{ property: 'og:url', content: 'https://nordiskmusculupati.dk/kontakt' },
		]
	},
	methods:{
		//TODO: doesnt work when you first visit the page. only after refresh
		formSubmit(){
			this.error = 'Midlertidigt ude a drift. Du kan stadigvæk skrive til direkte til vores E-mail: kontakt@nordiskmusculupati.dk';
			if(this.formName && this.formEmail && this.formNumber && this.formSubject && this.formMessage){
				console.log(this.formName, this.formEmail, this.formNumber, this.formSubject, this.formMessage);
			} else {
				console.log('not filled out');
			}
		}
	},
	/*
  https://stackoverflow.com/questions/50213901/reload-page-in-vue-just-once-in-mounted
  form only works after reload. quick workaround.
  */
	mounted(){
		if(localStorage.getItem('reload')){
			localStorage.removeItem('reload');
		} else {
			localStorage.setItem('reload', '1');
			location.reload();
		}
	}
};
</script>

<style>

</style>