<template>
  <section class="cta2-section" aria-labelledby="cta2-title">
    <div class="cta2-container">
      <div class="cta2-bg">
        <div class="cta2-content">
          <div class="cta2-text-group">
            <h2 id="cta2-title" class="cta2-title">Let’s Create Something Amazing</h2>
            <p class="cta2-desc">Have questions or want to discuss your project? We're here to help you every step.</p>
          </div>
          <div class="cta2-actions">
            <button class="cta2-btn" type="button" aria-label="Contact PattersonMade">Contact</button>
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
.cta2-section {
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
.cta2-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 80px;
}
.cta2-bg {
  align-self: stretch;
  padding: 64px;
  background: linear-gradient(0deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.5) 100%), url('/img/keyboard.jpg');
  background-size: cover;
  background-position: center;
  border-radius: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cta2-content {
  flex: 1 1 0;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 32px;
}
.cta2-text-group {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 24px;
}
.cta2-title {
  align-self: stretch;
  text-align: center;
  color: white;
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 57.6px;
  word-wrap: break-word;
}
.cta2-desc {
  align-self: stretch;
  text-align: center;
  color: white;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.cta2-actions {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 16px;
}
.cta2-btn {
  padding: 10px 24px;
  background: #F97316;
  border-radius: 100px;
  outline: 1px #F97316 solid;
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  border: none;
  cursor: pointer;
  transition: background 0.2s;
}
.cta2-btn:hover {
  background: #EA580C;
}
@media (max-width: 900px) {
  .cta2-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .cta2-title {
    font-size: 32px;
    line-height: 40px;
  }
  .cta2-container {
    gap: 40px;
  }
  .cta2-bg {
    padding: 32px;
    border-radius: 24px;
  }
}
@media (max-width: 600px) {
  .cta2-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .cta2-title {
    font-size: 20px;
    line-height: 28px;
  }
  .cta2-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .cta2-bg {
    padding: 16px;
    border-radius: 12px;
  }
}
</style>
