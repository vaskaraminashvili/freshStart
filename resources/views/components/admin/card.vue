<template>
    <div class="card mb-3">
        <div class="card-header" v-if="hasHeaderSlot">
            <slot name="header">
                <h5>Card Header</h5>
            </slot>
        </div>
        <div class="card-body bg-light">
            <slot></slot>

        </div>
    </div>
</template>

<script >
export default {
    data() {
        return {

        }
    },
    computed: {
        hasHeaderSlot() {
            return !!this.$slots.header;
        }
    },
}
</script>

<style lang="scss" scoped>
</style>
