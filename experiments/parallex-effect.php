<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alert on Position</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      height: 200vh;
      /* Simulate content for scrolling */
      background: #f4f4f4;
    }

    .spacer {
      height: 150vh;
      /* Content before the section */
      background: #eaeaea;
    }

    .alert-section {
      height: 100px;
      background: linear-gradient(to bottom, #6a11cb, #2575fc);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5rem;
    }
  </style>
</head>

<body>
  <div class="spacer">Scroll down to see the alert</div>

  <div class="alert-section" id="alertSection">
    Watch for the alert!
  </div>

  <div class="spacer">More content below</div>

  <script>
    const alertSection = document.getElementById('alertSection');

    window.addEventListener('scroll', () => {
      const sectionTop = alertSection.getBoundingClientRect().top;

      if (sectionTop <= 70) {
        alert('The section has reached -70px from the top of the viewport!');
        // Remove the event listener after the alert to prevent multiple triggers
        // window.removeEventListener('scroll', arguments.callee);
      }
    });
  </script>
</body>

</html>