<template>
      <td>
        <span
          class="badge badge rounded-pill d-block p-2"
          :class="
            value ? 'badge-soft-success' : 'badge-soft-warning'
          "
        >
          {{ value ? "Active" : "Not Active" }}
          <span
            class="ms-1 fas fa-check"
            data-fa-transform="shrink-2"
          ></span>
        </span>
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
