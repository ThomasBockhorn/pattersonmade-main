<template>
  <section class="heartfelt-section">
    <div class="heartfelt-container">
      <div class="heartfelt-flex">
        <div class="heartfelt-content">
          <div class="heartfelt-icon-wrap">
            <div class="heartfelt-icon"></div>
          </div>
          <div class="heartfelt-text-group">
            <h2 class="heartfelt-title">
              The Heartfelt Journey of PattersonMade: Inspired by Loyalty and Passion
            </h2>
            <p class="heartfelt-desc">
              PattersonMade was born from a deep passion for creating one-of-a-kind digital experiences rooted in the loyalty and inspiration of Patterson, my beloved dog and constant companion. This creative studio is built on a commitment to designing websites that not only reflect each client’s true essence but also tell their unique story with care and precision. Every project is approached with a blend of authenticity, individuality, and professionalism to ensure it resonates both personally and visually. At PattersonMade, the goal is to elevate brands and build meaningful connections, making each web experience not just functional but genuinely unforgettable.
            </p>
          </div>
        </div>
        <img class="heartfelt-img" src="/img/Patterson.jpg" alt="PattersonMade inspiration" />
      </div>
    </div>
  </section>
</template>

<style scoped>
.heartfelt-section {
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
.heartfelt-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
  align-items: flex-start;
}
.heartfelt-flex {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.heartfelt-content {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.heartfelt-icon-wrap {
  width: 48px;
  height: 48px;
  position: relative;
}
.heartfelt-icon {
  width: 40.62px;
  height: 38.57px;
  position: absolute;
  left: 3.69px;
  top: 5.87px;
  background: url('/icon/dogpaw.png') center center / contain no-repeat;
  border-radius: 8px;
}
.heartfelt-text-group {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.heartfelt-title {
  color: #010605;
  font-size: 40px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 48px;
  word-wrap: break-word;
}
.heartfelt-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.heartfelt-img {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
  display: block;
}
@media (max-width: 1200px) {
  .heartfelt-flex {
    gap: 40px;
  }
  .heartfelt-img {
    height: 400px;
    max-width: 400px;
  }
}
@media (max-width: 900px) {
  .heartfelt-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .heartfelt-container {
    gap: 40px;
  }
  .heartfelt-flex {
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
  }
  .heartfelt-img {
    height: 320px;
    max-width: 100%;
    border-radius: 24px;
  }
  .heartfelt-title {
    font-size: 28px;
    line-height: 36px;
  }
}
@media (max-width: 600px) {
  .heartfelt-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .heartfelt-container {
    gap: 24px;
  }
  .heartfelt-flex {
    gap: 16px;
  }
  .heartfelt-title {
    font-size: 20px;
    line-height: 28px;
  }
  .heartfelt-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .heartfelt-img {
    height: 180px;
    border-radius: 12px;
  }
}
</style>
