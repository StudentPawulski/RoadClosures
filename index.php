<?php
$closures_json = file_get_contents('https://data.winnipeg.ca/resource/lane_closure.json');
$closures = json_decode($closures_json, true);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Winnipeg Road Closures</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles.css" />
    </head>
    <body>
    <!-- Uncomment for testing. But comment out when completed -->
    <!-- <pre style="width:200px;"><?= print_r($closures) ?></pre> -->
        <div id="wrapper">

            <div id="header">
                <h1>WEBD-2001 JSON Assignment</h1>
                <h2>Advanced DOM Manipulation Using JSON</h2>
            </div>

            <div id="content">

                <h2>Winnipeg Road Closures</h2>

                <ul id="closures" >
                <?php foreach ($closures as $close) : ?>
                    <li>
                        <h2>Primary Road: </h2>
                        <h4>
                            <?= $close['primary_street'] ?>
                        </h4>
                        <h2>Cross Street: </h2>
                        <h4>
                            <?= $close['cross_street'] ?>
                        </h4>
                        <h2>Road Affected: </h2>
                        <h4>
                            <?= $close['boundaries'] ?>
                        </h4>
                        <h2>Traffic Effect: </h2>
                        <blockquote>
                            <?= $close['traffic_effect'] ?>
                        </blockquote>
                    </li>
                    <?php endforeach ?>
                </ul>

            </div>

            <div id="footer">
                <p>SP</p>
            </div>

        </div>
    </body>
</html>
