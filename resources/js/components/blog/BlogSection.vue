<template>
  <section class="blog-section" aria-labelledby="blog-title">
    <div class="blog-container">
      <header class="blog-header">
        <span class="blog-label">Blog</span>
        <div class="blog-title-group">
          <h1 id="blog-title" class="blog-title">Explore Our Latest Insights</h1>
          <p class="blog-desc">Discover tips, trends, and stories from our community.</p>
        </div>
      </header>
      <nav class="blog-categories" aria-label="Blog categories">
        <button class="blog-category blog-category-active" type="button">View all</button>
        <button class="blog-category" type="button">Web Development</button>
        <button class="blog-category" type="button">Digital Marketing</button>
        <button class="blog-category" type="button">Client Stories</button>
        <button class="blog-category" type="button">Industry Insights</button>
      </nav>
      <div class="blog-list">
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="Crafting Websites with Heart" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Blog</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">Crafting Websites with Heart</h2>
            <p class="blog-card-desc">Explore how we blend creativity and technology for impactful websites.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about Crafting Websites with Heart">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="The Power of Custom Solutions" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Design</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">The Power of Custom Solutions</h2>
            <p class="blog-card-desc">Why tailored websites outperform generic templates in today's digital landscape.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about The Power of Custom Solutions">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="Boosting Your Online Presence" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Marketing</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">Boosting Your Online Presence</h2>
            <p class="blog-card-desc">Strategies to enhance visibility and engage your audience effectively.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about Boosting Your Online Presence">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="Client Success Stories" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Success</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">Client Success Stories</h2>
            <p class="blog-card-desc">Real experiences that showcase our commitment to client satisfaction.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about Client Success Stories">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="Emerging Trends in Web Development" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Innovation</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">Emerging Trends in Web Development</h2>
            <p class="blog-card-desc">Stay ahead of the curve with the latest industry developments.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about Emerging Trends in Web Development">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
        <article class="blog-card">
          <img class="blog-card-img" src="https://placehold.co/405x270" alt="Effective Digital Marketing Strategies" />
          <div class="blog-card-content">
            <div class="blog-card-meta">
              <span class="blog-card-tag">Insights</span>
              <span class="blog-card-read">5 min read</span>
            </div>
            <h2 class="blog-card-title">Effective Digital Marketing Strategies</h2>
            <p class="blog-card-desc">Learn how to maximize your online marketing efforts for better results.</p>
            <a class="blog-card-link" href="#" aria-label="Read more about Effective Digital Marketing Strategies">
              Read more
              <span class="blog-card-link-icon" aria-hidden="true"></span>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No props for now
</script>

<style scoped>
.blog-section {
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
.blog-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 80px;
}
.blog-header {
  width: 100%;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
}
.blog-label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
  text-align: center;
}
.blog-title-group {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;
}
.blog-title {
  color: #010605;
  font-size: 56px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 67.2px;
  text-align: center;
}
.blog-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  text-align: center;
}
.blog-categories {
  display: flex;
  flex-wrap: wrap;
  gap: 16px;
  justify-content: center;
  align-items: center;
}
.blog-category {
  padding: 10px 16px;
  background: none;
  border: none;
  border-radius: 100px;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
  color: #010605;
  cursor: pointer;
  transition: background 0.2s;
}
.blog-category-active,
.blog-category:hover {
  background: #F2F2F2;
  font-weight: 500;
}
.blog-list {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  gap: 32px;
  justify-content: flex-start;
  align-items: flex-start;
}
.blog-card {
  flex: 1 1 0;
  min-width: 280px;
  max-width: 405px;
  background: #F2F2F2;
  overflow: hidden;
  border-radius: 32px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.blog-card-img {
  width: 100%;
  height: 270px;
  object-fit: cover;
  border-radius: 0 0 0 0;
  display: block;
}
.blog-card-content {
  align-self: stretch;
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.blog-card-meta {
  display: flex;
  align-items: center;
  gap: 16px;
}
.blog-card-tag {
  padding: 4px 10px;
  background: rgba(1, 6, 5, 0.05);
  border-radius: 100px;
  color: #010605;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 21px;
  display: flex;
  align-items: center;
}
.blog-card-read {
  color: #010605;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 21px;
}
.blog-card-title {
  color: #010605;
  font-size: 24px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 33.6px;
}
.blog-card-desc {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
}
.blog-card-link {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  border-radius: 100px;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  transition: background 0.2s;
  padding: 0 8px;
}
.blog-card-link:hover {
  background: rgba(1, 6, 5, 0.08);
}
.blog-card-link-icon {
  width: 24px;
  height: 24px;
  display: inline-block;
  background: url('data:image/svg+xml;utf8,<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L1 11" stroke="%23010605" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>') center center no-repeat;
  background-size: contain;
}
@media (max-width: 900px) {
  .blog-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .blog-title {
    font-size: 32px;
    line-height: 40px;
  }
  .blog-container {
    gap: 40px;
  }
  .blog-list {
    gap: 24px;
  }
  .blog-card {
    max-width: 100%;
  }
}
@media (max-width: 600px) {
  .blog-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .blog-title {
    font-size: 20px;
    line-height: 28px;
  }
  .blog-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .blog-card-img {
    height: 140px;
    border-radius: 0 0 0 0;
  }
}
</style>
