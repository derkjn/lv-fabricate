/* eslint-disable global-require */

export default {
  init() {
    // JavaScript to be fired on the home page
    System.import('../util/bootstrap-admin').then((BS) => {
      BS.default.init();
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
