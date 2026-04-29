<?php
/*
Template Name: About Section Page
*/

if (!function_exists('mirrorcraft_get_video_blog_inline_css')) {
  function mirrorcraft_get_video_blog_inline_css() {
    return <<<'CSS'
body {
  background:
    radial-gradient(circle at top left, rgba(199, 158, 96, 0.14), transparent 30%),
    radial-gradient(circle at top right, rgba(96, 69, 35, 0.18), transparent 24%),
    #040404;
  color: #f4efe8;
}

body .site-main.page-shell {
  padding-bottom: 0;
}

body .site-header {
  background: rgba(4, 4, 4, 0.92);
  border-bottom-color: rgba(199, 158, 96, 0.16);
  box-shadow: 0 12px 40px rgba(0, 0, 0, 0.28);
}

body .site-brand-mark,
body .nav-list a,
body .brand-tagline,
body .nav-toggle,
body .site-footer,
body .footer-copy,
body .footer-links a,
body .footer-contact-row a,
body .footer-contact-note,
body .footer-meta-title,
body .footer-section-title,
body .footer-wordmark,
body .footer-subbar-shell p {
  color: #f4efe8;
}

body .nav-list a {
  color: rgba(244, 239, 232, 0.72);
}

body .nav-list > li.current-menu-item > a,
body .nav-list > li.current-menu-parent > a,
body .nav-list a:hover,
body .nav-list a:focus-visible {
  color: #fff;
}

body .nav-list > li > a::before {
  background: #c79e60;
}

body .nav-list .sub-menu {
  border-color: rgba(199, 158, 96, 0.18);
  background: rgba(14, 14, 14, 0.96);
  box-shadow: 0 18px 36px rgba(0, 0, 0, 0.32);
}

body .nav-list .sub-menu a {
  color: rgba(244, 239, 232, 0.8);
}

body .nav-list .sub-menu a:hover,
body .nav-list .sub-menu a:focus-visible {
  background: rgba(199, 158, 96, 0.16);
  color: #fff;
}

body .header-actions .button-primary {
  background: transparent;
  border-color: rgba(199, 158, 96, 0.44);
  box-shadow: none;
}

body .header-actions .button-primary:hover,
body .header-actions .button-primary:focus-visible {
  background: rgba(199, 158, 96, 0.12);
}

body .site-footer {
  margin-top: 0;
  background:
    linear-gradient(180deg, rgba(8, 8, 8, 0.96), rgba(4, 4, 4, 0.98)),
    #040404;
  border-top: 1px solid rgba(199, 158, 96, 0.12);
}

body .footer-subbar {
  border-top: 1px solid rgba(199, 158, 96, 0.12);
  background: rgba(0, 0, 0, 0.32);
}

body .footer-links a,
body .footer-contact-row a {
  color: rgba(244, 239, 232, 0.72);
}

body .footer-links a:hover,
body .footer-links a:focus-visible,
body .footer-contact-row a:hover,
body .footer-contact-row a:focus-visible {
  color: #fff;
}

.video-blog-page {
  position: relative;
  padding-bottom: 88px;
}

.video-blog-page::before {
  content: "";
  position: absolute;
  inset: 0 0 auto;
  height: 720px;
  pointer-events: none;
  background:
    linear-gradient(180deg, rgba(0, 0, 0, 0.3), transparent 62%),
    radial-gradient(circle at top right, rgba(199, 158, 96, 0.14), transparent 38%);
}

.video-blog-shell {
  width: var(--shell);
  margin: 0 auto;
}

.video-blog-section {
  position: relative;
  padding: 26px 0;
}

.video-blog-section--tight {
  padding-top: 12px;
}

.video-blog-eyebrow {
  margin: 0 0 10px;
  color: #f0d5a6;
  font-size: 0.88rem;
  font-weight: 700;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.video-blog-hero {
  padding: 18px 0 10px;
}

.video-blog-hero__shell {
  display: grid;
  grid-template-columns: minmax(320px, 0.94fr) minmax(420px, 1.06fr);
  min-height: 620px;
  overflow: hidden;
  border: 1px solid rgba(199, 158, 96, 0.16);
  border-radius: 30px;
  background:
    linear-gradient(90deg, rgba(0, 0, 0, 0.94) 0%, rgba(0, 0, 0, 0.84) 44%, rgba(0, 0, 0, 0.42) 72%, rgba(0, 0, 0, 0.14) 100%),
    #0b0b0b;
  box-shadow: 0 34px 84px rgba(0, 0, 0, 0.42);
}

.video-blog-hero__content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 18px;
  padding: clamp(36px, 5vw, 62px);
}

.video-blog-hero__content .site-breadcrumbs {
  margin-bottom: 4px;
}

.video-blog-hero__content .site-breadcrumbs a,
.video-blog-hero__content .site-breadcrumbs span {
  color: rgba(244, 239, 232, 0.62);
}

.video-blog-hero__content h1 {
  margin: 0;
  max-width: 9.6ch;
  color: #fff;
  font-size: clamp(2.7rem, 4.5vw, 4.35rem);
  line-height: 0.96;
  letter-spacing: -0.04em;
}

.video-blog-hero__lead {
  max-width: 34rem;
  color: rgba(244, 239, 232, 0.78);
  font-size: 1.05rem;
}

.video-blog-hero__actions,
.video-blog-subscribe__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
}

.video-blog-button,
.video-blog-social-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  min-height: 54px;
  padding: 0 24px;
  border: 1px solid transparent;
  border-radius: 10px;
  font-size: 0.94rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: transform 180ms ease, border-color 180ms ease, background 180ms ease, color 180ms ease, filter 180ms ease;
}

.video-blog-button:hover,
.video-blog-button:focus-visible,
.video-blog-social-button:hover,
.video-blog-social-button:focus-visible {
  transform: translateY(-1px);
}

.video-blog-button--solid {
  background: linear-gradient(180deg, #e7c88f, #ca9f5e);
  color: #241607;
}

.video-blog-button--ghost {
  background: rgba(255, 255, 255, 0.02);
  border-color: rgba(230, 200, 153, 0.38);
  color: #fff;
}

.video-blog-button--ghost:hover,
.video-blog-button--ghost:focus-visible {
  background: rgba(230, 200, 153, 0.08);
  border-color: rgba(230, 200, 153, 0.58);
}

.video-blog-hero__media {
  position: relative;
  min-height: 460px;
  overflow: hidden;
}

.video-blog-hero__media::after,
.video-blog-subscribe__visual::after {
  content: "";
  position: absolute;
  inset: 0;
}

.video-blog-hero__media::after {
  background:
    linear-gradient(180deg, rgba(0, 0, 0, 0.08), rgba(0, 0, 0, 0.24)),
    linear-gradient(270deg, rgba(0, 0, 0, 0.18), transparent 32%);
}

.video-blog-hero__media img,
.video-blog-video-card__media img,
.video-blog-featured-card__media img,
.video-blog-article-card__media img,
.video-blog-subscribe__visual img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.video-blog-hero__dots {
  position: absolute;
  right: 22px;
  bottom: 78px;
  z-index: 2;
  display: flex;
  gap: 8px;
}

.video-blog-hero__dots span {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.44);
}

.video-blog-hero__dots .is-active {
  background: #f0d5a6;
}

.video-blog-hero__media-meta,
.video-blog-duration {
  position: absolute;
  z-index: 2;
  border-radius: 999px;
  background: rgba(10, 10, 10, 0.82);
  border: 1px solid rgba(230, 200, 153, 0.2);
  color: #fff;
  backdrop-filter: blur(10px);
}

.video-blog-hero__media-meta {
  right: 22px;
  bottom: 22px;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  padding: 12px 16px;
  font-size: 0.88rem;
}

.video-blog-hero__media-meta span {
  color: rgba(244, 239, 232, 0.72);
}

.video-blog-hero__media-meta strong {
  color: #f0d5a6;
}

.video-blog-grid,
.video-blog-category-grid,
.video-blog-video-grid,
.video-blog-article-grid {
  display: grid;
  gap: 18px;
}

.video-blog-category-grid {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.video-blog-video-grid {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.video-blog-article-grid {
  grid-template-columns: repeat(4, minmax(0, 1fr));
  align-items: start;
}

.video-blog-category-card,
.video-blog-video-card,
.video-blog-featured-card,
.video-blog-article-card,
.video-blog-form-card,
.video-blog-subscribe,
.video-blog-editor-card.entry-card {
  overflow: hidden;
  border: 1px solid rgba(199, 158, 96, 0.14);
  border-radius: 24px;
  background:
    linear-gradient(180deg, rgba(30, 30, 30, 0.92), rgba(13, 13, 13, 0.98)),
    #0e0e0e;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.24);
}

.video-blog-category-card {
  display: grid;
  gap: 16px;
  align-content: start;
  min-height: 214px;
  padding: 26px 20px;
}

.video-blog-category-card:hover,
.video-blog-category-card:focus-visible {
  border-color: rgba(230, 200, 153, 0.28);
  background:
    linear-gradient(180deg, rgba(40, 40, 40, 0.94), rgba(18, 18, 18, 0.98)),
    #121212;
}

.video-blog-category-card__icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  border-radius: 16px;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  color: #fff;
}

.video-blog-category-card__icon svg {
  width: 30px;
  height: 30px;
}

.video-blog-category-card h2,
.video-blog-video-card__body h3,
.video-blog-featured-card__content h2,
.video-blog-article-card__body h3,
.video-blog-form-card__header h2,
.video-blog-subscribe__content h2,
.video-blog-editor-card h2 {
  margin: 0;
  color: #fff;
  line-height: 1.14;
}

.video-blog-category-card h2 {
  font-size: 1.4rem;
}

.video-blog-category-card p,
.video-blog-video-card__body p,
.video-blog-featured-card__content p,
.video-blog-article-card__body p,
.video-blog-form-card__header p,
.video-blog-editor-card .entry-content p,
.video-blog-editor-card .entry-content li,
.video-blog-editor-card .entry-content blockquote {
  color: rgba(244, 239, 232, 0.72);
}

.video-blog-section__bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  margin-bottom: 18px;
}

.video-blog-section__controls {
  display: inline-flex;
  gap: 8px;
}

.video-blog-section__controls a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 10px;
  border: 1px solid rgba(199, 158, 96, 0.2);
  background: rgba(255, 255, 255, 0.02);
  color: #fff;
}

.video-blog-video-card,
.video-blog-article-card {
  display: flex;
  flex-direction: column;
}

.video-blog-video-card__media,
.video-blog-article-card__media,
.video-blog-featured-card__media {
  position: relative;
  overflow: hidden;
  background: #0a0a0a;
}

.video-blog-video-card__media {
  aspect-ratio: 1.12 / 0.8;
}

.video-blog-article-card__media {
  aspect-ratio: 1 / 0.8;
}

.video-blog-play {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  width: 68px;
  height: 68px;
  border-radius: 50%;
  background: rgba(10, 10, 10, 0.72);
  border: 1px solid rgba(255, 255, 255, 0.14);
  transform: translate(-50%, -50%);
  backdrop-filter: blur(10px);
}

.video-blog-play::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: 4px;
  border-style: solid;
  border-width: 11px 0 11px 16px;
  border-color: transparent transparent transparent #fff;
  transform: translate(-50%, -50%);
}

