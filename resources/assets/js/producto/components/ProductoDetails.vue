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
                    <button class="btn btn-primary d-block mt-4" @click="openModal()">Pedir</button>
                </div>
            </div>
        </div>
        <div class="adicionals col-lg-6">
            <div class="row">
                <div class="col-lg-12">
                    <div class="encabezado-adicional">Adicionales</div>
                    <div class="row mt-4">
                        <div class="mx-1 col-3 px-0" v-for="adicional in adicionales">
                            <i class="add-icon" :class="adicional.select ? 'fa fa-minus-square' : 'fa fa-plus-square'" @click="addSalsa(adicional)"></i>
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
                        <div class="mx-1 col " v-for="salsa in salsas" :style="{ opacity: salsa.select ? '1' : '0.80' }">
                            <i class="add-icon" :class="salsa.select ? 'fa fa-minus-square' : 'fa fa-plus-square'" @click="addSalsa(salsa)"></i>
                            <div :style="'background:' + salsa.icon " class="circle-product"></div>
                            <p class="text-center"><i class="fa fa-check" style="font-size:10px;font-size: 13px;position: absolute;left: 0;top: 60%;" v-if="salsa.select"></i> {{ salsa.nombre }} </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="encabezado-adicional">Bebidas</div>
                    <div class="row mt-4">
                        <div class="mx-1 col " v-for="bebida in bebidas" :style="{ opacity: item.bebida.id == bebida.id ? '1' : '0.80' }">
                            <i class="fa add-icon " :class="item.bebida.id == bebida.id ? 'fa-minus-square' : 'fa-plus-square '" @click="addBebida(bebida)"></i>
                            <div :style="'background:' + bebida.icon " class="circle-product"></div>
                            <p class="text-center">
                                <i class="fa fa-check" style="font-size:10px;font-size: 13px;position: absolute;left: 0;top: 60%;" v-if="item.bebida.id == bebida.id"></i>
                                 {{ bebida.nombre }} 
                            </p>
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
import Vue from 'vue';
export default {
    props:['producto','bebidas','salsas','adicionales'],
    data(){
        return {
            item:{
                bebida: {},
                producto: {},
                salsas: [],
                adicionales: {},
           } 
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
        total(){
            let total = 0 ;
        }
    },
    created(){
        console.log(this.producto);
        
    },
    components:{modal},
    methods:{
        addAdicional(){
            let from = this.item.adicionales;
            if(!item.select){
                Vue.set(item, 'select', true)
                from.push(item);
            }else {
                from.forEach((x,i) => {
                    if(x.id == item.id){
                        from.splice(i,1);
                        Vue.set(item, 'select', false)
                    }
                })
            }
        },
        addSalsa(item){
            if(!item.select){
                Vue.set(item, 'select', true)
                this.item.salsas.push(item);
            }else {
                this.item.salsas.forEach((x,i) => {
                    if(x.id == item.id){
                        this.item.salsas.splice(i,1);
                        Vue.set(item, 'select', false)
                    }
                })
            }
            console.log(this.item.salsas);
            this.$forceUpdate();
        },
        addBebida(item){
            if(this.item.bebida != item ){
                this.item.bebida = item;
            }else{
                this.item.bebida = {}
            }
            this.$forceUpdate();
        },
        openModal(){
            this.eventHub.$emit('openModal',true,item);
        }
    }

}
</script>