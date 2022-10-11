<template>
  <div class="row">
    <template v-for="(field,name) in this.customizable.fields" :key="name">
      <template v-if="field.filterable">
        <component v-if="field['filtertype'] !== undefined"
                   :is="determineType(field)"
                   :name="name" :params="params" @filter="filter"
        ></component>
        <component v-else
                   is="DefaultFilter"
                   :name="name" :params="params" @filter="filter"

        ></component>
      </template>

    </template>
  </div>
</template>

<script>

export default {
  props: {
    params: Object,
    customizable: {
      type: Object,
    },
  },
  methods: {
    filter(object){
      this.$emit('filter', {field: object.field, value: object.value});
    },
    capitalizeFirstLetter(string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    },
    determineType(field) {
      console.log(field)
      console.log(field['filtertype'])
      if (field['typeProps'] !== undefined) {
        return this.capitalizeFirstLetter(field['filtertype']) + 'Filter';
      } else {
        return this.capitalizeFirstLetter(field['filtertype']) + 'Filter';
      }
    }

  },
}
</script>

<style scoped>
label, input::placeholder {
  text-transform: capitalize;
}
</style>
