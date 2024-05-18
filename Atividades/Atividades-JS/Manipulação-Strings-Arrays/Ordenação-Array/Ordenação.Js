function ordenaArray(array) {
    return array.sort((a, b) => a - b);
}
console.log(ordenaArray([0.001, 99, 777, 0.00005, 13]));
document.getElementById("demo").innerHTML = ordenaArray([0.001, 99, 777, 0.00005, 13]);