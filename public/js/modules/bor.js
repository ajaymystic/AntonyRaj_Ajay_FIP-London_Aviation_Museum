export function bor() {
    const API          = '/api/bor';
    const viewer       = document.querySelector('#bor-viewer');
    const bookTriggers = document.querySelectorAll('.book-cover, .book-heading');
    const searchInput  = document.querySelector('#pilot-search-input');
    let allPilots      = [];
    let loaded         = false;

    function esc(s) {
        return String(s).split('&').join('&amp;').split('<').join('&lt;').split('>').join('&gt;');
    }

    function renderPilots(pilots) {
        const grid = document.querySelector('#pilot-grid');

        if (!pilots.length) {
            grid.innerHTML = '<p style="opacity:0.5;">No pilots found.</p>';
            return;
        }

        let html = '';
        let i    = 0;
        while (i < pilots.length) {
            const p = pilots[i];

            let imgHtml = '<div class="pilot-placeholder">✦</div>';
            if (p.photo_path) {
                imgHtml = '<img src="' + esc(p.photo_path) + '" alt="' + esc(p.last_name) + '" loading="lazy">';
            }

            let nameHtml = esc(p.last_name);
            if (p.initials) {
                nameHtml = nameHtml + ', ' + esc(p.initials);
            }

            html += '<a href="/bor-profile/' + p.id + '" class="pilot-card">' +
                '<div class="pilot-card-img">' + imgHtml + '</div>' +
                '<div class="pilot-card-body">' +
                '<p class="pilot-name">' + nameHtml + '</p>' +
                '<p class="pilot-status">' + esc(p.in_book || '') + '</p>' +
                '</div>' +
                '</a>';
            i++;
        }

        grid.innerHTML = html;
    }

    function handleSearch() {
        const query = searchInput.value.toLowerCase().trim();
        if (query === '') {
            renderPilots(allPilots);
            return;
        }

        const filtered = [];
        let i          = 0;
        while (i < allPilots.length) {
            if (allPilots[i].last_name.toLowerCase().includes(query)) {
                filtered.push(allPilots[i]);
            }
            i++;
        }
        renderPilots(filtered);
    }

    async function loadPilots() {
        const res = await fetch(API);
        allPilots = await res.json();
        renderPilots(allPilots);
    }

    async function handleBookTriggerClick() {
        if (!viewer) {
            return;
        }
        viewer.classList.remove('hidden');
        if (!loaded) {
            await loadPilots();
            loaded = true;
        }
        viewer.scrollIntoView({ behavior: 'smooth' });
    }

    if (searchInput) {
        searchInput.addEventListener('input', handleSearch);
    }

    let i = 0;
    while (i < bookTriggers.length) {
        bookTriggers[i].addEventListener('click', handleBookTriggerClick);
        i++;
    }

    loadPilots();
}