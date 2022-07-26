var blogPostsButton = document.getElementById("blog-posts-button");
var blogPostsContainer = document.getElementById("blog-posts-container");


if (blogPostsButton) {
    blogPostsButton.addEventListener("click", function() {
        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', '/index.php/wp-json/v1/posts');
        ourRequest.onload = function() {
            if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var data = JSON.parse(ourRequest.responseText);
                // console.log(data);
                createHTML(data);
            } else {
                // console.log("Konektovani smo na server, ali smo dobili grešku.");
                createHTML("Konektovani smo na server, ali smo dobili grešku.");
            }
        };

        ourRequest.onerror = function() {
            console.log("Greška u konekciji");
        };
        ourRequest.send();
    });

    
}

function createHTML( postsData ) {
    var ourHTMLString = '';
    //console.log(postsData[0].title.rendered);
    
    for( var i = 0; i < postsData.length; i++) {
        ourHTMLString += 'ID: ' + postsData[i].id + '<br>';
        ourHTMLString += postsData[i].date;
        ourHTMLString += '<h2>' + postsData[i].title + '</h2>';
        ourHTMLString += postsData[i].excerpt;
        ourHTMLString += '<h4>' + postsData[i].content + '</h4>';
        ourHTMLString += '<br>********************************************************************<br>';
    }

    blogPostsContainer.innerHTML = ourHTMLString;
}