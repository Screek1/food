<template>
    <div class="wrapper">
        <el-table :data="menu"
                  style="width: 100%"
                  empty-text="Меню не составленно"
                  show-summary
                  :summary-method="getSummaries"
        >
            <el-table-column
                    prop="product.name"
                    label="Название"
                    width="300">
            </el-table-column>
            <el-table-column
                    prop="calories"
                    label="Калории"
                    width="180">
                <template v-slot="{row}">
                    {{ row.calories | count(row) }}
                </template>
            </el-table-column>
            <el-table-column
                    prop="squirrels"
                    label="Белки">
                <template v-slot="{row}">
                    {{ row.squirrels | count(row) }}
                </template>
            </el-table-column>
            <el-table-column
                    prop="fats"
                    label="Жиры">
                <template v-slot="{row}">
                    {{ row.fats | count(row) }}
                </template>
            </el-table-column>
            <el-table-column
                    prop="carbohydrates"
                    label="Углеводы">
                <template v-slot="{row}">
                    {{ row.carbohydrates | count(row) }}
                </template>
            </el-table-column>
            <el-table-column
                    prop="portion"
                    label="Порция">
            </el-table-column>
            <el-table-column
                    prop=""
                    label=""
                    width="10">
            </el-table-column>
        </el-table>
        <table v-if="showAddNewProduct">
            <tr>
                <td>
                    <multiselect v-model="product"
                                 :options="options"
                                 track-by="name"
                                 label="name"
                                 placeholder="Выберете продукт"
                                 select-label=""
                                 deselect-label=""
                                 :allow-empty="false"
                                 :close-on-select="true"
                                 style="width: 280px"
                    />
                </td>
                <td style="width: 16%">
                    {{ newProduct.calories | count(newProduct) }}
                </td>
                <td style="width: 14%">
                    {{ newProduct.squirrels | count(newProduct) }}
                </td>
                <td style="width: 15%">
                    {{ newProduct.fats | count(newProduct) }}
                </td>
                <td style="width: 12%">
                    {{ newProduct.carbohydrates | count(newProduct) }}
                </td>
                <td style="width: 10%">
                    <input type="number" class="input-group" v-model="newProduct.portion">
                </td>
                <td style="width: 7%">
                    <button class="btn btn-success" @click="addNewProduct">+</button>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
  import Multiselect from 'vue-multiselect'

  export default {
    name: 'MealBlock',
    components: {
      Multiselect
    },
    props: {
      menu: {
        type: Array,
      },
      index: {
        type: String,
        default: ''
      },
      showAddNewProduct: {
        type: Boolean,
        default: true
      }
    },
    data() {
      return {
        newProduct: {
          product: null,
          calories: null,
          squirrels: null,
          fats: null,
          carbohydrates: null,
          portion: null,
        }
      }
    },
    computed: {
      options() {
        switch(this.index) {
          case 'breakfast':
            return  this.$store.getters['product/getProductsForBreakfast'];
          case 'snack_after_breakfast':
            return this.$store.getters['product/getProductsForSnack'];
          case 'dinner':
            return this.$store.getters['product/getProductsForDinner'];
          case 'afternoon_snack':
            return this.$store.getters['product/getProductsForSnack'];
          case 'supper':
            return this.$store.getters['product/getProductsForSupper'];
        }
      },
      product: {
        get: function () {
          return this.options.find(option => option === this.newProduct.product);
        },
        set: function (product) {
          this.newProduct.product = product;
          this.newProduct.calories = product.calories
          this.newProduct.squirrels = product.squirrels
          this.newProduct.fats = product.fats
          this.newProduct.carbohydrates = product.carbohydrates
          this.newProduct.portion = product.portion
        }
      }
    },
    methods: {
      addNewProduct() {
        this.menu.push(this.newProduct);
        this.newProduct = {
          product: null,
          calories: null,
          squirrels: null,
          fats: null,
          carbohydrates: null,
          portion: null,
        };
        this.$toast.success("Новый продукт добавлен");
      },
      getSummaries(param) {
        const { columns, data } = param;
        const sums = [];
        columns.forEach((column, index) => {
          if (index === 0) {
            sums[index] = 'Всего';
            return;
          }
          if (index === 5 || index === 6) {
            return
          }
          const values = data.map(item => Number((item[column.property] / 100) * item['portion']));
          if (!values.every(value => isNaN(value))) {
            sums[index] = values.reduce((prev, curr) => {
              const value = Number(curr);
              if (!isNaN(value)) {
                return prev + curr;
              } else {
                return prev;
              }
            }, 0).toFixed(2);
          } else {
            sums[index] = 'N/A';
          }
        });

        return sums;
      }
    },
    filters: {
      count(int, item) {
        return ((int / 100) * item.portion).toFixed(2);
      }
    }
  }
</script>

<style scoped>
    .menu-products {
        font-size: 20px;
    }
    table {
        width: 100%;
    }
    tr td:first-child {
        width: 200px;
    }
    td {
        width: 13%;
        padding: 10px;
    }
</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>

