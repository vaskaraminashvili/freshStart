import {defineStore} from "pinia"

export const useModuleStore = defineStore('module', {
  state: () => ({
    count: 33,
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
      if (customizable !== undefined){
        this.customizable = customizable
      }
      if (filters !== undefined){
        this.filters = filters
        if (this.filters.search == null) {
          this.filters.search = {}
        }
      }
      if (relations !== undefined){
        this.relations = relations
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
