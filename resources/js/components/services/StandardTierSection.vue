<template>
  <section class="standard-tier-section">
    <div class="standard-tier-section__container">
      <div class="standard-tier-section__content">
        <img
          class="standard-tier-section__image"
          src="/img/standardpoodle.jpg"
          alt="Standard Tier Example"
        />
        <div class="standard-tier-section__text">
          <div class="standard-tier-section__text-inner">
            <div class="standard-tier-section__header">
              <span class="standard-tier-section__label">Standard</span>
            </div>
            <div class="standard-tier-section__titles">
              <h2 class="standard-tier-section__title">
                Unlock Your Business Potential with Our Standard Tier
              </h2>
              <p class="standard-tier-section__subtitle">
                Our Standard Tier offers a comprehensive e-commerce solution tailored for your business needs. Experience seamless integration with advanced digital marketing strategies to elevate your online presence.
              </p>
            </div>
          </div>
          <ul class="standard-tier-section__features" aria-label="Standard Tier Features">
            <li class="standard-tier-section__feature">
              <span class="standard-tier-section__icon" aria-hidden="true"></span>
              <span>Full-featured e-commerce website for your growing business.</span>
            </li>
            <li class="standard-tier-section__feature">
              <span class="standard-tier-section__icon" aria-hidden="true"></span>
              <span>Complete digital marketing package to drive results.</span>
            </li>
            <li class="standard-tier-section__feature">
              <span class="standard-tier-section__icon" aria-hidden="true"></span>
              <span>Product setup and conversion optimization for success.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No script logic required for this static section
</script>

<style scoped>
.standard-tier-section {
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

.standard-tier-section__container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
}

.standard-tier-section__content {
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 80px;
}

.standard-tier-section__image {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  object-position: center 30%;
  width: 100%;
  max-width: 600px;
  margin-top: 40px;
}

.standard-tier-section__text {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
  align-items: flex-start;
}

.standard-tier-section__text-inner {
  display: flex;
  flex-direction: column;
  gap: 32px;
  align-items: flex-start;
  width: 100%;
}

.standard-tier-section__header {
  display: flex;
  align-items: center;
}

.standard-tier-section__label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 600;
  line-height: 24px;
}

.standard-tier-section__titles {
  display: flex;
  flex-direction: column;
  gap: 24px;
  width: 100%;
}

.standard-tier-section__title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', Arial, sans-serif;
  font-weight: 400;
  line-height: 1.2;
  margin: 0;
}

.standard-tier-section__subtitle {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', Arial, sans-serif;
  font-weight: 400;
  line-height: 27px;
  margin: 0;
}

.standard-tier-section__features {
  display: flex;
  flex-direction: column;
  gap: 16px;
  width: 100%;
  padding: 8px 0;
  margin: 0;
  list-style: none;
}

.standard-tier-section__feature {
  display: flex;
  align-items: center;
  gap: 16px;
  font-size: 16px;
  color: #010605;
  font-family: 'Source Sans 3', Arial, sans-serif;
  line-height: 24px;
}

.standard-tier-section__icon {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url('/icon/checkmark.png') center center / contain no-repeat;
}

@media (max-width: 1024px) {
  .standard-tier-section {
    padding: 80px 24px;
    gap: 48px;
  }
  .standard-tier-section__container {
    gap: 48px;
  }
  .standard-tier-section__content {
    gap: 32px;
  }
  .standard-tier-section__image {
    height: 400px;
    max-width: 400px;
  }
  .standard-tier-section__title {
    font-size: 32px;
  }
}

@media (max-width: 900px) {
  .standard-tier-section__content {
    flex-direction: column;
  }
}

@media (max-width: 768px) {
  .standard-tier-section {
    padding: 48px 8px;
    gap: 32px;
  }
  .standard-tier-section__container {
    gap: 32px;
  }
  .standard-tier-section__content {
    flex-direction: column;
    gap: 32px;
  }
  .standard-tier-section__image {
    height: 240px;
    max-width: 100%;
    border-radius: 24px;
  }
  .standard-tier-section__title {
    font-size: 24px;
  }
}
</style>
