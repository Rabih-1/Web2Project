
<?php
// Sample hints for product categories
$hints = [
    'rings.php',
    'necklaces.php',
    'earrings.php',
    'bracelets.php'
];

if (isset($_POST['query'])) {
    $query = strtolower($_POST['query']); // Convert query to lowercase for case-insensitive comparison

    $matchingHints = array_filter($hints, function ($hint) use ($query) {
        return stripos($hint, $query) !== false;
    });

    if (!empty($matchingHints)) {
        foreach ($matchingHints as $hint) {
            echo "<a href='$hint'>$hint</a><br>";
        }
    } else {
        echo "No hints found.";
    }
}
?>

