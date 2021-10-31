<template>
	
	<div class="card">
		<div class="card-header d-flex">
			<h4>Create Category</h4>
			<nuxt-link class="btn btn-info" :to="{name: 'dashboard-categoryIndex'}">Category List</nuxt-link>
		</div>
		<div class="card-body">
			<form @submit.prevent="categoryCreate">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" v-model="category.name" name="name" id="name" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea id="description" v-model="category.description" name="description" class="form-control"></textarea>
				</div>
				<button class="btn btn-sm btn-success">Create</button>
			</form>
		</div>
	</div>
	
</template>

<script>
export default {
  data() {
    return {
      category: {
        name: '',
        description: '',
      }
    }
  },
  methods: {
    async categoryCreate() {
      try {
        let data = await this.$axios.$post('/auth/category/store', this.category);
        this.category.name= '';
        this.category.description= '';
        console.log(data);
      } catch (err) {
        console.log(err)
      }
    }
  }
}
</script>