.video-blog-play--large {
  width: 82px;
  height: 82px;
}

.video-blog-play--large::before {
  border-width: 14px 0 14px 20px;
}

.video-blog-duration {
  right: 14px;
  bottom: 14px;
  padding: 8px 12px;
  font-size: 0.8rem;
  font-weight: 700;
  letter-spacing: 0.04em;
}

.video-blog-video-card__body,
.video-blog-article-card__body {
  display: grid;
  gap: 14px;
  padding: 18px 18px 22px;
}

.video-blog-video-card__body h3 {
  font-size: 1.3rem;
}

.video-blog-chip-list {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.video-blog-chip-list span {
  display: inline-flex;
  align-items: center;
  min-height: 28px;
  padding: 0 10px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.05);
  color: rgba(244, 239, 232, 0.82);
  font-size: 0.77rem;
  letter-spacing: 0.04em;
  text-transform: uppercase;
}

.video-blog-featured-card {
  display: grid;
  grid-template-columns: minmax(0, 1.12fr) minmax(320px, 0.88fr);
}

.video-blog-featured-card__media {
  min-height: 360px;
}

.video-blog-featured-card__content {
  display: grid;
  align-content: center;
  gap: 18px;
  padding: clamp(24px, 4vw, 42px);
}

.video-blog-featured-card__content h2 {
  font-size: clamp(2rem, 3.1vw, 2.9rem);
}

.video-blog-link {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: #f0d5a6;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
}

.video-blog-link::after {
  content: "→";
}

.video-blog-form-card {
  display: grid;
  gap: 18px;
  padding: 22px;
}

.video-blog-form-card__header {
  display: grid;
  gap: 10px;
}

.video-blog-form-card__header h2 {
  font-size: 1.95rem;
}

.video-blog-form-card__alert {
  padding: 12px 14px;
  border-radius: 14px;
  font-size: 0.94rem;
}

.video-blog-form-card__alert--success {
  background: rgba(59, 130, 96, 0.18);
  color: #d2f6df;
}

.video-blog-form-card__alert--saved,
.video-blog-form-card__alert--info {
  background: rgba(199, 158, 96, 0.14);
  color: #f6dfbc;
}

.video-blog-form-card__alert--error {
  background: rgba(168, 67, 67, 0.22);
  color: #ffd7d7;
}

.video-blog-form,
.video-blog-form__grid {
  display: grid;
  gap: 12px;
}

.video-blog-form__grid {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.video-blog-form__field {
  display: grid;
  gap: 8px;
}

.video-blog-form__field--full {
  grid-column: 1 / -1;
}

.video-blog-form__field span {
  color: rgba(244, 239, 232, 0.78);
  font-size: 0.88rem;
  font-weight: 600;
}

.video-blog-form__field input,
.video-blog-form__field select,
.video-blog-form__field textarea {
  width: 100%;
  border: 1px solid rgba(199, 158, 96, 0.18);
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.02);
  color: #fff;
  padding: 14px 15px;
  outline: none;
}

.video-blog-form__field textarea {
  min-height: 138px;
  resize: vertical;
}

.video-blog-form__field input::placeholder,
.video-blog-form__field textarea::placeholder {
  color: rgba(244, 239, 232, 0.4);
}

.video-blog-form__field small {
  color: #ffb7b7;
  font-size: 0.84rem;
}

.video-blog-form__submit {
  width: 100%;
  margin-top: 4px;
}

.video-blog-editor-section {
  padding-top: 8px;
}

.video-blog-editor-card.entry-card {
  color: #f4efe8;
}

.video-blog-editor-card .eyebrow {
  color: #f0d5a6;
}

.video-blog-editor-card .entry-content h2,
.video-blog-editor-card .entry-content h3,
.video-blog-editor-card .entry-content h4 {
  color: #fff;
}

.video-blog-subscribe {
  position: relative;
}

.video-blog-subscribe__visual {
  position: absolute;
  inset: 0 0 0 auto;
  width: min(38%, 440px);
  pointer-events: none;
  opacity: 0.44;
}

.video-blog-subscribe__visual::after {
  background: linear-gradient(90deg, rgba(12, 12, 12, 0.94), transparent 42%);
}

.video-blog-subscribe__content {
  position: relative;
  z-index: 1;
  display: grid;
  grid-template-columns: minmax(260px, 0.92fr) minmax(320px, 1.08fr);
  gap: 24px;
  align-items: center;
  padding: 34px 36px;
}

.video-blog-subscribe__content h2 {
  max-width: 17ch;
  font-size: clamp(1.95rem, 3vw, 2.9rem);
}

.video-blog-social-button {
  min-width: 250px;
  color: #fff;
}

.video-blog-social-button--youtube {
  background: linear-gradient(180deg, #d83434, #b61f1f);
}

.video-blog-social-button--linkedin {
  background: linear-gradient(180deg, #1670af, #09507f);
}

.video-blog-social-button__icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 34px;
  height: 34px;
  border-radius: 999px;
  background: rgba(255, 255, 255, 0.14);
}

@media (max-width: 1180px) {
  .video-blog-category-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .video-blog-video-grid,
  .video-blog-article-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .video-blog-form-card {
    grid-column: 1 / -1;
  }
}

@media (max-width: 980px) {
  .video-blog-hero__shell,
  .video-blog-featured-card,
  .video-blog-subscribe__content {
    grid-template-columns: 1fr;
  }

  .video-blog-hero__shell {
    min-height: unset;
  }

  .video-blog-featured-card__media {
    min-height: 300px;
  }

  .video-blog-subscribe__visual {
    width: 100%;
    inset: auto 0 0 0;
    height: 48%;
  }

  .video-blog-subscribe__visual::after {
    background: linear-gradient(180deg, rgba(12, 12, 12, 0.92), transparent 50%);
  }
}

@media (max-width: 760px) {
  .video-blog-page {
    padding-bottom: 72px;
  }

  .video-blog-section {
    padding: 18px 0;
  }

  .video-blog-hero__content h1 {
    max-width: none;
    font-size: clamp(2.2rem, 12vw, 3.1rem);
  }

  .video-blog-category-grid,
  .video-blog-video-grid,
  .video-blog-article-grid,
  .video-blog-form__grid {
    grid-template-columns: 1fr;
  }

  .video-blog-category-card,
  .video-blog-video-card__body,
  .video-blog-article-card__body,
  .video-blog-featured-card__content,
  .video-blog-form-card,
  .video-blog-subscribe__content {
    padding-left: 18px;
    padding-right: 18px;
  }

  .video-blog-section__bar {
    flex-direction: column;
    align-items: flex-start;
  }

  .video-blog-section__controls {
    width: 100%;
    justify-content: flex-end;
  }

  .video-blog-social-button {
    width: 100%;
    min-width: 0;
  }
}
CSS;
  }
}

