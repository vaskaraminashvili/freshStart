<template>
  <div class="mb-3" :class="`col-xl-${col}`">
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
import fromFieldHelpers from "@/scripts/mixins/formFieldHelper.js";

export default {

  mixins: [fromFieldHelpers],
};
</script>

<style lang="scss" scoped>
.invalid-feedback {
  display: block !important;
}


</style>
