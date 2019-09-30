import Vue from 'vue';
import Vuex from 'vuex'
Vue.use(Vuex);
const store = new Vuex.Store({
    state: {
        cart: [],
    },
    getters: {
        cart(state) {
            return state.cart;
        },
    },
    mutations: {
        SET_CARS(state, value) {
            state.cart = value
        },
    },
})

export default store;