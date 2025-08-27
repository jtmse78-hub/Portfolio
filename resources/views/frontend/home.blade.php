
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Intro</title>
  <style>
    body, html {
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
  <video autoplay muted id="intro-video">
    <source src="images/intro.mp4" type="video/mp4" />
    
  </video>

  <script>
    const video = document.getElementById('intro-video');
    video.addEventListener('ended', () => {
      window.location.href = '/Portfolio'; // Your main portfolio page
    });
  </script>
</body>
</html>

@extends('frontend.master')