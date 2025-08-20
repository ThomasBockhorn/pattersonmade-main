<template>
  <section class="miniature-tier-section">
    <div class="miniature-tier-container">
      <div class="miniature-tier-content">
        <div class="miniature-tier-text">
          <div class="miniature-tier-header">
            <div class="miniature-tier-label">Miniature</div>
            <div class="miniature-tier-title">Elevate Your Brand with Our Miniature Tier</div>
            <div class="miniature-tier-description">
              The Miniature Tier is crafted for creators and professionals ready to expand their online presence. With a custom design and integrated portfolio, your unique style will shine through.
            </div>
          </div>
          <ul class="miniature-tier-features" aria-label="Miniature Tier Features">
            <li>
              <span class="miniature-tier-icon"></span>
              <span>5-page website with a stunning portfolio and blog</span>
            </li>
            <li>
              <span class="miniature-tier-icon"></span>
              <span>Tailored design that reflects your personal style</span>
            </li>
            <li>
              <span class="miniature-tier-icon"></span>
              <span>Enhanced digital marketing for growing your audience</span>
            </li>
          </ul>
        </div>
        <img
          class="miniature-tier-image"
          src="/img/minipoodle2.jpg"
          alt="Miniature Tier website preview"
        />
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No script logic needed for this static section
</script>

<style scoped>
.miniature-tier-section {
  align-self: stretch;
  padding: 112px 64px;
  background: #fff;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}

.miniature-tier-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
}

.miniature-tier-content {
  width: 100%;
  display: flex;
  gap: 80px;
  align-items: center;
}

.miniature-tier-image {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
}

.miniature-tier-text {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.miniature-tier-header {
  display: flex;
  flex-direction: column;
  gap: 25px;
}

.miniature-tier-label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 600;
  line-height: 24px;
}

.miniature-tier-title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', Arial, sans-serif;
  font-weight: 400;
  line-height: 1.2;
}

.miniature-tier-description {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 400;
  line-height: 27px;
}

.miniature-tier-features {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.miniature-tier-features li {
  display: flex;
  align-items: center;
  gap: 16px;
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 400;
  line-height: 24px;
}

.miniature-tier-icon {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url('/icon/checkmark.png') center center / contain no-repeat;
}

@media (max-width: 1024px) {
  .miniature-tier-section {
    padding: 80px 24px;
    gap: 48px;
  }
  .miniature-tier-section__container {
    gap: 48px;
  }
  .miniature-tier-section__content {
    gap: 32px;
  }
  .miniature-tier-section__image {
    height: 400px;
    max-width: 400px;
  }
  .miniature-tier-section__title {
    font-size: 32px;
  }
}

@media (max-width: 900px) {
  .miniature-tier-content {
    flex-direction: column-reverse;
  }
}

@media (max-width: 768px) {
  .miniature-tier-section {
    padding: 48px 8px;
    gap: 32px;
  }
  .miniature-tier-container {
    gap: 32px;
 }
  .miniature-tier-image {
    height: 240px;
    max-width: 100%;
    border-radius: 24px;
  }
  .miniature-tier-title {
    font-size: 24px;
  }
}
</style>
