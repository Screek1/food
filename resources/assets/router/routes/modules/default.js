const Home = () => import(/* webpackChunkName: 'home' */ '@pages/Home')

export default [
  {
    path: '/',
    component: Home,
    name: 'home',
  }
  ];
