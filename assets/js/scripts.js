(function($) {

    //init scroll effects
    AOS.init();

    const observer = lozad(); // lazy loads elements with default selector as '.lozad'
    observer.observe();

    //Homepage hero content below

    window.addEventListener('scroll', function() {
        //this.alert(window.scrollY);
        if(document.body.classList.contains('home')) {
            let introHeight = document.getElementById('greggintro').offsetHeight; //so there is a delay after scrolling
            if (window.scrollY > introHeight) {
                document.getElementById('navbar_sticky').classList.add('slide-in');
            } else {
                document.getElementById('navbar_sticky').classList.remove('slide-in');
            } 
        }
    });
    
    let buttons = document.getElementsByClassName('pagejump');
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            let id = this.dataset.scrollto;
            document.getElementById(id).scrollIntoView({block: 'start', behavior: 'smooth'});
        }, false);
    }
    
    
    let shakes = document.getElementsByClassName('has-shake');
    for (var i = 0; i < shakes.length; i++) { 
        shakes[i].addEventListener('click', function() {
            let $this = this;
            $this.classList.add('shake');
            setTimeout(function() {
                $this.classList.remove('shake');
            },1000);
        }, false);
        
    }

    if(document.body.classList.contains('home')) {
    
        //Typing effect
        var _CONTENT = [ 
            "Web Developer", 
            "Consultant", 
            "Creative"
        ];

        // Current sentence being processed
        var _PART = 0;

        // Character number of the current sentence being processed 
        var _PART_INDEX = 0;

        // Holds the handle returned from setInterval
        var _INTERVAL_VAL;

        // Element that holds the text
        var _ELEMENT = document.querySelector("#text");

        // Cursor element 
        var _CURSOR = document.querySelector("#cursor");

        // Implements typing effect
        function Type() { 
            // Get substring with 1 characater added
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX++;

            // If full sentence has been displayed then start to delete the sentence after some time
            if(text === _CONTENT[_PART]) {
                // Hide the cursor
                _CURSOR.style.display = 'none';

                clearInterval(_INTERVAL_VAL);
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Delete, 50);
                }, 1000);
            }
        }

        // Implements deleting effect
        function Delete() {
            // Get substring with 1 characater deleted
            var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX--;

            // If sentence has been deleted then start to display the next sentence
            if(text === '') {
                clearInterval(_INTERVAL_VAL);

                // If current sentence was last then display the first one, else move to the next
                if(_PART == (_CONTENT.length - 1))
                    _PART = 0;
                else
                    _PART++;
                
                _PART_INDEX = 0;

                // Start to display the next sentence after some time
                setTimeout(function() {
                    _CURSOR.style.display = 'inline-block';
                    _INTERVAL_VAL = setInterval(Type, 100);
                }, 200);
            }
        }

        // Start the typing effect on load
        _INTERVAL_VAL = setInterval(Type, 100);
    }

    $('.telto').attr('href','tel:'+'1978'+'417'+'0803');
    $('.telto span.text').text('978-'+'417-'+'0803');
    $('.mailto').attr('href','mailto:'+'hello'+'@mynameisgregg.com');
    $('.mailto span.text').text('hello@'+'mynameisgregg.com');

})( jQuery );

