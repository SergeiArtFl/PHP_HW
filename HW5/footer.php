    <footer>
        <div class="info">
            <div class="container">
                    <div class="info_flex">
                        <ul>
                            <li class="m25">Contact us</li>
                            <li class="m15 text_p"><img src="images/ico_loc.png" alt="ico_loc"><span>Main St.<br> Toronto, ON<br> M1H 3A5</span></li>
                            <li class="m15 mid text_p"><img src="images/ico_phone.png" alt="ico_phone"><span>(416) 555-5252</span></li>
                            <li class="text_p"><img src="images/ico_email.png" alt="ico_email"><span>hello@treehouse.com</span></li>
                        </ul>
                        <ul>
                            <li class="m25">Latest posts</li>
                            <?php require_once './pagesData.php';
                                if (!empty($pagesFooterData)):
                                    foreach ($pagesFooterData as $id => $page): ?>
                            <li class="m15"><a class="text_p" href="./page.php?id=<?php echo $id ?>"><img src=<?php echo $page['image'] ?> alt="ico_news"><span><?php echo $page['pole'] ?></span></a></li>
                            <!-- <li class="m15"><a class="text_p" href="./page.php?id=<?php echo $pagesData['page2'] ?>"><img src="images/ico_photo.png" alt="ico_photo"><span>Startup news & emerging tech</span></a></li>
                            <li class="m15"><a class="text_p" href="./page.php?id=<?php echo $pagesData['page3'] ?>"><img src="images/ico_news.png" alt="ico_news"><span>Bitcoin will soon rule the world</span></a></li>
                            <li class="m15"><a class="text_p" href="./page.php?id=<?php echo $pagesData['page4'] ?>"><img src="images/ico_news.png" alt="ico_news"><span>Wearable technology on the rise</span></a></li>
                            <li><a class="text_p" href="./page.php?id=<?php echo $pagesData['page5'] ?>"><img class="centr" src="images/ico_play.png" alt="ico_play"><span class="centr"> Learn web design in 30 days!</span></a></li> -->
                            <?php endforeach;
                            endif; ?>
                        </ul>
                        <ul>
                            <li class="m25">Latest tweets</li>
                            <li class="m15 text_p"><img src="images/ico_twits.png" alt="ico_twits"><span>Confucius: Life is really simple,<br>  but we insist on making it<br> complicated.<br><p>#famousquotes</p><p id="p">8 mins ago</p></span></li>
                            <li class="text_p"><img src="images/ico_twits.png" alt="ico_twits"><span>Grab the Free Treehouse web<br> template at FreebiesXpress!<br><p>#freebies #templates</p><p id="p">2 days ago</p></span></li>
                        </ul>
                    </div>
            </div>
        </div>
                <div class="footer_copy">
                    <div class="container">
                        <div class="footer_social">
                            <div class="copy">
                                <p>&#169 Copyright 2014 freebiesXpress.com</p>
                            </div>
                            <div class="icon_social">
                                <ul>
                                    <li><a class="background_ico" href="#"><span class="ico_tw"></span></a></li>
                                    <li><a class="background_ico" href="#"><span class="ico_f"></span></a></li>
                                    <li><a class="background_ico" href="#"><span class="ico_p"></span></a></li>
                                    <li><a class="background_ico" href="#"><span class="ico_g"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
       
    </footer>
</body>
</html>