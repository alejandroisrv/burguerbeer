<template>
    <div class="modal-burguer-backdrop">
        <div class="modal-burguer">
            <div class="modal-burguer-titulo">
                <slot name="modal-titulo"></slot>
            </div>
            <div @click="close()" class="btn-cerrar"><i class="fa fa-close"></i></div>
            <div class="modal-burguer-body">
                <slot name="modal-body"></slot>
            </div>
            <div class="modal-burguer-footer">
                <slot name="modal-footer"></slot>
            </div>
        </div>
        <div class="square-adicionales">
            <slot name="modal-adicionales"></slot>
        </div>
    </div>
</template>
<script>
export default {
    name: 'modal',
    methods: {
      close() {
        this.$emit('close');
      },
    },
}
</script>
<style>
 .modal-burguer-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 999999;
        background-color: #2f496e73;
        width: 100%;
        height: 100%;
    }

    .modal-burguer-backdrop .modal-burguer {
        position: relative;
        background-color: #d9d9d9;
        width: 50%;
        margin: 0 auto;
        margin-top: 8%;
        max-height: 70%;
        height: 43%;
        border:4px solid black;
    }
    .modal-burguer .btn-cerrar{
        position: absolute;
        top: -10px;
        right: -12px;
        color: #fff;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        transition: 0.5s;
        cursor: pointer;
    }

    .modal-burguer .btn-cerrar:hover{
        background: #f52b16;
    }

    .modal-burguer .btn-cerrar i{
        line-height: 27px;
    }

    .modal-burguer-footer{
        margin-top: -80px;
    }

    .modal-burguer .modal-burguer-titulo {
        padding: 15px;
        font-weight: 550;
        color: black;
    }

    .modal-burguer .modal-burguer-body {
        padding: 20px;
        height: 84%;
        padding-bottom:30px;
    }

    .square-adicionales{
        width: 10%;
        background: #d9d9d9;
        height: 200px;
        display: block;
        position: absolute;
        top: 16.7%;
        right: 3.1%;
        border: 4px solid black;
        display:none;
        visibility:hidden;
    }

</style>
