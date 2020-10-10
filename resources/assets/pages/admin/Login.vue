<template>
    <div class="container">
        <div class="form-group p-4 mt-4">
            <label for="login" class="mt-2">E-mail:</label>
            <input type="text" id="login" name="login" class="form-control" v-model="form.email">
            <label for="login" class="mt-2">Пароль:</label>
            <input type="password" id="password" name="password" class="form-control" v-model="form.password">
            <button class="btn btn-primary mt-3" @click="login">Войти</button>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'Login',
    data() {
      return {
        form: {
          email: '',
          password: ''
        }
      }
    },
    methods: {
      login() {
        this.$api.auth.authorization(this.form).then(res => {
          this.$router.push({ name: 'admin-products' });
        })
      }
    }
  }
</script>

<style scoped>

</style>
