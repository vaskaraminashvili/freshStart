<template>

  <form @submit.prevent="submit" class="needs-validation">
    <input type="hidden" name="model" v-model="customizable.model">
    <div class="row">
      <template v-for="(field,name) in customizable.fields">
        <component v-if="field['fieldType'] !== undefined"
                   :is="determineType(field)"
                   v-model="form[name]"
                   :error="form.errors[name]"
                   :form="form"
                   :label="capitalizeFirstLetter(name)"
        ></component>
        <component v-else
                   is="BaseInput"
                   v-model="form[name]"
                   :error="form.errors[name]"
                   :form="form"
                   :label="capitalizeFirstLetter(name)"
        ></component>
      </template>
    </div>
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

    <!--      <div class="mb-3 col-xl-4">-->
    <!--        <label class="form-label" for="email">Email address</label>-->
    <!--        <input-->
    <!--          class="form-control"-->
    <!--          id="email"-->
    <!--          type="email"-->
    <!--          v-model="form.email"-->
    <!--          placeholder="name@example.com"-->
    <!--        />-->
    <!--      </div>-->
    <!--      <div class="mb-3 col-xl-4">-->
    <!--        <label class="form-label" for="phone">Phone</label>-->
    <!--        <input-->
    <!--          class="form-control"-->
    <!--          id="phone"-->
    <!--          type="text"-->
    <!--          v-model="form.phone"-->
    <!--          placeholder="262-806-6198"-->
    <!--        />-->
    <!--      </div>-->
    <!--      <div class="mb-3 col-xl-4">-->
    <!--        <label class="form-label" for="address">Address</label>-->
    <!--        <input-->
    <!--          class="form-control"-->
    <!--          id="address"-->
    <!--          type="text"-->
    <!--          v-model="form.address"-->
    <!--          placeholder="0635 Gleichner Springs Carleyland, PA 58110"-->
    <!--        />-->
    <!--      </div>-->
    <!--      <div class="mb-3 col-xl-4">-->
    <!--        <label class="form-label" for="amount">Amount</label>-->
    <!--        <input-->
    <!--          class="form-control"-->
    <!--          id="amount"-->
    <!--          type="number"-->
    <!--          v-model="form.amount"-->
    <!--          placeholder="50"-->
    <!--        />-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-xl-4">-->
    <!--        <div class="form-check form-switch">-->
    <!--          <input-->
    <!--            class="form-check-input"-->
    <!--            id="flexSwitchCheckDefault"-->
    <!--            type="checkbox"-->
    <!--          />-->
    <!--          <label class="form-check-label" for="flexSwitchCheckDefault"-->
    <!--          >Default switch checkbox input</label-->
    <!--          >-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <div class="row">
      <div class="col-xl-4">
        <button class="btn btn-outline-success me-1 mb-1" type="submit">
          Success
        </button>
      </div>
    </div>
  </form>

</template>

<script>
import {useForm} from "@inertiajs/inertia-vue3";
import CustomToast from "@/views/components/admin/ui/customToast.vue";
import {useModuleStore} from "@/scripts/stores/ModuleStore.js";
import {mapState} from "pinia";
import moduleHelpers from "@/scripts/mixins/moduleHelpers.js";

export default {
  components: {CustomToast},
  props: {
    item: Object,
  },
  mixins: [moduleHelpers],
  setup(props) {
    let form = useForm(props.item.data);
    // Make it available inside methods
    return {form};
  },
  computed: {
    ...mapState(useModuleStore, ['customizable'])
  },
  methods: {
    submit() {

      this.form.transform((data) => ({
        ...data,
        model: this.customizable.model,
        wasSubmited: true,
      })).put(route("admin.dummies.update", this.form.id), {
        onSuccess: () => {
          this.toast.success("Dummy was updated");
        },
      });
    },
  },
};
</script>

<style scoped></style>
