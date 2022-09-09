<template>
  <Card>
    <template v-slot:header>
      <h5 class="mb-0" data-anchor="data-anchor">Edit Dummy</h5>
    </template>
    <template v-slot:default>
      <form @submit.prevent="form.put(route('admin.dummies.update', form.id))">
        <div class="row">
          <!-- <div class="mb-3 col-xl-4">
            <label class="form-label" for="name">Name</label>
            <input
              class="form-control"
              id="name"
              type="text"
              v-model="form.name"
              placeholder="Name"
            />
          </div> -->

          <BaseInput v-model="form.name" label="name" type="text" />

          <div class="mb-3 col-xl-4">
            <label class="form-label" for="email">Email address</label>
            <input
              class="form-control"
              id="email"
              type="email"
              v-model="form.email"
              placeholder="name@example.com"
            />
          </div>
          <div class="mb-3 col-xl-4">
            <label class="form-label" for="phone">Phone</label>
            <input
              class="form-control"
              id="phone"
              type="text"
              v-model="form.phone"
              placeholder="262-806-6198"
            />
          </div>
          <div class="mb-3 col-xl-4">
            <label class="form-label" for="address">Address</label>
            <input
              class="form-control"
              id="address"
              type="text"
              v-model="form.address"
              placeholder="0635 Gleichner Springs Carleyland, PA 58110"
            />
          </div>
          <div class="mb-3 col-xl-4">
            <label class="form-label" for="amount">Amount</label>
            <input
              class="form-control"
              id="amount"
              type="number"
              v-model="form.amount"
              placeholder="50"
            />
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="form-check form-switch">
              <input
                class="form-check-input"
                id="flexSwitchCheckDefault"
                type="checkbox"
              />
              <label class="form-check-label" for="flexSwitchCheckDefault"
                >Default switch checkbox input</label
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <button class="btn btn-outline-success me-1 mb-1" type="submit">
              Success
            </button>
          </div>
        </div>
      </form>
    </template>
  </Card>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import BaseInput from "@/views/components/admin/form/base-input.vue";

export default {
  components: { BaseInput },
  props: {
    dummy: Object,
  },
  setup(props) {
    const form = useForm(props.dummy);
    return { form };
  },
};
</script>

<style scoped></style>
