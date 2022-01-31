</div>
</div>
</main>
</body>
<div>
        <footer class="py-3 my-4 border-top">
            <ul class="nav justify-content-center border-bottom pb-5 mb-3">
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 text-muted pt-0">
                        <?php 
                            wp_nav_menu ( 
                                array(
                                    'theme_location'  => 'temazo_menu_principal',
                                )
                            ); 
                        ?>
                    </a>
                </li>
            </ul>
            <p class="text-center text-muted pb-2 pt-5">
                "copyright" 2022
                <?php 
                  echo get_bloginfo("name");
                ?> 
                , inc</p>
        </footer>
    </div>
<?php wp_footer(); ?>

</html>