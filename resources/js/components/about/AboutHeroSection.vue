<template>
  <section class="about-hero-section">
    <div class="about-hero-container">
      <h2 class="about-hero-title">
        Crafted with Heart
      </h2>
      <p class="about-hero-desc">
        At PattersonMade, we create websites that reflect your unique identity and values with care.
      </p>
    </div>
  </section>
</template>

<style scoped>
.about-hero-section {
  align-self: stretch;
  padding: 112px 64px;
  background: white;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.about-hero-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
  align-items: flex-start;
}
.about-hero-title {
  color: #010605;
  font-size: 56px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 67.2px;
  word-wrap: break-word;
}
.about-hero-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
@media (max-width: 900px) {
  .about-hero-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .about-hero-title {
    font-size: 32px;
    line-height: 40px;
  }
}
@media (max-width: 600px) {
  .about-hero-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .about-hero-title {
    font-size: 22px;
    line-height: 28px;
  }
  .about-hero-desc {
    font-size: 15px;
    line-height: 22px;
  }
}
</style>
