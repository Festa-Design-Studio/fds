/**
 * Admin Work Portfolio Filtering and Loading Functionality
 */
document.addEventListener('DOMContentLoaded', function() {
    // Configuration
    const CONFIG = {
        itemsPerLoad: 5,
        initialItemsShown: 5
    };

    // DOM elements
    const workGrid = document.querySelector('.admin-work-grid');
    const workItems = document.querySelectorAll('.admin-work-item');
    const loadMoreBtn = document.querySelector('.admin-load-more-btn');
    const sectorSelect = document.querySelector('select[name="sector"]');
    const industrySelect = document.querySelector('select[name="industry"]');
    const sdgSelect = document.querySelector('select[name="sdg"]');
    const searchInput = document.querySelector('input[name="search"]');
    const clearFiltersBtn = document.querySelector('.admin-clear-filters');

    // If no work grid or items exist, exit early
    if (!workGrid || workItems.length === 0) return;

    // Track visible items and filtered items
    let visibleCount = CONFIG.initialItemsShown;
    let filteredItems = [...workItems];
    
    // Initialize: Hide items beyond initial count
    const initializeVisibility = () => {
        workItems.forEach((item, index) => {
            if (index >= CONFIG.initialItemsShown) {
                item.classList.add('hidden');
            }
        });
        updateLoadMoreButton();
        updateCountDisplay();
    };

    // Apply filters based on dropdown selections and search
    const applyFilters = (e) => {
        // Prevent form submission if triggered by a form element
        if (e && e.preventDefault) {
            e.preventDefault();
        }

        const sectorValue = sectorSelect ? sectorSelect.value : '';
        const industryValue = industrySelect ? industrySelect.value : '';
        const sdgValue = sdgSelect ? sdgSelect.value : '';
        const searchValue = searchInput ? searchInput.value.toLowerCase() : '';

        filteredItems = [...workItems].filter(item => {
            // Get data attributes
            const itemSector = item.dataset.sector || '';
            const itemIndustry = item.dataset.industry || '';
            const itemSdg = item.dataset.sdg || '';
            const itemTitle = (item.dataset.title || '').toLowerCase();
            const itemDescription = (item.dataset.description || '').toLowerCase();
            
            // Check if item matches all selected filters
            const matchesSector = !sectorValue || itemSector.toLowerCase() === sectorValue.toLowerCase();
            const matchesIndustry = !industryValue || itemIndustry.toLowerCase() === industryValue.toLowerCase();
            
            // For SDG, match directly with the sdg code
            const matchesSdg = !sdgValue || itemSdg === sdgValue;
            
            const matchesSearch = !searchValue || 
                                  itemTitle.includes(searchValue) || 
                                  itemDescription.includes(searchValue);
            
            return matchesSector && matchesIndustry && matchesSdg && matchesSearch;
        });

        // Reset visible items count and update display
        visibleCount = CONFIG.initialItemsShown;
        updateDisplay();
    };

    // Reset all filters to default
    const clearFilters = () => {
        if (sectorSelect) sectorSelect.selectedIndex = 0;
        if (industrySelect) industrySelect.selectedIndex = 0;
        if (sdgSelect) sdgSelect.selectedIndex = 0;
        if (searchInput) searchInput.value = '';
        
        filteredItems = [...workItems];
        visibleCount = CONFIG.initialItemsShown;
        updateDisplay();
    };

    // Load more items
    const loadMore = () => {
        visibleCount += CONFIG.itemsPerLoad;
        updateDisplay();
    };

    // Update display based on current filters and visible count
    const updateDisplay = () => {
        // Hide all items first
        workItems.forEach(item => {
            item.classList.add('hidden');
        });

        // Show filtered items up to visible count
        filteredItems.forEach((item, index) => {
            if (index < visibleCount) {
                item.classList.remove('hidden');
            }
        });

        updateLoadMoreButton();
        updateCountDisplay();
        
        // Show a message if no results found
        const noResultsMessage = document.querySelector('.admin-no-results-message');
        if (noResultsMessage) {
            if (filteredItems.length === 0) {
                noResultsMessage.classList.remove('hidden');
            } else {
                noResultsMessage.classList.add('hidden');
            }
        }
    };

    // Update load more button visibility
    const updateLoadMoreButton = () => {
        if (!loadMoreBtn) return;
        
        if (filteredItems.length <= visibleCount) {
            loadMoreBtn.classList.add('hidden');
        } else {
            loadMoreBtn.classList.remove('hidden');
        }
    };

    // Update the count display
    const updateCountDisplay = () => {
        const countDisplay = document.querySelector('.admin-count-display');
        if (countDisplay) {
            const start = Math.min(1, filteredItems.length);
            const end = Math.min(visibleCount, filteredItems.length);
            const total = filteredItems.length;
            
            countDisplay.textContent = `Showing ${start}-${end} of ${total} works`;
        }
    };

    // Attach event listeners
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', loadMore);
    }

    if (clearFiltersBtn) {
        clearFiltersBtn.addEventListener('click', clearFilters);
    }

    // Form submit event listener
    const filterForm = document.querySelector('.admin-filter-form');
    if (filterForm) {
        filterForm.addEventListener('submit', applyFilters);
    }

    // Real-time filtering for select elements and search
    const filterElements = [sectorSelect, industrySelect, sdgSelect];
    filterElements.forEach(element => {
        if (element) {
            element.addEventListener('change', applyFilters);
        }
    });

    // Also listen for input events on search for real-time filtering
    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    // Initialize the grid
    initializeVisibility();
}); 