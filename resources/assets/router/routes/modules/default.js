const Home = () => import(/* webpackChunkName: 'Home' */ '@pages/Home')

export default [
  {
    path: '/',
    component: Home,
    name: 'home',
  }
  ];
