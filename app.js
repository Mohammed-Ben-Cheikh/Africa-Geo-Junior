function auto() {
    // Récupérer l'élément select et l'input ID
const continentSelect = document.getElementById('Continent');
const idContinentInput = document.getElementById('id_Continent');

// Fonction pour mettre à jour l'ID en fonction du continent sélectionné
    const selectedOption = continentSelect.options[continentSelect.selectedIndex];
    const continentId = selectedOption.getAttribute('data-id');
    idContinentInput.value = continentId;

// Initialiser l'ID si une sélection par défaut est présente
if (continentSelect.value) {
    const selectedOption = continentSelect.options[continentSelect.selectedIndex];
    const continentId = selectedOption.getAttribute('data-id');
    idContinentInput.value = continentId;
}
}

function auto2() {
    // Récupérer l'élément select et l'input ID
    const paysSelect = document.getElementById('pays');
    const idPaysInput = document.getElementById('id_pays');

    // Fonction pour mettre à jour l'ID en fonction du pays sélectionné
    const selectedOption = paysSelect.options[paysSelect.selectedIndex];
    const paysId = selectedOption.getAttribute('data-id');
    idPaysInput.value = paysId;

    // Initialiser l'ID si une sélection par défaut est présente
    if (paysSelect.value) {
        const selectedOption = paysSelect.options[paysSelect.selectedIndex];
        const paysId = selectedOption.getAttribute('data-id');
        idPaysInput.value = paysId;
    }
}