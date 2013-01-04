var current = window.getSize().x;

window.addEvent('resize', function(e) {
    var _width = this.getSize().x;

    if(_width > 1023 && current != 'widescreen') {
        current = 'widescreen';
    } else if(_width <= 1023 && _width > 767 && current != 'normal') {
        current = 'normal';
    } else if(_width <= 767 && current != 'mobile') {
        current = 'mobile';
    }

    console.log(current);
});