document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const licenseKeyInput = document.getElementById('licenseKey');

    const savedLicenseKey = localStorage.getItem('licenseKey');
    if (savedLicenseKey) {
        licenseKeyInput.value = savedLicenseKey;
        checkLicenseKey(savedLicenseKey);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const licenseKey = licenseKeyInput.value;
        checkLicenseKey(licenseKey);
    });
});

function checkLicenseKey(licenseKey) {
    fetch('checkLicenseKey.php', {
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: 'licenseKey=' + encodeURIComponent(licenseKey)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            localStorage.setItem('licenseKey', licenseKey);
            window.location.href = 'index.php';
        } else {
            alert('Falscher Lizenzschl\u00fcssel');
        }
    })
    .catch(error => {
        console.error('Fehler:', error);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var checkbox = document.getElementById('privacyCheckbox');
    var submitButton = document.querySelector('button[type="submit"]');

    submitButton.disabled = true;

    checkbox.addEventListener('change', function() {
        submitButton.disabled = !checkbox.checked;
    });
});