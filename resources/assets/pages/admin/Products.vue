<template>
    <div class="wrapper">
        <button @click="logout">Logout</button>
    </div>
</template>

<script>
  export default {
    name: 'Products',
    methods: {
      logout() {
        this.$api.admin.logout().then(result => {
          this.$router.push({ name: 'admin-login' })
        })
      }
    }
  }
</script>

<style scoped>

</style>
