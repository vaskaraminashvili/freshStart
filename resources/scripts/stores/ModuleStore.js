import {defineStore} from "pinia"

export const useModuleStore = defineStore('module', {
  state: () => ({
    count: 0,
    customizable: {},
    filters: {
      search:{}
    },
  }),
  getters: {
    doubleCount() {
      return 'test ' + this.count;
    }
  },
  actions: {
    increment() {
      this.count++
    },
    setupModule(customizable, filters) {
      this.customizable = customizable
      this.filters = filters
      if (this.filters.search == null){
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
