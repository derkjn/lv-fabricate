/* eslint-disable global-require */
import Vue from 'vue';
import prices from '../components/prices.vue';
const components = {
  prices,
};

export default {
  init() {
    // JavaScript to be fired on the home page
    System.import('../util/bootstrap-admin').then((BS) => {
      BS.default.init();
    });
    new Vue({
      el: '#app',
      template: ``,
      components,
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
