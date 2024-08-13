<?php
/*
* This is use to display Footer
*/
?>
    <div class="footer-section">
      <div class="container">
        <div class="online-section">
          <div class="time-zone">
            <img src="https://new.tek2d.com/wp-content/uploads/2024/07/bi_globe.png" alt="">
            <span>
              Offline
            </span>
          </div>
          <p>
            Your company is ready for big moves<br>
            and we are here for it. Turn bold ideas<br>
            into an impactful brand.
          </p>
        </div>
        <div class="footer-text">
          <h6>
            Tek2d
          </h6>
        </div>
      </div>
    </div>
   

<script>
// video player secript 

function openFullscreen() {
    document.getElementById('fullscreenVideoContainer').style.display = 'flex';
    const video = document.getElementById('fullscreenVideo');
    video.play();
}

function closeFullscreen() {
    document.getElementById('fullscreenVideoContainer').style.display = 'none';
    const video = document.getElementById('fullscreenVideo');
    video.pause();
}

// video player script ends


//  slider script left 


var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    gap: 20,
    loop: true,
    direction: "horizontal",
    grabCursor: false,
    mousewheelControl: false,
    keyboardControl: false,
    loop: true, // Enable loop mode
    autoplay: {
        delay: false, // Delay between slides in milliseconds (3 seconds in this example)
        disableOnInteraction: false, // Allow manual navigation during autoplay
    },
    speed: 3000,
    //     navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
});


// slider script ends


// right slider script 


var swiper = new Swiper(".mySwipers", {
    slidesPerView: 3,
    gap: 20,
    loop: true,
    direction: "horizontal",
    grabCursor: false,
    mousewheelControl: false,
    keyboardControl: false,
    autoplay: {
        delay: 0, // Set to 0 for continuous scrolling
        disableOnInteraction: false, // Allow manual navigation during autoplay
        reverseDirection: true, // Set reverseDirection to true
    },
    speed: 3000,
});


//  right slider script end 

// slider client script 

var swiper = new Swiper(".mySwiperclient", {
    slidesPerView: 8,
    loop: true,
    direction: "horizontal",
    grabCursor: false,
    mousewheelControl: false,
    keyboardControl: false,
    loop: true, // Enable loop mode
    autoplay: {
        delay: false, // Delay between slides in milliseconds (3 seconds in this example)
        disableOnInteraction: false, // Allow manual navigation during autoplay
    },
    speed: 4000,
    //     navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
});


//  slider client script end 

//  slider script mobile 

var swiper = new Swiper(".mySwipermob", {
    slidesPerView: 2,
    loop: true,
    direction: "horizontal",
    grabCursor: false,
    mousewheelControl: false,
    keyboardControl: false,
    loop: true, // Enable loop mode
    autoplay: {
        delay: false, // Delay between slides in milliseconds (3 seconds in this example)
        disableOnInteraction: false, // Allow manual navigation during autoplay
    },
    speed: 4000,
    //     navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev",
    // },
});

//  slider script mobile ends 

