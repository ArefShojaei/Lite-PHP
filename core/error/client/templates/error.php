<?php include __DIR__ . "/includes/header.php" ?>
    <div class="container">
        <h1>
            PHP
            <strong>Error</strong>
            Reporter
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
                    <?php foreach ($meta['scriptContent'] as $scriptLine => $scriptContent): $scriptLine++; ?>
                        <?php if ($scriptLine < $meta['beforeScriptLines']) continue; ?>
                        <?php if ($scriptLine > $meta['afterScriptLines']) continue; ?>

                        <?php if ($scriptLine == $line): ?>
                            <p style='color:red;'><?php echo $scriptLine ?> | <?php echo $scriptContent ?></p>
                        <?php else: ?>
                            <p><?php echo $scriptLine ?> | <?php echo $scriptContent ?></p>
                        <?php endif; ?>
                        
                    <?php endforeach; ?>
                </code>
            </div>
        </div>
    </div>
<?php include __DIR__ . "/includes/footer.php" ?>