<template>
  <div class="page-container">
    <Navbar />
    <slot />
    <FooterSection />
  </div>
</template>

<script setup lang="ts">
import Navbar from '@/components/Navbar.vue';
import FooterSection from '@/components/FooterSection.vue';
</script>

<style scoped>
.page-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
</style>
