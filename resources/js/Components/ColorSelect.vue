<script setup>
import { inject } from 'vue';

const {color, toggleMotif }= inject('color')


function toggleColor(value) {
    // motif.value = value;
    toggleMotif(value);
}

</script>

<template>
    <div class="mt-5 border-gray-900">
      <button @click="toggleColor('red')" class="bg-red-500 p-2" value="red">Red</button>
      <button @click="toggleColor('blue')" class="bg-blue-500 p-2" value="blue">Blue</button>
      <button @click="toggleColor('green')" class="bg-green-500 p-2" value="green">Green</button>
    </div>
</template>
