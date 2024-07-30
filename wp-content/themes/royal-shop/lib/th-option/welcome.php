<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('1. Install Recommended Plugins','royal-shop'); ?></h3>
    <p><?php _e('We highly Recommend to install ThemeHunk Customizer plugin to get all customization options in Royal Shop theme. Also install recommended plugins available in recommended tab.','royal-shop'); ?></p>
</div>
<div class="theme_link">
    <h3><?php _e('2. Setup Home Page','royal-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
        <p><?php _e('To set up the HomePage in Royal Shop theme, Just follow the below given Instructions.','royal-shop'); ?> </p>
<p><?php _e('Go to Wp Dashboard > Pages > Add New > Create a Page using “Home Page Template” available in Page attribute.','royal-shop'); ?> </p>
<p><?php _e('Now go to Settings > Reading > Your homepage displays > A static page (select below) and set that page as your homepage.','royal-shop'); ?> </p>
     <p>
        <?php
		if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __('Home Page Activated','royal-shop');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __('Set Home Page','royal-shop');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";


        }
        ?>
        <button style="<?php echo $Bstyle; ?>" class="button activate-now <?php echo $class; ?>"><?php echo esc_html($btn_text); ?></button>
		
         </p>
		 	 
		 
    <p>
        <a target="_blank" href="https://wpzita.com/docs/" class="button"><?php _e('Go to Doc','royal-shop'); ?></a>
    </p>
</div>

<!--- tab third -->





<!--- tab second -->
<div class="theme_link">
    <h3><?php _e('3. Customize Your Website','royal-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Royal Shop theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','royal-shop'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","royal-shop"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e("4. Customizer Links","royal-shop"); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","royal-shop"); ?></a>
                    <hr><a href="<?php echo admin_url('customize.php?autofocus[section]=royal-shop-gloabal-color'); ?>" class="components-button is-link"><?php _e("Global Colors","royal-shop"); ?></a><hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php _e("Woocommerce","royal-shop"); ?></a><hr>

                </div>

               <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=royal-shop-section-header-group'); ?>" class="components-button is-link"><?php _e("Header Options","royal-shop"); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[panel]=royal-shop-panel-frontpage'); ?>" class="components-button is-link"><?php _e("FrontPage Sections","royal-shop"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=royal-shop-section-footer-group'); ?>" class="components-button is-link"><?php _e("Footer Section","royal-shop"); ?></a><hr>
            </div>

        </div>
    </div>

</div>
<!--- tab fourth -->