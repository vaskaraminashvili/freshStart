<template>
      <td>
        <span
          class="badge rounded-pill d-block p-2"
          :class="className"
        >
          {{ value }}
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
  computed: {
    className() {
      var className = 'badge-soft-primary';
      const val = this.value;
      if (val === 'active'){
        className = 'badge-soft-success'
      }else if(val === 'pending'){
        className = 'badge-soft-warning'

      }else if(val === 'completed'){
        className = 'badge-soft-dark'
      }
      return className;
    }
  },
}
</script>

<style scoped>
.badge{
  text-transform: uppercase;
}
</style>
