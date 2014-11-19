<html>
    <body>
        <h2>simple 1 to 20</h2>
        <?php
        for ($iPos = 1; $iPos <= 20; $iPos++) {
            echo $iPos . ' ';
        }
        ?>
        <h2>with list</h2>
        <ul>
            <?php
            for ($iPos = 1; $iPos <= 20; $iPos++) {
                echo '<li>' . $iPos . '</li>';
            }
            ?>
        </ul>

        <h2>pair</h2>
        <ul>
            <?php
            for ($iPos = 2; $iPos <= 20; $iPos += 2) {
                echo '<li>' . $iPos . '</li>';
            }
            ?>
        </ul>
    </body>
</html>