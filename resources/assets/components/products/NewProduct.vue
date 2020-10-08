<template>
    <div class="wrapper">
        <div class="content-new-product p-3 border m-4">
            <div class="text-center">
                <span>Добавить новый продукт</span>
            </div>
            <label for="name">Название продукта</label>
            <input type="text" class="input-group mb-2" id="name" v-model="product.name">
            <div class="row mb-2">
                <div class="col-3">
                    <label for="calories">Калорий в 100г</label>
                    <input type="number" step="0.1" class="input-group" id="calories" v-model="product.calories">
                </div>
                <div class="col-3">
                    <label for="squirrels">Белков в 100г</label>
                    <input type="number" step="0.1" class="input-group" id="squirrels" v-model="product.squirrels">
                </div>
                <div class="col-3">
                    <label for="fats">Жиров в 100г</label>
                    <input type="number" step="0.1" class="input-group" id="fats" v-model="product.fats">
                </div>
                <div class="col-3">
                    <label for="carbohydrates">Углеводов в 100г</label>
                    <input type="number" step="0.1" class="input-group" id="carbohydrates" v-model="product.carbohydrates">
                </div>
            </div>
            <div class="mb-2">
                <label for="portion">Порция в граммах</label>
                <input type="number" class="input-group" id="portion" v-model="product.portion">
            </div>
            <div class="mb-2">
                <multiselect v-model="product.meal"
                             :options="mealOptions"
                             :multiple="true"
                             :close-on-select="false"
                             placeholder="Выберете для чего подходит продукт"
                             label="name"
                             track-by="name"
                />
            </div>
            <div class="d-flex justify-content-end">
                <input type="button" class="btn btn-primary" value="Добавить" @click="addNewProduct">
            </div>
        </div>
    </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'

  export default {
    name: 'NewProduct',
    components: {
      Multiselect
    },
    data() {
      return {
        product: {
          name: '',
          calories: '',
          squirrels: '',
          fats: '',
          carbohydrates: '',
          portion: '',
          meal: [],
        },
        mealOptions: [
          { name: 'Завтрак', value: 'breakfast' },
          { name: 'Обед', value: 'dinner' },
          { name: 'Ужин', value: 'supper' },
          { name: 'Перекус', value: 'snack' },
        ]
      }
    },
    methods: {
      addNewProduct() {
        this.$api.admin.createProduct(this.product).then(result => {
          this.product = {
            name: '',
            calories: '',
            squirrels: '',
            fats: '',
            carbohydrates: '',
            portion: '',
            meal: [],
          }
        })
      },
    }
  }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

