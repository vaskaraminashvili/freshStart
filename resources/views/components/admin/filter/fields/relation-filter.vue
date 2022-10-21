<template>
  <div class="col-xl-3">
    <div class="mb-3">
      <label class="form-label" for="Search">{{ name.toUpperCase() }}</label>
<!--      <input-->
<!--        class="form-control"-->
<!--        :id="name"-->
<!--        type="search"-->
<!--        :value="fieldValue(name)"-->
<!--        :placeholder="name"-->
<!--        @input="filter($event)"-->
<!--      />-->

      <select class="form-select" aria-label="Default select example">
        <option selected="">Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
</template>

<script>
import _ from "lodash";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState, mapActions} from "pinia";

export default {
  props: {
    params: Object,
    name: {
      type: String,
      default: 'Default'
    },
  },
  computed: {
    ...mapState(useModuleStore, ['filters'])
  },
  methods: {
    ...mapActions(useModuleStore, ['setSearchFilter']),
    filter: _.debounce(function (event) {
      this.setSearchFilter(event.target.id, event.target.value);
    }, 500),
    fieldValue(name) {
      if (this.filters.search !== null && this.filters.search[name] !== undefined) {
        return this.filters.search[name] !== undefined ? this.filters.search[name] : "";
      } else {
        return "";

      }
    },
  },
}
</script>

<style scoped>

</style>
