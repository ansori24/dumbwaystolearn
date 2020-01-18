let uang = 3000000;
const bunga = 0.025;
 
for(i = 1; i <= 12; i++) {
   uang += uang * bunga;
   console.log(`Uang pada bulan ${i} : ${Math.round(uang)}`)
}

console.log(`total uang selama 12 bulan adalah : ${Math.round(uang)}`)