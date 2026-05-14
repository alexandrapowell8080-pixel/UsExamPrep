// Lightweight YouTube loader – no external libraries
document.addEventListener("DOMContentLoaded", function () {
    const videoBoxes = document.querySelectorAll(
        ".video-preview-box[data-videoid]",
    );

    videoBoxes.forEach(function (box) {
        box.addEventListener("click", function () {
            const videoId = box.getAttribute("data-videoid");
            if (!videoId) return;

            // Build the iframe and replace the content
            box.innerHTML =
                '<iframe src="https://www.youtube.com/embed/' +
                videoId +
                '?rel=0&autoplay=1&modestbranding=1&showinfo=0" ' +
                'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ' +
                'allowfullscreen loading="lazy" frameborder="0"></iframe>';
        });
    });
});
