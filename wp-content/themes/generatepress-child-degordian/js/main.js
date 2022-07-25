var blogPostsButton = document.getElementById("blog-posts-button");
var blogPostsContainer = document.getElementById("blog-posts-container");


if (blogPostsButton) {
    blogPostsButton.addEventListener("click", function() {
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', '<?php site_url(); ?>/wp-json/v1/posts');
        ourRequest.onload = function() {
            if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var data = JSON.parse(ourRequest.responseText);
                console.log(data);
            } else {
                console.log("Konektovani smo na server, ali smo dobili grešku.");
            }
        };

        ourRequest.onerror = function() {
            console.log("Greška u konekciji");
        };
        ourRequest.send();
    });
}
