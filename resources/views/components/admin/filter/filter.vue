<template>
  <div class="row">
    <template v-for="(field,name) in this.customizable.fields" :key="name">
      <template v-if="field.filterable">
        <component v-if="field['filtertype'] !== undefined"
                   :is="determineType(field)"
                   :name="name"
        ></component>
        <component v-else
                   is="DefaultFilter"
                   :name="name"

        ></component>
      </template>

    </template>
  </div>
</template>

<script>
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState} from "pinia";

export default {
  props: {

  },
  computed: {
    ...mapState(useModuleStore, ['customizable'])
  },
  methods: {

    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    },
    determineType(field) {
      if (field['typeProps'] !== undefined) {
        return this.capitalizeFirstLetter(field['filtertype']) + 'Filter';
      } else {
        return this.capitalizeFirstLetter(field['filtertype']) + 'Filter';
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
