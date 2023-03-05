class Welcome {
    constructor() {
        this.#spawn_planets();
        this.#spawn_stars();
        this.#on_planet_click_create_parallax();

        $(".flip-card").modalVideo();

        $('.particle__container').on('click', function(e) {
            explode(e.pageX, e.pageY);
          })
          
          // explosion construction
          function explode(x, y) {
            var particles = 15,
              // explosion container and its reference to be able to delete it on animation end
              explosion = $('<div class="explosion"></div>');
          
            // put the explosion container into the body to be able to get it's size
            $('body').append(explosion);
          
            // position the container to be centered on click
            explosion.css('left', x - explosion.width() / 2);
            explosion.css('top', y - explosion.height() / 2);
          
            for (var i = 0; i < particles; i++) {
              // positioning x,y of the particle on the circle (little randomized radius)
              var x = (explosion.width() / 2) + rand(80, 150) * Math.cos(2 * Math.PI * i / rand(particles - 10, particles + 10)),
                y = (explosion.height() / 2) + rand(80, 150) * Math.sin(2 * Math.PI * i / rand(particles - 10, particles + 10)),
                color = rand(0, 255) + ', ' + rand(0, 255) + ', ' + rand(0, 255), // randomize the color rgb
                  // particle element creation (could be anything other than div)
                elm = $('<div class="particle" style="' +
                  'background-color: rgb(' + color + ') ;' +
                  'top: ' + y + 'px; ' +
                  'left: ' + x + 'px"></div>');
          
              if (i == 0) { // no need to add the listener on all generated elements
                // css3 animation end detection
                elm.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
                  explosion.remove(); // remove this explosion container when animation ended
                });
              }
              explosion.append(elm);
            }
          }
          
          // get random number between min and max value
          function rand(min, max) {
            return Math.floor(Math.random() * (max + 1)) + min;
          }




    }

    #spawn_planets() {
        let counter = 0;
        const asteroid_id = ['c', 'cpp', 'dart', 'php', 'java', 'javascript', 'python', 'ruby', 'mysql', 'docker', 'jira', 'git', 'codeigniter', 'wordpress', 'nodejs', 'rails'];
        
        let planet_spawner = setInterval(function () {
            const container = document.createElement("div");
            container.setAttribute("class", "technologies-asteroid");
            container.setAttribute("id", "technologies-asteroid" + asteroid_id[counter]);

            const planet = document.getElementById("planet");
            planet.appendChild(container);
            
            const img = document.createElement("div");
            img.setAttribute("id", asteroid_id[counter]);

            const my_container = document.getElementById("technologies-asteroid" + asteroid_id[counter]);
            my_container.appendChild(img);
            
            if (++counter == 16) {
                clearInterval(planet_spawner);
            }
        }, 378);
    }
    
    #on_planet_click_create_parallax() {
        document.addEventListener("mousemove", parallax);
        const elem = document.querySelector("#stars");
        // Magic happens here
        function parallax(e) {
            let _w = window.innerWidth/2;
            let _h = window.innerHeight/2;
            let _mouseX = e.clientX;
            let _mouseY = e.clientY;
            let _depth1 = `${50 - (_mouseX - _w) * 0.005}%`;
            let _depth2 = `${0 - (_mouseY - _h) * 0.005}%`;
            elem.style.left = _depth1;
            elem.style.top = _depth2;
        }
    }

    #spawn_stars() {
        // DOM selectors
        const stars = document.getElementById('stars');
        const starsCtx = stars.getContext('2d');

        // global variables
        let screen, starsElements, starsParams = { speed: 2, number: 300, extinction: 4 };

        // run stars
        setupStars();
        updateStars();

        // update stars on resize to keep them centered
        window.onresize = function() {
            setupStars();
        };

        // star constructor
        function Star() {
            this.x = Math.random() * stars.width;
            this.y = Math.random() * stars.height;
            this.z = Math.random() * stars.width;

            this.move = function() {
                this.z -= starsParams.speed;
                if (this.z <= 0) {
                    this.z = stars.width;
                }
            };

            this.show = function() {
                let x, y, rad, opacity;
                x = (this.x - screen.c[0]) * (stars.width / this.z);
                x = x + screen.c[0];
                y = (this.y - screen.c[1]) * (stars.width / this.z);
                y = y + screen.c[1];
                rad = stars.width / this.z;
                opacity = (rad > starsParams.extinction) ? 1.5 * (2 - rad / starsParams.extinction) : 1;

                starsCtx.beginPath();
                starsCtx.fillStyle = "rgba(255, 255, 255, " + opacity + ")";
                starsCtx.arc(x, y, rad, 0, Math.PI * 2);
                starsCtx.fill();
            }
        }

        // setup <canvas>, create all the starts
        function setupStars() {
            screen = {
                w: window.innerWidth,
                h: window.innerHeight,
                c: [ window.innerWidth * 0.5, window.innerHeight * 0.5 ]
            };
            window.cancelAnimationFrame(updateStars);
            stars.width = screen.w;
            stars.height = screen.h;
            starsElements = [];
            for (let i = 0; i < starsParams.number; i++) {
                starsElements[i] = new Star();
            }
        }

        // redraw the frame
        function updateStars() {
            starsCtx.fillStyle = "black";
            starsCtx.fillRect(0, 0, stars.width, stars.height);
            starsElements.forEach(function (s) {
                s.show();
                s.move();
            });
            window.requestAnimationFrame(updateStars);
        }
    }
}

$(() => {
    const WELCOME = new Welcome;
});