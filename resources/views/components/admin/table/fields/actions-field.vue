<template>
      <td class="text-end">
        <div class="d-flex">
          <div>
            <Link
              :href="route('admin.'+customizable.currentModel.plural+'.edit', item.id)"
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

</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true
    },
    customizable : Object,
  },
}
</script>

<style scoped>

</style>
