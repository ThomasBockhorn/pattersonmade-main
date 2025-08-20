<template>
  <section class="portfolio-section" aria-labelledby="portfolio-section-title">
    <div class="portfolio-section-container">
      <header class="portfolio-section-header">
        <span class="portfolio-section-label">Portfolio</span>
        <div class="portfolio-section-title-group">
          <h2 id="portfolio-section-title" class="portfolio-section-title">Our Creative Showcase</h2>
          <p class="portfolio-section-desc">Explore our diverse range of projects</p>
        </div>
      </header>
      <div class="portfolio-section-projects">
        <div class="portfolio-section-project-row">
          <!-- Project 1 -->
          <article class="portfolio-project">
            <img class="portfolio-project-img" src="https://placehold.co/405x228" alt="Screenshot of Artistic Web Design project" />
            <div class="portfolio-project-content">
              <h3 class="portfolio-project-title">Artistic Web Design</h3>
              <p class="portfolio-project-desc">A visually stunning site that captures the essence of creativity.</p>
              <ul class="portfolio-project-tags" aria-label="Project tags">
                <li class="portfolio-project-tag">Web Design</li>
                <li class="portfolio-project-tag">Creative Solutions</li>
                <li class="portfolio-project-tag">Responsive Design</li>
              </ul>
              <a class="portfolio-project-link" href="#" aria-label="View Artistic Web Design project">
                View project
                <span class="portfolio-project-link-icon" aria-hidden="true"></span>
              </a>
            </div>
          </article>
          <!-- Project 2 -->
          <article class="portfolio-project">
            <img class="portfolio-project-img" src="https://placehold.co/405x228" alt="Screenshot of E-Commerce Excellence project" />
            <div class="portfolio-project-content">
              <h3 class="portfolio-project-title">E-Commerce Excellence</h3>
              <p class="portfolio-project-desc">An online store that enhances user experience and drives sales.</p>
              <ul class="portfolio-project-tags" aria-label="Project tags">
                <li class="portfolio-project-tag">E-Commerce</li>
                <li class="portfolio-project-tag">User Friendly</li>
                <li class="portfolio-project-tag">Fast Loading</li>
              </ul>
              <a class="portfolio-project-link" href="#" aria-label="View E-Commerce Excellence project">
                View project
                <span class="portfolio-project-link-icon" aria-hidden="true"></span>
              </a>
            </div>
          </article>
          <!-- Project 3 -->
          <article class="portfolio-project">
            <img class="portfolio-project-img" src="https://placehold.co/405x228" alt="Screenshot of Project name here" />
            <div class="portfolio-project-content">
              <h3 class="portfolio-project-title">Project name here</h3>
              <p class="portfolio-project-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.</p>
              <ul class="portfolio-project-tags" aria-label="Project tags">
                <li class="portfolio-project-tag">Tag one</li>
                <li class="portfolio-project-tag">Tag two</li>
                <li class="portfolio-project-tag">Tag three</li>
              </ul>
              <a class="portfolio-project-link" href="#" aria-label="View Project name here">
                View project
                <span class="portfolio-project-link-icon" aria-hidden="true"></span>
              </a>
            </div>
          </article>
        </div>
        <div class="portfolio-section-viewall">
          <a class="portfolio-section-viewall-btn" href="#">View all</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup lang="ts">
// No props for now
</script>

<style scoped>
.portfolio-section {
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
.portfolio-section-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 80px;
}
.portfolio-section-header {
  width: 100%;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 16px;
}
.portfolio-section-label {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
  text-align: center;
}
.portfolio-section-title-group {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;
}
.portfolio-section-title {
  color: #010605;
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 57.6px;
  text-align: center;
}
.portfolio-section-desc {
  color: #010605;
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 27px;
  text-align: center;
}
.portfolio-section-projects {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 64px;
}
.portfolio-section-project-row {
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: flex-start;
  gap: 32px;
  flex-wrap: wrap;
}
.portfolio-project {
  flex: 1 1 0;
  min-width: 280px;
  max-width: 405px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 24px;
}
.portfolio-project-img {
  width: 100%;
  height: 228px;
  border-radius: 32px;
  object-fit: cover;
  display: block;
}
.portfolio-project-content {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 16px;
}
.portfolio-project-title {
  color: #010605;
  font-size: 24px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 33.6px;
}
.portfolio-project-desc {
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
}
.portfolio-project-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
.portfolio-project-tag {
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
.portfolio-project-link {
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
.portfolio-project-link:hover {
  background: rgba(1, 6, 5, 0.08);
}
.portfolio-project-link-icon {
  width: 24px;
  height: 24px;
  display: inline-block;
  background: url('data:image/svg+xml;utf8,<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L6 6L1 11" stroke="%23010605" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>') center center no-repeat;
  background-size: contain;
}
.portfolio-section-viewall {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
}
.portfolio-section-viewall-btn {
  padding: 10px 24px;
  background: rgba(1, 6, 5, 0.05);
  border-radius: 100px;
  color: #010605;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  text-decoration: none;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  border: none;
  outline: none;
  transition: background 0.2s;
}
.portfolio-section-viewall-btn:hover {
  background: rgba(1, 6, 5, 0.08);
}
@media (max-width: 1200px) {
  .portfolio-section-project-row {
    gap: 24px;
  }
}
@media (max-width: 900px) {
  .portfolio-section {
    padding: 64px 24px;
    gap: 40px;
  }
  .portfolio-section-title {
    font-size: 32px;
    line-height: 40px;
  }
  .portfolio-section-container {
    gap: 40px;
  }
  .portfolio-section-project-row {
    flex-direction: column;
    gap: 32px;
  }
  .portfolio-project {
    max-width: 100%;
  }
}
@media (max-width: 600px) {
  .portfolio-section {
    padding: 32px 8px;
    gap: 24px;
  }
  .portfolio-section-title {
    font-size: 20px;
    line-height: 28px;
  }
  .portfolio-section-desc {
    font-size: 15px;
    line-height: 22px;
  }
  .portfolio-project-img {
    height: 140px;
    border-radius: 16px;
  }
}
</style>
