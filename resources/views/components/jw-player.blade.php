<script src="./jwplayer/jwplayer.js"></script>
<script src="./jwplayer/jwpsrv.js"></script>
<script src="./jwplayer/jwplayer.core.controls.js"></script>
<script src="./jwplayer/provider.shaka.js"></script>
<script src="./player.js"></script>
{{-- <link rel="stylesheet" href="./player.min.css"> --}}

<div id="player"></div>
<script type='text/javascript'>
    jwplayer('player').setup({
        "playlist": [{
            "sources": [{
                "default": false,
                "type": "hls",
                "file": "https://bpcdn.dialog.lk/bpk-tv/Ch120/output/index.mpd",
                "image": 'https://sh20raj.github.io/Sopplayer/sample.png',
                "drm": {
                    "fairplay": {}
                },
                "label": "0"
            }, {
                "default": true,
                "type": "mpd",
                "file": "https://bpcdn.dialog.lk/bpk-tv/Ch120/output/index.mpd",
                "image": 'https://sh20raj.github.io/Sopplayer/sample.png',
                "drm": {
                    "clearkey": {
                        "key": "29cb9bc0170332b0ffab44bbd2d09910",
                        "keyId": "a521d7d94563c18155c433f85e3c2ed3"
                    }
                },
                "label": "1"
            }, {
                "default": true,
                "type": "mpd",
                "file": "https://bpcdn.dialog.lk/bpk-tv/Ch120/output/index.mpd",
                "image": 'https://sh20raj.github.io/Sopplayer/sample.png',
                "drm": {
                    "widevine": {},
                    "playready": {}
                },
                "label": "2"
            }]
        }],
        "responsive": true,
        "primary": "html5",
        "hlshtml": true,
        "autostart": true,
        "aspectratio": "16:9"
    }).on('error', function(error) {
        console.log('JW Player Error:', error);
    });
</script>
