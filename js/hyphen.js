$.fn.hyphenate = function() {
	var RusA = "[абвгдеёжзийклмнопрстуфхцчшщъыьэюя]";
	var RusV = "[аеёиоуыэю\я]";
	var RusN = "[бвгджзклмнпрстфхцчшщ]";
	var RusX = "[йъь]";
	var Hyphen = "\xAD";
	
	var re1 = new RegExp("("+RusX+")("+RusA+RusA+")","ig");
	var re2 = new RegExp("("+RusV+")("+RusV+RusA+")","ig");
	var re3 = new RegExp("("+RusV+RusN+")("+RusN+RusV+")","ig");
	var re4 = new RegExp("("+RusN+RusV+")("+RusN+RusV+")","ig");
	var re5 = new RegExp("("+RusV+RusN+")("+RusN+RusN+RusV+")","ig");
	var re6 = new RegExp("("+RusV+RusN+RusN+")("+RusN+RusN+RusV+")","ig");
	console.log(this);
	this.each(function(){
		var text=$(this).html();
		text = text.replace(re1, "$1"+Hyphen+"$2");
		text = text.replace(re2, "$1"+Hyphen+"$2");
		text = text.replace(re3, "$1"+Hyphen+"$2");
		text = text.replace(re4, "$1"+Hyphen+"$2");
		text = text.replace(re5, "$1"+Hyphen+"$2");
		text = text.replace(re6, "$1"+Hyphen+"$2");
		$(this).html(text);
	});
};