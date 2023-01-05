<template>
  <div class="mb-3 col-xl-4">
    <label class="form-label" :for="label">{{ label }}</label>
    <input
      class="form-control"
      :class="{'is-invalid' : error}"
      :id="label"
      :placeholder="label"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"

    />
    <div v-if="error" class="invalid-feedback">{{ error }}</div>
  </div>

</template>

<script>
export default {
  props: {
    label: {
      type: String,
      default: "",
    },
    modelValue: {
      type: [String, Number],
      default: "",
    },
    error : String,
  },
};
</script>

<style lang="scss" scoped>
.invalid-feedback {
  display: block !important;
}


</style>
