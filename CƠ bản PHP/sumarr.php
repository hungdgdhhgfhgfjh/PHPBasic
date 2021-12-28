<script>

function iterArr(arr) {
  var sum = 0;
  //Your code here
  for(var i = 0;i<arr.length;i++){
      sum = arr[i] + sum;
  }
  return sum;
}


alert(iterArr([-5,2,5,12]));
</script>