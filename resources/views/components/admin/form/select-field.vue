<template>

  <div class="mb-3" :class="`col-xl-${col}`">
    <label :for="label">Multiple</label>
    <select class="form-select js-choice"
            :id="label"
            multiple="multiple"
            :name="label"
            @change="onChange($event)"
            v-model="selectedItems">
      <option value="">Select Option</option>
      <option v-for="(option,index) in options" v-text="option" :value="index"></option>
    </select>
  </div>
</template>

<script>
import '@/../public/myCms/vendors/choices/choices.min.css';
import '@/../public/myCms/vendors/choices/choices.min.js';
import fromFieldHelpers from "@/scripts/mixins/formFieldHelper.js";

export default {
  mixins: [fromFieldHelpers],
  async mounted() {
    await this.getItemOptions();
    const element = document.querySelector('.js-choice');
    new Choices(element);
  },
  data() {
    return {
      selectedItems: this.modelValue !== null && typeof Array.isArray(this.modelValue) ? this.modelValue : [],
    }
  },
  methods: {
    onChange(event, emit) {
      this.$emit('update:modelValue', this.selectedItems)
    }
  },
}
</script>

<style scoped>
</style>
