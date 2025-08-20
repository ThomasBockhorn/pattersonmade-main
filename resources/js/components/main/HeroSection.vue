<template>
<div class="hero-section">
  <div class="hero-content">
    <div class="hero-inner">
      <div class="hero-title-group">
        <div class="hero-title">PattersonMade Web Developer Studio: Your Partner in Golden Website Design</div>
        <div class="hero-subtitle">Thoughtful solutions for those building something real</div>
      </div>
      <div class="hero-cta-row">
        <button class="hero-cta" type="button">
          <span class="hero-cta-text">Begin with PattersonMade</span>
        </button>
      </div>
    </div>
  </div>
</div>
</template>

<style scoped>
.hero-section {
  align-self: stretch;
  height: auto;
  min-height: 900px;
  padding-left: 64px;
  padding-right: 64px;
  background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('/img/HappyPatterson.jpg');
  background-size: cover;
  background-position: center;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}
.hero-content {
  flex: 1 1 0;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 80px;
}
.hero-inner {
  width: 100%;
  max-width: 560px;
  display: flex;
  flex-direction: column;
  gap: 32px;
}
.hero-title-group {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.hero-title {
  color: #fff;
  font-size: 56px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 1.2;
  word-wrap: break-word;
}
.hero-subtitle {
  color: #fff;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.hero-cta-row {
  display: flex;
  gap: 16px;
}
.hero-cta {
  padding: 10px 24px;
  background: #F97316;
  border-radius: 100px;
  outline: 1px #F97316 solid;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: none;
  cursor: pointer;
  transition: background 0.2s;
  font: inherit;
}
.hero-cta:focus {
  outline: 2px solid #fff;
  outline-offset: 2px;
}
.hero-cta:hover {
  background: #EA580C;
}
.hero-cta:active {
  background: #EA580C;
}
.hero-cta-text {
  color: #fff;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  word-wrap: break-word;
}
@media (max-width: 900px) {
  .hero-section {
    height: auto;
    min-height: 400px;
    padding-left: 24px;
    padding-right: 24px;
  }
  .hero-title {
    font-size: 32px;
    line-height: 1.2;
    word-break: break-word;
    white-space: normal;
  }
  .hero-content {
    gap: 40px;
  }
  .hero-inner {
    max-width: 100%;
    gap: 24px;
  }
}
@media (max-width: 600px) {
  .hero-section {
    height: auto;
    min-height: 300px;
    padding-left: 8px;
    padding-right: 8px;
  }
  .hero-title {
    font-size: 22px;
    word-break: break-word;
    white-space: normal;
  }
  .hero-subtitle {
    font-size: 14px;
    line-height: 20px;
    word-break: break-word;
    white-space: normal;
  }
  .hero-cta {
    padding: 8px 16px;
    font-size: 14px;
  }
}
</style>