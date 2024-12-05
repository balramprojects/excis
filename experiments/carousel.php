<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .carousel-container {
            text-align: center;
            padding: 20px;
        }

        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin: 20px auto;
            max-width: 80%;
        }

        .carousel-track-container {
            overflow: hidden;
            width: 100%;
        }

        .carousel-track {
            display: flex;
            transition: transform 0.4s ease-in-out;
        }

        .carousel-card {
            flex: 0 0 calc(33.333% - 20px);
            /* Display 3 cards at a time with spacing */
            margin: 0 10px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: center;
        }

        .carousel-card img {
            width: 50px;
            margin-bottom: 10px;
        }

        .carousel-card h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .carousel-card p {
            font-size: 14px;
            color: #555;
        }

        .carousel-btn {
            background: #fff;
            border: none;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            font-size: 20px;
            height: 40px;
            width: 40px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }

        .prev-btn {
            left: 0;
        }

        .next-btn {
            right: 0;
        }

        @media (max-width: 768px) {
            .carousel-card {
                flex: 0 0 calc(50% - 20px);
                /* Show 2 cards at a time on smaller screens */
            }

            .carousel-btn {
                font-size: 16px;
                height: 30px;
                width: 30px;
            }
        }

        @media (max-width: 480px) {
            .carousel-card {
                flex: 0 0 calc(100% - 20px);
                /* Show 1 card at a time on very small screens */
            }
        }
    </style>
</head>

<body>
    <section class="carousel-container">
        <h2>Services we've excelled in</h2>
        <p>Our proven solutions are tailored to meet the unique needs of businesses across industries worldwide.</p>
        <div class="carousel">
            <button class="carousel-btn prev-btn">❮</button>
            <div class="carousel-track-container">
                <ul class="carousel-track">
                    <li class="carousel-card">
                        <img src="oil-gas-icon.png" alt="Oil & Gas">
                        <h3>Oil & Gas</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.</p>
                    </li>
                    <li class="carousel-card">
                        <img src="banking-icon.png" alt="Banking & Financial">
                        <h3>Banking & Financial</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.</p>
                    </li>
                    <li class="carousel-card">
                        <img src="retail-icon.png" alt="Retail">
                        <h3>Retail</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.</p>
                    </li>
                    <li class="carousel-card">
                        <img src="health-icon.png" alt="Healthcare">
                        <h3>Healthcare</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.</p>
                    </li>
                </ul>
            </div>
            <button class="carousel-btn next-btn">❯</button>
        </div>
    </section>
    <script src="script.js"></script>

    <script>
        const track = document.querySelector('.carousel-track');
        const prevButton = document.querySelector('.prev-btn');
        const nextButton = document.querySelector('.next-btn');
        const cards = Array.from(track.children);

        // Get the card width dynamically
        let cardWidth = cards[0].getBoundingClientRect().width;
        let currentIndex = 0;

        // Arrange cards in a row
        function arrangeCards() {
            cardWidth = cards[0].getBoundingClientRect().width; // Update card width on resize
            cards.forEach((card, index) => {
                card.style.left = cardWidth * index + 'px';
            });
        }

        function moveToSlide(index) {
            track.style.transform = `translateX(-${cardWidth * index}px)`;
            currentIndex = index;
        }

        // Event listeners for Prev and Next buttons
        nextButton.addEventListener('click', () => {
            if (currentIndex < cards.length - 3) {
                moveToSlide(currentIndex + 1);
            }
        });

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                moveToSlide(currentIndex - 1);
            }
        });

        // Adjust card arrangement on window resize
        window.addEventListener('resize', () => {
            arrangeCards();
            moveToSlide(currentIndex); // Adjust position after resizing
        });

        // Initial setup
        arrangeCards();
    </script>
</body>

</html>