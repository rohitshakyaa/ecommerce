/**
 * Header Navigation System
 * Handles all interactive behaviors for header, mega menu, and search
 * @version 1.0
 */

class HeaderNavigation {
    constructor() {
        this.elements = {
            categoriesBtn: document.getElementById('categoriesBtn'),
            categoriesMegaMenu: document.getElementById('categoriesMegaMenu'),
            categoryDropdownBtn: document.getElementById('categoryDropdownBtn'),
            categoryDropdown: document.getElementById('categoryDropdown'),
            categoryDropdownWrapper: null,
            mainHeader: document.querySelector('.main-header')
        };

        this.init();
    }

    /**
     * Initialize all header components
     */
    init() {
        if (this.elements.categoryDropdownBtn) {
            this.elements.categoryDropdownWrapper = this.elements.categoryDropdownBtn.closest('.category-dropdown');
        }

        this.initMegaMenu();
        this.initCategoryDropdown();
        this.initOutsideClickHandler();
        this.initStickyHeader();
        this.initNavDropdownWidth();
    }

    /**
     * Initialize navigation dropdown width to match logo-to-cart span
     */
    initNavDropdownWidth() {
        const logo = document.querySelector('.logo');
        const cartIcon = document.querySelector('.cart-icon');
        const navDropdowns = document.querySelectorAll('.nav-dropdown');
        const headerContent = document.querySelector('.header-content');

        if (!logo || !cartIcon || navDropdowns.length === 0 || !headerContent) return;

        const updateDropdownWidths = () => {
            const logoRect = logo.getBoundingClientRect();
            const cartRect = cartIcon.getBoundingClientRect();
            const headerContentRect = headerContent.getBoundingClientRect();

            const dropdownWidth = cartRect.right - logoRect.left;
            const leftOffset = logoRect.left;
            // Position below the header-content (navigation bar), not below the entire header
            const topOffset = headerContentRect.bottom;

            navDropdowns.forEach(dropdown => {
                dropdown.style.width = `${dropdownWidth}px`;
                dropdown.style.left = `${leftOffset}px`;
                dropdown.style.top = `${topOffset}px`;
            });
        };

        // Update on load
        setTimeout(updateDropdownWidths, 100);

        // Update on resize
        window.addEventListener('resize', updateDropdownWidths);

        // Update on scroll (for sticky header)
        window.addEventListener('scroll', updateDropdownWidths);
    }

