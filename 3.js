function genPrime(n) {
	let listPrime = [];
	let start = 2;
	let x = 0;
	for (i=0; i <= (n+1); i++){
		x+=i
	}
	while (x > listPrime.length){
		prime=true;
		for ( i = 2; i < start; i++){
			if (start % i==-0){
				prime = false
			}
		}
		if (prime == true){
			listPrime.push(start)
		}
		start++;
	}
	return listPrime;
}

function triangle (n) {
	let result = '';
	if (n < 0 || n >=10){
		return "angka yang dimasukan tidak sesuai"
	}
	trianglelist = genPrime(n)
	let x =0;

	for (j= 0; j< n; j++) {
		x += j;
		for (k = 0; k <= j; k++) {
			result += trianglelist[k+x] + " "
		}
		result += "\n"
	}
	return result 
}
console.log(triangle(8))