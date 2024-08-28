<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO ABOUT THE OWNER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            background: rgb(233, 102, 102);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container{
            position: relative;
            width: 100%;
            max-width: 1000px;
            min-height: 1000px;
            background: rgb(228, 83, 83);
            margin: 50px;
            display: grid;
            grid-template-columns: 1fr 2fr;
            box-shadow: 0 35px 55px rgba(0,0,0,0.1);
        }
        .container .left_Side{
            position: relative;
            background: lightsalmon;
            padding: 40px;
        }
        .profileText{
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid rgb(255,255,255,0.2);
        }
        .profileText .imgBx{
            position: relative;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
        }
        .profileText .imgBx img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .profileText h2{
            color: #fff;
            font-size: 1.5em;
            margin-top: 20px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 600;
            line-height: 1.4em;
        }
        .profileText h2 span{
            font-size: 0.8em;
            font-weight: 300;
        }
        .contactInfo{
            padding-top: 40px;
        }
        .title{
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        .contactInfo ul{
            position: relative;
        }
        .contactInfo ul li{
            position: relative;
            list-style: none;
            margin: 10px 0;
            cursor: pointer;
        }
        .contactInfo ul li .icon{
            display: inline-block;
           width: 30px;
           font-size: 18px;
           color: black;
        }
        .contactInfo ul li span{
            color: #fff;
            font-weight: 300;
        }
        .contactInfo.education li{
            margin-bottom: 15px;
        }
        .contactInfo.education h5{
            color: black;
            font-weight: 500;
        }
        .contactInfo.education h4:nth-child(2){
            color: #fff;
            font-weight: 500;
        }
        .contactInfo.education h4{
            color: #fff;
            font-weight: 300;
        }
        .contactInfo.language .percent{
            position: relative;
            width: 100%;
            height: 6px;
            background: white;
            display: block;
            margin-top: 5px;
        }
        .contactInfo.language .percent div{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #1e333d;
        }
        .container .right_Side{
            position: relative;
            background: #fff;
            padding: 40px;
        }
        .about{
            margin-bottom: 50px;
        }
        .about:last-child{
            margin-bottom: 0;
        }
        .title2{
            color: rgb(49, 48, 48);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }
        p{
            color: #333;
        }
        .text h3{
            text-transform: uppercase;
            color: rgb(82, 81, 81);
            font-size: 20px;
        }
        .interest{
            margin-top: 50px;
        }
        .interest ul{
            display: grid; 
            grid-template-columns: repeat(3,1fr);
        }
        .interest ul li{
         list-style: none;
         color: #333;
         font-weight: 500;
         margin: 10px;
        }
        .interest ul li .fa{
            color: black;
            font-size: 18px;
            width: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="left_Side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="nino.jpg" width="250px" height="250px">
                </div>
                <h2>Niño Miguel L. Naje<br><span>3rd Year BS IT Student</span></h2>
            </div>

            <div class="contactInfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text">09997827314-09163793239</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text">ninonaje796@gmail.com</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
                        <span class="text">Niño Miguel Naje</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                        <span class="text">@nino_naje27</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text">P-4 Kilicao, Daraga, Albay</span>
                    </li>
                </ul>
            </div>

            <div class="contactInfo education">
                <h3 class="title">Education</h3>
                <ul>
                    <li>
                        <h5>2010 - 2016</h5>
                        <h4>Kilicao Elementary School</h4>
                    </li>
                    <li>
                        <h5>2016 - 2020</h5>
                        <h4>Junior High School Student at Daraga National High School</h4>
                    </li>
                    <li>
                        <h5>2020 - 2022</h5>
                        <h4>Accountancy, Business, and Management(ABM) strand</h4>
                        <h4>Senior High School Student at Daraga National High School</h4>
                    </li>
                    <li>
                        <h5>2022 - Present</h5>
                        <h4>Bachelor of Science in Information Technology(BS IT)</h4>
                        <h4>Bicol University</h4>
                    </li>
                </ul>
            </div>

            <div class="contactInfo language">
                <h3 class="title">Languages</h3>
                <ul>
                    <li>
                        <span class="text"> Tagalog </span>
                        <span class="percent">
                            <div style="width:70%"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text"> Daragueño </span>
                        <span class="percent">
                            <div style="width:80%"></div>
                        </span>
                    </li>
                    <li>
                        <span class="text"> English </span>
                        <span class="percent">
                            <div style="width:40%"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="right_Side">
            <div class="about">
                <h1 class="title2">Profile</h1>
                <p>Hello! I'm Nino Miguel Loria Naje, a passionate student at Bicol University. I lived in Purok 4, Kilicao, Daraga, Albay. 
                    Currently pursuing a B.S. in Information Technology, which has equipped me with valuable knowledge and skills in computers. 
                    When I'm not studying, you can often find me playing mobile games, playing basketball, exercising, and playing guitar, as I 
                    firmly believe in the importance of maintaining a balanced life. Exploring new experiences and knowledge is one of my 
                    greatest joys, and I'm always eager to embark on new adventures, whether it's through travel, reading, studying, or working.
                    <br><br>
                    I promise that, despite being a student, I have freshly acquired information or knowledge that I can use for your company. 
                    "Education is not the filling of a pail, but the lighting of a fire." - William Butler Yeats</p>
            </div>
            <div class="about">
                <h1 class="title2">Skills</h1>
                <div class="text">
                    <h3>Time Management</h3>
                    <p>Consistently meet project deadlines and effectively prioritize tasks to maximize productivity.</p><br>
                    <h3>Adaptability</h3>
                    <p>I am open to change and willing to learn new skills or adapt to new processes as the job demands.</p><br>
                    <h3>Communication Skills</h3>
                    <p>I exhibit strong verbal and written communication skills.</p><br>
                    <h3>Creativity</h3>
                    <p>I have creative and innovative thinking, which can be an asset in problem-solving and generating new ideas.</p><br>
                    <h3>Attention to Detail</h3>
                    <p>I pay attention to details and produce accurate work, especially if the job requires precision.</p><br>
                    <h3>Continuous Learning</h3>
                    <p>I am very willing to engage in ongoing learning and professional development to stay current in this field.</p>
                </div>
            </div>
        
            <div class="about interest">
                <h1 class="title2">Interests</h1>
                <ul>
                    <li><i class="fa fa-futbol-o" aria-hidden="true"></i> &nbsp Basketball</li>
                    <li><i class="fa fa-gamepad" aria-hidden="true"></i> &nbsp Mobile Games</li>
                    <li><i class="fa fa-volume-up" aria-hidden="true"></i> &nbsp Listen to music</li>
                    <li><i class="fa fa-music" aria-hidden="true"></i> &nbsp Playing Guitar</li>
                    <li><i class="fa fa-video-camera" aria-hidden="true"></i> &nbsp Anime</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
