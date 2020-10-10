<template>
    <div class="container">
        <div class="title">{{ this.menuName }}</div>
        <div class="m-4" v-for="(meal, index) in menu">
            <h4>{{ index | menuName }}</h4>
            <MealBlock :show-add-new-product="false" :menu="meal" :index="index"/>
        </div>
    </div>
</template>

<script>
    import MealBlock from '@components/menu/MealBlock'
  export default {
    name: 'ClientMenu',
    components: {
      MealBlock,
    },
    data() {
      return {
        menuName: '',
        menu: []
      }
    },
    mounted () {
      this.$api.menu.getMenu(this.$route.params.key).then(result => {
        this.menuName = result.data.menu.name
        this.menu = JSON.parse(result.data.menu.value)
      });
    },
    filters: {
      menuName(value) {
        switch(value) {
          case 'breakfast':
            return 'Завтрак';
          case 'snack_after_breakfast':
            return 'Перекус';
          case 'dinner':
            return 'Обед';
          case 'afternoon_snack':
            return 'Перекус';
          case 'supper':
            return 'Ужин';
        }
      }
    }
  }
</script>

<style scoped>
    .title {
        text-align: center;
        font-size: 30px;
        font-weight: bold;
    }
</style>
