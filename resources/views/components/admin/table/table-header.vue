<template>
  <thead>
  <tr>
    <template v-for="(field , name) in customizable.fields" :key="name">
      <th v-if="field.sortable"
          scope="col"
          class="sort"
          :data-sort="name"
          :class="[params.field == name ? params.direction : '']"
          @click="sort(name)"
      >{{ name }}
      </th>
      <th v-else>{{ name }}</th>
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
    customizable: {
      required: true,
      type: Object,
    }
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
      }, 500),
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
