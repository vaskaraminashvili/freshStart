<template>
  <div
    class="toast show align-items-center border-0"
    role="alert"
    aria-live="assertive"
    aria-atomic="true"
  >
    <div class="d-flex">
      <div class="toast-body">
        {{ text }}
      </div>
      <button
        type="button"
        class="btn-close btn-close-white me-2 m-auto"
        @click="$emit('close-toast')"
      ></button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    text: {
      type: String,
      default: "Notification Text",
    },
  },
};
</script>

<style lang="scss">
.Vue-Toastification__toast {
  min-height: auto;
}
</style>
