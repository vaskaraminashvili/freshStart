<template>
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
  <div class="table-responsive table-responsive-xxl scrollbar">
    <table
      class="table table-hover table-striped overflow-hidden"
      :data-list="dataList"
    >
      <TableHeader :filters="filters" :params="params" :customizable="customizable" @sort="sort"/>
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
import Filter from "@/views/components/admin/filter/filter.vue"
import {debounce, pickBy} from "lodash";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState} from "pinia";

export default {
  components: {
    Filter,
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
    ...mapState(useModuleStore, {
      fields : "customizable",
      filt : "filters",
}),
    dataList() {
      let listItem = {'valueNames': Object.keys(this.customizable.fields)};
      return JSON.stringify(listItem);
    }
  },
  data() {
    return {
      params: {
        search:  this.filters.search === null ?  {} : this.filters.search ,
        field: this.filters.field,
        direction: this.filters.direction,
      },
    }
  },
  methods: {
    reset: debounce(function () {
      this.$inertia.get(this.route("admin.dummies.index"), '', {
        replace: true,
        preserveState: true,
      });
      this.params.search = {};
    }, 700),

    sort(name) {
      this.params.field = name;
      this.params.direction = this.params.direction === "asc" ? "desc" : "asc";
    },

  },

  watch: {
    params: {
      handler: debounce(function () {
        let params = pickBy(this.params);
        this.$inertia.get(this.route("admin.dummies.index"), params, {
          replace: true,
          preserveState: true,
        });
      }, 500),
      deep: true,
    },
  },
}
</script>

<style scoped>

</style>
