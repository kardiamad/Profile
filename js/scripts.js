var navItems = document.getElementsByClassName('nav-item');
var urlHash = window && window.location && window.location.hash.split("#")[1];
var activeLink = document.getElementsByClassName('active')[0];
var downloadBtn = $('#download-btn');
var linkedInBtn = $('#linked-in-btn');
var githubBtn = $('#github-btn');

function setActive(element) {
    element && element.classList.add('active');
    activeLink && activeLink.classList.remove('active');
    activeLink = element;
}

if(urlHash && !activeLink.classList.contains(urlHash)) {
    setActive(document.getElementsByClassName(urlHash)[0]);
}

for(var i=0; i<navItems.length; i++){
    navItems[i].onclick = function(e) {
        setActive(e.target);
    }
}

$(downloadBtn).click(function() {
    $.ajax({
        type: "POST",
        url: 'resume_downloaded.php',
        success: function (data) {
            console.log(data);
        }
    });
});


$(linkedInBtn).click(function() {
    $.ajax({
        type: "POST",
        url: 'linkedin.php',
        success: function (data) {
            console.log(data);
        }
    });
});

$(githubBtn).click(function() {
    $.ajax({
        type: "POST",
        url: 'github.php',
        success: function (data) {
            console.log(data);
        }
    });
});



