<?php
    
    $conn= new mysqli("31.11.38.20","Sql1911704","Ferrara07@","Sql1911704_1");
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12 L12 3 L21 12" /> <path d="M5 12 V21 H19 V12" /> <rect x="10" y="16" width="4" height="5" />
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
                        <img src="img/icon/cpp.png">
                        <span>C++</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/csharp.png">
                        <span>C#</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/javs.png">
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
                        <img src="img/icon/sql.png">
                        <span>SQL</span>
                    </div>
                    <!-- <div class="logo-item">
                        <img src="img/icon/UR.png">
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
                        <img src="img/icon/js.png">
                        <span>Java Script</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/dart.png">
                        <span>Dart | Flutter</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/firebase.png">
                        <span>Firebase</span>
                    </div>
                    <div class="logo-item">
                        <img src="img/icon/laravel.png">
                        <span>Laravel</span>
                    </div>
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