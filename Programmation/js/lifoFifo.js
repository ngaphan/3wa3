// LIFO début
var pile = new Array()  ; 
pile.push(50) ;				// arr.push(element1, ..., elementN)
console.log(pile.push()) ;	// LIFO utilise push pour ranger

pile.push(30) ;	
console.log(pile.push()) ;

pile.push(20) ;	
console.log(pile.push()) ;

console.log(pile.pop()) ;  // sort la valeur 20  LIFO
console.log(pile)         ;

console.log(pile.pop()) ;  // sort la valeur 30  LIFO
console.log(pile)         ;

console.log(pile.pop()) ;  // sort la valeur 50  LIFO
console.log(pile)         ;
// LIFO fin

// FIFO début
var pile = new Array()  ; 
pile.unshift(50) ;				// arr.unshift(element1, ..., elementN)
console.log(pile) ;				// FIFO utilise unshift pour ranger

pile.unshift(30) ;	
console.log(pile) ;

pile.unshift(20) ;	
console.log(pile) ;

console.log(pile[0]);
console.log(pile[1]) ;
console.log(pile[2]) ;

console.log(pile.pop()) ;  // sort la valeur 50  FIFO
console.log(pile)   

console.log(pile.pop()) ;  // sort la valeur 30  FIFO
console.log(pile)         ;
      
console.log(pile.pop()) ;  // sort la valeur 20  FIFO
console.log(pile)       ;
// FIFO fin	   

