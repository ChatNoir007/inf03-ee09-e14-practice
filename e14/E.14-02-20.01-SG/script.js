const wybranyKsztaltParagraph = document.getElementById("ksztaltP");

var submitButton = document.querySelector("button[type='submit']");
submitButton.addEventListener("click", function (event) {
    event.preventDefault();

    var numerKsztaltuInput = document.querySelector("input[type='number']");
    var numerKsztaltu = parseInt(numerKsztaltuInput.value);
    var ksztaltText;

    switch (numerKsztaltu) {
        case 1:
            ksztaltText = "miś";
            break;
        case 2:
            ksztaltText = "żabka";
            break;
        case 3:
            ksztaltText = "serce";
            break;
        default:
            ksztaltText = "inny kształt";
    }
    wybranyKsztaltParagraph.innerText = "Zamówiłeś żelka: " + ksztaltText;

    var rInput = document.querySelectorAll("input[type='number']")[1];
    var gInput = document.querySelectorAll("input[type='number']")[2];
    var bInput = document.querySelectorAll("input[type='number']")[3];

    var r = parseInt(rInput.value);
    var g = parseInt(gInput.value);
    var b = parseInt(bInput.value);

    var wybranyKolorButton = document.querySelector("div.kolor button");
    wybranyKolorButton.style.backgroundColor = "rgb(" + r + "," + g + "," + b + ")";
}); 
