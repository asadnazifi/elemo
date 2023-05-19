<?php global $emyuiredux; ?>

            <?php if (  function_exists( 'boostify_footer_active' ) && boostify_footer_active() ): ?>
                <?php boostify_get_footer_template(); //Custom header ?>
            <?php else: ?>
                <div class="container-fluid bg_costme_blu text-center pb-8">
                <div class="container ">
                    <div class="row">

                        <img class = "costum_img_svg"src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/svg/logoAz.svg " class="footer_logo_sp" alt="">
                        <img class="costm_svg mx-auto -translate-y-2" width="400px" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4ODguNTIgMTYyLjYxIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6bm9uZX0uY2xzLTJ7ZmlsbDojYTVhZWM5fS5jbHMtM3tmaWxsOiNmZmZ9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IkxheWVyXzIiIGRhdGEtbmFtZT0iTGF5ZXIgMiI+PGcgaWQ9IkxheWVyXzEtMiIgZGF0YS1uYW1lPSJMYXllciAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODIuMzUgMTI5LjcyYTg5LjY2IDg5LjY2IDAgMDA3LjMyIDYuMTdsMS43IDEuMTFjLTMuMTctMi4zNy02LjE4LTQuODEtOS4wMi03LjI4ek03MDIuNTUgMTM3Ljc2YzEtLjY0IDIuMTMtMS4zNSAzLjMtMi4xMiAyLjE4LTEuNjQgNC4zNC0zLjQ1IDYuNDYtNS4zOHEtNC45IDQuMDgtOS43NiA3LjV6Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMTQ1LjY5IDg0LjY1Qzk4LjU2IDkuNDUgNTIuMjkgMS40NSAzOS4wNi43OGgtMy43NGEyOS42NiAyOS42NiAwIDAxMy43NCAwaDIuMjJDMzYuNi40NiAzMS45Mi4zOCAyNy40Mi4zOEwwIC4yNXYxMi40aDI4Ljc5YTEwMC40NyAxMDAuNDcgMCAwMTQyLjUgOS4yMWM0My41NSAyMC4zIDY3LjE1IDYyLjM5IDY3LjE1IDYyLjM5YTE4MyAxODMgMCAwMDUxLjIzIDUxLjY0IDg5LjY2IDg5LjY2IDAgMDEtNy4zMi02LjE3IDE3MCAxNzAgMCAwMS0zNi42Ni00NS4wN3pNMTg5LjY3IDEzNS44OWMxLjQgMS4wNiAyLjgxIDIuMDUgNC4yMyAzLS44NS0uNjEtMS43LTEuMjItMi41My0xLjg0ek02OTkuMjggMTQwYTYyLjc3IDYyLjc3IDAgMDA2LjU3LTQuMzZjLTEuMTcuNzctMi4yOCAxLjQ4LTMuMyAyLjEycy0yLjE4IDEuNTEtMy4yNyAyLjI0ek04NjguMTEuMTJjLTQuNzMgMC05Ljc1LjItMTQuNzcuNjZoLjg4Yy02NC41IDYuMzMtMTAyLjg2IDgzLjg3LTEwMi44NiA4My44Ny0xMi4zNSAxOS44MS0yNS43OCAzNC41OC0zOS4wNSA0NS42MWE5MC4yMTYgOTAuMjE2IDAgMDEtNi40NiA1LjM4QTE4My4xOCAxODMuMTggMCAwMDc1Ny4wOSA4NHMyNS40Ny00NS40NCA3Mi4zMy02NC42N2E5NC42NyA5NC42NyAwIDAxMzYtNi45M2gyMy4xM1YweiIvPjxwYXRoIGNsYXNzPSJjbHMtMyIgZD0iTTcxMi4zMSAxMzAuMjZjMTMuMjctMTEgMjYuNy0yNS44IDM5LjA1LTQ1LjYxIDAgMCAzOC4zNi03Ny41NCAxMDIuODYtODMuODdIMzkuMDZjMTMuMjMuNjcgNTkuNSA4LjY3IDEwNi42MyA4My44N2ExNzAgMTcwIDAgMDAzNi42NiA0NS4wN2MyLjg0IDIuNDcgNS44NSA0LjkxIDkgNy4yOC44My42MiAxLjY4IDEuMjMgMi41MyAxLjg0IDE4LjYxIDEzLjI3IDQyLjYyIDIzLjc0IDcyIDIzLjc0SDYzMC43czMyIDEuODEgNjguNTgtMjIuNThjMS4wOS0uNzMgMi4xOC0xLjQ3IDMuMjctMi4yNHE0Ljg1LTMuNDIgOS43Ni03LjV6TTM1LjMyLjc4aDMuNzRhMjkuNjYgMjkuNjYgMCAwMC0zLjc0IDB6Ii8+PC9nPjwvZz48L3N2Zz4=" alt="">

                    </div>
                </div>
            </div>
            <div class="container-fluid text-center bg_costme_blu pb-14">

                 <div class="row ">
                     <div class="col-lg-2 col-6">

                         <span class="bg_wite_text font_family_TKT">میزبان وب</span>
                         <?php
                         wp_nav_menu( array(
                             'menu'         => 'footer-one',
                             'depth'           => 1,
                             'menu_class'   => 'footer-list list-unstyled cos_li font_family_TKT col-sm-6 sol-lg-3',

                         ) );

                         ?> </div>
                     <div class="col-lg-2 col-6"><span class="bg_wite_text font_family_TKT">میزبان وب</span>  <?php
                         wp_nav_menu( array(
                             'menu'         => 'footer-two',
                             'depth'           => 1,
                             'menu_class'   => 'footer-list list-unstyled cos_li col-sm-6 sol-lg-3',

                         ) );

                         ?> </div>
                     <div class="col-lg-4 col-sm-12 pt-17 bg_wit mb-8">آذرخش داده البرز دهنده خدمات هاست ایران ،هاست آلمان، سرور مجازی، سرور اختصاصی، طراحی، برنامه نویسی و سرویس‌های متنوع تحت وب است. تخصص و اراده ما ارائه سرویس‌های پر سرعت، مطمئن و مطابق با تکنولوژی روز دنیاست. ما با افتخار، میزبان بیش از 200 هزار مشترک هستیم. اگر تاکنون عضو خانواده ما نشده‌اید، جای شما در جمع ما خالیست. پیشاپیش ورودتان را به خانواده آذرخش داده البرز تبریک می‌گوییم.</div>
                     <div class="col-lg-2 col-6"> <span class="bg_wite_text mb- font_family_TKT">میزبان وب</span> <?php
                         wp_nav_menu( array(
                             'menu'         => 'footer-three',
                             'depth'           => 1,
                             'menu_class'   => 'footer-list list-unstyled cos_li col-sm-6 sol-lg-3',



                         ) );

                         ?></div>
                     <div class="col-lg-2 col-6"> <span class="bg_wite_text mb-8 font_family_TKT">میزبان وب</span> <?php
                         wp_nav_menu( array(
                             'menu'         => 'footer-three',
                             'depth'           => 1,
                             'menu_class'   => 'footer-list list-unstyled cos_li col-sm-6 sol-lg-3',

                         ) );

                         ?></div>

                 </div>

            </div>
                <div class="container-fluid bg-blue-costume">
                    <div class="row coustmu_css_fliex col-sm-text-center col-lg-text-center ">
                        <div class="justify-content-sm-around p-5 col-lg-6 col-12">
                            <button class="bt_costum bg_wite"><a class="font_family_TKT" href="#">تماس با ما</a></button>
                            <button class="bt_costum bg_wite"><a class="font_family_TKT" href="#">خدمات پس از فروش</a></button>
                            <button class="bt_costum bg_wite"><a class="font_family_TKT" href="#">دامنه ها</a></button>
                        </div>
                        <div class="row p-10 bg_wit font_family_TKT text-center col-lg-6 col-12">تمای حقوق این سایت مطلق یه آذر چرخش میباشد و میتوانید بریدا یان کار انجام بددی</div>

                    </div>
                </div>


            <?php endif; ?>

                   


   
        <!-- Vendor Scripts -->                  
        <!-- Plugin's Scripts -->   
                                                                                   
        <!-- Activation Script -->   


        <?php wp_footer(); ?>
    </body>     
</html>
