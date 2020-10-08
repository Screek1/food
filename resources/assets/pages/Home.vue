<template>
    <div class="wrapper">
        <Menu/>
    </div>
</template>

<script>
  import Menu from '@components/menu/Menu'
  export default {
    name: 'Home',
    components: { Menu },
    data() {
      return {
        name: ''
      }
    },
  }
</script>

<style scoped>

</style>
