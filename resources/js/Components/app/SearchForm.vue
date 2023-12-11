<template>
  <form class="w-[600px] h-[80px] flex items-center">
    <TextInput type="text" class="block w-full mr-2" v-model="form.search" autocomplete
      placeholder="Buscar archivos y carpetas" />
  </form>
</template>

<script setup>
// Import
import { useForm } from '@inertiajs/vue3';
import TextInput from '../TextInput.vue';

// Uses
const form = useForm({
  search: ''
})
</script>

<style></style>