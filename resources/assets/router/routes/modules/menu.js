const ClientMenu = () => import(/* webpackChunkName: 'client-menu' */ '@pages/menu/ClientMenu')

export default [
  {
    path: '/menu/:key',
    component: ClientMenu,
    name: 'client-menu',
    meta: {
      title: 'Меню'
    }
  }
];
