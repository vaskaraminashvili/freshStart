<template>
  <Card>
    <template v-slot:header>
      <h5>Edit Module Manager</h5>
    </template>
    <template v-slot:default>
      <div class="row">
        <div class="col-xl-6">
          <Card class="" body-class="">
            <template v-slot:header>
              <h5>test</h5>
            </template>
          </Card>
        </div>
      </div>
    </template>
  </Card>
</template>

<script>
import {useModuleManagerStore} from "@/scripts/stores/ModuleManagerStore.js";
import Card from "@/views/components/admin/card.vue";

export default {
  components: {Card},
  props: {
    item: Object
  },
  mounted() {
    const managerStore = useModuleManagerStore();
    managerStore.assignItem(this.item)
    return {managerStore}
  }
}
</script>

<style scoped>

</style>
