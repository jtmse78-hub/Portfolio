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
        #skip-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            z-index: 10;
            display: none; /* Initially hide the button */
        }
        #skip-button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>

    <video id="intro-video" autoplay muted>
        <source src="{{ asset('images/intronew.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <button id="skip-button" onclick="skipIntro()">Skip</button>

    <script>
        const video = document.getElementById('intro-video');
        const skipButton = document.getElementById('skip-button');
        
        
        setTimeout(function() {
            skipButton.style.display = 'block';
        }, 3000);

        
        function skipIntro() {
            video.pause();
            window.location.href = "{{ url('/portfolio') }}";
        }

        // Redirect to portfolio after video ends
        video.addEventListener('ended', function () {
            window.location.href = "{{ url('/portfolio') }}";
        });
    </script>

</body>
</html>
