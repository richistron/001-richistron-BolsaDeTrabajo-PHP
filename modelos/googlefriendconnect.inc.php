<!-- Load the Google AJAX API Loader -->
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

<!-- Load the Google Friend Connect javascript library. -->
<script type="text/javascript">
google.load('friendconnect', '0.8');
</script>

<!-- Initialize the Google Friend Connect OpenSocial API. -->
<script type="text/javascript">
google.friendconnect.container.setParentUrl('/' /* location of rpc_relay.html and canvas.html */);
google.friendconnect.container.initOpenSocialApi({
  site: '05045064775338191898',
  onload: function(securityToken) { /* your callback, which is passed a security token */ }
});
</script>

