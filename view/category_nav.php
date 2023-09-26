        <nav>
            <ul>
                <?php foreach ($categories as $category) {
                    echo '<li>
                            <a href="?category_id='.$category['categoryID'].'">
                                '.$category['categoryName'].'
                            </a>
                        </li>';
                }?>
            </ul>
        </nav>