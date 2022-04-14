
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
        <?php 

        include('config.php')

        ?>
    <title> <?php echo $siteTitle ?> </title>
</head>
<body>
<div id="particles-js"></div>
<div class="enter__site" id="enterSite">
    <button onclick="play()" id="enterSiteBtn">
        enter at risk
    </button>
</div>
<div class="content">
    <h1>faygo on top</h1>
    <div class="links">
    <ul>
        <li>
            <a target="_blank" rel="noopener noreferrer" href="<?php echo $discordLink ?>">discord</a>
        </li>
        <li>
            <a target="_blank" rel="noopener noreferrer" href="<?php echo $doxBin ?>">doxbin</a>
        </li>
        <li>
            <a target="_blank" rel="noopener noreferrer" href="<?php echo $telegram ?>">telegram</a>
        </li>
        <li>
            <a target="_blank" rel="noopener noreferrer"  href="<?php echo $ogu ?>">ogu</a>
        </li>
        <li>
            <a target="_blank" rel="noopener noreferrer" href="<?php echo $payments ?>">payments</a>
        </li>
    </ul>
    </div>

</div>

    

    
    <script type="text/javascript">
        const enterSiteBtn = document.querySelector('#enterSiteBtn')
        const enterSite = document.querySelector('#enterSite')
        enterSiteBtn.onclick = () => {
            enterSite.classList.add('active')
            console.log('test')

            setTimeout(function () {

                    document.getElementById("audioplayer").play();

            }, 50)
        }

    </script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 355,
                    "density": {
                        "enable": true,
                        "value_area": 789.1476416322727
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.48927153781200905,
                    "random": false,
                    "anim": {
                        "enable": true,
                        "speed": 0.2,
                        "opacity_min": 0,
                        "sync": false
                    }
                },
                "size": {
                    "value": 2,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 0.2,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "bubble"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 83.91608391608392,
                        "size": 1,
                        "duration": 3,
                        "opacity": 1,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
</script>
<audio id="audioplayer" src="blkkeu.mp3" type="audio/mpeg" loop="loop"> </audio>
<script type="text/javascript">


</script>
</body>
</html>
