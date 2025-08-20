<template>
  <section class="testimonial-section">
    <div class="testimonial-header">
      <h2 class="testimonial-title">Client Testimonials</h2>
      <p class="testimonial-subtitle">PattersonMade transformed my vision into a stunning website!</p>
    </div>
    <div class="testimonial-carousel">
      <div class="testimonial-card" v-for="(testimonial, idx) in testimonials" :key="testimonial.name">
        <div class="testimonial-stars">
          <span v-for="n in testimonial.stars" :key="n" class="star"></span>
        </div>
        <p class="testimonial-quote">"{{ testimonial.quote }}"</p>
        <div class="testimonial-user">
          <img :src="testimonial.avatar" :alt="`Avatar of ${testimonial.name}`" class="testimonial-avatar" />
          <div class="testimonial-user-info">
            <div class="testimonial-name">{{ testimonial.name }}</div>
            <div class="testimonial-role">{{ testimonial.role }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-dots">
      <span v-for="n in 6" :key="n" :class="['dot', { active: n === 1 }]" />
    </div>
    <button class="carousel-arrow left" aria-label="Previous testimonial">
      <span class="arrow-icon left"></span>
    </button>
    <button class="carousel-arrow right" aria-label="Next testimonial">
      <span class="arrow-icon right"></span>
    </button>
  </section>
</template>

<script setup lang="ts">
const testimonials = [
  {
    quote: 'The attention to detail was remarkable and refreshing.',
    name: 'Emily Johnson',
    role: 'Founder, Artistry Co.',
    stars: 5,
    avatar: 'https://placehold.co/48x48',
  },
  {
    quote: 'Working with PattersonMade was a game changer for us.',
    name: 'Michael Smith',
    role: 'CEO, Tech Innovations',
    stars: 4,
    avatar: 'https://placehold.co/48x48',
  },
  {
    quote: 'Their support was invaluable throughout the entire process.',
    name: 'Sarah Lee',
    role: 'Owner, Cozy Cafe',
    stars: 6,
    avatar: 'https://placehold.co/48x48',
  },
];

/*const {data: posts} = await useFetch('http://localhost:8000/api/testimonials');

if(posts){
  console.log(posts);
}*/
</script>

<style scoped>
.testimonial-section {
  align-self: stretch;
  padding: 112px 64px;
  background: white;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
  position: relative; /* Ensure arrows are positioned relative to this section */
}
.testimonial-header {
  width: 100%;
  max-width: 768px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 24px;
}
.testimonial-title {
  align-self: stretch;
  text-align: center;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 48px;
  font-family: 'Encode Sans', sans-serif;
  font-weight: 400;
  line-height: 1.2;
}
.testimonial-subtitle {
  align-self: stretch;
  text-align: center;
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 1.5;
}
.testimonial-carousel {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  gap: 32px;
}
.testimonial-card {
  flex: 1 1 0;
  padding: 32px;
  background: var(--Color-Scheme-1-Foreground, #F2F2F2);
  border-radius: 32px;
  display: flex;
  flex-direction: column;
  gap: 24px;
  min-width: 260px;
  max-width: 400px;
}
.testimonial-stars {
  display: flex;
  gap: 4px;
}
.star {
  width: 20px;
  height: 18.89px;
  background: url('/icon/star.png') center center / contain no-repeat;
  display: inline-block;
  border-radius: 4px;
}
.testimonial-quote {
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 18px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 1.5;
}
.testimonial-user {
  display: flex;
  align-items: center;
  gap: 16px;
}
.testimonial-avatar {
  width: 48px;
  height: 48px;
  border-radius: 9999px;
  object-fit: cover;
}
.testimonial-user-info {
  display: flex;
  flex-direction: column;
}
.testimonial-name {
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 1.5;
}
.testimonial-role {
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 1.5;
}
.testimonial-dots {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 9px;
  margin-top: 16px;
}
.dot {
  width: 8px;
  height: 8px;
  background: var(--Color-Scheme-1-Text, #010605);
  border-radius: 9999px;
  opacity: 0.2;
}
.dot.active {
  opacity: 1;
}
.carousel-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: var(--Color-Scheme-1-Foreground, #F2F2F2);
  border-radius: 100px;
  outline: 1px var(--Color-Scheme-1-Background, white) solid;
  outline-offset: -1px;
  padding: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  cursor: pointer;
  z-index: 2;
}
.carousel-arrow.left {
  left: 0;
}
.carousel-arrow.right {
  right: 0;
}
.arrow-icon {
  width: 24px;
  height: 24px;
  display: block;
  position: relative;
}
.arrow-icon.left::before {
  content: '';
  display: block;
  width: 16px;
  height: 16px;
  border-left: 3px solid var(--Color-Scheme-1-Text, #010605);
  border-bottom: 3px solid var(--Color-Scheme-1-Text, #010605);
  position: absolute;
  left: 6px;
  top: 4px;
  transform: rotate(45deg);
}
.arrow-icon.right::before {
  content: '';
  display: block;
  width: 16px;
  height: 16px;
  border-right: 3px solid var(--Color-Scheme-1-Text, #010605);
  border-bottom: 3px solid var(--Color-Scheme-1-Text, #010605);
  position: absolute;
  right: 6px;
  top: 4px;
  transform: rotate(-45deg);
}
@media (max-width: 1024px) {
  .testimonial-carousel {
    flex-direction: column;
    gap: 24px;
    align-items: center;
  }
  .testimonial-card {
    max-width: 100%;
    min-width: 0;
    width: 100%;
  }
}
@media (max-width: 600px) {
  .testimonial-section {
    padding: 64px 16px;
    gap: 48px;
  }
  .testimonial-title {
    font-size: 32px;
  }
  .testimonial-header {
    gap: 16px;
  }
  .testimonial-carousel {
    gap: 16px;
  }
  .testimonial-card {
    display: none;
  }
  .testimonial-card:first-child {
    display: flex;
  }
}
</style>
