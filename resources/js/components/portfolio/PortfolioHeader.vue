<template>
  <section class="portfolio-header-section" aria-labelledby="portfolio-header-title">
    <div class="portfolio-header-container">
      <div class="portfolio-header-content">
        <h1 id="portfolio-header-title" class="portfolio-header-title">Creative Web Solutions</h1>
        <p class="portfolio-header-desc">
          Explore our diverse portfolio showcasing unique projects that highlight our commitment to quality.
        </p>
        <ul class="portfolio-header-tags" aria-label="Portfolio categories">
          <li class="portfolio-header-tag">Web Design</li>
          <li class="portfolio-header-tag">E-commerce</li>
          <li class="portfolio-header-tag">Brand Identity</li>
        </ul>
      </div>
    </div>
  </section>
</template>

<style scoped>
.portfolio-header-section {
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
.portfolio-header-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 80px;
}
.portfolio-header-content {
  width: 100%;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;
}
.portfolio-header-title {
  align-self: stretch;
  text-align: center;
  color: #010605;
  font-size: 56px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 67.2px;
  word-wrap: break-word;
}
.portfolio-header-desc {
  align-self: stretch;
  text-align: center;
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.portfolio-header-tags {
  list-style: none;
  padding: 0;
  margin: 0;
  align-self: stretch;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  gap: 8px;
  flex-wrap: wrap;
  align-content: flex-start;
}
.portfolio-header-tag {
  padding: 4px 10px;
  background: rgba(1, 6, 5, 0.05);
  border-radius: 100px;
  outline: 1px rgba(255, 255, 255, 0) solid;
  outline-offset: -1px;
  color: #010605;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 21px;
  word-wrap: break-word;
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
}
@media (max-width: 900px) {
  .portfolio-header-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .portfolio-header-title {
    font-size: 32px;
    line-height: 40px;
  }
  .portfolio-header-container {
    gap: 40px;
  }
}
@media (max-width: 600px) {
  .portfolio-header-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .portfolio-header-title {
    font-size: 20px;
    line-height: 28px;
  }
  .portfolio-header-desc {
    font-size: 15px;
    line-height: 22px;
  }
}
</style>
