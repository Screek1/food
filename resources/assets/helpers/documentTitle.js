import config from '@config';

export const setTitle = (route) => {
  const { meta: { title } } = route;
  if (!title) {
    return;
  }
  document.title = `${title}`;
};

export const setDefaultTitle = () => {
  document.title = config.appName;
};
