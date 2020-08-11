/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#add_text").click(function(){
    var add_text = new fabric.IText('Edit Here', { 
    left: 20, 
    top: 30,
    fontSize:30,
    fontFamily: 'arial',
    editable : true
  });
 add_text.initBehavior();
  canvas.add(add_text);
  canvas.setActiveObject(add_text);
});       

$("#font-family").change(function(){
  	var font_style = $(this).val();
	if(font_style=='')
	{
		alert('Please select a Font Style');
		return false;
	}
	var tObj = canvas.getActiveObject();
	//Check that text is selected
	if(tObj==undefined)
	{
		alert('Please select a Text');
		return false;
	}
	tObj.set({
		fontFamily: font_style
	});
	canvas.renderAll();
});

$("#text-color").change(function(){
  	var text_color = $(this).val();
	
	var tObj = canvas.getActiveObject();
	//Check that text is selected
	
	tObj.set({
		fill: text_color
	});
	canvas.renderAll();
});

$("#text-color").change(function(){
  	var text_color = $(this).val();
	
	var tObj = canvas.getActiveObject();
	//Check that text is selected
	
	tObj.set({
		fill: text_color
	});
	canvas.renderAll();
});
          