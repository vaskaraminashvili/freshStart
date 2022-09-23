<template>
  <tbody>
  <tr
    class="align-middle"
    v-for="item in items.data"
    :key="item.id"
  >
    <!--    print customizable fileds -->
    <template v-for="(field,name) in customizable.fields">
      <component v-if="field['type'] !== undefined"
                 :is="determineType(field)"
                 :value="item[name]"
                 :typeProps="field['typeProps'] !== undefined ? field['typeProps'] : ''"
      ></component>
      <component v-else
                 :is="dynamicComp('default')"
                 :value="item[name]"
                 :typeProps="field['typeProps'] !== undefined ? field['typeProps'] : ''"
      ></component>

    </template>
    <!--    print customizable fileds -->
    <ActionsField :item="item" :customizable="customizable"></ActionsField>

  </tr>
  </tbody>
</template>

<script>
import {defineAsyncComponent} from "vue";
import ActionsField from "@/views/components/admin/table/fields/actions-field.vue";

export default {
  components: {
    ActionsField
  },
  props: {
    items: Object,
    customizable: {
      required: true,
      type: Object,
    }
  },
  methods: {
    dynamicComp(fieldName) {
      return defineAsyncComponent(() => import(`@/views/components/admin/table/fields/${fieldName}-field.vue`))
    },
    determineType(field) {
      if (field['typeProps'] !== undefined) {
        // console.log('do something');
        // let type = '';
        // if (typeof typeProps == 'object'){
        //   // typeProps.map(function(item, index) {
        //   //   console.log(index, item)
        //   // })
        //   Object.entries(typeProps).map(([key, value]) => {
        //     if (key === 'type'){
        //       type = value;
        //     }
        //     console.log(key, value);
        //   })
        //   console.log(type);
        //   return type;
        // }else{
        //   // console.log(typeProps);
        //   return typeProps;
        // }

        return this.dynamicComp(field['type'])
      } else {
        return this.dynamicComp(field['type'])

      }
    }
  },
}
</script>

<style scoped>

</style>