    /**
     * Initialize sticky header on scroll
     */
    initStickyHeader() {
        if (!this.elements.mainHeader) return;

        const viewportHeight = window.innerHeight;

        const handleScroll = () => {
            const currentScrollY = window.scrollY;

            // Add 'scrolled' class when scrolled past 100vh
            if (currentScrollY > viewportHeight) {
                this.elements.mainHeader.classList.add('scrolled');
            } else {
                this.elements.mainHeader.classList.remove('scrolled');
            }
        };

        // Initial check
        handleScroll();

        // Listen to scroll events with throttling
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    /**
     * Initialize Shop Categories Mega Menu (Hover-based)
     */
    initMegaMenu() {
        if (!this.elements.categoriesMegaMenu || !this.elements.categoriesBtn) return;

        const categoryItems = this.elements.categoriesMegaMenu.querySelectorAll('.category-item');

        categoryItems.forEach(item => {
            item.addEventListener('mouseenter', () => this.handleCategoryHover(item, categoryItems));
        });

        // Reset subcategories when dropdown closes
        this.elements.categoriesBtn.addEventListener('click', () => {
            // Check if menu is being closed
            setTimeout(() => {
                if (!this.elements.categoriesMegaMenu.classList.contains('show')) {
                    this.resetMegaMenu(categoryItems);
                }
            }, 50);
        });

        // Also reset when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.categories-btn-wrapper')) {
                this.resetMegaMenu(categoryItems);
            }
        });
    }

    /**
     * Reset mega menu to initial state
     * @param {NodeList} categoryItems - All category items
     */
    resetMegaMenu(categoryItems) {
        // Remove all active states
        categoryItems.forEach(item => item.classList.remove('active'));

        // Hide all subcategories
        const allSubcategories = this.elements.categoriesMegaMenu.querySelectorAll('.subcategory-content');
        const subPanel = this.elements.categoriesMegaMenu.querySelector('.categories-sub-panel');

        allSubcategories.forEach(sub => sub.classList.remove('active'));
        if (subPanel) subPanel.classList.remove('show');
    }

    /**
     * Handle category item hover
     * @param {HTMLElement} item - The hovered category item
     * @param {NodeList} allItems - All category items
     */
    handleCategoryHover(item, allItems) {
        const hasSubcategories = item.getAttribute('data-has-subcategories') === 'true';

        // Remove active class from all items
        allItems.forEach(i => i.classList.remove('active'));

        // Add active class to current item
        item.classList.add('active');

        // Get the subcategory panel
        const subPanel = this.elements.categoriesMegaMenu.querySelector('.categories-sub-panel');

        // Only show subcategory panel if this category has subcategories
        if (hasSubcategories) {
            const categoryName = item.getAttribute('data-category');
            this.showSubcategory(categoryName);
            if (subPanel) subPanel.classList.add('show');
        } else {
            // Hide all subcategories if no subcategories exist
            this.hideAllSubcategories();
            if (subPanel) subPanel.classList.remove('show');
        }
    }

    /**
     * Show subcategory panel based on category name
     * @param {string} categoryName - The category identifier
     */
    showSubcategory(categoryName) {
        if (!this.elements.categoriesMegaMenu) return;

        const allSubcategories = this.elements.categoriesMegaMenu.querySelectorAll('.subcategory-content');
        const subPanel = this.elements.categoriesMegaMenu.querySelector('.categories-sub-panel');

        // Hide all subcategories
        allSubcategories.forEach(sub => sub.classList.remove('active'));

        // Show matching subcategory
        const targetSubcategory = this.elements.categoriesMegaMenu.querySelector(
            `.subcategory-content[data-subcategory="${categoryName}"]`
        );

        if (targetSubcategory) {
            targetSubcategory.classList.add('active');
            if (subPanel) subPanel.classList.add('show');
        } else {
            if (subPanel) subPanel.classList.remove('show');
        }
    }

    /**
     * Hide all subcategories
     */
    hideAllSubcategories() {
        if (!this.elements.categoriesMegaMenu) return;

        const allSubcategories = this.elements.categoriesMegaMenu.querySelectorAll('.subcategory-content');
        const subPanel = this.elements.categoriesMegaMenu.querySelector('.categories-sub-panel');

        allSubcategories.forEach(sub => sub.classList.remove('active'));
        if (subPanel) subPanel.classList.remove('show');
    }

    /**
     * Initialize Category Dropdown in Search (Click-based)
     */
    initCategoryDropdown() {
        if (!this.elements.categoryDropdownBtn || !this.elements.categoryDropdown) return;

        // Toggle dropdown on button click
        this.elements.categoryDropdownBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.toggleCategoryDropdown();
        });

        // Handle category selection
        const categoryLinks = this.elements.categoryDropdown.querySelectorAll('a');
        categoryLinks.forEach(link => {
            link.addEventListener('click', (e) => this.handleCategorySelection(e, link));
        });

        // Prevent closing when clicking inside dropdown
        this.elements.categoryDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    }

    /**
     * Toggle category dropdown visibility
     */
    toggleCategoryDropdown() {
        this.elements.categoryDropdown.classList.toggle('show');

        if (this.elements.categoryDropdownWrapper) {
            this.elements.categoryDropdownWrapper.classList.toggle('show');
        }
    }

    /**
     * Handle category selection from dropdown
     * @param {Event} e - Click event
     * @param {HTMLElement} link - The clicked link
     */
    handleCategorySelection(e, link) {
        e.preventDefault();

        const selectedText = link.textContent.trim();
        const buttonText = this.elements.categoryDropdownBtn.querySelector('span');

        // Update button text
        if (buttonText) {
            buttonText.textContent = selectedText;
        }

        // Close dropdown
        this.closeCategoryDropdown();
    }

    /**
     * Close category dropdown
     */
    closeCategoryDropdown() {
        if (this.elements.categoryDropdown) {
            this.elements.categoryDropdown.classList.remove('show');
        }

        if (this.elements.categoryDropdownWrapper) {
            this.elements.categoryDropdownWrapper.classList.remove('show');
        }
    }

    /**
     * Initialize outside click handler to close dropdowns
     */
    initOutsideClickHandler() {
        document.addEventListener('click', (e) => {
            const isCategoryClick = e.target.closest('.category-dropdown');

            // Close category dropdown if clicked outside
            if (!isCategoryClick) {
                this.closeCategoryDropdown();
            }
        });
    }
}

/**
 * Initialize header navigation when DOM is ready
 */
document.addEventListener('DOMContentLoaded', () => {
    new HeaderNavigation();
});

