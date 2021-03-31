require('./bootstrap');

window.Vue = require('vue');

import algoliasearch from 'algoliasearch/lite';
window.algoliasearch = algoliasearch;

import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);
