<template>
  <div class="mb-3 col-xl-12" >
    <template v-if="currentField.options">
      <template v-for="(option,index) in currentField.options" :key="index">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox"
                 :class="{'is-invalid' : error}"
                 :id="index"
                 @change="onChange"
                 :checked="modelValue === option"
                 :value="option"
                 :name="label.toLocaleLowerCase()"/>
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
  methods: {
      onChange(event ,emit) {
        console.log(event.target.value)
        this.$emit('update:modelValue', event.target.value)
      }
  },
};
</script>

<style scoped>

</style>
