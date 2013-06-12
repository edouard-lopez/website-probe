<?php
/**
 * ${description}
 *
 * @param $item
 *
 * @return int
 */function imageOnly($item)
{
    $pattern = '/.+(png|jpe?g)$/i';

    return preg_match($pattern, $item);
}

/**
 * Build the gallery list
 *
 * @param $dir
 *
 * @return void
 */
function gallery($dir)
{
    $active = ' active';
    $scannedDir = scandir($dir);
    $imagesList = array_filter($scannedDir, 'imageOnly');
    define('GRID_BLOCKS', 12); // default span
    $sz = GRID_BLOCKS;
    $minSz = 2;
    $step = 4;
    // var_dump($imagesList);
    foreach ($imagesList as $key => $file):
        $title = ucwords(substr($file, 0, -4));
        $description = null; // @todo: implement with JSON file
        $description = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam…
LOREM;

        $imgUrl = sprintf("%s/%s", $dir, $file);
        $sz = (($sz > $minSz and $sz > $step) ? $sz-$step: GRID_BLOCKS);
        ?>
        <li class="span<?=$sz?>">
            <div class="thumbnail<?=$active; $active=null; ?>">
                <a href="<?=$imgUrl?>">
                    <img alt="<?=$title?>" src="<?= $imgUrl ?>" />
                </a>
                <div class="caption">
                    <h3 class="title"><?=$title?></h3>
                    <p><?=$description?></p>
                </div>
            </div>
        </li>
    <?php
    endforeach;
}
