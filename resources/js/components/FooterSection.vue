<template>
  <div class="footer-section">
    <div class="footer-container">
      <div class="footer-main">
        <div class="footer-links">
          <div class="footer-links-title">Quick Links</div>
          <div class="footer-links-list">
            <Link class="footer-link" href="/">Home</Link>
            <Link class="footer-link" href="/about">About</Link>
            <Link class="footer-link" href="/services">Services</Link>
            <Link class="footer-link" href="/contact">Contact</Link>
            <Link class="footer-link" href="/blog">Blog Posts</Link>
            <Link class="footer-link" href="/portfolio">Portfolio</Link>
          </div>
        </div>
        <div class="footer-social">
          <div class="footer-links-title">Stay Connected</div>
          <div class="footer-links-list">
            <a class="footer-link" href="#">Facebook</a>
            <a class="footer-link" href="#">Instagram</a>
            <a class="footer-link" href="#">LinkedIn</a>
          </div>
        </div>
        <div class="footer-newsletter">
          <div class="footer-links-title">Newsletter</div>
          <div class="footer-links-list">
            <a class="footer-link" href="#">Sign Up</a>
            <a class="footer-link" href="#">Latest News</a>
            <a class="footer-link" href="#">Support Center</a>
            <a class="footer-link" href="#">FAQs</a>
            <a class="footer-link" href="#">Feedback</a>
          </div>
        </div>
        <div class="footer-subscribe">
          <div class="footer-subscribe-title">Subscribe</div>
          <div class="footer-subscribe-desc">Join our newsletter for updates on features and new releases.</div>
          <div class="footer-subscribe-form">
            <div class="footer-input-wrapper">
              <input id="footer-email" class="footer-input" type="email" placeholder="Your Email" />
            </div>
            <button class="footer-btn">Subscribe</button>
          </div>
          <div class="footer-subscribe-note">By subscribing, you agree to our Privacy Policy and receive updates.</div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-divider"></div>
        <div class="footer-bottom-flex">
          <div class="footer-bottom-links">
            <div>© 2025 PattersonMade. All rights reserved.</div>
            <Link href="/privacy" class="footer-link">Privacy Policy</Link>
            <Link href="/terms" class="footer-link">Terms of Use</Link>
            <div class="footer-bottom-link">Cookie Settings</div>
          </div>
          <div class="footer-bottom-icons">
            <div class="footer-icon footer-icon-facebook"></div>
            <div class="footer-icon footer-icon-linkedin"></div>
            <div class="footer-icon footer-icon-instagram"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<style scoped>
.footer-section {
  align-self: stretch;
  padding: 80px 64px;
  background: #510E72;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  gap: 80px;
}
.footer-container {
  width: 100%;
  max-width: 1280px;
  display: flex;
  flex-direction: column;
  gap: 80px;
}
.footer-main {
  display: flex;
  flex-direction: row;
  gap: 128px;
  align-items: flex-start;
  width: 100%;
}
.footer-links, .footer-social, .footer-newsletter {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  gap: 16px;
  min-width: 120px;
}
.footer-links-title {
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
}
.footer-links-list {
  display: flex;
  flex-direction: column;
  gap: 0;
}
.footer-link {
  color: white;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 21px;
  padding: 8px 0;
  cursor: pointer;
}
.footer-subscribe {
  width: 400px;
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.footer-subscribe-title {
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 600;
  line-height: 24px;
}
.footer-subscribe-desc {
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 24px;
}
.footer-subscribe-form {
  display: flex;
  gap: 16px;
  width: 100%;
}
.footer-input {
  flex: 2 1 0;
  min-width: 0;
  padding: 8px 12px;
  border-radius: 12px;
  border: 1px solid white;
  background: rgba(255,255,255,0.30);
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  outline: none;
  box-sizing: border-box;
  width: 100%;
  max-width: 400px;
}
.footer-input-label {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: white;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  pointer-events: none;
  opacity: 0.7;
}
.footer-input:focus + .footer-input-label,
.footer-input:not(:placeholder-shown) + .footer-input-label {
  display: none;
}
.footer-btn {
  padding: 10px 24px;
  border-radius: 100px;
  border: 1px solid #F97316;
  background: #F97316;
  color: white;
  font-size: 16px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 500;
  cursor: pointer;
  min-width: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
.footer-btn:hover {
  background: #EA580C;
}
.footer-subscribe-note {
  color: white;
  font-size: 12px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
  line-height: 18px;
}
.footer-bottom {
  display: flex;
  flex-direction: column;
  gap: 32px;
  width: 100%;
}
.footer-bottom-links {
  display: flex;
  gap: 24px;
  align-items: center;
  color: white;
  font-size: 14px;
  font-family: 'Source Sans 3', sans-serif;
  font-weight: 400;
}
.footer-bottom-link {
  text-decoration: underline;
  cursor: pointer;
}
.footer-bottom-icons {
  display: flex;
  gap: 12px;
}
.footer-icon {
  width: 24px;
  height: 24px;
  background: white;
  border-radius: 4px;
}
.footer-icon-facebook {
  background: url('/icon/facebook.png') center center / contain no-repeat, white;
}
.footer-icon-linkedin {
  background: url('/icon/linkedin.png') center center / contain no-repeat, white;
}
.footer-icon-instagram {
  background: url('/icon/instagram.png') center center / contain no-repeat, white;
}
.footer-input-wrapper {
  position: relative;
  width: 100%;
}
.footer-divider {
  height: 0px;
  outline: 1px white solid;
  outline-offset: -0.5px;
}
.footer-bottom-flex {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
  flex-wrap: wrap;
  gap: 16px 0;
}
@media (max-width: 1024px) {
  .footer-main {
    flex-direction: column;
    gap: 40px;
  }
  .footer-subscribe {
    width: 100%;
  }
  .footer-bottom-links {
    flex-wrap: wrap;
    gap: 16px;
  }
}
@media (max-width: 600px) {
  .footer-section {
    padding: 32px 8px;
    gap: 32px;
  }
  .footer-container {
    gap: 32px;
  }
  .footer-main {
    gap: 16px;
  }
  .footer-links, .footer-social, .footer-newsletter, .footer-subscribe {
    min-width: 0;
    width: 100%;
    gap: 8px;
  }
  .footer-subscribe {
    gap: 12px;
  }
  .footer-subscribe-form {
    flex-direction: column;
    gap: 8px;
    width: 100%;
  }
  .footer-btn, .footer-input {
    width: 100%;
    min-width: 0;
    font-size: 15px;
    box-sizing: border-box;
    max-width: 100%;
  }
  .footer-bottom {
    gap: 8px;
  }
  .footer-bottom-links {
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
  }
  .footer-bottom-icons {
    gap: 8px;
  }
}
</style>
