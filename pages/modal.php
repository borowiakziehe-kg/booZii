<div class="grid centerize">
    <div class="u_12">
        <h2>Modal Windows</h2>
        <p><a href="#" class="button red bz-modal">Modal Window</a></p>
    </div>
</div>
<script src="booZii/vendors/modal/simple-modal.js"></script>
<script>
    window.addEvent('domready', function() {
        $$('.bz-modal').openModal({
            'contents': 'Test',
            hideFooter: true,
            width: '50%'
        }, 'click');
    })
</script>