if (!function_exists('mirrorcraft_render_video_blog_icon')) {
  function mirrorcraft_render_video_blog_icon($slug) {
    switch ($slug) {
      case 'factory':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 21V8.8c0-.4.45-.64.79-.43L8 11V6.8c0-.39.43-.63.77-.44L13 9V4.8c0-.39.43-.63.77-.44l7 4A.5.5 0 0 1 21 8.8V21H3Zm2-2h3v-4h2v4h3v-6h2v6h4V9.38l-4-2.29V12l-4-2.29V14l-4-2.29V19Z"/>
        </svg>
        <?php
        break;
      case 'process':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58a.5.5 0 0 0 .12-.64l-1.92-3.32a.5.5 0 0 0-.61-.22l-2.39.96a7.11 7.11 0 0 0-1.63-.95l-.36-2.54A.5.5 0 0 0 13.89 2h-3.78a.5.5 0 0 0-.5.42l-.36 2.54c-.58.22-1.12.54-1.63.95l-2.39-.96a.5.5 0 0 0-.61.22L2.71 8.48a.5.5 0 0 0 .12.64l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94l-2.03 1.58a.5.5 0 0 0-.12.64l1.92 3.32c.13.22.39.31.61.22l2.39-.96c.51.41 1.05.73 1.63.95l.36 2.54c.04.24.25.42.5.42h3.78a.5.5 0 0 0 .49-.42l.36-2.54c.58-.22 1.12-.54 1.63-.95l2.39.96c.22.09.48 0 .61-.22l1.92-3.32a.5.5 0 0 0-.12-.64l-2.03-1.58ZM12 15.5A3.5 3.5 0 1 1 12 8a3.5 3.5 0 0 1 0 7.5Z"/>
        </svg>
        <?php
        break;
      case 'mirror':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M8 3h8a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-1.5l1.25 2H17v2H7v-2h2.25l1.25-2H8a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Zm0 2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H8Zm3.75 13-.87 2h2.24l-.87-2h-.5Z"/>
        </svg>
        <?php
        break;
      case 'project':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 20V6.5A1.5 1.5 0 0 1 5.5 5h3A1.5 1.5 0 0 1 10 6.5V8h4V3.5A1.5 1.5 0 0 1 15.5 2h3A1.5 1.5 0 0 1 20 3.5V20H4Zm2-2h2v-2H6v2Zm0-4h2v-2H6v2Zm0-4h2V8H6v2Zm4 8h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V8h-2v2Zm6 8h2v-2h-2v2Zm0-4h2v-2h-2v2Zm0-4h2V4h-2v6Z"/>
        </svg>
        <?php
        break;
      case 'guide':
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M9 21h6v-1.5H9V21Zm3-19a7 7 0 0 0-4 12.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26A7 7 0 0 0 12 2Zm2.5 11.57-.5.29V16h-4v-2.14l-.5-.29A5 5 0 1 1 14.5 13.57Z"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_video_blog_page')) {
  function mirrorcraft_render_video_blog_page($post_id) {
    $contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
    $blog_url = function_exists('mirrorcraft_get_blog_hub_index_url')
      ? mirrorcraft_get_blog_hub_index_url()
      : mirrorcraft_link_by_slug('blog', '/blog/');
    $projects_url = mirrorcraft_link_by_slug('projects', '/projects/');
    $products_url = mirrorcraft_link_by_slug('products', '/products/');
    $production_url = mirrorcraft_get_about_section_page_link('production-workshop');
    $quality_url = mirrorcraft_get_about_section_page_link('quality-control');

    if ($production_url === '') {
      $production_url = mirrorcraft_link_by_slug('manufacturing', '/manufacturing/');
    }

    if ($quality_url === '') {
      $quality_url = $production_url;
    }

    $hero_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hospitality-led-mirror-project.webp',
        'hospitality-led-mirror-project.png',
        'home-hero-banner-20260423c.webp',
        'home-hero-banner-20260423c.jpg',
      )
    );
    $factory_image = mirrorcraft_theme_image_first_available_url(
      array(
        'factory.avif',
        'factory.png',
        'factory-20260420.png',
        'who-we-are-workshop.webp',
        'who-we-are-workshop.png',
      )
    );
    $inspection_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-inspection.png',
        'who-we-are-workshop.png',
      )
    );
    $line_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-workshop.webp',
        'who-we-are-workshop.png',
        'factory.png',
      )
    );
    $packaging_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-warehouse.webp',
        'who-we-are-warehouse.png',
      )
    );
    $mirror_scene_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hero-bathroom-led-scene-hero.jpg',
        'hero-bathroom-led-scene.jpg',
        'home-hero-banner-20260423c.jpg',
      )
    );
    $mirror_detail_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hero-bathroom-led-scene-alt-hero.jpg',
        'hero-bathroom-led-scene-alt.jpg',
        'hero-bathroom-led-scene-mobile.jpg',
      )
    );
    $subscribe_image = mirrorcraft_theme_image_first_available_url(
      array(
        'home-hero-banner-20260423c.webp',
        'home-hero-banner-20260423c.jpg',
        'hospitality-led-mirror-project.png',
      )
    );

    if ($factory_image === '') {
      $factory_image = $line_image;
    }

    if ($inspection_image === '') {
      $inspection_image = $factory_image;
    }

    if ($line_image === '') {
      $line_image = $factory_image;
    }

    if ($packaging_image === '') {
      $packaging_image = $line_image;
    }

    if ($mirror_scene_image === '') {
      $mirror_scene_image = $hero_image;
    }

    if ($mirror_detail_image === '') {
      $mirror_detail_image = $mirror_scene_image;
    }

    if ($subscribe_image === '') {
      $subscribe_image = $hero_image;
    }

    $hero_lead = mirrorcraft_get_page_summary(
      $post_id,
      __('From raw glass to finished smart mirrors, explore how OJMIRROR handles production, inspection, and project-ready delivery for global buyers.', 'mirrorcraft')
    );

    $category_cards = array(
      array(
        'icon'  => 'factory',
        'title' => __('Factory & Capability', 'mirrorcraft'),
        'count' => __('12 Videos', 'mirrorcraft'),
        'url'   => $production_url,
      ),
      array(
        'icon'  => 'process',
        'title' => __('Production Process', 'mirrorcraft'),
        'count' => __('18 Videos', 'mirrorcraft'),
        'url'   => $quality_url,
      ),
      array(
        'icon'  => 'mirror',
        'title' => __('Product Showcase', 'mirrorcraft'),
        'count' => __('16 Videos', 'mirrorcraft'),
        'url'   => $products_url,
      ),
      array(
        'icon'  => 'project',
        'title' => __('Project Cases', 'mirrorcraft'),
        'count' => __('14 Videos', 'mirrorcraft'),
        'url'   => $projects_url,
      ),
      array(
        'icon'  => 'guide',
        'title' => __('Buying Guide', 'mirrorcraft'),
        'count' => __('10 Videos', 'mirrorcraft'),
        'url'   => $blog_url,
      ),
    );

    $video_cards = array(
      array(
        'image'       => $factory_image,
        'duration'    => '02:45',
        'title'       => __('Inside Our LED Mirror Factory in China', 'mirrorcraft'),
        'description' => __('Take a look at our advanced production lines, workshop flow, and large-scale manufacturing environment.', 'mirrorcraft'),
        'tags'        => array(__('Factory', 'mirrorcraft'), __('Capability', 'mirrorcraft')),
        'url'         => $production_url,
      ),
      array(
        'image'       => $inspection_image,
        'duration'    => '03:12',
        'title'       => __('How We Ensure Mirror Quality Before Shipping', 'mirrorcraft'),
        'description' => __('Strict quality control from raw material checks to final inspection before export delivery.', 'mirrorcraft'),
        'tags'        => array(__('Quality', 'mirrorcraft'), __('Inspection', 'mirrorcraft')),
        'url'         => $quality_url,
      ),
      array(
        'image'       => $hero_image,
        'duration'    => '02:31',
        'title'       => __('Custom LED Mirror for Hotel Project (Full Process)', 'mirrorcraft'),
        'description' => __('From design to installation, see how we support hospitality projects with tailored mirror programs.', 'mirrorcraft'),
        'tags'        => array(__('Project', 'mirrorcraft'), __('Customization', 'mirrorcraft')),
        'url'         => $projects_url,
      ),
      array(
        'image'       => $mirror_scene_image,
        'duration'    => '01:59',
        'title'       => __('What Is Anti-Fog Mirror and How It Works', 'mirrorcraft'),
        'description' => __('Learn the anti-fog principle and the practical features buyers ask about most often.', 'mirrorcraft'),
        'tags'        => array(__('Guide', 'mirrorcraft'), __('Technology', 'mirrorcraft')),
        'url'         => $blog_url,
      ),
    );

    $article_cards = array(
      array(
        'image'       => $mirror_scene_image,
        'title'       => __('How to Choose the Right Bathroom Mirror', 'mirrorcraft'),
        'description' => __('A complete guide to help buyers balance lighting, size, function, and project fit.', 'mirrorcraft'),
        'url'         => $blog_url,
      ),
      array(
        'image'       => $mirror_detail_image,
        'title'       => __('LED Mirror vs Traditional Mirror: Which Is Better?', 'mirrorcraft'),
        'description' => __('Compare the core differences, feature advantages, and use cases for modern bathroom programs.', 'mirrorcraft'),
        'url'         => $products_url,
      ),
      array(
        'image'       => $packaging_image,
        'title'       => __('5 Key Factors That Affect LED Mirror Quality', 'mirrorcraft'),
        'description' => __('Understand the production details that influence lighting performance, structure, and delivery reliability.', 'mirrorcraft'),
        'url'         => $quality_url,
      ),
    );

    $video_blog_form_state = mirrorcraft_get_contact_form_state('video-blog');
    $current_request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
    $current_request_url = esc_url_raw(remove_query_arg(array('inquiry_token'), home_url($current_request_uri)));
    $video_blog_project_types = mirrorcraft_get_inquiry_project_type_options();
    ?>
    <style><?php echo mirrorcraft_get_video_blog_inline_css(); ?></style>
    <div class="video-blog-page">
      <section class="video-blog-hero">
        <div class="video-blog-shell">
          <div class="video-blog-hero__shell">
            <div class="video-blog-hero__content">
              <?php mirrorcraft_render_breadcrumbs(); ?>
              <p class="video-blog-eyebrow"><?php echo esc_html(get_the_title($post_id)); ?></p>
              <h1><?php esc_html_e('See How We Manufacture Premium LED Mirrors', 'mirrorcraft'); ?></h1>
              <p class="video-blog-hero__lead"><?php echo esc_html($hero_lead); ?></p>
              <div class="video-blog-hero__actions">
                <a class="video-blog-button video-blog-button--solid" href="#video-blog-latest"><?php esc_html_e('Watch Factory Tour', 'mirrorcraft'); ?></a>
                <a class="video-blog-button video-blog-button--ghost" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
              </div>
            </div>

            <div class="video-blog-hero__media">
              <?php if ($hero_image !== '') : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Premium LED mirror video blog hero scene', 'mirrorcraft'); ?>" width="1536" height="1024" fetchpriority="high">
              <?php endif; ?>
              <div class="video-blog-hero__dots" aria-hidden="true">
                <span></span>
                <span class="is-active"></span>
                <span></span>
              </div>
              <div class="video-blog-hero__media-meta">
                <span><?php esc_html_e('Featured factory walkthrough', 'mirrorcraft'); ?></span>
                <strong>04:15</strong>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="video-blog-section video-blog-section--tight">
        <div class="video-blog-shell">
          <p class="video-blog-eyebrow"><?php esc_html_e('Explore Videos by Category', 'mirrorcraft'); ?></p>
          <div class="video-blog-category-grid">
            <?php foreach ($category_cards as $card) : ?>
              <a class="video-blog-category-card" href="<?php echo esc_url($card['url']); ?>">
                <span class="video-blog-category-card__icon" aria-hidden="true"><?php mirrorcraft_render_video_blog_icon($card['icon']); ?></span>
                <h2><?php echo esc_html($card['title']); ?></h2>
                <p><?php echo esc_html($card['count']); ?></p>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="video-blog-latest" class="video-blog-section">
        <div class="video-blog-shell">
          <div class="video-blog-section__bar">
            <p class="video-blog-eyebrow"><?php esc_html_e('Latest Videos', 'mirrorcraft'); ?></p>
            <div class="video-blog-section__controls">
              <a href="#video-blog-featured" aria-label="<?php esc_attr_e('Jump to featured video', 'mirrorcraft'); ?>"><span aria-hidden="true">&#8249;</span></a>
              <a href="#video-blog-articles" aria-label="<?php esc_attr_e('Jump to video and article section', 'mirrorcraft'); ?>"><span aria-hidden="true">&#8250;</span></a>
            </div>
          </div>

          <div class="video-blog-video-grid">
            <?php foreach ($video_cards as $card) : ?>
              <article class="video-blog-video-card">
                <a class="video-blog-video-card__media" href="<?php echo esc_url($card['url']); ?>">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="800" loading="lazy" decoding="async">
                  <?php endif; ?>
                  <span class="video-blog-play" aria-hidden="true"></span>
                  <span class="video-blog-duration"><?php echo esc_html($card['duration']); ?></span>
                </a>
                <div class="video-blog-video-card__body">
                  <h3><a href="<?php echo esc_url($card['url']); ?>"><?php echo esc_html($card['title']); ?></a></h3>
                  <div class="video-blog-chip-list">
                    <?php foreach ($card['tags'] as $tag) : ?>
                      <span><?php echo esc_html($tag); ?></span>
                    <?php endforeach; ?>
                  </div>
                  <p><?php echo esc_html($card['description']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="video-blog-featured" class="video-blog-section">
        <div class="video-blog-shell">
          <article class="video-blog-featured-card">
            <a class="video-blog-featured-card__media" href="<?php echo esc_url($production_url); ?>">
              <?php if ($line_image !== '') : ?>
                <img src="<?php echo esc_url($line_image); ?>" alt="<?php esc_attr_e('LED mirror workshop production line', 'mirrorcraft'); ?>" width="1400" height="900" loading="lazy" decoding="async">
              <?php endif; ?>
              <span class="video-blog-play video-blog-play--large" aria-hidden="true"></span>
              <span class="video-blog-duration">04:15</span>
            </a>
            <div class="video-blog-featured-card__content">
              <p class="video-blog-eyebrow"><?php esc_html_e('Featured Video', 'mirrorcraft'); ?></p>
              <h2><?php esc_html_e('Trusted by Global Buyers for Large-Scale Mirror Projects', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Watch our complete production process, advanced equipment, and how we handle bulk orders with high quality and on-time delivery.', 'mirrorcraft'); ?></p>
              <a class="video-blog-button video-blog-button--solid" href="<?php echo esc_url($production_url); ?>"><?php esc_html_e('Watch Now', 'mirrorcraft'); ?></a>
            </div>
          </article>
        </div>
      </section>

      <section id="video-blog-articles" class="video-blog-section">
        <div class="video-blog-shell">
          <p class="video-blog-eyebrow"><?php esc_html_e('Video & Article', 'mirrorcraft'); ?></p>
          <div class="video-blog-article-grid">
            <?php foreach ($article_cards as $card) : ?>
              <article class="video-blog-article-card">
                <a class="video-blog-article-card__media" href="<?php echo esc_url($card['url']); ?>">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="900" loading="lazy" decoding="async">
                  <?php endif; ?>
                </a>
                <div class="video-blog-article-card__body">
                  <h3><a href="<?php echo esc_url($card['url']); ?>"><?php echo esc_html($card['title']); ?></a></h3>
                  <p><?php echo esc_html($card['description']); ?></p>
                  <a class="video-blog-link" href="<?php echo esc_url($card['url']); ?>"><?php esc_html_e('Read More', 'mirrorcraft'); ?></a>
                </div>
              </article>
            <?php endforeach; ?>

            <aside class="video-blog-form-card" id="video-blog-form">
              <div class="video-blog-form-card__header">
                <h2><?php esc_html_e('Have a Mirror Project in Mind?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Tell us your requirements and we will get back to you within 24 hours.', 'mirrorcraft'); ?></p>
              </div>

              <?php if (!empty($video_blog_form_state['message'])) : ?>
                <div class="video-blog-form-card__alert video-blog-form-card__alert--<?php echo esc_attr($video_blog_form_state['status'] ?: 'info'); ?>" role="status" aria-live="polite">
                  <?php echo esc_html($video_blog_form_state['message']); ?>
                </div>
              <?php endif; ?>

              <form class="video-blog-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="mirrorcraft_submit_inquiry">
                <input type="hidden" name="redirect_to" value="<?php echo esc_url($current_request_url); ?>">
                <input type="hidden" name="response_anchor" value="video-blog-form">
                <input type="hidden" name="contact_form_context" value="video-blog">
                <input type="hidden" name="contact_product_interest" value="<?php echo esc_attr(__('Custom Mirror Program', 'mirrorcraft')); ?>">
                <input type="hidden" name="website" value="">
                <?php wp_nonce_field('mirrorcraft_submit_inquiry', 'mirrorcraft_inquiry_nonce'); ?>

                <div class="video-blog-form__grid">
                  <label class="video-blog-form__field">
                    <span><?php esc_html_e('Name', 'mirrorcraft'); ?>*</span>
                    <input type="text" name="contact_name" value="<?php echo esc_attr(mirrorcraft_contact_form_value($video_blog_form_state, 'name')); ?>" placeholder="<?php esc_attr_e('Name*', 'mirrorcraft'); ?>" required>
                    <?php if (mirrorcraft_contact_form_error($video_blog_form_state, 'name')) : ?>
                      <small><?php echo esc_html(mirrorcraft_contact_form_error($video_blog_form_state, 'name')); ?></small>
                    <?php endif; ?>
                  </label>

                  <label class="video-blog-form__field">
                    <span><?php esc_html_e('Email', 'mirrorcraft'); ?>*</span>
                    <input type="email" name="contact_email" value="<?php echo esc_attr(mirrorcraft_contact_form_value($video_blog_form_state, 'email')); ?>" placeholder="<?php esc_attr_e('Email*', 'mirrorcraft'); ?>" required>
                    <?php if (mirrorcraft_contact_form_error($video_blog_form_state, 'email')) : ?>
                      <small><?php echo esc_html(mirrorcraft_contact_form_error($video_blog_form_state, 'email')); ?></small>
                    <?php endif; ?>
                  </label>

                  <label class="video-blog-form__field">
                    <span><?php esc_html_e('Project Type', 'mirrorcraft'); ?></span>
                    <select name="contact_project_type">
                      <option value=""><?php esc_html_e('Project Type', 'mirrorcraft'); ?></option>
                      <?php foreach ($video_blog_project_types as $option) : ?>
                        <option value="<?php echo esc_attr($option); ?>" <?php selected(mirrorcraft_contact_form_value($video_blog_form_state, 'project_type'), $option); ?>>
                          <?php echo esc_html($option); ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </label>

                  <label class="video-blog-form__field">
                    <span><?php esc_html_e('Quantity (PCS)', 'mirrorcraft'); ?></span>
                    <input type="text" name="contact_quantity" value="<?php echo esc_attr(mirrorcraft_contact_form_value($video_blog_form_state, 'quantity')); ?>" placeholder="<?php esc_attr_e('Quantity (PCS)', 'mirrorcraft'); ?>">
                  </label>

                  <label class="video-blog-form__field video-blog-form__field--full">
                    <span><?php esc_html_e('Message', 'mirrorcraft'); ?></span>
                    <textarea name="contact_message" rows="6" placeholder="<?php esc_attr_e('Tell us the mirror style, size, function, quantity, and target market.', 'mirrorcraft'); ?>" required><?php echo esc_textarea(mirrorcraft_contact_form_value($video_blog_form_state, 'message')); ?></textarea>
                    <?php if (mirrorcraft_contact_form_error($video_blog_form_state, 'message')) : ?>
                      <small><?php echo esc_html(mirrorcraft_contact_form_error($video_blog_form_state, 'message')); ?></small>
                    <?php endif; ?>
                  </label>
                </div>

                <button class="video-blog-button video-blog-button--solid video-blog-form__submit" type="submit"><?php esc_html_e('Get Free Quote', 'mirrorcraft'); ?></button>
              </form>
            </aside>
          </div>
        </div>
      </section>

      <?php
      mirrorcraft_render_visual_editor_section(
        array(
          'section_class' => 'video-blog-editor-section',
          'shell_class'   => 'video-blog-shell',
          'article_class' => 'video-blog-editor-card',
          'eyebrow'       => __('Additional Notes', 'mirrorcraft'),
          'title'         => __('More Product and Factory Updates', 'mirrorcraft'),
          'description'   => __('Use the editor content area below for channel updates, embedded videos, or supplementary copy if needed.', 'mirrorcraft'),
        )
      );
      ?>

      <section class="video-blog-section">
        <div class="video-blog-shell">
          <div class="video-blog-subscribe">
            <?php if ($subscribe_image !== '') : ?>
              <div class="video-blog-subscribe__visual" aria-hidden="true">
                <img src="<?php echo esc_url($subscribe_image); ?>" alt="" width="1200" height="800" loading="lazy" decoding="async">
              </div>
            <?php endif; ?>

            <div class="video-blog-subscribe__content">
              <div>
                <p class="video-blog-eyebrow"><?php esc_html_e('Subscribe to Our Channel', 'mirrorcraft'); ?></p>
                <h2><?php esc_html_e('Get the latest videos about new products, projects, and industry insights.', 'mirrorcraft'); ?></h2>
              </div>

              <div class="video-blog-subscribe__actions">
                <a class="video-blog-social-button video-blog-social-button--youtube" href="#video-blog-latest">
                  <span class="video-blog-social-button__icon" aria-hidden="true">▶</span>
                  <span><?php esc_html_e('Subscribe on YouTube', 'mirrorcraft'); ?></span>
                </a>
                <a class="video-blog-social-button video-blog-social-button--linkedin" href="#video-blog-articles">
                  <span class="video-blog-social-button__icon" aria-hidden="true">in</span>
                  <span><?php esc_html_e('Follow on LinkedIn', 'mirrorcraft'); ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
  }
}

