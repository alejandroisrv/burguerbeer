<template>
  <div>
    <modal @close="modal = false " v-show="modal">
        <div slot="modal-titulo">
            <div class="encabezado-border text-center" style="width:70%!important;">
              <h3>Gracias por tu compra</h3>
            </div>
        </div> 
      <div slot="modal-body" >
        <div class="row justify-content-center">
            <div class="col">
                <h4 class="text-center"> Tu pedido llegará en breve</h4>
            </div>
        </div>
      </div>
      <div slot="modal-footer">
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
    mounted(){
        this.eventHub.$on('finishModal', modal => {
            this.modal = modal;
            this.goHome();
        });
    },
    methods:{
        goHome(){
            setTimeout(() => {
                window.location.href="/carta";    
            }, 4000);
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
    .modal-burguer-backdrop .modal-burguer {
        max-height: 32%!important;
        height: inherit!important;
        padding-bottom: 0px!important;
}
</style>
