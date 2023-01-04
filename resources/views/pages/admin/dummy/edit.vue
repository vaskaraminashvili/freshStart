<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Edit Dummy</h5>
    </template>
    <template v-slot:default>
        <ModuleEdit :item="item"></ModuleEdit>
    </template>
  </Card>
</template>

<script>
import ModuleEdit from "@/views/components/admin/module/module-edit.vue";
import {mapActions, mapState} from "pinia";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";

export default {
  beforeMount() {
    this.setupModule(this.customizable)
  },
  components: {ModuleEdit},
  props: {
    customizable: Object,
    item: Object,
  },
  computed: {
    ...mapState(useModuleStore, ['count'])
  },
  methods: {
    ...mapActions(useModuleStore, ['setupModule'])
  },


};
</script>

<style scoped></style>
