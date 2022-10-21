<template>
  <div class="col-xl-3">
    <div class="mb-3">
      <label class="form-label" for="Search">{{ name.toUpperCase() }}</label>
      <select class="form-select" :id="name" @change="filter($event)">
        <option selected value="">Open this select menu</option>
        <option :value="option.id" :selected="selected === option.id" v-for="option in fieldOptions"
                :key="option.id">{{ option.name.toUpperCase() }}
        </option>

      </select>
    </div>
  </div>
</template>

<script>
import _ from "lodash";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState, mapActions} from "pinia";
import pluralize from 'pluralize'


export default {
  props: {
    name: {
      type: String,
      default: 'Default'
    },
  },
  data() {
    return {
      selected: "",
    }
  },
  computed: {
    ...mapState(useModuleStore, ['relations', 'filters']),
    fieldOptions() {
      let current_field = pluralize(this.name, 0);
      if (this.relations.hasOwnProperty(current_field)) {
        return this.relations[current_field]
      }
    }
  },
  methods: {
    ...mapActions(useModuleStore, ['setSearchFilter']),
    filter: _.debounce(function (event) {
      this.setSearchFilter(event.target.id, event.target.value);
      this.selected = event.target.value
    }, 200),
    // fieldValue(name, value) {
    //   if (this.filters.search !== null && this.filters.search[name] !== undefined) {
    //
    //     return this.filters.search[name] !== undefined && this.filters.search[name] === value ? true : false;
    //   } else {
    //     return "";
    //
    //   }
    // },
  },

}
</script>

<style scoped>

</style>
