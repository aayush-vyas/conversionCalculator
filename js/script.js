window.onload = function(){
    document.getElementById('length').click();
}
var options_length = ["Meter", "Kilometer", "Centimeter",  "Milimeter"];
var options_temp = ["Celsius", "Kelvin", "Fahrenheit"];
var options_area = ["Square Meter", "Square Kilometer","Square Centimeter","Square Square Micrometer","Hectare","Square Mile","Square Yard","Square Foot","Square Inch","Acre"];
var options_volume = ["Cubic Meter", "Cubic Kilometer", "Cubic Centimeter","Cubic Milimeter","Liter","Milimeter","US Gallon","US Quart","US Pint","US Cup","US Fluid Ounce","US Table Spoon","US Tea Spoon","Imerial Gallon", "Imperial Quart","Imerial Pint","Imperial Fluid Ounce","Imperial Table Spoon","Imerial Tea Spoon","Cubic Mile","Cubic Yard","Cubic Foot","Cubic Inch"];
var options_weight = ["Kilogram","Gram","Milligram","Metric Ton","Long Ton"];
var options_time = ["Second","Millisecond","Microsecond","Nanosecond","Picosecond","Minute","Hour","Day","Week","Month","Year"];

var typee="length";

function unitType(type){
  typee=type;

  let new_array;
  switch(type){
    case 'length':
      new_array = [...options_length];
      break;
    case 'temperature':
      new_array = [...options_temp];
      break;
    case 'area':
      new_array = [...options_area];
      break;
    case 'volume':
      new_array = [...options_volume];
      break;
    case 'weight':
      new_array = [...options_weight];
      break;
    case 'time':
      new_array = [...options_time]; 
      break;
  }
  // let list = document.getElementByClass("unit");
  $('.unit').empty();
  for(var i=0; i < new_array.length;i++){
   
    var el = document.createElement("option");
    el.textContent = new_array[i];
    el.value = new_array[i];
    // list.appendChild(el);
    $('.unit').append(el);
  }
  $("#toSelect").val($("#toSelect :first").val());
  $("#fromSelect").val($("#fromSelect:first").val());

  // console.log(type);

  changeEvent();
}

$(document).ready(function(){
  $('#toSelect').on('change', changeEvent);
  $('#fromSelect').on('change', changeEvent);
  

$('#inputConversion').on('input',changeEvent);

});


function changeEvent(){
  var inputVal = $('#inputConversion').val();
  // var unitType = $('.tablink').value;

  // console.log($("#fromSelect").val());
  $.ajax({  
    type: 'POST',  
    url: '/ConversionUnit/ConversionCalculator/demo.php', 
    data: {
      'inputVal': inputVal,
      'toSelect' : $("#toSelect").val(),
      'fromSelect' : $("#fromSelect").val(),
      'unitType' : typee
  },
    success: function(response) {
        $('#outputConversion').val(response);
        console.log(response);
    },
    error : function(response){
      
    } 
  });
}
