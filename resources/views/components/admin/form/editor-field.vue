<template>
  <div class="mb-3 col-xl-4">
      <textarea class="tinymce d-none" id="mytextarea" :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
      ></textarea>
  </div>
</template>

<script>
import fromFieldHelpers from "@/scripts/mixins/formFieldHelper.js";

export default {
  mounted() {
      tinymce.init({
        selector: '.tinymce',
        emit: this.$emit,
        skin: 'oxide-dark',
        content_css: 'dark',
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
          'bold italic backcolor | alignleft aligncenter ' +
          'alignright alignjustify | bullist numlist outdent indent | ' +
          'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        setup: function (ed) {
          ed.on('change', function (e) {
            const emit = ed.getParam("emit");
            emit('update:modelValue', ed.getContent({format: 'raw'}))

          });
        }
      });


  },
  unmounted(){
    tinymce.remove();
  },

  mixins: [fromFieldHelpers],


}
</script>

<style scoped>

</style>
