<template>
  <Card>
    <template v-slot:header>
      <h5>Edit Module Manager</h5>
    </template>
    <template v-slot:default>
      <div class="row mb-xl-4">
        <div class="col-xl-3">
          <Card class="bg-gradient bg-light">
            <template v-slot:header>
              <h6>Type</h6>
            </template>
            <template v-slot:default>

              <h5>{{ managerStore.item.type }}</h5>
            </template>
          </Card>
        </div>
        <div class="col-xl-3">
          <Card class="bg-gradient bg-light">
            <template v-slot:header>
              <h6>Managed</h6>
            </template>
            <template v-slot:default>

              <h5>{{ managerStore.item.managed == 1 ? 'Managed' : 'Not Managed' }}</h5>
            </template>
          </Card>
        </div>
        <div class="col-xl-3">
          <Card class="bg-gradient bg-light">
            <template v-slot:header>
              <h6>Template</h6>
            </template>
            <template v-slot:default>

              <h5>{{ managerStore.item.template }}</h5>
            </template>
          </Card>
        </div>
        <div class="col-xl-3">
          <Card class="bg-gradient bg-light">
            <template v-slot:header>
              <h6>Is Active</h6>
            </template>
            <template v-slot:default>

              <h5>{{ managerStore.item.active == 1 ? 'Active' : 'Not Active' }}</h5>
            </template>
          </Card>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <ul class="nav nav-pills" id="pill-myTab" role="tablist">
            <li class="nav-item" v-for="(tab,index) in managerStore.moduleMethods" :key="index"
                @click="changeTab(tab)">
              <a class="nav-link"
                 :class="{ active: tab == activeTab }"
                 data-bs-toggle="tab"
                 :href="`#${tab}`"
                 role="tab" aria-selected="true">{{ tab }}</a>
            </li>

          </ul>
          <div class="tab-content border p-3 mt-3" id="pill-myTabContent">

            <div v-for="(tab,index) in managerStore.moduleMethods"
                 class="tab-pane fade show"
                 :class="{ active: tab == activeTab }"
                 :id="`#${tab}`"
                 role="tabpanel"
                 :key="index">
              {{ tab }}
            </div>

          </div>
        </div>
      </div>
    </template>
  </Card>
</template>

<script>
import {useModuleManagerStore} from "@/scripts/stores/ModuleManagerStore.js";

export default {
  props: {
    item: Object,
  },
  setup(props) {
    const managerStore = useModuleManagerStore()
    managerStore.assignItem(props.item)
    return {managerStore};
  },
  data() {
    return {
      activeTab: 'edit',
    }
  },
  methods: {
    changeTab(tab) {
      this.activeTab = tab
    }
  },
}
</script>

<style scoped>

</style>
