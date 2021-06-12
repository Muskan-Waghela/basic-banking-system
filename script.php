<script>
document.getElementById("submit").onclick=function(){
    var sender=document.getElementById("sender").value;
    var receiver=document.getElementById("receiver").value;
    var amount=document.getElementById("amount").value;
    var date=document.getElementById("date").value;
    if(!sender || !receiver || !amount || !date){
        window.alert("fill out required fields");
    }
    else{
        confirm("proceed with transfer");
        window.alert("transaction of rupees " + amount + " is sucessfully transfered to " + receiver + " from " + sender + " on date " + date);
    }
}
</script>