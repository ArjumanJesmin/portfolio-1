<template>
    <Head title = "My Project"/>
 
    <AuthenticatedLayout>
         <template #header>
             <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             My Project
             </h2>
         </template>
 
         <div class="py-12">
             <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 <div class="flex justify-end m-1 p-2">
                     Form
                     </div>
             </div>
         </div>
     </AuthenticatedLayout>
 </template>
 
 <script setup>
 import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
 import { Head } from '@inertiajs/inertia-vue3';
 </script>
 
 