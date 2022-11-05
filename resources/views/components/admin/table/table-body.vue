<template>
  <tbody>
  <tr
    class="align-middle"
    v-for="item in items.data"
    :key="item.id"
  >
    <!--    print customizable fileds -->
    <template v-for="(field,name) in customizable.fields">
      <component v-if="field['fieldType'] !== undefined"
                 :is="determineType(field)"
                 :value="item[name]"
                 :typeProps="field['typeProps'] !== undefined ? field['typeProps'] : ''"
      ></component>
      <component v-else
                 is="DefaultField"
                 :value="item[name]"
                 :typeProps="field['typeProps'] !== undefined ? field['typeProps'] : ''"
      ></component>
      <!--      <component is="DefaultField"></component>-->
    </template>
    <!--    print customizable fileds -->
    <ActionsField :item="item" :customizable="customizable"></ActionsField>

  </tr>
  </tbody>
</template>

<script>
// import {defineAsyncComponent} from "vue";

export default {

  props: {
    items: Object,
    customizable: {
      required: true,
      type: Object,
    }
  },
  methods: {
    // dynamicComp(fieldName) {
    //   return defineAsyncComponent(() => import(`@/views/components/admin/table/fields/${fieldName}-field.vue`))
    // },
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
  },
}
</script>

<style scoped>

</style>
