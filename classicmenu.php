<?php include 'includes/header.php'; ?>

<div id="banner3" class="parallax-window" data-parallax="scroll" data-image-src="images/sprinkle-banner.jpg" data-ios-fix="true" data-android-fix="true" data-position="top">
</div>

<div id="wrapper" class="classic">
    
    <div class="galleria">
            
                <img src='images/caramel.jpg' alt='Salted Caramel Old Fashioned'>
            
                <img src='images/fritter.jpg' alt='Apple Fritter'>
            
                <img src='images/glazed-raised.jpg' alt='Glazed Raised Ring'>
            
                <img src='images/cinamon-raised.jpg' alt='Cinammon Sugar Raised Ring'>
            
                <img src='images/pink-rainbow.jpg' alt='Pink Rainbow Cake Doughnut'>
            
                <img src='images/maple-bar.jpg' alt='Maple Bar'>

    </div> <!--end menu-wrapper div-->
    
    <div id="main">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis ornare odio nec pellentesque. Quisque non sem at enim maximus volutpat ac non arcu. Phasellus interdum leo lorem, ut posuere tellus sollicitudin ut. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vitae ex in dui commodo consectetur non tincidunt libero. Quisque dignissim mi augue, sed facilisis turpis mattis in. Donec gravida, leo tempor pharetra vehicula, velit urna interdum orci, eu faucibus ipsum massa in tortor. Morbi tempor rhoncus facilisis. Donec tristique commodo erat, sed eleifend lectus auctor eget.</p>
        <p>There will be a list of doughnuts here. Probably with images using flexbox.</p>
    </div>


</div> <!--end WRAPPER div-->
    


<!-- Galleria CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>

<script>
    (function() { 
        Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js');
        Galleria.run('.galleria');
    }());
</script>

<?php include 'includes/footer.php'; ?>
