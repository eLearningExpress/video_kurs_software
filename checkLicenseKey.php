<?php
// checkLicenseKey.php
session_start();

// Funktion zur Validierung und Sanitierung des Lizenzschlüssels
function validateAndSanitizeLicenseKey($key) {
    // Länge überprüfen
    if (strlen($key) != 11) {
        return false;
    }

    // Überprüfung auf genau ein Sonderzeichen, mindestens eine Zahl, 
    // einen Klein- und einen Großbuchstaben
    if (!preg_match('/^[a-zA-Z\d]*[\W_][a-zA-Z\d]*$/', $key) || // Genau ein Sonderzeichen
        !preg_match('/[0-9]/', $key) || // Mindestens eine Zahl
        !preg_match('/[a-z]/', $key) || // Mindestens ein Kleinbuchstabe
        !preg_match('/[A-Z]/', $key)) { // Mindestens ein Großbuchstabe
        return false;
    }

    // Sanitization
    return htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
}

// Funktion zum Lesen der Lizenzschlüssel aus einer Datei
function getLicenseKeysFromFile($filePath) {
    $keys = [];
    if (file_exists($filePath)) {
        $fileContent = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($fileContent as $line) {
            $keys[] = trim($line);
        }
    }
    return $keys;
}

// Pfad zur Datei mit den Lizenzschlüsseln
$licenseKeyFilePath = 'lizenzen/lizenzen.txt';

// Lizenzschlüssel aus der Datei lesen
$correctLicenseKeys = getLicenseKeysFromFile($licenseKeyFilePath);

$licenseKey = $_POST['licenseKey'] ?? '';

// Lizenzschlüssel validieren und bereinigen
$validKey = validateAndSanitizeLicenseKey($licenseKey);

if ($validKey && in_array($validKey, $correctLicenseKeys)) {
    $_SESSION['authenticated'] = true;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>