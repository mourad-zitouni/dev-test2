
function solve(st,a,b){
  console.log(st);
  stToRevert = st.substring(a, b+1);
  stToAdd = stToRevert.split("").reverse().join("");
  st = st.replace(stToRevert, stToAdd);
  console.log(st);
}

solve("developer",1,5);
solve("dEVELOper", 1,5)
