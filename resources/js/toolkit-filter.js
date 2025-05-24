class ToolkitFilter {
    constructor() {
        this.cardsPerPage = 3;
        this.currentlyDisplayed = this.cardsPerPage;
        this.init();
    }

    init() {
        // Get DOM elements with error checking
        this.categoryFilter = document.getElementById('toolkit-type-filter');
        this.toolFilter = document.getElementById('design-tool-filter');
        this.searchInput = document.getElementById('toolkit-search');
        this.toolkitCards = document.querySelectorAll('.toolkit-card');
        this.noResultsMessage = document.getElementById('no-results-message');
        this.clearFiltersBtn = document.getElementById('clear-filters');
        this.visibleCountSpan = document.getElementById('visible-count');
        this.totalCountSpan = document.getElementById('total-count');
        this.loadMoreBtn = document.getElementById('load-more-btn');
        this.loadMoreSection = document.getElementById('load-more-section');

        // Debug logging
        console.log('ToolkitFilter initialized:', {
            categoryFilter: !!this.categoryFilter,
            toolFilter: !!this.toolFilter,
            searchInput: !!this.searchInput,
            toolkitCards: this.toolkitCards.length,
            loadMoreBtn: !!this.loadMoreBtn
        });

        // Initialize state
        this.filters = {
            category: '',
            tool: '',
            search: ''
        };

        // Set total count
        if (this.totalCountSpan) {
            this.totalCountSpan.textContent = this.toolkitCards.length;
        }

        // Hide cards beyond the initial limit
        this.initializePagination();

        // Bind events
        this.bindEvents();

        // Load filters from URL on page load
        this.loadFiltersFromURL();

        // Apply initial filters
        this.applyFilters();
    }

    initializePagination() {
        // Hide all cards that should be initially hidden
        this.toolkitCards.forEach((card, index) => {
            if (index >= this.cardsPerPage) {
                card.classList.add('toolkit-card-pagination-hidden');
                card.style.display = 'none';
            }
        });

        // Update the display count
        this.updateDisplayCount();
    }

    bindEvents() {
        // Filter dropdown events
        if (this.categoryFilter) {
            this.categoryFilter.addEventListener('change', (e) => {
                console.log('Category filter changed:', e.target.value);
                this.filters.category = e.target.value;
                this.resetPagination();
                this.applyFilters();
                this.updateURL();
            });
        }

        if (this.toolFilter) {
            this.toolFilter.addEventListener('change', (e) => {
                console.log('Tool filter changed:', e.target.value);
                this.filters.tool = e.target.value;
                this.resetPagination();
                this.applyFilters();
                this.updateURL();
            });
        }

        // Search input events
        if (this.searchInput) {
            // Real-time search with debouncing
            let searchTimeout;
            this.searchInput.addEventListener('input', (e) => {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    console.log('Search changed:', e.target.value);
                    this.filters.search = e.target.value.toLowerCase().trim();
                    this.resetPagination();
                    this.applyFilters();
                    this.updateURL();
                }, 300);
            });

            // Search on Enter key
            this.searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    this.filters.search = e.target.value.toLowerCase().trim();
                    this.resetPagination();
                    this.applyFilters();
                    this.updateURL();
                }
            });
        }

        // Load More button event
        if (this.loadMoreBtn) {
            this.loadMoreBtn.addEventListener('click', (e) => {
                e.preventDefault();
                console.log('Load more clicked');
                this.loadMoreCards();
            });
        }

        // Clear filters button
        if (this.clearFiltersBtn) {
            this.clearFiltersBtn.addEventListener('click', () => {
                console.log('Clear filters clicked');
                this.clearAllFilters();
            });
        }

        // Handle browser back/forward buttons
        window.addEventListener('popstate', () => {
            this.loadFiltersFromURL();
            this.resetPagination();
            this.applyFilters();
        });
    }

    resetPagination() {
        this.currentlyDisplayed = this.cardsPerPage;
        
        // Reset all cards to their initial pagination state
        this.toolkitCards.forEach((card, index) => {
            if (index >= this.cardsPerPage) {
                card.classList.add('toolkit-card-pagination-hidden');
            } else {
                card.classList.remove('toolkit-card-pagination-hidden');
            }
        });
    }

    loadMoreCards() {
        const filteredCards = this.getFilteredCards();
        const nextBatch = filteredCards.slice(this.currentlyDisplayed, this.currentlyDisplayed + this.cardsPerPage);
        
        console.log('Loading more cards:', nextBatch.length);
        
        if (nextBatch.length > 0) {
            // Add loading state to button
            this.setLoadMoreButtonState('loading');

            // Simulate slight delay for better UX
            setTimeout(() => {
                nextBatch.forEach(card => {
                    card.classList.remove('toolkit-card-pagination-hidden');
                    this.showCard(card, true); // true for staggered animation
                });

                this.currentlyDisplayed += nextBatch.length;
                this.updateDisplayCount();
                this.updateLoadMoreButton();
                
                // Reset button state
                this.setLoadMoreButtonState('normal');

                // Smooth scroll to the first newly loaded card
                if (nextBatch.length > 0) {
                    setTimeout(() => {
                        nextBatch[0].scrollIntoView({ 
                            behavior: 'smooth', 
                            block: 'start',
                            inline: 'nearest'
                        });
                    }, 100);
                }
            }, 500);
        }
    }

    setLoadMoreButtonState(state) {
        if (!this.loadMoreBtn) return;
        
        const buttonText = this.loadMoreBtn.querySelector('span') || this.loadMoreBtn;
        
        if (state === 'loading') {
            this.loadMoreBtn.disabled = true;
            this.loadMoreBtn.classList.add('opacity-75', 'cursor-not-allowed');
            buttonText.textContent = 'Loading...';
        } else {
            this.loadMoreBtn.disabled = false;
            this.loadMoreBtn.classList.remove('opacity-75', 'cursor-not-allowed');
            buttonText.textContent = 'Load More Tools';
        }
    }

    getFilteredCards() {
        return Array.from(this.toolkitCards).filter(card => {
            return this.cardMatchesFilters(card);
        });
    }

    applyFilters() {
        const filteredCards = this.getFilteredCards();
        let visibleCount = 0;

        console.log('Applying filters:', this.filters);
        console.log('Filtered cards:', filteredCards.length);

        this.toolkitCards.forEach(card => {
            const shouldShow = this.cardMatchesFilters(card);
            const cardIndex = parseInt(card.dataset.index) || 0;
            const isPaginationHidden = card.classList.contains('toolkit-card-pagination-hidden');
            
            if (shouldShow && (cardIndex < this.currentlyDisplayed || !isPaginationHidden)) {
                this.showCard(card);
                visibleCount++;
            } else {
                this.hideCard(card);
            }
        });

        // Update results count
        this.updateDisplayCount();

        // Show/hide no results message
        if (filteredCards.length === 0) {
            this.showNoResults();
        } else {
            this.hideNoResults();
        }

        // Update load more button
        this.updateLoadMoreButton();

        // Add subtle animation to the grid
        this.animateGrid();
    }

    updateDisplayCount() {
        const filteredCards = this.getFilteredCards();
        const visibleFilteredCards = filteredCards.filter((card, index) => {
            return index < this.currentlyDisplayed;
        });

        if (this.visibleCountSpan) {
            this.visibleCountSpan.textContent = visibleFilteredCards.length;
        }
        if (this.totalCountSpan) {
            this.totalCountSpan.textContent = filteredCards.length;
        }
    }

    updateLoadMoreButton() {
        const filteredCards = this.getFilteredCards();
        const hasMoreCards = this.currentlyDisplayed < filteredCards.length;

        if (hasMoreCards && filteredCards.length > 0) {
            this.showLoadMoreButton();
        } else {
            this.hideLoadMoreButton();
        }
    }

    showLoadMoreButton() {
        if (!this.loadMoreSection) return;
        this.loadMoreSection.classList.remove('hidden');
        this.loadMoreSection.style.opacity = '1';
    }

    hideLoadMoreButton() {
        if (!this.loadMoreSection) return;
        this.loadMoreSection.style.opacity = '0';
        setTimeout(() => {
            this.loadMoreSection.classList.add('hidden');
        }, 300);
    }

    cardMatchesFilters(card) {
        const cardCategory = card.dataset.category || '';
        const cardTool = card.dataset.tool || '';
        const cardTitle = (card.dataset.title || '').toLowerCase();
        const cardDescription = (card.dataset.description || '').toLowerCase();

        // Check category filter
        if (this.filters.category && cardCategory !== this.filters.category) {
            return false;
        }

        // Check tool filter
        if (this.filters.tool && cardTool !== this.filters.tool) {
            return false;
        }

        // Check search filter
        if (this.filters.search) {
            const searchTerm = this.filters.search;
            const matchesTitle = cardTitle.includes(searchTerm);
            const matchesDescription = cardDescription.includes(searchTerm);
            const matchesTool = cardTool.includes(searchTerm);
            const matchesCategory = cardCategory.includes(searchTerm);

            if (!matchesTitle && !matchesDescription && !matchesTool && !matchesCategory) {
                return false;
            }
        }

        return true;
    }

    showCard(card, staggered = false) {
        card.style.display = 'block';
        card.classList.remove('hidden', 'toolkit-card-hidden');
        card.classList.add('toolkit-card-visible');
        
        // Add entrance animation
        const delay = staggered ? Math.random() * 200 : 0;
        
        setTimeout(() => {
            requestAnimationFrame(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            });
        }, delay);
    }

    hideCard(card) {
        card.classList.remove('toolkit-card-visible');
        card.classList.add('toolkit-card-hidden');
        
        // Add exit animation
        card.style.opacity = '0';
        card.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
            if (card.classList.contains('toolkit-card-hidden')) {
                card.style.display = 'none';
            }
        }, 300);
    }

    showNoResults() {
        if (!this.noResultsMessage) return;
        this.noResultsMessage.classList.remove('hidden');
        this.noResultsMessage.style.opacity = '0';
        requestAnimationFrame(() => {
            this.noResultsMessage.style.opacity = '1';
        });
    }

    hideNoResults() {
        if (!this.noResultsMessage) return;
        this.noResultsMessage.style.opacity = '0';
        setTimeout(() => {
            this.noResultsMessage.classList.add('hidden');
        }, 300);
    }

    animateGrid() {
        const grid = document.querySelector('.grid');
        if (grid) {
            grid.style.transition = 'all 0.3s ease';
        }
    }

    clearAllFilters() {
        // Reset all filters
        this.filters = {
            category: '',
            tool: '',
            search: ''
        };

        // Reset form elements
        if (this.categoryFilter) {
            this.categoryFilter.value = '';
        }
        if (this.toolFilter) {
            this.toolFilter.value = '';
        }
        if (this.searchInput) {
            this.searchInput.value = '';
        }

        // Reset pagination
        this.resetPagination();

        // Apply filters and update URL
        this.applyFilters();
        this.updateURL();
    }

    loadFiltersFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        
        this.filters.category = urlParams.get('toolkit_type') || '';
        this.filters.tool = urlParams.get('design_tool') || '';
        this.filters.search = urlParams.get('search') || '';

        // Update form elements
        if (this.categoryFilter && this.filters.category) {
            this.categoryFilter.value = this.filters.category;
        }
        if (this.toolFilter && this.filters.tool) {
            this.toolFilter.value = this.filters.tool;
        }
        if (this.searchInput && this.filters.search) {
            this.searchInput.value = this.filters.search;
        }
    }

    updateURL() {
        const params = new URLSearchParams();
        
        if (this.filters.category) {
            params.set('toolkit_type', this.filters.category);
        }
        if (this.filters.tool) {
            params.set('design_tool', this.filters.tool);
        }
        if (this.filters.search) {
            params.set('search', this.filters.search);
        }

        const newURL = params.toString() 
            ? `${window.location.pathname}?${params.toString()}`
            : window.location.pathname;

        window.history.pushState({}, '', newURL);
    }

    // Public method to get current filter state
    getCurrentFilters() {
        return { ...this.filters };
    }

    // Public method to get pagination state
    getPaginationState() {
        return {
            currentlyDisplayed: this.currentlyDisplayed,
            cardsPerPage: this.cardsPerPage,
            totalCards: this.toolkitCards.length
        };
    }
}

// Make it available globally
window.ToolkitFilter = ToolkitFilter;

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing ToolkitFilter...');
    if (document.querySelector('.toolkit-card')) {
        window.toolkitFilterInstance = new ToolkitFilter();
        console.log('ToolkitFilter initialized successfully');
    } else {
        console.log('No toolkit cards found, skipping initialization');
    }
}); 