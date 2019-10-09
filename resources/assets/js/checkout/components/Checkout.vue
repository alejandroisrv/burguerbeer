<template>
    <div class="row justify-content-center main-checkout">
        <div class="col-lg-11">
            <div class="row">
                <div class="col">
                    <div class="encabezado-border">
                        <h2>Resumén de pedido: </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col mb-4 mt-2 text-center px-4">
                            <span class="resumen-producto-name" v-for="(cart,i) in carts" v-if="cart != null"> 
                                   {{ cart.producto.nombre }} <span class="numero" style="font-size:1.5rem">x2</span> 
                                <span style="color:gray;" v-if="(i+1) != carts.length"> + </span>
                                    {{ cart.bebida.nombre }} 
                                <span style="color:gray;" v-if="(i+1) != carts.length"> + </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <div class="row">
                        <div class="col-lg-12 mb-4 mt-4">
                            <div class="encabezado-border">
                                <h2> Métodos de pago  </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 px-4">
                            <div class="row">
                                <div class="metodo-pago-card col px-0" v-for="metodo in metodos">
                                    <span class="metodo-pago-header"> {{ metodo.nombre  }} </span>    
                                    <div class="metodo-pago-body">
                                        <!-- <img :src="'/assets/img/icons/' + metodo.icono"  class="metodo-pago-icono" /> -->
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <div class="col-lg-1" style="align-self: flex-end;">
            <button class="btn btn-primary" @click="logModal()"> Continuar </button>
        </div>
        <modal-account />
    </div> 
</template>
<script>
import ModalAccount from './modal';

export default {
    props:['metodos'],
    data(){
        return {
            checkout:{
                metodo:"",
                vuelto:"",
            }
        }
    },
    mounted(){
        console.log(this.carts);
    },
    components:{ ModalAccount },
    methods:{
        pay(){
            
        },
        logModal(){
            this.eventHub.$emit("openModal",true);
        }
    },
    computed:{
        carts:{
            get(){
                return this.$store.state.cart;
            },
            set(value){
                this.$store.commit("SET_CART",value);
            }
        }
    }
}
</script>
<style>
.main-checkout{
    background:#ffffffe8;
}

.encabezado-border{
    width:inherit!important;
    text-align:left;
    padding:10px 30px;
    
}

.encabezado-border h2{
    font-size:2rem !important;
}

</style>
