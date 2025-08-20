<template>
  <section class="crafted-section">
    <div class="crafted-container">
      <div class="crafted-flex">
        <div class="crafted-content">
          <div class="crafted-text-group">
            <div class="crafted-icon-wrap">
              <div class="crafted-icon" aria-hidden="true"></div>
            </div>
            <div class="crafted-title-group">
              <h2 class="crafted-title">Crafted With Care: Get to Know the Developer Behind PattersonMade</h2>
              <p class="crafted-desc">
                At PattersonMade, I specialize as a custom web designer and web developer, creating unique websites and apps that reflect your brand and business goals. With a degree in computer science and a profound passion for web development, I bring a strong foundation in technology and a deep commitment to crafting tailored digital solutions that cater to your specific needs. My journey began with an early love for technology, sparked by curiosity about how digital systems work and a genuine desire to help others express their unique stories online. Over the years, I’ve mastered technologies like HTML, CSS, JavaScript, PHP, Laravel, MySQL, PostgreSQL, and Vue—writing clean, efficient code to build and optimize your online presence. This technical expertise is paired with a thoughtful approach to user experience and design, allowing me to create websites that are not only high-performing but also visually appealing, intuitive, and truly representative of your vision.
              </p>
            </div>
          </div>
        </div>
        <img class="crafted-img" src="https://placehold.co/600x640" alt="Developer behind PattersonMade" />
      </div>
    </div>
  </section>
</template>

<style scoped>
.crafted-section {
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
.crafted-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
  align-items: flex-start;
}
.crafted-flex {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.crafted-content {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 32px;
}
.crafted-text-group {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.crafted-icon-wrap {
  width: 80px;
  height: 80px;
  position: relative;
}
.crafted-icon {
  width: 65.95px;
  height: 67.68px;
  position: absolute;
  left: 7.03px;
  top: 6.15px;
  background: url('/icon/gear.png') center center / contain no-repeat;
  border-radius: 12px;
}
.crafted-title-group {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.crafted-title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 57.6px;
  word-wrap: break-word;
}
.crafted-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.crafted-img {
  flex: 1 1 0;
  height: 640px;
  border-radius: 40px;
  object-fit: cover;
  width: 100%;
  max-width: 600px;
  display: block;
}
@media (max-width: 1200px) {
  .crafted-flex {
    gap: 40px;
  }
  .crafted-img {
    height: 400px;
    max-width: 400px;
  }
}
@media (max-width: 900px) {
  .crafted-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .crafted-container {
    gap: 40px;
  }
  .crafted-flex {
    flex-direction: column;
    gap: 32px;
    align-items: flex-start;
  }
  .crafted-img {
    height: 320px;
    max-width: 100%;
    border-radius: 24px;
  }
  .crafted-title {
    font-size: 32px;
    line-height: 40px;
  }
}
@media (max-width: 600px) {
  .crafted-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .crafted-container {
    gap: 24px;
  }
  .crafted-flex {
    gap: 16px;
  }
  .crafted-title {
    font-size: 20px;
    line-height: 28px;
  }
  .crafted-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .crafted-img {
    height: 180px;
    border-radius: 12px;
  }
}
</style>
