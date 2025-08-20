<template>
  <section class="hosting-section">
    <div class="hosting-section__container">
      <div class="hosting-section__content">
        <img
          class="hosting-section__image"
          src="/img/servers.jpg"
          alt="Website hosting"
        />
        <div class="hosting-section__text">
          <div class="hosting-section__text-inner">
            <div class="hosting-section__header">
              <span class="hosting-section__label">Hosting</span>
            </div>
            <div class="hosting-section__titles">
              <h2 class="hosting-section__title">
                All three service tiers offer reliable, secure hosting for optimal website performance and 24/7 accessibility.
              </h2>
              <p class="hosting-section__subtitle">
                This hosting environment ensures high-performance and scalability, accommodating your site’s growth without downtime. With built-in security like regular backups, SSL certificates, and advanced firewalls, your data and visitors are protected. My solutions also include real-time monitoring and analytics for proactive maintenance and quick issue resolution. Whether launching a new site or expanding an existing one, this robust hosting supports a fast, stable, and secure web experience across all screen sizes and mobile devices.<br /><br />With every update, you gain the flexibility to adapt and evolve, keeping your digital presence current and aligned with your long-term goals. Every project is crafted to be pixel-perfect and fully responsive, adapting flawlessly to any screen size or mobile device to deliver an exceptional experience across all platforms.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No script logic required for this static section
</script>

<style scoped>
.hosting-section {
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

.hosting-section__container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
}

.hosting-section__content {
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 80px;
}

.hosting-section__image {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
}

.hosting-section__text {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
  align-items: flex-start;
}

.hosting-section__text-inner {
  display: flex;
  flex-direction: column;
  gap: 16px;
  align-items: flex-start;
  width: 100%;
}

.hosting-section__header {
  display: flex;
  align-items: center;
}

.hosting-section__label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 600;
  line-height: 24px;
}

.hosting-section__titles {
  display: flex;
  flex-direction: column;
  gap: 24px;
  width: 100%;
}

.hosting-section__title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', Arial, sans-serif;
  font-weight: 400;
  line-height: 1.2;
  margin: 0;
}

.hosting-section__subtitle {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 400;
  line-height: 27px;
  margin: 0;
}

@media (max-width: 1024px) {
  .hosting-section {
    padding: 80px 24px;
    gap: 48px;
  }
  .hosting-section__container {
    gap: 48px;
  }
  .hosting-section__content {
    gap: 32px;
  }
  .hosting-section__image {
    height: 400px;
    max-width: 400px;
  }
  .hosting-section__title {
    font-size: 32px;
  }
}

@media (max-width: 768px) {
  .hosting-section {
    padding: 48px 8px;
    gap: 32px;
  }
  .hosting-section__container {
    gap: 32px;
  }
  .hosting-section__content {
    flex-direction: column;
    gap: 32px;
  }
  .hosting-section__image {
    height: 240px;
    max-width: 100%;
    border-radius: 24px;
  }
  .hosting-section__title {
    font-size: 24px;
  }
}
</style>
