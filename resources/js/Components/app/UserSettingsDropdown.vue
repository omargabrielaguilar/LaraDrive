<template>
  <Menu as="div" class="relative inline-block text-left">
    <div>
      <MenuButton
        class="inline-flex w-full justify-center rounded-md  px-4 py-2 text-sm font-medium text-black-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-white/75">
        {{ $page.props.auth.user.name }}
        <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5 text-gray-800" aria-hidden="true" />
      </MenuButton>
    </div>

    <transition enter-active-class="transition duration-100 ease-out" enter-from-class="transform scale-95 opacity-0"
      enter-to-class="transform scale-100 opacity-100" leave-active-class="transition duration-75 ease-in"
      leave-from-class="transform scale-100 opacity-100" leave-to-class="transform scale-95 opacity-0">
      <MenuItems
        class="absolute right-0 mt-2 w-32 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none">
        <div class="px-1 py-1">
          <MenuItem v-slot="{ active }">
            <ResponsiveNavLink :href="route('profile.edit')"
                               :class="[active ? 'bg-grey-100 text-gray-900' : 'text-gray-700', 
                               'block px-4 py-2 text-sm']">
            Perfil
            </ResponsiveNavLink>
          </MenuItem>
          <MenuItem v-slot="{ active }">
            <ResponsiveNavLink :href="route('logout')"
                               :class="[active ? 'bg-grey-100 text-gray-900' : 'text-gray-700', 
                               'block px-4 py-2 text-sm']">
            Cerrar Sesión
            </ResponsiveNavLink>
          </MenuItem>
        </div>
      </MenuItems>
    </transition>
  </Menu>
</template>

<script setup>
//Imports
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import ResponsiveNavLink from '../ResponsiveNavLink.vue';
</script>
