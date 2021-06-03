<?php
/**
 * Only created to make the BasicController more readable.
 */

$stmt = $mysqli->prepare("CREATE TABLE IF NOT EXISTS `extremely_important_data` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `value` TEXT,
            PRIMARY KEY (`id`)  
        )");
$stmt->execute();

$result = $mysqli->query('SELECT EXISTS (SELECT 1 FROM `extremely_important_data`)  as nbEntry;');
