document.addEventListener('DOMContentLoaded', function () {
    // FAQ Accordion Functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const header = item.querySelector('h3');
        if (header) {
            header.addEventListener('click', () => {
                // Toggle current item
                const isActive = item.classList.contains('active');

                // Close all other items (optional: accordion behavior)
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        // Reset p display if needed, but CSS handles standard display:none
                        const p = otherItem.querySelector('p');
                        if (p) p.style.display = '';
                    }
                });

                // Toggle logic
                if (isActive) {
                    item.classList.remove('active');
                } else {
                    item.classList.add('active');
                }
            });
        }
    });

    // Wrap tables in responsive container if not already wrapped
    const tables = document.querySelectorAll('.blog-article table, .comparison-table');
    tables.forEach(table => {
        if (!table.parentElement.classList.contains('table-responsive-wrapper')) {
            const wrapper = document.createElement('div');
            wrapper.className = 'table-responsive-wrapper';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        }
    });
});
