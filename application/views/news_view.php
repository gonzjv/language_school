        <div class="row text-light">
            <div class="col-2 ml-5 ">
                <h3>
                    Earth is round!
                </h3>
            </div>
            <div class="col-3 ml-5 ">
                <h3>News</h3>

                <ul>
                    <?php
//                    var_dump($name);
                    foreach ($news as $item): ?>

                        <li><?php echo $item['name']?></li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>