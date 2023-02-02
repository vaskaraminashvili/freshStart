<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0">Modules List</h5>
    </template>
    <template v-slot:default>
      <div class="table-responsive scrollbar">
        <table class="table table-hover table-striped overflow-hidden">
          <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Managed</th>
            <th scope="col">Template</th>
            <th scope="col">Active</th>
            <th scope="col">Status</th>
            <th class="text-end" scope="col">Actions</th>
          </tr>
          </thead>
          <tbody>

          <tr class="align-middle" v-for="module in items" :key="module.id">
            <td class="text-nowrap">
              <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                  <img class="rounded-2" src="../../../../../public/myCms/assets/img/gallery/1.jpg" alt=""/>
                </div>
              </div>
            </td>
            <td>{{ module.name }}</td>
            <td><span class="badge badge-soft-primary">Default</span></td>
            <td><span class="badge" :class="managerStore.managedClass(module)">{{
                managerStore.managedText(module)
              }}</span>
            </td>
            <td><span class="badge badge-soft-primary">{{ module.template }}</span></td>
            <td><span class="badge" :class="managerStore.activeClass(module)">{{
                managerStore.activeText(module)
              }}</span></td>
            <td>
              <span class="badge badge rounded-pill d-block p-2 badge-soft-warning">
                Pending
                <span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span>
              </span>
            </td>
            <td class="text-end">
              <div class="dropdown font-sans-serif position-static">
                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button"
                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false">
                  <span class="fas fa-ellipsis-h fs--1"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-0">
                  <div class="py-2">
                    <a class="dropdown-item" href="#!">Edit</a>
                    <a class="dropdown-item text-danger" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
    </template>
  </Card>
</template>

<script>
import {useModuleManagerStore} from "@/scripts/stores/ModuleManagerStore.js";

export default {
  setup() {
    const managerStore = useModuleManagerStore()
    return {managerStore};
  },
  props: {
    items: Object,
  },
  // computed: {
  //   ...mapState(useModuleManagerStore, ['count']),
  // },
  // methods: {
  //   ...mapActions(useModuleManagerStore, ['testAction'])
  // },
}
</script>

<style scoped>

</style>
