/* JS Scripting Components */

document.addEventListener('DOMContentLoaded', function() {
    const sidebarContainer = document.querySelector('.fluent-plus-left-sidebar');

    sidebarContainer.addEventListener('click', function(event) {
        if (event.target.tagName === 'LI') {
            event.preventDefault();
            const clickedItem = event.target;

            const sectionId = clickedItem.id;
            const pluginUrl = FluentPlusAddon.plugin_url;

            fetch(`${pluginUrl}/../views/get-content.php?section=${sectionId}`)
                .then(response => response.text())
                .then(contentToDisplay => {
                    const currentlyActiveItem = document.querySelector('.fluent-plus-left-sidebar ul li.active');
                    if (currentlyActiveItem && currentlyActiveItem !== clickedItem) {
                        currentlyActiveItem.classList.remove('active');
                    }

                    clickedItem.classList.add('active');

                    const rightSidebarContainer = document.querySelector('.fluent-plus-right-sidebar');

                    if (contentToDisplay !== rightSidebarContainer.innerHTML) {
                        rightSidebarContainer.innerHTML = '';
                        rightSidebarContainer.insertAdjacentHTML('beforeend', contentToDisplay);
                    }

                    const dynamicNameSpan = document.getElementById('dn_fa');
                    dynamicNameSpan.textContent = clickedItem.textContent.trim();
                })
                .catch(error => console.error('Error fetching content:', error));
        }
    });
});
