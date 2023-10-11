<script setup>
import Layout from '@/Layouts/Layout.vue'
import { Head, Link } from '@inertiajs/vue3';


</script>

<template>
    <Head title="Suppliers"/>

    <Layout title="Suppliers">
        <div class="flex justify-between bg-gray-200">
            <h2 class="font-bold text-4xl text-gray-800 ml-8 mt-4 mb-4">Suppliers</h2>
        </div>

        <div class="mt-8">
            <div class="max-w-5xl mx-auto">
                <div class="flex justify-end">
                    <button class="bg-blue-500 p-2 rounded text-white">
                        <Link :href="route('suppliers.create')" :active="route().current('suppliers.create')" title="Clients">Add</Link>
                    </button>
                </div>
            </div>

        </div>
    </Layout>
</template>
