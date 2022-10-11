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
            :value="fieldValue(name)"
            :placeholder="name"
            @input="filter($event)"
          />
        </div>
      </div>
    </template>
  </div>
</template>

<script>
import _ from "lodash";

export default {
  props: {
    params: Object,
    customizable: {
      type: Object,
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
    }
  },

}
</script>

<style scoped>
label, input::placeholder {
  text-transform: capitalize;
}
</style>
