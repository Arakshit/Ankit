<input id="1" type="radio" title="2" value="6/1/2010" name="vacationDay">
<input id="2" type="radio" title="2" value="6/2/2010" name="vacationDay">
<input id="3" type="radio" title="2" value="6/3/2010" name="vacationDay">

<input id="1" type="checkbox" title="2" value="6/1/2010" class="adf" name="Day">
<input id="2" type="checkbox" title="2" value="6/2/2010"  class="adf" name="Day">
<input id="3" type="checkbox" title="2" value="6/3/2010"  class="adf" name="Day">


<input type="button" name="dfd" id="submit" value ="submit">

<script src="http://innorade.in/toyassociation/admin/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script>
$("#submit").click(function(){
var $radio = $('input[name=vacationDay]:checked');
var updateDay = $radio.val();
var id = $radio.attr('id');

alert(updateDay);
alert(id);
 var selected = $(".adf:checked").map(function() {
        return this.id;
    }).get();
    alert(selected.join(","));
});
</script>

<input name="hhhhh" type="text" id="qty" data-id="6" value="ankit" data-flag="Ankit" onclick="goUpdateCart()">
<script>
function goUpdateCart()
{
   var attribute=$('#qty').attr('value')+','+ $('#qty').attr('id')+','+$('#qty').attr('name')+','+$('#qty').attr('data-flag');
   alert(attribute);
}
</script>