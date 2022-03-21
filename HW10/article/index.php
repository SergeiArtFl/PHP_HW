    <?php
    require_once '../core/core.php';
    require_once './functions.php';
    require_once './header.php';

    ?>
    <section class="fon">
        <div class="container">
            <h3> Categories of posts</h3>
            <ul> 
                <?php
                $result = getCategories($mysqli);

                if ($result) {
                    while ($row = mysqli_fetch_row($result)) { ?>
                        <li><a href="./sectionCategories.php?article=<?php echo $row[0] ?>"><?php echo $row[1] ?></a>
                        </li><?php
                    }
                }?>
            </ul>
            <div class="st">
                <div class="preview">
                    <h4>The last notes</h4>
                    <ul> 
                        <?php
                            $result = preview($mysqli);

                            if ($result) {
                                while ($row = mysqli_fetch_row($result)) { ?>
                                <li><a href="./detail.php?article=<?php echo $row[3] ?>"><?php echo $row[2] . ": " . $row[7] ?></a>
                                </li><?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <?php

    require_once './footer.php';
    

    
  
