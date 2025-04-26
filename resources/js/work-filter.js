/**
 * Work Portfolio Filtering and Load More Functionality
 */
document.addEventListener('DOMContentLoaded', function() {
    // Configuration
    const CONFIG = {
        itemsPerLoad: 3,
        initialItemsShown: 3
    };

    // DOM elements
    const workGrid = document.querySelector('.work-grid');
    const workItems = document.querySelectorAll('.work-item');
    const loadMoreBtn = document.querySelector('.load-more-btn');
    const sectorSelect = document.querySelector('select[name="sector"]');
    const industrySelect = document.querySelector('select[name="industry"]');
    const sdgSelect = document.querySelector('select[name="sdg"]');
    const searchInput = document.querySelector('input[name="search"]');

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
    };

    // Apply filters based on dropdown selections and search
    const applyFilters = () => {
        const sectorValue = sectorSelect && sectorSelect.value !== sectorSelect.options[0].value ? sectorSelect.value : '';
        const industryValue = industrySelect && industrySelect.value !== industrySelect.options[0].value ? industrySelect.value : '';
        const sdgValue = sdgSelect && sdgSelect.value !== sdgSelect.options[0].value ? sdgSelect.value : '';
        const searchValue = searchInput ? searchInput.value.toLowerCase() : '';

        filteredItems = [...workItems].filter(item => {
            // Get tag data attributes
            const itemSector = item.dataset.sector || '';
            const itemIndustry = item.dataset.industry || '';
            const itemSdg = item.dataset.sdg || '';
            const itemTitle = (item.dataset.title || '').toLowerCase();
            const itemDescription = (item.dataset.description || '').toLowerCase();
            
            // Check if item matches all selected filters
            const matchesSector = !sectorValue || itemSector.toLowerCase() === sectorValue.toLowerCase();
            const matchesIndustry = !industryValue || itemIndustry.toLowerCase() === industryValue.toLowerCase();
            
            // For SDG, match the sdg code directly (e.g., 'sdg1')
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
        
        // Show a message if no results found
        const noResultsMessage = document.querySelector('.no-results-message');
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

    // Attach event listeners
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', loadMore);
    }

    // Filter change event handlers
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