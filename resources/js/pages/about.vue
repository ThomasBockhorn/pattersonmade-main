<template>
    <layouts>
        <AboutHeroSection />
        <HeartFeltJourneySection />
        <DedicatedSection />
        <CTA />
        <CraftedWithCareSection />
    </layouts>
</template>

<script lang="ts" setup>
import layouts from '../layouts/default.vue';
import AboutHeroSection from '../components/about/AboutHeroSection.vue';
import HeartFeltJourneySection from '../components/about/HeartFeltJourneySection.vue';
import DedicatedSection from '../components/about/DedicatedSection.vue';
import CTA from '../components/CTA.vue';
import CraftedWithCareSection from '../components/about/CraftedWithCareSection.vue';
</script>
