<template>
  <thead>
  <tr>
    <template v-for="(field,index) in $attrs.customizable.fields" :key="index">
      <th v-if="inArray(field,$attrs.customizable.sortable)"
          scope="col"
          class="sort"
          :data-sort="field"
          :class="[params.field == field ? params.direction : '']"
          @click="sort(field)"
      >{{ field }}
      </th>
      <th v-else>{{ field }}</th>
    </template>
    <th class="text-center" scope="col">Actions</th>

  </tr>
  </thead>
</template>

<script>
import {pickBy, debounce, throttle} from "lodash";

export default {
  props: {
    filters: Object,
  },
  data() {
    return {
      params: {
        search: this.filters.search,
        field: this.filters.field,
        direction: this.filters.direction,
      },
    }
  },
  methods: {
    sort(field) {
      this.params.field = field;
      this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
    },
    inArray(needle, haystack) {
      var length = haystack.length;
      for (var i = 0; i < length; i++) {
        if (haystack[i] == needle) return true;
      }
      return false;
    }
  },
  watch: {
    params: {
      handler: debounce(function () {
        let params = pickBy(this.params);
        this.$inertia.get(this.route("admin.dummies.index"), params, {
          replace: true,
          preserveState: true,
        });
      }, 200),
      deep: true,
    },
  },

}
</script>

<style scoped>
th::first-letter {
  text-transform: capitalize;
}
</style>
