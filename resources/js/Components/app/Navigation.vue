<template>
  <nav class="min-w-[200px]">
    <Link :href="route('myFiles')" class="h-[80px] px-3 flex items-center gap-1">
      <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
      LaraDrive
      </Link>
    <div class="px-3">
      <CreateNewDropdown />
      <div class="py-3">
        <NavLink :href="route('myFiles')" :active="$page.url === 'my-files'">Mis archivos</NavLink>
        <NavLink href="/">Compartidos</NavLink>
        <NavLink href="/">Recibidos</NavLink>
        <NavLink href="/">Basura</NavLink>
      </div>
    </div>
  </nav>
</template>

<script setup>
//imports
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

import { Link } from "@inertiajs/vue3";

import CreateNewDropdown from "./CreateNewDropdown.vue";
import NavLink from "../NavLink.vue";

</script>