<template>
  <section class="toy-tier-section">
    <div class="toy-tier-container">
      <div class="toy-tier-flex">
        <img class="toy-tier-img" src="/img/toypoodle2.jpg" alt="Toy Tier website example" />
        <div class="toy-tier-content">
          <div class="toy-tier-content-group">
            <div class="toy-tier-label-row">
              <span class="toy-tier-label">Toy</span>
            </div>
            <div class="toy-tier-title-group">
              <h2 class="toy-tier-title">Start Your Digital Journey with Our Toy Tier</h2>
              <p class="toy-tier-desc">The Toy Tier is an excellent choice for individuals and businesses looking to establish their online presence. With a custom-designed, 1-page static website, you will benefit from a user-friendly experience that combines a simple yet elegant design, allowing you to effectively showcase your brand to potential customers. This setup not only highlights your products or services but also creates a professional image that can attract and retain visitors.</p>
            </div>
          </div>
          <div class="toy-tier-features">
            <div class="toy-tier-feature">
              <span class="toy-tier-feature-icon toy-tier-feature-icon1"></span>
              <span class="toy-tier-feature-text">Includes basic SEO and Google presence setup.</span>
            </div>
            <div class="toy-tier-feature">
              <span class="toy-tier-feature-icon toy-tier-feature-icon2"></span>
              <span class="toy-tier-feature-text">Ideal for individuals and small businesses starting out.</span>
            </div>
            <div class="toy-tier-feature">
              <span class="toy-tier-feature-icon toy-tier-feature-icon3"></span>
              <span class="toy-tier-feature-text">Crafted with care to reflect your unique identity.</span>
            </div>
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
.toy-tier-section {
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
.toy-tier-container {
   width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
}

.toy-tier-flex {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.toy-tier-content {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
}
.toy-tier-content-group {
  display: flex;
  flex-direction: column;
  gap: 0px;
}
.toy-tier-label-row {
  display: flex;
  align-items: center;
  margin-bottom: 0;
}
.toy-tier-label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
}

.toy-tier-title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 57.6px;
}
.toy-tier-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
}
.toy-tier-features {
  display: flex;
  flex-direction: column;
  gap: 16px;
  padding: 8px 0;
}
.toy-tier-feature {
  display: flex;
  align-items: center;
  gap: 16px;
}
.toy-tier-feature-icon {
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: url('/icon/checkmark.png') center center / contain no-repeat;
}

.toy-tier-feature-text {
  flex: 1 1 0;
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
}
.toy-tier-img {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
  display: block;
}
@media (max-width: 1200px) {
  .toy-tier-flex {
    gap: 40px;
  }
  .toy-tier-img {
    height: 400px;
    max-width: 400px;
  }
}
@media (max-width: 900px) {
  .toy-tier-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .toy-tier-container {
    gap: 40px;
  }
  .toy-tier-flex {
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
  }
  .toy-tier-img {
    height: 320px;
    max-width: 100%;
    border-radius: 24px;
  }
  .toy-tier-title {
    font-size: 32px;
    line-height: 40px;
  }
}
@media (max-width: 600px) {
  .toy-tier-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .toy-tier-container {
    gap: 24px;
  }
  .toy-tier-flex {
    gap: 16px;
  }
  .toy-tier-title {
    font-size: 20px;
    line-height: 28px;
  }
  .toy-tier-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .toy-tier-img {
    height: 180px;
    border-radius: 12px;
  }
}
</style>
