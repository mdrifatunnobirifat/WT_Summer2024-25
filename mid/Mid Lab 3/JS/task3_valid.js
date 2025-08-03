function handlesubmit()
{
    var f_name=document.getElementById("f_name").value;
    var l_name=document.getElementById("l_name").value;
    var email=document.getElementById("email").value;
    var city =document.getElementById("city").value;
    var address =document.getElementById("address").value;
    var phone=document.getElementById("phone").value;

    if(f_name ===""||l_name === ""|| email ===""|| city ===""|| address===""||phone==="")
    { alert("please all the requirment");
        return false;
    }

    if(f_name.length!=10 ||isNaN(f_name))
    {alert("plaese fill the name");
        return false;
    }

    if(l_name.length!=10|| isNaN(l_name))
    {
        alert("please fill up ");
        return false;
    }
    if(isNaN(email))
    {
        alert("please fill up ");
        return false;
    }
    if(city.length!=10||isNaN(city))
    {
        alert("please fill up");
        return false;
    }
    if(phone.lenth!=11|isNaN(number))
    {alert("please fill up");
        return false;
    }

}