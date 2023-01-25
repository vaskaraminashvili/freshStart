<template>
  <div class="mb-3 col-xl-12" >
    <template v-if="currentField.options">
      <template v-for="(option,index) in currentField.options" :key="index">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox"
                 :class="{'is-invalid' : error}"
                 :id="index"
                 @change="onChange"
                 :value="index"
                 v-model="checkedItems"/>
          <label class="form-check-label" :for="index">{{ option }}</label>
          <div v-if="error" class="invalid-feedback">{{ error }}</div>
        </div>
      </template>
    </template>
    <template v-else>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox"
               :class="{'is-invalid' : error}"
               :id="label"
               :placeholder="label"
               @change="$emit('update:modelValue', $event.target.checked)"
               :checked="modelValue"/>
        <label class="form-check-label" :for="label">{{ label }}</label>
        <div v-if="error" class="invalid-feedback">{{ error }}</div>
      </div>

    </template>
  </div>
</template>

<script>
import fromFieldHelpers from "@/scripts/mixins/formFieldHelper.js";

export default {

  mixins: [fromFieldHelpers],
  data() {
    return {
      checkedItems: this.modelValue !== null && typeof Array.isArray(this.modelValue)? this.modelValue : [],
    }
  },
  methods: {
    onChange(event, emit) {
      console.log(event.target.value)
      this.$emit('update:modelValue', this.checkedItems)
    }
  },
};
</script>

<style scoped>

</style>
