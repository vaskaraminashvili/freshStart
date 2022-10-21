<template>
      <td>
        <span
          class="badge rounded-pill d-block p-2"
          :class="
            value ? 'badge-soft-success' : 'badge-soft-warning'
          "
        >
          {{ value ? "Active" : "Not Active" }}
          <span
            class="ms-1 fa-lg"
            :class="icon"
            data-fa-transform="shrink-2"
          ></span>
        </span>
      </td>

</template>

<script>
export default {
  props: {
    value: {
      type: Boolean,
      default : "NULL"
    },
  },
  computed: {
    icon(){
      let icon = 'fa-check';
      if (this.value){
        icon = 'fas fa-check'
      }else{
        icon = 'fas fa-times'
      }
      return icon;
    }
  },
}
</script>

<style scoped>
.badge{
  text-transform: uppercase;
}
</style>
