function filterLoker(category, btnElement) {
    const buttons = document.querySelectorAll('.category-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');

    const cards = document.querySelectorAll('.loker-card');
    let hasVisible = false;

    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');

        if (category === 'all' || cardCat === category) {
            card.style.display = 'flex';
            hasVisible = true;
        } else {
            card.style.display = 'none';
        }
    });

    const emptyState = document.getElementById('emptyState');
    if (!hasVisible) {
        emptyState.style.display = 'block';
    } else {
        emptyState.style.display = 'none';
    }
}