document.addEventListener('DOMContentLoaded', function () {
    const paralexElements = document.querySelectorAll('#paralex');
    const aboutclientcardSection = document.querySelector('.aboutclientcard');
    const fixedHeight = 1000; // Fixed height for the section
    let animationStarted = false; // Flag to track animation start

    function centerElements() {
        paralexElements.forEach(el => {
            el.style.transform = 'translate(-50%, -50%)';
            el.style.left = '50%';
            el.style.top = '50%';
        });
    }

    function spreadElements(progress) {
        const screenWidth = window.innerWidth;
        const screenHeight = fixedHeight; // Use the fixed height
        paralexElements.forEach((el, index) => {
            const angle = (index / paralexElements.length) * 2 * Math.PI;
            const x = (screenWidth / 3.2) * Math.cos(angle) * progress;
            const y = (screenHeight / 3) * Math.sin(angle) * progress;
            el.style.transform = `translate(${x}px, ${y}px)`;
            el.style.left = '42.5%';
            el.style.top = '41%';
        });
    }

    function handleScroll() {
        const scrollTop = window.scrollY;
        const sectionTop = aboutclientcardSection.offsetTop;
        const windowHeight = window.innerHeight;

        if (scrollTop + windowHeight > sectionTop - 50 && scrollTop < sectionTop + fixedHeight) {
            const distanceInSection = Math.min(scrollTop + windowHeight - sectionTop + 50, fixedHeight);
            const progress = Math.min(distanceInSection / fixedHeight, 1);
            spreadElements(progress);
            animationStarted = true;
        } else if (scrollTop + windowHeight <= sectionTop - 50) {
            centerElements();
            animationStarted = false; // Reset animation flag when out of view
        } else if (scrollTop >= sectionTop + fixedHeight) {
            spreadElements(1); // Ensure elements are fully spread when at bottom
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Call once to set initial positions
});








// about section end client card


// java for brikes


// Function to initialize animation and interaction
function initAnimation() {
    const collection = document.getElementsByClassName("breakes");
    if (collection.length === 0) {
        console.error("Element with class 'breakes' not found.");
        return;
    }

    var vector = new Two.Vector();
    var entities = [];
    let mouse; // Changed to let
    var copy = [
        "Web",
        "Branding",
        "Product",
        "Messaging",
        "UI/UX Design"
    ];

    // Adjust canvas size to match .breakes dimensions
    var two = new Two({
        type: Two.Types.canvas,
        width: collection[0].offsetWidth,
        height: collection[0].offsetHeight,
        autostart: true
    }).appendTo(collection[0]);

    var solver = Matter.Engine.create();
    solver.world.gravity.y = 0.5;

    var bounds = {
        length: collection[0].offsetWidth,
        thickness: 50,
        properties: {
            isStatic: true
        }
    };

    bounds.left = createBoundary(bounds.thickness, bounds.length);
    bounds.right = createBoundary(bounds.thickness, bounds.length);
    bounds.bottom = createBoundary(bounds.length, bounds.thickness);

    Matter.World.add(solver.world, [
        bounds.left.entity,
        bounds.right.entity,
        bounds.bottom.entity
    ]);

    var defaultStyles = {
        size: two.width * 0.08,
        weight: 400,
        fill: "white",
        leading: two.width * 0.08 * 0.8,
        family: "FKDisplayTrial, Arial, sans-serif",
        alignment: "center",
        baseline: "baseline",
        margin: {
            top: 0,
            left: 0,
            right: 0,
            bottom: 0
        }
    };

    addSlogan();
    resize();
    mouse = addMouseInteraction();
    two.bind("resize", resize).bind("update", update);

    function addMouseInteraction() {
        var mouse = Matter.Mouse.create(two.renderer.domElement);
        var mouseConstraint = Matter.MouseConstraint.create(solver, {
            mouse: mouse,
            constraint: {
                stiffness: 0.2
            }
        });

        Matter.World.add(solver.world, mouseConstraint);

        return mouseConstraint;
    }

    function resize() {
        var length = bounds.length;
        var thickness = bounds.thickness;

        vector.x = -thickness / 2;
        vector.y = two.height / 2;
        Matter.Body.setPosition(bounds.left.entity, vector);

        vector.x = two.width + thickness / 2;
        vector.y = two.height / 2;
        Matter.Body.setPosition(bounds.right.entity, vector);

        vector.x = two.width / 2;
        vector.y = two.height + thickness / 2;
        Matter.Body.setPosition(bounds.bottom.entity, vector);

        // Get screen width using jQuery
        var screenWidth = $(window).width();

        for (var i = 0; i < two.scene.children.length; i++) {
            var child = two.scene.children[i];

            if (!child.isWord) {
                continue;
            }

            var rectangle = child.rectangle;
            var entity = child.entity;

            // Define dimensions for different breakpoints
            var dimensions = {
                "web": { default: { width: 258, height: 121 }, 1200: { width: 220, height: 111 }, 1024: { width: 186, height: 92 }, 880: { width: 174, height: 82 }, 600: { width: 100, height: 46 } },
                "branding": { default: { width: 436, height: 121 }, 1200: { width: 400, height: 111 }, 1024: { width: 330, height: 92 }, 880: { width: 286, height: 82 }, 600: { width: 150, height: 46 } },
                "product": { default: { width: 400, height: 121 }, 1200: { width: 370, height: 111 }, 1024: { width: 316, height: 92 }, 880: { width: 274, height: 82 }, 600: { width: 140, height: 46 } },
                "messaging": { default: { width: 525, height: 121 }, 1200: { width: 465, height: 111 }, 1024: { width: 360, height: 92 }, 880: { width: 296, height: 82 }, 600: { width: 170, height: 46 } },
                "ui/ux design": { default: { width: 538, height: 121 }, 1200: { width: 480, height: 111 }, 1024: { width: 386, height: 92 }, 880: { width: 318, height: 82 }, 600: { width: 180, height: 46 } }
            };

            var word = child.text.value.toLowerCase();

            // Determine the size based on the screen width
            if (screenWidth <= 600) {
                rectangle.width = dimensions[word][600].width;
                rectangle.height = dimensions[word][600].height;
            } else if (screenWidth <= 880) {
                rectangle.width = dimensions[word][880].width;
                rectangle.height = dimensions[word][880].height;
            } else if (screenWidth <= 1024) {
                rectangle.width = dimensions[word][1024].width;
                rectangle.height = dimensions[word][1024].height;
            } else if (screenWidth <= 1200) {
                rectangle.width = dimensions[word][1200].width;
                rectangle.height = dimensions[word][1200].height;
            } else {
                rectangle.width = dimensions[word].default.width;
                rectangle.height = dimensions[word].default.height;
            }

            Matter.Body.scale(entity, 1 / entity.scale.x, 1 / entity.scale.y);
            Matter.Body.scale(entity, rectangle.width, rectangle.height);
            entity.scale.set(rectangle.width, rectangle.height);
        }
    }

    function addSlogan() {
        var x = defaultStyles.margin.left;
        var y = -two.height; // Start off-screen
    
        // Define screen size breakpoints
        var isSmallScreen600 = window.matchMedia("(max-width: 600px)").matches;
        var isSmallScreen880 = window.matchMedia("(max-width: 880px)").matches;
        var isSmallScreen1024 = window.matchMedia("(max-width: 1024px)").matches;
        var isSmallScreen1200 = window.matchMedia("(max-width: 1200px)").matches;
    
        for (var i = 0; i < copy.length; i++) {
            var word = copy[i];
            var group = new Two.Group();
            var text = new Two.Text(word, 0, 0, defaultStyles);
            var rectangle;
    
            group.isWord = true;
    
            // Determine styles based on word and screen size
            var fontSize, rectWidth, rectHeight, rectRadius;
            switch (word.toLowerCase()) {
                case "web":
                case "branding":
                case "product":
                case "messaging":
                    fontSize = isSmallScreen600 ? 24 : isSmallScreen880 ? 46 : isSmallScreen1024 ? 56 : isSmallScreen1200 ? 72 : 82;
                    rectWidth = isSmallScreen600 ? 100 : isSmallScreen880 ? 174 : isSmallScreen1024 ? 186 : isSmallScreen1200 ? 220 : 258;
                    rectHeight = isSmallScreen600 ? 46 : isSmallScreen880 ? 82 : isSmallScreen1024 ? 92 : isSmallScreen1200 ? 111 : 121;
                    rectRadius = isSmallScreen600 ? 10 : isSmallScreen880 ? 20 : isSmallScreen1024 ? 25 : 31;
                    rectangle = new Two.RoundedRectangle(0, 0, rectWidth, rectHeight, rectRadius);
                    text.fill = word.toLowerCase() === "product" ? "#ffffff" : "#05070F";
                    rectangle.fill = {
                        "web": "#FF7A00",
                        "branding": "#2A73FF",
                        "product": "#05070F",
                        "messaging": "#B0BAC5"
                    }[word.toLowerCase()];
                    rectangle.stroke = "none"; // Remove border
                    break;
                case "ui/ux design":
                    fontSize = isSmallScreen600 ? 24 : isSmallScreen880 ? 46 : isSmallScreen1024 ? 56 : isSmallScreen1200 ? 72 : 82;
                    rectWidth = isSmallScreen600 ? 180 : isSmallScreen880 ? 318 : isSmallScreen1024 ? 386 : isSmallScreen1200 ? 480 : 538;
                    rectHeight = isSmallScreen600 ? 46 : isSmallScreen880 ? 82 : isSmallScreen1024 ? 92 : isSmallScreen1200 ? 111 : 121;
                    rectRadius = isSmallScreen600 ? 10 : isSmallScreen880 ? 20 : isSmallScreen1024 ? 25 : 31;
                    rectangle = new Two.RoundedRectangle(0, 0, rectWidth, rectHeight, rectRadius);
                    text.fill = "#05070F";
                    rectangle.fill = "#ffffff";
                    rectangle.stroke = "#05070F"; // Border for "ui/ux design"
                    break;
            }
    
            text.size = fontSize;
            text.alignment = 'center';
            text.lineheight = 12;
            text.translation.y = isSmallScreen600 ? 10 : isSmallScreen880 ? 20 : isSmallScreen1024 ? 25 : 30; // Adjust vertical centering for different screens
    
            // Set different starting vertical positions for each element
            var offsetY = -Math.random() * two.height; // Start off-screen
    
            var ox = x + rectangle.width / 2;
            var oy = y + rectangle.height / 2 + offsetY;
    
            var ca = x + rectangle.width;
            var cb = two.width;
    
            if (ca >= cb) {
                x = defaultStyles.margin.left;
                y += defaultStyles.leading + defaultStyles.margin.top + defaultStyles.margin.bottom;
    
                ox = x + rectangle.width / 2;
                oy = y + rectangle.height / 2 + offsetY;
            }
    
            group.translation.x = ox;
            group.translation.y = oy;
    
            var entity = Matter.Bodies.rectangle(ox, oy, 1, 1);
            Matter.Body.scale(entity, rectangle.width, rectangle.height);
    
            entity.scale = new Two.Vector(rectangle.width, rectangle.height);
            entity.object = group;
            entities.push(entity);
    
            x += rectangle.width + defaultStyles.margin.left + defaultStyles.margin.right;
    
            group.text = text;
            group.rectangle = rectangle;
            group.entity = entity;
    
            group.add(rectangle, text);
            two.add(group);
        }
    
        Matter.World.add(solver.world, entities);
    }

    function update(frameCount, timeDelta) {
        var allBodies = Matter.Composite.allBodies(solver.world);
        Matter.MouseConstraint.update(mouse, allBodies);
        Matter.MouseConstraint._triggerEvents(mouse);

        Matter.Engine.update(solver);

        for (var i = 0; i < entities.length; i++) {
            var entity = entities[i];
            var body = entity.object;

            body.position.x = entity.position.x;
            body.position.y = entity.position.y;
            body.rotation = entity.angle;
        }
    }

    function createBoundary(width, height) {
        var rectangle = two.makeRectangle(0, 0, width, height);
        rectangle.visible = false;
        rectangle.entity = Matter.Bodies.rectangle(
            rectangle.position.x,
            rectangle.position.y,
            width,
            height, { isStatic: true }
        );
        rectangle.entity.position = rectangle.position;

        return rectangle;
    }
}

// Intersection Observer to trigger the initialization when .breakes section is in view
const breakesSection = document.querySelector('.breakes');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Call the initAnimation function with a 0.1 second delay
            setTimeout(() => {
                initAnimation();
                // Unobserve after initializing to avoid redundant calls
                observer.unobserve(entry.target);
            }, 10); // 0.1 second delay
        }
    });
}, { threshold: 0.8 }); // Adjust threshold as needed

