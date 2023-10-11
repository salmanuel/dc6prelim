<template>
    <Head title="Clients"/>
    <Layout title="Clients">


      <div class="flex justify-between bg-gray-200">
        <h2 class="font-bold text-4xl text-gray-800 ml-8 mt-4 mb-4">Clients</h2>
      </div>

      <div class="mt-8">

          <div class="max-w-5xl mx-auto ">

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 px-2">
              <ClientsCard v-for="client in clients.data" :client="client" :key="client.id"/>
            </div>

                <!-- <div class="grid grid-cols-1 md:grid-cols-5 gap-4 px-2">
                    <div v-for="client in clients.data" :key="client.id" class="bg-gray-200 rounded shadow p-4">
                        <div class="flex justify-center">
                            <img src="https://static-00.iconduck.com/assets.00/person-icon-1901x2048-a9h70k71.png" alt="Client Image" class="max-w-sm max-h-36">
                        </div>
                        <div class="text-center mt-2">
                        <h3 class="font-semibold text-lg">{{ client.last_name }}, {{ client.first_name }}</h3>
                        <p class="text-gray-600">{{ client.address }}</p>
                        </div>
                    </div>
                </div> -->


          </div>
      </div>

        <Pagination :links="clients.links" class="mt-6 mb-6 flex justify-center"/>
    </Layout>
</template>

<script setup>
import Layout from '@/Layouts/Layout.vue'
import ClientsCard from '@/Components/ClientsCard.vue'
import Pagination from '@/Layouts/Pagination.vue'
import { Head, Link } from '@inertiajs/vue3';


const props = defineProps({
    clients: Object
})

</script>
