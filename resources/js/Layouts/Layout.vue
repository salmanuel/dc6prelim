<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import { Link } from '@inertiajs/vue3';
    import { provide, ref } from 'vue';

    let width = ref('w-[250px]')
    let hide = ref(false)

    let selectedColor = ref('')


    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[100px]'
            hide.value = true
        }else {
            width.value = ['w-[250px]']
            hide.value = false
        }
    }

    function toggleMotif(color) {
        selectedColor.value = color
    }

    provide('selectedColor', selectedColor)
</script>

<template>

    <div class="flex min-h-screen">
        <div id="sidebar" class="p-6 duration-500" :class="[width], {
                'bg-gray-900' : selectedColor === '',
                'bg-red-600' : selectedColor === 'red',
                'bg-blue-600' : selectedColor === 'blue',
                'bg-green-600' : selectedColor === 'green'
            }" style="position: relative;">
            <button class="text-xl text-white" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="mb-6" id="branding" :hidden="hide">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/376393481_3654353874810668_2387458937906500346_n.png?_nc_cat=105&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeEcpdrgZNQme6D9d3qskYm_HkKWApSL9ZseQpYClIv1mwDGNOXwun8B-htVB7GkKgN0bn8Q4EuQtcZudYAud1YC&_nc_ohc=un9q_SYxwX8AX-nKCfC&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdT7WDcwDG-T_e70keP_fD8s4zOS1ikZ4RtZJPrkLMXwQg&oe=6528C5A6
" alt="Logo"
                    class="w-[170px] h-[170px] mx-auto rounded-full object-cover">

            </div>
            <hr class="border-gray-600" :hidden="hide">

            <MainNav :hidden="hide"></MainNav>
            <div class="mt-8" :hidden="hide">
                <div class="flex gap-2" >
                    <button @click="toggleMotif('red')" class="bg-red-400 px-4 py-2 rounded outline outline-offset-2 outline-1 outline-red-400" :class="{ 'bg-red-900 text-white': selectedColor === 'red' }">Red</button>
                    <button @click="toggleMotif('blue')" class="bg-blue-400 px-4 py-2 rounded outline outline-offset-2 outline-1 outline-blue-400" :class="{ 'bg-blue-900 text-white': selectedColor === 'blue' }">Blue</button>
                    <button @click="toggleMotif('green')" class="bg-green-400 px-4 py-2 rounded outline outline-offset-2 outline-1 outline-green-400" :class="{ 'bg-green-900 text-white': selectedColor === 'green' }">Green</button>
                </div>
            </div>
    </div>
    <div id="container" class="flex-1">
        <slot />


        </div>

    </div>

</template>
