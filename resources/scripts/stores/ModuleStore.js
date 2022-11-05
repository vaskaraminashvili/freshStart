import {defineStore} from "pinia"

export const useModuleStore = defineStore('module', {
  state: () => ({
    count: 0,
    customizable: {},
    relations: {},
    filters: {
      search: {}
    },
  }),
  getters: {
    doubleCount() {
      return 'test ' + this.count;
    },

  },
  actions: {
    increment() {
      this.count++
    },
    fieldName(name) {
      if (this.customizable.fields[name]?.filterProps) {
        return this.customizable.fields[name]['filterProps']['relation']['name'];
      } else {
        return name;
      }
    },
    setupModule(customizable, filters, relations) {
      this.customizable = customizable
      this.filters = filters
      this.relations = relations
      if (this.filters.search == null) {
        this.filters.search = {}
      }
    },
    setSearchFilter(field, value) {
      if (value === "" || value === undefined) {
        delete this.filters.search[field];
      } else {
        this.filters.search[field] = value;
      }
    }
  },
})
