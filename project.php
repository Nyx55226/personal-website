<?php

    $conn= new mysqli("31.11.38.20","Sql1911704","Ferrara07@","Sql1911704_1");
    $str_="SELECT view from views where id_page='project'";
    $res=$conn->query($str_);
    if($res->num_rows>0){
        $r=$res->fetch_assoc();
        $indice=$r['view']+1;
        $str_="UPDATE views set view=$indice where id_page='project'";
        $conn->query($str_);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title data-key="title.title_project"></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="img/global/icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css">
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
                <button class="button top-btn" id="home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 12 L12 3 L21 12" /> <path d="M5 12 V21 H19 V12" /> <rect x="10" y="16" width="4" height="5" />
                    </svg>
                    <span>Home</span>
                </button>
            </div>
            <div>
                <button class="button bottom-btn" id="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="4" y1="20" x2="4" y2="10"/> <line x1="10" y1="20" x2="10" y2="4"/>
                        <line x1="16" y1="20" x2="16" y2="14"/> <line x1="22" y1="20" x2="22" y2="8"/>
                    </svg>
                    <span data-key="contact"></span>
                </button>
            </div>
        </div>
        <main>
            <section class="section-title">
                <h2 data-key="project_2"></h2>
                <h3 data-key="descProject"></h3>
            </section>
            <section class="projects-section">
                <div class="btn-projects">
                    <button class="filter-btn" id="btn-reset">
                        <svg fill="#cfd2d6" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"  width="20" height="20"><g id="SVGRepo_bgCarrier"  stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M960 0v213.333c411.627 0 746.667 334.934 746.667 746.667S1371.627 1706.667 960 1706.667 213.333 1371.733 213.333 960c0-197.013 78.4-382.507 213.334-520.747v254.08H640V106.667H53.333V320h191.04C88.64 494.08 0 720.96 0 960c0 529.28 430.613 960 960 960s960-430.72 960-960S1489.387 0 960 0" fill-rule="evenodd"></path> </g></svg>
                        <span id="span"></span>
                    </button>
                    <button class="filter-btn" id="btn-java">
                        <span>Java</span>
                    </button>
                    <button class="filter-btn" id="btn-html">
                        <span>HTML|CSS</span>
                    </button>
                    <button class="filter-btn" id="btn-C++">
                        <span>C++</span>
                    </button>
                    <button class="filter-btn" id="btn-flutter">
                        <span>Flutter</span>
                    </button>
                    <!-- <button class="filter-btn" id="btn-laravel">
                        <span>Laravel</span>
                    </button> -->
                </div>
                <!-- PROGETTI -->
                <div class="projects-container">
                    <div class="project" data-type="java">
                        <h4>TRIS</h4>
                        <img src="img/lavori/java_tris.png" style="height: 300px;">
                        <p data-key="projectJobs.tris"></p>
                        <h3><span data-key="LanguageUsed"></span>Java</h3>
                        <button data-key="buttonRepository" id="buttonRepositoryTris"></button> 
                    </div>
                    <div class="project" data-type="html/php">
                        <h4>Radice Christmas Harmony</h4>
                        <img src="img/lavori/Radice_C_H.png" style="height: 300px;">
                        <p data-key="projectJobs.radice"></p>
                        <h3><span data-key="LanguageUsed"></span>HTML/PHP</h3>
                        <button data-key="buttonRepository" id="buttonRepositoryRadice"></button> 
                    </div>
                    <div class="project" data-type="cpp">
                        <h4>Battaglia Navale</h4>
                        <img src="img/lavori/battaglia.png" style="height: 300px;">
                        <p data-key="projectJobs.battaglia"></p>
                        <h3><span data-key="LanguageUsed"></span>C++</h3>
                        <button data-key="buttonRepository" id="buttonRepositorybattaglia"></button> 
                    </div>
                    <div class="project" data-type="java">
                        <h4>Magic Research</h4>
                        <img src="img/lavori/Java_MR.png" style="height: 300px;">
                        <p data-key="projectJobs.MagicalR"></p>
                        <h3><span data-key="LanguageUsed"></span>Java</h3>
                        <button data-key="buttonRepository" id="buttonRepositoryMR"></button> 
                    </div>
                    <div class="project" data-type="flutter">
                        <h4>Study-Swap</h4>
                        <img src="img/lavori/study_swap.png" style="height: 300px;">
                        <p data-key="projectJobs.study_swap"></p>
                        <h3><span data-key="LanguageUsed"></span>Flutter && Dart</h3>
                        <button data-key="buttonRepository" id="buttonRepositorystudy-swap"></button> 
                    </div>
                    <div class="project" data-type="java">
                        <h4>Forza 4</h4>
                        <img src="img/lavori/Java_F4.png" style="height: 300px;">
                        <p data-key="projectJobs.forza4"></p>
                        <h3><span data-key="LanguageUsed"></span>Java</h3>
                        <button data-key="buttonRepository" id="buttonRepositoryF4"></button> 
                    </div>
                    <div class="project" data-type="html/php">
                        <h4>Personal website</h4>
                        <img src="img/global/icon.png" style="height: 300px;">
                        <p data-key="projectJobs.portafolio"></p>
                        <h3><span data-key="LanguageUsed"></span>HTML/PHP</h3>
                        <button data-key="buttonRepository" id="buttonRepositoryPersonalP"></button> 
                    </div>
                </div>
            </section>
        </main>
    </body>
    <script src="script.js"></script>
</html>