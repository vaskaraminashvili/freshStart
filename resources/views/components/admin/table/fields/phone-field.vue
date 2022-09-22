<template>
  <td class="text-nowrap text-center">
    <div class="ms-2">
      {{ typeProps['prefix']}}
      {{ value }}
      {{ typeProps['suffix']}}
    </div>
  </td>

</template>

<script>
export default {
  props: {
    value: {
      type: String,
      default : "NULL"
    },
    typeProps: String|Object
  },
}
</script>

<style scoped>

</style>
