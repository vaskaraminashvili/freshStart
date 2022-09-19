<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Dummies</h5>
    </template>
    <template v-slot:default>
      <!-- filters  -->
      <div id="" class="d-flex">
        <div class="mb-3">
<!--          <label class="form-label" for="Search">Filter</label>-->
<!--          <input-->
<!--            class="form-control"-->
<!--            id="Search"-->
<!--            type="search"-->
<!--            placeholder="Name"-->
<!--            v-model="params.search"-->
<!--          />-->
        </div>
      </div>
      <!-- filters  -->
      <div class="table-responsive table-responsive-xxl scrollbar">
        <table
          class="table table-hover table-striped overflow-hidden"
          data-list="{
                    'valueNames' :['name','email','age'],'page':5,'pagination':true}"
        >
          <TableHeader :filters="filters" :customizable="customizable"/>
          <TableBody :items="items" :customizable="customizable"/>

        </table>
      </div>
      <!-- when using recource and pagination links are located model.meta.links inside meta -->
      <Pagination :links="items.meta.links"></Pagination>
    </template>
  </Card>
</template>

<script>
import Pagination from "@/views/components/admin/ui/pagination.vue";
import TableHeader from "@/views/components/admin/table/table-header.vue";
import TableBody from "@/views/components/admin/table/table-body.vue";
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


};
</script>

<style lang="scss" scoped></style>
