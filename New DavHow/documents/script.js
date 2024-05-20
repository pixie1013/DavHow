$(document).ready(function() {
    // Function to show the corresponding section based on the clicked button
    function showSection(section) {
        // Hide all sections
        $('.information-area > div').hide();
        // Show the selected section
        $(section).show();
    }

    // Function to update the background gradient of the corresponding div
    function updateBackground() {
        // Remove the background gradient from all divs
        $('.information-option div div').css({
            'background': 'linear-gradient(to top, #003676, #0E71E4)',
            'box-shadow': '0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)'
        });
        // Add the background gradient to the corresponding div
        $('.information-option input[type="radio"]:checked').each(function() {
            var $div = $(this).closest('.information-option').find('label[for="' + this.id + '"]').closest('div div');
            $div.css({
                'background': 'linear-gradient(to top, #75AAE8, #0075FF)',
                'box-shadow': '0 0px 0 0 rgba(0,0,0,0.3), 0  0 0 rgba(0,0,0,0.25)'
            });   
        });
    }

    // Add click event listeners to all the buttons
    $('.information-option input[type="radio"]').click(function() {
        // Show the corresponding section based on the button's ID
        if ($(this).attr('id') === 'tap1') {
            showSection('.requirement-info');
        } else if ($(this).attr('id') === 'tap2') {
            showSection('.procedure-info');
        } else if ($(this).attr('id') === 'tap3') {
            showSection('.location-info');
        } else if ($(this).attr('id') === 'tap4') {
            showSection('.fee-info');
        } else if ($(this).attr('id') === 'tap5') {
            showSection('.samplephoto-info');
        } else if ($(this).attr('id') === 'tap6') {
            showSection('.reference-info');
        }

        // Update the background gradient
        updateBackground();
    });

    // Initially show the first section and update the background
    showSection('.requirement-info');
    updateBackground();
});

    // REFERENCE: W3SCHOOLS
    function magnify(imgID, zoom) {
        var img, glass, w, h, bw;
        img = document.getElementById(imgID);

        /*create magnifier glass:*/
        glass = document.createElement("DIV");
        glass.setAttribute("class", "img-magnifier-glass");
        /*insert magnifier glass:*/
        img.parentElement.insertBefore(glass, img);

        /*set background properties for the magnifier glass:*/
        glass.style.backgroundImage = "url('" + img.src + "')";
        glass.style.backgroundRepeat = "no-repeat";
        glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
        bw = 3;
        w = glass.offsetWidth / 2;
        h = glass.offsetHeight / 2;

        /*execute a function when someone moves the magnifier glass over the image:*/
        glass.addEventListener("mousemove", moveMagnifier);
        img.addEventListener("mousemove", moveMagnifier);
        /*and also for touch screens:*/
        glass.addEventListener("touchmove", moveMagnifier);
        img.addEventListener("touchmove", moveMagnifier);

        function moveMagnifier(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            x = pos.x;
            y = pos.y;
            /*prevent the magnifier glass from being positioned outside the image:*/
            if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
            if (x < w / zoom) {x = w / zoom;}
            if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
            if (y < h / zoom) {y = h / zoom;}
            /*set the position of the magnifier glass:*/
            glass.style.left = (x - w) + "px";
            glass.style.top = (y - h) + "px";
            /*display what the magnifier glass "sees":*/
            glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
        }

        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
        }
    }

    document.getElementById("reference-photo").addEventListener("mouseenter", function() {
        magnify('reference-photo', 3);
    });

    document.getElementById("reference-photo").addEventListener("mouseleave", function() {
        var glass = document.querySelector(".img-magnifier-glass");
        if (glass) {
            glass.remove();
        }
    });

// Show Menu
const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close')

navToggle.addEventListener('click', () => {
navMenu.classList.add('show-menu')
})

navClose.addEventListener('click', () => {
navMenu.classList.remove('show-menu')
})

//Search
const search = document.getElementById('search'),
searchBtn = document.getElementById('search-btn'),
searchClose = document.getElementById('search-close')

searchBtn.addEventListener('click', () => {
search.classList.add('show-search')
})

searchClose.addEventListener('click', () => {
search.classList.remove('show-search')
})

const login = document.getElementById('login'),
loginBtn = document.getElementById('login-btn'),
loginClose = document.getElementById('login-close')

loginBtn.addEventListener('click', () => {
login.classList.add('show-login')
})

loginClose.addEventListener('click', () => {
login.classList.remove('show-login')
})

const displayTime = document.querySelector(".display-time");
// Time
function showTime() {
let time = new Date();
displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
setTimeout(showTime, 1000);
}

showTime();

// Date
function updateDate() {
let today = new Date();

// return number
let dayName = today.getDay(),
dayNum = today.getDate(),
month = today.getMonth(),
year = today.getFullYear();

const months = [
"January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December",
];
const dayWeek = [
"Sunday",
"Monday",
"Tuesday",
"Wednesday",
"Thursday",
"Friday",
"Saturday",
];
// value -> ID of the html element
const IDCollection = ["day", "daynum", "month", "year"];
// return value array with number as a index
const val = [dayWeek[dayName], dayNum, months[month], year];
for (let i = 0; i < IDCollection.length; i++) {
document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
}
}

updateDate();

// Magnify 
function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);

    /*create magnifier glass:*/
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    /*insert magnifier glass:*/
    img.parentElement.insertBefore(glass, img);

    /*set background properties for the magnifier glass:*/
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;

    /*execute a function when someone moves the magnifier glass over the image:*/
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    /*and also for touch screens:*/
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
    }
}function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);

    /*create magnifier glass:*/
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    /*insert magnifier glass:*/
    img.parentElement.insertBefore(glass, img);

    /*set background properties for the magnifier glass:*/
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;

    /*execute a function when someone moves the magnifier glass over the image:*/
    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    /*and also for touch screens:*/
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        x = pos.x;
        y = pos.y;
        /*prevent the magnifier glass from being positioned outside the image:*/
        if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
        if (x < w / zoom) {x = w / zoom;}
        if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
        if (y < h / zoom) {y = h / zoom;}
        /*set the position of the magnifier glass:*/
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        /*display what the magnifier glass "sees":*/
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0, y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return {x : x, y : y};
    }
}