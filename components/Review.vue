<template>
  <div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ title }}</h5>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <hr>
    <p class="card-text font-italic">
      {{ body }}
    </p>
    <hr>
    <a :href="link" target="_blank" rel="noopener noreferrer" class="card-link">Link</a>
  </div>
</div>
</template>

<script>
export default {
	props: {
		title: String,
		body: String,
		link: String,
	}
};
</script>

<style>

</style>