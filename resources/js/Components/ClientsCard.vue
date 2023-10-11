<template>
    <div class=" rounded shadow drop-shadow-lg p-4" :class="{
        'bg-gray-200' :selectedColor === '' ,
        'bg-red-200' : selectedColor === 'red',
        'bg-blue-200' : selectedColor === 'blue',
        'bg-green-200' : selectedColor === 'green' }">
        <div class="flex justify-center">
            <img src="https://static-00.iconduck.com/assets.00/person-icon-1901x2048-a9h70k71.png
" alt="Client Image" class="max-w-sm max-h-36">
        </div>
        <div class="text-center mt-2">
            <h3 class="font-semibold text-lg">{{ client.last_name }}, {{ client.first_name }}</h3>
            <p class="text-gray-600">{{ client.address }}</p>
            <div>
                <button class=" text-white px-4 py-2 rounded shadow-lg" :class="{
                    'bg-gray-400' :selectedColor === '' ,
                    'bg-red-600' : selectedColor === 'red',
                    'bg-blue-600' : selectedColor === 'blue',
                    'bg-green-600' : selectedColor === 'green' }">
                Hi</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { inject } from 'vue'

const props = defineProps({
    client: Object
});

const selectedColor = inject('selectedColor')


</script>
