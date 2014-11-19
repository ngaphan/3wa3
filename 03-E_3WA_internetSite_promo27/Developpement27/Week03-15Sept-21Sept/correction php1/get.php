<html>
<body>
    <nav>
        <ul>
            <li><a href="get.php?lang=fr">fr</a></li>
            <li><a href="get.php?lang=en">en</a></li>
            <li><a href="get.php?lang=es">es</a></li>
        </ul>
    </nav>
<?php

switch ($_GET['lang']) {
    case 'fr':
        echo 'bonjour';
        break;
    case 'en':
        echo 'hello';
        break;
    case 'es':
        echo 'ola';
        break;
    default:
        break;
}
?>
</body>
</html>
