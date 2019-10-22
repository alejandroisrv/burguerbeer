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