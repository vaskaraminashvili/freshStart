<script setup lang="ts">

import { Link } from '@inertiajs/inertia-vue3'
defineProps<{
    test: String,
}>()
</script>

<template>
    <div class="relative flex items-top justify-center min-h-screen bg-zinc-100">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <h2>this is sad asd as</h2>
            <Link href="/">Home</Link>
            <br>
            <Link :href="route('about', [1])">Aboutasd asd asd as</Link>


            <hr>
            {{ test }}
        </div>
    </div>
</template>
