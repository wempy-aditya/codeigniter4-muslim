setInterval(async function() {
    fetch("/Rest_api/get_random_quotes/1")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        // console.log(data.quotes[0].quote_body);
        document.getElementById('quoteBody').innerText = data.quotes[0].quote_body;
        document.getElementById('quoteAuthor').innerText = data.quotes[0].quote_author;
    })
}, 9000);