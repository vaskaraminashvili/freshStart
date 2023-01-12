<template>
  <div class="mb-3 col-xl-12" >
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox"
             :class="{'is-invalid' : error}"
             :id="label"
             :placeholder="label"
             @change="$emit('update:modelValue', $event.target.checked)"
             :checked="modelValue" />
      <label class="form-check-label" :for="label">{{ label }}</label>
      <div v-if="error" class="invalid-feedback">{{ error }}</div>
    </div>
  </div>
</template>

<script>
import fromFieldHelpers from "@/scripts/mixins/formFieldHelper.js";

export default {

  mixins: [fromFieldHelpers],
};
</script>

<style scoped>

</style>
