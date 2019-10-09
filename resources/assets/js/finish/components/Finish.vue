<template>
    <div class="row justify-content-center main-checkout">
        <div class="col-lg-11">
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
                            <td> TOTAL: </td>
                            <td class="numero"> 21321 </td>
                    </tr>
                </table> 
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            
        }
    }
}    
</script>
<style>
.list-producto td{
    padding:10px 20px;    
}

.total-list{
    text-align:right;
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