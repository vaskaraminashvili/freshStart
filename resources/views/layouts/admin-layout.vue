<script setup lang="ts">
import { Link } from '@inertiajs/inertia-vue3'
// This is a persistent layout
// Include me with <template layout="default" />
</script>

<template>
    <h1>this is main layout</h1>
    <h1>this is main layout</h1>
    <h1>this is main asd asdasd</h1>
    <input type="text">

    <Link :href="route('admin.welcome')">Home</Link>
    <br>
    <Link :href="route('admin.about')">Aboutasd asd asd as</Link>
    <slot />
</template>