if (!function_exists('mirrorcraft_get_quality_control_inline_css')) {
  function mirrorcraft_get_quality_control_inline_css() {
    return <<<'CSS'
body {
  background:
    linear-gradient(180deg, #f4f7fb 0%, #eef3f8 100%);
  color: #10203c;
}

body .site-main.page-shell {
  padding-bottom: 0;
}

body .site-header {
  background: rgba(8, 20, 40, 0.92);
  border-bottom-color: rgba(255, 255, 255, 0.08);
  box-shadow: 0 12px 36px rgba(8, 20, 40, 0.24);
}

body .site-brand-mark,
body .nav-list a,
body .brand-tagline,
body .nav-toggle,
body .site-footer,
body .footer-copy,
body .footer-links a,
body .footer-contact-row a,
body .footer-contact-note,
body .footer-meta-title,
body .footer-section-title,
body .footer-wordmark,
body .footer-subbar-shell p {
  color: #eef4ff;
}

body .nav-list a {
  color: rgba(238, 244, 255, 0.72);
}

body .nav-list > li.current-menu-item > a,
body .nav-list > li.current-menu-parent > a,
body .nav-list a:hover,
body .nav-list a:focus-visible {
  color: #fff;
}

body .nav-list > li > a::before {
  background: #2f67ff;
}

body .nav-list .sub-menu {
  border-color: rgba(47, 103, 255, 0.16);
  background: rgba(10, 22, 42, 0.98);
  box-shadow: 0 18px 36px rgba(5, 12, 24, 0.34);
}

body .nav-list .sub-menu a {
  color: rgba(238, 244, 255, 0.82);
}

body .nav-list .sub-menu a:hover,
body .nav-list .sub-menu a:focus-visible {
  background: rgba(47, 103, 255, 0.16);
  color: #fff;
}

body .header-actions .button-primary {
  background: linear-gradient(180deg, #3f7bff, #2259ea);
  border-color: transparent;
  color: #fff;
  box-shadow: 0 16px 32px rgba(34, 89, 234, 0.3);
}

body .header-actions .button-primary:hover,
body .header-actions .button-primary:focus-visible {
  background: linear-gradient(180deg, #4b85ff, #285eef);
}

body .site-footer {
  margin-top: 0;
  background:
    linear-gradient(180deg, rgba(7, 20, 38, 0.98), rgba(4, 12, 26, 0.99)),
    #081224;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

body .footer-subbar {
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  background: rgba(0, 0, 0, 0.22);
}

body .footer-links a,
body .footer-contact-row a {
  color: rgba(238, 244, 255, 0.72);
}

body .footer-links a:hover,
body .footer-links a:focus-visible,
body .footer-contact-row a:hover,
body .footer-contact-row a:focus-visible {
  color: #fff;
}

.qc-page {
  --qc-blue: #2f67ff;
  --qc-blue-deep: #1d4ed8;
  --qc-ink: #10203c;
  --qc-muted: #5f6f86;
  --qc-line: rgba(16, 32, 60, 0.1);
  --qc-surface: #ffffff;
  --qc-surface-soft: #f6f8fc;
  --qc-dark: #08182f;
  position: relative;
  padding-bottom: 88px;
  color: var(--qc-ink);
}

.qc-shell {
  width: var(--shell);
  margin: 0 auto;
}

.qc-page a {
  color: inherit;
}

.qc-page p,
.qc-page h1,
.qc-page h2,
.qc-page h3,
.qc-page h4 {
  margin: 0;
}

.qc-page img {
  display: block;
  max-width: 100%;
}

.qc-section {
  padding: 26px 0;
}

.qc-section-title {
  text-align: center;
  margin-bottom: 20px;
}

.qc-section-title h2 {
  font-size: clamp(2rem, 3vw, 2.9rem);
  line-height: 1.08;
  letter-spacing: -0.03em;
  text-transform: uppercase;
}

.qc-section-title p {
  margin-top: 10px;
  color: var(--qc-muted);
  font-size: 1.02rem;
}

.qc-hero {
  padding: 16px 0 40px;
}

.qc-hero__card {
  display: grid;
  grid-template-columns: minmax(320px, 0.94fr) minmax(400px, 1.06fr);
  overflow: hidden;
  border-radius: 34px;
  background:
    linear-gradient(90deg, rgba(6, 17, 36, 0.95) 0%, rgba(6, 17, 36, 0.88) 42%, rgba(6, 17, 36, 0.45) 72%, rgba(6, 17, 36, 0.18) 100%),
    #07162c;
  box-shadow: 0 34px 84px rgba(8, 20, 40, 0.24);
}

.qc-hero__content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 18px;
  padding: clamp(34px, 5vw, 60px);
  color: #fff;
}

.qc-hero__content .site-breadcrumbs a,
.qc-hero__content .site-breadcrumbs span {
  color: rgba(255, 255, 255, 0.62);
}

.qc-eyebrow {
  color: rgba(157, 191, 255, 0.98);
  font-size: 0.88rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
}

.qc-hero__content h1 {
  max-width: 11ch;
  font-size: clamp(2.7rem, 4.8vw, 4.5rem);
  line-height: 0.96;
  letter-spacing: -0.04em;
}

.qc-hero__content p:not(.qc-eyebrow) {
  max-width: 32rem;
  color: rgba(240, 245, 255, 0.84);
  font-size: 1.08rem;
  line-height: 1.7;
}

.qc-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
}

.qc-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 56px;
  padding: 0 24px;
  border: 1px solid transparent;
  border-radius: 12px;
  font-size: 0.95rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: transform 180ms ease, background 180ms ease, border-color 180ms ease, color 180ms ease;
}

.qc-button:hover,
.qc-button:focus-visible {
  transform: translateY(-1px);
}

.qc-button--primary {
  background: linear-gradient(180deg, #4b86ff, #255de9);
  color: #fff;
  box-shadow: 0 18px 34px rgba(37, 93, 233, 0.28);
}

.qc-button--secondary {
  background: rgba(255, 255, 255, 0.04);
  border-color: rgba(255, 255, 255, 0.22);
  color: #fff;
}

.qc-hero__media {
  position: relative;
  min-height: 520px;
}

.qc-hero__media::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(4, 10, 20, 0.06), rgba(4, 10, 20, 0.16)),
    linear-gradient(270deg, rgba(4, 10, 20, 0.18), transparent 32%);
}

.qc-hero__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.qc-metrics {
  position: relative;
  z-index: 2;
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 0;
  margin-top: -56px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.8);
  border-radius: 24px;
  background: rgba(255, 255, 255, 0.96);
  box-shadow: 0 20px 48px rgba(17, 37, 74, 0.12);
}

.qc-metric {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 16px;
  align-items: start;
  padding: 24px 22px;
  border-right: 1px solid var(--qc-line);
}

.qc-metric:last-child {
  border-right: 0;
}

.qc-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 52px;
  height: 52px;
  border-radius: 16px;
  color: var(--qc-blue);
  background: rgba(47, 103, 255, 0.08);
}

