//Check to make all forms are filled
function validForm()
{
  let input = document.getElementsByTagName("input");

  for(let k = 0; k < input.length; k++)
  {
    if(input[k].value == "")
    {
      alert("Please enter all fields!");

      return false;
    }
  }

  let raquets = document.getElementById("raquet").value;
  let towels = document.getElementById("towel").value;
  let balls = document.getElementById("ball").value;

  if(raquets < 0 || towels < 0 || balls < 0)
  {
    alert("Please give me money! Enter more than 0...");
    return false;
  }
}