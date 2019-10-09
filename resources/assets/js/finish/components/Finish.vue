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
                            <tr>
                                <td class="resumen-producto-name"> Hamburguesa</td>
                                <td class="numero text-center"> 2 </td>
                                <td class="numero text-center"> S/. 1232 </td>
                            </tr>
                            <tr>
                                <td class="resumen-producto-name"> Hamburguesa</td>
                                <td class="numero text-center"> 2 </td>
                                <td class="numero text-center"> S/. 1232 </td>
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
                            <td class="numero"> 21321 </td>
                        </tr>
                        <tr>
                            <td> Envio: </td>
                            <td class="numero"> 21321 </td>
                        </tr>
                        <tr>
                            <td> IGV: </td>
                            <td class="numero"> 21321 </td>
                        </tr>
                        <tr>
                            <td class="resumen-producto-name"> TOTAL: </td>
                            <td class="numero" style="font-size:1.9rem;"> 21321 </td>
                    </tr>
                </table> 
                </div>
            </div>
        </div>
        <div class="col-lg-2 p-0 text-right" style="align-self: flex-end;">
            <button class="btn btn-primary p-0" @click="finish()"> Finalizar compra </button>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            
        }
    },
    methods: {
        finish() {
            this.eventHub.$emit("finishModal");
            window.location.href="/carta";
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
.encabezado-border h2{
    font-size:2rem !important;
}
</style>