<div class="grid centerize">
    <div class="u_12">
        <h2>Slider</h2>
        <p><a href="#" class="button red bz-tooltip" rel="Test" title="dfgfdgdfgfdg">Tooltip on hover</a></p>
    </div>
</div>
<script src="booZii/vendors/spinslider/spin/spin.js"></script>
<script>
    window.addEvent('domready', function() {
        $$('.bz-tooltip').tooltip();
    })
</script>