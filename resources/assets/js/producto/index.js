import Vue from 'vue';
import store from './store';
import VueCurrencyFilter from 'vue-currency-filter';

Vue.component('producto', require('./components/ProductoDetails.vue').default);
Vue.use(VueCurrencyFilter, {
    symbol: 'S/.',
    thousandsSeparator: '.',
    fractionCount: 2,
    fractionSeparator: ',',
    symbolPosition: 'front',
    symbolSpacing: true
})

const eventHub = new Vue()

Vue.mixin({
    data: function() {
        return {
            eventHub: eventHub
        }
    }
})

const app = new Vue({
    el: '#app',
    store
});