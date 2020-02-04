// JS for Top Pot redesign


    var classname = document.getElementsByClassName('map');
    
    var myFunction = function() {
        var attribute = this.getAttribute('id');

        if /* if maps is opened on iOS, it will open in Apple Maps */
            ((navigator.platform.indexOf("iPhone") != -1) || 
            (navigator.platform.indexOf("iPad") != -1) || 
            (navigator.platform.indexOf("iPod") != -1))
            window.open("maps://" + attribute);
        else /* otherwise Google maps will be used */
            window.open("https://" + attribute);
    };

    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', myFunction, false);
    };

        // still wondering if I should have google maps open everytime.