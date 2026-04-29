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
  background: rgba(245, 239, 230, 0.78);
  border-bottom-color: transparent;
  box-shadow: none;
}

body .brand-title,
body .nav-toggle {
  color: #1b1c1d;
}

body .brand-tagline,
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

body .brand-tagline {
  color: #5d615d;
}

body .nav-list a {
  color: #5d615d;
}

body .nav-list > li.current-menu-item > a,
body .nav-list > li.current-menu-parent > a,
body .nav-list a:hover,
body .nav-list a:focus-visible {
  color: #1b1c1d;
}

body .nav-list > li > a::before {
  background: #1d4a85;
}

body .nav-list .sub-menu {
  border-color: rgba(27, 28, 29, 0.12);
  background: rgba(255, 255, 255, 0.96);
  box-shadow: 0 18px 36px rgba(34, 28, 20, 0.1);
}

body .nav-list .sub-menu a {
  color: #5d615d;
}

body .nav-list .sub-menu a:hover,
body .nav-list .sub-menu a:focus-visible {
  background: #0f5d58;
  color: #fff;
}

body .header-actions .button-primary {
  background: #0f5d58;
  border-color: transparent;
  color: #fff;
  box-shadow: 0 14px 34px rgba(15, 93, 88, 0.18);
}

body .header-actions .button-primary:hover,
body .header-actions .button-primary:focus-visible {
  background: #0a3e3b;
}

body .site-footer {
  margin-top: 0;
  background:
    radial-gradient(circle at top left, rgba(255, 255, 255, 0.06), transparent 28%),
    linear-gradient(180deg, #353b46 0%, #2f343d 100%);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.08);
}

body .footer-subbar {
  border-top: 1px solid rgba(255, 255, 255, 0.12);
  background: transparent;
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
  font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
  line-height: var(--mirrorcraft-display-hero-line, 0.9);
  letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
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
  background: rgba(245, 239, 230, 0.78);
  border-bottom-color: transparent;
  box-shadow: none;
}

body .brand-title,
body .nav-toggle {
  color: #1b1c1d;
}

body .brand-tagline,
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

body .brand-tagline {
  color: #5d615d;
}

body .nav-list a {
  color: #5d615d;
}

body .nav-list > li.current-menu-item > a,
body .nav-list > li.current-menu-parent > a,
body .nav-list a:hover,
body .nav-list a:focus-visible {
  color: #1b1c1d;
}

body .nav-list > li > a::before {
  background: #1d4a85;
}

body .nav-list .sub-menu {
  border-color: rgba(27, 28, 29, 0.12);
  background: rgba(255, 255, 255, 0.96);
  box-shadow: 0 18px 36px rgba(34, 28, 20, 0.1);
}

body .nav-list .sub-menu a {
  color: #5d615d;
}

body .nav-list .sub-menu a:hover,
body .nav-list .sub-menu a:focus-visible {
  background: #0f5d58;
  color: #fff;
}

body .header-actions .button-primary {
  background: #0f5d58;
  border-color: transparent;
  color: #fff;
  box-shadow: 0 14px 34px rgba(15, 93, 88, 0.18);
}

body .header-actions .button-primary:hover,
body .header-actions .button-primary:focus-visible {
  background: #0a3e3b;
}

body .site-footer {
  margin-top: 0;
  background:
    radial-gradient(circle at top left, rgba(255, 255, 255, 0.06), transparent 28%),
    linear-gradient(180deg, #353b46 0%, #2f343d 100%);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.08);
}

body .footer-subbar {
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  background: transparent;
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
  font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
  line-height: var(--mirrorcraft-display-hero-line, 0.9);
  letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
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

if (!function_exists('mirrorcraft_get_technology_inline_css')) {
  function mirrorcraft_get_technology_inline_css() {
    return <<<'CSS'
.technology-page {
  position: relative;
  margin-bottom: -96px;
  padding-bottom: 96px;
  background: #ffffff;
  color: #122033;
}

.technology-page * {
  box-sizing: border-box;
}

.technology-page h1,
.technology-page h2,
.technology-page h3,
.technology-page h4 {
  font-family: "Avenir Next", "Helvetica Neue", "Segoe UI", sans-serif;
  font-weight: 800;
}

.technology-shell {
  width: min(1400px, calc(100vw - 56px));
  margin: 0 auto;
}

.technology-section {
  padding: 42px 0;
}

.technology-section-title {
  display: grid;
  gap: 10px;
  justify-items: center;
  margin-bottom: 30px;
  text-align: center;
}

.technology-section-title h2 {
  margin: 0;
  color: #152742;
  font-size: clamp(1.9rem, 2.4vw, 2.9rem);
  line-height: 1.08;
  text-transform: uppercase;
}

.technology-section-title::after {
  content: "";
  width: 54px;
  height: 4px;
  border-radius: 999px;
  background: #1f76ea;
}

.technology-hero {
  padding: 0 0 38px;
}

.technology-hero__shell {
  position: relative;
  min-height: 560px;
  overflow: hidden;
  background: #07152a;
}

.technology-hero__shell::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(90deg, rgba(5, 16, 33, 0.92) 0%, rgba(5, 16, 33, 0.88) 27%, rgba(5, 16, 33, 0.52) 52%, rgba(5, 16, 33, 0.18) 72%, rgba(5, 16, 33, 0.06) 100%),
    linear-gradient(180deg, rgba(5, 16, 33, 0.08), rgba(5, 16, 33, 0.18));
}

.technology-hero__inner {
  position: relative;
  z-index: 1;
  display: flex;
  min-height: 560px;
  align-items: center;
}

.technology-hero__content {
  display: grid;
  gap: 18px;
  width: min(430px, 100%);
  padding: clamp(40px, 5vw, 74px) 0;
}

.technology-hero__content h1 {
  margin: 0;
  max-width: 7.5ch;
  color: #ffffff;
  font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
  line-height: var(--mirrorcraft-display-hero-line, 0.9);
  text-transform: uppercase;
}

.technology-hero__lead {
  max-width: 28rem;
  margin: 0;
  color: #ffffff;
  font-size: 1.15rem;
  font-weight: 600;
  line-height: 1.55;
}

.technology-hero__text {
  max-width: 28rem;
  margin: 0;
  color: rgba(232, 240, 252, 0.88);
  font-size: 1.02rem;
  line-height: 1.78;
}

.technology-hero__media {
  position: absolute;
  inset: 0;
}

.technology-hero__media img,
.technology-card__media img,
.technology-process-card__media img,
.technology-quality-card__media img,
.technology-impact-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.technology-hero__media img {
  object-position: center center;
}

.technology-card-grid,
.technology-process-grid,
.technology-quality-grid,
.technology-impact-grid {
  display: grid;
  gap: 24px;
}

.technology-card-grid {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}

.technology-card {
  position: relative;
  overflow: hidden;
  border: 1px solid #d9e3ef;
  border-radius: 10px;
  background: #ffffff;
  box-shadow: 0 18px 42px rgba(14, 33, 63, 0.06);
}

.technology-card__media {
  aspect-ratio: 1.04 / 0.7;
  overflow: hidden;
  background: #dce8f7;
}

.technology-card__body {
  display: grid;
  gap: 12px;
  padding: 34px 18px 18px;
}

.technology-icon-badge {
  position: absolute;
  left: 18px;
  top: calc(100% - 18px);
  transform: translateY(-100%);
}

.technology-icon,
.technology-process-card__icon,
.technology-quality-card__icon,
.technology-custom-card__icon,
.technology-impact-card__icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 60px;
  height: 60px;
  border-radius: 999px;
  background: linear-gradient(180deg, #1f7bf0, #1864d7);
  color: #fff;
  box-shadow: 0 16px 28px rgba(24, 100, 215, 0.2);
}

.technology-process-card__icon,
.technology-quality-card__icon,
.technology-custom-card__icon,
.technology-impact-card__icon {
  width: 56px;
  height: 56px;
}

.technology-icon svg,
.technology-process-card__icon svg,
.technology-quality-card__icon svg,
.technology-custom-card__icon svg,
.technology-impact-card__icon svg {
  width: 26px;
  height: 26px;
}

.technology-card h3,
.technology-process-card h3,
.technology-quality-card h3,
.technology-custom-card h3,
.technology-impact-card h3 {
  margin: 0;
  color: #142742;
  font-size: 1rem;
  line-height: 1.3;
  text-transform: uppercase;
}

.technology-card p,
.technology-quality-card p,
.technology-custom-card p {
  margin: 0;
  color: #526274;
  font-size: 0.98rem;
  line-height: 1.7;
}

.technology-process-grid {
  grid-template-columns: repeat(6, minmax(0, 1fr));
  align-items: start;
  gap: 18px;
}

.technology-process-card {
  position: relative;
  display: grid;
  gap: 12px;
  justify-items: center;
  text-align: center;
}

.technology-process-card:not(:last-child)::after {
  content: "→";
  position: absolute;
  right: -18px;
  top: 22px;
  color: #1f76ea;
  font-size: 28px;
  line-height: 1;
}

.technology-process-card__media {
  width: 100%;
  aspect-ratio: 1.02 / 0.68;
  overflow: hidden;
  border-radius: 6px;
  border: 1px solid #d9e3ef;
  background: #dce8f7;
  box-shadow: 0 16px 36px rgba(16, 32, 60, 0.06);
}

.technology-process-card h3 {
  font-size: 0.95rem;
}

.technology-quality-grid {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.technology-quality-card {
  overflow: hidden;
  border: 1px solid #d9e3ef;
  border-radius: 8px;
  background: #ffffff;
  box-shadow: 0 18px 44px rgba(16, 32, 60, 0.05);
}

.technology-quality-card__media {
  aspect-ratio: 1.08 / 0.7;
  overflow: hidden;
  background: #dbe6f3;
}

.technology-quality-card__body {
  display: grid;
  gap: 12px;
  padding: 16px 16px 18px;
}

.technology-quality-card__head {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 12px;
  align-items: center;
}

.technology-quality-card__head h3 {
  font-size: 0.98rem;
}

.technology-custom-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
  border-top: 1px solid #d9e3ef;
  border-bottom: 1px solid #d9e3ef;
  background: #ffffff;
}

.technology-custom-card {
  display: grid;
  justify-items: center;
  gap: 14px;
  padding: 24px 16px 26px;
  text-align: center;
  border-right: 1px solid #d9e3ef;
}

.technology-custom-card:last-child {
  border-right: 0;
}

.technology-custom-card h3 {
  font-size: 0.98rem;
}

.technology-custom-card p {
  font-size: 0.95rem;
}

.technology-impact-grid {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}

.technology-impact-card {
  position: relative;
  min-height: 188px;
  overflow: hidden;
  border-radius: 8px;
  background: #08111f;
  box-shadow: 0 22px 58px rgba(8, 17, 31, 0.14);
}

.technology-impact-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(8, 17, 31, 0.16), rgba(8, 17, 31, 0.86)),
    linear-gradient(90deg, rgba(8, 17, 31, 0.78), rgba(8, 17, 31, 0.46));
}

.technology-impact-card__body {
  position: absolute;
  inset: auto 0 0;
  z-index: 1;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 18px;
  align-items: start;
  padding: 22px;
  color: #fff;
}

.technology-impact-card__body h3 {
  color: #fff;
  font-size: 1.1rem;
}

.technology-impact-card__body p {
  margin: 6px 0 0;
  color: rgba(236, 243, 255, 0.8);
  font-size: 0.98rem;
  line-height: 1.66;
}

.technology-cta {
  padding-top: 20px;
  padding-bottom: 0;
}

.technology-cta__shell {
  position: relative;
  display: grid;
  grid-template-columns: minmax(0, 1fr) auto;
  gap: 22px;
  align-items: center;
  overflow: hidden;
  border-radius: 0;
  background:
    linear-gradient(180deg, rgba(7, 18, 34, 0.92), rgba(7, 18, 34, 0.94)),
    #08111f;
}

.technology-cta__copy {
  padding: 32px clamp(22px, 4vw, 40px);
}

.technology-cta__copy h2 {
  margin: 0;
  color: #fff;
  font-size: clamp(1.9rem, 2.8vw, 2.7rem);
  line-height: 1.06;
  text-transform: uppercase;
}

.technology-cta__copy p {
  margin: 12px 0 0;
  color: rgba(236, 243, 255, 0.84);
  font-size: 1rem;
  line-height: 1.72;
}

.technology-cta__action {
  padding: 0 clamp(22px, 4vw, 40px);
}

.technology-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 56px;
  padding: 0 28px;
  border-radius: 8px;
  background: linear-gradient(180deg, #1f7bf0, #1864d7);
  color: #fff;
  font-size: 0.98rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  box-shadow: 0 16px 32px rgba(24, 100, 215, 0.22);
  transition: transform 180ms ease, filter 180ms ease;
}

.technology-button:hover,
.technology-button:focus-visible {
  transform: translateY(-1px);
  filter: brightness(1.05);
}

@media (max-width: 1260px) {
  .technology-card-grid,
  .technology-process-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .technology-process-card:not(:last-child)::after {
    display: none;
  }

  .technology-quality-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .technology-custom-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .technology-custom-card:nth-child(3n) {
    border-right: 0;
  }

  .technology-custom-card:nth-child(-n + 3) {
    border-bottom: 1px solid rgba(18, 32, 51, 0.08);
  }
}

@media (max-width: 980px) {
  .technology-cta__shell {
    grid-template-columns: 1fr;
  }

  .technology-hero__inner {
    min-height: 500px;
    align-items: end;
  }

  .technology-card-grid,
  .technology-impact-grid,
  .technology-quality-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .technology-process-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .technology-cta__action {
    padding: 0 clamp(22px, 4vw, 40px) 30px;
  }
}

@media (max-width: 640px) {
  .technology-page {
    padding-bottom: 76px;
  }

  .technology-shell {
    width: min(100vw - 24px, 100%);
  }

  .technology-section {
    padding: 28px 0;
  }

  .technology-hero__inner {
    min-height: 420px;
  }

  .technology-hero__content h1 {
    font-size: clamp(2.2rem, 10vw, 3.4rem);
  }

  .technology-hero__content {
    padding: 26px 0 22px;
  }

  .technology-card-grid,
  .technology-process-grid,
  .technology-quality-grid,
  .technology-custom-grid,
  .technology-impact-grid {
    grid-template-columns: 1fr;
  }

  .technology-custom-card,
  .technology-custom-card:nth-child(3n) {
    border-right: 0;
  }

  .technology-custom-card:not(:last-child) {
    border-bottom: 1px solid rgba(18, 32, 51, 0.08);
  }

  .technology-cta__copy {
    padding: 22px 18px 0;
  }

  .technology-cta__action {
    padding: 0 18px 22px;
  }

  .technology-button {
    width: 100%;
  }
}
CSS;
  }
}

