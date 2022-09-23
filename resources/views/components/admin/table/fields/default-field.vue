<template>
  <td class="text-nowrap">
    <div class="ms-2"> {{ value }}</div>
  </td>

</template>

<script>
export default {
  props: {
    value: {
      type: String,
      default: "asd as"
    },
  },
}
</script>

<style scoped>

</style>