.qc-icon svg {
  width: 30px;
  height: 30px;
}

.qc-metric strong {
  display: block;
  color: var(--qc-blue);
  font-size: 2.05rem;
  line-height: 1;
  letter-spacing: -0.03em;
}

.qc-metric h3 {
  margin-top: 6px;
  font-size: 1.08rem;
  line-height: 1.3;
}

.qc-metric p {
  margin-top: 8px;
  color: var(--qc-muted);
  font-size: 0.95rem;
  line-height: 1.6;
}

.qc-process-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 18px;
}

.qc-process-card,
.qc-capability-card,
.qc-panel,
.qc-protection-card,
.qc-proof-card,
.qc-cta-action {
  position: relative;
  overflow: hidden;
  border: 1px solid var(--qc-line);
  border-radius: 20px;
  background: var(--qc-surface);
  box-shadow: 0 16px 36px rgba(16, 32, 60, 0.08);
}

.qc-process-card__step {
  position: absolute;
  top: 14px;
  left: 14px;
  z-index: 2;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 44px;
  height: 44px;
  padding: 0 10px;
  border-radius: 999px;
  background: var(--qc-blue);
  color: #fff;
  font-weight: 700;
}

.qc-process-card__media {
  aspect-ratio: 1.15 / 0.82;
  overflow: hidden;
}

.qc-process-card__media img,
.qc-capability-card__media img,
.qc-proof-collage img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.qc-process-card__body,
.qc-capability-card__body,
.qc-pack-card__body,
.qc-proof-card__body,
.qc-cta-action__body {
  padding: 18px 18px 22px;
}

.qc-process-card__body h3,
.qc-capability-card__body h3,
.qc-pack-card__body h3,
.qc-protection-card h3,
.qc-proof-card__body h3,
.qc-cta-action__body h3 {
  font-size: 1.18rem;
  line-height: 1.28;
}

.qc-process-card__body p,
.qc-capability-card__body p,
.qc-pack-card__body p,
.qc-protection-card p,
.qc-proof-card__body p,
.qc-cta-action__body p {
  margin-top: 10px;
  color: var(--qc-muted);
  line-height: 1.65;
}

.qc-process-card__arrow {
  position: absolute;
  top: 50%;
  right: -14px;
  z-index: 3;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  border-radius: 999px;
  background: #fff;
  color: var(--qc-blue);
  font-size: 1.4rem;
  font-weight: 700;
  box-shadow: 0 10px 24px rgba(16, 32, 60, 0.14);
  transform: translateY(-50%);
}

.qc-capability-grid {
  display: grid;
  grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 16px;
}

.qc-capability-card__media {
  aspect-ratio: 1 / 0.72;
  overflow: hidden;
}

.qc-capability-card__icon {
  margin-bottom: 12px;
}