if (!function_exists('mirrorcraft_get_our_partners_inline_css')) {
  function mirrorcraft_get_our_partners_inline_css() {
    return <<<'CSS'
.partners-ref-page {
  margin-bottom: -96px;
  padding-bottom: 96px;
  background: linear-gradient(180deg, #f7f4ef 0%, #f5f1ea 100%);
  color: #1d1713;
}

.partners-ref-page * {
  box-sizing: border-box;
}

.partners-ref-page h1,
.partners-ref-page h2,
.partners-ref-page h3,
.partners-ref-page h4 {
  font-family: "Avenir Next", "Helvetica Neue", "Segoe UI", sans-serif;
}

.partners-ref-shell {
  width: min(1380px, calc(100vw - 40px));
  margin: 0 auto;
}

.partners-ref-section {
  padding: 34px 0;
}

.partners-ref-section-title {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  margin-bottom: 30px;
  text-align: center;
}

.partners-ref-section-title::before,
.partners-ref-section-title::after {
  content: "";
  width: clamp(90px, 14vw, 180px);
  height: 1px;
  background: rgba(131, 98, 57, 0.28);
}

.partners-ref-section-title h2 {
  margin: 0;
  color: #1d1713;
  font-size: clamp(2.15rem, 3.2vw, 3.7rem);
  font-weight: 900;
  line-height: 1.08;
  letter-spacing: -0.06em;
  text-transform: uppercase;
}

.partners-ref-hero {
  padding: 18px 0 22px;
}

.partners-ref-hero__panel {
  display: grid;
  grid-template-columns: minmax(340px, 0.88fr) minmax(420px, 1.12fr);
  min-height: 560px;
  overflow: hidden;
  border-radius: 0 0 28px 28px;
  background:
    linear-gradient(90deg, rgba(14, 11, 10, 0.96) 0%, rgba(14, 11, 10, 0.92) 42%, rgba(14, 11, 10, 0.52) 68%, rgba(14, 11, 10, 0.18) 100%),
    #120f0d;
  box-shadow: 0 34px 84px rgba(22, 17, 12, 0.22);
}

.partners-ref-hero__copy {
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 18px;
  padding: clamp(34px, 5vw, 62px);
  color: #fff;
}

.partners-ref-hero__eyebrow {
  margin: 0;
  color: #d3ac72;
  font-size: 0.9rem;
  font-weight: 700;
  letter-spacing: 0.15em;
  text-transform: uppercase;
}

.partners-ref-hero__copy h1 {
  margin: 0;
  max-width: 10ch;
  color: #fff;
  font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
  font-weight: 800;
  line-height: var(--mirrorcraft-display-hero-line, 0.9);
  letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
}

.partners-ref-hero__copy p:not(.partners-ref-hero__eyebrow) {
  max-width: 34rem;
  margin: 0;
  color: rgba(245, 238, 229, 0.84);
  font-size: 1.06rem;
  line-height: 1.78;
}

.partners-ref-hero__highlights {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
  margin-top: 8px;
}

.partners-ref-highlight {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 12px;
  align-items: start;
}

.partners-ref-highlight__icon,
.partners-ref-stat__icon,
.partners-ref-meta__icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #d3ac72;
}

.partners-ref-highlight__icon {
  width: 38px;
  height: 38px;
}

.partners-ref-highlight__icon svg,
.partners-ref-stat__icon svg,
.partners-ref-meta__icon svg {
  width: 100%;
  height: 100%;
}

.partners-ref-highlight strong {
  display: block;
  color: #fff;
  font-size: 1rem;
  font-weight: 700;
}

.partners-ref-highlight span:last-child {
  color: rgba(245, 238, 229, 0.76);
  font-size: 0.95rem;
  line-height: 1.55;
}

.partners-ref-hero__media {
  position: relative;
  min-height: 100%;
}

.partners-ref-hero__media::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(180deg, rgba(16, 12, 10, 0.06), rgba(16, 12, 10, 0.22)),
    radial-gradient(circle at 72% 26%, rgba(255, 232, 194, 0.12), transparent 30%);
}

.partners-ref-hero__media img,
.partners-ref-project-card__media img,
.partners-ref-cta__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.partners-ref-brands {
  background: #fff;
  border-top: 1px solid rgba(29, 23, 19, 0.04);
  border-bottom: 1px solid rgba(29, 23, 19, 0.04);
}

.partners-ref-brand-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 18px;
}

.partners-ref-brand {
  display: grid;
  gap: 16px;
  justify-items: center;
  align-content: center;
  min-height: 228px;
  padding: 26px 20px;
  border: 1px solid rgba(29, 23, 19, 0.07);
  background: #fff;
  box-shadow: 0 12px 32px rgba(25, 21, 16, 0.04);
  text-align: center;
}

.partners-ref-brand__mark {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 64px;
  color: #25211f;
}

.partners-ref-brand__mark svg {
  display: block;
  width: auto;
  max-width: min(100%, 240px);
  height: 52px;
}

.partners-ref-brand__copy {
  display: grid;
  gap: 10px;
  justify-items: center;
}

.partners-ref-brand strong {
  color: #353230;
  font-size: clamp(2.05rem, 2.45vw, 3.1rem);
  font-weight: 900;
  line-height: 0.96;
  letter-spacing: -0.07em;
  text-wrap: balance;
}

.partners-ref-brand span {
  color: rgba(53, 50, 48, 0.74);
  font-size: 0.84rem;
  font-weight: 700;
  letter-spacing: 0.22em;
  line-height: 1.45;
  text-transform: uppercase;
  text-wrap: balance;
}

.partners-ref-brand--accor .partners-ref-brand__mark svg {
  height: 58px;
}

.partners-ref-brand--jll .partners-ref-brand__mark svg,
.partners-ref-brand--crowne-plaza .partners-ref-brand__mark svg,
.partners-ref-brand--hyatt .partners-ref-brand__mark svg,
.partners-ref-brand--radisson .partners-ref-brand__mark svg,
.partners-ref-brand--westin .partners-ref-brand__mark svg,
.partners-ref-brand--ihg .partners-ref-brand__mark svg {
  width: min(100%, 220px);
}

.partners-ref-brand--four-seasons .partners-ref-brand__mark svg {
  height: 60px;
}

.partners-ref-brand--crowne-plaza strong,
.partners-ref-brand--four-seasons strong {
  line-height: 0.84;
}

.partners-ref-project-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
}

.partners-ref-project-card {
  overflow: hidden;
  border: 1px solid rgba(29, 23, 19, 0.08);
  border-radius: 18px;
  background: rgba(255, 255, 255, 0.92);
  box-shadow: 0 18px 42px rgba(26, 20, 15, 0.08);
}

.partners-ref-project-card__media {
  aspect-ratio: 1.12 / 0.74;
  overflow: hidden;
  background: #d8ccbd;
}

.partners-ref-project-card__body {
  display: grid;
  gap: 14px;
  padding: 22px 20px 20px;
}

.partners-ref-project-card__body h3 {
  margin: 0;
  color: #1d1713;
  font-size: 1.55rem;
  font-weight: 700;
  line-height: 1.14;
}

.partners-ref-project-meta {
  display: grid;
  gap: 10px;
  margin: 0;
  padding: 0;
  list-style: none;
}

