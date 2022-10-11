<template>
  <div class="col-xl-3">
    <div class="mb-3">
      <label class="form-label" for="Search">{{ name }}</label>
      <input
        class="form-control"
        :id="name"
        type="search"
        :value="fieldValue(name)"
        :placeholder="name"
        @input="filter($event)"
      />
    </div>
  </div>
</template>

<script>
import _ from "lodash";

export default {
  props: {
    params: Object,
    name: {
      type: String,
      default: 'Default'
    },
  },
  methods: {
    filter: _.debounce(function (event) {
      this.$emit('filter', {field: event.target.id, value: event.target.value});
    }, 500),
    fieldValue(name) {
      if (this.params.search !== null && this.params.search[name] !== undefined) {
        return this.params.search[name];
      } else {
        return "";

      }
    },
  },
}
</script>

<style scoped>

</style>
