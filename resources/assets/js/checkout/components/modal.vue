<template>
  <div>
    <modal @close="modal = false " v-show="modal">
      <div slot="modal-titulo">
          <div class="encabezado-border text-center" style="width:70%!important;">
              <h3>{{ titulo }}</h3>
            </div>    
        </div> 
      <div slot="modal-body" >
        <div class="px-4" v-show="step == 1">
            <div class="row justify-content-center">
                <div class="col-9 text-left">
                    <span class="pb-2">Ingresa con tu cuenta </span>
                    <div class="form-group">
                        <small class="error-small" v-if="validations.user.state" >{{ validations.user.msj }}</small>
                        <input type="text" v-model="user.email" class="form-control" :class="validations.user.state ? 'invalid-form' : ''"  placeholder="e-mail" />
                        <small class="error-small" v-if="validations.password_user.state" >{{ validations.password_user.msj }}</small>
                        <input type="password" v-model="user.password" class="form-control" :class="validations.password_user.state ? 'invalid-form' : ''"  placeholder="contraseña" />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <a href="#" @click="forgetPasswordScreen()">¿Olviste tu contraseña? </a>
                </div>
                <div class="col-4 text-right">
                    <button type="button" class="btn btn-primary px-4" v-if="" @click="login()">Iniciar</button>
                </div>
            </div>
        </div>
        <div class="px-4" v-show="step == 2">
            <div class="row justify-content-center">
                <div class="col-9 text-left">
                    <div class="form-group">
                        <form @submit.prevent="register()">
                            <small class="error-small" v-if="validations.name.state" >{{ validations.name.msj }}</small>
                            <input type="text" class="form-control" :class="validations.name.state ? 'invalid-form' : ''" v-model="new_user.name" placeholder="Nombre" />
                            
                            <small class="error-small" v-if="validations.direccion.state" >{{ validations.direccion.msj }}</small>                     
                            <input type="text" class="form-control" :class="validations.direccion.state ? 'invalid-form' : ''"  v-model="new_user.direccion" placeholder="Dirección" />
                            
                            <small class="error-small" v-if="validations.telefono.state" >{{ validations.telefono.msj }}</small>                    
                            <input type="text" class="form-control numero" :class="validations.telefono.state ? 'invalid-form' : ''" v-model="new_user.telefono" placeholder="Telefono" />
                            
                            <small class="error-small" v-if="validations.email.state" >{{ validations.email.msj }}</small>
                            <input type="email" class="form-control" :class="validations.email.state ? 'invalid-form' : ''" v-model="new_user.email" placeholder="E-mail" />
                            
                            <small class="error-small numero" v-if="validations.password.state" >{{ validations.password.msj }}</small>
                            <input type="password" class="form-control" :class="validations.password.state ? 'invalid-form' : ''" v-model="new_user.password" placeholder="contraseña" />
                            <input type="submit" style="display:none;">
                        </form>
                    </div>
                    <div class="form-group">
                        <a href="#" @click="loginScreen()">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4" v-show="step == 3">
            <div class="row justify-content-center">
                <div class="col-9 text-left">
                    <span class="pb-2">Ingresa tu email para restablecer tu contraseña </span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="e-mail" />
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5">
                    <a href="#" @click="loginScreen()">Iniciar sesión</a>
                </div>
                <div class="col-4 text-right">
                    <button type="button" class="btn btn-primary px-4" v-if="" @click="login()">Enviar</button>
                </div>
            </div>
        </div>
      </div>
      <div slot="modal-footer">
        <div class="text-center">
            <hr>
          <button type="button" class="btn btn-primary" v-else-if="" @click="registerScreen()"> Crear cuenta</button>
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
            titulo:"¿Ya estas registrado?",
            step:1,
            validations:{
                name:{
                    msj:"Este campo es requerido",
                    state:false
                },
                email:{
                    msj:"Este campo es requerido",
                    state:false
                },
                password:{
                    msj:"Este campo es requerido",
                    state:false
                },
                direccion:{
                    msj:"Este campo es requerido",
                    state:false
                },
                telefono:{
                    msj:"Este campo es requerido",
                    state:false
                },
                user:{
                    msj:"Este campo es requerido",
                    state:false
                },
                password_user:{
                     msj:"Este campo es requerido",
                    state:false
                }
            },
            forgetPassword:{
                email:'',
            },
            user:{
                email:'',
                password:''
            },
            new_user:{
                name:'',
                email:'',
                direccion:'',
                telefono:'',
                password:''
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
    },
    components:{ Modal },
    mounted(){
        this.eventHub.$on('openModal', modal => this.modal = modal );
    },
    methods:{
        login(){

            if(this.user.email.length == 0){
                this.validations.user.msj = "Este campo es requerido";
                this.validations.user.state = true;
                return false;
            }else{
                this.validations.user.state = false;
            }

            if(this.user.password.length == 0){
                this.validations.password_user.msj = "Este campo es requerido";
                this.validations.password_user.state = true;
                return false;
            }else{
                this.validations.password_user.state = false;
            }
            
            axios.post('/api/login',this.user).then(rs=> {
                window.location.href="/finish";
            }).catch(err=>{
                this.validations.user.msj = "Datos incorrectos";
                this.validations.user.state = true;
            });

        },
        register(){
            let emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

            if(this.new_user.name.length == 0){
                this.validations.name.msj = "Este campo es requerido";
                this.validations.name.state = true;
                return false;
            }else{
                this.validations.name.state = false;
            }

            if(this.new_user.direccion.length == 0){
                this.validations.direccion.msj = "Este campo es requerido";
                this.validations.direccion.state = true;
                return false;
            }else{
                this.validations.direccion.state = false;
            }

                          
            if(this.new_user.telefono.length == 0){
                this.validations.telefono.msj = "Este campo es requerido";
                this.validations.telefono.state = true;
                return false;
            }else{
                this.validations.telefono.state = false;
            }

            if(this.new_user.email.length == 0){
                this.validations.email.msj = "Este campo es requerido";
                this.validations.email.state= true;
                return false;
            }else if (!emailRegex.test(this.new_user.email)) {
                this.validations.email.msj = "Ingresa un correo valido";
                this.validations.email.state= true;
                return false;
            }else{
                this.validations.email.state= false;
            }

            if(this.new_user.password.length < 6 ){
                this.validations.password.msj = "La contraseña debe tener al menos 6 carácteres";
                this.validations.password.state = true;
                return false;
            }else{
                this.validations.password.state = false;
            }

            axios.post('/api/register',this.new_user).then(rs=> {
               window.location.href="/finish";
            });
        },
        recoveryPassword(){

        },
        loginScreen(){
            this.titulo = "¿Ya estas registrado?";
            this.step = 1;
        },
        forgetPasswordScreen(){
            this.titulo = "¿Olvidaste tu clave?";
            this.step = 3
        },
        registerScreen(){
            if(this.step == 2){
               return this.register(); 
            }
            this.titulo = "Regístrate";
            this.step = 2;
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
