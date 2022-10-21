<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Dummies</h5>
    </template>
    <template v-slot:default>
      <!-- filters  -->
      <div id="" class="d-flex flex-column">
        <Filter :customizable="customizable"/>
        <div class="mb-0">
          <button class="btn btn-sm btn-falcon-warning me-1 " type="button" @click="reset">
            <span class="far fa-times-circle me-1" data-fa-transform="shrink-3"></span>
            Reset Filter
          </button>
        </div>
      </div>
      <!-- filters  -->
    </template>
  </Card>
  <Card>

    <TableCustom
      :items="items"
      :filters="filters"
      :customizable="customizable"
    />
  </Card>
</template>

<script>
import Filter from "@/views/components/admin/filter/filter.vue"

import TableCustom from "@/views/components/admin/table/table-custom.vue";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState, mapActions} from 'pinia'
import Card from "../../../components/admin/card.vue";

export default {
  beforeMount() {
    this.setupModule(this.customizable, this.filters)
  },
  components: {
    Card,
    TableCustom,
    Filter
  },
  props: {
    items: Object,
    filters: Object,
    customizable: Object,
    relations: {
      type: Object,
      default: null
    },
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
