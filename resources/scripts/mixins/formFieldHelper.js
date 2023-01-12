import {mapState} from "pinia";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";

export default {
  props: {
    form: Object,
    label: {
      type: String,
      default: "",
    },
    modelValue: {
      type: [String, Number],
      default: "",
    },
    error: String,
  },
  computed: {
    ...mapState(useModuleStore, {
      fields: "customizable"
    }),
    col(){
      const field = this.label.toLowerCase();
      if(this.fields.fields[field] !== undefined && this.fields.fields[field]['col'] !== undefined){
        return this.fields.fields[field]['col']
      }
      return 4;
    },
    currentField(){
      const field = this.label.toLowerCase();
      return this.fields.fields[field]
    }
  },

}
