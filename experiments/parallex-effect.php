<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inner Scroll on Sticky</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      height: 200vh; /* Simulate scrollable body content */
      background: #f4f4f4;
    }

    .spacer {
      height: 150vh; /* Content before the section */
      background: #eaeaea;
    }

    .sticky-section {
      position: relative;
      height: 50vh;
      width: 100%;
      background: linear-gradient(to bottom, #6a11cb, #2575fc);
      overflow: hidden; /* No overflow initially */
    }

    .scrolling-content {
      height: 100vh; /* Inner scrollable content */
      overflow-y: auto; /* Enable scroll only when necessary */
      padding: 20px;
      color: white;
      text-align: center;
    }

    .scrolling-content p {
      margin: 20px 0;
      font-size: 1.5rem;
    }
  </style>
</head>
<body>
  <div class="spacer">Scroll down to see the sticky section</div>

  <div class="sticky-section" id="stickySection">
    <div class="scrolling-content" id="scrollingContent">
      <p>Step 1: Welcome to the journey!</p>
      <p>Step 2: Keep scrolling...</p>
      <p>Step 3: You're doing great!</p>
      <p>Step 4: Almost there!</p>
      <p>Step 5: End of the journey!</p>
    </div>
  </div>

  <div class="spacer">More content below the sticky section</div>

  <script>
    const stickySection = document.getElementById('stickySection');
    const scrollingContent = document.getElementById('scrollingContent');

    window.addEventListener('scroll', () => {
      const sectionTop = stickySection.getBoundingClientRect().top;

      if (sectionTop <= -60) {
        // Lock body scrolling and enable inner scrolling
        document.body.style.overflow = 'hidden';
        scrollingContent.style.overflowY = 'auto';
      } else {
        // Reset to default behavior
        document.body.style.overflow = 'auto';
        scrollingContent.style.overflowY = 'hidden';
      }

      // Check if inner content is fully scrolled
      if (
        scrollingContent.scrollTop + scrollingContent.clientHeight >=
        scrollingContent.scrollHeight
      ) {
        // Re-enable body scrolling and disable inner scroll
        document.body.style.overflow = 'auto';
        scrollingContent.style.overflowY = 'hidden';
      }
    });
  </script>
</body>
</html>
