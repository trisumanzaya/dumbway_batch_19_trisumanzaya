function hitungbarang (barang,jumlah){
    let total=0; 
    if (barang === 'A'){
        const harga = 3000;
        total =harga * jumlah;
        if (jumlah >= 10){
            const diskon = 500;
            total = total - (jumlah * diskon);
        }
    }else if (barang === 'B'){
        const harga = 3500;
        total = harga * jumlah;
        if (jumlah >= 5){
            const diskon = 0.5;
            total= total * diskon 
        }
    }else if ( barang === 'C') {
        const harga = 5000
        total = harga * jumlah;
    }
    return total;
}
console.log(hitungbarang('C',11))