.partners-ref-project-meta li {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 10px;
  align-items: start;
  color: #5d554d;
  font-size: 0.97rem;
  line-height: 1.6;
}

.partners-ref-meta__icon {
  width: 18px;
  height: 18px;
  margin-top: 0.2em;
  color: #6c655e;
}

.partners-ref-projects__actions {
  display: flex;
  justify-content: center;
  margin-top: 28px;
  margin-bottom: 30px;
}

.partners-ref-projects__button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 48px;
  padding: 0 24px;
  border: 1px solid rgba(29, 23, 19, 0.14);
  border-radius: 8px;
  background: rgba(255, 255, 255, 0.94);
  color: #1d1713;
  font-size: 0.92rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: transform 180ms ease, border-color 180ms ease, background 180ms ease;
}

.partners-ref-projects__button:hover,
.partners-ref-projects__button:focus-visible {
  transform: translateY(-1px);
  border-color: rgba(162, 122, 67, 0.44);
  background: #fff;
}

.partners-ref-stats {
  background: #1a1816;
}

.partners-ref-stats__shell {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 1px;
}

.partners-ref-stat {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 16px;
  align-items: center;
  padding: 26px 18px;
  color: #f3ebe0;
}

.partners-ref-stat__icon {
  width: 46px;
  height: 46px;
}

.partners-ref-stat strong {
  display: block;
  color: #d3ac72;
  font-size: clamp(2rem, 2.8vw, 3.1rem);
  font-weight: 800;
  line-height: 1;
}

.partners-ref-stat span:last-child {
  display: block;
  margin-top: 4px;
  color: rgba(243, 235, 224, 0.78);
  font-size: 1rem;
  line-height: 1.45;
}

.partners-ref-cta {
  padding-top: 0;
}

.partners-ref-cta__shell {
  position: relative;
  display: grid;
  overflow: hidden;
  border-radius: 0;
  background:
    linear-gradient(180deg, rgba(17, 14, 12, 0.84), rgba(17, 14, 12, 0.88)),
    #181513;
  box-shadow: 0 28px 70px rgba(20, 16, 13, 0.18);
}

.partners-ref-cta__media {
  position: absolute;
  inset: 0;
  opacity: 0.26;
}

.partners-ref-cta__copy {
  position: relative;
  z-index: 1;
  display: grid;
  justify-items: center;
  gap: 16px;
  padding: clamp(40px, 6vw, 72px) 20px;
  text-align: center;
}

.partners-ref-cta__copy h2 {
  margin: 0;
  max-width: 20ch;
  color: #fff;
  font-size: clamp(2rem, 3.4vw, 3.7rem);
  font-weight: 800;
  line-height: 1.06;
}

.partners-ref-cta__copy p {
  max-width: 46rem;
  margin: 0;
  color: rgba(245, 238, 229, 0.84);
  font-size: 1.02rem;
  line-height: 1.76;
}

.partners-ref-cta__actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 14px;
  margin-top: 6px;
}

.partners-ref-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 54px;
  padding: 0 28px;
  border: 1px solid transparent;
  border-radius: 8px;
  font-size: 0.96rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  transition: transform 180ms ease, border-color 180ms ease, background 180ms ease, color 180ms ease;
}

.partners-ref-button:hover,
.partners-ref-button:focus-visible {
  transform: translateY(-1px);
}

.partners-ref-button--solid {
  background: linear-gradient(180deg, #e2be83, #c99952);
  color: #23170b;
}

.partners-ref-button--ghost {
  background: rgba(255, 255, 255, 0.02);
  border-color: rgba(226, 190, 131, 0.48);
  color: #fff;
}

.partners-ref-button--ghost:hover,
.partners-ref-button--ghost:focus-visible {
  background: rgba(226, 190, 131, 0.08);
}

@media (max-width: 1180px) {
  .partners-ref-brand-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .partners-ref-project-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .partners-ref-stats__shell {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 0;
  }
}

@media (max-width: 980px) {
  .partners-ref-hero__panel {
    grid-template-columns: 1fr;
    min-height: 0;
  }

  .partners-ref-hero__media {
    min-height: 320px;
  }

  .partners-ref-hero__highlights {
    grid-template-columns: 1fr;
  }

  .partners-ref-brand-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 640px) {
  .partners-ref-page {
    padding-bottom: 76px;
  }

  .partners-ref-shell {
    width: min(100vw - 24px, 100%);
  }

  .partners-ref-section {
    padding: 24px 0;
  }

  .partners-ref-section-title {
    gap: 12px;
  }

  .partners-ref-section-title::before,
  .partners-ref-section-title::after {
    width: 42px;
  }

  .partners-ref-project-grid,
  .partners-ref-stats__shell {
    grid-template-columns: 1fr;
  }

  .partners-ref-brand {
    min-height: 190px;
  }

  .partners-ref-stat {
    padding: 20px 14px;
  }

  .partners-ref-hero__copy {
    padding: 26px 18px;
  }

  .partners-ref-hero__copy h1 {
    font-size: clamp(2.35rem, 11vw, 3.5rem);
  }

  .partners-ref-cta__actions {
    width: 100%;
  }

  .partners-ref-button {
    width: 100%;
  }
}
CSS;
  }
}

