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

          <form method="post" class="needs-validation" action="https://nordiskmusculupati.dk/mail.php" novalidate>
<div class="form-row">
    <div class="form-group col-lg-6">
    <label for="name">Navn</label><span class="text-danger">*</span>
    <input v-model="formName" type="text" class="form-control" id="name" name="name" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group col-lg-6">
    <label for="email">E-mail</label><span class="text-danger">*</span>
    <input v-model="formEmail" type="email" class="form-control" name="email" id="email" required>
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
    <input v-model="formNumber" type="tel" class="form-control" name="phone" id="phone" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group">
    <label for="subject">Emne</label><span class="text-danger">*</span>
    <input v-model="formSubject" type="text" class="form-control" name="subject" id="subject" required>
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <div class="form-group">
    <label for="message">Besked til klinikken</label><span class="text-danger">*</span>
    <textarea v-model="formMessage" type="text" class="form-control" name="message" id="message" required />
    <div class="valid-feedback">
        {{ succesMessage }}
      </div>
      <div class="invalid-feedback">
          {{ invalidMessage }}
        </div>
  </div>
  <button type="submit" name="submit" class="btn btn-outline-primary">SEND</button>
</form>
<div v-if="this.sent === '1'">
  <p class="text-success font-weight-bold">Vi har modtaget din email</p>
</div>
<div v-if="this.sent === '0'">
    <p class="text-danger font-weight-bold">Mail kunne ikke sendes</p>
</div>
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
      sent: undefined,
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
  mounted(){
    const sent = localStorage.getItem('mailSent');
      this.sent = sent;

      //we set the sent value to the state so it gets rendered, then remove it so its gone when users refresh
      localStorage.removeItem('mailSent')
  },
	
};
</script>

<style>

</style>