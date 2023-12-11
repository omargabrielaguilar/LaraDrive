<template>
  <modal :show="modelValue"> Crear Modal </modal>
</template>

<script setup>
import Modal from "@/Components/Modal.vue";
const { modelValue } = defineProps({
  modelValue: Boolean,
});
</script>

<style>
</style>