if (!function_exists('mirrorcraft_render_our_partners_icon')) {
  function mirrorcraft_render_our_partners_icon($slug) {
    switch ($slug) {
      case 'globe':
      case 'countries':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm0 0c2 2.1 3.2 5.7 3.2 10S14 19.9 12 22m0-20c-2 2.1-3.2 5.7-3.2 10S10 19.9 12 22M2 12h20"/>
        </svg>
        <?php
        break;
      case 'shield':
      case 'experience':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3 5.5 5.5v5.7c0 4 2.6 7.6 6.5 9.8 3.9-2.2 6.5-5.8 6.5-9.8V5.5L12 3Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="m9.2 11.8 1.9 1.9 3.9-4.3"/>
        </svg>
        <?php
        break;
      case 'partnership':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M8 12a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Zm8 0a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7ZM3.5 20a4.5 4.5 0 0 1 9 0m2 0a4.5 4.5 0 0 1 9 0"/>
        </svg>
        <?php
        break;
      case 'building':
      case 'delivered':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 20V7.5A1.5 1.5 0 0 1 5.5 6H11v14H4Zm9-17h5.5A1.5 1.5 0 0 1 20 4.5V20h-7V3Z"/>
          <path fill="currentColor" d="M7 9h1.8v1.8H7zm0 3.5h1.8v1.8H7zm7.5-4.5h1.8v1.8h-1.8zm0 3.5h1.8v1.8h-1.8z"/>
        </svg>
        <?php
        break;
      case 'oem':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="m4 19 6.5-6.5M13.5 9.5 20 3M8 6l2 2m6 6 2 2m-5.5-2.5 2-2m-6.5 8 2-2"/>
        </svg>
        <?php
        break;
      case 'location':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 21s6-5.33 6-11a6 6 0 1 0-12 0c0 5.67 6 11 6 11Z"/>
          <circle cx="12" cy="10" r="2.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'supply':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 3.2 4.8 7v10L12 20.8 19.2 17V7L12 3.2Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="m4.8 7 7.2 4 7.2-4M12 11v9.8"/>
        </svg>
        <?php
        break;
      case 'spec':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M10 6h4m-7 6h10m-8 6h6"/>
          <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'time':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <rect x="4" y="5" width="16" height="15" rx="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M8 3v4m8-4v4M4 10h16"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_our_partners_brand_mark')) {
  function mirrorcraft_render_our_partners_brand_mark($slug) {
    switch ($slug) {
      case 'marriott':
        ?>
        <svg viewBox="0 0 56 28" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" d="M6 22 12 7l7 11 7-11 7 11 7-11 10 15"/>
        </svg>
        <?php
        break;
      case 'hilton':
        ?>
        <svg viewBox="0 0 32 32" role="presentation" focusable="false">
          <circle cx="16" cy="16" r="12.5" fill="none" stroke="currentColor" stroke-width="2.4"/>
          <path fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" d="M12 10v12m8-12v12M12 16h8"/>
        </svg>
        <?php
        break;
      case 'accor':
        ?>
        <svg viewBox="0 0 34 30" role="presentation" focusable="false">
          <path fill="currentColor" d="M17 3 4 27h6.2l2.1-4.3h9.5l2.1 4.3H30L17 3Zm-1.6 14.2L17 13l1.6 4.2h-3.2Z"/>
        </svg>
        <?php
        break;
      case 'wyndham':
        ?>
        <svg viewBox="0 0 48 26" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" d="M4 7l5 12 5-8 5 8 5-8 5 8 5-12"/>
        </svg>
        <?php
        break;
      case 'jll':
        ?>
        <svg viewBox="0 0 46 30" role="presentation" focusable="false">
          <ellipse cx="16" cy="15" rx="8.5" ry="11.5" fill="none" stroke="currentColor" stroke-width="2.2"/>
          <ellipse cx="23" cy="15" rx="8.5" ry="11.5" fill="none" stroke="currentColor" stroke-width="2.2"/>
          <ellipse cx="30" cy="15" rx="8.5" ry="11.5" fill="none" stroke="currentColor" stroke-width="2.2"/>
        </svg>
        <?php
        break;
      case 'crowne-plaza':
        ?>
        <svg viewBox="0 0 44 28" role="presentation" focusable="false">
          <ellipse cx="22" cy="14" rx="17" ry="8.5" fill="none" stroke="currentColor" stroke-width="2.1"/>
          <path fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" d="M14 14h16m-12-3.5 8 7"/>
        </svg>
        <?php
        break;
      case 'sheraton':
        ?>
        <svg viewBox="0 0 32 32" role="presentation" focusable="false">
          <circle cx="16" cy="16" r="11.5" fill="none" stroke="currentColor" stroke-width="2.1"/>
          <path fill="none" stroke="currentColor" stroke-width="2.1" stroke-linecap="round" d="M12.5 11.5c1.1-1.4 2.5-2.1 4.2-2.1 2.2 0 3.8 1 3.8 2.7 0 1.5-1 2.3-3.6 2.8-2.4.5-3.6 1.2-3.6 2.9 0 1.8 1.5 2.9 3.8 2.9 1.8 0 3.3-.7 4.4-2"/>
        </svg>
        <?php
        break;
      case 'four-seasons':
        ?>
        <svg viewBox="0 0 30 34" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" d="M15 4v26m0-17 7-4m-7 9 8 1m-8 2 6 6m-6-16-7-4m7 9-8 1m8 2-6 6"/>
        </svg>
        <?php
        break;
      case 'hyatt':
        ?>
        <svg viewBox="0 0 42 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" d="M4 18c7-8 27-8 34 0"/>
          <path fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" d="M16 6h10"/>
        </svg>
        <?php
        break;
      case 'radisson':
        ?>
        <svg viewBox="0 0 40 28" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round" d="M7 21V7h8c4 0 6.2 1.9 6.2 5 0 2.7-1.7 4.4-4.5 4.9l4.8 4.1"/>
          <path fill="none" stroke="currentColor" stroke-width="2.3" stroke-linecap="round" d="M24 21h9"/>
        </svg>
        <?php
        break;
      case 'westin':
        ?>
        <svg viewBox="0 0 40 26" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M5 7l4.2 12L15 10l5 9 5-9 5.8 9L35 7"/>
        </svg>
        <?php
        break;
      case 'ihg':
        ?>
        <svg viewBox="0 0 40 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" d="M6 5v14m28-14v14M20 5v14M12 12h16"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 28 28" role="presentation" focusable="false">
          <circle cx="14" cy="14" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_our_partners_page')) {
  function mirrorcraft_render_our_partners_page($post_id) {
    $contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
    $projects_url = mirrorcraft_link_by_slug('projects', '/projects/');

    $hero_image = mirrorcraft_theme_image_first_available_url(
      array(
        'home-hero-banner-20260423c.jpg',
        'home-hero-banner-20260423c.webp',
        'commercial-washroom-led-mirror.png',
      )
    );

    $cta_image = mirrorcraft_theme_image_first_available_url(
      array(
        'commercial-washroom-led-mirror.png',
        'commercial-washroom-led-mirror.webp',
        'home-hero-banner-20260423c.jpg',
      )
    );

    $highlights = array(
      array(
        'icon'  => 'globe',
        'title' => __('Global Reach', 'mirrorcraft'),
        'text'  => __('Serving clients in 30+ countries', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'shield',
        'title' => __('Reliable Quality', 'mirrorcraft'),
        'text'  => __('Premium materials and strict QC', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'partnership',
        'title' => __('Long-term Partnership', 'mirrorcraft'),
        'text'  => __('Growing together with our clients', 'mirrorcraft'),
      ),
    );

    $brands = array(
      array('slug' => 'marriott', 'name' => 'Marriott', 'sub' => __('International', 'mirrorcraft')),
      array('slug' => 'hilton', 'name' => 'Hilton', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
      array('slug' => 'accor', 'name' => 'Accor', 'sub' => __('Hotels', 'mirrorcraft')),
      array('slug' => 'wyndham', 'name' => 'Wyndham', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
      array('slug' => 'jll', 'name' => 'JLL', 'sub' => __('Property Services', 'mirrorcraft')),
      array('slug' => 'crowne-plaza', 'name' => 'Crowne Plaza', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
      array('slug' => 'sheraton', 'name' => 'Sheraton', 'sub' => __('Hotels', 'mirrorcraft')),
      array('slug' => 'four-seasons', 'name' => 'Four Seasons', 'sub' => __('Hotels and Resorts', 'mirrorcraft')),
      array('slug' => 'hyatt', 'name' => 'Hyatt', 'sub' => __('Hotels', 'mirrorcraft')),
      array('slug' => 'radisson', 'name' => 'Radisson', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
      array('slug' => 'westin', 'name' => 'Westin', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
      array('slug' => 'ihg', 'name' => 'IHG', 'sub' => __('Hotels & Resorts', 'mirrorcraft')),
    );

    $projects = array(
      array(
        'title' => __('Luxury Hotel Project – UAE', 'mirrorcraft'),
        'image' => mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp')),
        'meta'  => array(
          array('icon' => 'location', 'text' => __('Location: Dubai, UAE', 'mirrorcraft')),
          array('icon' => 'supply', 'text' => __('500+ LED Mirrors Supplied', 'mirrorcraft')),
          array('icon' => 'spec', 'text' => __('Custom Design / Anti-fog / Touch Sensor', 'mirrorcraft')),
          array('icon' => 'time', 'text' => __('Completed in 35 Days', 'mirrorcraft')),
        ),
      ),
      array(
        'title' => __('Residential Project – USA', 'mirrorcraft'),
        'image' => mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp')),
        'meta'  => array(
          array('icon' => 'location', 'text' => __('Location: California, USA', 'mirrorcraft')),
          array('icon' => 'supply', 'text' => __('1,200+ Units', 'mirrorcraft')),
          array('icon' => 'spec', 'text' => __('OEM Design / UL Certified', 'mirrorcraft')),
          array('icon' => 'time', 'text' => __('Completed in 45 Days', 'mirrorcraft')),
        ),
      ),
      array(
        'title' => __('Salon Chain Project – Europe', 'mirrorcraft'),
        'image' => mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp')),
        'meta'  => array(
          array('icon' => 'location', 'text' => __('Location: Berlin, Germany', 'mirrorcraft')),
          array('icon' => 'supply', 'text' => __('300+ LED Mirrors', 'mirrorcraft')),
          array('icon' => 'spec', 'text' => __('Smart Touch / Dimmable / Anti-fog', 'mirrorcraft')),
          array('icon' => 'time', 'text' => __('Completed in 30 Days', 'mirrorcraft')),
        ),
      ),
    );

    $stats = array(
      array('icon' => 'experience', 'value' => '10+', 'label' => __('Years Experience', 'mirrorcraft')),
      array('icon' => 'delivered', 'value' => '200+', 'label' => __('Projects Delivered', 'mirrorcraft')),
      array('icon' => 'countries', 'value' => '30+', 'label' => __('Countries Served', 'mirrorcraft')),
      array('icon' => 'oem', 'value' => 'OEM/ODM', 'label' => __('Supported', 'mirrorcraft')),
    );
    ?>
    <style><?php echo mirrorcraft_get_our_partners_inline_css(); ?></style>
    <div class="partners-ref-page">
      <section class="partners-ref-hero">
        <div class="partners-ref-shell">
          <div class="partners-ref-hero__panel">
            <div class="partners-ref-hero__copy">
              <p class="partners-ref-hero__eyebrow"><?php esc_html_e('Our Partners', 'mirrorcraft'); ?></p>
              <h1><?php esc_html_e('Trusted by Global Clients Worldwide', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('We are proud to collaborate with leading brands, developers, and businesses across the world, delivering premium LED mirror solutions for their projects.', 'mirrorcraft'); ?></p>

              <div class="partners-ref-hero__highlights">
                <?php foreach ($highlights as $item) : ?>
                  <article class="partners-ref-highlight">
                    <span class="partners-ref-highlight__icon" aria-hidden="true"><?php mirrorcraft_render_our_partners_icon($item['icon']); ?></span>
                    <div>
                      <strong><?php echo esc_html($item['title']); ?></strong>
                      <span><?php echo esc_html($item['text']); ?></span>
                    </div>
                  </article>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="partners-ref-hero__media">
              <?php if ($hero_image !== '') : ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Trusted by global clients mirror project', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="partners-ref-section partners-ref-brands">
        <div class="partners-ref-shell">
          <div class="partners-ref-section-title">
            <h2><?php esc_html_e('Trusted by Leading Brands', 'mirrorcraft'); ?></h2>
          </div>

          <div class="partners-ref-brand-grid">
            <?php foreach ($brands as $brand) : ?>
              <article class="partners-ref-brand partners-ref-brand--<?php echo esc_attr($brand['slug']); ?>">
                <span class="partners-ref-brand__mark" aria-hidden="true"><?php mirrorcraft_render_our_partners_brand_mark($brand['slug']); ?></span>
                <div class="partners-ref-brand__copy">
                  <strong><?php echo esc_html($brand['name']); ?></strong>
                  <span><?php echo esc_html($brand['sub']); ?></span>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="partners-ref-section">
        <div class="partners-ref-shell">
          <div class="partners-ref-section-title">
            <h2><?php esc_html_e('Successful Projects Together', 'mirrorcraft'); ?></h2>
          </div>

          <div class="partners-ref-project-grid">
            <?php foreach ($projects as $project) : ?>
              <article class="partners-ref-project-card">
                <figure class="partners-ref-project-card__media">
                  <?php if (!empty($project['image'])) : ?>
                    <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </figure>
                <div class="partners-ref-project-card__body">
                  <h3><?php echo esc_html($project['title']); ?></h3>
                  <ul class="partners-ref-project-meta">
                    <?php foreach ($project['meta'] as $meta) : ?>
                      <li>
                        <span class="partners-ref-meta__icon" aria-hidden="true"><?php mirrorcraft_render_our_partners_icon($meta['icon']); ?></span>
                        <span><?php echo esc_html($meta['text']); ?></span>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <div class="partners-ref-projects__actions">
            <a class="partners-ref-projects__button" href="<?php echo esc_url($projects_url); ?>"><?php esc_html_e('View More Projects', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </section>

      <section class="partners-ref-section partners-ref-stats">
        <div class="partners-ref-shell">
          <div class="partners-ref-stats__shell">
            <?php foreach ($stats as $stat) : ?>
              <article class="partners-ref-stat">
                <span class="partners-ref-stat__icon" aria-hidden="true"><?php mirrorcraft_render_our_partners_icon($stat['icon']); ?></span>
                <div>
                  <strong><?php echo esc_html($stat['value']); ?></strong>
                  <span><?php echo esc_html($stat['label']); ?></span>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="partners-ref-section partners-ref-cta">
        <div class="partners-ref-cta__shell">
          <div class="partners-ref-cta__media">
            <?php if ($cta_image !== '') : ?>
              <img src="<?php echo esc_url($cta_image); ?>" alt="<?php esc_attr_e('Trusted manufacturer project background', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>

          <div class="partners-ref-shell">
            <div class="partners-ref-cta__copy">
              <h2><?php esc_html_e('Start Your Project with a Trusted Manufacturer', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('We provide premium LED mirror solutions tailored to your project needs.', 'mirrorcraft'); ?></p>
              <div class="partners-ref-cta__actions">
                <a class="partners-ref-button partners-ref-button--solid" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
                <a class="partners-ref-button partners-ref-button--ghost" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
  }
}

if (!function_exists('mirrorcraft_get_production_workshop_inline_css')) {
  function mirrorcraft_get_production_workshop_inline_css() {
    return <<<'CSS'
.workshop-ref-page {
  margin-bottom: -96px;
  padding-bottom: 96px;
  background: #ffffff;
  color: #172641;
}

.workshop-ref-page * {
  box-sizing: border-box;
}

.workshop-ref-page h1,
.workshop-ref-page h2,
.workshop-ref-page h3,
.workshop-ref-page h4 {
  font-family: "Avenir Next", "Helvetica Neue", "Segoe UI", sans-serif;
}

.workshop-ref-shell {
  width: min(1380px, calc(100vw - 64px));
  margin: 0 auto;
}

.workshop-ref-section {
  padding: 46px 0;
}

.workshop-ref-section-title {
  display: grid;
  gap: 12px;
  justify-items: center;
  margin-bottom: 30px;
  text-align: center;
}

.workshop-ref-section-title h2 {
  margin: 0;
  color: #122744;
  font-size: clamp(2rem, 2.6vw, 3rem);
  font-weight: 800;
  line-height: 1.04;
  text-transform: uppercase;
}

.workshop-ref-section-title::after {
  content: "";
  width: 58px;
  height: 4px;
  border-radius: 999px;
  background: #245baf;
}

.workshop-ref-hero {
  padding: 0 0 30px;
}

.workshop-ref-hero__panel {
  position: relative;
  min-height: 560px;
  overflow: hidden;
  background: #0c1c38;
}

.workshop-ref-hero__panel::after {
  content: "";
  position: absolute;
  inset: 0;
  background:
    linear-gradient(90deg, rgba(8, 18, 37, 0.88) 0%, rgba(8, 18, 37, 0.82) 28%, rgba(8, 18, 37, 0.34) 56%, rgba(8, 18, 37, 0.08) 78%, rgba(8, 18, 37, 0.02) 100%),
    linear-gradient(180deg, rgba(8, 18, 37, 0.06), rgba(8, 18, 37, 0.12));
}

.workshop-ref-hero__inner {
  position: relative;
  z-index: 1;
  display: flex;
  min-height: 560px;
  align-items: center;
}

.workshop-ref-hero__copy {
  display: grid;
  gap: 18px;
  width: min(440px, 100%);
  padding: 58px 0;
  color: #ffffff;
}

.workshop-ref-hero__copy h1 {
  margin: 0;
  max-width: 7.4ch;
  color: #ffffff;
  font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
  font-weight: 800;
  line-height: var(--mirrorcraft-display-hero-line, 0.9);
  letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
  text-transform: uppercase;
}

.workshop-ref-hero__copy p {
  max-width: 28rem;
  margin: 0;
  color: rgba(236, 241, 248, 0.88);
  font-size: 1.02rem;
  line-height: 1.66;
}

.workshop-ref-hero__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
  margin-top: 4px;
}

.workshop-ref-button {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-height: 52px;
  padding: 0 26px;
  border: 1px solid transparent;
  border-radius: 4px;
  font-size: 0.95rem;
  font-weight: 700;
  letter-spacing: 0.01em;
  transition: transform 180ms ease, background 180ms ease, border-color 180ms ease, color 180ms ease;
}

.workshop-ref-button:hover,
.workshop-ref-button:focus-visible {
  transform: translateY(-1px);
}

.workshop-ref-button--solid {
  background: #d3aa63;
  border-color: #d3aa63;
  color: #172133;
}

.workshop-ref-button--ghost {
  background: rgba(255, 255, 255, 0.02);
  border-color: rgba(243, 247, 255, 0.44);
  color: #ffffff;
}

.workshop-ref-button--ghost:hover,
.workshop-ref-button--ghost:focus-visible {
  background: rgba(255, 255, 255, 0.08);
}

.workshop-ref-hero__media {
  position: absolute;
  inset: 0;
}

.workshop-ref-hero__media img,
.workshop-ref-process-card__media img,
.workshop-ref-area-card img,
.workshop-ref-pack-card img,
.workshop-ref-cta__media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.workshop-ref-hero__media img {
  object-position: center center;
}

.workshop-ref-overview {
  background: #ffffff;
  border-top: 1px solid #e4ebf2;
  border-bottom: 1px solid #e4ebf2;
}

.workshop-ref-overview__shell {
  display: grid;
  grid-template-columns: minmax(320px, 1.18fr) repeat(4, minmax(0, 0.88fr));
  gap: 0;
}

.workshop-ref-overview__intro,
.workshop-ref-overview-card {
  min-height: 164px;
  padding: 34px 22px;
}

.workshop-ref-overview__intro {
  display: grid;
  gap: 14px;
  align-content: center;
}

.workshop-ref-overview__intro h2 {
  margin: 0;
  color: #15294a;
  font-size: clamp(1.9rem, 2.3vw, 2.6rem);
  font-weight: 800;
  line-height: 1.08;
  text-transform: uppercase;
}

.workshop-ref-overview__intro p {
  margin: 0;
  color: #5c6b7e;
  font-size: 0.99rem;
  line-height: 1.84;
}

.workshop-ref-overview-card {
  display: grid;
  justify-items: center;
  align-content: center;
  gap: 14px;
  text-align: center;
  border-left: 1px solid #e4ebf2;
}

.workshop-ref-overview-card__icon,
.workshop-ref-quality-card__icon,
.workshop-ref-custom-card__icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #1b2d4f;
}

.workshop-ref-overview-card__icon {
  width: 54px;
  height: 54px;
}

.workshop-ref-overview-card__icon svg,
.workshop-ref-quality-card__icon svg,
.workshop-ref-custom-card__icon svg {
  width: 100%;
  height: 100%;
}

.workshop-ref-overview-card strong {
  display: block;
  color: #142948;
  font-size: 1.9rem;
  font-weight: 800;
  line-height: 1;
}

.workshop-ref-overview-card span:last-child {
  color: #324960;
  font-size: 1rem;
  line-height: 1.45;
}

.workshop-ref-process-grid {
  display: grid;
  grid-template-columns: repeat(6, minmax(0, 1fr));
  gap: 22px;
}

.workshop-ref-process-card {
  position: relative;
  display: grid;
  gap: 12px;
  justify-items: center;
  align-content: start;
  padding: 18px 14px 20px;
  text-align: center;
  border: 1px solid #d9e2ec;
  border-radius: 6px;
  background: #ffffff;
  box-shadow: 0 10px 28px rgba(11, 33, 64, 0.04);
}

.workshop-ref-process-card:not(:last-child)::after {
  content: "→";
  position: absolute;
  right: -18px;
  top: 50%;
  transform: translateY(-50%);
  color: #1c4e92;
  font-size: 26px;
  line-height: 1;
}

.workshop-ref-process-card__number {
  position: absolute;
  top: -18px;
  left: 50%;
  z-index: 1;
  transform: translateX(-50%);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 42px;
  height: 42px;
  border-radius: 999px;
  background: #173a72;
  color: #fff;
  font-size: 1rem;
  font-weight: 800;
  box-shadow: 0 12px 22px rgba(23, 58, 114, 0.22);
}

.workshop-ref-process-card__media {
  width: 100%;
  aspect-ratio: 1 / 0.82;
  overflow: hidden;
  border: 1px solid #d9e2ec;
  border-radius: 4px;
  background: #dbe5ef;
}

.workshop-ref-process-card h3 {
  margin: 0;
  color: #162947;
  font-size: 0.96rem;
  font-weight: 700;
  line-height: 1.4;
}

.workshop-ref-area-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 16px;
}

.workshop-ref-area-card {
  position: relative;
  overflow: hidden;
  border: 1px solid #d7e0eb;
  border-radius: 4px;
  background: #d7dfe8;
}

.workshop-ref-area-card img {
  aspect-ratio: 1.32 / 0.68;
}

.workshop-ref-area-card span {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
  padding: 12px 16px;
  background: rgba(16, 39, 76, 0.92);
  color: #fff;
  font-size: 0.94rem;
  font-weight: 600;
  line-height: 1.3;
  text-align: center;
}

.workshop-ref-quality {
  background: #ffffff;
  border-top: 1px solid #e4ebf2;
  border-bottom: 1px solid #e4ebf2;
}

.workshop-ref-quality__shell {
  display: grid;
  grid-template-columns: minmax(320px, 0.9fr) minmax(0, 1.1fr);
  gap: 32px;
  align-items: center;
}

.workshop-ref-quality__copy {
  display: grid;
  gap: 14px;
}

.workshop-ref-quality__copy h2,
.workshop-ref-packaging__copy h2 {
  margin: 0;
  color: #142848;
  font-size: clamp(1.85rem, 2.25vw, 2.65rem);
  font-weight: 800;
  line-height: 1.08;
  text-transform: uppercase;
}

.workshop-ref-quality__copy p,
.workshop-ref-packaging__copy p {
  margin: 0;
  color: #5c6b7e;
  font-size: 0.98rem;
  line-height: 1.84;
}

.workshop-ref-quality-grid,
.workshop-ref-custom-grid {
  display: grid;
  gap: 0;
}

.workshop-ref-quality-grid {
  grid-template-columns: repeat(5, minmax(0, 1fr));
}

.workshop-ref-quality-card,
.workshop-ref-custom-card {
  display: grid;
  justify-items: center;
  gap: 14px;
  padding: 18px 10px;
  text-align: center;
}

.workshop-ref-quality-card:not(:first-child),
.workshop-ref-custom-card:not(:first-child) {
  border-left: 1px solid #e4ebf2;
}

.workshop-ref-quality-card__icon,
.workshop-ref-custom-card__icon {
  width: 42px;
  height: 42px;
}

.workshop-ref-quality-card span:last-child,
.workshop-ref-custom-card span:last-child {
  color: #223a59;
  font-size: 0.94rem;
  font-weight: 600;
  line-height: 1.45;
}

.workshop-ref-custom-grid {
  grid-template-columns: repeat(6, minmax(0, 1fr));
  border-top: 1px solid #e4ebf2;
  border-bottom: 1px solid #e4ebf2;
}

.workshop-ref-packaging__shell {
  display: grid;
  grid-template-columns: minmax(260px, 0.9fr) minmax(0, 1.1fr);
  gap: 28px;
  align-items: start;
}

.workshop-ref-pack-grid {
  display: grid;
  grid-template-columns: repeat(5, minmax(0, 1fr));
  gap: 14px;
}

.workshop-ref-pack-card {
  display: grid;
  gap: 10px;
  justify-items: center;
  text-align: center;
}

.workshop-ref-pack-card__media {
  width: 100%;
  overflow: hidden;
  border: 1px solid #d7e0eb;
  border-radius: 4px;
  background: #d8e0e8;
}

.workshop-ref-pack-card__media img {
  aspect-ratio: 1 / 0.82;
}

.workshop-ref-pack-card span:last-child {
  color: #223a59;
  font-size: 0.9rem;
  font-weight: 600;
  line-height: 1.35;
}

.workshop-ref-cta {
  padding-top: 18px;
  padding-bottom: 0;
}

.workshop-ref-cta__panel {
  position: relative;
  overflow: hidden;
  border-radius: 0;
  background:
    linear-gradient(180deg, rgba(11, 28, 55, 0.92), rgba(11, 28, 55, 0.92)),
    #0d2448;
}

.workshop-ref-cta__media {
  position: absolute;
  inset: 0;
  opacity: 0.2;
}

.workshop-ref-cta__body {
  position: relative;
  z-index: 1;
  display: grid;
  justify-items: center;
  gap: 16px;
  padding: clamp(34px, 5vw, 52px) 20px;
  text-align: center;
}

.workshop-ref-cta__body h2 {
  margin: 0;
  color: #fff;
  font-size: clamp(1.9rem, 3vw, 3rem);
  font-weight: 800;
  line-height: 1.08;
  text-transform: uppercase;
}

.workshop-ref-cta__body p {
  max-width: 52rem;
  margin: 0;
  color: rgba(242, 246, 255, 0.84);
  font-size: 0.98rem;
  line-height: 1.72;
}

.workshop-ref-cta__actions {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 14px;
  margin-top: 6px;
}

@media (max-width: 1260px) {
  .workshop-ref-shell {
    width: min(100vw - 40px, 100%);
  }

  .workshop-ref-process-grid,
  .workshop-ref-quality-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .workshop-ref-process-card:not(:last-child)::after {
    display: none;
  }

  .workshop-ref-custom-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .workshop-ref-custom-card:nth-child(4) {
    border-left: 0;
  }

  .workshop-ref-pack-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }
}

@media (max-width: 980px) {
  .workshop-ref-quality__shell,
  .workshop-ref-packaging__shell {
    grid-template-columns: 1fr;
  }

  .workshop-ref-hero__inner {
    min-height: 520px;
    align-items: end;
  }

  .workshop-ref-overview__shell {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .workshop-ref-overview__intro {
    grid-column: 1 / -1;
  }

  .workshop-ref-overview-card:nth-child(3),
  .workshop-ref-overview-card:nth-child(5) {
    border-left: 0;
  }

  .workshop-ref-area-grid,
  .workshop-ref-process-grid,
  .workshop-ref-quality-grid,
  .workshop-ref-custom-grid,
  .workshop-ref-pack-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .workshop-ref-quality-card:nth-child(4),
  .workshop-ref-custom-card:nth-child(3),
  .workshop-ref-custom-card:nth-child(5) {
    border-left: 0;
  }
}

@media (max-width: 640px) {
  .workshop-ref-page {
    padding-bottom: 76px;
  }

  .workshop-ref-shell {
    width: min(100vw - 24px, 100%);
  }

  .workshop-ref-section {
    padding: 28px 0;
  }

  .workshop-ref-hero__inner {
    min-height: 460px;
  }

  .workshop-ref-hero__copy h1 {
    font-size: clamp(2.4rem, 11vw, 3.8rem);
  }

  .workshop-ref-hero__copy {
    padding: 24px 0;
  }

  .workshop-ref-overview__shell,
  .workshop-ref-area-grid,
  .workshop-ref-process-grid,
  .workshop-ref-quality-grid,
  .workshop-ref-custom-grid,
  .workshop-ref-pack-grid {
    grid-template-columns: 1fr;
  }

  .workshop-ref-overview-card {
    border-left: 0;
    border-top: 1px solid #e4ebf2;
  }

  .workshop-ref-quality-card,
  .workshop-ref-custom-card {
    border-left: 0 !important;
    border-top: 1px solid #e4ebf2;
  }

  .workshop-ref-cta__actions {
    width: 100%;
  }

  .workshop-ref-button {
    width: 100%;
  }
}
CSS;
  }
}

if (!function_exists('mirrorcraft_render_production_workshop_icon')) {
  function mirrorcraft_render_production_workshop_icon($slug) {
    switch ($slug) {
      case 'workshop':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 20V7.5A1.5 1.5 0 0 1 5.5 6H11v14H4Zm9-17h5.5A1.5 1.5 0 0 1 20 4.5V20h-7V3Z"/>
          <path fill="currentColor" d="M7 9h1.8v1.8H7zm0 3.5h1.8v1.8H7zm7.5-4.5h1.8v1.8h-1.8zm0 3.5h1.8v1.8h-1.8z"/>
        </svg>
        <?php
        break;
      case 'oem':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="m4 19 6.5-6.5M13.5 9.5 20 3M8 6l2 2m6 6 2 2m-5.5-2.5 2-2m-6.5 8 2-2"/>
        </svg>
        <?php
        break;
      case 'bulk':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 19h16M6 16V9m4 7V5m4 11V11m4 5V7"/>
        </svg>
        <?php
        break;
      case 'qc':
      case 'lighting':
      case 'electrical':
      case 'inspection':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3 5.5 5.5v5.7c0 4 2.6 7.6 6.5 9.8 3.9-2.2 6.5-5.8 6.5-9.8V5.5L12 3Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="m9.2 11.8 1.9 1.9 3.9-4.3"/>
        </svg>
        <?php
        break;
      case 'anti-fog':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M7 7c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.2-1.5 3.4-2.9 4.5-1 .8-1.6 1.5-1.6 2.5"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M6 15h12M8 19h8"/>
        </svg>
        <?php
        break;
      case 'packaging':
      case 'branding':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 3.2 4.8 7v10L12 20.8 19.2 17V7L12 3.2Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="m4.8 7 7.2 4 7.2-4M12 11v9.8"/>
        </svg>
        <?php
        break;
      case 'size':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 8V4h4M20 8V4h-4M4 16v4h4M20 16v4h-4M8 4h8M8 20h8M4 8v8M20 8v8"/>
        </svg>
        <?php
        break;
      case 'shape':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="9" cy="12" r="5" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M14 7h6v10h-6z"/>
        </svg>
        <?php
        break;
      case 'frame':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <rect x="4" y="4" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="8" y="8" width="8" height="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'functions':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M8 6v12M12 3v18M16 8v8"/>
          <circle cx="8" cy="10" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="12" cy="7" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <circle cx="16" cy="14" r="2" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_production_workshop_page')) {
  function mirrorcraft_render_production_workshop_page($post_id) {
    $contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
    $hero_image = mirrorcraft_theme_image_first_available_url(
      array(
        'production-workshop.png',
        'factory.png',
        'factory.avif.png',
        'who-we-are-workshop.png',
        'who-we-are-workshop.webp',
      )
    );

    $images = array(
      'factory'    => mirrorcraft_theme_image_first_available_url(array('factory.png', 'factory.avif.png', 'who-we-are-workshop.png')),
      'workshop'   => mirrorcraft_theme_image_first_available_url(array('who-we-are-workshop.png', 'who-we-are-workshop.webp', 'factory.png')),
      'inspection' => mirrorcraft_theme_image_first_available_url(array('who-we-are-inspection.png', 'who-we-are-inspection.webp', 'factory.png')),
      'warehouse'  => mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp', 'factory.png')),
      'edge'       => mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp', 'factory.png')),
      'features'   => mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp', 'home-hero-banner-20260423c.jpg')),
      'frames'     => mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp', 'residential-led-bathroom-mirror.png')),
      'mirror'     => mirrorcraft_theme_image_first_available_url(array('commercial-washroom-led-mirror.png', 'commercial-washroom-led-mirror.webp', 'home-hero-banner-20260422.png')),
    );

    $overview_cards = array(
      array('icon' => 'workshop', 'value' => '10,000m²', 'label' => __('Workshop', 'mirrorcraft')),
      array('icon' => 'oem', 'value' => 'OEM & ODM', 'label' => __('Production', 'mirrorcraft')),
      array('icon' => 'bulk', 'value' => __('Bulk Order', 'mirrorcraft'), 'label' => __('Capacity', 'mirrorcraft')),
      array('icon' => 'qc', 'value' => __('Strict', 'mirrorcraft'), 'label' => __('QC Process', 'mirrorcraft')),
    );

    $process_steps = array(
      array('title' => __('Raw Glass Inspection', 'mirrorcraft'), 'image' => $images['workshop']),
      array('title' => __('Mirror Cutting', 'mirrorcraft'), 'image' => $images['factory']),
      array('title' => __('Edge Polishing', 'mirrorcraft'), 'image' => $images['edge']),
      array('title' => __('LED & Frame Assembly', 'mirrorcraft'), 'image' => $images['frames']),
      array('title' => __('Function Testing', 'mirrorcraft'), 'image' => $images['mirror']),
      array('title' => __('Final Packaging', 'mirrorcraft'), 'image' => $images['warehouse']),
    );

    $areas = array(
      array('title' => __('Glass Cutting Area', 'mirrorcraft'), 'image' => $images['factory']),
      array('title' => __('Edge Processing Area', 'mirrorcraft'), 'image' => $images['edge']),
      array('title' => __('LED Assembly Area', 'mirrorcraft'), 'image' => $images['workshop']),
      array('title' => __('Mirror Cabinet Workshop', 'mirrorcraft'), 'image' => $images['frames']),
      array('title' => __('Quality Inspection Area', 'mirrorcraft'), 'image' => $images['inspection']),
      array('title' => __('Packaging Area', 'mirrorcraft'), 'image' => $images['warehouse']),
    );

    $quality_cards = array(
      array('icon' => 'lighting', 'title' => __('Lighting Test', 'mirrorcraft')),
      array('icon' => 'anti-fog', 'title' => __('Anti-fog Test', 'mirrorcraft')),
      array('icon' => 'electrical', 'title' => __('Electrical Test', 'mirrorcraft')),
      array('icon' => 'inspection', 'title' => __('Surface Inspection', 'mirrorcraft')),
      array('icon' => 'packaging', 'title' => __('Packaging Check', 'mirrorcraft')),
    );

    $custom_cards = array(
      array('icon' => 'size', 'title' => __('Custom Size', 'mirrorcraft')),
      array('icon' => 'shape', 'title' => __('Custom Shape', 'mirrorcraft')),
      array('icon' => 'frame', 'title' => __('Custom Frame', 'mirrorcraft')),
      array('icon' => 'lighting', 'title' => __('Custom Lighting', 'mirrorcraft')),
      array('icon' => 'functions', 'title' => __('Custom Functions', 'mirrorcraft')),
      array('icon' => 'branding', 'title' => __('OEM Branding', 'mirrorcraft')),
    );

    $pack_cards = array(
      array('title' => __('Foam Protection', 'mirrorcraft'), 'image' => $images['features']),
      array('title' => __('Corner Protection', 'mirrorcraft'), 'image' => $images['frames']),
      array('title' => __('Carton Packaging', 'mirrorcraft'), 'image' => $images['warehouse']),
      array('title' => __('Wooden Crate Option', 'mirrorcraft'), 'image' => $images['factory']),
      array('title' => __('Pallet Loading', 'mirrorcraft'), 'image' => $images['workshop']),
    );
    ?>
    <style><?php echo mirrorcraft_get_production_workshop_inline_css(); ?></style>
    <div class="workshop-ref-page">
      <section class="workshop-ref-hero">
        <div class="workshop-ref-hero__panel">
          <div class="workshop-ref-hero__media">
            <?php if ($hero_image !== '') : ?>
              <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Production workshop manufacturing line', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
            <?php endif; ?>
          </div>

          <div class="workshop-ref-shell workshop-ref-hero__inner">
            <div class="workshop-ref-hero__copy">
              <h1><?php esc_html_e('Production Workshop', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Advanced mirror manufacturing for global B2B projects.', 'mirrorcraft'); ?></p>
              <p><?php esc_html_e('Our production workshop is equipped for stable glass processing, polishing, assembly, inspection, and customized project orders.', 'mirrorcraft'); ?></p>
              <div class="workshop-ref-hero__actions">
                <a class="workshop-ref-button workshop-ref-button--solid" href="#workshop-process"><?php esc_html_e('View Manufacturing Process', 'mirrorcraft'); ?></a>
                <a class="workshop-ref-button workshop-ref-button--ghost" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section workshop-ref-overview">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-overview__shell">
            <div class="workshop-ref-overview__intro">
              <h2><?php esc_html_e('Workshop Overview', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Our production workshop is equipped with modern glass processing, mirror coating, cutting, polishing, assembly, and inspection systems to support stable bulk production and customized project orders.', 'mirrorcraft'); ?></p>
            </div>

            <?php foreach ($overview_cards as $card) : ?>
              <article class="workshop-ref-overview-card">
                <span class="workshop-ref-overview-card__icon" aria-hidden="true"><?php mirrorcraft_render_production_workshop_icon($card['icon']); ?></span>
                <div>
                  <strong><?php echo esc_html($card['value']); ?></strong>
                  <span><?php echo esc_html($card['label']); ?></span>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section id="workshop-process" class="workshop-ref-section">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-section-title">
            <h2><?php esc_html_e('Production Process', 'mirrorcraft'); ?></h2>
          </div>

          <div class="workshop-ref-process-grid">
            <?php foreach ($process_steps as $index => $step) : ?>
              <article class="workshop-ref-process-card">
                <span class="workshop-ref-process-card__number"><?php echo esc_html($index + 1); ?></span>
                <div class="workshop-ref-process-card__media">
                  <?php if (!empty($step['image'])) : ?>
                    <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <h3><?php echo esc_html($step['title']); ?></h3>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-section-title">
            <h2><?php esc_html_e('Workshop Areas', 'mirrorcraft'); ?></h2>
          </div>

          <div class="workshop-ref-area-grid">
            <?php foreach ($areas as $area) : ?>
              <article class="workshop-ref-area-card">
                <?php if (!empty($area['image'])) : ?>
                  <img src="<?php echo esc_url($area['image']); ?>" alt="<?php echo esc_attr($area['title']); ?>" loading="lazy" decoding="async">
                <?php endif; ?>
                <span><?php echo esc_html($area['title']); ?></span>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section workshop-ref-quality">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-quality__shell">
            <div class="workshop-ref-quality__copy">
              <h2><?php esc_html_e('Quality Control', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Every mirror goes through multiple inspections before shipment, including appearance checking, lighting testing, anti-fog testing, electrical safety inspection, and packaging drop protection.', 'mirrorcraft'); ?></p>
            </div>

            <div class="workshop-ref-quality-grid">
              <?php foreach ($quality_cards as $card) : ?>
                <article class="workshop-ref-quality-card">
                  <span class="workshop-ref-quality-card__icon" aria-hidden="true"><?php mirrorcraft_render_production_workshop_icon($card['icon']); ?></span>
                  <span><?php echo esc_html($card['title']); ?></span>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-section-title">
            <h2><?php esc_html_e('Custom Production Capability', 'mirrorcraft'); ?></h2>
          </div>

          <div class="workshop-ref-custom-grid">
            <?php foreach ($custom_cards as $card) : ?>
              <article class="workshop-ref-custom-card">
                <span class="workshop-ref-custom-card__icon" aria-hidden="true"><?php mirrorcraft_render_production_workshop_icon($card['icon']); ?></span>
                <span><?php echo esc_html($card['title']); ?></span>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section">
        <div class="workshop-ref-shell">
          <div class="workshop-ref-packaging__shell">
            <div class="workshop-ref-packaging__copy">
              <h2><?php esc_html_e('Packaging & Shipping', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Strong export packaging helps protect mirrors during long-distance transportation and reduce damage risk for global projects.', 'mirrorcraft'); ?></p>
            </div>

            <div class="workshop-ref-pack-grid">
              <?php foreach ($pack_cards as $card) : ?>
                <article class="workshop-ref-pack-card">
                  <div class="workshop-ref-pack-card__media">
                    <?php if (!empty($card['image'])) : ?>
                      <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                    <?php endif; ?>
                  </div>
                  <span><?php echo esc_html($card['title']); ?></span>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="workshop-ref-section workshop-ref-cta">
        <div class="workshop-ref-cta__panel">
          <div class="workshop-ref-cta__media">
            <?php if ($images['mirror'] !== '') : ?>
              <img src="<?php echo esc_url($images['mirror']); ?>" alt="<?php esc_attr_e('Reliable mirror manufacturer CTA background', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
          </div>

          <div class="workshop-ref-shell">
            <div class="workshop-ref-cta__body">
              <h2><?php esc_html_e('Looking for a Reliable Mirror Manufacturer?', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Send us your project requirements and get a customized production solution.', 'mirrorcraft'); ?></p>
              <div class="workshop-ref-cta__actions">
                <a class="workshop-ref-button workshop-ref-button--solid" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
                <a class="workshop-ref-button workshop-ref-button--ghost" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Send Your Drawing', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
  }
}

if (!function_exists('mirrorcraft_render_technology_icon')) {
  function mirrorcraft_render_technology_icon($slug) {
    switch ($slug) {
      case 'lighting':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v3h-2V2Zm6.95 2.46 1.41 1.41-2.12 2.12-1.41-1.41 2.12-2.12ZM4.64 4.64 6.76 6.76 5.34 8.17 3.22 6.05l1.42-1.41ZM12 6a6 6 0 0 0-3 11.2V20h6v-2.8A6 6 0 0 0 12 6Zm-2 15v-1h4v1h-4Z"/>
        </svg>
        <?php
        break;
      case 'anti-fog':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 6a5 5 0 0 1 10 0c0 2.5-2 3.7-3.2 4.8A3.3 3.3 0 0 0 13 13h-2a4.9 4.9 0 0 1 1.3-3.4C13.5 8.3 15 7.5 15 6a3 3 0 0 0-6 0H7Zm-1 9h12v2H6v-2Zm2 4h8v2H8v-2Z"/>
        </svg>
        <?php
        break;
      case 'processing':
      case 'edge':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h10v2H6v8H4V4Zm4 14h10V8h2v12H8v-2Zm6.2-8.4 1.4 1.4-5.8 5.8H8.4v-1.4l5.8-5.8Z"/>
        </svg>
        <?php
        break;
      case 'smart':
      case 'function':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a7 7 0 0 0-4 12.75V18a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-3.25A7 7 0 0 0 12 2Zm-1 18v1h2v-1h-2Zm1-16a5 5 0 0 1 2.5 9.33l-.5.29V17h-4v-3.38l-.5-.29A5 5 0 0 1 12 4Z"/>
        </svg>
        <?php
        break;
      case 'design':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 17.25V20h2.75l8.1-8.1-2.75-2.75-8.1 8.1ZM18.7 8.05a.99.99 0 0 0 0-1.4l-1.35-1.35a.99.99 0 0 0-1.4 0l-1.06 1.06 2.75 2.75 1.06-1.06Z"/>
        </svg>
        <?php
        break;
      case 'glass':
      case 'size':
      case 'frame':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h16v16H4V4Zm2 2v12h12V6H6Zm2 2h8v8H8V8Z"/>
        </svg>
        <?php
        break;
      case 'assembly':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v4h-2V2Zm6.36 2.64 1.41 1.41-2.83 2.83-1.41-1.41 2.83-2.83ZM4.64 4.64l2.83 2.83-1.41 1.41L3.23 6.05l1.41-1.41ZM12 8a4 4 0 1 0 4 4 4 4 0 0 0-4-4Zm-7 10h14v2H5v-2Z"/>
        </svg>
        <?php
        break;
      case 'test':
      case 'safety':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3 5.5 5.5v5.7c0 4 2.6 7.6 6.5 9.8 3.9-2.2 6.5-5.8 6.5-9.8V5.5L12 3Zm-1 11.2-2.2-2.2 1.4-1.4 1.2 1.2 2.9-2.9 1.4 1.4-4.3 4.3Z"/>
        </svg>
        <?php
        break;
      case 'packaging':
      case 'drop':
      case 'development':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11.4 3.1a1.2 1.2 0 0 1 1.2 0l6.2 3.6a1.2 1.2 0 0 1 .6 1v7.2a1.2 1.2 0 0 1-.6 1l-6.2 3.6a1.2 1.2 0 0 1-1.2 0l-6.2-3.6a1.2 1.2 0 0 1-.6-1V7.7a1.2 1.2 0 0 1 .6-1l6.2-3.6Zm.6 2.42L7.3 8.2 12 10.9l4.7-2.7L12 5.52Zm-5.4 4.3v4.57l4.4 2.54v-4.57L6.6 9.82Zm6.4 7.11 4.4-2.54V9.82L13 12.37v4.57Z"/>
        </svg>
        <?php
        break;
      case 'cri':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 4a8 8 0 1 0 8 8 8 8 0 0 0-8-8Zm0 2a6 6 0 0 1 4.89 9.48l-1.39-1.39A4 4 0 1 0 8 12a4 4 0 0 0 6.09 3.4l1.38 1.39A6 6 0 1 1 12 6Z"/>
          <circle cx="12" cy="12" r="1.9" fill="currentColor"/>
        </svg>
        <?php
        break;
      case 'water':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3.1c2.9 3.25 5.4 6.17 5.4 9.13a5.4 5.4 0 1 1-10.8 0c0-2.96 2.5-5.88 5.4-9.13Zm0 15.73a3.61 3.61 0 0 0 3.6-3.6h-1.8a1.8 1.8 0 0 1-1.8 1.8Z"/>
        </svg>
        <?php
        break;
      case 'aging':
      case 'lifespan':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v3h-2V2Zm6.95 2.46 1.41 1.41-2.12 2.12-1.41-1.41 2.12-2.12ZM4.64 4.64 6.76 6.76 5.34 8.17 3.22 6.05l1.42-1.41ZM12 6a6 6 0 0 0-3 11.2V20h6v-2.8A6 6 0 0 0 12 6Zm0 2a4 4 0 0 1 2 7.46l-.5.29V18h-3v-2.25l-.5-.29A4 4 0 0 1 12 8Z"/>
        </svg>
        <?php
        break;
      case 'shape':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 4a6 6 0 1 1-6 6 6 6 0 0 1 6-6Zm7 10h1a2 2 0 0 1 0 4h-2a3 3 0 0 1 1-4Zm-15 0a3 3 0 0 1 1 4H3a2 2 0 0 1 0-4h1Z"/>
        </svg>
        <?php
        break;
      case 'vision':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 5c5.5 0 9.5 5.4 9.67 5.63a1 1 0 0 1 0 1.14C21.5 12 17.5 17.4 12 17.4S2.5 12 2.33 11.77a1 1 0 0 1 0-1.14C2.5 10.4 6.5 5 12 5Zm0 10.4c3.64 0 6.65-3.12 7.58-4.2C18.66 10.12 15.64 7 12 7s-6.65 3.12-7.58 4.2C5.35 12.28 8.36 15.4 12 15.4Zm0-6.9a2.7 2.7 0 1 1-2.7 2.7A2.7 2.7 0 0 1 12 8.5Z"/>
        </svg>
        <?php
        break;
      case 'reliability':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 21V7.5A1.5 1.5 0 0 1 5.5 6H11v15H4Zm9-18h5.5A1.5 1.5 0 0 1 20 4.5V21h-7V3Zm-6 7h1.8v1.8H7Zm0 3.6h1.8v1.8H7Zm7.2-4.6H16v1.8h-1.8Zm0 3.6H16v1.8h-1.8Z"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        <?php
    }
  }
}

if (!function_exists('mirrorcraft_render_technology_page')) {
  function mirrorcraft_render_technology_page($post_id) {
    $contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
    $hero_image = mirrorcraft_theme_image_first_available_url(
      array(
        'factory.png',
        'factory.avif.png',
        'who-we-are-workshop.png',
        'who-we-are-workshop.webp',
      )
    );

    $lighting_image = mirrorcraft_theme_image_first_available_url(
      array(
        'home-hero-banner-20260423c.jpg',
        'home-hero-banner-20260423c.webp',
        'banner.png',
      )
    );

    $mirror_image = mirrorcraft_theme_image_first_available_url(
      array(
        'commercial-washroom-led-mirror.png',
        'commercial-washroom-led-mirror.webp',
        'banner.png',
      )
    );

    $processing_image = mirrorcraft_theme_image_first_available_url(
      array(
        'factory.png',
        'who-we-are-workshop.png',
        'who-we-are-workshop.webp',
      )
    );

    $smart_image = mirrorcraft_theme_image_first_available_url(
      array(
        'custom-solution-features-20260422.png',
        'custom-solution-features-20260422.webp',
        'residential-led-bathroom-mirror.png',
      )
    );

    $packaging_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-warehouse.png',
        'who-we-are-warehouse.webp',
        'factory.png',
      )
    );

    $quality_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-inspection.png',
        'who-we-are-inspection.webp',
        'factory.png',
      )
    );

    $assembly_image = mirrorcraft_theme_image_first_available_url(
      array(
        'who-we-are-workshop.png',
        'who-we-are-workshop.webp',
        'factory.png',
      )
    );

    $core_cards = array(
      array(
        'icon'  => 'lighting',
        'image' => $lighting_image,
        'title' => __('LED Lighting Technology', 'mirrorcraft'),
        'text'  => __('High CRI, adjustable CCT, stable brightness and long lifespan.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'anti-fog',
        'image' => $mirror_image,
        'title' => __('Anti-Fog Technology', 'mirrorcraft'),
        'text'  => __('Fast heating, safe temperature control, clear reflection always.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'processing',
        'image' => $processing_image,
        'title' => __('Mirror Processing', 'mirrorcraft'),
        'text'  => __('Cutting, edging, polishing, drilling and shaping with high precision.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'smart',
        'image' => $smart_image,
        'title' => __('Smart Functions', 'mirrorcraft'),
        'text'  => __('Touch sensor, dimming, Bluetooth, clock, defogger and more.', 'mirrorcraft'),
      ),
    );

    $process_steps = array(
      array(
        'icon'  => 'design',
        'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp', 'custom-solution-sizes-20260422.png')),
        'title' => __('Design', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'glass',
        'image' => $processing_image,
        'title' => __('Glass Cutting', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'edge',
        'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp', 'factory.png')),
        'title' => __('Edge Processing', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'assembly',
        'image' => $assembly_image,
        'title' => __('LED Assembly', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'test',
        'image' => $smart_image,
        'title' => __('Function Testing', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'packaging',
        'image' => $packaging_image,
        'title' => __('Packaging', 'mirrorcraft'),
      ),
    );

    $quality_cards = array(
      array(
        'icon'  => 'cri',
        'image' => $lighting_image,
        'title' => __('CRI 95 Available', 'mirrorcraft'),
        'text'  => __('High color rendering, true and natural light.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'water',
        'image' => $mirror_image,
        'title' => __('Waterproof Testing', 'mirrorcraft'),
        'text'  => __('Strict IP rating tests for safe use.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'aging',
        'image' => $assembly_image,
        'title' => __('Aging Test', 'mirrorcraft'),
        'text'  => __('48-hour lighting and function aging test.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'safety',
        'image' => $quality_image,
        'title' => __('Electrical Safety Test', 'mirrorcraft'),
        'text'  => __('Full inspection to ensure safety and compliance.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'drop',
        'image' => $packaging_image,
        'title' => __('Packaging Drop Test', 'mirrorcraft'),
        'text'  => __('Drop test to ensure safe delivery.', 'mirrorcraft'),
      ),
    );

    $custom_cards = array(
      array(
        'icon'  => 'size',
        'title' => __('Custom Size', 'mirrorcraft'),
        'text'  => __('Flexible sizes to fit any project.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'shape',
        'title' => __('Custom Shape', 'mirrorcraft'),
        'text'  => __('Round, oval, square or special shapes.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'frame',
        'title' => __('Custom Frame', 'mirrorcraft'),
        'text'  => __('Aluminum, metal, wood or frameless.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'lighting',
        'title' => __('Custom Lighting', 'mirrorcraft'),
        'text'  => __('Backlit, front-lit, or integrated lighting.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'function',
        'title' => __('Custom Functions', 'mirrorcraft'),
        'text'  => __('Touch, dimming, clock, Bluetooth, defogger.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'development',
        'title' => __('Project-Based Development', 'mirrorcraft'),
        'text'  => __('OEM / ODM service for your unique projects.', 'mirrorcraft'),
      ),
    );

    $impact_cards = array(
      array(
        'icon'  => 'vision',
        'image' => mirrorcraft_theme_image_first_available_url(array('banner.png', 'residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp')),
        'title' => __('Better Visual Experience', 'mirrorcraft'),
        'text'  => __('Clear reflection and comfortable lighting for everyday use.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'lifespan',
        'image' => mirrorcraft_theme_image_first_available_url(array('commercial-washroom-led-mirror.png', 'commercial-washroom-led-mirror.webp', 'home-hero-banner-20260423c.jpg')),
        'title' => __('Longer Product Lifespan', 'mirrorcraft'),
        'text'  => __('Stable components and strict testing for long-term use.', 'mirrorcraft'),
      ),
      array(
        'icon'  => 'reliability',
        'image' => mirrorcraft_theme_image_first_available_url(array('factory.png', 'who-we-are-warehouse.png', 'who-we-are-warehouse.webp')),
        'title' => __('Project Reliability', 'mirrorcraft'),
        'text'  => __('Consistent quality and on-time delivery for bulk orders.', 'mirrorcraft'),
      ),
    );
    ?>
    <style><?php echo mirrorcraft_get_technology_inline_css(); ?></style>
    <div class="technology-page">
      <section class="technology-hero">
        <div class="technology-hero__shell">
          <div class="technology-hero__media">
            <?php if ($hero_image !== '') : ?>
              <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Advanced mirror technology workshop', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
            <?php endif; ?>
          </div>

          <div class="technology-shell technology-hero__inner">
            <div class="technology-hero__content">
              <h1><?php esc_html_e('Advanced Mirror Technology', 'mirrorcraft'); ?></h1>
              <p class="technology-hero__lead"><?php esc_html_e('Engineered for clarity, built for reliability.', 'mirrorcraft'); ?></p>
              <p class="technology-hero__text"><?php esc_html_e('Our LED mirror and mirror cabinet technology combines innovation, precision manufacturing, and strict quality control.', 'mirrorcraft'); ?></p>
            </div>
          </div>
        </div>
      </section>

      <section class="technology-section">
        <div class="technology-shell">
          <div class="technology-section-title">
            <h2><?php esc_html_e('Core Technologies', 'mirrorcraft'); ?></h2>
          </div>

          <div class="technology-card-grid">
            <?php foreach ($core_cards as $card) : ?>
              <article class="technology-card">
                <div class="technology-card__media">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <span class="technology-icon-badge">
                  <span class="technology-icon" aria-hidden="true"><?php mirrorcraft_render_technology_icon($card['icon']); ?></span>
                </span>
                <div class="technology-card__body">
                  <h3><?php echo esc_html($card['title']); ?></h3>
                  <p><?php echo esc_html($card['text']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="technology-section">
        <div class="technology-shell">
          <div class="technology-section-title">
            <h2><?php esc_html_e('Manufacturing Process', 'mirrorcraft'); ?></h2>
          </div>

          <div class="technology-process-grid">
            <?php foreach ($process_steps as $step) : ?>
              <article class="technology-process-card">
                <span class="technology-process-card__icon" aria-hidden="true"><?php mirrorcraft_render_technology_icon($step['icon']); ?></span>
                <div class="technology-process-card__media">
                  <?php if (!empty($step['image'])) : ?>
                    <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <h3><?php echo esc_html($step['title']); ?></h3>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="technology-section">
        <div class="technology-shell">
          <div class="technology-section-title">
            <h2><?php esc_html_e('Quality Control', 'mirrorcraft'); ?></h2>
          </div>

          <div class="technology-quality-grid">
            <?php foreach ($quality_cards as $card) : ?>
              <article class="technology-quality-card">
                <div class="technology-quality-card__media">
                  <?php if (!empty($card['image'])) : ?>
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  <?php endif; ?>
                </div>
                <div class="technology-quality-card__body">
                  <div class="technology-quality-card__head">
                    <span class="technology-quality-card__icon" aria-hidden="true"><?php mirrorcraft_render_technology_icon($card['icon']); ?></span>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                  <p><?php echo esc_html($card['text']); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="technology-section">
        <div class="technology-shell">
          <div class="technology-section-title">
            <h2><?php esc_html_e('Custom Technology', 'mirrorcraft'); ?></h2>
          </div>

          <div class="technology-custom-grid">
            <?php foreach ($custom_cards as $card) : ?>
              <article class="technology-custom-card">
                <span class="technology-custom-card__icon" aria-hidden="true"><?php mirrorcraft_render_technology_icon($card['icon']); ?></span>
                <h3><?php echo esc_html($card['title']); ?></h3>
                <p><?php echo esc_html($card['text']); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="technology-section">
        <div class="technology-shell">
          <div class="technology-section-title">
            <h2><?php esc_html_e('Why Our Technology Matters', 'mirrorcraft'); ?></h2>
          </div>

          <div class="technology-impact-grid">
            <?php foreach ($impact_cards as $card) : ?>
              <article class="technology-impact-card">
                <?php if (!empty($card['image'])) : ?>
                  <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                <?php endif; ?>
                <div class="technology-impact-card__body">
                  <span class="technology-impact-card__icon" aria-hidden="true"><?php mirrorcraft_render_technology_icon($card['icon']); ?></span>
                  <div>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="technology-section technology-cta">
        <div class="technology-shell">
          <div class="technology-cta__shell">
            <div class="technology-cta__copy">
              <h2><?php esc_html_e('Need a Custom Mirror Solution?', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Contact our engineering team to discuss your project and build the right function mix for your market.', 'mirrorcraft'); ?></p>
            </div>

            <div class="technology-cta__action">
              <a class="technology-button" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Contact Our Engineering Team', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php
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

    if ('production-workshop' === $page_slug) {
      mirrorcraft_render_production_workshop_page(get_the_ID());
      continue;
    }

    if ('our-partners' === $page_slug) {
      mirrorcraft_render_our_partners_page(get_the_ID());
      continue;
    }

    if ('technology' === $page_slug) {
      mirrorcraft_render_technology_page(get_the_ID());
      continue;
    }

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
