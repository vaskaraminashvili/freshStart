export default {
  props: {
    label: {
      type: String,
      default: "",
    },
    modelValue: {
      type: [String, Number],
      default: "",
    },
    error : String,
  },
  methods: {
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    },
    determineType(field) {
      if (field['typeProps'] !== undefined) {
        return this.capitalizeFirstLetter(field['fieldType']) + 'Field';
      } else {
        return this.capitalizeFirstLetter(field['fieldType']) + 'Field';
      }
    }
  }
}
