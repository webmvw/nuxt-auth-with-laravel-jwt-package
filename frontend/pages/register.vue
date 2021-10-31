<template>
  
  <div class="col-md-6 offset-3">
    <div class="card">
      <div class="card-header">
        <h4>Register your new account</h4>
      </div>
      <div class="card-body">
        <form @submit.prevent="userRegister">
          <div class="form-group mb-3">
            <label>Username</label>
            <input class="form-control" v-model="register.name" type="text" required/>
          </div>
          <div class="form-group mb-3">
            <label>Email</label>
            <input class="form-control" v-model="register.email" type="email" required/>
          </div>
          <div class="form-group mb-3">
            <label>Password</label>
            <input class="form-control" v-model="register.password" type="password" required/>
          </div>
          <div class="form-group mb-3 d-flex justify-content-between align-item-center">
            <button class="btn btn-success" type="submit">Register</button>
            <span>Have account? <nuxt-link :to="{name: 'login'}">Login</nuxt-link></span>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      register: {
        name: '',
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async userRegister() {
      try {
        let data = await this.$axios.$post('/auth/register', this.register);
        console.log(data);
        await this.$auth.setUserToken(data.access_token);
      } catch (err) {
        console.log(err)
      }
    }
  }
}
</script>