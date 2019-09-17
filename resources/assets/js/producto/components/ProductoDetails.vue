<template>
    <div class="row">
        <div class="producto col-lg-6">
            <div class="row text-left">
                <div class="col-lg-6 text-center">
                    <img :src="'/assets/img/productos/' + producto.img" class="img-fluid">
                </div>
                <div class="col-lg-6 text-center">
                    <span class="m-0">{{ producto.nombre }}</span>
                    <hr class="mb-1">
                    <p class="text-plomo">{{ producto.descripcion }}</p>
                </div>
            </div>
            <div class="row content-sub-total">
                <div class="col-lg-6 text-right">
                    <span class="text-danger"> Sub-total: </span>
                </div>
                <div class="col-lg-6 text-left price-content">
                    <span class="numero"> {{ producto.precio | currency }} </span>
                    <button class="btn btn-primary d-block mt-4">Pedir</button>
                </div>
            </div>
        </div>
        <div class="adicionals col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="encabezado-adicional">Adicionales</div>
                    <div class="row mt-4">
                        <div class="mx-3" v-for="adicional in adicionales">
                            <i class="fa fa-plus-square fl-right"></i>
                            <div :style="'background:' + adicional.icon " class="circle-product"></div>
                            <p class="text-center"> {{ adicional.nombre }} </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="encabezado-adicional">Salsas</div>
                    <div class="row mt-4">
                        <div class="mx-1 col " v-for="salsa in salsas">
                            <i class="add-icon fa fa-plus-square"></i>
                            <div :style="'background:' + salsa.icon " class="circle-product"></div>
                            <p class="text-center"> {{ salsa.nombre }} </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="encabezado-adicional">Bebidas</div>
                    <div class="row mt-4">
                        <div class="mx-1 col " v-for="bebida in bebidas">
                            <i class="fa fa-plus-square add-icon "></i>
                            <div :style="'background:' + bebida.icon " class="circle-product"></div>
                            <p class="text-center"> {{ bebida.nombre }} </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <modal></modal>
    </div>
</template>
<script>
import modal from './ModalCheckout.vue';
export default {
    props:['producto','bebidas','salsas','adicionales'],
    created(){
        console.log(this.adicionales);
    },
    components:{modal},
    methods:{
        addAdicional(){

        },
        addSalsa(){

        },
        addBebida(){}
    }

}
</script>