<!DOCTYPE html>
<html>
<head>
    <title>Jaymar Portfolio</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: black;
        }
        video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <video id="intro-video" autoplay muted>
        <source src="{{ asset('images/intronew.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <script>
        const video = document.getElementById('intro-video');
        video.addEventListener('ended', function () {
            window.location.href = "{{ url('/portfolio') }}";
        });
    </script>

</body>
</html>
