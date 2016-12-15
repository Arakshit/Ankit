<!-- <button type="button"  id="your_button_id" >White</button> -->

<a href="http://www.google.com/" >Google</a>

<input name='xxxxx' value=1 id="test">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
// var title=$('#your_button_id').text();
// alert(title);

var id =  $(this).find(':input')
alert(id);
var rrr =  JSON.stringify(id);
console.log(rrr);
//alert($('a').text());
//alert($(this).html());
</script>
