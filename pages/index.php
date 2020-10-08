<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <!-- Animation AOS Init import -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Fontawesome import -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- SEO/SERP -->
    <title>KB Creative | Webdesign and Development</title>
    <meta name="description" content="Agency in Amsterdam that creates and designs full-stack web applications. With a broad skill set ranging from
    design, development, SEO and much more!">
    <meta name="keywords" content="Webdesign agency, build website">
    <meta name="author" content="KB Creative">
    <link rel="icon" href="../img/logo/favicon-kb-creative.png" />
</head>

<body>

    <?php include '../components/header.php' ?>

    <section id="home">
        <div class="container" data-aos="fade-right" data-aos-duration="900">
            <div class="row">
                <div class="column">
                    <h1 class="heading"><span style="border-bottom: 5px solid #4a90e2; line-height: 1.8em;">KB
                            Creative</span> <br> Create &
                        Design Web Solutions </h1>
                    <p>Agency in Amsterdam that creates and designs full-stack web applications. With a broad skill set
                        ranging from
                        design, development, SEO and much more!</p>
                    <a href="#contact" class="primary-btn">Get in touch</a>
                </div>
                <div class="column">
                    <img src="../img/illustrations/illu-dev-design.png" alt="Development image" height="350" style="float: right;">
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container" data-aos="fade-right" data-aos-duration="900">
            <h1 class="heading">Our service <span class="header-dot">.</span></h1>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="../img/icons/design-icon.png" loading="lazy" width="70" alt="Design Icon">
                        <h2 class="subheading">Design</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../img/icons/dev-icon.png" loading="lazy" width="70" alt="Development Icon">
                        <h2 class="subheading">Develop</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../img/icons/security-icon.png" loading="lazy" width="70" alt="Design Icon">
                        <h2 class="subheading">Fullstack</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="diagonal-content">
            <div class="container" data-aos="fade-right" data-aos-duration="900">
                <h1 class="heading">About us <span class="header-dot">.</span></h1>
                <div class="row">
                    <div class="column">
                        <h2 class="subheading">Young Professionals</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply
                            dummy
                            text of the printing and typesetting industry. <b> Lorem Ipsum
                                has </b> been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is
                            simply
                            dummy
                            text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s. </p>
                        <a href="#contact" class="primary-btn">Send mail</a>
                    </div>
                    <div class="column">
                        <img src="../img/illustrations/illu-about.png" loading="lazy" alt="Web Development computer" height="300" style="float: right;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container" data-aos="fade-right" data-aos-duration="900">
            <h1 class="heading">Contact <span class="header-dot">.</span></h1>
            <div class="row">
                <div class="column">
                    <p>Want to work together or have us create and design a fully customized website for
                        you? Don't hesitate to <b>get in contact</b> with us so we can start working on your digital
                        solution!</p><br>
                    <!-- Redirect to thank you page -->
                    <script type="text/javascript">
                        var submitted = false;
                    </script>
                    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='contact-finished.php';}"></iframe>

                    <!-- Form submit to Google Forms -->
                    <form target="hidden_iframe" onsubmit="submitted=true;" action="https://docs.google.com/forms/d/e/1FAIpQLSdG0Y9m3Blh4fOqaUwe5oO6DbhnFBQbTkQmXkFLpNCcx141Wg/formResponse" method="POST">

                        <label for="fname">Name <span class="required-form">*</span></label>
                        <input type="text" id="fname" name="entry.2005620554" placeholder="Your name.." required>

                        <label for="email">E-mail <span class="required-form">*</span></label>
                        <input type="text" name="entry.1045781291" id="email" placeholder="example@hotmail.com" required>

                        <label for="phone-number">Phone number <span class="required-form">*</span></label>
                        <input type="number" name="entry.1065046570" placeholder="0612345678" id="phone-number" required minlength="10" maxlength="10">

                        <label for="message">Message <span class="required-form">*</span></label>
                        <textarea rows="5" placeholder="Type your message here..." id="message" name="entry.190021963" required maxlength="500"></textarea>

                        <input type="submit" name="entry.839337160" value="Submit">

                    </form>
                </div>
                <div class="column">
                    <img src="../img/illustrations/illu-contact.png" loading="lazy" alt="Development image" class="illustration-img" height="400" style="float: right;">
                </div>
            </div>
        </div>
    </section>

    <?php include '../components/footer.php' ?>

</body>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();

    AOS.init({
        once: true, // whether animation should happen only once - while scrolling down
    });
</script>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function closeDropdown() {
        var x = document.getElementById("myLinks").style.display = "none";
    }
</script>

</html>