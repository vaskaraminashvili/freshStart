<template>
  <tbody>
  <tr
    class="align-middle"
    v-for="item in items.data"
    :key="item.id"
  >
<!--    print customizable fileds -->
    <template v-for="(field,name) in customizable.fields">
<!--      <td>-->
<!--        <button @click="determineType(field['type'])">test</button>-->
<!--      </td>-->

      <template v-if="field['type'] !== undefined">
        <component
          is="money"
          :value="item[name]"
        ></component>
      </template>
      <td class="text-nowrap" v-else>
        <div  class="ms-2">{{ item[name] }}</div>
      </td>
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
  components:{
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
    dynamicComp (field) {
      // console.log(field);
      return defineAsyncComponent(() => import(`@/views/components/admin/table/fields/${field}-field.vue`))
    },
    // determineType(typeProps){
    //   let type = '';
    //   if (typeof typeProps == 'object'){
    //     // typeProps.map(function(item, index) {
    //     //   console.log(index, item)
    //     // })
    //     Object.entries(typeProps).map(([key, value]) => {
    //       if (key === 'type'){
    //         type = value;
    //       }
    //       console.log(key, value);
    //     })
    //     console.log(type);
    //     return type;
    //   }else{
    //     // console.log(typeProps);
    //     return typeProps;
    //   }
    // }
  },
}
</script>

<style scoped>

</style>
