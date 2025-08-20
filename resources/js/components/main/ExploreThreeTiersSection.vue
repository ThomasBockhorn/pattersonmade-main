<template>
  <section class="tiers-section">
    <div class="tiers-container">
      <div class="tiers-title">
        Explore Our Three Tiers of Tailored Web Solutions and Services
      </div>
      <div class="tiers-list">
        <div class="tier-card">
          <div class="tier-card-header">
            <div class="tier-icon tier-icon-toy"></div>
          </div>
          <div class="tier-card-title">Toy Tier: Simple Websites with Essential Digital Marketing</div>
          <div class="tier-card-desc">Ideal for those seeking a straightforward online presence.</div>
          <div class="tier-card-action">
            <button class="tier-link" type="button">Learn More <span class="tier-link-arrow"></span></button>
          </div>
        </div>
        <div class="tier-card">
          <div class="tier-card-header">
            <div class="tier-icon tier-icon-miniature">
            </div>
          </div>
          <div class="tier-card-title">Miniature Tier: Dynamic Websites with Advanced Marketing Strategies</div>
          <div class="tier-card-desc">Perfect for businesses looking to engage and grow their audience.</div>
          <div class="tier-card-action">
            <button class="tier-link" type="button">Learn More <span class="tier-link-arrow"></span></button>
          </div>
        </div>
        <div class="tier-card">
          <div class="tier-card-header">
            <div class="tier-icon tier-icon-standard"></div>
          </div>
          <div class="tier-card-title">Standard Tier: Comprehensive E-Commerce Solutions for Your Business</div>
          <div class="tier-card-desc">Designed for those ready to sell and scale online.</div>
          <div class="tier-card-action">
            <button class="tier-link" type="button">Learn More <span class="tier-link-arrow"></span></button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No props for now
</script>

<style scoped>
.tiers-section {
  align-self: stretch;
  padding: 112px 64px;
  background: var(--Color-Neutral-Dark, #4D5050);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.tiers-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 80px;
}
.tiers-title {
  width: 768px;
  max-width: 768px;
  color: var(--Color-White, white);
  font-size: 40px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 48px;
  word-wrap: break-word;
}
.tiers-list {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 48px;
}
.tier-card {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 32px;
}
.tier-card-header {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.tier-icon-toy::after,
.tier-icon-miniature::after,
.tier-icon-standard::after {
  content: '';
  display: block;
  width: 32px;
  height: 32px;
  position: absolute;
  left: 8px;
  top: 8px;
  background: url('/icon/cube.png') no-repeat center center;
  background-size: contain;
  filter: brightness(0) invert(1);
  border-radius: 4px;
  box-shadow: none;
  border: none;
}
.tier-icon-toy::before,
.tier-icon-miniature::before,
.tier-icon-standard::before {
  content: none;
}
.tier-icon {
  width: 48px;
  height: 48px;
  position: relative;
  overflow: visible;
  background: none;
}
.tier-card-title {
  color: var(--Color-White, white);
  font-size: 24px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 33.6px;
  word-wrap: break-word;
}
.tier-card-desc {
  color: var(--Color-White, white);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
  word-wrap: break-word;
}
.tier-card-action {
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.tier-link {
  overflow: hidden;
  border-radius: 100px;
  background: none;
  border: none;
  color: var(--Color-White, white);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  cursor: pointer;
  padding: 0;
}
.tier-link-arrow {
  display: inline-block;
  width: 12px;
  height: 12px;
  border-right: 2px solid var(--Color-White, white);
  border-bottom: 2px solid var(--Color-White, white);
  transform: rotate(-45deg);
  margin-left: 4px;
}
@media (max-width: 1024px) {
  .tiers-title {
    width: 100%;
    font-size: 28px;
    line-height: 36px;
    text-align: center;
  }
  .tiers-list {
    flex-direction: column;
    gap: 32px;
    align-items: stretch;
  }
  .tier-card {
    width: 100%;
    align-items: center;
    padding: 0 8px;
  }
}
@media (max-width: 600px) {
  .tiers-section {
    padding: 40px 4vw;
    gap: 32px;
  }
  .tiers-title {
    font-size: 18px;
    line-height: 26px;
    padding: 0 2vw;
  }
  .tiers-list {
    gap: 20px;
  }
  .tier-card {
    gap: 20px;
    padding: 0;
  }
  .tier-card-title {
    font-size: 16px;
    line-height: 22px;
    text-align: center;
  }
  .tier-card-desc {
    font-size: 14px;
    line-height: 20px;
    text-align: center;
  }
  .tier-icon {
    width: 36px;
    height: 36px;
  }
  .tier-icon-toy::after,
  .tier-icon-miniature::after,
  .tier-icon-standard::after {
    width: 28px;
    height: 28px;
    left: 4px;
    top: 4px;
    background: url('/icon/cube.png') no-repeat center center;
    background-size: contain;
    filter: brightness(0) invert(1);
  }
  .tier-link {
    font-size: 14px;
    min-height: 36px;
    padding: 0 8px;
  }
}
</style>
