<template>
  <td class="text-nowrap text-center">
    <div class="ms-2">$ {{ value }}</div>
  </td>

</template>

<script>
export default {
  props: {
    value: {
      type: String,
      default : "NULL"
    },
  },
}
</script>

<style scoped>

</style>
