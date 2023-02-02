<template>
  <Card>
    <template v-slot:header>
      <h5>Edit Module Manager</h5>
    </template>
    <template v-slot:default>
      <div class="row">
        <div class="col-xl-3">
          <Card class="" body-class="">
            <template v-slot:header>
              <h5>{{ managerStore.item.name }}</h5>
            </template>
          </Card>
        </div>
      </div>
    </template>
  </Card>
</template>

<script>
import {useModuleManagerStore} from "@/scripts/stores/ModuleManagerStore.js";

export default {

  setup() {
    const managerStore = useModuleManagerStore();
    return {managerStore}
  }
}
</script>

<style scoped>

</style>
