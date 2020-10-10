<template>
    <div class="wrapper">
        <div class="container">
            <div class="buttons d-flex justify-content-around p-3">
                <input v-model="computedMenuName" type="text" class="input-group name-input" placeholder="Введите Имя">
                <button class="btn btn-primary" @click="saveMenu">Сохранить</button>
                <button class="btn btn-secondary" @click="createMenu">Поделится</button>
            </div>
            <div>
                <multiselect v-model="typeMenu"
                             :options="options"
                             placeholder="Выберете тип питания"
                             track-by="name"
                             label="name"
                ></multiselect>
            </div>
            <div class="menu">
                <div class="product mb-5 mt-5" v-for="(meal, index) in menu" :key="index">
                    <h4>{{ index | menuName }}</h4>
                    <MealBlock :menu="meal" :index="index"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import Multiselect from 'vue-multiselect'
  import MealBlock from './MealBlock'

  const copyLink = str => {
    const el = document.createElement('textarea');
    el.value = str;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
  };

  export default {
    name: 'Menu',
    components: {
      MealBlock,
      Multiselect
    },
    data() {
      return {
        type: null,
        menuName: '',
        menu: {},
        options: [
          { name: '4-х разовое питание', value: 4 },
          { name: '5-ти разовое питание', value: 5 },
        ]
      }
    },
    mounted() {
      this.$api.product.getProducts();
    },
    computed: {
      ...mapGetters({
        savedMenu: 'menu/getSavedMenu',
        savedMenuName: 'menu/getSavedMenuName',
      }),
      computedMenuName: {
        get: function () {
          return this.menuName = (this.savedMenuName) ? this.savedMenuName : '';

        },
        set: function (value) {
          return this.menuName = value;
        }
      },
      typeMenu: {
        get: function () {
          return this.options.find(option => option.value === this.type);
        },
        set: function (type) {
          this.menu = (type.value === 4)
            ? { breakfast: [], snack_after_breakfast: [], dinner: [], supper: [] }
            : { breakfast: [], snack_after_breakfast: [], dinner: [], afternoon_snack: [], supper: [] };
          if (!(_.isEmpty(this.savedMenu))) {
            this.menu.breakfast = this.savedMenu.breakfast;
            this.menu.snack_after_breakfast = this.savedMenu.snack_after_breakfast;
            this.menu.dinner = this.savedMenu.dinner;
            this.menu.supper = this.savedMenu.supper;
            if (type.value === 5) {
              this.menu.afternoon_snack = this.savedMenu.afternoon_snack ?? [];
            }
          }
          this.type = type.value;
        }
      },
    },
    methods: {
      saveMenu() {
        this.$store.dispatch('menu/saveMenu', { value: this.menu, name: this.menuName })
      },
      createMenu() {
        this.$api.menu.createMenu(this.type, this.menu, this.menuName).then(result => {
          this.$clipboard(result.data.link);
          this.$store.dispatch('menu/resetMenu');
          this.$toast.success("Ссылка на меню скопированна");
        }).catch(error => {
          this.$toast.error("Что-то пошло не так");
        })
      }
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
    .name-input {
        width: 300px;
    }

</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

