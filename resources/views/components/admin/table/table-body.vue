<template>
  <tbody>
  <tr
    class="align-middle"
    v-for="dummy in items.data"
    :key="dummy.id"
  >
    <template v-for="(field,name) in customizable.fields">
      <template v-if="field['type'] !== undefined">
        <component
          :is="dynamicComp(field['type'])"
          :value="dummy[name]"
        ></component>
      </template>
      <td class="text-nowrap" v-else>
        <div  class="ms-2">{{ dummy[name] }}</div>
      </td>
    </template>


<!--    <td>-->
<!--      <span-->
<!--        class="badge badge rounded-pill d-block p-2"-->
<!--        :class="-->
<!--          dummy.active ? 'badge-soft-success' : 'badge-soft-warning'-->
<!--        "-->
<!--      >-->
<!--        {{ dummy.active ? "Active" : "Not Active" }}-->
<!--        <span-->
<!--          class="ms-1 fas fa-check"-->
<!--          data-fa-transform="shrink-2"-->
<!--        ></span>-->
<!--      </span>-->
<!--    </td>-->
<!--    <td class="text-nowrap">${{ dummy.amount }}</td>-->
<!--    <td class="text-end">-->
<!--      <div class="d-flex">-->
<!--        <div>-->
<!--          <Link-->
<!--            :href="route('admin.dummies.edit', dummy.id)"-->
<!--            class="btn p-0"-->
<!--          >-->
<!--            <span class="text-500 fas fa-edit"></span>-->
<!--          </Link>-->
<!--        </div>-->
<!--        <div class="dropdown font-sans-serif position-static">-->
<!--          <button-->
<!--            class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal"-->
<!--            type="button"-->
<!--            data-bs-toggle="dropdown"-->
<!--            data-boundary="window"-->
<!--            aria-haspopup="true"-->
<!--            aria-expanded="false"-->
<!--          >-->
<!--            <span class="fas fa-ellipsis-h fs&#45;&#45;1"></span>-->
<!--          </button>-->
<!--          <div class="dropdown-menu dropdown-menu-end border py-0">-->
<!--            <div class="bg-white py-2">-->
<!--              <a class="dropdown-item" href="#!">Edit</a-->
<!--              ><a class="dropdown-item text-danger" href="#!"-->
<!--            >Delete</a-->
<!--            >-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </td>-->
  </tr>
  </tbody>
</template>

<script>
import {defineAsyncComponent} from "vue";
export default {
  props: {
    items: Object,
    customizable: {
      required: true,
      type: Object,
    }
  },
  methods: {
    dynamicComp (field) {
      return defineAsyncComponent(() => import(`@/views/components/admin/table/fields/${field}-field.vue`))
    }
  },
}
</script>

<style scoped>

</style>
