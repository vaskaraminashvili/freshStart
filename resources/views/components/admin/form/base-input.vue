<template>
  <div class="mb-3 col-xl-4">
    <label class="form-label" :for="label">{{ label }}</label>
    <input
      class="form-control"
      :id="label"
      :placeholder="label"
      :value="modelValue"
      @input="$emit('update:modelValue', $event.target.value)"
    />
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
  },
};
</script>

<style lang="scss" scoped></style>
