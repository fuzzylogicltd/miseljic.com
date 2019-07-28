var flkty = new Flickity('#photolist', {
    "cellAlign": "center", 
    "wrapAround": true, 
    "pageDots": false, 
    "adaptiveHeight": true,
    on: {
        change: function (index) {
            setUrl(index);
        }
    }
});

setPhoto();

// Event listeners
document.querySelector("div#hamburger a").addEventListener("click", toggleNav);

window.addEventListener("load", function () {
    setTimeout(function () {
        // This hides the address bar:
        window.scrollTo(0, 1);
    }, 0);
});

// Toggle responsive navigation
function toggleNav() {
    const element = document.getElementById("mainnav");
    const toggleBtn = document.querySelector("div#navtoggle");
    element.style.left = element.left ? "-100%" : "0";
    toggleBtn.classList.toggle("change");
}

function setPhoto() {
    const photoId = document.getElementById("hidPhotoNumber").value;
    flkty.select(photoId-1);
}

function setUrl(index) {
    const albumName = document.getElementById("hidAlbumName").value;
    const photoId = index + 1;
    const newUrl = "/" + albumName + "/" + photoId;
    window.history.pushState("object or string", "Title", newUrl);
}