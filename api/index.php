<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Web Developer Portfolio</title>

<style>
    /* =========================
       RESET
    ========================= */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: Helvetica;
    }

    :root {
        --bg: #080b12;
        --bg-light: #0f1420;
        --card: rgba(255, 255, 255, 0.06);
        --border: rgba(255, 255, 255, 0.1);
        --text: #f5f7fa;
        --text-light: #aab3c2;
        --blue: #00aaff;
        --blue-dark: #0077ff;
    }

    body {
        font-family: Arial, sans-serif;
        background: var(--bg);
        color: var(--text);
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* =========================
       NAVBAR
    ========================= */
    nav {
        width: 100%;
        padding: 18px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;

        position: sticky;
        top: 0;
        z-index: 1000;

        background: rgba(8, 11, 18, 0.75);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);

        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    nav h2 {
        color: white;
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    nav h2::first-letter {
        color: var(--blue);
    }

    nav ul {
        display: flex;
        list-style: none;
        gap: 30px;
    }

    nav ul li a {
        position: relative;

        color: #dce3ec;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;

        transition: 0.3s ease;
    }

    nav ul li a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -7px;

        width: 0;
        height: 2px;

        background: var(--blue);
        transition: 0.3s ease;
    }

    nav ul li a:hover {
        color: var(--blue);
    }

    nav ul li a:hover::after {
        width: 100%;
    }

    /* =========================
       HOME
    ========================= */
    #home {
        min-height: 92vh;

        display: flex;
        justify-content: center;
        align-items: center;

        text-align: center;

        position: relative;
        overflow: hidden;

        background:
            radial-gradient(
                circle at 50% 40%,
                rgba(0, 170, 255, 0.15),
                transparent 35%
            ),
            var(--bg);
    }

    /* Decorative glow */
    #home::before {
        content: "";
        position: absolute;

        width: 400px;
        height: 400px;

        background: rgba(0, 119, 255, 0.12);
        border-radius: 50%;

        filter: blur(100px);

        top: 10%;
        left: -150px;
    }

    #home::after {
        content: "";
        position: absolute;

        width: 350px;
        height: 350px;

        background: rgba(0, 170, 255, 0.1);
        border-radius: 50%;

        filter: blur(100px);

        bottom: -100px;
        right: -100px;
    }

    #home > div {
        position: relative;
        z-index: 2;
    }

    #home h1 {
        font-size: clamp(40px, 6vw, 70px);
        line-height: 1.1;
        margin-bottom: 20px;
        font-weight: 800;
        letter-spacing: -2px;
    }

    #home span {
        display: block;

        color: var(--blue);

        background: linear-gradient(
            90deg,
            #00aaff,
            #0077ff
        );

        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    #home p {
        font-size: 21px;
        color: var(--text-light);
        margin-bottom: 35px;
        letter-spacing: 1px;
    }

    /* =========================
       BUTTON
    ========================= */
    .btn {
        display: inline-block;

        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-dark)
        );

        color: white;

        padding: 14px 30px;

        text-decoration: none;

        border-radius: 8px;

        font-weight: 600;

        box-shadow:
            0 10px 30px rgba(0, 136, 255, 0.25);

        transition: 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-4px);

        box-shadow:
            0 15px 40px rgba(0, 136, 255, 0.4);
    }

    /* =========================
       SECTIONS
    ========================= */
    section {
        padding: 100px 8%;
    }

    section h2 {
        text-align: center;

        font-size: 38px;

        margin-bottom: 55px;

        font-weight: 700;
    }

    section h2::after {
        content: "";

        display: block;

        width: 50px;
        height: 3px;

        background: var(--blue);

        margin: 12px auto 0;

        border-radius: 10px;
    }

    /* =========================
       ABOUT
    ========================= */
    #about {
        background: var(--bg-light);
    }

    .about {
        max-width: 800px;

        margin: auto;

        text-align: center;

        color: var(--text-light);

        font-size: 18px;

        line-height: 1.9;

        padding: 35px;

        background: var(--card);

        border: 1px solid var(--border);

        border-radius: 15px;

        backdrop-filter: blur(10px);

        transition: 0.3s ease;
    }

    .about:hover {
        border-color: rgba(0, 170, 255, 0.3);

        transform: translateY(-5px);
    }

    /* =========================
       SKILLS
    ========================= */
    .skills {
        display: flex;

        justify-content: center;

        gap: 20px;

        flex-wrap: wrap;
    }

    .skill {
        min-width: 150px;

        padding: 25px 35px;

        text-align: center;

        background: var(--card);

        border: 1px solid var(--border);

        border-radius: 12px;

        backdrop-filter: blur(10px);

        transition: all 0.3s ease;

        cursor: default;
    }

    .skill h3 {
        font-size: 17px;
        font-weight: 600;
    }

    .skill:hover {
        transform: translateY(-8px);

        border-color: var(--blue);

        box-shadow:
            0 10px 30px rgba(0, 170, 255, 0.15);

        color: var(--blue);
    }

    /* =========================
       PROJECTS
    ========================= */
    #projects {
        background: var(--bg-light);
    }

    .projects {
        display: flex;

        justify-content: center;

        gap: 25px;

        flex-wrap: wrap;
    }

    .project {
        background: var(--card);

        width: 300px;

        padding: 30px;

        border-radius: 15px;

        border: 1px solid var(--border);

        backdrop-filter: blur(10px);

        transition: 0.3s ease;
    }

    .project:hover {
        transform: translateY(-8px);

        border-color: rgba(0, 170, 255, 0.4);

        box-shadow:
            0 15px 40px rgba(0, 0, 0, 0.3);
    }

    .project h3 {
        margin-bottom: 12px;

        color: white;

        font-size: 20px;
    }

    .project p {
        color: var(--text-light);

        line-height: 1.7;
    }

    /* =========================
       CONTACT
    ========================= */
    .contact {
        max-width: 600px;

        margin: auto;
    }

    .contact input,
    .contact textarea {
        width: 100%;

        padding: 15px 18px;

        margin-bottom: 18px;

        border: 1px solid var(--border);

        border-radius: 8px;

        background: rgba(255, 255, 255, 0.05);

        color: white;

        outline: none;

        font-size: 15px;

        transition: 0.3s ease;
    }

    .contact input:focus,
    .contact textarea:focus {
        border-color: var(--blue);

        box-shadow:
            0 0 0 3px rgba(0, 170, 255, 0.1);
    }

    .contact textarea {
        height: 150px;

        resize: vertical;
    }

    .contact button {
        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-dark)
        );

        color: white;

        border: none;

        padding: 14px 30px;

        border-radius: 8px;

        cursor: pointer;

        font-size: 15px;

        font-weight: 600;

        transition: 0.3s ease;
    }

    .contact button:hover {
        transform: translateY(-3px);

        box-shadow:
            0 10px 30px rgba(0, 170, 255, 0.3);
    }

    /* =========================
       FOOTER
    ========================= */
    footer {
        background: #05070b;

        color: #8c96a5;

        text-align: center;

        padding: 25px;

        border-top: 1px solid var(--border);

        font-size: 14px;
    }

    /* =========================
       SCROLLBAR
    ========================= */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--bg);
    }

    ::-webkit-scrollbar-thumb {
        background: #263244;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--blue);
    }

    /* =========================
       MOBILE
    ========================= */
    @media (max-width: 700px) {

        nav {
            flex-direction: column;

            gap: 15px;

            padding: 18px 5%;
        }

        nav h2 {
            font-size: 19px;
        }

        nav ul {
            gap: 18px;
        }

        nav ul li a {
            font-size: 14px;
        }

        #home {
            min-height: 85vh;

            padding: 40px 20px;
        }

        #home h1 {
            font-size: 42px;

            letter-spacing: -1px;
        }

        #home p {
            font-size: 18px;
        }

        section {
            padding: 75px 5%;
        }

        section h2 {
            font-size: 32px;
        }

        .skill {
            width: 100%;
        }

        .project {
            width: 100%;
        }

        .about {
            padding: 25px;
            font-size: 16px;
        }
    }
