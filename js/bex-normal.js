/* Core */
var resizeText = function(size) {
    if ($('body').css('fontSize') === "") {
        $('body').css('fontSize', '1.0em');
    }

    $('body').css('fontSize', String(size) + "pt");
};

/* Bubbles */
var move_val = 40;
function Bubble(css_selector){
    this.selector = css_selector;
    this.top = parseInt($(""+this.selector).css('top'));
    this.left = parseInt($(""+this.selector).css('left'));
    this.deltaX = move_val;
    this.deltaY = move_val;
    this.currentBorder = "none";
    this.update = function(){
        this.top = parseInt($(""+this.selector).css('top'));
        this.left = parseInt($(""+this.selector).css('left'));
    };
    this.move = function(){
        $(""+this.selector).animate({top: "+="+this.deltaY+"px", left: "+="+this.deltaX+"px"}, {duration: 900, easing: 'linear'});
    };

    this.updateMovementState = function(){
        var path = Math.floor(Math.random() * 8);

        if(this.currentBorder === "top"){
            var choiceArray = [4, 5, 6];
            path = choiceArray[ Math.floor(Math.random() * 3) ];
        }

        if(this.currentBorder === "bottom"){
            var choiceArray = [8, 1, 2];
            path = choiceArray[ Math.floor(Math.random() * 3) ];
        }

        if(this.currentBorder === "left"){
            var choiceArray = [2, 3, 4];
            path = choiceArray[ Math.floor(Math.random() * 3) ];
        }

        if(this.currentBorder === "right"){
            var choiceArray = [6, 7, 8];
            path = choiceArray[ Math.floor(Math.random() * 3) ];
        }

        switch (path) {
            case 0:
                this.deltaX = 0;
                this.deltaY = -move_val;
                break;
            case 1:
                this.deltaX = move_val;
                this.deltaY = -move_val;
                break;
            case 2:
                this.deltaX = move_val;
                this.deltaY = 0;
                break;
            case 3:
                this.deltaX = move_val;
                this.deltaY = move_val;
                break;
            case 4:
                this.deltaX = 0;
                this.deltaY = move_val;
                break;
            case 5:
                this.deltaX = -move_val;
                this.deltaY = move_val;
                break;
            case 6:
                this.deltaX = -move_val;
                this.deltaY = 0;
                break;
            case 7:
                this.deltaX = -move_val;
                this.deltaY = -move_val;
                break;
        }
    };

    this.isTouchingPageElement = function(){
        this.update();
        if(this.top > parseInt($(window).height())/2 ) {
            this.currentBorder = "bottom";
            return true;
        }
        else if(this.top < 0) {
            this.currentBorder = "top";
            return true;
        }
        else if(this.left > parseInt($(window).width()) ) {
            this.currentBorder = "right";
            return true;
        }
        else if(this.left < 0) {
            this.currentBorder = "left";
            return true;
        }
        else {
            this.currentBorder = "none";
            return false;
        }
    };

    this.counter = 0;
    this.action = function(){
        if(this.isTouchingPageElement()) {
            this.updateMovementState();
        }
        if(this.counter === 15) {
            this.counter = 0;
            this.updateMovementState();
        }
        this.move();
        ++this.counter;
    };

    $(''+this.selector).click(function(){
        $(''+this.selector).fadeOut(2000);
    });

    this.startX = parseInt( $(''+this.selector).css('left') );
    this.startY = parseInt( $(''+this.selector).css('top') );
    this.reset = function(){
        $(''+this.selector).css('left', this.startX+"px");
        $(''+this.selector).css('top', this.startY+"px");
    };
}
var bubbles = [];
function bubblefunc(){
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].action();
    }
}
$(document).ready(function(){
    /*$(document).snowfall({
        flakeCount : 300,
        maxSpeed : 10,
        maxSize: 4,
        round: true,
        collection: '#pagecontent'
    });*/
    $('#clickbubbletext').hide();

    bubbles = [ new Bubble("#b1"), new Bubble("#b2"), new Bubble("#b3"), new Bubble("#b4"), new Bubble("#b5"),
        new Bubble("#b6"), new Bubble("#b7"), new Bubble("#b8"), new Bubble("#b9") ];
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].updateMovementState();
    }
});


function onSetBubblesFreeClicked() {
    setInterval(bubblefunc, 900);

    $('#bubblebutton').fadeOut(1000, function(){
        $('#clickbubbletext').show();
    });
    $('.bubble').click(function(){
        $(this).effect('puff', {percent: 200}, 300, function(){
            document.getElementById("pop").play();
            $('#clickbubbletext').fadeOut(1200, 'linear');
        });
    });
    $('#resetbubblesbutton').show();
}

function onResetBubblesClicked() {
    for (var i = 0; i < bubbles.length; i++) {
        bubbles[i].reset();
        $(""+bubbles[i].selector).show();
    }
    
    $('#resetbubblesbutton').fadeOut(900, function(){
        $('#bubblebutton').show();
    });
    $('.bubble').off('click');
}