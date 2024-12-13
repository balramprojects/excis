<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish YouTube Embed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1b1b1b;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: white;
        }

        .youtube-container {
            position: relative;
            width: 100%;
            max-width: 560px;
            /* Adjust to your desired size */
            height: 315px;
            overflow: hidden;
            cursor: pointer;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }

        .youtube-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
        }

        .youtube-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(255, 255, 255, 0.2);
            border: 3px solid white;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8),
                0 0 30px rgba(255, 255, 255, 0.6),
                0 0 45px rgba(255, 255, 255, 0.4);
            animation: glow 1.5s infinite ease-in-out;
        }

        .youtube-play::before {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-left: 18px solid white;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
            left: 50%;
            transform: translate(-35%, 0);
        }

        @keyframes glow {

            0%,
            100% {
                box-shadow: 0 0 15px rgba(255, 255, 255, 0.8),
                    0 0 30px rgba(255, 255, 255, 0.6),
                    0 0 45px rgba(255, 255, 255, 0.4);
            }

            50% {
                box-shadow: 0 0 25px rgba(255, 255, 255, 1),
                    0 0 50px rgba(255, 255, 255, 0.7),
                    0 0 75px rgba(255, 255, 255, 0.5);
            }
        }

        .youtube-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            display: none;
            border-radius: 12px;
        }

        .youtube-container:hover iframe {
            display: block;
        }

        .youtube-container:hover .youtube-thumbnail,
        .youtube-container:hover .youtube-play {
            display: none;
        }
    </style>
</head>

<body>

    <div class="youtube-container" data-video-id="z6TFfcsBOXQ">
        <!-- Placeholder for the thumbnail -->
        <img class="youtube-thumbnail" src="" alt="YouTube Thumbnail">
        <div class="youtube-play"></div>
        <!-- Placeholder for the YouTube video -->
        <iframe
            src=""
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>

    <script>
        // Get all YouTube containers on the page
        document.querySelectorAll('.youtube-container').forEach(container => {
            const videoId = container.getAttribute('data-video-id');

            // Set the thumbnail image
            const thumbnail = container.querySelector('.youtube-thumbnail');
            thumbnail.src = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;

            // Set the iframe src when hovered
            const iframe = container.querySelector('iframe');
            iframe.src = `https://www.youtube.com/embed/${videoId}?rel=0&autoplay=1&mute=1`;
        });
    </script>

</body>

</html>