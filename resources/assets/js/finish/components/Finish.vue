<template>
    <div class="row main-checkout">
        <div class="col-lg-10 text-right">
            <div class="row">
                <div class="col">
                    <div class="encabezado-border">
                        <h2>Checa el pedido: </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="list-producto">
                        <thead style="padding-right:20px;">
                        <tr>
                            <td style="width:80%"> </td>
                            <td style="width:10%"> Cantidad</td>
                            <td style="width:10%"> Subtotal</td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="cart in carts">
                                <td class="resumen-producto-name"> {{ cart.producto.nombre }} </td>
                                <td class="numero text-center" style="font-size: 1.2rem;font-weight: 600;"> {{ cart.producto.cantidad }} </td>
                                <td class="numero text-center" style="font-size: 1.2rem;font-weight: 600;"> {{ cart.producto.precio * cart.producto.cantidad | currency }}</td>
                            </tr>
                        </tbody>
                    </table>         
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-12 text-right">
                    <table class="total-list">
                        <tr>
                            <td> Sub-Total: </td>
                            <td class="numero"> {{ subtotal | currency}} </td>
                        </tr>
                        <tr>
                            <td> Envio: </td>
                            <td class="numero"> {{ envio | currency }} </td>
                        </tr>
                        <tr>
                            <td> IGV: </td>
                            <td class="numero"> {{ igv  | currency}} </td>
                        </tr>
                        <tr>
                        
                            <td class="resumen-producto-name"> TOTAL: </td>
                            <td class="numero" style="font-size:1.9rem;"> {{ total | currency }} </td>
                    </tr>
                </table> 
                </div>
            </div>
        </div>
        <div class="col-lg-2 p-0 text-right" style="align-self: flex-end;">
            <button class="btn btn-primary p-0" @click="finish()"> Finalizar compra </button>
        </div>
        <finish-modal />
    </div>
</template>
<script>
import FinishModal from './modal';
export default {
    data(){
        return {
            
        }
    },
    components:{FinishModal},
    computed:{
        carts:{
            set(value){
                this.$store.commit('SET_CART',value);
            },
            get(){
                return this.$store.state.cart;
            }
        },
        subtotal(){
            let productos = 0 ;
            let bebidas = 0;
            let adicionales = 0;

            this.carts.forEach(element => {
                productos += element.producto.cantidad * element.producto.precio;
                bebidas += (element.bebida.precio ) ? element.bebida.precio : bebidas ;
                adicionales += (element.adicionales.precio ) ? element.adicionales.precio : adicionales ;
            });

            return productos + bebidas + adicionales;
        },
        envio(){
            return 8;
        },
        igv(){
            return 0;
        },
        total(){
            let total = this.subtotal + this.igv + this.envio;
            return total;
        }
    },
    methods: {
        finish() {
            localStorage.removeItem("cart");            
            this.eventHub.$emit("finishModal",true);
        },
    },
}    
</script>
<style>
.list-producto td{
    padding:10px 20px;    
}

.total-list{
    margin-top:20px;
    text-align:right;
    margin-left: auto;
    
}

.total-list td{
    padding:2px;

}

.list-producto tbody{
    border: 3px solid black;
    text-align: left;
    align-items: center !important;
    margin: auto;
}
.main-checkout{
    background:#ffffffe8;
}
.encabezado-border{
    width:inherit!important;
    text-align:left;
    padding:10px 30px;
    
}
.numero{
    font-weight:600;
}

.encabezado-border h2{
    font-size:2rem !important;
}
</style>