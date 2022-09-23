<template>
  <!-- filters  -->
  <div id="" class="d-flex flex-column">
    <div class="mb-3">
      <!--          <label class="form-label" for="Search">Filter</label>-->
      <!--          <input-->
      <!--            class="form-control"-->
      <!--            id="Search"-->
      <!--            type="search"-->
      <!--            placeholder="Name"-->
      <!--            v-model="params.search"-->
      <!--          />-->
      asd
    </div>
    <div class="mb-0">
      <!--          <label class="form-label" for="Search">Filter</label>-->
      <!--          <input-->
      <!--            class="form-control"-->
      <!--            id="Search"-->
      <!--            type="search"-->
      <!--            placeholder="Name"-->
      <!--            v-model="params.search"-->
      <!--          />-->
      <button class="btn btn-sm btn-falcon-warning me-1 " type="button" @click="reset">
        <span class="far fa-times-circle me-1" data-fa-transform="shrink-3"></span>
        Reset Filter
      </button>
    </div>
  </div>
  <!-- filters  -->
  <div class="table-responsive table-responsive-xxl scrollbar">
    <table
      class="table table-hover table-striped overflow-hidden"
      :data-list="dataList"
    >
      <TableHeader :filters="filters" :customizable="customizable"/>
      <TableBody :items="items" :customizable="customizable"/>

    </table>
  </div>
  <!-- when using recource and pagination links are located model.meta.links inside meta -->
  <Pagination :links="items.meta.links"></Pagination>
</template>

<script>
import TableHeader from "@/views/components/admin/table/table-header.vue";
import TableBody from "@/views/components/admin/table/table-body.vue";
import Pagination from "@/views/components/admin/ui/pagination.vue";
import {debounce, pickBy} from "lodash";
export default {
  components: {
    TableHeader,
    TableBody,
    Pagination,
  },
  props: {
    items: Object,
    filters: Object,
    customizable: Object,
  },
  computed: {
    dataList() {
      let listItem = {'valueNames': Object.keys(this.customizable.fields)};
      return JSON.stringify(listItem);
    }
  },
  methods: {
    reset: debounce(function()  {
        this.$inertia.get(this.route("admin.dummies.index"), '', {
          replace: true,
          preserveState: true,
        });
      }, 700),
  },

}
</script>

<style scoped>

</style>
