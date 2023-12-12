<template>
    <AuthenticatedLayout>
        <table class="min-w-full">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Nombre
                    </th>
                    <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Creador
                    </th>
                    <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Ultima Modificación
                    </th>
                    <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Tamaño
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="file of files.data" :key="file.id" 
                @dblclick="openFolder(file)"
                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{file.name}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{file.owner}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{file.updated_at}}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{file.size}}
                    </td>
                </tr>
            </tbody>
        </table>
        <div v-if="!files.data.length" class="py-8 text-center text-lg text-gray-400">
            No hay data en las carpeta para mostrar
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

// Methods
function openFolder(file){
    
}



// Props & Emit
const {files} = defineProps({
    files: Object
})
</script>
