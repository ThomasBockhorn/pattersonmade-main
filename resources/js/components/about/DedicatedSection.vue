<template>
  <section class="dedicated-section">
    <div class="dedicated-container">
      <div class="dedicated-flex">
        <img class="dedicated-img" src="/img/coding.jpg" alt="Dedicated to your online presence" />
        <div class="dedicated-content">
          <div class="dedicated-label-row">
            <span class="dedicated-label">Crafted</span>
          </div>
          <div class="dedicated-text-group">
            <h2 class="dedicated-title">Dedicated to Your Unique Online Presence</h2>
            <p class="dedicated-desc">
              At PattersonMade, I firmly believe that every website should reflect the distinct individuality and personality of its owner. My unwavering commitment to creating custom-built solutions means that your online presence will be as unique and tailored to you as you are. I take great pride in understanding the specific needs and desires of our clients, ensuring that each element of your website embodies the essence of your brand and vision.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.dedicated-section {
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
.dedicated-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
  align-items: flex-start;
}
.dedicated-flex {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.dedicated-img {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
  display: block;
}
.dedicated-content {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
}
.dedicated-label-row {
  display: flex;
  align-items: center;
}
.dedicated-label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
  word-wrap: break-word;
}
.dedicated-text-group {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.dedicated-title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 57.6px;
  word-wrap: break-word;
}
.dedicated-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
@media (max-width: 1200px) {
  .dedicated-flex {
    gap: 40px;
  }
  .dedicated-img {
    height: 400px;
    max-width: 400px;
  }
}
@media (max-width: 900px) {
  .dedicated-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .dedicated-container {
    gap: 40px;
  }
  .dedicated-flex {
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
  }
  .dedicated-img {
    order: 2;
    height: 320px;
    max-width: 100%;
    border-radius: 24px;
  }
  .dedicated-content {
    order: 1;
  }
  .dedicated-title {
    font-size: 32px;
    line-height: 40px;
  }
}
@media (max-width: 600px) {
  .dedicated-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .dedicated-container {
    gap: 24px;
  }
  .dedicated-flex {
    gap: 16px;
  }
  .dedicated-title {
    font-size: 20px;
    line-height: 28px;
  }
  .dedicated-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .dedicated-img {
    height: 180px;
    border-radius: 12px;
  }
}
</style>
