document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.sub-nav a');
    const sections = document.querySelectorAll('.page-section');

    if (!links.length || !sections.length) return;

    const showSection = (id) => {
        links.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', href === `#${id}`);
        });

        sections.forEach(section => {
            section.style.display = section.id === id ? 'block' : 'none';
        });
    };

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href').slice(1);
            showSection(targetId);
            history.replaceState(null, '', `#${targetId}`);
        });
    });

    const initialId = window.location.hash
        ? window.location.hash.slice(1)
        : sections[0].id;

    const targetExists = [...sections].some(section => section.id === initialId);
    showSection(targetExists ? initialId : sections[0].id);
});