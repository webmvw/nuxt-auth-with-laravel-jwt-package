<template>
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">
					<h4>Dashboard</h4>
				</div>
				<div class="card-body">
					<ul>
						<li><nuxt-link :to="{name:'dashboard-profile'}">Profile</nuxt-link></li>
						<li><nuxt-link :to="{name: 'dashboard-categoryIndex'}">Category</nuxt-link></li>
						<li><a href="#">Brand</a></li>
						<li><a href="#">Product</a></li>
						<li><a href="#" @click.prevent="logout">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<nuxt-child/>
		</div>
	</div>
</template>

<script>
export default {
	middleware: 'auth',
	methods: {
		async logout(){
			await this.$auth.logout();
		}
	}
}
</script>
