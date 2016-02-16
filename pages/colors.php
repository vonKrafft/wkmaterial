<?php
$variants = array( '50'  => '50', '100' => '100', '200' => '200', '300' => '300', '400' => '400', '500' => '500', '600' => '600', '700' => '700', '800' => '800', '900' => '900' );
$acccents = array( 'acccent-100' => 'A100', 'acccent-200' => 'A200', 'acccent-400' => 'A400', 'acccent-700' => 'A700' );
$colors = array(
    '#F44336' => 'Red',
    '#E91E63' => 'Pink',
    '#9C27B0' => 'Purple',
    '#673AB7' => 'Deep Purple',
    '#3F51B5' => 'Indigo',
    '#2196F3' => 'Blue',
    '#03A9F4' => 'Light Blue',
    '#00BCD4' => 'Cyan',
    '#009688' => 'Teal',
    '#4CAF50' => 'Green',
    '#8BC34A' => 'Light Green',
    '#CDDC39' => 'Lime',
    '#FFEB3B' => 'Yellow',
    '#FFC107' => 'Amber',
    '#FF9800' => 'Orange',
    '#FF5722' => 'Deep Orange',
    '#795548' => 'Brown',
    '#9E9E9E' => 'Gray',
    '#607D8B' => 'Blue Gray',
    '#000000' => 'Black',
);
?>

<div class="page-header">
    <h2>Colors</h2>
</div>

<div class="panel">
    <div class="panel-header">
        <h2>Colors from Material Design <small>These colors  are inspired by bold color statements juxtaposed with muted environments, taking cues from contemporary architecture, road signs, pavement marking tape, and sports courts. Emphasize bold shadows and highlights. Introduce unexpected and vibrant colors. (Taken by Google's color page)</small></h2>
    </div>

    <div class="panel-body panel-padding">
        <div class="row">
            <?php foreach ($colors as $code => $main) : ?>
                <div class="col-sm-3 col-xs-6">
                    <?php $css = str_replace(' ', '-', strtolower($main)); ?>
                    <div class="color-block bg-<?php echo $css; ?>">
                        <span class="color"><?php echo $main; ?></span>
                        <span class="code"><?php echo $code; ?></span>
                        <span class="less">@bg-<?php echo $css; ?></span>
                    </div>
                    <div>
                        <?php foreach ($variants as $less => $color) : ?>
                            <div class="color-subblock bg-<?php echo $css; ?>-<?php echo $less; ?> clearfix">
                                <span class="color"><?php echo $color; ?></span>
                                <span class="less">@bg-<?php echo $css; ?>-<?php echo $less; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if ( !in_array($main, array('Brown', 'Gray', 'Blue Gray', 'Black')) ) : ?>
                        <div>
                            <?php foreach ($acccents as $less => $color) : ?>
                                <div class="color-subblock bg-<?php echo $css; ?>-<?php echo $less; ?> clearfix">
                                    <span class="color"><?php echo $color; ?></span>
                                    <span class="less">@bg-<?php echo $css; ?>-<?php echo $less; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>