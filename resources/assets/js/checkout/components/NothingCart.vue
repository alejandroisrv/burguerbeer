<template>
  <div>
    <modal @close="modal = false " v-show="modal">
        <div slot="modal-titulo">
            <h3 class="text-center">Tu carrito esta vacío.</h3>
        </div> 
      <div slot="modal-body" >
        <div class="row justify-content-center">
            <div class="col">
                <h4 class="text-center"> Intenta agregar algun producto. </h4>
            </div>
        </div>
      </div>
      <div slot="modal-footer">
        <div class="text-center">
          <button type="button" class="btn btn-primary" v-else-if="" @click="goHome()"> Aceptar</button>
        </div>
      </div>
    </modal>
  </div>
</template>
<script>
import axios from 'axios';
import Modal from '../../components/Modal';
export default {
    data(){
        return {
            modal:false,
            step:1,
        }
    },
    computed:{
        cart:{
            set(value){
                this.$store.commit('SET_CART',value);
            },
            get(){
                return this.$store.state.cart;
            }
        },
    },
    components:{ Modal },
    watch: {
        modal() {
            if(!this.modal){
                this.goHome();
            }
        },
    },
    mounted(){
        this.eventHub.$on('nothingCart', modal => this.modal = modal );
    },
    methods:{
        goHome(){
            window.location.href="/carta";
        }

    }
}
</script>
<style>
    .square-adicionales{
        display:none;
        visibility:hidden;
    }
    .modal-burguer-backdrop .modal-burguer {
        max-height:70%!important;
        height:inherit!important;
        padding-bottom:25px!important;

    }
    .modal-burguer-footer {
        margin-top: -100px;
    }
</style>
