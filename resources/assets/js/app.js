// import local dependencies
import 'jquery';
import 'bootstrap-sass/assets/javascripts/bootstrap';
import axios from 'axios';
import Router from './util/router';
import common from './routes/Common';
import admin from './routes/Admin';

// Fire up lazyLoading globally
window.lazySizes = require('lazysizes');

/**
 * We'll register a HTTP interceptor to attach the "CSRF" header to each of
 * the outgoing requests issued by this application. The CSRF middleware
 * included with Laravel will automatically verify the header's value.
 */

axios.interceptors.request.use((config) => {
  if (config.url === window.location.url) {
    config.headers['X-CSRF-TOKEN'] = $('meta[name="_token"]').attr('content'); // eslint-disable-line
  }
  return config;
});

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  // Home page
  admin,
};

// Load Events
$(document).ready(() => new Router(routes).loadEvents());