.qc-strip {
  overflow: hidden;
  border-radius: 24px;
  background:
    linear-gradient(90deg, #08182f, #0c2343 50%, #08182f 100%);
  box-shadow: 0 18px 42px rgba(8, 24, 47, 0.2);
}

.qc-strip__grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.qc-strip__item {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 14px;
  align-items: center;
  padding: 26px 22px;
  color: #fff;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}

.qc-strip__item:last-child {
  border-right: 0;
}

.qc-strip__item .qc-icon {
  color: #cfe0ff;
  background: rgba(255, 255, 255, 0.08);
}

.qc-strip__item strong {
  display: block;
  font-size: 2rem;
  line-height: 1;
  letter-spacing: -0.03em;
}

.qc-strip__item span {
  display: block;
  margin-top: 6px;
  color: rgba(233, 240, 255, 0.72);
}

.qc-two-column {
  display: grid;
  grid-template-columns: minmax(280px, 0.95fr) minmax(340px, 1.05fr);
  gap: 20px;
}

.qc-panel {
  padding: 24px;
}

.qc-panel h3 {
  font-size: 1.68rem;
  line-height: 1.18;
}

.qc-panel > p {
  margin-top: 10px;
  color: var(--qc-muted);
  line-height: 1.7;
}

.qc-cert-grid,
.qc-pack-grid,
.qc-protection-grid,
.qc-proof-grid,
.qc-cta-grid {
  display: grid;
  gap: 16px;
}

.qc-cert-grid {
  grid-template-columns: repeat(3, minmax(0, 1fr));
  margin-top: 18px;
}

.qc-cert-badge {
  display: grid;
  gap: 8px;
  align-content: start;
  min-height: 126px;
  padding: 18px 16px;
  border-radius: 18px;
  background: var(--qc-surface-soft);
  border: 1px solid rgba(47, 103, 255, 0.08);
  text-align: center;
}

.qc-cert-badge strong {
  color: var(--qc-blue-deep);
  font-size: 1.68rem;
  line-height: 1.1;
  letter-spacing: -0.03em;
}

.qc-cert-badge span {
  color: var(--qc-muted);
  font-size: 0.9rem;
  line-height: 1.5;
}

.qc-pack-grid {
  grid-template-columns: repeat(4, minmax(0, 1fr));
  margin-top: 18px;
}

.qc-pack-card {
  overflow: hidden;
  border: 1px solid var(--qc-line);
  border-radius: 18px;
  background: #fff;
}

.qc-pack-visual {
  position: relative;
  aspect-ratio: 1 / 0.72;
  overflow: hidden;
  background:
    linear-gradient(180deg, #f5efe6, #e9dccb);
}

.qc-pack-visual::before,
.qc-pack-visual::after {
  content: "";
  position: absolute;
}

.qc-pack-visual--foam::before {
  inset: 18% 16%;
  border-radius: 14px;
  border: 3px solid #ffffff;
  box-shadow:
    0 0 0 10px rgba(255, 255, 255, 0.55),
    inset 0 0 0 2px rgba(47, 103, 255, 0.08);
}

.qc-pack-visual--foam::after {
  inset: 32% 28%;
  border-radius: 12px;
  border: 2px solid rgba(47, 103, 255, 0.18);
}

.qc-pack-visual--corner::before {
  left: 24%;
  right: 24%;
  bottom: 18%;
  height: 38%;
  background: linear-gradient(180deg, #b98d63, #a87a50);
  transform: skewX(-18deg);
}

.qc-pack-visual--corner::after {
  top: 18%;
  left: 18%;
  width: 34%;
  height: 34%;
  border-top: 22px solid #fff4df;
  border-left: 22px solid #fff4df;
  border-right: 22px solid transparent;
  border-bottom: 22px solid transparent;
}

.qc-pack-visual--carton::before {
  inset: 22% 18%;
  border-radius: 14px;
  background:
    linear-gradient(90deg, transparent 48%, rgba(108, 69, 22, 0.2) 48%, rgba(108, 69, 22, 0.2) 52%, transparent 52%),
    linear-gradient(180deg, transparent 48%, rgba(108, 69, 22, 0.2) 48%, rgba(108, 69, 22, 0.2) 52%, transparent 52%),
    linear-gradient(180deg, #caa072, #b88854);
  box-shadow: inset 0 0 0 2px rgba(116, 74, 22, 0.2);
}

.qc-pack-visual--carton::after {
  inset: 28% 26%;
  border-radius: 10px;
  border: 3px solid rgba(48, 103, 255, 0.52);
}

.qc-pack-visual--crate::before {
  inset: 18% 18%;
  border-radius: 16px;
  background:
    repeating-linear-gradient(
      90deg,
      rgba(118, 79, 41, 0.18) 0,
      rgba(118, 79, 41, 0.18) 6px,
      transparent 6px,
      transparent 32px
    ),
    linear-gradient(180deg, #d7b48a, #c1925f);
  box-shadow: inset 0 0 0 4px rgba(122, 79, 33, 0.3);
}

.qc-pack-visual--crate::after {
  inset: 30% 30%;
  border-radius: 12px;
  border: 3px dashed rgba(255, 255, 255, 0.8);
}

.qc-compare-protect {
  display: grid;
  grid-template-columns: minmax(320px, 1fr) minmax(320px, 1fr);
  gap: 20px;
}

.qc-compare-header {
  position: relative;
  display: grid;
  grid-template-columns: 1fr 1fr;
  overflow: hidden;
  border-radius: 16px 16px 0 0;
  background: linear-gradient(90deg, #6b7280 0%, #6b7280 50%, var(--qc-blue) 50%, var(--qc-blue) 100%);
  color: #fff;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: 0.06em;
}

.qc-compare-header span {
  padding: 16px 18px;
  text-align: center;
}

.qc-compare-header strong {
  position: absolute;
  top: 50%;
  left: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 54px;
  height: 54px;
  border-radius: 999px;
  background: #fff;
  color: var(--qc-blue);
  font-size: 1.12rem;
  font-weight: 800;
  transform: translate(-50%, -50%);
  box-shadow: 0 12px 24px rgba(16, 32, 60, 0.14);
}

.qc-compare-table {
  border: 1px solid var(--qc-line);
  border-top: 0;
  border-radius: 0 0 18px 18px;
  overflow: hidden;
}

.qc-compare-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.qc-compare-row > div {
  display: flex;
  align-items: center;
  gap: 10px;
  min-height: 56px;
  padding: 14px 18px;
  border-top: 1px solid var(--qc-line);
}

.qc-compare-row > div:last-child {
  background: rgba(47, 103, 255, 0.04);
}

.qc-mark {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 22px;
  height: 22px;
  border-radius: 999px;
  font-size: 0.86rem;
  font-weight: 700;
  line-height: 1;
}

.qc-mark--bad {
  background: rgba(107, 114, 128, 0.14);
  color: #6b7280;
}

.qc-mark--good {
  background: rgba(47, 103, 255, 0.14);
  color: var(--qc-blue);
}

.qc-protection-grid {
  grid-template-columns: repeat(2, minmax(0, 1fr));
  margin-top: 18px;
}

.qc-protection-card {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 16px;
  align-items: start;
  padding: 18px;
  border: 1px solid var(--qc-line);
  border-radius: 18px;
  background: var(--qc-surface-soft);
}

.qc-proof-grid {
  grid-template-columns: 1.25fr repeat(3, minmax(0, 1fr));
}

.qc-proof-collage {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 8px;
  aspect-ratio: 1.2 / 0.82;
  overflow: hidden;
  border-radius: 16px;
}

.qc-doc-mock {
  display: grid;
  gap: 8px;
  align-content: start;
  aspect-ratio: 1 / 1.1;
  padding: 18px;
  border-radius: 18px;
  border: 1px solid rgba(47, 103, 255, 0.1);
  background:
    linear-gradient(180deg, #ffffff, #f6f8fc);
}

.qc-doc-mock__title {
  height: 16px;
  width: 58%;
  border-radius: 999px;
  background: rgba(47, 103, 255, 0.22);
}

.qc-doc-mock__line {
  height: 12px;
  border-radius: 999px;
  background: rgba(16, 32, 60, 0.08);
}

.qc-doc-mock__line--short {
  width: 62%;
}

.qc-doc-mock__line--mid {
  width: 76%;
}

.qc-doc-mock__stamp {
  margin-top: auto;
  width: 80px;
  height: 80px;
  border: 3px solid rgba(47, 103, 255, 0.3);
  border-radius: 50%;
}

.qc-table-mock {
  display: grid;
  gap: 8px;
  margin-top: 6px;
}

.qc-table-mock__row {
  display: grid;
  grid-template-columns: 1fr 0.9fr 0.8fr;
  gap: 8px;
}

.qc-table-mock__cell {
  height: 12px;
  border-radius: 999px;
  background: rgba(16, 32, 60, 0.08);
}

.qc-bottom-cta {
  overflow: hidden;
  border-radius: 28px;
  background:
    linear-gradient(90deg, #08182f 0%, #0b2141 60%, #08182f 100%);
  box-shadow: 0 22px 52px rgba(8, 24, 47, 0.22);
}

.qc-bottom-cta__shell {
  display: grid;
  grid-template-columns: minmax(260px, 0.9fr) minmax(0, 1.1fr);
  gap: 24px;
  align-items: center;
  padding: 34px;
}

.qc-bottom-cta__copy {
  color: #fff;
}

.qc-bottom-cta__copy h2 {
  font-size: clamp(2rem, 3vw, 3rem);
  line-height: 1.04;
  letter-spacing: -0.04em;
  text-transform: uppercase;
}

.qc-bottom-cta__copy p {
  margin-top: 12px;
  color: rgba(233, 240, 255, 0.76);
  line-height: 1.7;
}

.qc-cta-grid {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.qc-cta-action {
  background: rgba(255, 255, 255, 0.98);
}

.qc-cta-action__head {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 8px;
}

@media (max-width: 1180px) {
  .qc-metrics,
  .qc-process-grid,
  .qc-strip__grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .qc-capability-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .qc-pack-grid,
  .qc-proof-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .qc-proof-card--wide {
    grid-column: 1 / -1;
  }

  .qc-cta-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 980px) {
  .qc-hero__card,
  .qc-two-column,
  .qc-compare-protect,
  .qc-bottom-cta__shell {
    grid-template-columns: 1fr;
  }

  .qc-hero__media {
    min-height: 360px;
  }

  .qc-process-card__arrow {
    display: none;
  }
}

@media (max-width: 760px) {
  .qc-page {
    padding-bottom: 72px;
  }

  .qc-section {
    padding: 18px 0;
  }

  .qc-hero {
    padding-top: 12px;
  }

  .qc-hero__content h1 {
    max-width: none;
    font-size: clamp(2.2rem, 12vw, 3.2rem);
  }

  .qc-metrics,
  .qc-process-grid,
  .qc-capability-grid,
  .qc-cert-grid,
  .qc-pack-grid,
  .qc-protection-grid,
  .qc-proof-grid,
  .qc-cta-grid {
    grid-template-columns: 1fr;
  }

  .qc-metric,
  .qc-strip__item {
    border-right: 0;
    border-bottom: 1px solid var(--qc-line);
  }

  .qc-metric:last-child,
  .qc-strip__item:last-child {
    border-bottom: 0;
  }

  .qc-metrics {
    margin-top: -28px;
  }

  .qc-panel,
  .qc-process-card__body,
  .qc-capability-card__body,
  .qc-pack-card__body,
  .qc-proof-card__body,
  .qc-cta-action__body,
  .qc-bottom-cta__shell {
    padding-left: 18px;
    padding-right: 18px;
  }
}
CSS;
  }
}

if (!function_exists('mirrorcraft_render_quality_control_icon')) {
  function mirrorcraft_render_quality_control_icon($slug) {
    switch ($slug) {
      case 'trend':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 19h16v2H2V3h2v16Zm2-3.59 4.5-4.5 2.5 2.5 5.8-6.21L20.25 8 13 15.75l-2.5-2.5L7.41 16.4 6 15.41Z"/>
        </svg>
        <?php
        break;
      case 'diamond':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7.14 3 3 8.18 12 21l9-12.82L16.86 3H7.14Zm1.03 2h7.66l1.96 3H15l-3-2.4L9 8H6.21l1.96-3Zm1.7 5 2.13 7.1L14.13 10H9.87Z"/>
        </svg>
        <?php
        break;
      case 'globe':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10.01 10.01 0 0 0 12 2Zm6.93 9h-3.02a15.62 15.62 0 0 0-1.14-5.02A8.03 8.03 0 0 1 18.93 11ZM12 4.06c.83 1.13 1.84 3.36 1.97 6.94h-3.94C10.16 7.42 11.17 5.19 12 4.06ZM9.23 5.98A15.62 15.62 0 0 0 8.09 11H5.07a8.03 8.03 0 0 1 4.16-5.02ZM5.07 13h3.02c.15 1.8.55 3.53 1.14 5.02A8.03 8.03 0 0 1 5.07 13Zm4.96 0h3.94c-.13 3.58-1.14 5.81-1.97 6.94-.83-1.13-1.84-3.36-1.97-6.94Zm4.74 5.02c.59-1.49.99-3.22 1.14-5.02h3.02a8.03 8.03 0 0 1-4.16 5.02Z"/>
        </svg>
        <?php
        break;
      case 'droplet':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2.5 6.34 8.16A8 8 0 1 0 17.66 8.16L12 2.5Zm0 17.5A5.5 5.5 0 0 1 8.11 10.6L12 6.71l3.89 3.89A5.5 5.5 0 0 1 12 20Zm-2.5-5.25h2A2.5 2.5 0 0 0 14 12.25h2A4.5 4.5 0 0 1 11.5 16.75Z"/>
        </svg>
        <?php
        break;
      case 'light':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a7 7 0 0 0-4 12.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26A7 7 0 0 0 12 2Zm2.5 11.57-.5.29V16h-4v-2.14l-.5-.29A5 5 0 1 1 14.5 13.57ZM9 21h6v-2H9v2Z"/>
        </svg>
        <?php
        break;
      case 'bolt':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M13 2 6 13h4l-1 9 7-11h-4l1-9Z"/>
        </svg>
        <?php
        break;
      case 'clock':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10.01 10.01 0 0 0 12 2Zm1 11H7v-2h4V6h2v7Z"/>
        </svg>
        <?php
        break;
      case 'report':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 3h7l5 5v13H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Zm0 2v14h10V9h-4V5H7Zm2 7h6v2H9v-2Zm0 4h6v2H9v-2Zm0-8h3v2H9V8Z"/>
        </svg>
        <?php
        break;
      case 'chat':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h16a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H9l-5 4v-4H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Zm0 2v9h1.5l.5.4V15h14V6H4Zm3 3h10v2H7V9Zm0 4h7v2H7v-2Z"/>
        </svg>
        <?php
        break;
      case 'support':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a8 8 0 0 0-8 8v3a2 2 0 0 0 2 2h1v-5H6v-1a6 6 0 1 1 12 0v1h-1v5h1a2 2 0 0 0 2-2v-3a8 8 0 0 0-8-8Zm-5 9h2v5H7v-5Zm8 0h2v5h-2v-5Zm-6 8h6v2H9v-2Z"/>
        </svg>
        <?php
        break;
      case 'box':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 3 6.5v11L12 22l9-4.5v-11L12 2Zm0 2.24 6.12 3.06L12 10.36 5.88 7.3 12 4.24ZM5 9.06l6 3v7.2l-6-3v-7.2Zm14 7.2-6 3v-7.2l6-3v7.2Z"/>
        </svg>
        <?php
        break;
      case 'shield':
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm0 17.87C8.6 18.76 6 14.73 6 11V6.36l6-2.25 6 2.25V11c0 3.73-2.6 7.76-6 8.87Zm-1.2-4.37-2.6-2.6 1.41-1.4 1.19 1.18 3.79-3.78 1.41 1.41-5.2 5.19Z"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_quality_control_page')) {
  function mirrorcraft_render_quality_control_page($post_id) {
    $contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
    $projects_url = mirrorcraft_link_by_slug('projects', '/projects/');
    $products_url = mirrorcraft_link_by_slug('products', '/products/');
    $blog_url = function_exists('mirrorcraft_get_blog_hub_index_url')
      ? mirrorcraft_get_blog_hub_index_url()
      : mirrorcraft_link_by_slug('blog', '/blog/');
    $support_url = mirrorcraft_get_whatsapp_link();

    if ($support_url === '') {
      $support_url = $contact_url;
    }

    $hero_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-inspection.webp',
        'who-we-are-inspection.png',
        'factory.avif',
        'who-we-are-workshop.webp',
      )
    );
    $inspection_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-inspection.webp',
        'who-we-are-inspection.png',
        'factory.avif',
      )
    );
    $workshop_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-workshop.webp',
        'who-we-are-workshop.png',
        'factory.avif',
      )
    );
    $mirror_test_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hero-bathroom-led-scene-alt-hero.jpg',
        'hero-bathroom-led-scene-alt.jpg',
        'hero-bathroom-led-scene-hero.jpg',
      )
    );
    $mirror_light_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hero-bathroom-led-scene-hero.jpg',
        'hero-bathroom-led-scene.jpg',
        'hospitality-led-mirror-project.webp',
      )
    );
    $warehouse_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-warehouse.webp',
        'who-we-are-warehouse.png',
        'factory-20260420.png',
      )
    );
    $project_image = mirrorcraft_theme_image_first_available_url(
      array(
        'hospitality-led-mirror-project.webp',
        'hospitality-led-mirror-project.png',
        'custom-mirrors-reference-20260422.webp',
      )
    );

    $proof_images = array_values(
      array_filter(
        array(
          $inspection_image,
          $workshop_image,
          $mirror_test_image,
          $project_image,
        )
      )
    );

    $hero_metrics = array(
      array(
        'icon'  => 'shield',
        'value' => '100%',
        'title' => __('Pre-Shipment Inspection', 'mirrorcraft'),
        'text'  => __('Every mirror is fully inspected before shipment.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'trend',
        'value' => '< 0.5%',
        'title' => __('Defect Rate', 'mirrorcraft'),
        'text'  => __('Strict quality control keeps defect rate below 0.5%.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'diamond',
        'value' => '10+',
        'title' => __('Years Experience', 'mirrorcraft'),
        'text'  => __('More than a decade focused on LED mirror manufacturing.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'globe',
        'value' => __('Global Standard', 'mirrorcraft'),
        'title' => __('Compliance', 'mirrorcraft'),
        'text'  => __('Meet international quality standards for global markets.', 'mirrorcraft'),
      ),
    );

    $process_steps = array(
      array(
        'image' => $workshop_image,
        'title' => __('Incoming Material Inspection', 'mirrorcraft'),
        'text'  => __('We verify glass flatness, thickness, LED components, and accessories before production.', 'mirrorcraft'),
      ),
      array(
        'image' => $inspection_image,
        'title' => __('Production Process Control', 'mirrorcraft'),
        'text'  => __('Strict control of edge polishing, assembly alignment, and lighting uniformity.', 'mirrorcraft'),
      ),
      array(
        'image' => $mirror_test_image,
        'title' => __('Functional Testing', 'mirrorcraft'),
        'text'  => __('Each mirror is tested for anti-fog performance, waterproof safety, and sensor response.', 'mirrorcraft'),
      ),
      array(
        'image' => $inspection_image,
        'title' => __('Final Inspection', 'mirrorcraft'),
        'text'  => __('100% visual inspection, electrical safety testing, and packaging validation.', 'mirrorcraft'),
      ),
    );

    $testing_cards = array(
      array(
        'icon'  => 'shield',
        'image' => $mirror_test_image,
        'title' => __('Anti-Fog Performance Test', 'mirrorcraft'),
        'text'  => __('High humidity environment simulation to ensure clear reflection.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'droplet',
        'image' => $mirror_light_image,
        'title' => __('Waterproof Test (IP44 / IP65 Standard)', 'mirrorcraft'),
        'text'  => __('Water spray testing to ensure bathroom safety and durability.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'light',
        'image' => $project_image,
        'title' => __('Lighting Consistency Test', 'mirrorcraft'),
        'text'  => __('Test color temperature, brightness, and uniformity for consistent lighting.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'bolt',
        'image' => $inspection_image,
        'title' => __('Electrical Safety Test', 'mirrorcraft'),
        'text'  => __('Insulation, voltage, and grounding tests to ensure electrical safety.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'box',
        'image' => $warehouse_image,
        'title' => __('Packaging Drop Test', 'mirrorcraft'),
        'text'  => __('Simulated drop test to ensure packaging strength and safe delivery.', 'mirrorcraft'),
      ),
    );

    $strip_metrics = array(
      array(
        'icon'  => 'clock',
        'value' => '99.3%',
        'title' => __('On-Time Delivery', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'shield',
        'value' => '< 0.5%',
        'title' => __('Defect Rate', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'report',
        'value' => '100%',
        'title' => __('QC Coverage', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'box',
        'value' => '500,000+',
        'title' => __('Units Delivered Annually', 'mirrorcraft'),
      ),
    );

    $certifications = array(
      array('code' => 'CE', 'text' => __('European Conformity', 'mirrorcraft')),
      array('code' => 'UL', 'text' => __('Safety Certification (North America)', 'mirrorcraft')),
      array('code' => 'ETL', 'text' => __('Safety Certification (North America)', 'mirrorcraft')),
      array('code' => 'RoHS', 'text' => __('Restriction of Hazardous Substances', 'mirrorcraft')),
      array('code' => 'IP44 / IP65', 'text' => __('Waterproof Standard', 'mirrorcraft')),
      array('code' => 'ISO 9001', 'text' => __('Quality Management System', 'mirrorcraft')),
    );

    $packaging_cards = array(
      array(
        'slug'  => 'foam',
        'title' => __('Foam Protection', 'mirrorcraft'),
        'text'  => __('High-density foam protects all sides.', 'mirrorcraft'),
      ),
      array(
        'slug'  => 'corner',
        'title' => __('Corner Guard', 'mirrorcraft'),
        'text'  => __('Reinforced corner guards prevent impact.', 'mirrorcraft'),
      ),
      array(
        'slug'  => 'carton',
        'title' => __('Reinforced Carton', 'mirrorcraft'),
        'text'  => __('Strong export carton for international shipping.', 'mirrorcraft'),
      ),
      array(
        'slug'  => 'crate',
        'title' => __('Wooden Crate', 'mirrorcraft'),
        'text'  => __('Optional wooden crate for extra protection.', 'mirrorcraft'),
      ),
    );

    $compare_rows = array(
      array(
        'other' => __('Random inspection', 'mirrorcraft'),
        'ours'  => __('100% full inspection', 'mirrorcraft'),
      ),
      array(
        'other' => __('Basic testing only', 'mirrorcraft'),
        'ours'  => __('Multi-stage QC system', 'mirrorcraft'),
      ),
      array(
        'other' => __('No QC report', 'mirrorcraft'),
        'ours'  => __('Detailed QC report provided', 'mirrorcraft'),
      ),
      array(
        'other' => __('No guarantee', 'mirrorcraft'),
        'ours'  => __('Risk-free replacement', 'mirrorcraft'),
      ),
      array(
        'other' => __('High defect risk', 'mirrorcraft'),
        'ours'  => __('< 0.5% defect rate', 'mirrorcraft'),
      ),
    );

    $protection_cards = array(
      array(
        'icon'  => 'report',
        'title' => __('Full QC Report Before Shipment', 'mirrorcraft'),
        'text'  => __('Detailed inspection report provided for every order.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'shield',
        'title' => __('Free Replacement for Defective Products', 'mirrorcraft'),
        'text'  => __('We take full responsibility for any quality issue.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'globe',
        'title' => __('Third-Party Inspection Supported', 'mirrorcraft'),
        'text'  => __('Support SGS, BV, Intertek, or other third-party inspection.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'support',
        'title' => __('Fast After-Sales Response Within 24h', 'mirrorcraft'),
        'text'  => __('Professional team online 24/7 to support you.', 'mirrorcraft'),
      ),
    );

    $cta_cards = array(
      array(
        'icon'  => 'report',
        'title' => __('Get QC Report Now', 'mirrorcraft'),
        'text'  => __('Get detailed QC report instantly.', 'mirrorcraft'),
        'url'   => '#qc-proof',
      ),
      array(
        'icon'  => 'chat',
        'title' => __('Request a Quote', 'mirrorcraft'),
        'text'  => __('Tell us your needs and get a quote.', 'mirrorcraft'),
        'url'   => $contact_url,
      ),
      array(
        'icon'  => 'support',
        'title' => __('Contact Our Team', 'mirrorcraft'),
        'text'  => __('Speak with our experts for support.', 'mirrorcraft'),
        'url'   => $support_url,
      ),
    );
    ?>
    <style><?php echo mirrorcraft_get_quality_control_inline_css(); ?></style>
    <div class="qc-page">
      <section class="qc-hero">
        <div class="qc-shell">
          <div class="qc-hero__card">
            <div class="qc-hero__content">
              <?php mirrorcraft_render_breadcrumbs(); ?>
              <p class="qc-eyebrow"><?php echo esc_html(get_the_title($post_id)); ?></p>
              <h1><?php esc_html_e('Guaranteed Quality for Every Shipment Or We Take Responsibility', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Every mirror is strictly inspected from raw materials to final shipment to ensure consistent quality for global projects.', 'mirrorcraft'); ?></p>
              <div class="qc-hero__actions">
                <a class="qc-button qc-button--primary" href="#qc-proof"><?php esc_html_e('Get QC Report', 'mirrorcraft'); ?></a>
                <a class="qc-button qc-button--secondary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Verify Before Order', 'mirrorcraft'); ?></a>
              </div>
            </div>

            <div class="qc-hero__media">
              <?php if ($hero_image !== '') : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Quality control inspection for LED mirrors', 'mirrorcraft'); ?>" width="1536" height="1024" fetchpriority="high">
              <?php endif; ?>
            </div>
          </div>

          <div class="qc-metrics">
            <?php foreach ($hero_metrics as $metric) : ?>
              <article class="qc-metric">
                <span class="qc-icon" aria-hidden="true"><?php mirrorcraft_render_quality_control_icon($metric['icon']); ?></span>
                <div>
                  <strong><?php echo esc_html($metric['value']); ?></strong>
                  <h3><?php echo esc_html($metric['title']); ?></h3>
                  <p><?php echo esc_html($metric['text']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell">
          <div class="qc-section-title">
            <h2><?php esc_html_e('Our Quality Control Process', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('4-step quality control system for reliable production.', 'mirrorcraft'); ?></p>
          </div>

          <div class="qc-process-grid">
            <?php foreach ($process_steps as $index => $step) : ?>
              <article class="qc-process-card">
                <span class="qc-process-card__step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                <div class="qc-process-card__media">
                  <?php if (!empty($step['image'])) : ?>
                    <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" width="1200" height="900" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <div class="qc-process-card__body">
                  <h3><?php echo esc_html($step['title']); ?></h3>
                  <p><?php echo esc_html($step['text']); ?></p>
                </div>
                <?php if ($index < count($process_steps) - 1) : ?>
                  <span class="qc-process-card__arrow" aria-hidden="true">›</span>
                <?php endif; ?>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell">
          <div class="qc-section-title">
            <h2><?php esc_html_e('Professional Testing Capabilities', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('Advanced testing ensures every product performs reliably before delivery.', 'mirrorcraft'); ?></p>
          </div>

          <div class="qc-capability-grid">
            <?php foreach ($testing_cards as $card) : ?>
              <article class="qc-capability-card">
                <div class="qc-capability-card__media">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="900" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <div class="qc-capability-card__body">
                  <span class="qc-icon qc-capability-card__icon" aria-hidden="true"><?php mirrorcraft_render_quality_control_icon($card['icon']); ?></span>
                  <h3><?php echo esc_html($card['title']); ?></h3>
                  <p><?php echo esc_html($card['text']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell">
          <div class="qc-strip">
            <div class="qc-strip__grid">
              <?php foreach ($strip_metrics as $metric) : ?>
                <article class="qc-strip__item">
                  <span class="qc-icon" aria-hidden="true"><?php mirrorcraft_render_quality_control_icon($metric['icon']); ?></span>
                  <div>
                    <strong><?php echo esc_html($metric['value']); ?></strong>
                    <span><?php echo esc_html($metric['title']); ?></span>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell qc-two-column">
          <article class="qc-panel">
            <h3><?php esc_html_e('Certifications', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('Certified for global markets with standards buyers can request during approval and inspection.', 'mirrorcraft'); ?></p>
            <div class="qc-cert-grid">
              <?php foreach ($certifications as $certification) : ?>
                <div class="qc-cert-badge">
                  <strong><?php echo esc_html($certification['code']); ?></strong>
                  <span><?php echo esc_html($certification['text']); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </article>

          <article class="qc-panel">
            <h3><?php esc_html_e('Safe Packaging for Damage-Free Delivery', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('Multi-layer protection keeps mirrors stable, protected, and ready for project shipment.', 'mirrorcraft'); ?></p>
            <div class="qc-pack-grid">
              <?php foreach ($packaging_cards as $card) : ?>
                <article class="qc-pack-card">
                  <div class="qc-pack-visual qc-pack-visual--<?php echo esc_attr($card['slug']); ?>" aria-hidden="true"></div>
                  <div class="qc-pack-card__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </article>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell qc-compare-protect">
          <article class="qc-panel">
            <h3><?php esc_html_e('Why Professional Buyers Choose Us', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('The difference is not only the final product. It is the control system behind it.', 'mirrorcraft'); ?></p>
            <div class="qc-compare-header">
              <span><?php esc_html_e('Others', 'mirrorcraft'); ?></span>
              <span><?php esc_html_e('Ours', 'mirrorcraft'); ?></span>
              <strong><?php esc_html_e('VS', 'mirrorcraft'); ?></strong>
            </div>
            <div class="qc-compare-table">
              <?php foreach ($compare_rows as $row) : ?>
                <div class="qc-compare-row">
                  <div><span class="qc-mark qc-mark--bad">x</span><span><?php echo esc_html($row['other']); ?></span></div>
                  <div><span class="qc-mark qc-mark--good">&#10003;</span><span><?php echo esc_html($row['ours']); ?></span></div>
                </div>
              <?php endforeach; ?>
            </div>
          </article>

          <article class="qc-panel">
            <h3><?php esc_html_e('Your Order Is Fully Protected', 'mirrorcraft'); ?></h3>
            <p><?php esc_html_e('We combine inspection evidence, replacement commitment, and responsive support to reduce your risk.', 'mirrorcraft'); ?></p>
            <div class="qc-protection-grid">
              <?php foreach ($protection_cards as $card) : ?>
                <article class="qc-protection-card">
                  <span class="qc-icon" aria-hidden="true"><?php mirrorcraft_render_quality_control_icon($card['icon']); ?></span>
                  <div>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </article>
        </div>
      </section>

      <section id="qc-proof" class="qc-section">
        <div class="qc-shell">
          <div class="qc-section-title">
            <h2><?php esc_html_e('Real Quality Control You Can Verify', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('Inspection photos, QC reports, and project records are available when buyers need evidence before shipment.', 'mirrorcraft'); ?></p>
          </div>

          <div class="qc-proof-grid">
            <article class="qc-proof-card qc-proof-card--wide">
              <div class="qc-proof-card__body">
                <div class="qc-proof-collage">
                  <?php foreach ($proof_images as $image) : ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Quality control inspection reference', 'mirrorcraft'); ?>" width="800" height="600" loading="lazy" decoding="async">
                  <?php endforeach; ?>
                </div>
                <h3><?php esc_html_e('Inspection Photos', 'mirrorcraft'); ?></h3>
                <p><?php esc_html_e('Real-time photos from production and inspection can be shared before delivery.', 'mirrorcraft'); ?></p>
              </div>
            </article>

            <article class="qc-proof-card">
              <div class="qc-proof-card__body">
                <div class="qc-doc-mock">
                  <div class="qc-doc-mock__title"></div>
                  <div class="qc-doc-mock__line"></div>
                  <div class="qc-doc-mock__line qc-doc-mock__line--mid"></div>
                  <div class="qc-doc-mock__line"></div>
                  <div class="qc-doc-mock__line qc-doc-mock__line--short"></div>
                  <div class="qc-doc-mock__stamp"></div>
                </div>
                <h3><?php esc_html_e('QC Report Sample', 'mirrorcraft'); ?></h3>
                <p><?php esc_html_e('Sample inspection report available for approval and reference.', 'mirrorcraft'); ?></p>
              </div>
            </article>

            <article class="qc-proof-card">
              <div class="qc-proof-card__body">
                <div class="qc-doc-mock">
                  <div class="qc-doc-mock__title"></div>
                  <div class="qc-table-mock">
                    <?php for ($row = 0; $row < 6; $row++) : ?>
                      <div class="qc-table-mock__row">
                        <span class="qc-table-mock__cell"></span>
                        <span class="qc-table-mock__cell"></span>
                        <span class="qc-table-mock__cell"></span>
                      </div>
                    <?php endfor; ?>
                  </div>
                </div>
                <h3><?php esc_html_e('Inspection Checklist', 'mirrorcraft'); ?></h3>
                <p><?php esc_html_e('Checklist-based validation helps buyers review the exact points covered before shipment.', 'mirrorcraft'); ?></p>
              </div>
            </article>

            <article class="qc-proof-card">
              <div class="qc-proof-card__body">
                <div class="qc-doc-mock">
                  <div class="qc-doc-mock__title"></div>
                  <div class="qc-doc-mock__line"></div>
                  <div class="qc-doc-mock__line"></div>
                  <div class="qc-doc-mock__line qc-doc-mock__line--mid"></div>
                  <div class="qc-doc-mock__line"></div>
                  <div class="qc-doc-mock__line qc-doc-mock__line--short"></div>
                </div>
                <h3><?php esc_html_e('Project Inspection Records', 'mirrorcraft'); ?></h3>
                <p><?php esc_html_e('Inspection records can be aligned with project orders and batch deliveries.', 'mirrorcraft'); ?></p>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="qc-section">
        <div class="qc-shell">
          <div class="qc-bottom-cta">
            <div class="qc-bottom-cta__shell">
              <div class="qc-bottom-cta__copy">
                <h2><?php esc_html_e('Ready to Work with a Reliable Manufacturer?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Get your QC report now and verify our quality before placing your order.', 'mirrorcraft'); ?></p>
              </div>

              <div class="qc-cta-grid">
                <?php foreach ($cta_cards as $card) : ?>
                  <a class="qc-cta-action" href="<?php echo esc_url($card['url']); ?>">
                    <div class="qc-cta-action__body">
                      <div class="qc-cta-action__head">
                        <span class="qc-icon" aria-hidden="true"><?php mirrorcraft_render_quality_control_icon($card['icon']); ?></span>
                        <h3><?php echo esc_html($card['title']); ?></h3>
                      </div>
                      <p><?php echo esc_html($card['text']); ?></p>
                    </div>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
  }
}

get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $page_slug = get_post_field('post_name', get_the_ID());

    if ('quality-control' === $page_slug) {
      mirrorcraft_render_quality_control_page(get_the_ID());
      continue;
    }

    if ('video-blog' === $page_slug) {
      mirrorcraft_render_video_blog_page(get_the_ID());
      continue;
    }

    $page = mirrorcraft_get_about_section_page_data($page_slug);
    $hero_chips = $page['hero_chips'] ?? array();
    $hero_stats = $page['hero_stats'] ?? array();
    $focus_items = $page['focus_items'] ?? array();
    $aside_items = $page['aside_items'] ?? array();
    $cards = $page['cards'] ?? array();
    $steps = $page['steps'] ?? array();
    $cta_button = !empty($page['cta_button']) ? $page['cta_button'] : __('Request a Quote', 'mirrorcraft');
    ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php echo esc_html($page['eyebrow'] ?? __('About Section', 'mirrorcraft')); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), $page['hero_text'] ?? __('Use this page for deeper company, process, capability, or sourcing-support stories that help buyers understand how OJMIRROR works.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <?php if (!empty($hero_chips)) : ?>
            <span class="feature-tag"><?php esc_html_e('Focus', 'mirrorcraft'); ?></span>
            <ul class="page-chip-list">
              <?php foreach ($hero_chips as $chip) : ?>
                <li><?php echo esc_html($chip); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($hero_stats)) : ?>
            <div class="mini-stat-list">
              <?php foreach ($hero_stats as $stat) : ?>
                <div>
                  <strong><?php echo esc_html($stat['value'] ?? ''); ?></strong>
                  <span><?php echo esc_html($stat['label'] ?? ''); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </aside>
      </div>
    </section>

    <?php if (!empty($page['focus_title']) || !empty($page['aside_title'])) : ?>
      <section class="section">
        <div class="shell capability-shell">
          <div class="section-heading">
            <?php if (!empty($page['focus_title'])) : ?>
              <h2><?php echo esc_html($page['focus_title']); ?></h2>
            <?php endif; ?>
            <?php if (!empty($page['focus_text'])) : ?>
              <p class="section-copy"><?php echo esc_html($page['focus_text']); ?></p>
            <?php endif; ?>
            <?php if (!empty($focus_items)) : ?>
              <ul class="feature-list">
                <?php foreach ($focus_items as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <article class="entry-card">
            <?php if (!empty($page['aside_kicker'])) : ?>
              <p class="eyebrow"><?php echo esc_html($page['aside_kicker']); ?></p>
            <?php endif; ?>
            <?php if (!empty($page['aside_title'])) : ?>
              <h3><?php echo esc_html($page['aside_title']); ?></h3>
            <?php endif; ?>
            <?php if (!empty($aside_items)) : ?>
              <ul class="feature-list">
                <?php foreach ($aside_items as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </article>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($cards)) : ?>
      <section class="section section-alt">
        <div class="shell section-heading">
          <?php if (!empty($page['cards_title'])) : ?>
            <h2><?php echo esc_html($page['cards_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['cards_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['cards_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell card-grid card-grid-two">
          <?php foreach ($cards as $card) : ?>
            <article class="statement-card">
              <h3><?php echo esc_html($card['title'] ?? ''); ?></h3>
              <p><?php echo esc_html($card['text'] ?? ''); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($steps)) : ?>
      <section class="section">
        <div class="shell section-heading">
          <?php if (!empty($page['steps_title'])) : ?>
            <h2><?php echo esc_html($page['steps_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['steps_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['steps_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell process-grid">
          <?php foreach ($steps as $index => $step) : ?>
            <article class="process-card">
              <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
              <h3><?php echo esc_html($step['title'] ?? ''); ?></h3>
              <p><?php echo esc_html($step['text'] ?? ''); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <?php if (!empty($page['cta_title']) || !empty($page['cta_text'])) : ?>
      <section class="section section-tight">
        <div class="shell cta-shell">
          <div class="cta-card">
            <div>
              <?php if (!empty($page['cta_title'])) : ?>
                <h2><?php echo esc_html($page['cta_title']); ?></h2>
              <?php endif; ?>
              <?php if (!empty($page['cta_text'])) : ?>
                <p><?php echo esc_html($page['cta_text']); ?></p>
              <?php endif; ?>
            </div>
            <div class="button-row">
              <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php echo esc_html($cta_button); ?></a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
