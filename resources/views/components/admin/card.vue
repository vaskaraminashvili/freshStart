<template>

  <div class="card mb-3">
    <div class="card-header" v-if="hasHeaderSlot">
      <slot name="header">
        <h5>Card Header</h5>
      </slot>
    </div>
    <div class="card-body" :class="bodyClass" v-if="hasBodySlot">
      <slot></slot>
    </div>
  </div>

</template>

<script>
export default {
  props: {
    bodyClass: {
      type: String,
      default: 'bg-light'
    },
  },
  computed: {
    hasHeaderSlot() {
      return !!this.$slots.header;
    },
    hasBodySlot() {
      return !!this.$slots.default;
    }
  },
}
</script>

<style lang="scss" scoped>
</style>
