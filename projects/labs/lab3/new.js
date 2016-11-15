function Parse(current, depth){

	current.addEventListener("click", function(){ alert(current.tagName); }, false);


		if (!depth){
			depth = 0;
		}

		if (current.nodeType == 1){
			var out = " ";

			for (var i = 0; i < depth; i++) {
				out += "-";
			}
			out += current.tagName + "\n";

			for (var j = 0; j < current.childNodes.length; j++){ //Childnodes a collection of all html elements
				
				var childout = Parse(current.childNodes[j], depth+1);

				if (childout != null){
					if (childout != " "){
						out += childout;
					}	
				}
			}
			return out;
		}
		else {
			return null;
		}
	}

base = document.getElementsByTagName('html')[0];
var tree = Parse(base);
document.getElementById('info').innerHTML = tree;


var node = document.getElementsByTagName('div')[0].cloneNode(true);
node.innerHTML = document.getElementsByTagName('div')[0].innerHTML;
document.getElementsByTagName('body')[0].appendChild(node);


var move0=document.getElementsByTagName('div')[0];//when the mouse hovers over the element, sets the background to a color and moves it
move0.onmouseover=function() {
	this.style.background = "gray";
	this.style.position = "relative";
	this.style.left = "10px";
};
move0.onmouseout=function() {
	this.style.background = "white";
	this.style.position = "relative";
	this.style.left = "0px";
	};

var move0=document.getElementsByTagName('div')[1];
move0.onmouseover=function() {
	this.style.background = "gray";
	this.style.position = "relative";
	this.style.left = "10px";
};
move0.onmouseout=function() {
	this.style.background = "white";
	this.style.position = "relative";
	this.style.left = "0px";
	};

var move0=document.getElementsByTagName('div')[2];
move0.onmouseover=function() {
	this.style.background = "gray";
	this.style.position = "relative";
	this.style.left = "10px";
};
move0.onmouseout=function() {
	this.style.background = "white";
	this.style.position = "relative";
	this.style.left = "0px";
	};

var move0=document.getElementsByTagName('div')[3];
move0.onmouseover=function() {
	this.style.background = "gray";
	this.style.position = "relative";
	this.style.left = "10px";
};
move0.onmouseout=function() {
	this.style.background = "white";
	this.style.position = "relative";
	this.style.left = "0px";
};

var move0=document.getElementsByTagName('div')[4];
move0.onmouseover=function() {
	this.style.background = "gray";
	this.style.position = "relative";
	this.style.left = "10px";
};
move0.onmouseout=function() {
	this.style.background = "white";
	this.style.position = "relative";
	this.style.left = "0px";
};
