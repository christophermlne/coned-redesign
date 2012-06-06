// Javascript file to create the rounded cornersvar boxes;var subboxes;var currentItem = 0;var rc_box_first_time = true;var rc_box_prev_sub = false;function createRoundCorners(){	boxes = getElementsByClassName('rc_box');	nextItem();}function nextItem(){	if (currentItem < boxes.length)	{		if (rc_box_first_time)		{			subboxes = getElementsByClassName('rc_box', 'div', boxes[currentItem]);			rc_box_first_time = false;		}		else		{			subboxes = '';			currentItem++;			rc_box_first_time = true;		}				if (subboxes.length > 0)		{			rc_box_prev_sub = true;			addSubHTML(subboxes);		}		else		{			if (rc_box_prev_sub)			{				var content = boxes[currentItem - 1].getElementsByTagName('div');				rc_box_prev_sub = false;				addHTML(content[0]);			}			else			{				var content = boxes[currentItem].getElementsByTagName('div');				addHTML(content[0]);			}		}	}}function addHTML(item){	var HTML = item.innerHTML;		var arr = getButtonWidth(item);				item.innerHTML = '';	item.innerHTML = arr[0] + '<div class="content"><div class="rc_top"></div>' + HTML + '</div><div class="rc_bottom"><div></div></div>' + arr[1];		currentItem++;	rc_box_first_time = true;	nextItem();}function addSubHTML(subitem){		var i = 0;	var len_i = subitem.length;	for (i; i < len_i; i++)	{				var subcontent = subitem[i].getElementsByTagName('div');						var arr = getButtonWidth(subcontent[0]);						var subHTML = subcontent[0].innerHTML;		subcontent[0].innerHTML = ''		subcontent[0].innerHTML = arr[0] + '<div class="content"><div class="rc_top"></div>' + subHTML + '</div><div class="rc_bottom"><div></div></div>' + arr[1];	}		nextItem();}function getButtonWidth(item){	var arr = new Array();		if (item.parentNode.parentNode != null)	{		if (item.parentNode.parentNode.className == "fl_left" || item.parentNode.parentNode.className == "fl_left mr_5")		{			var padding = 18;		}	}		if (item.className == "btnBlack" || item.className == "btnGreen" || item.className == "btnGreenNoSwirl")	{		if (item.className == "btnGreen")		{			var swirlStart = '<div class="btn_swirl"><span class="swirl"></span>';			var swirlEnd = '</div>';		}		else		{			var swirlStart = '';			var swirlEnd = '';		}		var width = item.offsetWidth + padding;	}		if (width != null)	{		var htmlStrStart = '<div style="width: ' + width + 'px">' + swirlStart;		var htmlStrEnd = '</div>' + swirlEnd;	}	else	{		var htmlStrStart = '';		var htmlStrEnd = '';	}		arr.push(htmlStrStart);	arr.push(htmlStrEnd);		return arr;}//createRoundCorners();