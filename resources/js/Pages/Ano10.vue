<template>
    <div class="min-h-full">
    <NavBar></NavBar>
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300" />
            </div>
            <div class="relative flex justify-start">
                <span class="bg-white pr-3 text-base font-semibold leading-6 text-gray-900">Projects</span>
            </div>
        </div>
            <ul role="list" class="divide-y divide-gray-200">
                <li v-for="item in items" :key="item.id" class="px-4 py-4 sm:px-0">
                    <!-- Your content -->
                </li>
            </ul>
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300" />
            </div>
            <div class="relative flex justify-start">
                <span class="bg-white pr-3 text-base font-semibold leading-6 text-gray-900">Projects</span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { EllipsisVerticalIcon } from '@heroicons/vue/20/solid'
import NavBar from "@/Components/NavBar.vue";

const items = [
    { id: 1, name:"Fichas" },
    { id: 2, name:"Exames"},
    { id: 3, name:"Formulários"},
    { id: 4, name:"Resumos"}
    // More items...
]
</script>
