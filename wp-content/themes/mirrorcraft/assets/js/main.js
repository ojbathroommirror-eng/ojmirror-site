const siteHeader = document.querySelector('[data-site-header]');
const navToggle = document.querySelector('[data-nav-toggle]');
const siteNav = document.querySelector('[data-nav]');
const scrollTopButton = document.querySelector('[data-scroll-top]');
const faqTriggers = Array.from(document.querySelectorAll('[data-faq-trigger]'));
const fileInputFields = Array.from(document.querySelectorAll('[data-file-input]'));

(() => {
  if (!siteHeader && !scrollTopButton) {
    return;
  }

  if ('IntersectionObserver' in window && document.body) {
    const sentinel = document.createElement('span');
    sentinel.setAttribute('aria-hidden', 'true');
    sentinel.style.cssText = 'display:block;width:1px;height:1px;visibility:hidden;pointer-events:none;';
    document.body.insertBefore(sentinel, document.body.firstChild);

    if (siteHeader) {
      const headerObserver = new IntersectionObserver(
        ([entry]) => {
          siteHeader.classList.toggle('is-scrolled', !entry.isIntersecting);
        },
        {
          rootMargin: '-12px 0px 0px 0px',
          threshold: 0,
        }
      );

      headerObserver.observe(sentinel);
    }

    if (scrollTopButton) {
      const scrollTopObserver = new IntersectionObserver(
        ([entry]) => {
          scrollTopButton.classList.toggle('is-visible', !entry.isIntersecting);
        },
        {
          rootMargin: '-320px 0px 0px 0px',
          threshold: 0,
        }
      );

      scrollTopObserver.observe(sentinel);
    }

    return;
  }

  let rafId = 0;

  const renderWindowState = () => {
    rafId = 0;
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;
    const isScrolled = scrollTop > 12;
    const showScrollTop = scrollTop > 320;

    if (siteHeader) {
      siteHeader.classList.toggle('is-scrolled', isScrolled);
    }

    if (scrollTopButton) {
      scrollTopButton.classList.toggle('is-visible', showScrollTop);
    }
  };

  const syncWindowState = () => {
    if (rafId) {
      return;
    }

    rafId = window.requestAnimationFrame(renderWindowState);
  };

  window.addEventListener('scroll', syncWindowState, { passive: true });
})();

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
  scrollTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

fileInputFields.forEach((field) => {
  const input = field.querySelector('input[type="file"]');
  const fileName = field.querySelector('[data-file-name]');

  if (!input || !fileName) {
    return;
  }

  const defaultName = fileName.getAttribute('data-default-name') || 'No file selected';

  const syncFileName = () => {
    const selectedFile = input.files && input.files.length > 0 ? input.files[0].name : defaultName;
    fileName.textContent = selectedFile;
  };

  syncFileName();
  input.addEventListener('change', syncFileName);
});

const productsPage = document.querySelector('[data-products-page]');

