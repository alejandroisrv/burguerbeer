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
    actions: {
        initStore({ commit, state }) {
            let cart = JSON.parse(localStorage.getItem("cart"));
            commit("SET_CARS", cart);
        }
    }
})

export default store;