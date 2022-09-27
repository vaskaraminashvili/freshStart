<template>
  <div class="row">
    <template v-for="(field,name) in customizable.fields" :key="name">

      <div class="col-xl-3" v-if="field.filterable">
        <div class="mb-3">
          <label class="form-label" for="Search">{{ name }}</label>
          <input
            class="form-control"
            :id="name"
            type="search"
            :placeholder="name"
            @keyup="filter()"
          />
        </div>
      </div>
    </template>
  </div>
</template>

<script>
export default {
  props: {
    customizable: {
      type: Object,
    },
  },
  methods: {
    filter() {
      this.$emit('filter', event.target.value);
    }
  },
}
</script>

<style scoped>
label, input::placeholder{
  text-transform: capitalize;
}
</style>
