<template>
    <layouts>
        <Header />
        <ToyTierSection />
        <MiniatureTierSection />
        <StandardTierSection />
        <CTA />
        <HostingSection />
    </layouts>
</template>

<script lang="ts" setup>
import layouts from '../layouts/default.vue';
import Header from '../components/services/Header.vue';
import ToyTierSection from '../components/services/ToyTierSection.vue';
import MiniatureTierSection from '../components/services/MiniatureTierSection.vue';
import StandardTierSection from '../components/services/StandardTierSection.vue';
import CTA from '../components/CTA.vue';
import HostingSection from '../components/services/HostingSection.vue';
</script>
