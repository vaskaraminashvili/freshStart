<template>
  <tbody>
  <tr
    class="align-middle"
    v-for="item in items.data"
    :key="item.id"
  >
<!--    print customizable fileds -->
    <template v-for="(field,name) in customizable.fields">
      <template v-if="field['type'] !== undefined">
        <component
          :is="dynamicComp(field['type'])"
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
      return defineAsyncComponent(() => import(`@/views/components/admin/table/fields/${field}-field.vue`))
    }
  },
}
</script>

<style scoped>

</style>
