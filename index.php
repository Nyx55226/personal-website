<?php
    $env= parse_ini_file(__DIR__ . '/.env');

    define('DB_HOST', $env['Host']);
    define('DB_NAME', $env['dbName']);
    define('DB_USER', $env['UserName']);
    define('DB_PASS', $env['Password']);
    $conn= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $str_="SELECT view from views where id_page='index'";
    $res=$conn->query($str_);
    if($res->num_rows>0){
        $r=$res->fetch_assoc();
        $indice=$r['view']+1;
        $str_="UPDATE views set view=$indice where id_page='index'";
        $conn->query($str_);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.90">
        <title data-key="title.title_home"></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css">
        <link rel="icon" href="img/global/icon.png">
    </head>
    <body>
        <div>
            <div class="changel">
                <select id="changel">
                    <option value="it">Italiano</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div>
                <button class="button top-btn" id="contact">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2"/>
                        <path d="M2 7l10 6 10-6"/> <path d="M7 12h3"/> <path d="M7 15h6"/>
                    </svg>
                    <span data-key="contact"></span>
                </button>
            </div>
            <div>
                <button class="button bottom-btn" id="project">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" y1="20" x2="4" y2="10"/> <line x1="10" y1="20" x2="10" y2="4"/>
                        <line x1="16" y1="20" x2="16" y2="14"/> <line x1="22" y1="20" x2="22" y2="8"/>
                    </svg>
                    <span data-key="project"></span>
                </button>
            </div>
        </div>
        <main>
            <section class="hero-section">
                <div class="profile-circle">
                    <img src="img/global/avatar.png" class="profile-icon">
                    </div>
                <div class="about-me">
                    <h2 data-key="about-me.h2"></h2>
                    <h3 data-key="">Game Programmer | Full-Stack Developer</h3>
                    <p data-key="about-me.p1"></p>
                    <p data-key="about-me.p2"></p>
                    <p data-key="about-me.p3"></p>
                </div>
            </section>

            <section class="skills-section">
                <h2 data-key="skills"></h2>
                <div class="tech-logos">
                    <div class="logo-item">
                        <img src="img/icon/c++.png">
                        <span>C++</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/c-sharp.png">
                        <span>C#</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/java.png">
                        <span>Java</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/go.png">
                        <span>GO</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/python.png">
                        <span>Python</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/mysql.png">
                        <span>MySQL</span>
                    </div>
                    <!-- <div class="logo-item">
                        <img src="img/icon/Unreal.png">
                        <span>Unreal Engine</span>
                    </div> -->
                    <div class="logo-item">
                        <img src="img/icon/php.png">
                        <span>PHP</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/html.png">
                        <span>HTML</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/css.png">
                        <span>CSS</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/js.png">
                        <span>Java Script</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/dart.png">
                        <span>Dart</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/flutter.png">
                        <span>Flutter</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/firebase.png">
                        <span>Firebase</span>
                    </div>
                    <!-- <div class="logo-item">
                        <img src="img/icon/laravel.png">
                        <span>Laravel</span>
                    </div> -->
                    <!-- <div class="logo-item">
                        <img src="img/icon/blender.png">
                        <span>Blender</span>
                    </div> -->
                </div>
            </section>
        </main>
    </body>
    <script src="script.js"></script>
</html>