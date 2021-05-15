<!DOCTYPE html>
<html>

<!-- // PHP program find the character that has the highest number of occurrences within a certain string - Challenge 2 -->

<body>
  <form action="" method="post">
  <label> Please enter your string</label>
    <input type="text" id="input_id" value="" name="string">
    <input type="button" value="Submit" >
    <div id="alert" style="color: red"></div>
  </form>
</body>

<body>


<script>
var obj={}
var repeats=[];
str='banana'

for(x = 0, length = str.length; x < length; x++) {
    var l = str.charAt(x)
    obj[l] = (isNaN(obj[l]) ? 1 : obj[l] + 1);
}

console.log(obj)

</script>