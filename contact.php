<?php include 'includes/header.php'; ?>

<div id="banner3" class="parallax-window" data-parallax="scroll" data-image-src="images/espresso-pull.jpg" data-ios-fix="true" data-android-fix="true" data-position="top">
</div>


<div id="wrapper">
    
    <div id="main">
        <h2>Give Us Your Feedback</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis ornare odio nec pellentesque. Quisque non sem at enim maximus volutpat ac non arcu. Phasellus interdum leo lorem, ut posuere tellus sollicitudin ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vitae ex in dui commodo consectetur non tincidunt libero. Quisque dignissim mi augue, sed facilisis turpis mattis in. Donec gravida, leo tempor pharetra vehicula, velit urna interdum orci, eu faucibus ipsum massa in tortor. Morbi tempor rhoncus facilisis. Donec tristique commodo erat, sed eleifend lectus auctor eget.</p>
        <p>Nunc eget tristique mi. Cras interdum luctus lacus eu volutpat. Aenean rutrum sapien a ullamcorper tempus. Aliquam laoreet ipsum at tortor sollicitudin, non ullamcorper ipsum malesuada. Ut dapibus, ipsum ac aliquet eleifend, elit ex faucibus elit, vitae viverra dolor sapien sed lectus. Morbi consequat sit amet ante at mattis. Curabitur id consequat ex, vitae mattis nunc. Pellentesque pellentesque varius mi et rhoncus.</p>

    </div> <!--end MAIN div-->
    
    <div id="aside">
    
        <?php include 'includes/multiple.php'; ?>
        <p class="clear-recaptcha"></p>


    </div> <!--end ASIDE div-->

</div> <!--end WRAPPER div-->
    
<script>
$(function(){
    $("#commentform").validate();
});
</script>

<?php include 'includes/footer.php'; ?>
