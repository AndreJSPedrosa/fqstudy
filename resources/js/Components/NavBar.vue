<script setup>

import {Bars3Icon, UserCircleIcon, XMarkIcon} from "@heroicons/vue/24/outline/index.js";
import {Disclosure, DisclosureButton} from "@headlessui/vue";
import NavButton from "@/Components/NavButton.vue";
</script>

<template>
    <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <NavButton php-version="8" laravel-version="8" label="12º Ano"></NavButton>
                    <div style="margin-right: 12px;"></div>
                    <NavButton php-version="8" laravel-version="8" label="11º Ano"></NavButton>
                    <div style="margin-right: 12px;"></div>
                    <NavButton php-version="8" laravel-version="8" label="10º Ano"></NavButton>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6 space-x-4 ">

                        <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5" />
                            <span class="sr-only">View notifications</span>
                            <UserCircleIcon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <DisclosureButton class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                        <span class="absolute -inset-0.5" />
                        <span class="sr-only">Open main menu</span>
                        <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
                        <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
                    </DisclosureButton>
                </div>
            </div>
        </div>
    </Disclosure>
</template>

<style scoped>

</style>
