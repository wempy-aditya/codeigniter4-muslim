async function randomQuote() {
    fetch("https://type.fit/api/quotes")
    .then(function(response) {
        return response.json()
    })
    .then(function(data) {
        var item = data[Math.floor(Math.random() * data.length)];
        // document.getElementById("quoteRandom").append(item.text);

        const acak = shuffle(data);
        const loop = acak.map(function(quote) {
            const author = document.createTextNode(quote.author)
            const body = document.createTextNode(quote.text)
            
            var column = document.createElement("div");  
            column.classList.add("col-3");
            column.classList.add("mb-3");

            var cardParrent = document.createElement("div");  
            cardParrent.classList.add("card");

            var cardHeader = document.createElement("div");  
            cardHeader.classList.add("card-header");

            var cardBody = document.createElement("div");  
            cardBody.classList.add("card-body");
            
            column.appendChild(cardParrent);
            cardParrent.appendChild(cardHeader);
            cardHeader.appendChild(author);  
            cardParrent.appendChild(cardBody);
            cardBody.appendChild(body);  

            // document.getElementById("testingq").appendChild(column);
        })
        // document.getElementById("loadText").remove();
    })
}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
    while (0 !== currentIndex) {
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}

randomQuote()