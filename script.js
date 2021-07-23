document.getElementById("censura").addEventListener("click", set);

function set() {
    let word = document.getElementById("word").value;
    window.location.href = 'http://localhost/php-badwords/badWords.php?word=' + word;
}