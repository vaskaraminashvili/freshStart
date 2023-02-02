import {defineStore} from "pinia"

export const useModuleManagerStore = defineStore('module', {
  state: () => ({
    count: 33,

  }),
  getters: {
    doubleCount() {
      return 'test ' + this.count;
    },

  },
  actions: {
    managedText(item){
      return item.managed === 0 ? 'Not Managed' : 'Managed';
    },
    managedClass(item){
      return item.managed === 0 ? 'badge-soft-success' : 'badge-soft-danger';
    },
    activeText(item){
      return item.active === 0 ? 'Not Active' : 'Active';
    },
    activeClass(item){
      return item.active === 0 ? 'badge-soft-success' : 'badge-soft-danger';
    },
  },
})
