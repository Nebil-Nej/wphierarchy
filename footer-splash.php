</div><!-- CLosing  #Content-->
</div><!-- Closing #Page -->

<?php 
    if(!is_active_sidebar( 'footer-sidebar' )) {
        return;
    }
?>

<div class="notice" style="display: flex;  justify-content: center;">
    <?php dynamic_sidebar( 'footer-sidebar' ) ?>
    <p>Don't Forget to Sign Up</p>
</div>
<?php wp_footer(); ?>
</body>

</html>