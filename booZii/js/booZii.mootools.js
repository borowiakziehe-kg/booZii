(function() {
    var BooZii = new Class({
        config: {
            status: {
                simpleModal: false
            }
        },
        initialize: function() {

        },

        /**
         * generateTooltips
         * @param items
         * @param options
         */
        generateTooltip: function(items, options) {
            new Tips(items, options);
        },

        openModal: function(el, options, event) {
            var self = this;
            event = (typeOf(event) == 'string') ? event : false ;

            if(event) {
                el.addEvent(event, function(e) {
                    e.preventDefault();

                    var SM = new SimpleModal(options);
                    SM.show(options);

                }.bind(this));
            }
        }

    })

    window.addEvent('domready', function() {
        window.boozii = new BooZii();
    });



    Elements.implement({
        /* add tooltips to elements */
        'tooltip': function(options) {
            options = options || {};
            boozii.generateTooltip(this, options);
            return this;
        },
        'openModal': function(options, event) {
            options = options || {};
            event = event || false;
            boozii.openModal(this, options, event);
            return this;
        }
    });
})()