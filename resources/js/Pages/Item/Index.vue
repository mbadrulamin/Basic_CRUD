<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { router } from "@inertiajs/vue3";

defineProps({
    items: Array,
})

</script>

<template>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <AppLayout title="Items">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            </h2>
        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg content-center">

                    <table class="table-auto w-full mt-10 ml-10 mr-10 mb-10">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Price</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item, index) in items" :key="index">
                                <td class="border px-4 py-2">{{ item.id }}</td>
                                <td class="border px-4 py-2">{{ item.name }}</td>
                                <td class="border px-4 py-2">{{ item.price }}</td>
                                <td class="border px-4 py-2">
                                    <div class="flex">
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            <i class="fas fa-trash-alt"></i> <!-- FontAwesome trash icon -->
                                        </button>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                                                <i class="fas fa-edit"></i> <!-- FontAwesome edit icon -->
                                        </button>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end mt-4">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" @click="createNewItem">
                        <i class="fas fa-plus-circle mr-2"></i> Create New Item
                    </button>
                </div>
            </div>
        </div>


    </AppLayout>
</template>

