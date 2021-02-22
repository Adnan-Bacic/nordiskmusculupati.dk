<template>
<div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ title }}</h5>
        <hr>
        <h5>{{ price }}</h5>
        <p>
          {{ body }}
        </p>
        <div v-for>

        </div>
<a href="https://system.easypractice.net/book/nordisk-musculupati?cookie_fixed=1#choose-service" target="_blank" rel="noopener noreferrer" class="card-link">
<button class="btn btn-lg btn-block btn-outline-primary">Book tid</button>
</a>
      </div>
    </div>
</template>

<script>
export default {
	props: {
		title: String,
    price: Number,
		body: String,
	}
};
</script>

<style>

</style>