<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division durch Null.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Exception abgefangen: ',  $e->getMessage(), "\n";
}

// Ausführung fortsetzen
echo "Hallo Welt\n";