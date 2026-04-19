document.documentElement.classList.add('mirrorcraft-ready');

const siteHeader = document.querySelector('[data-site-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const siteNav = document.querySelector('[data-nav]');
const scrollTopButton = document.querySelector('[data-scroll-top]');
const faqTriggers = Array.from(document.querySelectorAll('[data-faq-trigger]'));

if (siteHeader) {
  const syncHeaderState = () => {
    siteHeader.classList.toggle('is-scrolled', window.scrollY > 12);
  };

  syncHeaderState();
  window.addEventListener('scroll', syncHeaderState, { passive: true });
}

if (navToggle && siteNav) {
  const closeNav = () => {
    navToggle.setAttribute('aria-expanded', 'false');
    siteNav.classList.remove('is-open');
  };

  navToggle.addEventListener('click', () => {
    const isOpen = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    siteNav.classList.toggle('is-open', !isOpen);
  });

  siteNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', closeNav);
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeNav();
    }
  });
}

faqTriggers.forEach((trigger) => {
  trigger.addEventListener('click', () => {
    const isExpanded = trigger.getAttribute('aria-expanded') === 'true';
    const panelId = trigger.getAttribute('aria-controls');
    const panel = panelId ? document.getElementById(panelId) : null;

    trigger.setAttribute('aria-expanded', isExpanded ? 'false' : 'true');

    if (panel) {
      panel.hidden = isExpanded;
    }
  });
});

if (scrollTopButton) {
  const syncScrollTopButton = () => {
    scrollTopButton.classList.toggle('is-visible', window.scrollY > 320);
  };

  syncScrollTopButton();
  window.addEventListener('scroll', syncScrollTopButton, { passive: true });
  scrollTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}
