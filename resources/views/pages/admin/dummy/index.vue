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
      <div class="table-responsive table-responsive-xxl scrollbar">
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
              <th class="text-end" scope="col">Actions</th>
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
              <td class="text-nowrap">${{ dummy.amount }}</td>
              <td class="text-end">
                <div class="d-flex">
                  <div>
                    <Link
                      :href="route('admin.dummies.edit', dummy.id)"
                      class="btn p-0"
                    >
                      <span class="text-500 fas fa-edit"></span>
                    </Link>
                  </div>
                  <div class="dropdown font-sans-serif position-static">
                    <button
                      class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"
                      type="button"
                      data-bs-toggle="dropdown"
                      data-boundary="window"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <span class="fas fa-ellipsis-h fs--1"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end border py-0">
                      <div class="bg-white py-2">
                        <a class="dropdown-item" href="#!">Edit</a
                        ><a class="dropdown-item text-danger" href="#!"
                          >Delete</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <Pagination :links="dummies.meta.links"></Pagination>
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
