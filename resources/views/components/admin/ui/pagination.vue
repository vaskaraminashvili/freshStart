<template>
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li
        class="page-item"
        :class="{ active: link.active }"
        v-for="(link, p) in links"
        :key="p"
      >
        <Component
          :is="link.url ? 'Link' : 'span'"
          :href="link.url"
          class="page-link"
          v-html="link.label"
        />
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    links: Array,
  },
  data() {
    return {};
  },
};
</script>
