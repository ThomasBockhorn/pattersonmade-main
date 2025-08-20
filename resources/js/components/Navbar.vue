<template>
  <nav class="navbar">
    <div class="navbar-container">
      <div class="navbar-logo">
        <img src="/img/image.png" alt="Logo of PattersonMade" />
        <div class="navbar-title">
          <span class="navbar-title-small"> </span>
          <span class="navbar-title-main">PattersonMade<br/></span>
        </div>
      </div>
      <button class="navbar-toggle" @click="isOpen = !isOpen" aria-label="Toggle navigation">
        <span class="navbar-toggle-bar"></span>
        <span class="navbar-toggle-bar"></span>
        <span class="navbar-toggle-bar"></span>
      </button>
      <div :class="['navbar-links', { open: isOpen }]">
        <Link href="/" class="navbar-link" @click="closeMenuOnMobile">Home</Link>
        <Link href="/about" class="navbar-link" @click="closeMenuOnMobile">About</Link>
        <Link href="/portfolio" class="navbar-link" @click="closeMenuOnMobile">Portfolio</Link>
        <Link href="/services" class="navbar-link" @click="closeMenuOnMobile">Services</Link>
        <Link href="/blog" class="navbar-link" @click="closeMenuOnMobile">Blog</Link>
        <Link href="/contact" class="navbar-link" @click="closeMenuOnMobile">Contact</Link>
        <a href="#" class="navbar-inquire" @click="closeMenuOnMobile">Inquire</a>
      </div>
    </div>
  </nav>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue';
const isOpen = ref(false);

function closeMenuOnMobile(e: Event) {
  if (window.innerWidth <= 900) {
    isOpen.value = false;
  }
}
</script>

<style scoped>
.navbar {
  align-self: stretch;
  height: 72px;
  padding-left: 64px;
  padding-right: 64px;
  background: var(--Color-Scheme-1-Background, white);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  z-index: 10;
}
.navbar-container {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.navbar-logo {
  width: 198px;
  height: 74px;
  display: flex;
  align-items: center;
}
.navbar-logo img {
  width: 53px;
  height: 53px;
}
.navbar-title {
  width: 145px;
  height: 54px;
  margin-left: 8px;
}
.navbar-title-main {
  color: black;
  font-size: 20px;
  font-family: 'Jacques Francois', serif;
  font-weight: 400;
  line-height: 30px;
}
.navbar-links {
  display: flex;
  align-items: center;
  gap: 32px;
  transition: max-height 0.3s ease;
}
.navbar-link {
  color: var(--Color-Scheme-1-Text, #010605);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
  text-decoration: none;
  padding: 4px 0;
}
.navbar-inquire {
  padding: 8px 20px;
  background: #F97316;
  border-radius: 100px;
  outline: 1px #F97316 solid;
  color: var(--Color-White, white);
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  line-height: 24px;
  text-decoration: none;
  margin-left: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.navbar-inquire:hover {
  background: #EA580C;
}
.navbar-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  background: none;
  border: none;
  cursor: pointer;
  margin-left: 16px;
}
.navbar-toggle-bar {
  width: 28px;
  height: 3px;
  background: #333;
  margin: 3px 0;
  border-radius: 2px;
  transition: 0.3s;
}
@media (max-width: 900px) {
  .navbar {
    padding-left: 24px;
    padding-right: 24px;
  }
  .navbar-links {
    position: absolute;
    top: 72px;
    left: 0;
    width: 100vw;
    background: var(--Color-Scheme-1-Background, white);
    flex-direction: column;
    align-items: flex-start;
    gap: 0;
    max-height: 0;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    z-index: 9;
  }
  .navbar-links.open {
    max-height: 400px;
    padding: 16px 0;
    transition: max-height 0.3s ease;
  }
  .navbar-link, .navbar-inquire {
    width: 100vw;
    box-sizing: border-box;
    padding: 16px 24px;
    margin: 0;
    border-bottom: 1px solid #eee;
    border-radius: 0;
    outline: none;
    display: block;
    text-align: left;
  }
  .navbar-inquire {
    border-bottom: none;
    background: var(--Color-Persian-Indigo, #510E72);
    color: var(--Color-White, white);
    margin-left: 0;
    justify-content: flex-start;
    border-radius: 100px;
    outline: 1px var(--Color-Persian-Indigo, #510E72) solid;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: calc(100vw - 48px);
    margin: 16px 24px 0 24px;
    box-sizing: border-box;
    padding: 8px 20px;
  }
  .navbar-toggle {
    display: flex;
  }
}
</style>
