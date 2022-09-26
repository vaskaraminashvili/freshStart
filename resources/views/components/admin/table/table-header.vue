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
    params: Object,
    customizable: {
      required: true,
      type: Object,
    }
  },

  methods: {
    sort(name) {
      this.$emit('sort', name)
    },
    // inArray(needle, haystack) {
    //   var length = haystack.length;
    //   for (var i = 0; i < length; i++) {
    //     if (haystack[i] == needle) return true;
    //   }
    //   return false;
    // }
  },


}
</script>

<style scoped>
th::first-letter {
  text-transform: capitalize;
}
</style>
