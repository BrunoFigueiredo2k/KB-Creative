<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <!-- Animation AOS Init import -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Contact form submitted | KB Creative | Webdesign and Development</title>
    <link rel="icon" href="../img/logo/favicon-kb-creative.png" />
</head>

<body>

    <section>
        <div class="container">
            <div class="row" style="text-align: center;" data-aos="fade-down" data-aos-duration="900">
                <div class="column">
                    <img src="../img/logo/KB Creative.png" alt="Logo KB Creative">
                    <h1 class="heading">Contact form success!</h1>
                    <p class="p-thanks"><b>Thank you </b>for getting in contact with us. We will try
                        respond to your message as soon as possible!</p>
                    <a href="index.php" class="primary-btn">Back to home</a>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<style>
    .p-thanks {
        margin: 0 auto;
        width: 50%;
    }

    img {
        width: 35%;
    }

    @media(max-width: 767px) {
        .p-thanks {
            width: 90%;
        }

        img {
            padding-top: 12vh;
            width: 80%;
        }
    }
</style>

</html>