<template>
  
  <div class="col-md-6 offset-3">
    <div class="card">
      <div class="card-header">
        <h4>Start your new Session</h4>
      </div>
      <div class="card-body">
        <form @submit.prevent="userLogin">
          <div class="form-group mb-3">
            <label>Email</label>
            <input class="form-control" type="email" v-model="login.email" required />
          </div>
          <div class="form-group mb-3">
            <label>Password</label>
            <input class="form-control" type="password" v-model="login.password" required/>
          </div>
          <div class="form-group mb-3 d-flex justify-content-between align-item-center">
            <button class="btn btn-success" type="submit">Login</button>
            <span>Don't have account? <nuxt-link :to="{name: 'register'}">Sign up</nuxt-link></span>
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
      login: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    async userLogin() {
      try {
        let response = await this.$auth.loginWith('local', { data: this.login })
        console.log(response)
      } catch (err) {
        console.log(err)
      }
    }
  }
}
</script>