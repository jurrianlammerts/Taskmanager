(function() {
    var quotes = [
        {
            text: "You want to improve yourself? Start now!"
        },
        {
            text: "Sometimes by losing a battle you find a new way to win the war."
        },
        {
            text: "Nothing great in the world has been accomplished without passion."
        },
        {
            text: "In the end, you're measured not by how much you undertake, but by what you finally accomplish."
        },
        {
            text: "Remember, there's no such thing as an unrealistic goal -just unrealistic time frames."
        },
        {
            text: "Without passion you don’t have energy, without energy you have nothing."
        },
        {
            text: "Sometimes your best investments are the ones you don't make."
        },
        {
            text: "What separates the winners from the losers is how a person reacts to each new twist of fate."
        }
    ];

    var quote = quotes[Math.floor(Math.random() * quotes.length)];

    document.getElementById("quote").innerHTML =
        '<h2>' + quote.text + '</h2>'
})();
