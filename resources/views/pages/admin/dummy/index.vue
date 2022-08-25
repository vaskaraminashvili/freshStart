<template>
    <Card>
        <template v-slot:header>
            <h5 class="mb-0" data-anchor="data-anchor">Dummies</h5>
        </template>
        <template v-slot:default>
            {{ msg }}
        </template>
    </Card>
</template>

<script setup>
import { ref } from 'vue'
const msg = ref('vaska')
</script>

<style lang="scss" scoped>
</style>
