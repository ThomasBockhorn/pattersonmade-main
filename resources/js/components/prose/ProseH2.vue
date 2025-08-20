<template>
  <h2 :class="$props.class"><slot /></h2>
</template>

<script setup lang="ts">
defineProps({
  class: String
})
</script>
