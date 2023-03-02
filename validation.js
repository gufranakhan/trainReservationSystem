
function myFunction(event) {
  let id=event.currentTarget.id;
  const targetElement=document.getElementById(id);
  console.log(targetElement);
  function add(a,  color){

  	if(targetElement.nextSibling.tagName=="P"){
  		targetElement.nextSibling.innerHTML=a;
  		targetElement.nextSibling.style.color=color;
  		//console.log("hello")
  	}
  	else{
  		let inp=document.createElement("P");
			inp.style.cssText=`color:${color}; font-size:15px; `;
			inp.innerHTML=a;
			targetElement.parentNode.insertBefore(inp, targetElement.nextSibling);
  	}
  }
  if(targetElement.value==""){
  	//console.log(targetElement.nextElementSibling.tagName)
  	add("incomplete credential");
  	add("incomplete credential", "red");
  	document.getElementById("btn").disabled=true;
	//id.parentNode.insertBefore(inp, id);
  }
  else{
  			add("good","green");
  	  	document.getElementById("btn").disabled=false;

  }

}


// const ul = document.createElement("ul");
// document.body.appendChild(ul);

// const li1 = document.createElement("li");
// const li2 = document.createElement("li");
// ul.appendChild(li1);
// ul.appendChild(li2);

// function hide(evt) {
//   // evt.target refers to the clicked <li> element
//   // This is different than evt.currentTarget, which would refer to the parent <ul> in this context
//   evt.target.style.visibility = "hidden";
// }

// Attach the listener to the list
// It will fire when each <li> is clicked
//ul.addEventListener("click", hide, false);

//   let x = document.getElementById("email");
//   let pswd=document.getElementById("password");
//   if((x.value=="") || (pswd.value=="")){
//   //document.getElementById("inp").style.visibility="visible";
// 	alert("empty value");

// 	let inp=document.getElementById("inp");
	
// 	inp.style.cssText=`color:red; font-size:10px; `;
// 	inp.innerHTML="incomplete credential";
// 	document.getElementById("btn").disabled=true;

//     }
//    else
//    {
//   	x.value = x.value.toUpperCase();
//   	//x.value=x.value.toLowerCase();
//   	document.getElementById("btn").disabled=false;
// 	}

  
// }
