<template>
  <section class="turn-vision-section">
    <div class="turn-vision-container">
      <div class="turn-vision-title">
        Turn your vision into reality with custom solutions and a robust web platform that enhances your digital ecosystem, featuring an integrated search engine for better discoverability and a clear sitemap for easy navigation.
      </div>
      <div class="turn-vision-features">
        <div class="turn-vision-feature">
          <div class="turn-vision-feature-icon-wrap">
            <div class="turn-vision-feature-icon">
              <img src="/icon/target.png" alt="Target icon" class="turn-vision-feature-img" />
            </div>
          </div>
          <div class="turn-vision-feature-texts">
            <div class="turn-vision-feature-title">Benefit from comprehensive marketing services designed to increase visibility and boost customer engagement across your digital ecosystem.</div>
            <div class="turn-vision-feature-desc">Enhance your brand through customized digital marketing strategies aimed at producing quantifiable outcomes. These strategies incorporate AI-powered tools that improve engagement, automate analytics, and facilitate more informed decision-making centered on conversion.</div>
          </div>
        </div>
        <div class="turn-vision-feature">
          <div class="turn-vision-feature-icon-wrap">
            <div class="turn-vision-feature-icon">
              <img src="/icon/target.png" alt="Target icon" class="turn-vision-feature-img" />
            </div>
          </div>
          <div class="turn-vision-feature-texts">
            <div class="turn-vision-feature-title">As a skilled developer, I provide custom web solutions designed to address your specific challenges and help you reach your objectives with a focus on accessibility, usability, and long-term value.</div>
            <div class="turn-vision-feature-desc">My web development approach ensures your online presence connects with your target audience and delivers meaningful outcomes that truly help businesses thrive. See my featured work for examples of how I bring brands to life online.</div>
          </div>
        </div>
        <div class="turn-vision-feature">
          <div class="turn-vision-feature-icon-wrap">
            <div class="turn-vision-feature-icon">
              <img src="/icon/target.png" alt="Target icon" class="turn-vision-feature-img" />
            </div>
          </div>
          <div class="turn-vision-feature-texts">
            <div class="turn-vision-feature-title">Whether you need to customize a layout, refine your design system, or build from scratch, I ensure your visual and technical foundations support lasting growth and an exceptional user experience.</div>
            <div class="turn-vision-feature-desc">From streamlined workflows to a clean, intuitive interface, I create projects that are easy to navigate, update, and scale, with continuous performance optimization in mind.<br><br>I also handle smooth third-party tool integration, including AI, to enhance your platform’s functionality and engine capability.</div>
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
.turn-vision-section {
  align-self: stretch;
  padding: 112px 64px;
  background: var(--Color-Scheme-1-Background, white);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.turn-vision-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.turn-vision-title {
  width: 768px;
  max-width: 768px;
  text-align: center;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 40px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 48px;
  word-wrap: break-word;
}
.turn-vision-features {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  gap: 48px;
}
.turn-vision-feature {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 32px;
}
.turn-vision-feature-icon-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-bottom: 8px;
}
.turn-vision-feature-icon {
  width: 48px;
  height: 48px;
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.turn-vision-feature-img {
  width: 40px;
  height: 40px;
  display: block;
  filter: brightness(0);
}
.turn-vision-feature-title {
  align-self: stretch;
  text-align: center;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 24px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 33.6px;
  word-wrap: break-word;
}
.turn-vision-feature-desc {
  align-self: stretch;
  text-align: center;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
  word-wrap: break-word;
}
@media (max-width: 1024px) {
  .turn-vision-title {
    width: 100%;
    font-size: 28px;
    line-height: 36px;
  }
  .turn-vision-features {
    flex-direction: column;
    gap: 32px;
    align-items: stretch;
  }
  .turn-vision-feature {
    width: 100%;
    align-items: center;
  }
}
@media (max-width: 600px) {
  .turn-vision-section {
    padding: 40px 4vw;
    gap: 32px;
  }
  .turn-vision-title {
    font-size: 18px;
    line-height: 26px;
    padding: 0 2vw;
  }
  .turn-vision-features {
    gap: 20px;
  }
  .turn-vision-feature {
    gap: 20px;
  }
  .turn-vision-feature-title {
    font-size: 16px;
    line-height: 22px;
  }
  .turn-vision-feature-desc {
    font-size: 14px;
    line-height: 20px;
  }
  .turn-vision-feature-icon-wrap {
    margin-bottom: 4px;
  }
}
</style>
