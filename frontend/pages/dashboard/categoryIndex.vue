<template>
	
	<div class="card">
		<div class="card-header d-flex">
			<h4>Category List</h4>
			<nuxt-link class="btn btn-info" :to="{name: 'dashboard-categoryCreate'}">Create Category</nuxt-link>
		</div>
		<div class="card-body">
			<table class="table table-sm">
				<thead>
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="(category, i) in categories" :key="category.id">
                        <td>{{ i+1 }}</td>
                        <td>{{ category.name }}</td>
                        <td>{{ category.description }}</td>
                        <td>
							<button class="btn btn-sm btn-success">Edit</button>
							<button class="btn btn-sm btn-danger">Delete</button>
						</td>
                    </tr>
				</tbody>
			</table>
		</div>
	</div>
	
</template>


<script>
    export default {
        data(){
            return{
                categories: [],
            }
        },
        methods: {
        	async loadCategories() {
		      try {
		        await this.$axios.$get('/auth/category').then(response =>[
		        	this.categories = response.data
		        ]);
		      } catch (err) {
		        console.log(err)
		      }
		    },
        },
        mounted(){
            this.loadCategories(); 
        }
    }
</script>
