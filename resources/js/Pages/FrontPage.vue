<template>
    <div class="min-h-full">
<NavBar></NavBar>

        <div style="margin-bottom: 100px;"></div>
            <div class="py-24 sm:placeholder-yellow-300W flex justify-center items-center">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
                        <dl class="grid grid-cols-1 gap-x-20 gap-y-16 text-center lg:grid-cols-3">
                            <a v-for="stat in stats" :key="stat.id" :href="stat.href" class="mx-auto flex max-w-xs flex-col gap-y-4 border border-gray-700 rounded-lg p-4 bg-gray-900">
                                <dt class="text-base leading-7 text-gray-400">{{ stat.description }}</dt>
                                <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{ stat.name }}</dd>
                            </a>
                        </dl>
                    </div>
            </div>
        <div class="py-16 sm:py-1 flex justify-center items-center">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 ">
                <dl class="grid grid-cols-1 gap-x-20 gap-y-16 text-center lg:grid-cols-2">
                    <a v-for="extra in extras" :key="extra.id" :href="extra.href" class="mx-auto flex max-w-xs flex-col gap-y-4 border border-gray-700 rounded-lg p-4 bg-gray-900 ">
                        <dt class="text-base leading-7 text-gray-400">{{ extra.description }}</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-white sm:text-5xl">{{ extra.name }}</dd>
                    </a>
                </dl>
            </div>
        </div>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
            </div>
        </main>
    </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { Bars3Icon, BellIcon, XMarkIcon, UserCircleIcon } from '@heroicons/vue/24/outline'
import NavButton from "@/Components/NavButton.vue";
import NavBar from "@/Components/NavBar.vue";

const stats = [
    { id: 1, name: '12º Ano', description: 'Física', href:'/10ano' },
    { id: 2, name: '11º Ano', description: 'Física e Quimica', href:'/10ano' },
    { id: 3, name: '10º Ano', description: 'Física e Quimica', href:'/10ano' },
]

const extras = [
    { id: 1, name: 'Exames', description: '', href:'/10ano' },
    { id: 2, name: 'Quizz', description: '', href:'https://www.google.com/forms/about/'},
]
</script>

<style>

</style>
