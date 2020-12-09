import ElementUI from 'element-ui';

Nova.booting((Vue, router, store) => {
  Vue.use(ElementUI);
  Vue.component('index-nova-quick-view', require('./components/IndexField'))
})
