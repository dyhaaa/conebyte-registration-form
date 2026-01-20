function isValidDatalistValue(datalistId, inputValue) {
    var option = document.querySelector(`#${datalistId} option[value="${inputValue}"]`);
    return option !== null;
}

function validateNationality() {
    var nationalityInput = document.getElementById('nationality').value;

    if (!isValidDatalistValue('country-list', nationalityInput)) {
        alert("Invalid nationality. Please select a country from the list.");
        return false;
    }
}
