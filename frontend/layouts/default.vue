
<template>
  	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
		  <div class="container">
		    <nuxt-link class="navbar-brand" :to="{name: 'index'}">Nuxt Auth</nuxt-link>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    		
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <nuxt-link class="nav-link" v-if="!loggedIn" :to="{name:'login'}">Login</nuxt-link>
		        </li>
		        <li class="nav-item">
		          <nuxt-link class="nav-link" v-if="!loggedIn" :to="{name: 'register'}">Register</nuxt-link>
		        </li>
		        <li class="nav-item">
		          <nuxt-link class="nav-link" v-if="loggedIn" :to="{name: 'dashboard'}">Dashboard</nuxt-link>
		        </li>
		      </ul>
		      <form class="d-flex">
		        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-success" type="submit">Search</button>
		      </form>
		    </div>
		  </div>
		</nav>
		
		<div class="container pt-3">
			<Nuxt/>
		</div>


	</div>
</template>

<style>
	@import url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
</style>


<script>
export default {
	computed:{
		loggedIn(){
			return this.$store.state.auth.loggedIn;
		}
	}
}
</script>

