<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $defaultName }} | My TV | Sri Lankan Premire Internet TV Experience</title>

    <script src="../../jwplayer/jwplayer.js"></script>
    <script src="../../jwplayer/jwpsrv.js"></script>
    <script src="../../jwplayer/jwplayer.core.controls.js"></script>
    <script src="../../jwplayer/provider.shaka.js"></script>
    <script src="../../player.js"></script>

    <link rel="stylesheet" href="../../player.min.css">
    @foreach ($data as $card)
        @foreach ($card as $mainkey => $channel)
            @if ($channelKey == $mainkey)
                @php
                    break;
                @endphp
            @endif
        @endforeach
    @endforeach

    @php
        $file = $channel->link;
        $posterUrl = $channel->posterUrl;
        $key = $channel->key;
        $kid = $channel->kid;

    @endphp
</head>

<body>

    <div id="player"></div>
    <script type='text/javascript'>
        jwplayer('player').setup({
            "playlist": [{
                "sources": [{
                    "default": false,
                    "type": "hls",
                    "file": "{{ $file }}",
                    "image": "{{ $posterUrl }}",
                    "drm": {
                        "fairplay": {}
                    },
                    "label": "0"
                }, {
                    "default": true,
                    "type": "mpd",
                    "file": "{{ $file }}",
                    "image": "{{ $posterUrl }}",
                    "drm": {
                        "clearkey": {
                            "key": "{{ $key }}",
                            "keyId": "{{ $kid }}",
                        }
                    },
                    "label": "1"
                }, {
                    "default": true,
                    "type": "mpd",
                    "file": "{{ $file }}",
                    "image": "{{ $posterUrl }}",
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

</body>

</html>
