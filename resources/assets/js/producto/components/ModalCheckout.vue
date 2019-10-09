<template>
  <div>
    <modal @close="modal = false " v-show="modal">
      <div slot="modal-titulo">
          <div class="encabezado-border">
              <h3>Tu pedido</h3>
            </div>    
        </div>
      <div slot="modal-body" >
        <div class="row" v-if="item != ''">
            <div class="col">
                <!-- <img class="img-fluid" :src="'/assets/img/icons/'+ item.producto.categoria.img" > -->
            </div>
            <div class="col" v-if="">
                <!-- <img class="img-fluid" :src="'/assets/img/icons/' "> -->
            </div>
        </div>
      </div>
      <div slot="modal-footer">
        <div class="text-center">
          <button type="button" class="btn btn-primary" @click="pedirMas()">Agregar más</button>
          <button type="submit" class="btn btn-info" @click="pedirYa()">Pedir ya !</button>
        </div>
      </div>
      <div slot="modal-adicionales"> 
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h4>Adicionales</h4>
              </div>
          </div>
      </div>
    </modal>
  </div>
</template>
<script>
import Modal from '../../components/Modal';
export default {
    data(){
        return {
            ruta:'',
            template:'',
            tipo:'',
            imagenes:[],
            image:'',
            modal:false,
            loading:true,
            item:""
    
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
        this.eventHub.$on('openModal', (modal,item) => {
            this.modal = modal
            this.item = item;
        });
    },
    methods:{
        pedirMas(){
            this.cart.push(this.item);
            localStorage.setItem("cart",JSON.stringify(this.cart));
            window.location.href="/carta";
        },
        pedirYa(){
            window.location.href="/checkout"
        }
    }
}
</script>
<style>
      .modal-burguer-backdrop .modal-burguer {
        max-height:70%!important;
        height:inherit!important;
        padding-bottom:25px!important;

    }
    .modal-burguer-footer {
        margin-top: -100px;
    }
</style>