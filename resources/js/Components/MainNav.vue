<script setup>
import { Link } from '@inertiajs/vue3';

const {hidden} = defineProps (['hidden'])
</script>

<template>

    <div class="main-nav">
        <Link :href="route('dashboard')" :active="route().current('dashboard')" title="Dashboard">
            <i class="fa fa-home"></i> <span :hidden="hidden">Dashboard</span>
        </Link>
        <Link :href="route('clients')" :active="route().current('clients')" title="Clients">
            <i class="fa-solid fa-user"></i> <span :hidden="hidden">Clients</span>
        </Link>
        <Link v-if="$page.props.auth.user.permissions.includes('manage-suppliers')" :href="route('suppliers')" :active="route().current('suppliers')" title="Suppliers">
            <i class="fa-solid fa-user"></i> <span :hidden="hidden">Suppliers</span>
        </Link>
        <Link :href="route('logout')" method="post" title="Logout">
            <i class="fa-solid fa-right-from-bracket"></i> <span :hidden="hidden">Logout</span>
        </Link>
    </div>

</template>
