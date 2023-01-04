export default {
  methods: {
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    },
    determineType(field) {
      if (field['typeProps'] !== undefined) {
        return this.capitalizeFirstLetter(field['fieldType']) + 'Field';
      } else {
        console.log(this.capitalizeFirstLetter(field['fieldType']) + 'Field');
        return this.capitalizeFirstLetter(field['fieldType']) + 'Field';
      }
    }
  }
}
