const AdminLogin = () => import(/* webpackChunkName: 'AdminLogin' */ '@pages/admin/Login')
const AdminProducts = () => import(/* webpackChunkName: 'AdminProducts' */ '@pages/admin/Products')

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
      title: 'Login to admin panel'
    }
  },
  {
    path: '/admin/products',
    component: AdminProducts,
    name: 'admin-products',
    meta: {
      auth: true,
      title: 'Products'
    }
  }
];
