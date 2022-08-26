<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Dummies</h5>
    </template>
    <template v-slot:default>
      <!-- filters  -->
      <div id="" class="d-flex">
        <div class="mb-3">
          <label class="form-label" for="Search">Filter</label>
          <input
            class="form-control"
            id="Search"
            type="search"
            placeholder="Name"
            v-model="params.search"
          />
        </div>
      </div>
      <!-- filters  -->
      <div class="table-responsive scrollbar">
        <table
          class="table table-hover table-striped overflow-hidden"
          data-list="{
                    'valueNames' :['name','email','age'],'page':5,'pagination':true}"
        >
          <thead>
            <tr>
              <th
                @click="sort('name')"
                scope="col"
                class="sort"
                :class="[params.field == 'name' ? params.direction : '']"
                data-sort="name"
              >
                Name
              </th>
              <th
                @click="sort('email')"
                scope="col"
                class="sort"
                :class="[params.field == 'email' ? params.direction : '']"
                data-sort="email"
              >
                Email
              </th>
              <th scope="col" class="sort" data-sort="name">Phone</th>
              <th scope="col" class="sort" data-sort="name">Address</th>
              <th scope="col" class="sort" data-sort="name">Status</th>
              <th class="text-end" scope="col">Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="align-middle"
              v-for="dummy in dummies.data"
              :key="dummy.id"
            >
              <td class="text-nowrap">
                <div class="ms-2">{{ dummy.name }}</div>
              </td>
              <td class="text-nowrap">{{ dummy.email }}</td>
              <td class="text-nowrap">{{ dummy.phone }}</td>
              <td class="text-nowrap">{{ dummy.address }}</td>
              <td>
                <span
                  class="badge badge rounded-pill d-block p-2 badge-soft-success"
                  >Completed<span
                    class="ms-1 fas fa-check"
                    data-fa-transform="shrink-2"
                  ></span
                ></span>
              </td>
              <td class="text-end">${{ dummy.amount }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <Pagination :links="dummies.links"></Pagination>
    </template>
  </Card>
</template>

<script>
import Pagination from "@/views/components/admin/ui/pagination.vue";
import { pickBy, debounce, throttle } from "lodash";
export default {
  components: {
    Pagination,
  },
  props: {
    dummies: Object,
    filters: Object,
  },
  data() {
    return {
      params: {
        search: this.filters.search,
        field: this.filters.field,
        direction: this.filters.direction,
      },
    };
  },
  methods: {
    sort(field) {
      this.params.field = field;
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
      }, 200),
      deep: true,
    },
  },
};
</script>

<style lang="scss" scoped></style>
