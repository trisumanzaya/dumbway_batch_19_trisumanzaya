function getVowels (str){
    var m = str.match (/[aiueo]/gi);
    return m === null ? 0 : m.length;
}
console.log(getVowels('programmer'));