<div class="e2-quote">
    <?php

        $quotes[] = '
        <p>Цитата</p>
        <span>Автор</span>';
        $quotes[] = '
        <p>Цитата</p>
        <span>Автор</span>';
        $quotes[] = '
        <p>Цитата</p>
        <span>Автор</span>';
        
        srand ((double) microtime() * 1000000);
        $random_number = rand(0,count($quotes)-1);

        echo ($quotes[$random_number]);

    ?>
</div>
