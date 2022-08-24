<script setup lang="ts">

import { Link } from '@inertiajs/inertia-vue3'
defineProps<{

}>()
</script>

<template>
    <div class="relative flex items-top justify-center min-h-screen bg-zinc-100">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <h2>this is AAAAAAAAAABOUT</h2>
            <hr>
            <Link href="/">Home</Link>
            <br>
            <Link href="/about">About</Link>

        </div>
    </div>
</template>
