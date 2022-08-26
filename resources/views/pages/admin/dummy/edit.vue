
<template>
  <div>
    {{dummy.id}}
    {{dummy.name}}
  </div>
</template>

<script>
    export default {
      props: {
        dummy: Object,
      },
    }
</script>

<style scoped>

</style>
