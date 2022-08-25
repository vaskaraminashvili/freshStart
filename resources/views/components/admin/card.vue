<template>
    <div class="card mb-3">
        <div class="card-header">
            <slot name="header">
                <h5>Card Header</h5>
            </slot>
        </div>
        <div class="card-body bg-light">
            <slot></slot>

        </div>
    </div>
</template>

<script setup>

</script>

<style lang="scss" scoped>
</style>
