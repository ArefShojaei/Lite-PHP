<?php include __DIR__ . "/includes/header.php" ?>
    <div class="container">
        <h1>
            PHP Debugger
            <span>|</span>
            <strong>Error</strong>
        </h1>

        <div class="error-info">
            <h3>
                <?php echo $message ?>
            </h3>

            <div class="error-snapshot">
                <div class="error-file">
                    <p>File: <?php echo $file ?></p>
                    <p>Line: <?php echo $line ?></p>
                </div>
                <code>
                    <?php

                    $script = explode("\r", htmlspecialchars(file_get_contents($file)));

                    $befrore = $line - 5;
                    $after = $line + 5;

                    foreach ($script as $scriptLine => $scriptContent) {
                        $scriptLine++;
                        if ($scriptLine < $befrore) continue;
                        if ($scriptLine > $after) continue;

                        if ($scriptLine == $line) {
                            echo "<p style='color:red;'>{$scriptLine} | {$scriptContent}</p>";
                        } else {
                            echo "<p>{$scriptLine} | {$scriptContent}</p>";
                        }
                    }

                    ?>



                    <!-- <?php $script = explode("\r", htmlspecialchars(file_get_contents($file))); ?>
                    <?php foreach ($script as $scriptLine => $scriptContent) : $scriptLine++; ?>
                        <?php if ($line === $scriptLine) : ?>
                            <p style="color:red;"><?php echo "{$scriptLine} | {$scriptContent}"; ?></p>
                        <?php else : ?>
                            <p><?php echo "{$scriptLine} | {$scriptContent}"; ?></p>
                        <?php endif; ?>
                    <?php endforeach; ?> -->
                </code>
            </div>
        </div>
    </div>
<?php include __DIR__ . "/includes/footer.php" ?>