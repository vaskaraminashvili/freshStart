import {defineStore} from "pinia"

export const useModuleManagerStore = defineStore('module', {
  state: () => ({
    item : {}


  }),
  getters: {
    doubleCount() {
      return 'test ' + this.count;
    },

  },
  actions: {
    assignItem(item){
      return this.item = item
    },
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
