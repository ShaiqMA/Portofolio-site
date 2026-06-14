//hierbij die ik heb gebruikt voor deze code
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach
// https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
// https://www.youtube.com/watch?v=yU-qmU8Qu1g


document.addEventListener('DOMContentLoaded', (): void => {
    const filterButtons= document.querySelectorAll<HTMLButtonElement>('.filter-btn');
    const gridContainer= document.querySelector<HTMLDivElement>('div.grid.bg-taupe-100');

    if (!gridContainer || filterButtons.length == 0) {
        return;
    }

    const projectCards = Array.from(gridContainer.children) as HTMLDivElement[];

    projectCards.forEach((card: HTMLDivElement) => {
        const cardText = card.innerText.toLowerCase();

        if (cardText.includes('laravel')) {
            card.setAttribute('data-category', 'laravel')
        } else if (cardText.includes('python')) {
            card.setAttribute('data-category', 'python');
        } else if (cardText.includes('unity')) {
            card.setAttribute('data-category','unity')
        }

    });

    filterButtons.forEach((button: HTMLButtonElement) => {
        button.addEventListener('click', (): void => {
            const selectedFilter = button.getAttribute('data-filter');
            if (!selectedFilter) return;

            filterButtons.forEach((btn: HTMLButtonElement) => {
                btn.classList.remove('bg-taupe-600', 'text-taupe-200', 'shadow-md')
                btn.classList.add('bg-taupe-300', 'text-taupe-600');
            });
             button.classList.remove('bg-taupe-300', 'text-taupe-600');
             button.classList.add('bg-taupe-600', 'text-taupe-600', 'shadow-md');

             projectCards.forEach((card:HTMLDivElement) => {
                const cardCategory = card.getAttribute('data-category');

                if (selectedFilter == 'all' || cardCategory === selectedFilter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
             });
        });
    });
});