if (productsPage) {
  const filterInputs = Array.from(productsPage.querySelectorAll('[data-products-filter-input]'));
  const clearButton = productsPage.querySelector('[data-products-clear]');
  const sortSelect = productsPage.querySelector('[data-products-sort]');
  const resultsSummary = productsPage.querySelector('[data-products-results-summary]');
  const grid = productsPage.querySelector('[data-products-grid]');
  const pagination = productsPage.querySelector('[data-products-pagination]');
  const cards = Array.from(productsPage.querySelectorAll('[data-product-card]'));
  let currentPage = 1;

  const getPageSize = () => 4;

  const getSelectedFilters = () => filterInputs.reduce((groups, input) => {
    if (!input.checked) {
      return groups;
    }

    const group = input.dataset.filterGroup || '';
    const value = input.dataset.filterValue || '';

    if (!group || !value) {
      return groups;
    }

    if (!groups[group]) {
      groups[group] = [];
    }

    groups[group].push(value);
    return groups;
  }, {});

  const getCardTerms = (card, key) => {
    const raw = card.dataset[key] || '';

    if ('productFunctions' === key) {
      return raw ? raw.split('|').filter(Boolean) : [];
    }

    return raw ? [raw] : [];
  };

  const cardMatchesFilters = (card, selectedFilters) => Object.entries(selectedFilters).every(([group, selectedValues]) => {
    if (!selectedValues || 0 === selectedValues.length) {
      return true;
    }

    const dataKey = `product${group.charAt(0).toUpperCase()}${group.slice(1)}`;
    const cardTerms = getCardTerms(card, dataKey);

    return selectedValues.some((value) => cardTerms.includes(value));
  });

  const sortCards = (matchedCards) => {
    const sortedCards = [...matchedCards];
    const sortValue = sortSelect ? sortSelect.value : 'default';

    sortedCards.sort((cardA, cardB) => {
      if ('title-asc' === sortValue) {
        return (cardA.dataset.productTitle || '').localeCompare(cardB.dataset.productTitle || '');
      }

      if ('title-desc' === sortValue) {
        return (cardB.dataset.productTitle || '').localeCompare(cardA.dataset.productTitle || '');
      }

      if ('category-asc' === sortValue) {
        return (cardA.dataset.productCategory || '').localeCompare(cardB.dataset.productCategory || '');
      }

      return Number(cardA.dataset.productOrder || 0) - Number(cardB.dataset.productOrder || 0);
    });

    return sortedCards;
  };

  const buildPagination = (pageCount) => {
    if (!pagination) {
      return;
    }

    pagination.innerHTML = '';

    if (pageCount <= 1) {
      return;
    }

    const createPageButton = (label, page, isCurrent = false, isDisabled = false, ariaLabel = '') => {
      const button = document.createElement('button');
      button.type = 'button';
      button.textContent = label;

      if (ariaLabel) {
        button.setAttribute('aria-label', ariaLabel);
      }

      if (isCurrent) {
        button.classList.add('is-current');
        button.setAttribute('aria-current', 'page');
      }

      if (isDisabled) {
        button.disabled = true;
      } else {
        button.dataset.page = String(page);
      }

      pagination.appendChild(button);
    };

    const createEllipsis = () => {
      const marker = document.createElement('span');
      marker.classList.add('is-ellipsis');
      marker.textContent = '...';
      pagination.appendChild(marker);
    };

    createPageButton('‹', Math.max(1, currentPage - 1), false, currentPage === 1, 'Previous page');

    if (pageCount <= 7) {
      for (let page = 1; page <= pageCount; page += 1) {
        createPageButton(String(page), page, page === currentPage);
      }
    } else {
      createPageButton('1', 1, 1 === currentPage);

      if (currentPage > 3) {
        createEllipsis();
      }

      const start = Math.max(2, currentPage - 1);
      const end = Math.min(pageCount - 1, currentPage + 1);

      for (let page = start; page <= end; page += 1) {
        createPageButton(String(page), page, page === currentPage);
      }

      if (currentPage < pageCount - 2) {
        createEllipsis();
      }

      createPageButton(String(pageCount), pageCount, pageCount === currentPage);
    }

    createPageButton('›', Math.min(pageCount, currentPage + 1), false, currentPage === pageCount, 'Next page');
  };

  const updateResultsSummary = (totalResults, startIndex, endIndex) => {
    if (!resultsSummary) {
      return;
    }

    if (0 === totalResults) {
      resultsSummary.textContent = 'Showing 0 of 0 results';
      return;
    }

    resultsSummary.textContent = `Showing ${startIndex}-${endIndex} of ${totalResults} results`;
  };

  const renderProducts = () => {
    const pageSize = getPageSize();
    const selectedFilters = getSelectedFilters();
    const matchedCards = sortCards(cards.filter((card) => cardMatchesFilters(card, selectedFilters)));
    const pageCount = Math.max(1, Math.ceil(matchedCards.length / pageSize));

    currentPage = Math.min(currentPage, pageCount);

    const visibleStart = matchedCards.length ? ((currentPage - 1) * pageSize) : 0;
    const visibleEnd = matchedCards.length ? Math.min(visibleStart + pageSize, matchedCards.length) : 0;
    const visibleCards = new Set(matchedCards.slice(visibleStart, visibleEnd));
    const hiddenCards = cards.filter((card) => !matchedCards.includes(card));

    if (grid) {
      [...matchedCards, ...hiddenCards].forEach((card) => {
        grid.appendChild(card);
      });
    }

    cards.forEach((card) => {
      card.hidden = !visibleCards.has(card);
    });

    buildPagination(pageCount);
    updateResultsSummary(matchedCards.length, matchedCards.length ? visibleStart + 1 : 0, visibleEnd);
  };

  filterInputs.forEach((input) => {
    input.addEventListener('change', () => {
      currentPage = 1;
      renderProducts();
    });
  });

  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      currentPage = 1;
      renderProducts();
    });
  }

  if (clearButton) {
    clearButton.addEventListener('click', () => {
      filterInputs.forEach((input) => {
        input.checked = false;
      });

      currentPage = 1;
      renderProducts();
    });
  }

  if (pagination) {
    pagination.addEventListener('click', (event) => {
      const target = event.target instanceof HTMLElement ? event.target.closest('button[data-page]') : null;

      if (!target) {
        return;
      }

      const page = Number(target.dataset.page || 1);

      if (!Number.isNaN(page)) {
        currentPage = page;
        renderProducts();
      }
    });
  }

  renderProducts();
}
