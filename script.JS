let weight;
let reps; 

function rep_max(weight, reps) {
    return (Math.round(10 * (weight * (1 + (reps/30))))/10)
}
;

// console.log(rep_max(weight=185, reps=3));