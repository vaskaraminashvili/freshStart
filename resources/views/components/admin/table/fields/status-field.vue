<template>
      <td>
        <span
          class="badge rounded-pill d-block p-2"
          :class="className"
        >
          {{ value }}
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
      type: String,
      default : "NULL"
    },
  },
  computed: {
    className() {
      let className = 'badge-soft-primary';
      const val = this.value;
      if (val === 'active'){
        className = 'badge-soft-success'
      }else if(val === 'pending'){
        className = 'badge-soft-warning'

      }else if(val === 'completed'){
        className = 'badge-soft-dark'
      }else if(val === 'undefined'){
        className = 'badge-soft-light'
      }
      return className;
    },
    icon(){
      let icon = 'fa-check';
      const val = this.value;
      if (val === 'active'){
        icon = 'fas fa-check'
      }else if(val === 'pending'){
        icon = 'far fa-hourglass'
      }else if(val === 'completed'){
        icon = 'fas fa-hand-peace'
      }else if(val === 'undefined'){
        icon = 'far fa-angry'
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
