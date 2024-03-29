<?php
require_once 'header.php';

$creatureImages = [
    'Zyliorix' => 'media/Zyliorix.png',
    'Verdanthe' => 'media/Verdanthe.png',
    'Sylaqus' => 'media/Sylaqus.png',
    'Vulquixar' => 'media/Vulquixar.jpg',
    'Nephelgon' => 'media/Nephelgon.jpg',
    'Obscurix' => 'media/Obscurix.png',
    'Alpinor' => 'media/Alpinor.png',
    'Desolynx' => 'media/Desolynx.png',
    'Niveusar' => 'media/Niveusar.png',
    'Phaedron' => 'media/Phaedron.png',
];

try {
    $stmt = $pdo->query("SELECT username, creature, created_at FROM quiz_results ORDER BY created_at DESC");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<div class='user-results'>"; // This wraps all results
    if ($results) {
        foreach ($results as $result) {
            $creatureImage = array_key_exists($result['creature'], $creatureImages) ? $creatureImages[$result['creature']] : 'path/to/default/image.png';

            echo "<div class='result'>"; // This wraps each individual result
            // Text content
            echo "<p>User: <strong>{$result['username']}</strong></p>";
            echo "<p>Creature: <strong>{$result['creature']}</strong></p>";
            echo "<p>Date Taken: <strong>{$result['created_at']}</strong></p>";
            // Image
            echo "<img src='{$creatureImage}' alt='{$result['creature']}' class='creature-image'>"; // Use class for styling
            echo "</div>"; // Close the .result div
        }
    } else {
        echo "<p>No results found.</p>";
    }
    echo "</div>"; // Close the .user-results div

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

require_once 'footer.php';
?>
