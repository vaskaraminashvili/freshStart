import {mapState} from "pinia";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import axios from "axios";

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
  methods: {
    async getItemOptions() {
      if (this.currentField['options']) {
        this.options = this.currentField.options;
      } else if (this.currentField['fromModel']) {
        this.options = await axios.post('admin/componentData', this.currentField['fromModel'])
          .then(response => response.data)
          .catch(function (error) {
            console.log(error);
          });
      }
    },
  },
  data() {
    return {
      options: []
    }
  },
  computed: {
    ...mapState(useModuleStore, {
      fields: "customizable"
    }),
    col() {
      const field = this.label.toLowerCase();
      if (this.fields.fields[field] !== undefined && this.fields.fields[field]['col'] !== undefined) {
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
