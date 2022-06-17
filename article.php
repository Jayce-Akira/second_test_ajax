<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        echo $_POST['nom']. '!';
    }
    echo "Ca marche!";
}
else {
    if (isset($_GET['num'])) {
        switch ($_GET['num']) {
        case 1:
            echo '<h2>Article1</h2>';
            echo '<p>Bla Bla Bla</p>';
            break;
        case 2:
            echo '<h2>Article2</h2>';
            echo '<p>Bla Bla Bla</p>';
            break;
        case 3:
            echo '<h2>Article3</h2>';
            echo '<p>Bla Bla Bla</p>';
            break;
        }
    }
}
?>