</style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <h2>Iyad Chentouf Portfolio</h2>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="/modules.html">Modules</a></li>
        </ul>

    </nav>


    <!-- HOME -->
    <section id="home">

        <div>

            <h1>Hello, I'm <span>Iyad Chentouf</span></h1>

            <p>Web Developer</p>

            <a href="/modules.html" class="btn">
                View My Work
            </a>

        </div>

    </section>


    <!-- ABOUT -->
    <section id="about">

        <h2>About Me</h2>

        <div class="about">

            <p>
                Hello! I'm a passionate Web Developer interested in
                creating modern, responsive and user-friendly websites.
                I enjoy developing web applications and learning new
                technologies.
            </p>

        </div>

    </section>


    <!-- SKILLS -->
    <section id="skills">

        <h2>My Skills</h2>

        <div class="skills">

            <div class="skill">
                <h3>HTML</h3>
            </div>

            <div class="skill">
                <h3>CSS</h3>
            </div>

            <div class="skill">
                <h3>PHP</h3>
            </div>

            <div class="skill">
                <h3>JavaScript</h3>
            </div>

            <div class="skill">
                <h3>MySQL</h3>
            </div>

        </div>

    </section>







    <!-- FOOTER -->
    <footer>

        <p>
            © <?php echo date("Y"); ?> PACIZIO. All rights reserved.
        </p>

    </footer>

</body>
</html>
```