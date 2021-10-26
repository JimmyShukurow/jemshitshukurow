<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Jemshit</title>
</head>
<body>
    <div class="container">
    <div class="lang"><span> <a href="{{ env('APP_URL') }}"> en</a></span><span> <a href="{{ env('APP_URL') }}tr">tr</a> </span><span class="version"> <a href="https://jimmyshukurow.github.io/Resume-Static/">another version</a> </span></div>
        <div class=" header d-flex">
            <div class="name-job center-vertical">
                <div> 
                    <p class="center name"> JEMSHIT SHUKUROV </p>
                    <p class="center job">Laravel and Vue.js developer</p>
                </div>
            </div>
            <img src="{{asset('jemshit.JPG')}}" alt="JemshitPhoto" width="300">
        </div>
        <div class="about-me"> 
            <h2 class="center header-title"> About me </h2>
            <p><span class="title-name"> <em> Birth Date and Country:</em></span> <em class="data">11 Aprel 1990, Turkmenistan.</em> </p>
            <p><span class="title-name"> <em> Nationality:</em></span> <em class="data">Turkmen.</em> </p>
            <p><span class="title-name"> <em> Address:</em></span> <em class="data">İstanbul, Bahçelievler, Şirinevler Mahallesi Fevzi Çakmak 4. sokak 32. Daire 02</em> </p>
            <p><span class="title-name"> <em> Email:</em></span> <em class="data"> <a href="mailto:jimishukurow@gmail.com">jimishukurow@gmail.com</a> </em> </p>
            <p><span class="title-name"> <em> Mobile phone:</em></span> <em class="data"> +905433284593 </em> </p>
            <p><span class="title-name"> <em> Website:</em></span> <em class="data"> <a href="http://jemshitshukurov.online/">http://jemshitshukurov.online/</a></em> </p>
            <p><span class="title-name"> <em> Speaking Languages:</em></span> <em class="data"> English(good level), Russain(good level), Turkish(Super)</em> </p>
        </div>
        <div class="hobbies-and-professions"> 
            <h2 class="center header-title"> Hobbies and Professions </h2>
            <p><span class="title-name"> <em> Coding Languages:</em></span> <em class="data">Php, Java Core, Javafx, Leetcode competetions, 1C ...</em> </p>
            <p><span class="title-name"> <em> Web design:</em></span> <em class="data">Html, Css, Javascript, Jquery, Vue.js, Laravel, Spring boot</em> </p>
            <p><span class="title-name"> <em> 3D Animation:</em></span> <em class="data">Autodesk Maya, Pixologic Zbrush</em> </p>
            <p><span class="title-name"> <em> Besides these:</em></span> <em class="data"> chess, table tennis or ping pong , football, computer games</a> </em> </p>
        </div>
        <div class="education"> 
            <h2 class="center header-title"> Education </h2>
            <p><span class="title-name"> <em> 2003-2007:</em></span> <em class="data">Turgut-Özal Lisesi, International Physics Olympiad(IPHO) competitor. 2007 Asian Physics Olympiad, China Shanghai(Mansion)</em> </p>
            <p><span class="title-name"> <em> 2007-2012:</em></span> <em class="data">International Turkmen-Turkish University, Math and Computer Science. 2010 International Math Competitions among Universities, İran Tehran (Mansion)</em> </p>
        </div>
        <div class="experiences"> 
            <h2 class="center header-title"> My Experiences </h2>
            <p><span class="title-name"> <em> 2013-2016:</em></span> <em class="data">State school Physic, Math ,Computer science teacher</em> </p>
            <p><span class="title-name"> <em> 2018-2019:</em></span> <em class="data">Tried to start my own business, My Company (failure)</em> </p>
            <p><span class="title-name"> <em> 2019-2020:</em></span> <em class="data">Fen Bilimler Özel Kurumu, Geometry teacher</em> </p>
            <p><span class="title-name"> <em> 2020-2021:</em></span> <em class="data"><a href="http://perpaexpo.com" target="_blank"> Perpa expo</a>  Laravel and jquery user, Fullstack developer</em> </p>
            <p><span class="title-name"> <em> 2020-2021:</em></span> <em class="data"><a href="http://travelshopbooking.com" target="_blank"> Travelshop Turkey </a>  Laravel backend developer</em> </p>
        </div>

        <div class="projects"> 
            <h2 class="center header-title"> My Works </h2>
            <p><span class="projects-name"> <em> <a href="https://www.perpaexpo.com" target="_blank"> https://www.perpaexpo.com:</a></em></span> <em class="data"> site design and development (Laravel and jquery)</em> </p>
            <p><span class="projects-name"> <em> <a href="https://www.perpaotomasyon.com" target="_blank"> https://www.perpaotomasyon.com:</a></em></span> <em class="data">site design</em> </p>
            <p><span class="projects-name"> <em> <a href="http://turkmenistanbul.com" target="_blank">http://turkmenistanbul.com</a> :</em></span> <em class="data">site design and development</em> </p>
            <p><span class="projects-name"> <em> <a href="https://github.com/JimmyShukurow" target="_blank">https://github.com/JimmyShukurow</a> :</em></span> <em class="data">github page</em> </p>
            <h2 class="center header-title"> Little works </h2>
            <p><span class="projects-name"> <em> <a href="https://jimmyshukurow.github.io/Vuex/" target="_blank"> Adopt-pet:</a></em></span> <em class="data"> little project in Vue.js</em> </p>
            <p><span class="projects-name"> <em> <a href="https://jimmyshukurow.github.io/VueProject/" target="_blank"> Quiz app:</a></em></span> <em class="data"> another little project in Vue.js</em> </p>
            
        </div>
        <div class="references"> 
            <h2 class="center header-title"> References </h2>
            <p><span class="title-name"> <em> Bayram :</em></span> <em class="data"> Lead developer in Travelshop Turkey  <br> &nbsp; Mobile phone:+90 552 848 32 38 </em>  </p>
            <p><span class="title-name"> <em> Yusuf :</em></span> <em class="data"> React developer  <br> &nbsp; Mobile phone:+90 501 317 74 76 </em>  </p>
            <p><span class="title-name"> <em> Tolga :</em></span> <em class="data"> Digital marketing developer <br> &nbsp; Mobile phone:+90 531 080 79 89 </em>  </p>

        </div>

      

</body>
</html>