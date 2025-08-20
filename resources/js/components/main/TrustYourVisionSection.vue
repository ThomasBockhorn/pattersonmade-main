<template>
  <div class="trust-section">
    <div class="trust-section-inner">
      <div class="trust-flex">
        <img class="trust-img" src="/img/webplans.jpg" alt="image of web design plans"/>
        <div class="trust-content">
          <div class="trust-title">Transform Your Vision into Reality with Custom-Built Websites Tailored to Your Brand and Business Needs</div>
          <div class="trust-desc">Whether you need a simple site, a full business platform, or a custom app, I create digital solutions that help you attract, engage, and convert your target audience effectively all supported by a streamlined workflow that keeps your project on track.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
// No script logic needed for this static section
</script>

<style scoped>
.trust-section {
  align-self: stretch;
  padding-left: 64px;
  padding-right: 64px;
  padding-top: 112px;
  padding-bottom: 112px;
  background: var(--Color-Scheme-1-Background, white);
  overflow: hidden;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
  display: flex;
}
.trust-section-inner {
  width: 100%;
  max-width: 1280px;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 80px;
  display: flex;
}
.trust-flex {
  align-self: stretch;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
  display: inline-flex;
}
.trust-img {
  flex: 1 1 0;
  height: 500px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  /* Ensure the image fills its container and the border radius is always visible */
  display: block;
}
.trust-content {
  flex: 1 1 0;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 24px;
  display: inline-flex;
}
.trust-title {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 40px;
  font-family: Encode Sans;
  font-weight: 400;
  line-height: 48px;
  word-wrap: break-word;
}
.trust-desc {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 18px;
  font-family: Source Sans 3;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}

@media (max-width: 1024px) {
  .trust-section {
    padding-left: 32px !important;
    padding-right: 32px !important;
    padding-top: 64px !important;
    padding-bottom: 64px !important;
    gap: 40px !important;
  }
  .trust-section-inner {
    gap: 40px !important;
  }
  .trust-flex {
    gap: 40px !important;
  }
  .trust-img {
    height: 320px !important;
    border-radius: 24px !important;
    object-fit: cover !important;
    width: 100% !important;
  }
  .trust-title {
    font-size: 28px !important;
    line-height: 36px !important;
  }
}

@media (max-width: 700px) {
  .trust-section {
    padding-left: 12px !important;
    padding-right: 12px !important;
    padding-top: 32px !important;
    padding-bottom: 32px !important;
    gap: 24px !important;
  }
  .trust-section-inner {
    gap: 24px !important;
  }
  .trust-flex {
    flex-direction: column-reverse !important;
    gap: 24px !important;
    align-items: stretch !important;
  }
  .trust-img {
    width: 100% !important;
    height: 180px !important;
    border-radius: 12px !important;
    object-fit: cover !important;
    display: block;
  }
  .trust-title {
    font-size: 18px !important;
    line-height: 26px !important;
  }
}
</style>
