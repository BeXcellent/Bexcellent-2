var phase	= new Array();
var count	= new Array();
var cycles	= new Array();

var change = 50;
var fps = 70;

//initialises all functions for all bubbles
function start() 
{
	startArrays(9);

	//link bubbles
	setInterval('path_4(\'l1\')', fps); 
	setInterval('path_2(\'l2\')', fps);
	setInterval('path_5(\'l3\')', fps);
	setInterval('path_2(\'l4\')', fps);
	setInterval('path_3(\'l5\')', fps);
	setInterval('path_2(\'l6\')', fps);
	setInterval('path_3(\'l7\')', fps);
	setInterval('path_1(\'l8\')', fps);
	setInterval('path_4(\'l9\')', fps);
	setInterval('path_3(\'l10\')', fps);

	//small bubbles
	//setInterval('path_8(\'s1\')', fps);
}

//initialises the phase, count and cycles arrays
function startArrays(max) 
{
	for(var i = 0; i < max; i++) 
	{
		phase[i] = 1;
		count[i] = 0;
		cycles[i] = 0;
	}
}

//large (link) bubble paths
function path_1(id) 
{
	var path_id = 1;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top) -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}
}

function path_2(id) 
{
	var path_id = 2;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top) -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}
}

function path_3(id) 
{
	var path_id = 3;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top) +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}
}

function path_4(id) 
{
	var path_id = 4;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}
}


function path_5(id) 
{
	var path_id = 5;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		//bubble.style.top	= parseInt(bubble.style.top)  + +"px";
		count[path_id]++;
	}
}
// small bubble paths
function path_6(id) 
{
	var path_id = 6;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}
}

function path_7(id) 
{
	var path_id = 7;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}
}

function path_8(id) 
{
	var path_id = 8;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}
}

function path_9(id) 
{
	var path_id = 9;
	var bubble = document.getElementById(id);

	if(count[path_id] == change) 
	{
		if(cycles[path_id] == 3) 
		{
			phase[path_id] = 1;
			cycles[path_id] = 0;
			count[path_id] = 0;
		} else 
		{
			phase[path_id]++;
			count[path_id] = 0;
			cycles[path_id]++;
		}
	}

	if(count[path_id] < change && phase[path_id] === 1) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 2) 
	{
		bubble.style.left	= parseInt(bubble.style.left) -1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  +1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 3) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}

	if(count[path_id] < change && phase[path_id] === 4) 
	{
		bubble.style.left	= parseInt(bubble.style.left) +1 +"px";
		bubble.style.top	= parseInt(bubble.style.top)  -1 +"px";
		count[path_id]++;
	}
}