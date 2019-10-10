function reset()
{
  document.getElementById("cookie").value = null;
  document.getElementById("ccd").value = null;
  document.getElementById("ccc").value = null;
  document.getElementById("pass").value = null;
  document.getElementById("uname").value = null;
  document.getElementById("free").checked = false;
  document.getElementById("overnight").checked = false;
  document.getElementById("days3").checked = false;

}

function validate()
{
  let cookie = document.getElementById("cookie").value;
  let ccd = document.getElementById("ccd").value;
  let ccc = document.getElementById("ccc").value;
  let uname = document.getElementById("uname").value;
  let pass = document.getElementById("pass").value;
  let free = document.getElementById("free");
  let overnight = document.getElementById("overnight");
  let days3 = document.getElementById("days3");


  if(uname = "" || !uname.includes("@") || !uname.includes(".com"))
    {
      alert("Error: your username is not in the form of email@domain.com");
      return false;
    }

  if(pass == "")
  {
    alert("Error: You must fill in a password.");
    return false;
  }


  if (cookie.length == 0 || ccd.length == 0 || ccc.length == 0)
    {
        alert("Error: You cannot leave any field blank. Enter 0 if you don't want anything");
        return false;
    }

  if(cookie < 0 || ccd <0 || ccc < 0)
      {
        alert("Error: Don't order a negative number");
        return false;
      }

  if(cookie == 0 && ccd == 0 && ccc == 0)
      {
        alert("Error: At least order something. What are you paying for if you don't buy anything");
        return false;
      }

  if(!free.checked && !overnight.checked && !days3.checked)
  {
    alert("Error: You must select a shipping method.");
    return false;
  }
return true;

}
