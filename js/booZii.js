(function() {
    var BooZii = new Class({
        Implements: [Options, Events],
        options: {

            /*
             * Events
             * onFlyout: function(el, type) {}
             * */
        },

        booZiiItems: {},

        initialize: function(options) {
            this.flyout();
        },

        flyout: function() {
            console.log($$('.flyout-v .submenu'));

            $$('.submenu ul').setStyle('opacity', 0);

            $$('.flyout-v .submenu').addEvents({
                'mouseenter': function() {
                    this.getElement('ul').setStyle('left', 'auto');
                    var myEffect = new Fx.Morph(this.getElement('ul'), {
                        duration: 'long',
                        transition: Fx.Transitions.Sine.easeOut
                    });

                    myEffect.start({
                        'opacity': 1
                    });
                },
                'mouseleave': function(e) {
                    var myEffect = new Fx.Morph(this.getElement('ul'), {
                        duration: 'long',
                        transition: Fx.Transitions.Sine.easeOut,
                        onComplete: function() {
                            this.getElement('ul').setStyle('left', '-9999em');
                        }.bind(this)
                    });

                    myEffect.start({
                        'opacity': 0
                    });
                }
            });
        },

        getBooZiiItems: function() {
            var items = this.booZiiItems;

        }
    });

    window.addEvent('domready', function() {

        new BooZii();
    });
})()


