<template>
  <h3 :class="$props.class"><slot /></h3>
</template>

<script setup lang="ts">
defineProps({
  class: String
})
</script>