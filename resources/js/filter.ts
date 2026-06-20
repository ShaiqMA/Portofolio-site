// Bronvermelding Code
// de filter is gebaseerd op deze tutorial
// https://www.youtube.com/watch?v=yU-qmU8Qu1g
// foreach https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach
// classlist https://developer.mozilla.org/en-US/docs/Web/API/Element/classList
// 
// omdat het in javascript is heb ik ook gebruik gemaakt van typscript bronnen zodat ik het in ts kan schrijven:
// Typescript docs https://www.typescriptlang.org/docs/handbook/2/everyday-types.html#type-assertions
// DOM types: https://www.typescriptlang.org/docs/handbook/dom-manipulation.html
// 
// schoolmodules:
// https://talnet.instructure.com/courses/24976





document.addEventListener('DOMContentLoaded', (): void => {
    // Gebruik hier van Htmlbutton event zodat ts weet dat dit knoppen zijn
    const filterButtons= document.querySelectorAll<HTMLButtonElement>('.filter-btn');
    // zelfde als htmlbutton maar dan voor divs
    const gridContainer= document.querySelector<HTMLDivElement>('div.grid.bg-taupe-100');

    // doet een check of er knoppen zijn op de pagina of een grid anders stopt de hele functie
    if (!gridContainer || filterButtons.length == 0) {
        return;
    }

    // dit zorgt ervoor dat de html naar een array wordt omgezet, dit doe ik zodat ik de array voor een foreach kan gebruiken
    const projectCards = Array.from(gridContainer.children) as HTMLDivElement[];

    // deze loop loopt alle project cardtext door om te kijken welke kaart in welke categorie kan gezet worden
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

    // zodat de buttons voor de filters functioneren gebruik ik click events, hierbij verander ik ook de kleuren van de buttons bij klikken
    filterButtons.forEach((button: HTMLButtonElement) => {
        button.addEventListener('click', (): void => {
            const selectedFilter = button.getAttribute('data-filter');
            if (!selectedFilter) return;
            // reset de knoppen naar deinactieve stijl
            filterButtons.forEach((btn: HTMLButtonElement) => {
                btn.classList.remove('bg-taupe-600', 'text-taupe-200', 'shadow-md')
                btn.classList.add('bg-taupe-300', 'text-taupe-600');
            });
            // stijlt de actieve knop
             button.classList.remove('bg-taupe-300', 'text-taupe-600');
             button.classList.add('bg-taupe-600', 'text-taupe-600', 'shadow-md');

             projectCards.forEach((card:HTMLDivElement) => {
                const cardCategory = card.getAttribute('data-category');

                // toont en verbergt de kaarten
                if (selectedFilter == 'all' || cardCategory === selectedFilter) {
                    card.classList.remove('hidden'); 
                } else {
                    card.classList.add('hidden');
                }
             });
        });
    });
});

// om de code te compileren, gebruik ik in laravel npm run build. dit verwijdert alle ts types zoals htmbuttonelement etc zodat de browser het begrijpt en maakt een js ervan
// de gecompileerde file zit in public/build/assets