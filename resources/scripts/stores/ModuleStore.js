import {defineStore} from "pinia"
export const useModuleStore = defineStore('module', {
  state: () => ({
    count : 0
  }),
  getters: {
    doubleCount(){
      return 'test ' + this.count;
    }
  },
  actions: {
    increment() {
      this.count++
    },
  },
})
