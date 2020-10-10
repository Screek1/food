<template>
    <div class="wrapper">
        <div class="container">
            <div class="sidebar d-flex justify-content-end p-3">
                <div>
                    <button class="btn btn-danger" @click="logout">Выйти</button>
                </div>
            </div>
            <div class="content">
                <div class="content-header text-center">
                    <span class="content-header-text">Меню</span>
                </div>
                <div class="content-menu p-3 border m-4">
                    <div class="product">
                        <el-table :data="products"
                                  style="width: 100%"
                                  empty-text="Меню не составленно"
                        >
                            <el-table-column
                                    prop="name"
                                    label="Название"
                                    width="200px">
                            </el-table-column>
                            <el-table-column
                                    prop="calories"
                                    label="Калории">
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
                                    prop="meal"
                                    label="Подходит для"
                                    width="200px">
                                <template v-slot="{row}">
                                        <span v-for="item in row.meal">
                                            {{ item.name + 'а'}}
                                        </span></template>
                            </el-table-column>
                            <el-table-column
                                    align="right">
                                <template slot-scope="scope">
                                    <el-button
                                            size="mini"
                                            type="danger"
                                            @click="deleteProduct(scope.row.id)">Удалить
                                    </el-button>
                                </template>
                            </el-table-column>
                        </el-table>
                    </div>
                </div>
                <NewProduct></NewProduct>
            </div>
        </div>
    </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import NewProduct from '@components/products/NewProduct'

  export default {
    name: 'Products',
    components: { NewProduct },
    mounted() {
      this.$api.product.getProducts();
    },
    computed: {
      ...mapGetters({
        products: 'product/getProducts',
      })
    },
    methods: {
      deleteProduct(id) {
        this.$api.admin.destroyProduct(id).then(result => {
          this.$store.dispatch('product/deleteProduct', id)
          this.$toast.success("Продукт удален");
        });
      },
      saveMenu() {
        this.$store.dispatch('menu/saveMenu', this.products)
        this.$toast.success("Меню сохранено");
      },
      logout() {
        this.$api.auth.logout().then(result => {
          this.$router.push({ name: 'admin-login' })
        })
      },
    },
    filters: {
      count(int, item) {
        return ((int / 100) * item.portion).toFixed(2);
      }
    }
  }
</script>

<style scoped>
    .sidebar {
        padding: 20px;
    }
    .content-header-text {
        font-weight: bold;
        font-size: 32px;
    }
</style>

