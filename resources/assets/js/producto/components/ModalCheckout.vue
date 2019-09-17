<template>
  <div>
    <modal @close="modal = false " v-show="modal">
      <div slot="modal-titulo">
          <div class="encabezado-border">
              <h3>Tu pedido</h3>
            </div>    
        </div>
      <div slot="modal-body" >
        <div class="row">
            <div class="col-lg-4">
                <img class="img-fluid" src="/assets/img/icons/guesa.png">
            </div>
            <div class="col-lg-4">
                <img class="img-fluid" src="/assets/img/icons/jugo.png">
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
      </div>
      <div slot="modal-footer">
        <div class="text-center">
          <button type="button" class="btn btn-danger" @click="modal = false ">Cancelar</button>
          <button type="submit" class="btn btn-primary">Seleccionar</button>
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
            modal:true,
            loading:true,
        }
    },
    components:{ Modal },
    mounted(){
        this.eventHub.$on('openModal', () => {

        });
    },
    methods:{
     
    }
}
</script>