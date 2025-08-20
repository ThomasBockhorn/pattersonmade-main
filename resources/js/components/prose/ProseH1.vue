<template>
  <h1 :class="$props.class"><slot /></h1>
</template>

<script setup lang="ts">
defineProps({
  class: String
})
</script>
