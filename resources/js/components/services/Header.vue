<template>
  <section class="services-header-section">
    <div class="services-header-container">
      <div class="services-header-content">
        <div class="services-header-label-row">
          <span class="services-header-label">Crafted</span>
        </div>
        <div class="services-header-title-group">
          <h1 class="services-header-title">Your Digital Presence</h1>
          <p class="services-header-desc">Explore our tailored web solutions designed to elevate your brand and engage your audience.</p>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.services-header-section {
  align-self: stretch;
  padding: 112px 64px;
  background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('/img/laptop.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.services-header-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 80px;
}
.services-header-content {
  width: 100%;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 32px;
}
.services-header-label-row {
  display: flex;
  align-items: center;
}
.services-header-label {
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
}
.services-header-title-group {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 24px;
}
.services-header-title {
  color: white;
  font-size: 56px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 67.2px;
}
.services-header-desc {
  color: white;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
}
@media (max-width: 900px) {
  .services-header-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .services-header-title {
    font-size: 32px;
    line-height: 40px;
  }
  .services-header-container {
    gap: 40px;
  }
}
@media (max-width: 600px) {
  .services-header-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .services-header-title {
    font-size: 20px;
    line-height: 28px;
  }
  .services-header-desc {
    font-size: 15px;
    line-height: 22px;
  }
}
</style>
