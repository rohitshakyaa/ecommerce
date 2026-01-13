// Import header navigation
import './header.js';

document.querySelectorAll(".star-rating").forEach((el) => {
    const rating = parseFloat(el.getAttribute("data-rating")) || 0;

    const fullStars = Math.floor(rating);
    const hasHalfStar = rating - fullStars >= 0.5 && rating < 5;
    const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);

    el.innerHTML = ""; // clear existing content

    for (let i = 0; i < fullStars; i++) {
        el.innerHTML += '<i class="bi bi-star-fill"></i>';
    }
    if (hasHalfStar) {
        el.innerHTML += '<i class="bi bi-star-half"></i>';
    }
    for (let i = 0; i < emptyStars; i++) {
        el.innerHTML += '<i class="bi bi-star"></i>';
    }
});

const heroSwiperEl = document.querySelector('.hero-swiper');
const heroSwiper = new Swiper(heroSwiperEl, {
    pagination: {
        el: heroSwiperEl.querySelector('.swiper-custom-pagination'),
        clickable: true,
    },
    slidesPerView: 1,
    loop: true,
});

const categorySwiper = new Swiper('.category-swiper', {
    slidesPerView: 8,
    spaceBetween: 12,
    loop: true,
    autoplay: true,
    navigation: false,
    breakpoints: {
        1440: {
            slidesPerView: 8,
            spaceBetween: 12,
        },
        1024: {
            slidesPerView: 7,
            spaceBetween: 12,
        },
        768: {
            slidesPerView: 6,
            spaceBetween: 12,
        },
        640: {
            slidesPerView: 4,
            spaceBetween: 12,
        },
        320: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
    }
});


const productSwiper = new Swiper('.product-swiper', {
    slidesPerView: 4,
    loop: true,
    spaceBetween: 20,
    breakpoints: {
        1440: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 16,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 12,
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 12,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 12,
        },
    }
});

// Blog Swiper with drag/swipe functionality
const blogSwiperElement = document.querySelector('.blog-swiper');
if (blogSwiperElement) {
    const blogSlidesCount = blogSwiperElement.querySelectorAll('.swiper-slide').length;

    const blogSwiper = new Swiper('.blog-swiper', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 24,
        grabCursor: true,
        loop: true,
        loopedSlides: blogSlidesCount,
        centeredSlides: false,
        watchSlidesProgress: true,
        pagination: {
            el: '.blog-swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                slidesPerGroup: 1,
                spaceBetween: 24,
            },
            768: {
                slidesPerView: 2,
                slidesPerGroup: 1,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 16,
            },
        }
    });
}


function renderCountdown() {
    const wrap = document.getElementById("countdown");
    const endsAt = new Date(wrap.dataset.endsAt);
    const now = new Date();
    let diff = Math.max(0, endsAt - now);

    const s = Math.floor(diff / 1000);
    const days = Math.floor(s / (3600 * 24));
    const hours = Math.floor((s % (3600 * 24)) / 3600);
    const mins = Math.floor((s % 3600) / 60);
    const secs = s % 60;

    const parts = [
        { n: days, l: "Days" },
        { n: hours, l: "Hours" },
        { n: mins, l: "Mins" },
        { n: secs, l: "Secs" }
    ];

    if (wrap) {
        wrap.innerHTML = parts.map(x => `
          <div class="time-pill">
            <div class="n">${String(x.n).padStart(2, "0")}</div>
            <div class="l">${x.l}</div>
          </div>
        `).join("");
    }
}

renderCountdown();
setInterval(renderCountdown, 1000);



const productSwipers = document.querySelectorAll(".product-swiper-2");
productSwipers.forEach(el => {

    const productTwoSwiper = new Swiper(el, {
        slidesPerView: 2,
        spaceBetween: 12,

        // ✅ better than loop for grid
        // loop: true,
        rewind: true,

        grid: {
            rows: 2,
            fill: "row",
        },

        // ✅ makes pagination + next/prev move “one page”
        // slidesPerGroup: 2,

        pagination: {
            el: el.querySelector(".swiper-custom-pagination"),
            clickable: true,
        },

        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 12,
            },
        },
    });

});

/**
 * Categories Sidebar & Overlay Handler
 * Note: Mega menu functionality is handled in header.js
 */
document.addEventListener('DOMContentLoaded', function() {
    const categoriesSidebar = document.getElementById('categoriesSidebar');
    const closeSidebar = document.getElementById('closeSidebar');
    const overlay = document.getElementById('overlay');

    // Close sidebar button
    if (closeSidebar && categoriesSidebar && overlay) {
        closeSidebar.addEventListener('click', function() {
            categoriesSidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }

    // Overlay click handler - close sidebar
    if (overlay && categoriesSidebar) {
        overlay.addEventListener('click', function() {
            categoriesSidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }



    // Initialize Swiper for Categories
    if (document.querySelector('.category-swiper')) {
        new Swiper('.category-swiper', {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            },
        });
    }

    // Prevent form submission for demo
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const searchValue = this.querySelector('[name="search"]').value;
            console.log('Search submitted:', searchValue);
            // Add your search logic here
        });
    }
});