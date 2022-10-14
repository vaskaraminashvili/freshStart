<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Dummies</h5>
    </template>
    <template v-slot:default>

      <TableCustom
        :items="items"
        :filters="filters"
        :customizable="customizable"
      />
    </template>
  </Card>
</template>

<script>
import TableCustom from "@/views/components/admin/table/table-custom.vue";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState, mapActions} from 'pinia'

export default {
  beforeMount() {
    this.setupModule(this.customizable, this.filters)
  },
  components: {
    TableCustom
  },
  props: {
    items: Object,
    filters: Object,
    customizable: Object,
  },
  computed: {
    ...mapState(useModuleStore, ['count'])
  },
  methods: {
    ...mapActions(useModuleStore, ['setupModule'])
  },

};
</script>

<style lang="scss" scoped></style>
