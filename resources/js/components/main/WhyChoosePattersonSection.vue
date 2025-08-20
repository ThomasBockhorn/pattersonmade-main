<template>
  <div class="why-choose-section">
    <div class="why-choose-section-inner">
      <div class="why-choose-flex">
        <div class="why-choose-content">
          <div class="why-choose-content-inner">
            <div class="why-choose-header">
              <div class="why-choose-label">Trust</div>
              <div class="why-choose-header-content">
                <div class="why-choose-title">Why Choose PattersonMade for Your Website?</div>
                <div class="why-choose-desc">I prioritize your vision and goals with a personalized approach, ensuring your online presence truly represents your identity and creative vision through expert website design and development.</div>
              </div>
            </div>
            <div class="why-choose-features">
              <div class="why-choose-features-inner">
                <div class="why-choose-feature">
                  <div class="why-choose-feature-title">Crafted with Care and Personal Attention</div>
                  <div class="why-choose-feature-desc">I take the time to understand your unique business needs to deliver a custom website that truly represents your brand.</div>
                </div>
                <div class="why-choose-feature">
                  <div class="why-choose-feature-title">Simplify Your Digital Journey with One-on-One Support</div>
                  <div class="why-choose-feature-desc">I also provide ongoing support and updates to keep your site secure, up-to-date, and performing at its best. Thorough previews and testing ensure your site looks and functions perfectly before publish. Plus, I make it easy for you to edit and manage new content as your business grows.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="why-choose-img" src="/img/computerdesk.jpg" alt="An image of a computer on a desk" />
      </div>
    </div>
  </div>
</template>

<style scoped>
.why-choose-section {
  align-self: stretch;
  padding-left: 64px;
  padding-right: 64px;
  padding-top: 112px;
  padding-bottom: 112px;
  background: var(--Color-Scheme-1-Background, white);
  overflow: hidden;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
  display: flex;
}
.why-choose-section-inner {
  width: 100%;
  max-width: 1280px;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 80px;
  display: flex;
}
.why-choose-flex {
  align-self: stretch;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
  display: inline-flex;
}
.why-choose-content {
  flex: 1 1 0;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 32px;
  display: inline-flex;
}
.why-choose-content-inner {
  align-self: stretch;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 32px;
  display: flex;
}
.why-choose-header {
  align-self: stretch;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 16px;
  display: flex;
}
.why-choose-label {
  justify-content: flex-start;
  align-items: center;
  display: inline-flex;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: Source Sans 3;
  font-weight: 600;
  line-height: 24px;
  word-wrap: break-word;
}
.why-choose-header-content {
  align-self: stretch;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 24px;
  display: flex;
}
.why-choose-title {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 48px;
  font-family: Encode Sans;
  font-weight: 400;
  line-height: 57.6px;
  word-wrap: break-word;
}
.why-choose-desc {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 18px;
  font-family: Source Sans 3;
  font-weight: 400;
  line-height: 27px;
  word-wrap: break-word;
}
.why-choose-features {
  align-self: stretch;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 16px;
  display: flex;
}
.why-choose-features-inner {
  align-self: stretch;
  padding-top: 8px;
  padding-bottom: 8px;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 24px;
  display: inline-flex;
}
.why-choose-feature {
  flex: 1 1 0;
  flex-direction: column;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 16px;
  display: inline-flex;
}
.why-choose-feature-title {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 20px;
  font-family: Encode Sans;
  font-weight: 400;
  line-height: 28px;
  word-wrap: break-word;
}
.why-choose-feature-desc {
  align-self: stretch;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: Source Sans 3;
  font-weight: 400;
  line-height: 24px;
  word-wrap: break-word;
}
.why-choose-img {
  flex: 1 1 0;
  height: 400px;
  border-radius: 40px;
}

@media (max-width: 1024px) {
  .why-choose-section {
    padding-left: 32px !important;
    padding-right: 32px !important;
    padding-top: 64px !important;
    padding-bottom: 64px !important;
    gap: 40px !important;
  }
  .why-choose-section-inner {
    gap: 40px !important;
  }
  .why-choose-flex {
    gap: 40px !important;
  }
  .why-choose-img {
    height: 320px !important;
    border-radius: 24px !important;
  }
  .why-choose-title {
    font-size: 32px !important;
    line-height: 40px !important;
  }
}

@media (max-width: 700px) {
  .why-choose-section {
    padding-left: 16px !important;
    padding-right: 16px !important;
    padding-top: 32px !important;
    padding-bottom: 32px !important;
    gap: 24px !important;
  }
  .why-choose-section-inner {
    gap: 24px !important;
  }
  .why-choose-flex {
    flex-direction: column !important;
    gap: 24px !important;
    align-items: stretch !important;
  }
  .why-choose-img {
    width: 100% !important;
    height: 180px !important;
    border-radius: 16px !important;
    object-fit: cover !important;
  }
  .why-choose-title {
    font-size: 22px !important;
    line-height: 28px !important;
  }
}
</style>
