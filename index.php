<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fca44159be.js" crossorigin="anonymous"></script>

    <script>
        function openPDF() {
            var pdfUrl = './Resume.pdf';
            window.open(pdfUrl, '_blank');
        }
    </script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="../new/html/navbar.html">
    <link rel="stylesheet" href="../new/html/hero.html">
    <link rel="stylesheet" href="../new/html/about.html">
    <link rel="stylesheet" href="../new/html/services.html">
    <link rel="stylesheet" href="../new/html/contact.html">
    <link rel="stylesheet" href="../new/html/footer.html">

</head>

<body>

    <?php include '../new/html/navbar.html' ?>
    <?php include '../new/html/hero.html' ?>
    <?php include '../new/html/about.html' ?>
    <?php include '../new/html/services.html' ?>
    <?php include '../new/html/contact.html' ?>
    <?php include '../new/html/footer.html' ?>

    <button class="scroll-to-top" id="scrollToTop" onclick="scrollToTop()">&and;</button>
    <style>
        button {
            background-color: #ff5722;
        }


        .scroll-to-top {
            position: fixed;
            bottom: 2vw;
            right: 2vw;
            display: none;
            padding: 10px 20px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <script>
        // Function to show/hide the "Scroll to Top" button
        function toggleScrollToTopButton() {
            var scrollToTopButton = document.getElementById("scrollToTop");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopButton.style.display = "block";
            } else {
                scrollToTopButton.style.display = "none";
            }
        }

        // Function to scroll to the top of the page with smooth scrolling
        function scrollToTop() {
            var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
            if (currentScroll > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, currentScroll - currentScroll / 15);
            }
        }

        // Add a scroll event listener to toggle the button
        window.onscroll = function() {
            toggleScrollToTopButton();
        };
    </script>


</body>

</html>