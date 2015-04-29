var loopTimer = 0;

function expand(see,element) {
  document.getElementById(see).setAttribute("style", "visibility:hidden;");
  clearInterval(loopTimer);
  loopTimer = setInterval('expandA(\''+element+'\')',8);
}

function expandA(element){
    var target = document.getElementById(element);
    var h = target.offsetHeight;
    var sh = target.scrollHeight;
    if(h < sh){
        h += 5;
    } else {
        clearInterval(loopTimer);
    }
    target.style.height = h+"px";
}

function retract(see,element) {
  clearInterval(loopTimer);
  loopTimer = setInterval('retractA(\''+element+'\')',8);
  document.getElementById(see).setAttribute("style", "visibility:show;");
}

function retractA(element){
    var target = document.getElementById(element);
    var h = target.offsetHeight;
    if(h > 50){
        h -= 5;
    } else {
        target.style.height = "50px";
        clearInterval(loopTimer);
    }
    target.style.height = h+"px";
}

// Once user selects day this code enables the appropriate times to select depending on movie
function fillTime(element)
{
  var day = $(element).val();
  var film = $(element).closest("form").find("input[name=film]").val();
  var timeBox = $(element).closest("form").find("select[name='time']");


  // first enables ticket fields
  $(element).closest("form").find("input[type=number]").prop('disabled',false);


  if(film == "CH")
  {
    if(day == "Mon"|| day == "Tues")
      showTime(1, timeBox);
    else if(day == "Wed"||day == "Thurs"||day == "Fri")
      showTime(6, timeBox);
    else if(day == "Sat"||day == "Sun")
      showTime(12,timeBox);
  }

  else if(film == "AC")
  {
    showTime(9,timeBox);
  }

  else if(film == "AF")
  {
    if(day == "Mon"|| day == "Tues")
      showTime(6, timeBox);
    else if(day == "Sat"||day == "Sun")
      showTime(3,timeBox);
  }

  else if(film =="RC")
  {
    if(day == "Mon"|| day == "Tues")
      showTime(9, timeBox);
    else if(day == "Wed"||day == "Thurs"||day == "Fri")
      showTime(1, timeBox);
    else if(day == "Sat"||day == "Sun")
      showTime(6,timeBox);
  }
}

// Deletes all time dropdown options and inserts only valid time
function showTime(enable, time)
{
  if(enable==12)
  {
    $(time).find('option').remove().end().append('<option value="12">12pm</option>').val('12');
  }
  else if(enable==1)
  {
    $(time).find('option').remove().end().append('<option value="1">1pm</option>').val('1');
  }
  else if(enable==3)
  {
    $(time).find('option').remove().end().append('<option value="3">3pm</option>').val('3');
  }
  else if(enable==6)
  {
    $(time).find('option').remove().end().append('<option value="6">6pm</option>').val('6');
  }
  else if(enable==9)
  {
    $(time).find('option').remove().end().append('<option value="9">9pm</option>').val('9');
  }
}

//Updates ticket prices incase day affects price

function dayChanged(object)
{
  $(object).closest("form").find("input[type=number]").each(function(){
    updatePrice(this);
    });
}

function updatePrice(ticket)
{
  var quantity = $(ticket).val();
  var film = $(ticket).closest("form").find("input[name=film]").val();
  var day = $(ticket).closest("form").find("select[name=day]").val();
  var time = $(ticket).closest("form").find("select[name=time]").val();
  var type = $(ticket).prop("name");

  //gets appropriate per ticket price
  var priceForThisTicketType = priceForTicketType(film, day, time, type);

  // multiplies ticket price by quantity
  var price = quantity * priceForThisTicketType;

  //Clears price field if no tickets chosen
  if(price === 0)
  {
      $(ticket).closest("tr").find("span").html("");
  }
  else 
  {
      $(ticket).closest("tr").find("span").html(price.toFixed(2));
  }

  
  // Assigns current form object as variable for passing
  var form = $(ticket).closest("form");
  
  //Refreshes total price
  updateTotal(form);
}

function priceForTicketType(film,day,time,type)
{
  var cheap;
  if(day=="Mon"||day=="Tue"||time=="1")
    cheap = true;

  else
    cheap = false;

  if(cheap == true)
  {
    if(type == "SA")
      return 12;
    else if(type == "SP")
      return 10;
    else if(type == "SC")
      return 8;
    else if(type == "FA")
      return 25;
    else if(type == "FC")
      return 20;
    else if(type == "B1" || type == "B2" || type == "B3")
      return 20;
  }

  else
  {
    if(type == "SA")
      return 18;
    else if(type == "SP")
      return 15;
    else if(type == "SC")
      return 12;
    else if(type == "FA")
      return 30;
    else if(type == "FC")
      return 25;
    else if(type == "B1" || type == "B2" || type == "B3")
      return 30;
  }
}

function updateTotal(form)
{
  // Note: Uses form paramter to make sure work is done in right form
  
  var total_price=0;
  $(form).find("span[class=subTotal]").each(function()
    {
      // Only adds where there are values (tickets have been chosen)
      if($(this).html() != "")
      {
      total_price += parseFloat($(this).html());
      }
    });

  // Write total for user to see
  $(form).find("span[class=total]").html(total_price.toFixed(2));

  //changes hidden value of total for submitting
  $(form).find("input[name=price]").val(total_price);
}

function submit()
{
  if ($(form).find("input[name=price]").val()==0)
    alert("Need to buy at least one ticket");
}

// Used for spped in coding auto opens a form on page load
/*
$(document).ready(function()
{
  expand('see4','div4');
});
*/