// Start observing the .breakes section
observer.observe(breakesSection);






// bricks java end


// accordin secript

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

// accorgin java end


// tabs java

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

// tab java end



// footer online ofline java

// Function to update span text and pseudo-element color based on time
function updateTimeZoneStatus() {
    const now = new Date();
    const dayOfWeek = now.getDay(); // 0 (Sunday) to 6 (Saturday)
    const hour = now.getHours();

    // Check if it's Monday to Friday and between 9 AM to 6:00 PM (18:00)
    if (dayOfWeek >= 1 && dayOfWeek <= 5 && hour >= 9 && hour < 18) {
        // Update span text and add class to change pseudo-element color
        const timeZoneDiv = document.querySelector('.time-zone');
        const span = timeZoneDiv.querySelector('span');

        span.textContent = 'Online';
        timeZoneDiv.classList.add('online');
    } else {
        // Reset to Offline status if conditions are not met
        const timeZoneDiv = document.querySelector('.time-zone');
        const span = timeZoneDiv.querySelector('span');

        span.textContent = 'Offline';
        timeZoneDiv.classList.remove('online');
    }
}

// Call the function initially to set the status based on current time
updateTimeZoneStatus();

// Update every minute to adjust the status dynamically
setInterval(updateTimeZoneStatus, 60000); // Every minute (60000 milliseconds)

// footer online ofline java end




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/matter-js@0.14.2/build/matter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/two.js@v0.7.0-stable.1/build/two.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>