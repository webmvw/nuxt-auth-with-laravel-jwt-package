<template>
	<div class="row">
		<div class="col-md-10 offset-1">
			<div class="card">
				<div class="card-header">
					<h4>Welcome to our Website</h4>
				</div>
				<div class="card-body">
					<h5 v-if="loggedIn">Welcome, {{user.name}}</h5>
					<div class="mb-4">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="text-center">
						<nuxt-link v-if="!loggedIn" class="btn btn-sm btn-success" :to="{name:'login'}">Got to Dashboard</nuxt-link>
						<nuxt-link v-if="!loggedIn" class="btn btn-sm btn-info" :to="{name:'register'}">Sign Up</nuxt-link>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	computed:{
		loggedIn(){
			return this.$store.state.auth.loggedIn;
		},
		user(){
			return this.$store.state.auth.user;
		}
	}
}
</script>
