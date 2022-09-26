<template>
  <div class="mb-3">
    <label class="form-label" for="Search">Filter</label>
    <input
      class="form-control"
      id="Search"
      type="search"
      placeholder="Name"
      @keyup="filter($event)"
    />
  </div>
</template>

<script>
export default {
  methods: {
      filter() {
        this.$emit('filter' , event.target.value);
      }
  },
}
</script>

<style scoped>

</style>
