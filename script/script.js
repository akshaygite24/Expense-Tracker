
function vali(){
    let expense=document.getElementById("expense").value;
    let amount=document.getElementById("amount").value;
    if(expense==null || expense=="")
    {
        alert("Expense Should not be empty");
        return false;
    }
    if(amount==null || amount=="")
    {
        alert("Amount Should not be empty");
        return false;
    }
    if(isNaN(amount))
    {
        alert("Amount Number must be numeric");
        return false;
    }
    else{
        alert("Data Validated Successfully !!!!!");
        return true;
    }
}