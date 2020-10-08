const AdminLogin = () => import(/* webpackChunkName: 'admin-login' */ '@pages/admin/Login')
const AdminProducts = () => import(/* webpackChunkName: 'admin-products' */ '@pages/admin/Products')

export default [
  {
    path: '/admin',
    redirect: '/admin/login',
  },
  {
    path: '/admin/login',
    component: AdminLogin,
    name: 'admin-login',
    meta: {
      title: 'Панель Администратора'
    }
  },
  {
    path: '/admin/products',
    component: AdminProducts,
    name: 'admin-products',
    meta: {
      auth: true,
      title: 'Меню'
    }
  }
];
